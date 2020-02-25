<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarierEmployeeValidation;
use App\Http\Requests\EmployeeRegisterRequests;
use App\Models\CarierEmployee;
use App\Models\CarierStaticNames;
use App\Models\Certificates;
use App\Models\MilitrayService;
use App\Models\workExperience;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use helpers;
class CarierEmployeesCtrl extends Controller
{

   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       //
       $employees = CarierEmployee::where('status','1')->latest()->get();
       $skill_names = CarierStaticNames::get(['first_skill','second_skill','third_skill','forth_skill'])->first();
       return view('admin.jobs.employee.index',compact('employees','skill_names'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       //
        $services = MilitrayService::latest()->get();
        $skill_names = CarierStaticNames::get(['first_skill','second_skill','third_skill','forth_skill'])->first();
       return view('admin.jobs.employee.create',compact('services','skill_names'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
        //validation
        $this->validate(request(),[
            'name' => 'required|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|numeric',
            'status' => 'required',
            'birth_date'=> 'required',
            'job_title' => 'required|max:255',
            'personal_info' => 'required',
            'image' => 'required|image'
        ]);

        $data = $request->all();
        //store Image
        $data['image'] = helpers::savePhoto('image','carierEmployee',$request);
        $data['slug'] = Str::slug(request('name'),'-');

        $employee =  CarierEmployee::create($data);

        //update the slug make it unique by adding the id
        $slug = Str::slug($employee->name,'-') . '-' . uniqid();

        CarierEmployee::whereId($employee->id)->update([
            'slug' => $slug,
        ]);

        // insert the certificates
        if(request('certificates')) {
            helpers::certificates('certificates',1,$employee->id,'carier',$request);
        }

         Alert::success(config('app.name'), trans('messages.Added Successfully') );
         return redirect()->route('admin.carierEmployees.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       //
       $employee = CarierEmployee::find($id);
       $services = MilitrayService::latest()->get();
       $skill_names = CarierStaticNames::get(['first_skill','second_skill','third_skill','forth_skill'])->first();
       return view('admin.jobs.employee.edit',compact('employee','services','skill_names'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(EmployeeRegisterRequests $request, $id)
   {

        $employee = CarierEmployee::find($id);

        $data = $request->all();

        //check if there is user
        if($employee->user_id){
            $user = User::where('id',$employee->user_id)->first();
        }

       //check ig the name has changed to update the slug
       if(!($employee->name == request('name'))){
            //update the slug make it unique by adding the id
            $data['slug'] = Str::slug(request('name'),'-') . '-' . uniqid();

            if($employee->user_id){
                $user->name = request('name');
                $user->save();
            }

       } else{
            $data['slug'] = $employee->slug;
       }

       //save the new email in users table
       if(!($employee->email == request('email'))){
           if($employee->user_id){
               $user->email = request('email');
               $user->save();
           }
       }

       //check if there is password change came from edit profile
       if(request('password')){
           // dd(request('password'));
           $password = Hash::make(request('password'));
           $user->password = $password;
           $user->save();
       }

       $data['image'] = $employee->image;

       if($request->file('image'))
       {
          $data['image'] = helpers::updatePhoto('image','carierEmployee',$request);
           Storage::delete('public/Images/carierEmployee/'.$employee->image);
       }

       $employee->updata($data);

       Alert::success(config('app.name'), trans('messages.Updated Successfully') );

       //redirec to the profile toute if the request came from the user panel not the admin panel
       if(request('site')){
           return redirect()->route('profile',['id' => $user->id,'type' => $user->type]);
       }

       return redirect()->route('admin.carierEmployees.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       $employee = CarierEmployee::find($id);

       //get the certificates
       $certificates = Certificates::where('type',1)->where('user_id',$employee->id)->get();

       //delete the certificate if exist before deleting
        helpers::deleteCertificate($certificates,'carierCertificates');

       // get work experience
       $experiences = workExperience::where('type',1)->where('user_id',$employee->id)->get();

        //delete the work experience if exist before deleting
         foreach ($experiences as $experience){
            $experience->delete();
         }

        //delete the employee image
       if(Storage::delete('public/Images/carierEmployee/'.$employee->image))
       {
           $employee->delete();

           if($employee->user_id)
           {
               //delete from user table
               User::whereId($employee->user_id)->delete();
           }
           Alert::success(config('app.name'), trans('messages.Deleted Successfully'));
           return redirect()->route('admin.carierEmployees.index');
       }

   }

   public function indexRequest()
   {
       //
       $employees = CarierEmployee::where('status','0')->latest()->get();
       $skill_names = CarierStaticNames::get(['first_skill','second_skill','third_skill','forth_skill'])->first();
       //delete the notification if exist

       helpers::deleteNotification(request('notifyId'));
       return view('admin.jobs.employee.indexRequest',compact('employees','skill_names'));
   }

   public function approveEmployee($id)
   {
       $employee = CarierEmployee::find($id);

       $employee->update([
           'status' => '1',
       ]);

       Alert::success(config('app.name'), trans('messages.Approved Successfully') );
       return redirect()->route('admin.carierEmployeesRequests');
   }
}
