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
use Illuminate\Http\Request;

class SectionsCtrl extends Controller
{
    //

    public function carierCompany($slug)
    {
        $company = JobCompany::where('slug',$slug)->first();
        $names = CarierStaticNames::first();
        $globalNames = StaticNames::first();

        return view('carier.company-details',compact('company','names','globalNames'));
    }

    public function carierEmployee($slug)
    {
        $employee = CarierEmployee::where('slug',$slug)->first();
        $globalNames = StaticNames::first();
        $names = CarierStaticNames::first();
        $militray = MilitrayService::where('id',$employee->military_service)->first();

        return view('carier.employee-details',compact('employee','names','globalNames','militray'));
    }

    //Media Functions

    //show single company details
    public function mediaCompany($slug)
    {
        $company = MediaCompany::where('slug',$slug)->first();
        $names = MediaStaticNames::first();
        $globalNames = StaticNames::first();
        return view('media.company-details',compact('company','names','globalNames'));
    }

    //show single employee details
    public function mediaEmployee($slug)
    {
        $employee = MediaEmployee::where('slug',$slug)->first();
        $names = MediaStaticNames::first();
        $globalNames = StaticNames::first();
        $militray = MilitrayService::where('id',$employee->military_service)->first();
        return view('media.employee-details',compact('employee','names','globalNames','militray'));
    }


    //Study Functions

    //show single company details
    public function studyCompany($slug)
    {
        $company = StudyCompany::where('slug',$slug)->first();
        $names = StudyStaticNames::first();
        $globalNames = StaticNames::first();
        return view('study.company-details',compact('company','names','globalNames'));
    }

    //show single employee details
    public function studyEmployee($slug)
    {
        $employee = StudyEmployee::where('slug',$slug)->first();
        $names = StudyStaticNames::first();
        $globalNames = StaticNames::first();
        $militray = MilitrayService::where('id',$employee->military_service)->first();
        return view('study.employee-details',compact('employee','names','globalNames','militray'));
    }

    //download certificate
    public function download($file_name,$folderName) {
      $file_path = public_path('storage/Images/'.''.$folderName.'/'.''.$file_name);
      return response()->download($file_path);
    }
}
