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
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Sliders </h4>

                <h4>Image Dimensions Width : 1350px -- Height : 290px</h4>
            </div>
        </div>

    </div>

    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">
                Sliders
            </h5>
        </div>

        <br>
            {!! Form::open(['route'=>['admin.sliders.update',$slider->id],'method'=>'Post','class'=>'form-horizontal','style'=>'margin:20px','files'=>true]) !!}
            {{ Form::hidden('_method','Put') }}

             <div class="form-group">
                 {{ Form::label('title','English Title',['class' => 'control-label col-sm-3']) }}
                 <div class="col-md-6">
                     {{ Form::text('title',$slider->title,array('class'=>'form-control')) }}
                  </div>
             </div>

             <div class="form-group">
                 {{ Form::label('title_ar','Arabic Title',['class' => 'control-label col-sm-3']) }}
                 <div class="col-md-6">
                     {{ Form::text('title_ar',$slider->title_ar,array('class'=>'form-control')) }}
                  </div>
             </div>

             <div class="form-group">
                 {{ Form::label('description','English description',['class' => 'control-label col-sm-3']) }}
                 <div class="col-md-6">
                     {{ Form::textarea('description',$slider->description,array('class'=>'form-control ckeditor','id'=>'description','required'=>'required')) }}
                  </div>
             </div>

             <div class="form-group">
                 {{ Form::label('description_ar','Arabic description',['class' => 'control-label col-sm-3']) }}
                 <div class="col-md-6">
                     {{ Form::textarea('description_ar',$slider->description_ar,array('class'=>'form-control ckeditor','id'=>'description_ar','required'=>'required')) }}
                  </div>
             </div>

                <div class="form-group">
                    {{ Form::label('image','Image' ,['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-9">
                        {{ Form::file('image',['class'=>'file-input']) }}

                        <img src="{{url('public/storage/Images/sliders/'.$slider->image)}}" class="img-responsive" style="width:100px;height:100px;" />
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
