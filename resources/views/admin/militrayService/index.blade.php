@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Militray Service
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Militray Service</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->
    @include('admin/elements/flash')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">Militray Service</h5>

            <a href="{{route('admin.militrayService.create')}}" class="btn bg-teal-400 btn-labeled btn-rounded pull-right" ><b><i class=" icon-plus-circle2"></i></b>Add</a>
        </div>

        <br>

        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th> ID</th>
                    <th>English name</th>
                    <th>Arabic name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- services variable came from MilitrayServiceCtrl --}}
                @foreach ($services as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->name_ar }}</td>
                        {{-- Actions --}}
                        <td>
                            {{-- edit militrayService --}}
                            <a href="{{route('admin.militrayService.edit',$item->id)}}" >
                                <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-pencil"></i></span>
                            </a>

                            @if(Auth::user()->role != 3)
                                <a  onclick="return confirm('Are you sure?')"
                                    href="#" id="delete">

                                    <form style="display: inline;" action="{{route('admin.militrayService.destroy',$item->id)}}"  method="POST">
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
    </div>

@endsection
