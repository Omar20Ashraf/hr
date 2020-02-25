<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Http\Controllers\Controller;
use helpers;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class SlidersCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliders = Slider::latest()->get();
        return view('admin.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.sliders.create');
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
            'image' => 'required|image'
        ]);

        $data = $request->all();
        //modify the image name
        $data['image'] = helpers::savePhoto('image','sliders',$request);

        Slider::create($data);

        Alert::success(config('app.name'), trans('messages.Added Successfully') );
        return redirect()->route('admin.sliders.index');
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
        $slider = Slider::find($id);
        return view('admin.sliders.edit',compact('slider'));
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

        $slider = Slider::find($id);

        $data = $request->all();

        if($request->file('image'))
        {
           $data['image']= helpers::updatePhoto('image','sliders',$request);
            Storage::delete('public/Images/sliders/'.$slider->image);
        }

        $slider->update($data);

        Alert::success(config('app.name'), trans('messages.Updated Successfully') );
        return redirect()->route('admin.sliders.index');
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
    }
}
