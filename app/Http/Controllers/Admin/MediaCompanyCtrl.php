<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJobsCompanies;
use App\Models\MediaCompany;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use helpers;
class MediaCompanyCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobs = MediaCompany::where('status','1')->latest()->get();
        return view('admin.media.company.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.media.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobsCompanies $request)
    {
        //
        $data = $request->all();
        if(request('image')){

            $data['image'] = helpers::savePhoto('image','mediaCompanies',$request);
        } else{
            $data['image'] = null;
        }

        $data['slug'] = Str::slug(request('name'),'-');
        $company = MediaCompany::create($data);

          //update the slug make it unique by adding the id
          $slug = Str::slug($company->name,'-') . '-' . uniqid();

          MediaCompany::whereId($company->id)->update([
              'slug' => $slug,
          ]);

          Alert::success(config('app.name'), trans('messages.Added Successfully') );
          return redirect()->route('admin.mediaCompanines.index');
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
        $job = MediaCompany::find($id);
        return view('admin.media.company.edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreJobsCompanies $request, $id)
    {
        //
        $job = MediaCompany::find($id);

        $data = $request->all();

        if($job->user_id){
            $user = User::where('id',$job->user_id)->first();
        }

        //check if the name has changed to update the slug
        if(!($job->name == request('name'))){
             //update the slug make it unique by adding the id
             $data['slug'] = Str::slug(request('name'),'-') . '-' . uniqid();

             if($job->user_id){
                 $user->name = request('name');
                 $user->save();
             }

        } else{
             $data['slug'] = $job->slug;
        }

        //save the new email in users table
        if(!($job->email == request('email'))){
            if($job->user_id){
                $user->email = request('email');
                $user->save();
            }
        }

        //check if there is password change came from edit profile
        if(request('password')){
            // dd(request('password'));
            $password = Hash::make(request('password'));
            $user->password = $password;
            $user->save();
        }

        if($request->file('image'))
        {
           $data['image']= helpers::updatePhoto('image','mediaCompanies',$request);
            Storage::delete('public/Images/mediaCompanies/'.$job->image);
        }

        $job->update($data);

        Alert::success(config('app.name'), trans('messages.Updated Successfully'));

        //check if the update came from the admin panel or from the user
        if(request('site')){
            return redirect()->route('profile',['id' => $user->id,'type' => $user->type]);
        }

        return redirect()->route('admin.mediaCompanines.index');
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
        $job = MediaCompany::find($id);


        if($job->image){
            //delete the image before deleting the item
            if(Storage::delete('public/Images/mediaCompanies/'.$job->image))
            {
                if($job->user_id)
                {
                    // delete from jobCompanies table
                    $job->delete();
                    //delete from user table
                    User::whereId($job->user_id)->delete();
                    Alert::success(config('app.name'), trans('messages.Deleted Successfully') );
                    return back();
                }
            }

        }

        $job->delete();
        if($job->user_id)
        {
            //delete from user table
            User::whereId($job->user_id)->delete();
        }
        Alert::success(config('app.name'), trans('messages.Deleted Successfully') );
        return back();
    }

    public function indexRequest()
    {
        //
        $jobs = MediaCompany::where('status','0')->latest()->get();

        //delete the notification if exist
        helpers::deleteNotification(request('notifyId'));

        return view('admin.media.company.indexRequest',compact('jobs'));
    }

    public function approveCompany($id)
    {
        $job = MediaCompany::find($id);

        $job->update([
            'status' => '1',
        ]);

        Alert::success(config('app.name'), trans('messages.Approved Successfully') );
        return redirect()->route('admin.mediaCompanyRequests');
    }
}
