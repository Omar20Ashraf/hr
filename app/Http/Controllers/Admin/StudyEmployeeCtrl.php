<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRegisterRequests;
use App\Models\Certificates;
use App\Models\MilitrayService;
use App\Models\StudyEmployee;
use App\Models\StudyStaticNames;
use App\Models\workExperience;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use helpers;
class StudyEmployeeCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = StudyEmployee::where('status','1')->latest()->get();
        $skill_names = StudyStaticNames::get(['first_skill','second_skill','third_skill','forth_skill'])->first();
        return view('admin.study.employee.index',compact('employees','skill_names'));
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
        $skill_names = StudyStaticNames::get(['first_skill','second_skill','third_skill','forth_skill'])->first();
        return view('admin.study.employee.create',compact('services','skill_names'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRegisterRequests $request)
    {
        $data = $request->all();
        //store Image
        $data['image'] = helpers::savePhoto('image','studyEmployee',$request);
        $data['slug'] = Str::slug(request('name'),'-');

        $employee =  StudyEmployee::create($data);

        //update the slug make it unique by adding the id
        $slug = Str::slug($employee->name,'-') . '-' . uniqid();

        StudyEmployee::whereId($employee->id)->update([
            'slug' => $slug,
        ]);

        // insert the certificates
        if(request('certificates')) {
            helpers::certificates('certificates',3,$employee->id,'study',$request);
        }

        Alert::success(config('app.name'), trans('messages.Added Successfully'));
        return redirect()->route('admin.studyEmployees.index');
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
        $employee = StudyEmployee::find($id);
        $services = MilitrayService::latest()->get();
        $skill_names = StudyStaticNames::get(['first_skill','second_skill','third_skill','forth_skill'])->first();
        return view('admin.study.employee.edit',compact('employee','services','skill_names'));
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
        $data = $request->all();

        $employee = StudyEmployee::find($id);

        //check if there is user
        if($employee->user_id){
            $user = User::where('id',$employee->user_id)->first();
        }

        //check if the name has changed to update the slug
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

        if($request->file('image'))
        {
           $data['image'] = helpers::updatePhoto('image','studyEmployee',$request);

            Storage::delete('public/Images/studyEmployee/'.$employee->image);
        }


        $employee->update($data);

        Alert::success(config('app.name'), trans('messages.Updated Successfully'));

        //redirec to the profile toute if the request came from the user panel not the admin panel
        if(request('site')){
            return redirect()->route('profile',['id' => $user->id,'type' => $user->type]);
        }

        return redirect()->route('admin.studyEmployees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employee = StudyEmployee::find($id);

        //get the certificates
        $certificates = Certificates::where('type',3)->where('user_id',$employee->id)->get();

        //delete the certificate if exist before deleting
        helpers::deleteCertificate($certificates,'studyCertificates');

        // get work experience
        $experiences = workExperience::where('type',3)->where('user_id',$employee->id)->get();

        //delete the work experience if exist before deleting
         foreach ($experiences as $experience){
            $experience->delete();
         }
          //delete the employee image
         if(Storage::delete('public/Images/studyEmployee/'.$employee->image))
         {

            $employee->delete();

            if($employee->user_id)
            {
                //delete from user table
                User::whereId($employee->user_id)->delete();
            }

            Alert::success(config('app.name'), trans('messages.Deleted Successfully') );
            return redirect()->route('admin.studyEmployees.index');
        }


    }

    public function indexRequest()
    {
        //
        $employees = StudyEmployee::where('status','0')->latest()->get();
        $skill_names = StudyStaticNames::get(['first_skill','second_skill','third_skill','forth_skill'])->first();
        //delete the notification if exist
        helpers::deleteNotification(request('notifyId'));

        return view('admin.study.employee.indexRequest',compact('employees','skill_names'));
    }

    public function approveEmployee($id)
    {
        $employee = StudyEmployee::find($id);

        $employee->update([
            'status' => '1',
        ]);

        Alert::success(config('app.name'), trans('messages.Approved Successfully') );
        return redirect()->route('admin.studyEmployeesRequests');
    }
}
