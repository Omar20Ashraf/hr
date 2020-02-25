@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Study Names
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Study Names</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->
    @include('admin/elements/flash')


    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">
               Update-Study Names
            </h5>
        </div>

        <br>

        {!! Form::open(['route'=>['admin.updateStudyStaticNames',$name->id],'method'=>'Post','class'=>'form-horizontal','style'=>'margin:20px']) !!}
            {{ Form::hidden('_method','Put') }}


            <div class="row">

                <div class="col-md-6">
                    <h4 class="bg-info text-center">
                        {{ trans('English') }}
                    </h4>
                    <div class="form-group">
                        {{ Form::label('company_name','Company Name',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('company_name',$name->company_name,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('job_title','Job Title',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('job_title',$name->job_title,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('select_employee','Teachers',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('select_employee',$name->select_employee,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('select_employee_slug','Teachers Slug',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('select_employee_slug',$name->select_employee_slug,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('select_company','Companines',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('select_company',$name->select_company,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('select_company_slug','Companines Slug',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('select_company_slug',$name->select_company_slug,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('experience_level','Experience Level',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('experience_level',$name->experience_level,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('education','Educational Qualification',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('education',$name->education,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('experience_years','Years of experience',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('experience_years',$name->experience_years,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('job_description','Job Required',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('job_description',$name->job_description,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('first_skill','First Skill',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('first_skill',$name->first_skill,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('second_skill','Second Skill',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('second_skill',$name->second_skill,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('third_skill','Third Skill',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('third_skill',$name->third_skill,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('forth_skill','Forth Skill',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('forth_skill',$name->forth_skill,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('certificates','Certificates',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('certificates',$name->certificates,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('personal_info','Personal Information',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('personal_info',$name->personal_info,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('talk_about','Talk About your self',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('talk_about',$name->talk_about,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('qualification','Qualifications',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('qualification',$name->qualification,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('job_type','Type Of The Job',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('job_type',$name->job_type,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <br><br>

                </div>
                <div class="col-md-6">
                    <h4 class="bg-info text-center">
                        {{ trans('Arabic') }}
                    </h4>

                    <div class="form-group">
                        {{ Form::label('company_name_ar','Company Name',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('company_name_ar',$name->company_name_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>


                    <div class="form-group">
                        {{ Form::label('job_title_ar','Job Title',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('job_title_ar',$name->job_title_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('select_employee_ar','Teachers',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('select_employee_ar',$name->select_employee_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('select_employee_slug_ar','Teachers Slug',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('select_employee_slug_ar',$name->select_employee_slug_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('select_company_ar','Companines',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('select_company_ar',$name->select_company_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('select_company_slug_ar','Companines Slug',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('select_company_slug_ar',$name->select_company_slug_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('experience_level_ar','Experience Level',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('experience_level_ar',$name->experience_level_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('education_ar','Educational Qualification',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('education_ar',$name->education_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('experience_years_ar','Years of experience',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('experience_years_ar',$name->experience_years_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('job_description_ar','Job Required',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('job_description_ar',$name->job_description_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('first_skill_ar','First Skill',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('first_skill_ar',$name->first_skill_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('second_skill_ar','Second Skill',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('second_skill_ar',$name->second_skill_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('third_skill_ar','Third Skill',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('third_skill_ar',$name->third_skill_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('forth_skill_ar','Forth Skill',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('forth_skill_ar',$name->forth_skill_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>


                    <div class="form-group">
                        {{ Form::label('certificates_ar','Certificates',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('certificates_ar',$name->certificates_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('personal_info_ar','Personal Information',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('personal_info_ar',$name->personal_info_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('talk_about_ar','Talk About your self',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('talk_about_ar',$name->talk_about_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('qualification_ar','Qualifications',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('qualification_ar',$name->qualification_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('job_type_ar','Type Of The Job',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('job_type_ar',$name->job_type_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <br><br>

                </div>
            </div>

            <br>
            <div class="form-group text-center">
                {{ Form::submit(trans('messages.Update'),array('class'=>'btn btn-primary btn-lg')) }}
            </div>
        {!! Form::close() !!}
    </div>
    <!-- /horizontal form modal -->


@endsection

@section('footer')

@endsection
