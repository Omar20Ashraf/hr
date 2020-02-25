<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class AdminsCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admins = Admin::latest()->get();

        return view('admin.registerAdmins.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.registerAdmins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //1-validate the form
      $this->validate(request(),[
          'name'      =>'required',
          'email'     =>'required|email|unique:admins',
          'password'  => 'required',
          'role'      =>'required'
      ]);

       Admin::create([
         'name'      =>request('name'),
         'email'     =>request('email'),
         'role'      =>request('role'),
         'password'  =>bcrypt(request('password')),
        ]);

          return redirect()->route('admin.registerAdmins.index')->withSuccessMessage('تم إضافة المعلومات بنجاح');
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
        $admin = Admin::find($id);

        if(Auth::user()->role == 1){
            return view('admin.registerAdmins.edit',compact('admin'));
        } else{
            return back();
        }
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
        if(Auth::user()->role == 1){

            $request->validate([
                'name' => 'required|string|max:255',
                'role' => 'required'
            ]);

            $admin = Admin::find($id);

            $admin->name = request('name');
            $admin->email = $admin->email;
            $admin->role = request('role');
            $admin->save();

            return redirect()->route('admin.registerAdmins.index')->withSuccessMessage('تم تعديل المعلومات بنجاح');
        }else{
            return back();
        }

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
        if(Auth::user()->role == 1){
            $admin = Admin::find($id);

            //delete notification for the admin if exsist
            $notificationId = DB::table('notifications')->where('notifiable_id',$admin->id)->first();
            // dd($notificationId);
            if($notificationId){
                $userUnreadNotification = $admin
                                            ->unreadNotifications
                                            ->where('id', $notificationId->id)
                                            ->first();
                if($userUnreadNotification) {
                        $userUnreadNotification->delete();
                }
            }

            $admin->delete();

            return back()->withSuccessMessage('تم حذف المعلومات بنجاح');
        }
        return back();
    }

    public function editAdmin($id)
    {
        $admin = Admin::find($id);

        if(Auth::user()->id == $id){
            return view('Admin.registerAdmins.editAdmin',compact('admin'));
        } else{
            return back();
        }
    }

    public function updateAdmin(Request $request, $id)
    {
        //
        if(Auth::user()->id == $id){
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:admins,email,'.auth()->id(),
            ]);
            $admin = Admin::find($id);
            $pass = $admin->password;

            $admin->name = request('name');
            $admin->email = request('email');
            $admin->role = $admin->role;

            if(request('password')){
                $pass = bcrypt(request('password'));
            }

            $admin->password = $pass;
            $admin->save();

            Alert::success('Success Message', 'Optional Title');

            return redirect()->route('admin.home');
        }else{
            return back();
        }

    }
}
