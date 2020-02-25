@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Carier Employee
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">{{ trans('messages.Home') }}</span> - Carier Employee</h4>
            </div>
        </div>

    </div>

    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">
                Update
            </h5>
        </div>

        <br>

            {!! Form::open(['route'=>['admin.carierEmployees.update',$employee->id],'method'=>'Post','class'=>'form-horizontal','style'=>'margin:20px','files'=>true]) !!}

                {{ Form::hidden('_method','Put') }}

                {{ Form::hidden('id', $employee->id) }}
                {{ Form::hidden('ModelName', 'CarierEmployee') }}

                <div class="form-group">
                    {{ Form::label('name','Company Name',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('name',$employee->name,array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('phone','Company phone',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::number('phone',$employee->phone,array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('email','Company Email',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::email('email',$employee->email,array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('address','Company Address',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('address',$employee->address,array('class'=>'form-control')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('job','Job Title',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('job_title',$employee->job_title,array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('gender','Gender',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="gender" class="form-control" required>
                            <option value="" {{($employee->gender) ? '' : 'selected'}}>Select One...</option>
                            <option value="1" {{($employee->gender)=='1' ? 'selected' : ''}}>Male</option>
                            <option value="2" {{($employee->gender)=='2' ? 'selected' : ''}}>Female</option>

                        </select>
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('education','Education',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('education',$employee->education,array('class'=>'form-control')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('birth_date','Birth Date',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::date('birth_date',$employee->birth_date,array('class'=>'form-control','required'=>'required')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('years_experience','year of Exeperience',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        {{ Form::text('years_experience',$employee->years_experience,array('class'=>'form-control')) }}
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('military_service','Military Service',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">

                        <select name="military_service" class="form-control">
                            <option value="">Select One...</option>
                            @foreach($services as $service)

                                <option value="{{$service->id}}" {{($employee->military_service == $service->id) ? 'selected' : ''}}>
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
                                <option value="{{$i}}" {{($employee->first_skill == $i) ? 'selected' : ''}}>{{$i}}%</option>
                            @endfor
                        </select>
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('second_skill',$skill_names->second_skill,['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="second_skill" class="form-control">
                            @for($i=10;$i<=100;$i=$i+10)
                                <option value="{{$i}}" {{($employee->second_skill == $i) ? 'selected' : ''}}>{{$i}}%</option>
                            @endfor
                        </select>
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('third_skill',$skill_names->third_skill,['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="third_skill" class="form-control">
                            @for($i=10;$i<=100;$i=$i+10)
                                <option value="{{$i}}" {{($employee->third_skill == $i) ? 'selected' : ''}}>{{$i}}%</option>
                            @endfor
                        </select>
                     </div>
                </div>

                <div class="form-group">

                    {{ Form::label('forth_skill',$skill_names->forth_skill,['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="forth_skill" class="form-control">
                            @for($i=10;$i<=100;$i=$i+10)
                                <option value="{{$i}}" {{($employee->forth_skill == $i) ? 'selected' : ''}}>{{$i}}%</option>
                            @endfor
                        </select>
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('personal_info','Personal Experience',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-9">
                        {{ Form::textarea('personal_info',$employee->personal_info,array('class'=>'form-control ckeditor','id'=>'personal_info','required'=>'required')) }}
                    </div>
                </div>

                <div class="form-group">

                    {{ Form::label('status','Status',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-4">
                        <select name="status" class="form-control" required="">
                            <option value="1" {{($employee->status)=='1' ? 'selected' : ''}}>Active</option>
                            <option value="0" {{($employee->status)=='0' ? 'selected' : ''}}>Not Active</option>
                        </select>
                     </div>
                </div>

                <div class="form-group">
                    {{ Form::label('image','Image',['class' => 'control-label col-sm-3']) }}
                    <div class="col-md-9">
                        {{ Form::file('image',['class'=>'file-input']) }}

                        <img src="{{url('public/storage/Images/carierEmployee/'.$employee->image)}}" name="df_image" style="width:100px;height:100px;"/>
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

