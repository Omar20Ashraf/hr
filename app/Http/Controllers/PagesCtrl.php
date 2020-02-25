<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Admin\Settings;
use App\Models\Contact;
use App\Models\HomeSliders;
use App\Models\JobCompany;
use App\Models\MediaEmployee;
use App\Models\Services;
use App\Models\Slider;
use App\Models\StaticNames;
use App\Models\StudyCompany;
use App\Models\StudyEmployee;
use Illuminate\Http\Request;

class PagesCtrl extends Controller
{
    //

    public function index()
    {
        # code...

        $about = About::first();

        $services = Services::take(6)->latest()->get();

        $firstSliders = HomeSliders::where('type','firstSlider')->latest()->get();
        $secondSliders = HomeSliders::where('type','secondSlider')->latest()->get();
        $thirdSliders = HomeSliders::where('type','thirdSlider')->latest()->get();

        $studyCompanines = StudyCompany::whereNotNull('image')->take(4)->latest()->get();

        $carierCompanines = JobCompany::whereNotNull('image')->take(4)->latest()->get();

        $mediaEmployees = MediaEmployee::whereNotNull('image')->take(4)->latest()->get();

        //get static names
        $name = StaticNames::get(['ilife','ilife_ar','read_more','read_more_ar'])->first();

        return view('index',compact('about','services','firstSliders','secondSliders','thirdSliders','studyCompanines','carierCompanines','mediaEmployees','name'));
    }

    public function about()
    {
       $about = About::first();
       $services = Services::latest()->get();

       //get static names
       $name = StaticNames::get(['ilife','ilife_ar'])->first();

       $slider = Slider::where('type','About')->first();
       return view('about',compact('about','services','slider','name'));
    }

    public function contact()
    {
        //get contact information
        $contact = Contact::first();


        $names = StaticNames::get(['phone','phone_ar','email','email_ar','address','address_ar','get_in_touch','get_in_touch_ar','name','name_ar','submit','submit_ar'])->first();

        //get website information(phone.email,..)
        $info = Settings::first();

       return view('contact',compact('contact','names','info'));
    }
}
