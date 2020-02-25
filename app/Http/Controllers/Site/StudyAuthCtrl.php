<?php

namespace App\Http\Controllers\Site;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRegisterRequest;
use App\Http\Requests\EmployeeRegisterRequests;
use App\Models\StudyStaticNames;
use App\Models\MilitrayService;
use App\Models\SelectImages;
use App\Models\StaticNames;
use App\Models\StudyCompany;
use App\Models\StudyEmployee;
use App\Notifications\StudyCompanyRequest;
use App\Notifications\StudyEmployeeRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use helpers;
class StudyAuthCtrl extends Controller
{
   //show the select page
   public function Select()
   {
        $names = StudyStaticNames::get(['select_employee','select_employee_ar','select_employee_slug','select_employee_slug_ar','select_company','select_company_ar','select_company_slug','select_company_slug_ar'])->first();

        $companyImage = SelectImages::where('selectType','IStudy')->where('type','Company')->get(['image'])->first();

        $employeeImage = SelectImages::where('selectType','IStudy')->where('type','Employee')->get(['image'])->first();

       //check if there is loged in user
       if(Auth::guest()){

           return view('study.study-select',compact('names','companyImage','employeeImage'));
       }

       if(auth()->user()->type == 6){
           return redirect()->route('studyCompany');
       } elseif(auth()->user()->type == 5){
           return redirect()->route('studyEmployees');
       }else{

            return view('study.study-select',compact('names','companyImage','employeeImage'));
        }

       return redirect()->to('/');

   }

   //show companines form
   public function showCompanyForm()
   {
       if(Auth::guest()){
           $names = StudyStaticNames::first();
           $globalNames = StaticNames::first();
           return view('study.companyAuth',compact('names','globalNames'));
       }
       return redirect()->to('/');
   }

   //company register
   public function Companyregister(CompanyRegisterRequest $request)
   {

       //add to User Table
       $user = helpers::createUser(request('name'),request('password'),request('email'),5);

       $data = $request->all();

       //store the image if exist
       if(request('image')){

           $data['image'] = helpers::savePhoto('image','studyCompanies',$request);
       } else{
           $data['image'] = null;
       }

        $data['slug'] = Str::slug(request('name'),'-');
        $data['status'] = 0;

        $data['user_id'] = $user->id;
        $company = StudyCompany::create($data);

         //update the slug make it unique by adding the id
        $slug = Str::slug($company->name,'-') . '-' . uniqid();

        StudyCompany::whereId($company->id)->update([
             'slug' => $slug,
         ]);
       //login the user after register
       Auth::login($user);

       //notify all Admins
       $admins = Admin::get();
       foreach($admins as $admin){

           $admin->notify(new StudyCompanyRequest);
       }
       return redirect()->route('studyEmployees');
   }

   public function companyLogin(Request $request)
   {
        $this->validate($request , [
               'email' => 'required',
               'password' => 'required',
            ]);

       $email = request('email');
       $password = Hash::check(request('password'), User::select('password')->where('email', $email)->get());

       $select_email = User::where(['email'=> $email])->first();
       $select_password = User::where('password', $password)->first();

       if (isset($select_email->password) && Hash::check(request('password'), $select_email->password) && ($select_email->type == 5) )
       {
           Auth::login($select_email);

           return redirect()->route('studyEmployees');
       }else{
           Session::flash('error' , trans('Email or Password not correct'));

           return redirect()->route('studyCompanyAuth');
       }

   }

   //employee Functions

   public function showEmployeeForm()
   {
       $names = StudyStaticNames::first();
       $globalNames = StaticNames::first();
       $services = MilitrayService::latest()->get();

       if(Auth::guest()){
           return view('study.employeeAuth',compact('names','globalNames','services'));
       }

        return view('study.employeeAuth',compact('names','globalNames','services'));

   }

   //register new Employee

   public function employeeRegister(EmployeeRegisterRequests $request)
   {
        //check to see if the to date is greater than the from
        if(request('company_name_first')){
            if(!(request('company_from_date_first') < request('company_to_date_first'))){
                    return back()->with('error', 'The First Experience Company To Date Must Be Greater Than From Date');
            }
        }

        if(request('company_name_second')){

            if(!(request('company_from_date_second') < request('company_to_date_second'))){
                    return back()->with('error', 'The Second Experience Company To Date Must Be Greater Than From Date');
            }
        }

        if(request('company_name_third')){

            if(!(request('company_from_date_third') < request('company_to_date_third'))){
                    return back()->with('error', 'The Third Experience Company To Date Must Be Greater Than From Date');
            }
        }

        $data = $request->all();

       //add to User Table
       $user = helpers::createUser(request('name'),request('password'),request('email'),6);

       //store the image if exist
       if(request('image')){
           $data['image'] = helpers::savePhoto('image','studyEmployee',$request);
       }

       $data['slug'] = Str::slug(request('name'),'-');

       $data['status'] = 0;

       $data['user_id'] = $user->id;
       //add to employee table

       $employee =  StudyEmployee::create($data);

         //update the slug make it unique by adding the id
         $slug = Str::slug($employee->name,'-') . '-' . uniqid();

         StudyEmployee::whereId($employee->id)->update([
             'slug' => $slug,
         ]);

         // insert the certificates
       if(request('certificates')) {
             helpers::certificates('certificates',3,$employee->id,'studyCertificates',$request);
         }

          if(request('company_name_first')){
              helpers::workExperiences(request('company_name_first'),request('company_from_date_first'),request('company_to_date_first'),3,$employee->id);
          }
          if(request('company_name_second')){
              helpers::workExperiences(request('company_name_second'),request('company_from_date_second'),request('company_to_date_second'),3,$employee->id);
          }
          if(request('company_name_third')){
              helpers::workExperiences(request('company_name_third'),request('company_from_date_third'),request('company_to_date_third'),3,$employee->id);
          }

       //login the user after register
       Auth::login($user);

       // notify all Admins
       $admins = Admin::get();
       foreach($admins as $admin){

           $admin->notify(new StudyEmployeeRequest);
       }

       return redirect()->route('studyCompany');
   }

   public function employeeLogin(Request $request)
   {
        $this->validate($request , [
               'email' => 'required',
               'password' => 'required',
            ]);

       $email = request('email');
       $password = Hash::check(request('password'), User::select('password')->where('email', $email)->get());

       $select_email = User::where(['email'=> $email])->first();
       $select_password = User::where('password', $password)->first();

       if (isset($select_email->password) && Hash::check(request('password'), $select_email->password) && ($select_email->type == 6) )
       {
           Auth::login($select_email);

           return redirect()->route('studyCompany');
       }else{
           Session::flash('error' , trans('Email or Password not correct'));

           return redirect()->route('studyEmployeeAuth');
       }

   }
}
