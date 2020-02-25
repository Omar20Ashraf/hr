@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} |  Services
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Services </h4>
                
                <h4>Image Dimensions Width : 70px -- Height : 70px</h4>
            </div>
        </div>

    </div>

    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">
                Services
            </h5>
        </div>

        <br>

            {!! Form::open(['route'=>'admin.service.store','method'=>'Post','class'=>'form-horizontal','style'=>'margin:20px','files'=>true]) !!}


                <div class="form-group">
                    {{ Form::label('title','English Title',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-6">
                        {{ Form::text('title',old('title'),array('class'=>'form-control')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('title_ar','Arabic Title',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-6">
                        {{ Form::text('title_ar',old('title_ar'),array('class'=>'form-control')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('description','English description',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-6">
                        {{ Form::textarea('description',null,array('class'=>'form-control ckeditor','id'=>'description','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('description_ar','Arabic description',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-6">
                        {{ Form::textarea('description_ar',null,array('class'=>'form-control ckeditor','id'=>'description_ar','required'=>'required')) }}
                     </div>
                </div>
                
                <div class="form-group">
                    {{ Form::label('image','Image' ,['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-9">
                        {{ Form::file('image',['class'=>'file-input']) }}
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

@section('footer')
    <script>
        CKEDITOR.replace('description_ar', {
          language: 'ar'
        });

    </script>
@endsection
