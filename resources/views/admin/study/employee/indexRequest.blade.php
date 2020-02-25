@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Study Employees Requests
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Study Employees Requests</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->
    @include('admin/elements/flash')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">Study Employees Requests</h5>
        </div>

        <br>

        <table class="table table-bordered table-hover datatable-highlight" id="employees">
            <thead>
                <tr>
                    <th> ID </th>
                    <th>Employee Name</th>
                    <th>E-mail</th>
                    <th>Job Title</th>
                    <th>Work Experience</th>
                    <th>Certificates</th>
                    <th>Status</th>
                    <th>Image</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->job_title}}</td>

                        {{-- //show work experience --}}
                        <td>
                            <a href="{{ route('admin.getExperience',['type'=>3,'user_id'=>$employee->id]) }}">
                                <span class="btn-success label-rounded label-icon" data-target="#edit">
                                        Work Experience
                                </span>
                            </a>
                        </td>

                        <td>
                            <a href="{{ route('admin.getCertificate',['type'=>3,'user_id'=>$employee->id,'folderName'=>'studyCertificates']) }}" >
                                <span class=" btn-warning label-rounded label-icon" data-target="#edit">Cerificates</span>
                            </a>

                        </td>
                        <td>
                            @if ($employee->status == '1')
                                <span class="label label-success label-rounded">Active</span>
                            @else
                                    <a onclick="return confirm('Are you sure?')" href="{{route('admin.approveStudyEmployee',$employee->id)}}">
                                        <span class="label label-danger label-rounded label-icon" >Not Active,Active it Now</span>
                                    </a>
                            @endif
                        </td>
                        <td>
                            <img src="{{url('public/storage/Images/studyEmployee/'.$employee->image)}}" class="img-responsive" style="width:100px;height:100px;border-radius:50%;" />
                        </td>


                        <td>
                            {{-- show information --}}
                            <a data-toggle="modal" data-target="#myModal{{$employee->id}}">
                                    <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-eye"></i></span>
                            </a>

                            @if(Auth::user()->role != 3)
                            <a  onclick="return confirm('Are you sure?')"
                                href="#" id="delete">

                                <form style="display: inline;" action="{{route('admin.studyEmployees.destroy',$employee->id)}}"  method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class='label label-danger label-rounded label-icon' type='submit' value='submit'>
                                        <i class='icon-trash'> </i>
                                    </button>
                                </form>
                            </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @foreach ($employees as $item)
        <div class="modal" id="myModal{{$item->id}}">
            <div class="modal-dialog" style="width: 100%">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Title: {{$item->name}}</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <h2 class="text-center" style="background-color: darkgray;color:firebrick">Details </h2>

                        <table class="table table-bordered table-dark">
                            <tbody>

                                    <tr>
                                        <th scope="row">
                                            Phone
                                        </th>
                                        <td>
                                           {{$item->phone}}
                                        </td>
                                    </tr>


                                    <tr>
                                        <th scope="row">
                                            Gender
                                        </th>
                                        <td>
                                            @if ($item->gender == '1')
                                                Male
                                            @elseif($item->gender == '2')
                                                Female
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Education
                                        </th>
                                        <td>{{ $item->education }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Birth Date
                                        </th>
                                        <td>{{ $item->birth_date }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Years Of Experience
                                        </th>
                                        <td>{{ $item->years_experience }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Military service
                                        </th>
                                        @if($item->military_service)
                                            @php
                                                $name = App\Models\MilitrayService::where('id',$item->military_service)->first();
                                                // dd($name);
                                            @endphp
                                            <td>
                                                {{ $name->name }}
                                            </td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Personal Information
                                        </th>
                                        <td>{!! $item->personal_info !!}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Address
                                        </th>
                                        <td>{!! $item->address !!}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">
                                            {{$skill_names->first_skill}}
                                        </th>
                                        <td>{{ $item->first_skill }}%</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">
                                            {{$skill_names->second_skill}}
                                        </th>
                                        <td>{{ $item->second_skill }}%</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">
                                            {{$skill_names->third_skill}}
                                        </th>
                                        <td>{{ $item->third_skill }}%</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">
                                            {{$skill_names->forth_skill}}
                                        </th>
                                        <td>{{ $item->forth_skill }}%</td>
                                    </tr>
                            </tbody>
                        </table>

                         </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        @endforeach
    </div>

@endsection

@section('footer')
<script>
    $(document).ready( function () {
        $('#employees').DataTable();
    } );
</script>
@endsection
