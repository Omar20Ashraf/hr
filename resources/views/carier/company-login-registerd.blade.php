@extends('layouts.master')

@section('title')
{{config('app.name')}} | Company-Login
@endsection

@section('content')

{{-- slider Section --}}
@include('sections.Slider',['sliderType'=>'ICarier','backImage'=>'back-2.png'])



    <!-- Popular Listing -->

      <section id="login-register" class="p_b70 p_t70">

            @if(auth()->guest())
                <div class="container">
                  <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                          <ul class="nav nav-tabs" role="tablist">
                              <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">{{(Config::get('app.locale') == 'ar') ? $globalNames->login_ar :$globalNames->login }}</a>
                              </li>
                              <li role="presentation"><a href="#registerd" aria-controls="registerd" role="tab" data-toggle="tab">{{(Config::get('app.locale') == 'ar') ? $globalNames->register_ar :$globalNames->register }}</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
    
                 <!-- Tab panes -->
                 <div class="tab-content">
        
                      @include('sections.login',['routeName'=>route('carierLogin')])
        
                        <div role="tabpanel" class="tab-pane fade" id="registerd">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="login-register-bg">
        
                                            <div class="row">
                                                @include('admin/elements/flash')
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="heading">
                                                      <h2>
                                                          {{(Config::get('app.locale') == 'ar') ? $globalNames->create_account_ar :$globalNames->create_account }}
                                                      </h2>
                                                    </div>
        
                                                    <form class="registerd" method="POST" action="{{ route('carierCompanyRegister') }}" enctype="multipart/form-data">
                                                        {{ csrf_field() }}
        
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
                                                                            <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $names->company_name_ar :$names->company_name }}" required>
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
                                                                      <input type="text" name="phone" value="{{old('phone')}}" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $globalNames->phone_ar :$globalNames->phone }}" required>
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
                                                                      <input type="text" name="address" value="{{old('address')}}" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $globalNames->address_ar :$globalNames->address }}">
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
                                                                        <input type="text" name="job_title" value="{{old('job_title')}}" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $names->job_title_ar :$names->job_title }}" required>
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
        
                                                                       <input type="text" name="exp_level" value="{{old('exp_level')}}" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $names->experience_level_ar :$names->experience_level }}">
        
        
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
                                                                         <option value="1" {{(old('gender') == 1 ) ? 'selected' : ''}}>@lang('messages.Male')</option>
                                                                        <option value="2" {{(old('gender') == 2) ? 'selected' : ''}}>@lang('messages.Female')</option>
        
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
                                                                      <input type="text" name="education" value="{{old('education')}}" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $names->education_ar :$names->education }}" >
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
                                                                           <option value="1" {{(old('job_time')== 1) ? 'selected' : ''}}>
                                                                               {{(Config::get('app.locale') == 'ar') ? $globalNames->full_time_ar :$globalNames->full_time }}
                                                                           </option>
        
                                                                           <option value="2" {{(old('job_time')== 2) ? 'selected' : ''}}>
                                                                               {{(Config::get('app.locale') == 'ar') ? $globalNames->part_time_ar :$globalNames->part_time }}
                                                                           </option>
        
                                                                           <option value="3" {{(old('job_time')== 3) ? 'selected' : ''}}>
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
                                                                      <input name="years_experience" class="form-control" value="{{old('years_experience')}}">
        
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
                                                                     <textarea name="job_description" required>{{old('job_description')}}</textarea>
                                                                  </div>
        
                                                              </div>
                                                          </div><!--end col-6-->
        
                                                          <div class="cleaner-h1"></div>
        
                                                          <div class="col-md-6">
                                                              <div class="listing-title-area">
        
                                                                  <div class="form-group">
                                                                      <label>
                                                                        {{(Config::get('app.locale') == 'ar') ? $globalNames->image_ar :$globalNames->image }}<span>*</span>
                                                                      </label>
                                                                     <input type="file" name="image" required/>
                                                                  </div>
        
                                                              </div>
                                                          </div><!--end col-6-->
        
        
                                                          <div class="col-md-6">
                                                              <div class="listing-title-area">
        
                                                                  <div class="form-group">
                                                                      <label>
                                                                        {{(Config::get('app.locale') == 'ar') ? $globalNames->email_ar :$globalNames->email }}<span>*</span>
                                                                      </label>
                                                                      <input type="email" name="email" class="form-control"  value="{{old('email')}}" required>
                                                                  </div>
                                                              </div>
        
                                                          </div><!--end col-6-->
        
                                                          <div class="cleaner-h1"></div>
        
                                                            <div class="col-md-6">
        
                                                                <div class="listing-title-area">
        
                                                                    <div class="form-group">
                                                                      <label>
                                                                        {{(Config::get('app.locale') == 'ar') ? $globalNames->password_ar :$globalNames->password }}<span>*</span>
                                                                      </label>
                                                                      <input type="password" name="password" class="form-control" required>
                                                                  </div>
                                                              </div>
        
                                                          </div><!--end col-6-->
        
                                                            <div class="col-md-6">
        
        
                                                              <div class="listing-title-area">
        
                                                                  <div class="form-group">
                                                                      <label>
                                                                        {{(Config::get('app.locale') == 'ar') ? $globalNames->re_password_ar :$globalNames->re_password }}<span>*</span>
                                                                      </label>
                                                                      <input type="password" name="password_confirmation" class="form-control" required>
                                                                  </div>
                                                              </div>
        
                                                            </div><!--end col-6-->
        
        
                                                      </div><!--end row-->
        
                                                     <div class="cleaner-h1"></div>
        
                                                      <div class="form-group">
                                                          <button>{{(Config::get('app.locale') == 'ar') ? $globalNames->register_now_ar :$globalNames->register_now }}</button>
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
            @else
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                    <div class="background-white-1 wow">
                        <h3>
                            @lang('messages.Logout To Continue')
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                @lang('messages.Logout')
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </h3>
                    </div>
                </div>
              </div>
            </div>
          @endif      

      </section>
      <!-- Popular Listing -->
  @endsection
