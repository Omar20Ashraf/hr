@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Certificates
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - certificates</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->
    @include('admin/elements/flash')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">
                certificates
            </h5>
        </div>

        <br>

            {!! Form::open(['route'=>'admin.storeCertificate','method'=>'Post','class'=>'form-horizontal','style'=>'margin:20px','files'=>true]) !!}

                {{ Form::hidden('user_id', $user_id) }}
                {{ Form::hidden('type', $type) }}
                {{ Form::hidden('folderName', $folderName) }}

                <div class="form-group">
                    {{ Form::label('certificates','Certificates',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-9">
                        <div class="col-md-9">
                            <input name="certificates[]" type="file" onchange="ShowCerificate(this,1)">
                            <input name="certificates[]" type="file" style="display: none" id="certificates_1" onchange="ShowCerificate(this,2)">
                            <input name="certificates[]" type="file" style="display: none" id="certificates_2" onchange="ShowCerificate(this,3)">
                            <input name="certificates[]" type="file" style="display: none" id="certificates_3" onchange="ShowCerificate(this,4)">
                        </div>
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
