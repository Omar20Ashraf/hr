<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table ='settings';

    protected $fillable=['facebook','twitter','dribbble','linkedin','email','phone','address','website'];
}
