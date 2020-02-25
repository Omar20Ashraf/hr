<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaticNames extends Model
{
    //website
    protected $table ='static_names';

    protected $fillable=[
                    'phone_ar','phone',
                    'contact_us','contact_us_ar',
                    'gender','gender_ar',
                    'address','address_ar',
                    'image','image_ar',
                    'email','email_ar',
                    'password','password_ar',
                    're_password','re_password_ar',
                    'login','login_ar',
                    'register','register_ar',
                    'login_now','login_now_ar',
                    'register_now','register_now_ar',
                    'create_account','create_account_ar',
                    'birth_date','birth_date_ar',
                    'work_experience','work_experience_ar',
                    'military_service','military_service_ar',
                    'contact','contact_ar',
                    'skills','skills_ar',
                    'name','name_ar',
                    'job','job_ar',
                    'location','location_ar',
                    'full_time','full_time_ar',
                    'part_time','part_time_ar',
                    'freelance','freelance_ar',
                    'date','date_ar',
                    'more_info','more_info_ar',
                    'write_email','write_email_ar',
                    'company_work_date','company_work_date_ar',
                    'video','video_ar',
                    'get_in_touch','get_in_touch_ar',
                    'submit','submit_ar',
                    'icarier','icarier_ar',
                    'istudy','istudy_ar',
                    'imedia','imedia_ar',
                    'ilife','ilife_ar',
                    'read_more','read_more_ar',
                ];
}
