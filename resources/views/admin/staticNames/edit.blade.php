@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Globla Names
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Globla Names</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->
    @include('admin/elements/flash')


    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">
               Update-Globla Names
            </h5>
        </div>

        <br>

        {!! Form::open(['route'=>['admin.updateGlobalNames',$name->id],'method'=>'Post','class'=>'form-horizontal','style'=>'margin:20px']) !!}
            {{ Form::hidden('_method','Put') }}


            <div class="row">

                <div class="col-md-6">
                    <h4 class="bg-info text-center">
                        {{ trans('English') }}
                    </h4>
                    <div class="form-group">
                        {{ Form::label('name','Name',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('name',$name->name,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('icarier',$name->icarier,['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('icarier',$name->icarier,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('istudy',$name->istudy,['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('istudy',$name->istudy,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('imedia',$name->imedia,['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('imedia',$name->imedia,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('ilife',$name->ilife,['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('ilife',$name->ilife,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('read_more',$name->read_more,['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('read_more',$name->read_more,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('phone','Phone',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('phone',$name->phone,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('contact_us','Contact Us',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('contact_us',$name->contact_us,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('more_info','For More Information',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('more_info',$name->more_info,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('write_email','Write Email',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('write_email',$name->write_email,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('gender','Gender',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('gender',$name->gender,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('address','Address',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('address',$name->address,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('image','Image',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('image',$name->image,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('video','Video',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('video',$name->video,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('email','Email',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('email',$name->email,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('password','Password',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('password',$name->password,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('re_password','Re_password',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('re_password',$name->re_password,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('login','Login',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('login',$name->login,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('register','Register',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('register',$name->register,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('login_now','Login Now',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('login_now',$name->login_now,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('register_now','Register Now',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('register_now',$name->register_now,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('create_account','Create Account',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('create_account',$name->create_account,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('birth_date','Birth Date',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('birth_date',$name->birth_date,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('work_experience','Work Experience',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('work_experience',$name->work_experience,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('military_service','Military Service',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('military_service',$name->military_service,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('contact','Contact',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('contact',$name->contact,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('skills','Skills',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('skills',$name->skills,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('job','Job',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('job',$name->job,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('location','Location',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('location',$name->location,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('full_time','Full Time',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('full_time',$name->full_time,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('part_time','Part Time',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('part_time',$name->part_time,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('freelance','Freelance',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('freelance',$name->freelance,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('date','Date',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('date',$name->date,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('company_work_date','Company Work Date',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('company_work_date',$name->company_work_date,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('get_in_touch',$name->get_in_touch,['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('get_in_touch',$name->get_in_touch,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('submit',$name->submit,['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('submit',$name->submit,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <br><br>

                </div>
                <div class="col-md-6">
                    <h4 class="bg-info text-center">
                        {{ trans('Arabic') }}
                    </h4>

                    <div class="form-group">
                        {{ Form::label('name_ar','Name',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('name_ar',$name->name_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('icarier_ar',$name->icarier_ar,['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('icarier_ar',$name->icarier_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('istudy_ar',$name->istudy_ar,['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('istudy_ar',$name->istudy_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('imedia_ar',$name->imedia_ar,['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('imedia_ar',$name->imedia_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('ilife_ar',$name->ilife_ar,['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('ilife_ar',$name->ilife_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('read_more_ar',$name->read_more_ar,['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('read_more_ar',$name->read_more_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('phone_ar','Phone',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('phone_ar',$name->phone_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('contact_us_ar','Contact Us',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('contact_us_ar',$name->contact_us_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('more_info_ar','For More Information',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('more_info_ar',$name->more_info_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('write_email_ar','Write Email',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('write_email_ar',$name->write_email_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('gender_ar','Gender',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('gender_ar',$name->gender_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('address_ar','Address',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('address_ar',$name->address_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('image_ar','Image',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('image_ar',$name->image_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('video_ar','Video',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('video_ar',$name->video_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('email_ar','Email',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('email_ar',$name->email_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('password_ar','Password',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('password_ar',$name->password_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('re_password_ar','Re_password',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('re_password_ar',$name->re_password_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('login_ar','Login',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('login_ar',$name->login_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('register_ar','Register',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('register_ar',$name->register_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('login_now_ar','Login Now',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('login_now_ar',$name->login_now_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>


                    <div class="form-group">
                        {{ Form::label('register_now_ar','Register Now',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('register_now_ar',$name->register_now_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('create_account_ar','Create Account',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('create_account_ar',$name->create_account_ar,array('class'=>'form-control','required'=>'required')) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('birth_date_ar','Birth Date',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('birth_date_ar',$name->birth_date_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('work_experience_ar','Work Experience',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('work_experience_ar',$name->work_experience_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('military_service_ar','Military Service',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('military_service_ar',$name->military_service_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('contact_ar','Contact',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('contact_ar',$name->contact_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('skills_ar','Skills',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('skills_ar',$name->skills_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('job_ar','Job',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('job_ar',$name->job_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('location_ar','Location',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('location_ar',$name->location_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('full_time_ar','Full Time',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('full_time_ar',$name->full_time_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('part_time_ar','Part Time',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('part_time_ar',$name->part_time_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('freelance_ar','Freelance',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('freelance_ar',$name->freelance_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('date_ar','Date',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('date_ar',$name->date_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('company_work_date_ar','Company Work Date',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('company_work_date_ar',$name->company_work_date_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('get_in_touch_ar',$name->get_in_touch_ar,['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('get_in_touch_ar',$name->get_in_touch_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('submit_ar',$name->submit_ar,['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-9">
                            {{ Form::text('submit_ar',$name->submit_ar,array('class'=>'form-control','required'=>'required')) }}
                        </div>
                    </div>
                    <br><br>

                </div>
            </div>

            <br>
            <div class="form-group text-center">
                {{ Form::submit('Update',array('class'=>'btn btn-primary btn-lg')) }}
            </div>
        {!! Form::close() !!}
    </div>
    <!-- /horizontal form modal -->


@endsection

@section('footer')

@endsection
