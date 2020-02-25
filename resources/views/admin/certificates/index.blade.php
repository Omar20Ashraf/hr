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
            <h5 class="panel-title col-sm-6 pull-left">Certificates</h5>
            <a href="{{ route('admin.crreateCertificate',['type'=>$type,'user_id'=>$user_id,'folderName'=>$folderName]) }}" class="btn bg-teal-400 btn-labeled btn-rounded pull-right" ><b><i class=" icon-plus-circle2"></i></b>{{ trans('messages.New') }}</a>
        </div>

        <br>

        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th> ID</th>
                    <th>Name</th>
                    <th>Name</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- sliders variable came from SlidersCtrl --}}
                @forelse ($certificates as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$item->name}}</td>

                        <td>
                            <a href="{{route('admin.dowloadCertificate',['file_name'=>$item->certificate,'folderName'=>$folderName])}}">
                                <i class="btn btn-success icon-download"></i>
                            </a>

                        </td>
                        {{-- Actions --}}
                        <td>
                            @if(Auth::user()->role != 3)
                            <a  onclick="return confirm('Are you sure?')"
                                href="#" id="delete">

                                <form style="display: inline;" action="{{route('admin.deleteCertificate',['id'=>$item->id,'folderName'=>$folderName])}}"  method="POST">
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
                        <h3>There isn`t Certificates For This User</h3>
                    </div>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
