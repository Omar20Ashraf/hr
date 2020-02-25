<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarierStaticNamesRequest;
use App\Http\Requests\GlobalStaticNamesRequests;
use App\Models\CarierStaticNames;
use App\Models\MediaStaticNames;
use App\Models\StaticNames;
use App\Models\StudyStaticNames;
use Illuminate\Http\Request;
class StaticNamesCtrl extends Controller
{
    //
    public function globalNames()
    {
        $name = StaticNames::first();
        return view('admin.staticNames.index',compact('name'));
    }

    public function editGlobalNames($id)
    {
        $name = StaticNames::find($id);
        return view('admin.staticNames.edit',compact('name'));
    }


    public function updateGlobalNames(GlobalStaticNamesRequests $request, $id)
    {
        $name = StaticNames::find($id);
        $input = $request->all();

        $name->update($input);

        Alert::success(config('app.name'), trans('messages.Updated Successfully'));
        return redirect()->route('admin.globalStaticNames');
    }

    //carier names
    public function CarierNames()
    {
        $name = CarierStaticNames::first();
        return view('admin.jobs.staticNames.index',compact('name'));
    }

    public function editCarierNames($id)
    {
        $name = CarierStaticNames::find($id);
        return view('admin.jobs.staticNames.edit',compact('name'));
    }

    public function updateCarierNames(CarierStaticNamesRequest $request, $id)
    {
        $name = CarierStaticNames::find($id);
        $input = $request->all();

        $name->update($input);

        Alert::success(config('app.name'), trans('messages.Updated Successfully'));
        return redirect()->route('admin.carierStaticNames');
    }

    //media functions

    //carier names
    public function mediaNames()
    {
        $name = MediaStaticNames::first();
        return view('admin.media.staticNames.index',compact('name'));
    }

    public function editMediaNames($id)
    {
        $name = MediaStaticNames::find($id);
        return view('admin.media.staticNames.edit',compact('name'));
    }

    public function updateMediaNames(CarierStaticNamesRequest $request, $id)
    {
        $name = MediaStaticNames::find($id);
        $input = $request->all();

        $name->update($input);

        Alert::success(config('app.name'), trans('messages.Updated Successfully'));
        return redirect()->route('admin.mediaStaticNames');
    }


    //study functions

    //Study names
    public function studyNames()
    {
        $name = StudyStaticNames::first();
        return view('admin.study.staticNames.index',compact('name'));
    }

    public function editstudyNames($id)
    {
        $name = StudyStaticNames::find($id);
        return view('admin.study.staticNames.edit',compact('name'));
    }

    public function updatestudyNames(CarierStaticNamesRequest $request, $id)
    {
        $name = StudyStaticNames::find($id);
        $input = $request->all();

        $name->update($input);

        Alert::success(config('app.name'), trans('messages.Updated Successfully'));
        return redirect()->route('admin.studyStaticNames');
    }
}
