<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    //
    /*types
        1-ICarier Employee => 1
        1-IStudy => IStudy

     user_id referes to the id in the [carierEmployee,MediaEmployee,...]
    */


    protected $table ='certificates';

    protected $fillable=['name','certificate','type','user_id'];
}
