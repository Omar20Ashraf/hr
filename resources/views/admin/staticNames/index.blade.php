@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Global Names
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> -Global Names</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->
    @include('admin/elements/flash')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">Global Names</h5>

            <a href="{{route('admin.editGlobalNames',$name->id)}}" class="btn bg-teal-400 btn-labeled btn-rounded pull-right" ><b><i class=" icon-plus-circle2"></i></b>Update</a>
        </div>

        <br>

        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th> Name</th>
                    <th>English</th>
                    <th>Arabic</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        {{ $name->name }}
                    </th>
                    <td>{{ $name->name }}</td>
                    <td>{{ $name->name_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->icarier }}
                    </th>
                    <td>{{ $name->icarier }}</td>
                    <td>{{ $name->icarier_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->istudy }}
                    </th>
                    <td>{{ $name->istudy }}</td>
                    <td>{{ $name->istudy_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->imedia }}
                    </th>
                    <td>{{ $name->imedia }}</td>
                    <td>{{ $name->imedia_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->ilife }}
                    </th>
                    <td>{{ $name->ilife }}</td>
                    <td>{{ $name->ilife_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->read_more }}
                    </th>
                    <td>{{ $name->read_more }}</td>
                    <td>{{ $name->read_more_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->phone }}
                    </th>
                    <td>{{ $name->phone }}</td>
                    <td>{{ $name->phone_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->contact_us }}
                    </th>
                    <td>{{ $name->contact_us }}</td>
                    <td>{{ $name->contact_us_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->more_info }}
                    </th>
                    <td>{{ $name->more_info }}</td>
                    <td>{{ $name->more_info_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->write_email }}
                    </th>
                    <td>{{ $name->write_email }}</td>
                    <td>{{ $name->write_email_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->gender }}
                    </th>
                    <td>{{ $name->gender }}</td>
                    <td>{{ $name->gender_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->address }}
                    </th>
                    <td>{{ $name->address }}</td>
                    <td>{{ $name->address_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->image }}
                    </th>
                    <td>{{ $name->image }}</td>
                    <td>{{ $name->image_ar }}</td>
                </tr>

                <tr>
                    <th scope="row">
                        {{ $name->video }}
                    </th>
                    <td>{{ $name->video }}</td>
                    <td>{{ $name->video_ar }}</td>
                </tr>

                <tr>
                    <th scope="row">
                        {{ $name->email }}
                    </th>
                    <td>{{ $name->email }}</td>
                    <td>{{ $name->email_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->password }}
                    </th>
                    <td>{{ $name->password }}</td>
                    <td>{{ $name->password_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->re_password }}
                    </th>
                    <td>{{ $name->re_password }}</td>
                    <td>{{ $name->re_password_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->login }}
                    </th>
                    <td>{{ $name->login }}</td>
                    <td>{{ $name->login_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->register }}
                    </th>
                    <td>{{ $name->register }}</td>
                    <td>{{ $name->register_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->login_now }}
                    </th>
                    <td>{{ $name->login_now }}</td>
                    <td>{{ $name->login_now_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->register_now }}
                    </th>
                    <td>{{ $name->register_now }}</td>
                    <td>{{ $name->register_now_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->create_account }}
                    </th>
                    <td>{{ $name->create_account }}</td>
                    <td>{{ $name->create_account_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->birth_date }}
                    </th>
                    <td>{{ $name->birth_date }}</td>
                    <td>{{ $name->birth_date_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                      {{ $name->work_experience }}
                    </th>
                    <td>{{ $name->work_experience }}</td>
                    <td>{{ $name->work_experience_ar }}</td>
                </tr>

                <tr>
                    <th scope="row">
                        {{ $name->military_service }}
                    </th>
                    <td>{{ $name->military_service }}</td>
                    <td>{{ $name->military_service_ar }}</td>
                </tr>

                <tr>
                    <th scope="row">
                        {{ $name->contact }}
                    </th>
                    <td>{{ $name->contact }}</td>
                    <td>{{ $name->contact_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->skills }}
                    </th>
                    <td>{{ $name->skills }}</td>
                    <td>{{ $name->skills_ar }}</td>
                </tr>

                <tr>
                    <th scope="row">
                        {{ $name->job }}
                    </th>
                    <td>{{ $name->job }}</td>
                    <td>{{ $name->job_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                       {{ $name->location }}
                    </th>
                    <td>{{ $name->location }}</td>
                    <td>{{ $name->location_ar }}</td>
                </tr>

                <tr>
                    <th scope="row">
                        {{ $name->full_time }}
                    </th>
                    <td>{{ $name->full_time }}</td>
                    <td>{{ $name->full_time_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->part_time }}
                    </th>
                    <td>{{ $name->part_time }}</td>
                    <td>{{ $name->part_time_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->freelance }}
                    </th>
                    <td>{{ $name->freelance }}</td>
                    <td>{{ $name->freelance_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->date }}
                    </th>
                    <td>{{ $name->date }}</td>
                    <td>{{ $name->date_ar }}</td>
                </tr>

                <tr>
                    <th scope="row">
                        {{ $name->company_work_date }}
                    </th>
                    <td>{{ $name->company_work_date }}</td>
                    <td>{{ $name->company_work_date_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->get_in_touch }}
                    </th>
                    <td>{{ $name->get_in_touch }}</td>
                    <td>{{ $name->get_in_touch_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        {{ $name->submit }}
                    </th>
                    <td>{{ $name->submit }}</td>
                    <td>{{ $name->submit_ar }}</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection

@section('footer')
@endsection
