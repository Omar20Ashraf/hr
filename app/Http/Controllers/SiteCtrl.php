<?php

namespace App\Http\Controllers;

use Alert;
use App\Admin;
use App\Models\ContactMessages;
use App\Notifications\ContactUsMessage;
use Illuminate\Http\Request;
class SiteCtrl extends Controller
{
    //

    public function storeContactUs(Request $request)
    {
        // dd($request);
        $this->validate($request , [
           'name' => 'required',
           'email' => 'required|email',
           'phone' => 'required|numeric',
           'message' => 'required',
        ]);

        $input = $request->all();
        ContactMessages::create($input);

        Alert::success(config('app.name'),trans('messages.Contact Successfully'))->autoclose(3000);

        //notify all Admins
        $admins = Admin::get();
        foreach($admins as $admin){
            $admin->notify(new ContactUsMessage);
        }
        return redirect()->back();
    }
}
