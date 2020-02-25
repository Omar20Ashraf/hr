<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Settings;
use Illuminate\Http\Request;
use Alert;
class SettingsCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $info = Settings::find($id);

        return view('admin.settings.index',compact('info'));
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
        $site = Settings::find($id);
        return view('admin.settings.edit',compact('site'));
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
        $this->validate($request , [
           'phone' => 'required|numeric',
           'email' => 'required',
        ]);

        $site = Settings::find($id);
        $input = $request->all();

        $site->update($input);

        // Show Flash message
        Alert::success(config('app.name'), trans('messages.Updated Successfully') );
        return redirect(url('admin/showSettings/1'));
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
