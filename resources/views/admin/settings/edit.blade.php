@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Settings
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Settings</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">
                    Website Information
            </h5>
        </div>

        <br>

        {!! Form::open(['url'=>['admin/editSetting',$site->id],'method'=>'Post','class'=>'form-horizontal','style'=>'margin:20px','files'=>true]) !!}
            {{ Form::hidden('_method','Put') }}

            <div class="form-group">
                {{ Form::label('email','Email',['class' => 'control-label col-sm-3']) }}
                <div class="col-md-4">
                    {{ Form::text('email',$site->email,array('class'=>'form-control')) }}
                 </div>
            </div>
            <div class="form-group">
                {{ Form::label('phone','Phone',['class' => 'control-label col-sm-3']) }}
                <div class="col-md-4">
                    {{ Form::text('phone',$site->phone,array('class'=>'form-control')) }}
                 </div>
            </div>
            <div class="form-group">
                {{ Form::label('address','Address',['class' => 'control-label col-sm-3']) }}
                <div class="col-md-4">
                    {{ Form::text('address',$site->address,array('class'=>'form-control')) }}
                 </div>
            </div>
            <div class="form-group">
                {{ Form::label('website','Website',['class' => 'control-label col-sm-3']) }}
                <div class="col-md-4">
                    {{ Form::text('website',$site->website,array('class'=>'form-control')) }}
                 </div>
            </div>

            <div class="form-group">
                {{ Form::label('facebook',trans('messages.Facebook'),['class' => 'control-label col-sm-3']) }}
                <div class="col-md-4">
                    {{ Form::text('facebook',$site->facebook,array('class'=>'form-control')) }}
                 </div>
            </div>

            <div class="form-group">
                {{ Form::label('twitter',trans('messages.Twitter'),['class' => 'control-label col-sm-3']) }}
                <div class="col-md-4">
                    {{ Form::text('twitter',$site->twitter,array('class'=>'form-control')) }}
                 </div>
            </div>
            <div class="form-group">
                {{ Form::label('linkedin',trans('messages.Linkedin'),['class' => 'control-label col-sm-3']) }}
                <div class="col-md-4">
                    {{ Form::text('linkedin',$site->linkedin,array('class'=>'form-control')) }}
                 </div>
            </div>

            <div class="form-group">
                {{ Form::label('dribbble',trans('messages.Dribbble'),['class' => 'control-label col-sm-3']) }}
                <div class="col-md-4">
                    {{ Form::text('dribbble',$site->dribbble,array('class'=>'form-control')) }}
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

