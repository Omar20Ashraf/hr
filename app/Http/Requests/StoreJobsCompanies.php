<?php

namespace App\Http\Requests;

use App\Models\JobCompany;
use App\Models\MediaCompany;
use App\Models\StudyCompany;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreJobsCompanies extends FormRequest
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
            'phone' => 'required|numeric',
            'status' => 'required',
            'job_title' => 'required|max:255',
            'job_description' => 'required'
        ];

        if ($this->getMethod() == 'POST') {
            $rules += ['email' => 'required|string|email|max:255|unique:users'];
            $rules += ['image' => 'required|image'];
        }else{
            $rules += ['image' => 'image'];

            //check the model Name
            if(request('ModelName') == 'JobCompany'){
                $job = JobCompany::find(request('id'));
            }elseif(request('ModelName') == 'MediaCompany') {
                # code...
                $job = MediaCompany::find(request('id'));
            }elseif(request('ModelName') == 'StudyCompany'){

                $job = StudyCompany::find(request('id'));
            }

            //check if there is a user id or not
            $user = [];
            if($job->user_id){
                $user = User::where('id',$job->user_id)->first();
            }

            if($user){

                $rules += ['email' => 'required|string|email|max:255|unique:users,email,'.$user->id];
            }else{
                $rules += ['email' => 'required|string|email|max:255|unique:users,email,'.$job->id];
            }
        }

        return $rules;
    }
}
