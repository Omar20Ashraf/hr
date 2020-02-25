<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarierStaticNames extends Model
{
    //
    protected $table ='carier_static_names';

    protected $fillable=[
                    'company_name_ar','company_name',
                    'job_title','job_title_ar',
                    'experience_level','experience_level_ar',
                    'education','education_ar',
                    'experience_years','experience_years_ar',
                    'job_description','job_description_ar',
                    'first_skill','first_skill_ar',
                    'second_skill','second_skill_ar',
                    'third_skill','third_skill_ar',
                    'forth_skill','forth_skill_ar',
                    'certificates','certificates_ar',
                    'personal_info','personal_info_ar',
                    'talk_about','talk_about_ar',
                    'qualification','qualification_ar',
                    'job_type','job_type_ar',
                    'select_employee','select_employee_ar',
                    'select_employee_slug','select_employee_slug_ar',
                    'select_company','select_company_ar',
                    'select_company_slug','select_company_slug_ar'
                ];
}
