<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyEmployee extends Model
{
    //
    protected $table ='study_employees';

    protected $fillable=['name','phone','address','job_title','email','birth_date','gender','education','years_experience','personal_info','image','user_id','status','military_service','slug','first_skill','second_skill','third_skill','forth_skill'];
}
