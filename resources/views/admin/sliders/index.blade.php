@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Sliders
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Sliders</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->
    @include('admin/elements/flash')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">Sliders</h5>

{{--             <a href="{{route('admin.sliders.create')}}" class="btn bg-teal-400 btn-labeled btn-rounded pull-right" ><b><i class=" icon-plus-circle2"></i></b>Add</a> --}}
        </div>

        <br>

        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th> ID</th>
                    <th>Arabic Title</th>
                    <th>English Title</th>
                    <th>Page Name</th>
                    <th>Image</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- sliders variable came from SlidersCtrl --}}
                @foreach ($sliders as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->title_ar }}</td>
                        <td>{{ $item->type }}</td>
                        <td>
                            <img src="{{url('public/storage/Images/sliders/'.$item->image)}}" class="img-responsive" style="width:100px;height:100px;border-radius:50%;" />

                        </td>
                        {{-- Actions --}}
                        <td>
                            {{-- show information --}}
                            <a data-toggle="modal" data-target="#myModal{{$item->id}}">
                                    <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-eye"></i></span>
                            </a>
                            {{-- edit sliders --}}
                            <a href="{{route('admin.sliders.edit',$item->id)}}" >
                                <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-pencil"></i></span>
                            </a>

                        </td>
                    </tr>


                @endforeach
            </tbody>
        </table>

        @foreach ($sliders as $item)
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
                                        English Description
                                    </th>
                                    <td>{!! $item->description !!}</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Arabic Description
                                    </th>
                                    <td>{!! $item->description_ar !!}</td>
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
