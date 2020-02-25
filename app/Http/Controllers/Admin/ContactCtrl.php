<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactMessages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use helpers;
class ContactCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contact = Contact::first();
        // dd($contact->title);
        return view('admin.contact.index',compact('contact'));
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
        //
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
        $contact = Contact::find($id);
        return view('admin.contact.edit',compact('contact'));
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

        $contact = Contact::find($id);

        $data = $request->all();

        if($request->file('image'))
        {
            $data['image'] = helpers::updatePhoto('image','contact',$request);
            Storage::delete('public/Images/contact/'.$contact->image);
        }

        $contact->update($data);

        Alert::success(config('app.name'), trans('messages.Updated Successfully') );
        return redirect()->route('admin.contact.index');
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

    public function contactMessage()
    {
        # code...
        $emails = ContactMessages::latest()->get();
        helpers::deleteNotification(request('notifyId'));
        return view('admin.contact.contactMessage',compact('emails'));
    }

    //delete contact us messages
    public function deleteMessages($id)
    {
        $email = ContactMessages::find($id);

        $email->delete();
        return redirect()->back()->withSuccessMessage(trans('messages.Deleted Successfully'));
    }
}
