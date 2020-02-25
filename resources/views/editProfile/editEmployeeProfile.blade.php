@extends('layouts.master')

@section('title')
{{config('app.name')}} | Edit Information
@endsection

@section('content')

{{-- slider Section --}}
@include('sections.Slider',['sliderType'=>$sliderType,'backImage'=>$backImage])


    <!-- Popular Listing -->
    <section id="login-register" class="p_b70 p_t70">
            <!-- Tab panes -->
            <div class="tab-content">



                <div id="registerd">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="login-register-bg">

                                    <div class="row">
                                        @include('admin/elements/flash')
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="heading">
                                                <h2>@lang('messages.Edit Your Information')</h2>
                                            </div>
                                            <!-- updateRouteName came from UsersCtrl -->

                                            <form class="registerd" method="POST" action="{{ route($updateRouteName,$employee->id) }}" enctype="multipart/form-data">
                                                {{ csrf_field() }}

                                                {{ method_field('PUT') }}

                                                <input name="site" type="hidden" value="site">

                                                <input name="status" type="hidden" value="{{$employee->status}}">

                                                <!--  -->
                                                <input name="ModelName" type="hidden" value="{{$modelName}}">

                                                <div class="row">


                                                    <div class="col-md-8">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>{{(Config::get('app.locale') == 'ar') ? $globalNames->name_ar :$globalNames->name }}<span>*</span>
                                                                </label>
                                                                 <div class="single-query form-group">
                                                                    <div class="intro">
                                                                       <input type="text" name="name" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $globalNames->name_ar :$globalNames->name }}" value="{{$employee->name}}" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div><!--end نوع الحساب-->
                                                    </div><!--end col-9-->

                                                    <div class="col-md-4">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>
                                                                    {{(Config::get('app.locale') == 'ar') ? $globalNames->phone_ar :$globalNames->phone }}
                                                                    <span>*</span>
                                                                </label>
                                                                <input type="text" name="phone" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $globalNames->phone_ar :$globalNames->phone }}" value="{{$employee->phone}}" required>
                                                            </div>

                                                        </div><!--رقم الهاتف-->
                                                    </div><!--end col-6-->

                                                    <div class="cleaner-h1"></div>

                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>{{(Config::get('app.locale') == 'ar') ? $globalNames->address_ar :$globalNames->address }} <span></span>
                                                                </label>
                                                                <input type="text" name="address" class="form-control" placeholder="Address" value="{{$employee->address}}">
                                                            </div>



                                                        </div><!--رقم الهاتف-->
                                                    </div><!--end col-6-->


                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>{{(Config::get('app.locale') == 'ar') ? $globalNames->gender_ar :$globalNames->gender }} <span>*</span>
                                                                </label>
                                                                 <div class="single-query form-group">
                                                                    <div class="intro">
                                <select name="gender" class="form-control" required>
                                    <option value="" >@lang('messages.Select One')</option>
                                     <option value="1" {{($employee->gender) == 1  ? 'selected' : ''}}>@lang('messages.Male')</option>
                                    <option value="2" {{($employee->gender) == 2 ? 'selected' : ''}}>@lang('messages.Female')</option>

                                </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div><!--end نوع الحساب-->
                                                    </div><!--end col-6-->

                                                    <div class="cleaner-h1"></div>

                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>
                                                                    {{(Config::get('app.locale') == 'ar') ? $globalNames->birth_date_ar :$globalNames->birth_date }}<span>*</span>
                                                                </label>
                                                                  <input type="date" name="birth_date" class="form-control" required value="{{$employee->birth_date}}">
                                                            </div>

                                                        </div><!--end نوع الحساب-->
                                                    </div><!--end col-6-->


                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>{{(Config::get('app.locale') == 'ar') ? $names->education_ar :$names->education }} <span></span>
                                                                </label>
                                                                 <input type="text" name="education" class="form-control" value="{{$employee->education}}">
                                                            </div>

                                                        </div><!--end نوع الحساب-->
                                                    </div><!--end col-6-->

                                                    <div class="cleaner-h1"></div>

                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>
                                                                    {{(Config::get('app.locale') == 'ar') ? $names->job_title_ar :$names->job_title }}
                                                                    <span>*</span>
                                                                </label>
                                                                <input type="text" name="job_title" class="form-control" value="{{$employee->job_title}}" required>
                                                            </div>



                                                        </div>
                                                    </div><!--end col-6-->

                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>
                                                                    {{(Config::get('app.locale') == 'ar') ? $names->experience_years_ar :$names->experience_years }}
                                                                </label>
                                                                <input type="text" name="years_experience" class="form-control"  value="{{$employee->years_experience}}">
                                                            </div>

                                                        </div>
                                                    </div><!--end col-6-->

                                                    <div class="cleaner-h1"></div>

                                                    {{-- @include('sections.employeeLoginExperience') --}}

                                                    <div class="cleaner-h1"></div>


                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>{{(Config::get('app.locale') == 'ar') ? $names->first_skill_ar :$names->first_skill }}
                                                                </label>
                                                                 <div class="single-query form-group">
                                                                    <div class="intro">
                                    <select name="first_skill" class="form-control">
                                        @for($i=10;$i<=100;$i=$i+10)
                                            <option value="{{$i}}" {{($employee->first_skill == $i) ? 'selected' : ''}}>{{$i}}%</option>
                                        @endfor
                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div><!--end col-6-->

                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>{{(Config::get('app.locale') == 'ar') ? $names->second_skill_ar :$names->second_skill }}
                                                                </label>
                                                                 <div class="single-query form-group">
                                                                    <div class="intro">
                                            <select name="second_skill" class="form-control">
                                                @for($i=10;$i<=100;$i=$i+10)
                                                    <option value="{{$i}}" {{($employee->second_skill == $i) ? 'selected' : ''}}>{{$i}}%</option>
                                                @endfor
                                            </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                         </div>
                                                    </div><!--end col-6-->

                                                    <div class="cleaner-h1"></div>

                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>{{(Config::get('app.locale') == 'ar') ? $names->third_skill_ar :$names->third_skill }}
                                                                </label>
                                                                 <div class="single-query form-group">
                                                                    <div class="intro">
                                            <select name="third_skill" class="form-control">
                                                @for($i=10;$i<=100;$i=$i+10)
                                                    <option value="{{$i}}" {{($employee->third_skill == $i) ? 'selected' : ''}}>{{$i}}%</option>
                                                @endfor
                                            </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--end col-6-->

                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>{{(Config::get('app.locale') == 'ar') ? $names->forth_skill_ar :$names->forth_skill }}
                                                                </label>
                                                                 <div class="single-query form-group">
                                                                    <div class="intro">
                                            <select name="forth_skill" class="form-control">
                                                @for($i=10;$i<=100;$i=$i+10)
                                                    <option value="{{$i}}" {{($employee->forth_skill == $i) ? 'selected' : ''}}>{{$i}}%</option>
                                                @endfor
                                            </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--end col-6-->

                                                    <div class="cleaner-h1"></div>

                                                        <div class="col-md-6">
                                                            <div class="listing-title-area">

                                                                <div class="form-group">
                                                                    <label>{{(Config::get('app.locale') == 'ar') ? $globalNames->military_service_ar :$globalNames->military_service }}
                                                                    </label>
                                                                     <div class="single-query form-group">
                                                                        <div class="intro">
                                            <select name="military_service" class="form-control" required>
                                                <option value="" >@lang('messages.Select One')</option>
                                                @foreach($services as $service)

                                                    <option value="{{$service->id}}" {{($employee->military_service == $service->id) ? 'selected' : ''}}>
                                                        {{$service->name}}
                                                    </option>
                                                @endforeach

                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div><!--end نوع الحساب-->
                                                        </div><!--end col-6-->
                                                        <!-- check to see if the employee type is study or media to show the video input -->
                                                        @if($video)
                                                        <div class="col-md-6">
                                                            <div class="listing-title-area">

                                                                <div class="form-group">
                                                                    <label>
                                                                        {{(Config::get('app.locale') == 'ar') ? $globalNames->video_ar :$globalNames->video }}
                                                                    </label>
                                                                   <input type="text"  name="video" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $globalNames->video_ar :$globalNames->video }}" value="{{$employee->video}}" />
                                                                </div>

                                                            </div>
                                                        </div><!--end col-6-->
                                                        @endif
                                                    <div class="cleaner-h1"></div>

                                                    <div class="col-md-12">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>
                                                                    {{(Config::get('app.locale') == 'ar') ? $names->talk_about_ar :$names->talk_about }}<span>*</span>
                                                                </label>
                                                                <div class="cleaner-h1"></div>
                                                               <textarea name="personal_info" required>{{strip_tags($employee->personal_info)}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div><!--end col-6-->

                                                    <div class="cleaner-h1"></div>

                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>
                                                                    {{(Config::get('app.locale') == 'ar') ? $globalNames->email_ar :$globalNames->email }}<span>*</span>
                                                                </label>
                                                                <input type="email" name="email" class="form-control"  value="{{$employee->email}}" required>
                                                            </div>
                                                        </div>

                                                    </div><!--end col-6-->



                                                    <div class="col-md-6">

                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>
                                                                    {{(Config::get('app.locale') == 'ar') ? $globalNames->password_ar :$globalNames->password }}
                                                                </label>
                                                                <input type="password" name="password" class="form-control">
                                                            </div>
                                                        </div>

                                                    </div><!--end col-6-->

                                                    <div class="cleaner-h1"></div>

                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>
                                                                    {{(Config::get('app.locale') == 'ar') ? $globalNames->image_ar :$globalNames->image }}
                                                                </label>

                                                                <img src="{{url('public/storage/Images/'.$imageFolderName.'/'.$employee->image)}}" class="img-responsive width-img"/>

                                                               <input type="file" name="image" />

                                                               <input type="hidden" name="oldImage" value="{{$employee->image}}">
                                                            </div>
                                                        </div>
                                                    </div><!--end col-6-->

                                                </div><!--end row-->

                                                <div class="cleaner-h1"></div>





                                                <div class="form-group">
                                                    <button>@lang('messages.Update')</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <!-- Popular Listing -->
@endsection
