@extends('admin.layouts.app')

@section('title')
    Home
@endsection

@section('header')

@endsection

@section('content')

<!-- Quick stats boxes -->

    <div class="home" style="margin: 20px;">
        @include('sweet::alert')
        @include('admin/elements/flash')

        {{-- @if(Auth::user()->role == 1) --}}
        <div class="col-lg-4">
            <!-- Members online -->
            <div class="panel bg-teal-400"  style="padding: 20px 0px;background-color: #63114a;border: 1px solid #9a8160;">
                <div class="panel-body">
                    <p class="text-center" style="font-size:20px;">Admins</p>

                    <div class="heading-elements visible-lg visible-md visible-xs visible-sm">
                        <br><br>
                        <span class="heading-text" style="font-size:20px;">{{App\Admin::count()}}</span>
                    </div>

                    <h3 class="no-margin"><a href="{{ route('admin.registerAdmins.index') }}" style="color:#fff;">
                        Admins
                    </a></h3>

                    <div class="text-muted" style="text-align:center;margin-top: 30px;">
                        <a href="{{ route('admin.registerAdmins.index') }}" style="color: #fff;border: 1px solid #fff;padding: 3px 10px;border-radius: 5px;"><i class="icon-arrow-right5"></i>View</a>
                    </div>
                </div>
            </div>
            <!-- /members online -->
        </div>

        <div class="col-lg-4">
            <!-- Members online -->
            <div class="panel bg-teal-400"  style="padding: 20px 0px;background-color: #35355a;border: 1px solid purple;">
                <div class="panel-body">
                    <p class="text-center" style="font-size:20px;">ICarier</p>
                    <div class="heading-elements visible-lg visible-md visible-xs visible-sm">
                        <br>
                        <br>
                        <span class="heading-text" style="font-size:20px;"> {{App\Models\JobCompany::count()}}</span>
                    </div>

                    <h3 class="no-margin"><a href="{{ route('admin.jobCompanies.index') }}" style="color:#fff;">
                         Companines
                    </a></h3>

                    <div class="text-muted" style="text-align:center;margin-top: 30px;">
                        <a href="{{ route('admin.jobCompanies.index') }}" style="color: #fff;border: 1px solid #fff;padding: 3px 10px;border-radius: 5px;"><i class="icon-arrow-right5"></i> View</a>
                    </div>
                </div>
            </div>
            <!-- /members online -->
        </div>
        <div class="col-lg-4">
            <!-- Members online -->
            <div class="panel bg-teal-400"  style="padding: 20px 0px;background-color: #2d995b;border: 1px solid purple;">
                <p class="text-center" style="font-size:20px;">ICarier</p>

                <div class="panel-body">
                    <div class="heading-elements visible-lg visible-md visible-xs visible-sm">
                        <span class="heading-text" style="font-size:20px;">{{App\Models\CarierEmployee::count()}}</span>
                    </div>


                    <h3 class="no-margin">
                        <a href="{{ route('admin.carierEmployees.index') }}" style="color:#fff;">
                            Employees
                        </a>
                    </h3>

                    <div class="text-muted" style="text-align:center;margin-top: 30px;">
                        <a href="{{ route('admin.carierEmployees.index') }}" style="color: #fff;border: 1px solid #fff;padding: 3px 10px;border-radius: 5px;"><i class="icon-arrow-right5"></i> View</a>
                    </div>
                </div>
            </div>
            <!-- /members online -->
        </div>

        <div class="col-lg-4">
            <!-- Members online -->
            <div class="panel bg-teal-400"  style="padding: 20px 0px;background-color: #795c61;border: 1px solid purple;">
                <div class="panel-body">
                    <p class="text-center" style="font-size:20px;">IMedia</p>
                    <div class="heading-elements visible-lg visible-md visible-xs visible-sm">
                        <br>
                        <br>
                        <span class="heading-text" style="font-size:20px;"> {{App\Models\MediaCompany::count()}}</span>
                    </div>

                    <h3 class="no-margin"><a href="{{ route('admin.mediaCompanines.index') }}" style="color:#fff;">
                         Companines
                    </a></h3>

                    <div class="text-muted" style="text-align:center;margin-top: 30px;">
                        <a href="{{ route('admin.mediaCompanines.index') }}" style="color: #fff;border: 1px solid #fff;padding: 3px 10px;border-radius: 5px;"><i class="icon-arrow-right5"></i> View</a>
                    </div>
                </div>
            </div>
            <!-- /members online -->
        </div>
        <div class="col-lg-4">
            <!-- Members online -->
            <div class="panel bg-teal-400"  style="padding: 20px 0px;background-color: #ac473b;border: 1px solid purple;">
                <p class="text-center" style="font-size:20px;">IMedia</p>

                <div class="panel-body">
                    <div class="heading-elements visible-lg visible-md visible-xs visible-sm">
                        <span class="heading-text" style="font-size:20px;">{{App\Models\MediaEmployee::count()}}</span>
                    </div>


                    <h3 class="no-margin">
                        <a href="{{ route('admin.mediaEmployees.index') }}" style="color:#fff;">
                            Employees
                        </a>
                    </h3>

                    <div class="text-muted" style="text-align:center;margin-top: 30px;">
                        <a href="{{ route('admin.mediaEmployees.index') }}" style="color: #fff;border: 1px solid #fff;padding: 3px 10px;border-radius: 5px;"><i class="icon-arrow-right5"></i> View</a>
                    </div>
                </div>
            </div>
            <!-- /members online -->
        </div>

        <div class="col-lg-4">
            <!-- Members online -->
            <div class="panel bg-teal-400"  style="padding: 20px 0px;background-color: #9a3535;border: 1px solid purple;">
                <p class="text-center" style="font-size:20px;">Settings</p>

                <div class="panel-body">
                    <div class="heading-elements visible-lg visible-md visible-xs visible-sm">
                        <span class="heading-text" style="font-size:20px;">Settings</span>
                    </div>


                    <h3 class="no-margin">
                        <a href="{{url('admin/showSettings/1')}}" style="color:#fff;">
                            Settings
                        </a>
                    </h3>

                    <div class="text-muted" style="text-align:center;margin-top: 30px;">
                        <a href="{{url('admin/showSettings/1')}}" style="color: #fff;border: 1px solid #fff;padding: 3px 10px;border-radius: 5px;"><i class="icon-arrow-right5"></i> View</a>
                    </div>
                </div>
            </div>
            <!-- /members online -->
        </div>


    </div>

    <!-- /quick stats boxes -->

@endsection

@section('footer')

    {{-- @include('admin/layouts/message') --}}

@endsection
