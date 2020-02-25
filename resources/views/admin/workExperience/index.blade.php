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
            <h5 class="panel-title col-sm-6 pull-left">Work Experience</h5>
            <a href="{{ route('admin.crreateExperience',['type'=>$type,'user_id'=>$user_id]) }}" class="btn bg-teal-400 btn-labeled btn-rounded pull-right" ><b><i class=" icon-plus-circle2"></i></b>New</a>
        </div>

        <br>

        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th> ID</th>
                    <th>Company Name</th>
                    <th>Company From Date</th>
                    <th>Company To Date</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- sliders variable came from SlidersCtrl --}}
                @forelse ($experiences as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$item->name}}</td>

                        <td>{{$item->from_date}}</td>
                        <td>{{$item->to_date}}</td>
                        {{-- Actions --}}
                        <td>
                            @if(Auth::user()->role != 3)
                            <a  onclick="return confirm('Are you sure?')"
                                href="#" id="delete">

                                <form style="display: inline;" action="{{route('admin.deleteExperience',$item->id)}}"  method="POST">
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

                @empty
                    <div class="container">
                        <h3>There isn`t Work Experience For This User</h3>
                    </div>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
