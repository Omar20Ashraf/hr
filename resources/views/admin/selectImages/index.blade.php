@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | SelectImages
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - SelectImages</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">SelectImages</h5>
        </div>

        <br>

        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th> ID</th>
                    <th>Select Type</th>
                    <th>Type</th>
                    <th>Image</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- images variable came from SalectImagesCtrl --}}
                @foreach ($images as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->selectType }}</td>
                        <td>{{ $item->type }}</td>
                        <td>
                            <img src="{{url('public/storage/Images/selectImages/'.$item->image)}}" class="img-responsive" style="width:100px;height:100px;" />

                        </td>
                        {{-- Actions --}}
                        <td>
                            {{-- edit selectImages --}}
                            <a href="{{route('admin.selectImages.edit',$item->id)}}" >
                                <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-pencil"></i></span>
                            </a>

                        </td>
                    </tr>


                @endforeach
            </tbody>
        </table>
    </div>

@endsection
