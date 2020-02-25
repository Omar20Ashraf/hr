@extends('admin.layouts.app')

@section('title')
    {{ config('app.name') }} | Study Names
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">Home</span> -Study Names</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->
    @include('admin/elements/flash')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">Study Names</h5>

            <a href="{{route('admin.editStudyStaticNames',$name->id)}}" class="btn bg-teal-400 btn-labeled btn-rounded pull-right" ><b><i class=" icon-plus-circle2"></i></b>Update</a>
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
                        Company Name
                    </th>
                    <td>{{ $name->company_name }}</td>
                    <td>{{ $name->company_name_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        Job Title
                    </th>
                    <td>{{ $name->job_title }}</td>
                    <td>{{ $name->job_title_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        Teachers
                    </th>
                    <td>{{ $name->select_employee }}</td>
                    <td>{{ $name->select_employee_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        Teachers Slug
                    </th>
                    <td>{{ $name->select_employee_slug }}</td>
                    <td>{{ $name->select_employee_slug_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        Companines
                    </th>
                    <td>{{ $name->select_company }}</td>
                    <td>{{ $name->select_company_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        Companines Slug
                    </th>
                    <td>{{ $name->select_company_slug }}</td>
                    <td>{{ $name->select_company_slug_ar }}</td>
                </tr>

                <tr>
                    <th scope="row">
                        Experience Level
                    </th>
                    <td>{{ $name->experience_level }}</td>
                    <td>{{ $name->experience_level_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        Educational Qualification
                    </th>
                    <td>{{ $name->education }}</td>
                    <td>{{ $name->education_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        Years of experience
                    </th>
                    <td>{{ $name->experience_years }}</td>
                    <td>{{ $name->experience_years_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        Job Required
                    </th>
                    <td>{{ $name->job_description }}</td>
                    <td>{{ $name->job_description_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        First Skill
                    </th>
                    <td>{{ $name->first_skill }}</td>
                    <td>{{ $name->first_skill_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        Second Skill
                    </th>
                    <td>{{ $name->second_skill }}</td>
                    <td>{{ $name->second_skill_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        Third Skill
                    </th>
                    <td>{{ $name->third_skill }}</td>
                    <td>{{ $name->third_skill_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        Forth Skill
                    </th>
                    <td>{{ $name->forth_skill }}</td>
                    <td>{{ $name->forth_skill_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        Certificates
                    </th>
                    <td>{{ $name->certificates }}</td>
                    <td>{{ $name->certificates_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        Personal Information
                    </th>
                    <td>{{ $name->personal_info }}</td>
                    <td>{{ $name->personal_info_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        Talk About your self
                    </th>
                    <td>{{ $name->talk_about }}</td>
                    <td>{{ $name->talk_about_ar }}</td>
                </tr>
                <tr>
                    <th scope="row">
                        Qualifications
                    </th>
                    <td>{{ $name->qualification }}</td>
                    <td>{{ $name->qualification_ar }}</td>
                </tr>

                <tr>
                    <th scope="row">
                        Type Of The Job
                    </th>
                    <td>{{ $name->job_type }}</td>
                    <td>{{ $name->job_type_ar }}</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection

@section('footer')
@endsection
