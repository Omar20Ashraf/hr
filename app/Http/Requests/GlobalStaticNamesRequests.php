<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GlobalStaticNamesRequests extends FormRequest
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
            'phone' => 'required',
            'phone_ar' => 'required',
            'gender' => 'required',
            'gender_ar' => 'required',
            'address' => 'required',
            'address_ar' => 'required',
            'image' => 'required',
            'image_ar' => 'required',
            'email' => 'required',
            'email_ar' => 'required',
            'password' => 'required',
            'password_ar' => 'required',
            're_password' => 'required',
            're_password_ar' => 'required',
            'login' => 'required',
            'login_ar' => 'required',
            'register' => 'required',
            'register_ar' => 'required',
            'login_now' => 'required',
            'login_now_ar' => 'required',
            'register_now' => 'required',
            'register_now_ar' => 'required',
            'create_account' => 'required',
            'create_account_ar' => 'required',
            'birth_date' => 'required',
            'birth_date_ar' => 'required',
            'work_experience' => 'required',
            'work_experience_ar' => 'required',
            'military_service' => 'required',
            'military_service_ar' => 'required',
            'contact' => 'required',
            'contact_ar' => 'required',
            'name' => 'required',
            'name_ar' => 'required',
            'job' => 'required',
            'job_ar' => 'required',
            'skills' => 'required',
            'skills_ar' => 'required',
            'location' => 'required',
            'location_ar' => 'required',
            'full_time' => 'required',
            'full_time_ar' => 'required',
            'part_time' => 'required',
            'part_time_ar' => 'required',
            'freelance' => 'required',
            'freelance_ar' => 'required',
            'date' => 'required',
            'date_ar' => 'required',
            'more_info' => 'required',
            'more_info_ar' => 'required',
            'write_email' => 'required',
            'write_email_ar' => 'required',
            'company_work_date' => 'required',
            'company_work_date_ar' => 'required',
            'video' => 'required',
            'video_ar' => 'required',
            'get_in_touch' => 'required',
            'get_in_touch_ar' => 'required',
            'submit' => 'required',
            'submit_ar' => 'required',
            'icarier' => 'required',
            'icarier_ar' => 'required',
            'istudy' => 'required',
            'istudy_ar' => 'required',
            'imedia' => 'required',
            'imedia_ar' => 'required',
            'ilife' => 'required',
            'ilife_ar' => 'required',
            'read_more' => 'required',
            'read_more_ar' => 'required',
        ];



    }
}
