<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\CarierEmployee;
use App\Models\CarierStaticNames;
use App\Models\JobCompany;
use App\Models\MediaCompany;
use App\Models\MediaEmployee;
use App\Models\MediaStaticNames;
use App\Models\MilitrayService;
use App\Models\StaticNames;
use App\Models\StudyCompany;
use App\Models\StudyEmployee;
use App\Models\StudyStaticNames;
use App\User;
use Illuminate\Http\Request;

class UsersCtrl extends Controller
{
    //

    public function profile($id,$type)
    {
        # code...

        $globalNames = StaticNames::first();

        $user = User::where('id',$id)->where('type',$type)->first();

        if($type == 1)
        {
            $company = JobCompany::where('user_id',$user->id)->first();
            $names = CarierStaticNames::first();

            return view('carier.companyProfile',compact('company','names','globalNames'));

        }elseif ($type == 2) {
            # code...
            $employee = CarierEmployee::where('user_id',$user->id)->first();
            $names = CarierStaticNames::first();
            $militray = MilitrayService::where('id',$employee->military_service)->first();

            return view('carier.employeeProfile',compact('employee','names','globalNames','militray'));

        }elseif ($type == 3){

            $company = MediaCompany::where('user_id',$user->id)->first();

            $names = MediaStaticNames::first();

            return view('media.companyProfile',compact('company','names','globalNames'));

        }elseif ($type == 4){

            $employee = MediaEmployee::where('user_id',$user->id)->first();
            $names = MediaStaticNames::first();
            $militray = MilitrayService::where('id',$employee->military_service)->first();

            return view('media.employeeProfile',compact('employee','names','globalNames','militray'));
        }elseif ($type == 5){

            $company = StudyCompany::where('user_id',$user->id)->first();
            $names = StudyStaticNames::first();

            return view('study.companyProfile',compact('company','names','globalNames'));
        }else{

            $employee = StudyEmployee::where('user_id',$user->id)->first();

            $names = StudyStaticNames::first();

            $militray = MilitrayService::where('id',$employee->military_service)->first();
            return view('study.employeeProfile',compact('employee','names','globalNames','militray'));

        }

    }


    //show edit form for carier company profile
    public function editCarierCompany($slug)
    {
        # code...
        $sliderType = 'ICarier';
        $backImage = 'back-2.png';
        $updateRouteName = 'updateCarierCompany';
        // ModelName to use it in the validation ['StoreJobsCompanies']
        $modelName = 'JobCompany';

        $imageFolderName = 'carierCompanies';
        $company = JobCompany::where('slug',$slug)->first();
        $names = CarierStaticNames::first();
        $globalNames = StaticNames::first();
        return view('editProfile.editProfileCompany',compact('company','names','globalNames','sliderType','backImage','updateRouteName','modelName','imageFolderName'));
    }

    //show edit form for media company profile
    public function editMediaCompany($slug)
    {
        # code...

        // dd($slug);
        $sliderType = 'IMedia';
        $backImage = 'back1-2.png';
        $imageFolderName = 'mediaCompanies';
        $updateRouteName = 'updateMediaCompany';

        // ModelName to use it in the validation ['StoreJobsCompanies']
        $modelName = 'MediaCompany';

        $company = MediaCompany::where('slug',$slug)->first();
        $names = MediaStaticNames::first();
        $globalNames = StaticNames::first();
        return view('editProfile.editProfileCompany',compact('company','names','globalNames','sliderType','backImage','updateRouteName','modelName','imageFolderName'));
    }

    //show edit form for study company profile
    public function editStudyCompany($slug)
    {
        # code...
        $sliderType = 'IStudy';
        $backImage = 'back2-2.png';
        $imageFolderName = 'studyCompanies';
        $updateRouteName = 'updateStudyCompany';
        // ModelName to use it in the validation ['StoreJobsCompanies']
        $modelName = 'StudyCompany';

        $company = StudyCompany::where('slug',$slug)->first();
        $names = StudyStaticNames::first();
        $globalNames = StaticNames::first();

        return view('editProfile.editProfileCompany',compact('company','names','globalNames','sliderType','backImage','updateRouteName','modelName','imageFolderName'));
    }


    //show edit form for carier Employee
    public function editCarierEmployee($slug)
    {
        # code...
        $sliderType = 'ICarier';
        $backImage = 'back-2.png';
        $updateRouteName = 'updateCarierEmployee';
        // ModelName to use it in the validation ['StoreJobsCompanies']
        $modelName = 'CarierEmployee';

        //check to see if the employee type is study or media to show the video input
        $video = false;

        $imageFolderName = 'carierEmployee';
        $employee = CarierEmployee::where('slug',$slug)->first();
        $names = CarierStaticNames::first();
        $globalNames = StaticNames::first();
        $services = MilitrayService::latest()->get();

        return view('editProfile.editEmployeeProfile',compact('employee','names','globalNames','sliderType','backImage','updateRouteName','modelName','imageFolderName','services','video'));
    }

    //show edit form for media company profile
    public function editMediaEmployee($slug)
    {
        # code...


        $sliderType = 'IMedia';
        $backImage = 'back1-2.png';
        $imageFolderName = 'mediaEmployee';
        $updateRouteName = 'updateMediaEmployee';

        $names = MediaStaticNames::first();
        $globalNames = StaticNames::first();
        $services = MilitrayService::latest()->get();

        $modelName = 'MediaEmployee';

        $employee = MediaEmployee::where('slug',$slug)->first();
        //check to see if the employee type is study or media to show the video input
        $video = true;
        // dd($employee);

        return view('editProfile.editEmployeeProfile',compact('employee','names','globalNames','sliderType','backImage','updateRouteName','modelName','imageFolderName','services','video'));
    }

    //show edit form for study company profile
    public function editStudyEmployee($slug)
    {
        # code...
        $sliderType = 'IStudy';
        $backImage = 'back2-2.png';
        $imageFolderName = 'studyEmployee';
        $updateRouteName = 'updateStudyEmployee';
        // ModelName to use it in the validation ['StoreJobsCompanies']
        $modelName = 'StudyEmployee';

        //check to see if the employee type is study or media to show the video input
        $video = true;

        $names = StudyStaticNames::first();
        $globalNames = StaticNames::first();
        $services = MilitrayService::latest()->get();

        $employee = StudyEmployee::where('slug',$slug)->first();

        return view('editProfile.editEmployeeProfile',compact('employee','names','globalNames','sliderType','backImage','updateRouteName','modelName','imageFolderName','services','video'));
    }
}
