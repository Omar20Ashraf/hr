<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
    /*types
        1-ICarier => ICarier
        2-IStudy => IStudy
        3-IMedia => IMedia
        3-About => About
    */
    protected $table ='sliders';

    protected $fillable=['title_ar','title','description','description_ar','image','type'];
}
