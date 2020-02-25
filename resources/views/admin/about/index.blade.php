@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | About
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - About</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->
    @include('admin/elements/flash')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">About</h5>

        </div>

        <br>

        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th> ID</th>
                    <th>English Home Description</th>

                    <th>Image</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- sliders variable came from SlidersCtrl --}}

                    <tr>
                        <td>1</td>
                        <td>{!! $about->home_description !!}</td>

                        <td class="col-md-4">
                            <img src="{{url('public/storage/Images/about/'.$about->image)}}" class="img-responsive" style="width:100px;height:100px;border-radius:50%;" />

                        </td>
                        {{-- Actions --}}
                        <td>
                            {{-- show information --}}
                            <a data-toggle="modal" data-target="#myModal{{$about->id}}">
                                    <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-eye"></i></span>
                            </a>
                            {{-- edit about --}}
                            <a href="{{route('admin.about.edit',$about->id)}}" >
                                <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-pencil"></i></span>
                            </a>

                        </td>
                    </tr>


            </tbody>
        </table>


        <div class="modal" id="myModal{{$about->id}}">
            <div class="modal-dialog" style="width: 100%">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Title: About</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <h2 class="text-center" style="background-color: darkgray;color:firebrick">Details </h2>

                        <table class="table table-bordered table-dark">
                            <tbody>

                                <tr>
                                    <th scope="row">
                                        Arabic Home Description
                                    </th>
                                    <td>{!! $about->home_description_ar !!}</td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        English Description
                                    </th>
                                    <td>{!! $about->description !!}</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Arabic Description
                                    </th>
                                    <td>{!! $about->description_ar !!}</td>
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
    </div>

@endsection
