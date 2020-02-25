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
                
                @if($slider->type == 'firstSlider')
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
                Home Sliders - {{$slider->type}}
            </h5>
        </div>

        <br>
            {!! Form::open(['route'=>['admin.updateHomeSliders',$slider->id],'method'=>'Post','class'=>'form-horizontal','style'=>'margin:20px','files'=>true]) !!}
            {{ Form::hidden('_method','Put') }}

            {{ Form::hidden('oldImage', $slider->image) }}

                @if(!($slider->type == 'firstSlider'))

                    <div class="form-group">
                        {{ Form::label('link','Website Link',['class' => 'control-label col-sm-3']) }}
                        <div class="col-md-6">
                            {{ Form::text('link',$slider->link,array('class'=>'form-control')) }}
                         </div>
                    </div>

                @endif
                
                <div class="form-group">
                    {{ Form::label('image','Image' ,['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-9">
                        {{ Form::file('image',['class'=>'file-input']) }}

                        <img src="{{url('public/storage/Images/homeSliders/'.$slider->image)}}" class="img-responsive" style="width:100px;height:100px;" />
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
    <script>
        CKEDITOR.replace('description', {
          language: 'ar'
        });

    </script>
@endsection
