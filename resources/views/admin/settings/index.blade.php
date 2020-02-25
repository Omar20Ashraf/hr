@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} |  Website Information
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> - Settings </h4>
            </div>
        </div>
    </div>
    <!-- /page header -->
    @include('admin/elements/flash')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left"> Website Information</h5>

            <a href="{{url('admin/editSetting/'.$info->id)}}" class="btn bg-teal-400 btn-labeled btn-rounded pull-right" ><b><i class=" icon-plus-circle2"></i></b>Edit</a>
        </div>

        <br>

        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th> Name</th>
                    <th>Informations</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <th scope="row">
                            Email
                        </th>
                        <td>{{ $info->email }}</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Phone
                        </th>
                        <td>{{ $info->phone }}</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Address
                        </th>
                        <td>{{ $info->address }}</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Website
                        </th>
                        <td>{{ $info->website }}</td>
                    </tr>

                    <tr>
                        <th scope="row">
                            Facebook
                        </th>
                        <td>{{ $info->facebook }}</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Twitter
                        </th>
                        <td>{{ $info->twitter }}</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Linkedin
                        </th>
                        <td>{{ $info->linkedin }}</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Dribbble
                        </th>
                        <td>{{ $info->dribbble }}</td>
                    </tr>
            </tbody>
        </table>
    </div>

@endsection

@section('footer')
@endsection
