@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} |  About
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - About </h4>

                <h4>Image Dimensions Width : 550px -- Height : 370px</h4>
            </div>
        </div>

    </div>

    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">
                About
            </h5>
        </div>

        <br>
            {!! Form::open(['route'=>['admin.about.update',$about->id],'method'=>'Post','class'=>'form-horizontal','style'=>'margin:20px','files'=>true]) !!}

            {{ Form::hidden('_method','Put') }}

            <div class="form-group">
                {{ Form::label('description','English Description',['class' => 'control-label col-sm-3']) }}
                <div class="col-md-6">
                    {{ Form::textarea('description',$about->description,array('class'=>'form-control ckeditor','id'=>'description','required'=>'required')) }}
                 </div>
            </div>

             <div class="form-group">
                 {{ Form::label('description_ar','Arabic Description',['class' => 'control-label col-sm-3']) }}
                 <div class="col-md-6">
                     {{ Form::textarea('description_ar',$about->description_ar,array('class'=>'form-control ckeditor','id'=>'description_ar','required'=>'required')) }}
                  </div>
             </div>

             <div class="form-group">
                 {{ Form::label('home_description','English Home Description',['class' => 'control-label col-sm-3']) }}
                 <div class="col-md-6">
                     {{ Form::textarea('home_description',$about->home_description,array('class'=>'form-control ckeditor','id'=>'home_description','required'=>'required')) }}
                  </div>
             </div>

             <div class="form-group">
                 {{ Form::label('home_description_ar','Arabic Home Description',['class' => 'control-label col-sm-3']) }}
                 <div class="col-md-6">
                     {{ Form::textarea('home_description_ar',$about->home_description_ar,array('class'=>'form-control ckeditor','id'=>'home_description_ar','required'=>'required')) }}
                  </div>
             </div>

                <div class="form-group">
                    {{ Form::label('image','Image' ,['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-9">
                        {{ Form::file('image',['class'=>'file-input']) }}

                        <img src="{{url('public/storage/Images/about/'.$about->image)}}" class="img-responsive" style="width:100px;height:100px;" />
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
        CKEDITOR.replace('description_ar', {
          language: 'ar'
        });

        CKEDITOR.replace('home_description_ar', {
          language: 'ar'
        });
    </script>
@endsection
