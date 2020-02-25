@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Media Companies
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Media Companies</h4>
            </div>
        </div>

    </div>

    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">
                Add
            </h5>
        </div>

        <br>

            {!! Form::open(['route'=>'admin.mediaCompanines.store','method'=>'Post','class'=>'form-horizontal','style'=>'margin:20px','files'=>true]) !!}

                <div class="form-group">
                    {{ Form::label('name','Company Name',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('name',old('name'),array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('phone','Company phone',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('phone',old('phone'),array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('email','Company Email',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::email('email',old('email'),array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('address','Company Address',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('address',old('address'),array('class'=>'form-control')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('job_title','Job Title',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('job_title',old('job_title'),array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('exp_level','Experience Level',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('exp_level',old('exp_level'),array('class'=>'form-control')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('gender','Gender',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="gender" class="form-control">
                            <option value="">Select One...</option>
                            <option value="1" {{(old('gender') == 1) ? 'selected' : ''}}>Male</option>
                            <option value="2" {{(old('gender') == 2) ? 'selected' : ''}}>Female</option>
                        </select>
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('education','Education',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('education',old('education'),array('class'=>'form-control')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('job_time','Talented Time',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="job_time" class="form-control">
                            <option value="">Select One...</option>

                            <option value="0"> Full Time </option>

                            <option value="1"> Part Time </option>

                            <option value="2"> Freelance </option>

                        </select>
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('years_experience','year of Exeperience',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('years_experience',old('years_experience'),array('class'=>'form-control')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('job_description','Talented Description',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-9">
                        {{ Form::textarea('job_description',null,array('class'=>'form-control ckeditor','id'=>'job_description','required'=>'required')) }}
                    </div>
                </div>

                <div class="form-group">

                    {{ Form::label('status','Status',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="status" class="form-control" required>
                            <option value="">Select One...</option>
                            <option value="1">Active</option>
                            <option value="0">Not Active</option>
                        </select>
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('image','Image',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-9">
                        {{ Form::file('image',['class'=>'file-input','required'=>'required']) }}
                    </div>
                </div>

                <br>
                <div class="form-group text-center">
                    {{ Form::submit('Create',array('class'=>'btn btn-primary btn-lg')) }}
                </div>
            {!! Form::close() !!}

    </div>
    <!-- /horizontal form modal -->


@endsection

