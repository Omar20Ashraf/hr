<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SelectImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use helpers;
use Alert;
class SalectImagesCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $images = SelectImages::get();
        return view('admin.selectImages.index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        $image = SelectImages::find($id);
        return view('admin.selectImages.edit',compact('image'));
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
        //
        //validation
        $this->validate(request(),[
            'image' => 'image',
        ]);

        $image = SelectImages::find($id);

        $data = $request->all();

        if($request->file('image'))
        {
           $data['image']= helpers::updatePhoto('image','selectImages',$request);

            Storage::delete('public/Images/selectImages/'.$image->image);
        }

        $image->update($data);

        Alert::success(config('app.name'), trans('messages.Updated Successfully') );
        return redirect()->route('admin.selectImages.index');
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
