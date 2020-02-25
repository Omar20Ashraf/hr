<?php

namespace App\Http\Requests;

use App\Models\CarierEmployee;
use App\Models\MediaEmployee;
use App\Models\StudyEmployee;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class EmployeeRegisterRequests extends FormRequest
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
        $url = str_replace(url('/'), '', url()->previous());

        $rules = [
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
            'birth_date'=> 'required',
            'job_title' => 'required|max:255',
            'personal_info' => 'required'
        ];

        if ($this->getMethod() == 'POST') {
            $rules += [
                'email' => 'required|string|email|max:255|unique:users',
                'image' => 'required|image'
            ];
        }else{
            $rules += ['image' => 'image'];
            //check the model Name
            if(request('ModelName') == 'MediaEmployee'){
                $employee = MediaEmployee::find(request('id'));
            }elseif(request('ModelName') == 'StudyEmployee') {
                # code...
                $employee = StudyEmployee::find(request('id'));
            }elseif(request('ModelName') == 'CarierEmployee'){
                $employee = CarierEmployee::find(request('id'));
            }

            //check if there is a user id or not
            $user = [];
            if($employee->user_id){
                $user = User::where('id',$employee->user_id)->first();
            }

            if($user){

                $rules += ['email' => 'required|string|email|max:255|unique:users,email,'.$user->id];
            }else{
                $rules += ['email' => 'required|string|email|max:255|unique:users,email,'.$employee->id];
            }

        }

        // check to see if the request came from user registerration
        if(strpos($url, 'mediaTalentedAuth') || strpos($url, 'studyTalentedAuth')){
            $rules += ['password' => 'required|string|min:6|confirmed'];
        }

        return $rules;
    }
}
