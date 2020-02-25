@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Media Companies
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Media Companies</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->
    @include('admin/elements/flash')

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">Media Companies</h5>
            <a href="{{ route('admin.mediaCompanines.create') }}" class="btn bg-teal-400 btn-labeled btn-rounded pull-right" ><b><i class=" icon-plus-circle2"></i></b>New</a>
        </div>

        <br>

        <table class="table table-bordered table-hover datatable-highlight" id="companies">
            <thead>
                <tr>
                    <th> ID </th>
                    <th>Company Name</th>
                    <th>Phone</th>
                    <th>E-mail</th>
                    <th>Talented Title</th>
                    <th>Gender</th>
                    <th>Status</th>
                    <th>Image</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$job->name}}</td>
                        <td>{{$job->phone}}</td>
                        <td>{{$job->email}}</td>
                        <td>{{$job->job_title}}</td>
                        <td>
                            @if ($job->gender == '1')
                                Male
                            @elseif($job->gender == '2')
                                Female
                            @endif
                        </td>
                        <td>
                            @if ($job->status == '1')
                                <span class="label label-success label-rounded">Active</span>
                            @else
                                    <span class="label label-danger label-rounded label-icon" >Not Active</span>
                            @endif
                        </td>
                        <td>
                            @if($job->image)
                                <img src="{{url('public/storage/Images/mediaCompanies/'.$job->image)}}" class="img-responsive" style="width:100px;height:100px;border-radius:50%;" />
                            @else
                                No Image
                            @endif
                        </td>

                        <td>
                            {{-- show information --}}
                            <a data-toggle="modal" data-target="#myModal{{$job->id}}">
                                    <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-eye"></i></span>
                            </a>
                        {{-- //edit the job --}}
                            <a href="{{route('admin.mediaCompanines.edit',$job->id) }}" >
                                <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-pencil"></i></span>
                            </a>
                            @if(Auth::user()->role != 3)
                            <a  onclick="return confirm('Are you sure?')"
                                href="#" id="delete">

                                <form style="display: inline;" action="{{route('admin.mediaCompanines.destroy',$job->id)}}"  method="POST">
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

        @foreach ($jobs as $item)
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
                                            Experience Level
                                        </th>
                                        <td>{{ $item->exp_level }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Education
                                        </th>
                                        <td>{{ $item->education }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Talented Time
                                        </th>
                                        <td>
                                            @if ($item->job_time == '0')
                                                Full Time
                                            @elseif($item->job_time == '1')
                                                Part Time
                                            @elseif($item->job_time == '2')
                                                FreeLance
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Years Of Experience
                                        </th>
                                        <td>{{ $item->years_experience }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Job Description
                                        </th>
                                        <td>{!! $item->job_description !!}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            Address
                                        </th>
                                        <td>{!! $item->address !!}</td>
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
        $('#companies').DataTable();
    } );
</script>
@endsection
