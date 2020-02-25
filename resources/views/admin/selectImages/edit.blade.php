@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} |  Sliders
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Select Images </h4>
            </div>
        </div>

    </div>

    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">
                Select Type : {{$image->selectType}} - Type : {{$image->type}}
            </h5>
        </div>

        <br>
            {!! Form::open(['route'=>['admin.selectImages.update',$image->id],'method'=>'Post','class'=>'form-horizontal','style'=>'margin:20px','files'=>true]) !!}
            {{ Form::hidden('_method','Put') }}

                <div class="form-group">
                    {{ Form::label('image','Image' ,['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-9">
                        {{ Form::file('image',['class'=>'file-input']) }}

                        <img src="{{url('public/storage/Images/selectImages/'.$image->image)}}" class="img-responsive" style="width:100px;height:100px;" />
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
