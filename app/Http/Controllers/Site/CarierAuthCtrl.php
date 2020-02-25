<?php

namespace App\Http\Controllers\Site;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJobsCompanies;
use App\Models\CarierEmployee;
use App\Models\CarierStaticNames;
use App\Models\JobCompany;
use App\Models\MilitrayService;
use App\Models\SelectImages;
use App\Models\StaticNames;
use App\Notifications\CarierCompanyRequest;
use App\Notifications\carierEmployeeRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use helpers;

class CarierAuthCtrl extends Controller
{
    //
    //show the select page
    public function Select()
    {
        //check if there is loged in user
        $names = CarierStaticNames::get(['select_employee','select_employee_ar','select_employee_slug','select_employee_slug_ar','select_company','select_company_ar','select_company_slug','select_company_slug_ar'])->first();

        $companyImage = SelectImages::where('selectType','ICarier')->where('type','Company')->get(['image'])->first();

        $employeeImage = SelectImages::where('selectType','ICarier')->where('type','Employee')->get(['image'])->first();

        if(Auth::guest()){

            return view('carier.carier-select',compact('names','companyImage','employeeImage'));
        }

        if(auth()->user()->type == 1){
            return redirect()->route('carierEmployee');
        }elseif(auth()->user()->type == 2){
            return redirect()->route('carierCompany');
        }else{

            return view('carier.carier-select',compact('names','compaanyImage','employeeImage'));
        }

        return redirect()->to('/');

    }

    public function showCarierForm()
    {
        if(Auth::guest()){
            $names = CarierStaticNames::first();
            $globalNames = StaticNames::first();
            return view('carier.company-login-registerd',compact('names','globalNames'));
        }
        return redirect()->to('/');
    }


    public function Companyregister(Request $request)
    {

        //validate the request
        $this->validate(request(),[
            'name' => 'required|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|numeric',
            'job_title' => 'required|max:255',
            'job_description' => 'required',
            'image' => 'image'
        ]);

        $data = $request->all();
        //add to User Table
        $user = helpers::createUser(request('name'),request('password'),request('email'),1);

        //add to employee table

        //store the image if exist
        if(request('image')){

            $data['image'] = helpers::savePhoto('image','carierCompanies',$request);
        } else{
            $data['image'] = null;
        }

        $data['slug'] = Str::slug(request('name'),'-');
        $data['user_id'] = $suer->id;
        $data['status'] = 0;
          $company = JobCompany::create($data);

          //update the slug make it unique by adding the id
          $slug = Str::slug($company->name,'-') . '-' . uniqid();

          JobCompany::whereId($company->id)->update([
              'slug' => $slug,
          ]);

        //login the user after register
        Auth::login($user);

        //notify all Admins
        $admins = Admin::get();
        foreach($admins as $admin){

            $admin->notify(new CarierCompanyRequest);
        }
        return redirect()->route('carierEmployee');
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
        if (isset($select_email->password) && Hash::check(request('password'), $select_email->password) && ($select_email->type == 1))
        {
            Auth::login($select_email);

            return redirect()->route('carierEmployee');
        }else{
            Session::flash('error' , trans('Email or Password not correct'));

            return redirect()->route('carierCompanyAuth');
        }

    }

    //carier Employees Functions

    //show form
    public function showCarierEmployeeForm()
    {
        $names = CarierStaticNames::first();
        $globalNames = StaticNames::first();
        $services = MilitrayService::latest()->get();

        if(Auth::guest()){
            return view('carier.employee-login-registerd',compact('names','globalNames','services'));
        }

        return view('carier.employee-login-registerd',compact('names','globalNames','services'));
    }


    //employee register
    public function employeeRegister(Request $request)
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

        //validate the request
        $this->validate(request(),[
            'name' => 'required|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|numeric',
            'birth_date'=> 'required',
            'job_title' => 'required|max:255',
            'personal_info' => 'required',
            'image' => 'required|image'
        ]);

        //add to User Table
        $user = helpers::createUser(request('name'),request('password'),request('email'),2);

        $data = $request->all();

        //store the image if exist
        if(request('image')){
            $data['image'] = helpers::savePhoto('image','carierEmployee',$request);
        }

        $data['status'] = 0;
        $data['slug'] = Str::slug(request('name'),'-');
        $data['user_id'] = $user->id;
        //add to employee table
        $employee =  CarierEmployee::create($data);

          //update the slug make it unique by adding the id
          $slug = Str::slug($employee->name,'-') . '-' . uniqid();

          CarierEmployee::whereId($employee->id)->update([
              'slug' => $slug,
          ]);

          // insert the certificates
        if(request('certificates')) {
              helpers::certificates('certificates',1,$employee->id,'carierCertificates',$request);
          }

        //save work Experience
        if(request('company_name_first')){
            helpers::workExperiences(request('company_name_first'),request('company_from_date_first'),request('company_to_date_first'),1,$employee->id);
        }
        if(request('company_name_second')){
            helpers::workExperiences(request('company_name_second'),request('company_from_date_second'),request('company_to_date_second'),1,$employee->id);
        }
        if(request('company_name_third')){
            helpers::workExperiences(request('company_name_third'),request('company_from_date_third'),request('company_to_date_third'),1,$employee->id);
        }
        //login the user after register
        Auth::login($user);

        // notify all Admins
        $admins = Admin::get();
        foreach($admins as $admin){

            $admin->notify(new carierEmployeeRequest);
        }

        return redirect()->route('carierCompany');
    }

    public function EmployeeLogin(Request $request)
    {
         $this->validate($request , [
                'email' => 'required',
                'password' => 'required',
             ]);

        $email = request('email');
        $password = Hash::check(request('password'), User::select('password')->where('email', $email)->get());

        $select_email = User::where(['email'=> $email])->first();
        $select_password = User::where('password', $password)->first();
        if (isset($select_email->password) && Hash::check(request('password'), $select_email->password) && ($select_email->type == 2))
        {
            Auth::login($select_email);

            return redirect()->route('carierCompany');
        }else{
            Session::flash('error' , trans('Email or Password not correct'));

            return redirect()->route('carierEmployeeAuth');
        }

    }
}
