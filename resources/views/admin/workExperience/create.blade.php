@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Work Experience
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Work Experience</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">
                Work Experience
            </h5>
        </div>

        <br>

            {!! Form::open(['route'=>'admin.storeExperience','method'=>'Post','class'=>'form-horizontal','style'=>'margin:20px','files'=>true]) !!}

                {{ Form::hidden('user_id', $user_id) }}
                {{ Form::hidden('type', $type) }}

                <div class="form-group">
                    {{ Form::label('name','Company Name',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('name',old('name'),array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('from_date','Company From Date',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::date('from_date',old('from_date'),array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('to_date','Company To Date',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::date('to_date',old('to_date'),array('class'=>'form-control','required'=>'required')) }}
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
    function ShowCerificate(that,$num){
        var option_value = that.value;
        if(option_value){
            $('#certificates_'+$num).show();
        }
    }
</script>

@endsection
