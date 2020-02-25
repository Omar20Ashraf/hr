@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Study Companies
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Study Companies</h4>
            </div>
        </div>

    </div>

    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">
                Update
            </h5>
        </div>

        <br>

            {!! Form::open(['route'=>['admin.studyCompanines.update',$job->id],'method'=>'Post','class'=>'form-horizontal','style'=>'margin:20px','files'=>true]) !!}

                {{ Form::hidden('_method','Put') }}

                {{ Form::hidden('id', $job->id) }}
                {{ Form::hidden('ModelName', 'StudyCompany') }}

                <div class="form-group">
                    {{ Form::label('name','Company Name',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('name',$job->name,array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('phone','Company phone',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('phone',$job->phone,array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('email','Company Email',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::email('email',$job->email,array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('address','Company Address',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('address',$job->address,array('class'=>'form-control')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('job_title','Job Title',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('job_title',$job->job_title,array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('exp_level','Experience Level',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('exp_level',$job->exp_level,array('class'=>'form-control')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('gender','Gender',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="gender" class="form-control">
                            <option value="" {{($job->gender) ? '' : 'selected'}}>Select One...</option>
                            <option value="1" {{($job->gender)=='1' ? 'selected' : ''}}>Male</option>
                            <option value="2" {{($job->gender)=='2' ? 'selected' : ''}}>Female</option>

                        </select>
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('education','Education',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('education',$job->education,array('class'=>'form-control')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('job_time','Job Time',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="job_time" class="form-control">
                            <option value="" {{($job->job_time) ? '' : 'selected'}}>Select One...</option>

                            <option value="1" {{($job->job_time)=='1' ? 'selected' : ''}}>Full Time</option>

                            <option value="2" {{($job->job_time)=='2' ? 'selected' : ''}}>Part Time</option>

                            <option value="3" {{($job->job_time)=='3' ? 'selected' : ''}}>Freelance</option>

                        </select>
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('years_experience','year of Exeperience',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('years_experience',$job->years_experience,array('class'=>'form-control')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('job_description','Job Description',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-9">
                        {{ Form::textarea('job_description',$job->job_description,array('class'=>'form-control ckeditor','id'=>'job_description','required'=>'required')) }}
                    </div>
                </div>

                <div class="form-group">

                    {{ Form::label('status','Status',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="status" class="form-control" required="">
                            <option value="1" {{($job->status)=='1' ? 'selected' : ''}}>Active</option>
                            <option value="0" {{($job->status)=='0' ? 'selected' : ''}}>Not Active</option>
                        </select>
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('image','Image',['class' => 'control-label col-sm-3']) }}

                            <div class="col-md-9">
                                {{ Form::file('image',['class'=>'file-input']) }}

                                @if($job->image)
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="{{url('public/storage/Images/studyCompanies/'.$job->image)}}" name="df_image" style="width:100px;height:100px;"/>
                                            </div>

                                        </div>
                                    </div>
                                @endif


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

