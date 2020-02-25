<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class workExperience extends Model
{
    /*types
        1-ICarier Employee => 1
        1-IStudy => IStudy

     user_id referes to the id in the [carierEmployee,MediaEmployee,...]
    */


    protected $table ='work_experiences';

        protected $fillable=['name','type','user_id','from_date','to_date'];

}
