<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServicesRequest;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use helpers;
class ServicesCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = Services::latest()->get();

        return view('admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServicesRequest $request)
    {
        //
        $data = $request->all();

        $data['image'] = helpers::savePhoto('image','services',$request);

        $employee =  Services::create($data);


        Alert::success(config('app.name'), trans('messages.Added Successfully') );
        return redirect()->route('admin.service.index');
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
        $service = Services::find($id);
        return view('admin.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServicesRequest $request, $id)
    {
        //

        $service = Services::find($id);

        $data = $request->all();

        if($request->file('image'))
        {
           $data['image']= helpers::updatePhoto('image','services',$request);
            Storage::delete('public/Images/services/'.$service->image);
        }


        $service->update($data);

        Alert::success(config('app.name'), trans('messages.Updated Successfully') );
        return redirect()->route('admin.service.index');
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
        $service = Services::find($id);
        if(Storage::delete('public/Images/services/'.$service->image))
        {
            $service->delete();
        }
        Alert::success(config('app.name'), trans('messages.Deleted Successfully') );
        return redirect()->route('admin.service.index');
    }
}
