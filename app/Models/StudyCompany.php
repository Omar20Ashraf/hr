<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyCompany extends Model
{
    //
    protected $table ='study_companies';

    protected $fillable=['name','phone','address','job_title','email','exp_level','gender','education','job_time','years_experience','job_description','image','user_id','status','slug'];
}
