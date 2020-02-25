@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} |  Home Sliders
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Home Sliders </h4>
                
                @if($type == 'firstSlider')
                    <h4>Slider Dimensions Width : 1350px -- Height : 530px</h4>
                @else
                    <h4>Slider Dimensions Width : 1350px -- Height : 370px</h4>
                @endif
                
            </div>
        </div>

    </div>

    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">
               Home Sliders - {{$type}}
            </h5>
        </div>

        <br>

            {!! Form::open(['route'=>['admin.storeHomeSlider',$type],'method'=>'Post','class'=>'form-horizontal','style'=>'margin:20px','files'=>true]) !!}
                
                @if(!($type == 'firstSlider'))

                    <div class="form-group">
                        {{ Form::label('link','Website Link',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-6">
                            {{ Form::text('link',old('link'),array('class'=>'form-control')) }}
                         </div>
                    </div>

                @endif
                
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
