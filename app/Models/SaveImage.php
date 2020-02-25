<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;
use Image;
class SaveImage extends Model
{


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
}
