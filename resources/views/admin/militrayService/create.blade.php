@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} |  Militray Service
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Militray Service </h4>
            </div>
        </div>

    </div>

    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">
                Militray Service
            </h5>
        </div>

        <br>

            {!! Form::open(['route'=>'admin.militrayService.store','method'=>'Post','class'=>'form-horizontal','style'=>'margin:20px','files'=>true]) !!}

                <div class="form-group">
                    {{ Form::label('name','English Name',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-6">
                        {{ Form::text('name',old('name'),array('class'=>'form-control')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('name_ar','Arabic Name',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-6">
                        {{ Form::text('name_ar',old('name_ar'),array('class'=>'form-control')) }}
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
