<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\CarierEmployee;
use App\Models\CarierStaticNames;
use App\Models\MediaEmployee;
use App\Models\MediaStaticNames;
use App\Models\StaticNames;
use App\Models\StudyEmployee;
use App\Models\StudyStaticNames;
use App\User;
use Illuminate\Http\Request;
use helpers;
use Alert;
class EditEmployeeCtrl extends Controller
{
    //

    public function showEmployeeExperience($slug,$userType)
    {
        # code...

        $globalNames = StaticNames::get(['work_experience','work_experience_ar'])->first();

        if ($userType == 2) {
            # code...
            $sliderType = 'ICarier';
            $backImage = 'back-2.png';

            $employee = CarierEmployee::where('slug',$slug)->first();

            $experienceType = 1;

            return view('editProfile.editEmployeeExperience',compact('employee','globalNames','userType','experienceType','sliderType','backImage'));

        }elseif ($userType == 4){

            $sliderType = 'IMedia';
            $backImage = 'back1-2.png';

            $employee = MediaEmployee::where('slug',$slug)->first();


            $experienceType = 2;

            return view('editProfile.editEmployeeExperience',compact('employee','globalNames','userType','experienceType','sliderType','backImage'));
        }elseif ($userType == 6){

            $sliderType = 'IStudy';
            $backImage = 'back2-2.png';

            $employee = StudyEmployee::where('slug',$slug)->first();

            $experienceType = 3;

            return view('editProfile.editEmployeeExperience',compact('employee','globalNames','userType','experienceType','sliderType','backImage'));

        }

    }

    public function createEmployeeExperience($userType,$employee_id)
    {
        # code...

        if ($userType == 2){
            # code...
            $sliderType = 'ICarier';
            $backImage = 'back-2.png';

            $names = CarierStaticNames::get(['company_name_ar','company_name'])->first();
            $employee = CarierEmployee::where('id',$employee_id)->first();

            $experienceType = 1;
            $userId = $employee->id;
            // dd($userId);

            return view('editProfile.createEmployeeExperience',compact('employee','userType','userId','experienceType','sliderType','backImage','names'));

        }elseif ($userType == 4){

            $sliderType = 'IMedia';
            $backImage = 'back1-2.png';

            $names = MediaStaticNames::get(['company_name_ar','company_name'])->first();

            $employee = MediaEmployee::where('id',$employee_id)->first();
            $userId = $employee->id;
            $experienceType = 2;
            return view('editProfile.createEmployeeExperience',compact('employee','userType','userId','experienceType','sliderType','backImage','names'));
        }elseif ($userType == 6){

            $sliderType = 'IStudy';
            $backImage = 'back2-2.png';

            $names = StudyStaticNames::get(['company_name_ar','company_name'])->first();

            $employee = StudyEmployee::where('id',$employee_id)->first();

            $userId = $employee->id;

            $experienceType = 3;

            return view('editProfile.createEmployeeExperience',compact('employee','userType','userId','experienceType','sliderType','backImage','names'));

        }
    }

    public function storeExperience(Request $request)
    {
        //check to see if the to date is greater than the from
        $this->validate(request(),[
            "name"  => "required",
            "from_date"  => "required|date",
            "to_date"  => "required|date",
        ]);


        if(!(request('from_date') < request('to_date'))){
                return back()->with('error', 'The Company To Date Must Be Greater Than From Date');
        }


        $userType = request('userType');

        $experienceType = request('experienceType');

        helpers::workExperiences(request('name'),request('from_date'),request('to_date'),$experienceType,request('user_id'));

        Alert::success(config('app.name'), trans('messages.Added Successfully') );

        return redirect()->route('showEmployeeExperience',['slug'=>request('slug'),'userType'=>$userType]);
    }

    //Certificates Routes
    public function showEmployeeCertificates($slug,$userType)
    {
        # code...

        if ($userType == 2) {
            # code...
            $sliderType = 'ICarier';
            $backImage = 'back-2.png';

            $employee = CarierEmployee::where('slug',$slug)->first();

            $names = CarierStaticNames::get(['certificates_ar','certificates'])->first();

            $certificatesType = 1;

            $certificatesFolder = 'carierCertificates';
            return view('editProfile.showEmployeeCertificates',compact('employee','names','userType','certificatesType','certificatesFolder','sliderType','backImage'));

        }elseif ($userType == 4){
            // dd('4');
            $sliderType = 'IMedia';
            $backImage = 'back1-2.png';

            $employee = MediaEmployee::where('slug',$slug)->first();

            $names = MediaStaticNames::get(['certificates_ar','certificates'])->first();

            $certificatesType = 2;

            $certificatesFolder = 'mediaCertificates';

            return view('editProfile.showEmployeeCertificates',compact('employee','names','userType','certificatesType','certificatesFolder','sliderType','backImage'));
        }elseif ($userType == 6){

            $sliderType = 'IStudy';
            $backImage = 'back2-2.png';

            $employee = StudyEmployee::where('slug',$slug)->first();

            $names = StudyStaticNames::get(['certificates_ar','certificates'])->first();

            $certificatesType = 3;

            $certificatesFolder = 'studyCertificates';

            return view('editProfile.showEmployeeCertificates',compact('employee','names','userType','certificatesType','certificatesFolder','sliderType','backImage'));

        }

    }

    public function createEmployeeCertificates()
    {
        # code...

        $userType = request('userType');
        $employee_id = request('employee_id');
        $folderName = request('folderName');

        if ($userType == 2){
            # code...
            $sliderType = 'ICarier';
            $backImage = 'back-2.png';

            $employee = CarierEmployee::where('id',$employee_id)->first();

            $names = CarierStaticNames::get(['certificates_ar','certificates'])->first();

            $certificatesType = 1;
            $userId = $employee->id;
            // dd($userId);


            return view('editProfile.createEmployeeCertificates',compact('employee','userType','userId','certificatesType','folderName','sliderType','backImage','names'));

        }elseif ($userType == 4){
            $sliderType = 'IMedia';
            $backImage = 'back1-2.png';

            $employee = MediaEmployee::where('id',$employee_id)->first();

            $userId = $employee->id;

            $names = MediaStaticNames::get(['certificates_ar','certificates'])->first();

            $certificatesType = 2;

            return view('editProfile.createEmployeeCertificates',compact('employee','userType','userId','certificatesType','folderName','sliderType','backImage','names'));
        }elseif ($userType == 6){

            $sliderType = 'IStudy';
            $backImage = 'back2-2.png';

            $employee = StudyEmployee::where('id',$employee_id)->first();

            $userId = $employee->id;

            $names = StudyStaticNames::get(['certificates_ar','certificates'])->first();

            $certificatesType = 3;

            return view('editProfile.createEmployeeCertificates',compact('employee','userType','userId','certificatesType','folderName','sliderType','backImage','names'));

        }
    }

    public function storeCertificates(Request $request)
    {
        $this->validate(request(),[
            "certificate"  => "required",
        ]);


        $userType = request('userType');

        $certificatesType = request('certificatesType');

        helpers::certificate('certificate',request('certificatesType'),request('user_id'),request('folderName'),$request);

        Alert::success(config('app.name'), trans('messages.Added Successfully'));

        return redirect()->route('showEmployeeCertificates',['slug'=>request('slug'),'userType'=>$userType]);
    }
}
