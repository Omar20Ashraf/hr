<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MilitrayService;
use Illuminate\Http\Request;
use Alert;
class MilitrayServiceCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = MilitrayService::latest()->get();
        return view('admin.militrayService.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.militrayService.create');
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
            'name' => 'required',
            'name_ar' => 'required',
        ]);

        $input = $request->all();

        MilitrayService::create($input);

        Alert::success(config('app.name'), trans('messages.Added Successfully') );
        return redirect()->route('admin.militrayService.index');
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
        $service = MilitrayService::find($id);
        return view('admin.militrayService.edit',compact('service'));
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
        $this->validate(request(),[
            'name' => 'required',
            'name_ar' => 'required',
        ]);

        $input = $request->all();

        $service = MilitrayService::find($id);
        $service->update($input);

        Alert::success(config('app.name'), trans('messages.Updated Successfully') );
        return redirect()->route('admin.militrayService.index');
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
