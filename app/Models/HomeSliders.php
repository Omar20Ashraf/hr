<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSliders extends Model
{
    /*types
        1- firstSlider => firstSlider
        2-secondSlider => secondSlider
        3-thirdSlider => thirdSlider

    */

    protected $table ='home_sliders';

    protected $fillable=['image','type','link'];
}
