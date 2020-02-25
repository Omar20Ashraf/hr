<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\workExperience;
use Illuminate\Http\Request;
use helpers;
use Alert;
class WorkExperienceCtrl extends Controller
{
    public function index($type,$user_id)
    {
        $experiences = workExperience::where('type',$type)->where('user_id',$user_id)->latest()->get();
        return view('admin.workExperience.index',compact('experiences','user_id','type'));
    }

    public function create(Request $request)
    {
        $type= request('type');
        $user_id= request('user_id');

        return view('admin.workExperience.create',compact('type','user_id'));
    }


    public function store(Request $request)
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


        $type = request('type');

        helpers::workExperiences(request('name'),request('from_date'),request('to_date'),$type,request('user_id'));

        Alert::success(config('app.name'), trans('messages.Added Successfully') );
        return redirect()->route('admin.getExperience',['type'=>$type,'user_id'=>request('user_id')]);
    }

    public function destroy($id)
    {
        $experiexce = workExperience::find($id);

        $experiexce->delete();
        Alert::success(config('app.name'), trans('messages.Deleted Successfully') );
        return back();
    }
}
