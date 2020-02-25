<?php

use App\Models\Certificates;
use App\Models\workExperience;
use App\User;
use Illuminate\Support\Facades\Hash;

class helpers
{
    //create Users

    public static function createUser($name,$password,$email,$type)
    {
       return User::create([
                        'name' => $name,
                        'email' => $email,
                        'password' => Hash::make($password),
                        'type' => $type,
                        ]);

    }
    // save image
    public static function savePhoto($imageName,$folderName,$request)
    {
         // Get filename with extension
        $filenameWithExt = $request->file($imageName)->getClientOriginalName();
         // Get just the filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);


        // Get extension
        $extension = $request->file($imageName)->getClientOriginalExtension();
        // Create new filename
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        // Uplaod image
        $path= $request->file($imageName)->storeAs('public/Images/'.''.$folderName,$filenameToStore);

        // $path=$request->file($imageName)->move('public/Images/Admin/'.''.$folderName , $filenameToStore);
        return $filenameToStore;
    }

    //update image
    public static function updatePhoto($imageName,$folderName,$request)
    {
        $file=$request->file($imageName);

        $filenameWithExt = $file->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        $extension=$file->getClientOriginalExtension();

        $filenameToStore = $filename.'_'.time().'.'.$extension;

        // $file->move('public/Images/Admin/'.''.$folderName , $filenameToStore);;
        $file->storeAs('public/Images/'.''.$folderName,$filenameToStore);
        return $filenameToStore;
    }

    //loop on the cerificate and store them in db
    public static function certificates($fileName,$type,$user_id,$folderName,$request)
    {
        foreach($request->file($fileName) as $file){
            // dd($file);
            $fileName = self::savecerificate($file,$folderName,$request);

            Certificates::create([
                'type' => $type,
                'name' => $fileName[1],
                'user_id' => $user_id,
                'certificate' => $fileName[0],
            ]);
        }
    }

    //store single certificates
    public static function certificate($fileName,$type,$user_id,$folderName,$request)
    {

        $fileName = self::savecerificate($request->file($fileName),$folderName,$request);

        Certificates::create([
            'type' => $type,
            'name' => $fileName[1],
            'user_id' => $user_id,
            'certificate' => $fileName[0],
        ]);
    }

    // store cerificate in storage folder
    public static function savecerificate($imageName,$folderName,$request)
    {
         // Get filename with extension
        $filenameWithExt =$imageName->getClientOriginalName();
         // Get just the filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        // Get extension
        $extension =$imageName->getClientOriginalExtension();
        // Create new filename
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        // Uplaod image
        $path=$imageName->storeAs('public/Images/'.''.$folderName,$filenameToStore);

        return [$filenameToStore,$filename];
    }

    public static function deleteCertificate($certificates,$folderName)
    {
        foreach ($certificates as $certificate){
            if(Storage::delete('public/Images/'.$folderName.'/'.$certificate->certificate)){
                $certificate->delete();
            }
        }
    }
    public static function workExperiences($companyName,$fromDate,$toDate,$type,$user_id)
    {
        workExperience::create([
            'name' => $companyName,
            'from_date' => $fromDate ,
            'to_date' => $toDate,
            'type' => $type,
            'user_id' => $user_id,
        ]);
    }

    public static function deleteNotification($notifyId)
    {
        $notificationId = $notifyId;
        if($notificationId){
            $userUnreadNotification = auth()->user()
                                        ->unreadNotifications
                                        ->where('id', $notificationId)
                                        ->first();
            if($userUnreadNotification){
                $userUnreadNotification->delete();
            }
        }
    }
}
