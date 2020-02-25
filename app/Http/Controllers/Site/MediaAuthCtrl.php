<?php

namespace App\Http\Controllers\Site;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRegisterRequest;
use App\Http\Requests\EmployeeRegisterRequests;
use App\Models\MediaCompany;
use App\Models\MediaEmployee;
use App\Models\MediaStaticNames;
use App\Models\MilitrayService;
use App\Models\SelectImages;
use App\Models\StaticNames;
use App\Notifications\MediaCompanyRequest;
use App\Notifications\mediaEmployeeRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use helpers;
class MediaAuthCtrl extends Controller
{
    //
    //show the select page
    public function Select()
    {
        $names = MediaStaticNames::get(['select_employee','select_employee_ar','select_employee_slug','select_employee_slug_ar','select_company','select_company_ar','select_company_slug','select_company_slug_ar'])->first();

        $companyImage = SelectImages::where('selectType','IMedia')->where('type','Company')->get(['image'])->first();

        $employeeImage = SelectImages::where('selectType','IMedia')->where('type','Employee')->get(['image'])->first();

        //check if there is loged in user
        if(Auth::guest()){

            return view('media.media-select',compact('names','companyImage','employeeImage'));
        }

        if(auth()->user()->type == 4){
            return redirect()->route('mediaCompany');
        } elseif(auth()->user()->type == 3){
            return redirect()->route('mediaTalents');
        }else{

            return view('media.media-select',compact('names','companyImage','employeeImage'));
        }

        return redirect()->to('/');

    }

    //show companines form
    public function showCompanyForm()
    {
        $names = MediaStaticNames::first();
        $globalNames = StaticNames::first();

        if(Auth::guest()){
            return view('media.companyAuth',compact('names','globalNames'));
        }

        return view('media.companyAuth',compact('names','globalNames'));
    }

    //company register
    public function Companyregister(CompanyRegisterRequest $request)
    {

        $data = $request->all();
        //add to User Table
        $user = helpers::createUser(request('name'),request('password'),request('email'),3);

        //add to employee table

        //store the image if exist
        if(request('image')){

            $data['image'] = helpers::savePhoto('image','mediaCompanies',$request);
        } else{
            $data['image'] = null;
        }

        $data['slug'] = Str::slug(request('name'),'-');

        $data['status'] = 0;
        $data['user_id'] = $user->id;
        $company = MediaCompany::create($data);

          //update the slug make it unique by adding the id
          $slug = Str::slug($company->name,'-') . '-' . uniqid();

          MediaCompany::whereId($company->id)->update([
              'slug' => $slug,
          ]);
        //login the user after register
        Auth::login($user);

        //notify all Admins
        $admins = Admin::get();
        foreach($admins as $admin){

            $admin->notify(new MediaCompanyRequest);
        }
        return redirect()->route('mediaTalents');
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

        if (isset($select_email->password) && Hash::check(request('password'), $select_email->password) && ($select_email->type == 3) )
        {
            Auth::login($select_email);

            return redirect()->route('mediaTalents');
        }else{
            Session::flash('error' , trans('Email or Password not correct'));

            return redirect()->route('mediaCompanyAuth');
        }

    }

    //employee Functions

    public function showEmployeeForm()
    {
        if(Auth::guest()){
            $names = MediaStaticNames::first();
            $globalNames = StaticNames::first();
            $services = MilitrayService::latest()->get();
            return view('media.employeeAuth',compact('names','globalNames','services'));
        }
        return redirect()->to('/');
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
        $user = helpers::createUser(request('name'),request('password'),request('email'),4);

        //store the image if exist
        if(request('image')){

            $data['image'] = helpers::savePhoto('image','mediaEmployee',$request);
        }

        $data['status'] = 0;
        $data['user_id'] = $user->id;
        $data['slug'] = Str::slug(request('name'),'-');
        //add to employee table

        $employee =  MediaEmployee::create($data);

          //update the slug make it unique by adding the id
        $slug = Str::slug($employee->name,'-') . '-' . uniqid();

        MediaEmployee::whereId($employee->id)->update([
              'slug' => $slug,
          ]);

          // insert the certificates
        if(request('certificates')) {
              helpers::certificates('certificates',2,$employee->id,'mediaCertificates',$request);
          }

        if(request('company_name_first')){
              helpers::workExperiences(request('company_name_first'),request('company_from_date_first'),request('company_to_date_first'),2,$employee->id);
          }
        if(request('company_name_second')){
              helpers::workExperiences(request('company_name_second'),request('company_from_date_second'),request('company_to_date_second'),2,$employee->id);
          }
        if(request('company_name_third')){
              helpers::workExperiences(request('company_name_third'),request('company_from_date_third'),request('company_to_date_third'),2,$employee->id);
          }

        //login the user after register
        Auth::login($user);

        // notify all Admins
        $admins = Admin::get();
        foreach($admins as $admin){

            $admin->notify(new mediaEmployeeRequest);
        }

        return redirect()->route('mediaCompany');
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

        if (isset($select_email->password) && Hash::check(request('password'), $select_email->password) && ($select_email->type == 4) )
        {
            Auth::login($select_email);

            return redirect()->route('mediaCompany');
        }else{
            Session::flash('error' , trans('Email or Password not correct'));

            return redirect()->route('mediaEmployeeAuth');
        }

    }
}
