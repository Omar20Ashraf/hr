<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SelectImages extends Model
{
    //
    /*selectType
        1-ICarier Employee => ICarier
        2-Imedia => Employee => IMedia
        3-IStudy => Employee => IStudy

        type ['Company','Employee']
    */


    protected $table ='select_images';

    protected $fillable=['image','type','selectType'];
}
