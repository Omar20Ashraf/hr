<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Http\Controllers\Controller;
use App\Models\Certificates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use helpers;
class CertificatesCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type,$user_id,$folderName)
    {
        // dd($user_id);
        $certificates = Certificates::where('type',$type)->where('user_id',$user_id)->latest()->get();
        return view('admin.certificates.index',compact('certificates','user_id','folderName','type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $type= request('type');
        $user_id= request('user_id');
        $folderName= request('folderName');

        return view('admin.certificates.create',compact('type','user_id','folderName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate(request(),[
            "certificates.*"  => "required",
        ]);

        //store certificate

        helpers::certificates('certificates',request('type'),request('user_id'),request('folderName'),$request);

        Alert::success(config('app.name'), trans('messages.Added Successfully'));
        return redirect()->route('admin.getCertificate',['type'=>request('type'),'user_id'=>request('user_id'),'folderName' => request('folderName')]);
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
        // $certificates = Certificates::find($id);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$folderName)
    {
        $certificate = certificates::find($id);
        //delete the image before deleting
        if(Storage::delete('public/Images/'.''.$folderName.'/'.''.$certificate->certificate))
        {
            $certificate->delete();
            Alert::success(config('app.name'), trans('messages.Deleted Successfully') );
            return back();
        }
    }

    //download certificate
    public function download($file_name,$folderName) {
      $file_path = public_path('storage/Images/'.''.$folderName.'/'.''.$file_name);
      return response()->download($file_path);
    }
}
