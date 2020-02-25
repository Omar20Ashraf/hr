@extends('layouts.master')

@section('title')
{{config('app.name')}} | IStudy Employee
@endsection

@section('content')

{{-- slider Section --}}
@include('sections.Slider',['sliderType'=>'IStudy','backImage'=>'back2-2.png'])


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
    
                @include('sections.login',['routeName'=>route('studyEmployeeLogin')])
    
                <div role="tabpanel" class="tab-pane fade" id="registerd">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="login-register-bg">
    
                                    <div class="row">
                                        @include('admin/elements/flash')
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="heading">
                                                <h2>{{(Config::get('app.locale') == 'ar') ? $globalNames->create_account_ar :$globalNames->create_account }}</h2>
                                            </div>
    
                                            <form class="registerd" method="POST" action="{{ route('studyEmployeeRegister') }}" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="row">
    
    
                                                    <div class="col-md-8">
                                                        <div class="listing-title-area">
    
                                                            <div class="form-group">
                                                                <label>{{(Config::get('app.locale') == 'ar') ? $globalNames->name_ar :$globalNames->name }}<span>*</span>
                                                                </label>
                                                                 <div class="single-query form-group">
                                                                    <div class="intro">
                                                                       <input type="text" name="name" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $globalNames->name_ar :$globalNames->name }}" value="{{old('name')}}" required>
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
                                                                <input type="text" name="phone" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $globalNames->phone_ar :$globalNames->phone }}" value="{{old('phone')}}" required>
                                                            </div>
    
                                                        </div><!--رقم الهاتف-->
                                                    </div><!--end col-6-->
    
                                                    <div class="cleaner-h1"></div>
    
                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">
    
                                                            <div class="form-group">
                                                                <label>{{(Config::get('app.locale') == 'ar') ? $globalNames->address_ar :$globalNames->address }} <span></span>
                                                                </label>
                                                                <input type="text" name="address" class="form-control" placeholder="Address" value="{{old('address')}}">
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
                                                                             <option value="1" {{(old('gender') == 1 ) ? 'selected' : ''}}>@lang('messages.Male')</option>
                                                                            <option value="2" {{(old('gender') == 2) ? 'selected' : ''}}>@lang('messages.Female')</option>
    
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
                                                                  <input type="date" name="birth_date" class="form-control" required value="{{old('birth_date')}}">
                                                            </div>
    
                                                        </div><!--end نوع الحساب-->
                                                    </div><!--end col-6-->
    
    
                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">
    
                                                            <div class="form-group">
                                                                <label>{{(Config::get('app.locale') == 'ar') ? $names->education_ar :$names->education }} <span></span>
                                                                </label>
                                                                 <input type="text" name="education" class="form-control" value="{{old('education')}}">
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
                                                                <input type="text" name="job_title" class="form-control" value="{{old('job_title')}}" required>
                                                            </div>
    
    
    
                                                        </div>
                                                    </div><!--end col-6-->
    
                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">
    
                                                            <div class="form-group">
                                                                <label>
                                                                    {{(Config::get('app.locale') == 'ar') ? $names->experience_years_ar :$names->experience_years }}
                                                                </label>
                                                                <input type="text" name="years_experience" class="form-control"  value="{{old('years_experience')}}">
                                                            </div>
    
                                                        </div>
                                                    </div><!--end col-6-->
    
                                                    <div class="cleaner-h1"></div>
    
                                                    @include('sections.employeeLoginExperience')
    
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
                                                                                <option value="{{$i}}" {{(old('first_skill') == $i) ? 'selected' : ''}}>{{$i}}%</option>
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
                                                                                <option value="{{$i}}" {{(old('second_skill') == $i) ? 'selected' : ''}}>{{$i}}%</option>
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
                                                                                <option value="{{$i}}" {{(old('third_skill') == $i) ? 'selected' : ''}}>{{$i}}%</option>
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
                                                                                <option value="{{$i}}" {{(old('forth_skill') == $i) ? 'selected' : ''}}>{{$i}}%</option>
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
    
                                                    <option value="{{$service->id}}" {{(old('military_service') == $service->id) ? 'selected' : ''}}>
                                                        {{$service->name}}
                                                    </option>
                                                                               @endforeach
    
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
    
                                                            </div><!--end نوع الحساب-->
                                                        </div><!--end col-6-->
    
                                                    <div class="col-md-6">
                                                        <div class="listing-title-area">
    
                                                            <div class="form-group">
                                                                <label>
                                                                    {{(Config::get('app.locale') == 'ar') ? $names->certificates_ar :$names->certificates }}
                                                                </label>
    
                                                                <div class="row">
    
                                                                    <div class="col-md-6">
                                                                        <input name="certificates[]" type="file" onchange="ShowCerificate(this,1)">
    
                                                                        <div class="cleaner-h1"></div>
    
                                                                        <input name="certificates[]" type="file" style="display: none" id="certificates_1" onchange="ShowCerificate(this,2)">
    
                                                                    </div><!--end col-6-->
    
                                                                    <div class="col-md-6">
    
                                                                        <input name="certificates[]" type="file" style="display: none" id="certificates_2" onchange="ShowCerificate(this,3)">
    
                                                                        <div class="cleaner-h1"></div>
    
                                                                        <input name="certificates[]" type="file" style="display: none" id="certificates_3" onchange="ShowCerificate(this,4)">
                                                                    </div><!--end col-6-->
    
                                                                </div><!--end row-->
    
                                                            </div>
                                                        </div>
                                                    </div><!--end col-6-->
    
    
    
                                                    <div class="cleaner-h1"></div>
    
                                                    <div class="col-md-12">
                                                        <div class="listing-title-area">
    
                                                            <div class="form-group">
                                                                <label>
                                                                    {{(Config::get('app.locale') == 'ar') ? $names->talk_about_ar :$names->talk_about }}<span>*</span>
                                                                </label>
                                                                <div class="cleaner-h1"></div>
                                                               <textarea name="personal_info" required></textarea>
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
                                                               <input type="file" name="image" />
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

@section('footer')
    @include('sections.employeeLoginScripts')
@endsection
