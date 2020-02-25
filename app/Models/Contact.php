<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table ='contacts';

    protected $fillable=['title_ar','title','description','description_ar','image'];
}
