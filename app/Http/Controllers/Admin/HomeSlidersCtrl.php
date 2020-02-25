<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Alert;
use helpers;
class HomeSlidersCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {
        //
        $sliders = HomeSliders::where('type',$type)->latest()->get();

        return view('admin.homeSliders.index',compact('sliders','type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {
        //
        return view('admin.homeSliders.create',compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$type)
    {

        //validation
        $this->validate(request(),[
            'image' => 'required|image'
        ]);

        //modify the image name
        $filenameToStore = helpers::savePhoto('image','homeSliders',$request);

        HomeSliders::create([
            'type' => $type,
            'link' => request('link'),
            'image' => $filenameToStore
        ]);

        Alert::success(config('app.name'), trans('messages.Added Successfully'));
        return redirect()->route('admin.homeSlider',$type);
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
        $slider = HomeSliders::find($id);
        return view('admin.homeSliders.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validation
        $this->validate(request(),[
            'image' => 'image'
        ]);

        $slider = HomeSliders::find($id);
        
        $slider->link = request('link');

        //get old image to delete if updated
        $oldImage = request('oldImage');
        //get the new image
        $NewImage=$request->file('image');

        if($NewImage)
        {
           $filenameToStore= helpers::updatePhoto('image','homeSliders',$request);
            $slider->image=$filenameToStore;

            Storage::delete('public/Images/homeSliders/'.$oldImage);
        }

        $slider->save();

        Alert::success(config('app.name'), trans('messages.Updated Successfully') );
        return redirect()->route('admin.homeSlider',$slider->type);
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
        $slider = HomeSliders::find($id);

          //delete the slider image
         if(Storage::delete('public/Images/homeSliders/'.$slider->image))
         {
            $slider->delete();
            Alert::success(config('app.name'), trans('messages.Deleted Successfully') );
            return redirect()->route('admin.homeSlider',$slider->type);
        }
    }
}
