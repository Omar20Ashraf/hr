<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarierEmployeeValidation extends FormRequest
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
        $rules = [
            //
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'status' => 'required',
            'birth_date'=> 'required'
            'job_title' => 'required|max:255',
            'personal_info' => 'required',
            'image' => 'image'
        ];


        if ($this->getMethod() == 'POST') {
            $rules += ['image' => 'required|image'];
        }

        return $rules;
    }
}
