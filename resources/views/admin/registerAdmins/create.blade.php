@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Admins
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Admins</h4>
            </div>
        </div>

    </div>
    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">
                Create New Admin
            </h5>
        </div>

        <br>

            {!! Form::open(['route'=>'admin.registerAdmins.store','method'=>'Post','class'=>'form-horizontal','style'=>'margin:20px','files'=>true]) !!}

                <div class="form-group">
                    {{ Form::label('name','Name',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('name',old('name'),array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('email','Email',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::email('email',null,array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('password','Password',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <input type="password" class="form-control" name="password" required="required">
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('role','Type',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::select('role', [1 => 'Manager',  2=> 'Admin',3=>'Writer'], trans('messages.Manager')) }}
                     </div>
                </div>


                <br>
                <div class="form-group text-center">
                    {{ Form::submit('Add',array('class'=>'btn btn-primary btn-lg')) }}
                </div>
                {!! Form::close() !!}

    </div>
    <!-- /horizontal form modal -->


@endsection

@section('footer')

@endsection
