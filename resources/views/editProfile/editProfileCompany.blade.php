@extends('layouts.master')

@section('title')
{{config('app.name')}} | Edit Information
@endsection

@section('content')

{{-- slider Section --}}
<!-- [$backImage and $sliderType] came from UsersCtrl  -->
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
                                                <h2>
                                                    Edit Your Information
                                                </h2>
                                              </div>
                      <!-- updateRouteName came from UsersCtrl -->
                                              <form class="registerd" method="POST" action="{{ route($updateRouteName,$company->id) }}" enctype="multipart/form-data">

                                                  {{ csrf_field() }}

                                                    {{ method_field('PUT') }}

                                                    <input name="site" type="hidden" value="site">

                                                    <input name="status" type="hidden" value="{{$company->status}}">

                                                    <!--  -->
                                                    <input name="ModelName" type="hidden" value="{{$modelName}}">
                                                  <div class="row">

                                                    {{-- name --}}
                                                      <div class="col-md-8">
                                                          <div class="listing-title-area">

                                                          <div class="form-group">
                                                            <label>
                                                                  {{(Config::get('app.locale') == 'ar') ? $names->company_name_ar :$names->company_name }}
                                                              <span>*</span>
                                                            </label>
                                                             <div class="single-query form-group">
                                                                  <div class="intro">
                                                                      <input type="text" name="name" value="{{$company->name}}" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $names->company_name_ar :$names->company_name }}" required>
                                                                  </div>
                                                            </div>
                                                        </div>

                                                        </div><!--end نوع الحساب-->
                                                    </div><!--end col-9-->


                                                    {{-- //phone --}}
                                                    <div class="col-md-4">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>{{(Config::get('app.locale') == 'ar') ? $globalNames->phone_ar :$globalNames->phone }} <span>*</span>
                                                                </label>
                                                                <input type="text" name="phone" value="{{$company->phone}}" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $globalNames->phone_ar :$globalNames->phone }}" required>
                                                            </div>



                                                        </div><!--رقم الهاتف-->
                                                    </div><!--end col-6-->

                                                    <div class="cleaner-h1"></div>

                                                    {{-- address --}}
                                                    <div class="col-md-12">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>
                                                                  {{(Config::get('app.locale') == 'ar') ? $globalNames->address_ar :$globalNames->address }}
                                                                 <span></span>
                                                                </label>
                                                                <input type="text" name="address" value="{{$company->address}}" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $globalNames->address_ar :$globalNames->address }}">
                                                            </div>



                                                        </div><!--رقم الهاتف-->
                                                    </div><!--end col-12-->

                                                    <div class="cleaner-h1"></div>
                                                    {{-- job Title --}}
                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>
                                                                  {{(Config::get('app.locale') == 'ar') ? $names->job_title_ar :$names->job_title }}
                                                                  <span>*</span>
                                                                </label>
                                                                  <input type="text" name="job_title" value="{{$company->job_title}}" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $names->job_title_ar :$names->job_title }}" required>
                                                            </div>

                                                        </div><!--end نوع الحساب-->
                                                    </div><!--end col-6-->

                                                    {{-- experience level --}}
                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>
                                                                  {{(Config::get('app.locale') == 'ar') ? $names->experience_level_ar :$names->experience_level }}
                                                                 <span></span>
                                                                </label>

                                                                 <input type="text" name="exp_level" value="{{$company->exp_level}}" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $names->experience_level_ar :$names->experience_level }}">


                                                            </div>

                                                        </div><!--end نوع الحساب-->
                                                    </div><!--end col-6-->

                                                    <div class="cleaner-h1"></div>

                                                    {{-- gender --}}
                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>
                                                                  {{(Config::get('app.locale') == 'ar') ? $globalNames->gender_ar :$globalNames->gender }}
                                                                </label>
                            <select name="gender" class="form-control">
                              <option value="" >@lang('messages.Select One')</option>
                               <option value="1" {{($company->gender) == 1  ? 'selected' : ''}}>@lang('messages.Male')</option>
                              <option value="2" {{($company->gender) == 2 ? 'selected' : ''}}>@lang('messages.Female')</option>

                            </select>
                                                            </div>

                                                        </div>
                                                    </div><!--end col-6-->

                                                      <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>
                                                                  {{(Config::get('app.locale') == 'ar') ? $names->education_ar :$names->education }}
                                                                </label>
                                                                <input type="text" name="education" value="{{$company->education}}" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $names->education_ar :$names->education }}" >
                                                            </div>

                                                        </div>
                                                      </div><!--end col-6-->

                                                    <div class="cleaner-h1"></div>

                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>
                                                                  {{(Config::get('app.locale') == 'ar') ? $names->job_type_ar :$names->job_type }}
                                                                </label>
                            <select name="job_time" class="form-control">
                                <option value="">@lang('messages.Select One')</option>
                                 <option value="1" {{($company->job_time == 1) ? 'selected' : ''}}>
                                     {{(Config::get('app.locale') == 'ar') ? $globalNames->full_time_ar :$globalNames->full_time }}
                                 </option>

                                 <option value="2" {{($company->job_time == 2) ? 'selected' : ''}}>
                                     {{(Config::get('app.locale') == 'ar') ? $globalNames->part_time_ar :$globalNames->part_time }}
                                 </option>

                                 <option value="3" {{($company->job_time == 3) ? 'selected' : ''}}>
                                     {{(Config::get('app.locale') == 'ar') ? $globalNames->freelance_ar :$globalNames->freelance }}
                                 </option>
                            </select>
                                                            </div>
                                                        </div>
                                                    </div><!--end col-6-->

                                                      <div class="col-md-6">
                                                        <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>
                                                                  {{(Config::get('app.locale') == 'ar') ? $names->experience_years_ar :$names->experience_years }}
                                                                </label>
                                                                <input name="years_experience" class="form-control" value="{{$company->years_experience}}">

                                                            </div>
                                                        </div>
                                                      </div><!--end col-6-->

                                                    <div class="cleaner-h1"></div>

                                                      <div class="col-md-12">
                                                          <div class="listing-title-area">

                                                            <div class="form-group">
                                                                <label>
                                                                  {{(Config::get('app.locale') == 'ar') ? $names->job_description_ar :$names->job_description }}
                                                                  <span>*</span>
                                                                </label>
                                                                <div class="cleaner-h1"></div>
                        <textarea name="job_description" required>{{strip_tags($company->job_description)}}</textarea>

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

                                                                <input type="email" name="email" class="form-control"  value="{{$company->email}}" required>
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

                                                                <img src="{{url('public/storage/Images/'.$imageFolderName.'/'.$company->image)}}" class="img-responsive width-img"/>

                                                               <input type="file" name="image" />

                                                               <input type="hidden" name="oldImage" value="{{$company->image}}">
                                                            </div>

                                                        </div>
                                                    </div><!--end col-6-->

                                                </div><!--end row-->

                                               <div class="cleaner-h1"></div>

                                                <div class="form-group">
                                                    <button>Update</button>
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
