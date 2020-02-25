<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
    protected $table ='abouts';

    protected $fillable=['image','description','description_ar','home_description','home_description_ar'];
}
