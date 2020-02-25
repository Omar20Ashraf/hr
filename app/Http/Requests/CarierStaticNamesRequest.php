<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarierStaticNamesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'company_name' => 'required',
            'company_name_ar' => 'required',
            'job_title' => 'required',
            'job_title_ar' => 'required',
            'experience_level' => 'required',
            'experience_level_ar' => 'required',
            'education' => 'required',
            'education_ar' => 'required',
            'experience_years' => 'required',
            'experience_years_ar' => 'required',
            'job_description' => 'required',
            'job_description_ar' => 'required',
            'first_skill' => 'required',
            'first_skill_ar' => 'required',
            'second_skill' => 'required',
            'second_skill_ar' => 'required',
            'third_skill' => 'required',
            'third_skill_ar' => 'required',
            'forth_skill' => 'required',
            'forth_skill_ar' => 'required',
            'certificates' => 'required',
            'certificates_ar' => 'required',
            'personal_info' => 'required',
            'personal_info_ar' => 'required',
            'talk_about' => 'required',
            'talk_about_ar' => 'required',
            'qualification' => 'required',
            'qualification_ar' => 'required',
            'select_employee' => 'required',
            'select_employee_ar' => 'required',
            'select_employee_slug' => 'required',
            'select_employee_slug_ar' => 'required',
            'select_company' => 'required',
            'select_company_ar' => 'required',
            'select_company_slug' => 'required',
            'select_company_slug_ar' => 'required',
        ];
    }
}
