@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Study Employees
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Study Employees</h4>
            </div>
        </div>

    </div>

    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">
                Add
            </h5>
        </div>

        <br>

            {!! Form::open(['route'=>'admin.studyEmployees.store','method'=>'Post','class'=>'form-horizontal','style'=>'margin:20px','files'=>true]) !!}

                <div class="form-group">
                    {{ Form::label('name','Employee Name',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('name',old('name'),array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('phone','Employee phone',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('phone',old('phone'),array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('email','Employee Email',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::email('email',old('email'),array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('address','Employee Address',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('address',old('address'),array('class'=>'form-control')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('job_title','Job Title',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('job_title',old('job_title'),array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('gender','Gender',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="gender" class="form-control" required>
                            <option value="">Select One...</option>
                            <option value="1" {{(old('gender') == 1) ? 'selected' : ''}}>Male</option>
                            <option value="2" {{(old('gender') == 2) ? 'selected' : ''}}>Female</option>
                        </select>
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('education','Education',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('education',old('education'),array('class'=>'form-control')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('birth_date','Birth Date',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::date('birth_date',old('birth_date'),array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('years_experience','year of Exeperience',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('years_experience',old('years_experience'),array('class'=>'form-control')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('military_service','Military Service',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="military_service" class="form-control">
                            <option value="">Select One...</option>
                            @foreach($services as $service)

                                <option value="{{$service->id}}">
                                    {{$service->name}}
                                </option>
                            @endforeach
                        </select>
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('first_skill',$skill_names->first_skill,['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="first_skill" class="form-control">
                            @for($i=10;$i<=100;$i=$i+10)
                                <option value="{{$i}}">{{$i}}%</option>
                            @endfor
                        </select>
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('second_skill',$skill_names->second_skill,['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="second_skill" class="form-control">
                            @for($i=10;$i<=100;$i=$i+10)
                                <option value="{{$i}}">{{$i}}%</option>
                            @endfor
                        </select>
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('third_skill',$skill_names->third_skill,['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="third_skill" class="form-control">
                            @for($i=10;$i<=100;$i=$i+10)
                                <option value="{{$i}}">{{$i}}%</option>
                            @endfor
                        </select>
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('forth_skill',$skill_names->forth_skill,['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="forth_skill" class="form-control">
                            @for($i=10;$i<=100;$i=$i+10)
                                <option value="{{$i}}">{{$i}}%</option>
                            @endfor
                        </select>
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('personal_info','Personal Inforamtion',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-9">
                        {{ Form::textarea('personal_info',null,array('class'=>'form-control ckeditor','id'=>'personal_info','required'=>'required')) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('certificates','Cerificates',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-9">
                        <input name="certificates[]" type="file" onchange="ShowCerificate(this,1)">
                        <input name="certificates[]" type="file" style="display: none" id="certificates_1" onchange="ShowCerificate(this,2)">
                        <input name="certificates[]" type="file" style="display: none" id="certificates_2" onchange="ShowCerificate(this,3)">
                        <input name="certificates[]" type="file" style="display: none" id="certificates_3" onchange="ShowCerificate(this,4)">
                    </div>
                </div>

                <div class="form-group">

                    {{ Form::label('status','Status',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="status" class="form-control" required>
                            <option value="">Select one ...</option>
                            <option value="1">Active</option>
                            <option value="0">Not Active</option>
                        </select>
                     </div>
                </div>

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
