@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Admins
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Admins</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">Admins</h5>

            @if(Auth::user()->role == 1)
            <a href="{{ route('admin.registerAdmins.create') }}" class="btn bg-teal-400 btn-labeled btn-rounded pull-right" ><b><i class=" icon-plus-circle2"></i></b>New</a>
            @endif
        </div>

        <br>

        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th> Id</th>
                    <th>Name</th>
                    <th>Email</th>

                    <th>Type</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- landmarks varibale came from LandmarksCtrl --}}
                @forelse ($admins as $admin)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$admin->name}}</td>
                        <td>{{$admin->email}}</td>

                        <td>
                            @if($admin->role == 1)
                                Manager
                            @elseif($admin->role == 2)
                                Admin
                            @else
                                Writer
                            @endif

                        </td>

                        {{-- Actions --}}
                        <td>
                            @if(Auth::user()->role == 1)
                            {{-- edit Admins --}}
                            <a href="{{route('admin.registerAdmins.edit',$admin->id) }}" >
                                <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-pencil"></i></span>
                            </a>
                            @endif
                            {{-- delete Admins --}}
                            @if(Auth::user()->role == 1)
                                <a onclick="return confirm('Are you sure?')" href="#"  id="delete">

                                    <form style="display: inline;" action="{{route('admin.registerAdmins.destroy',$admin->id)}}"  method="POST">
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
                    <h4 class="text-center">No Items Has Been Added</h4><br>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection

@section('footer')

@endsection
