@extends('layouts.master')

@section('title')
{{config('app.name')}} | {{$employee->name}}
@endsection

@section('content')


{{-- slider Section --}}
@include('sections.Slider',['sliderType'=>$sliderType,'backImage'=>$backImage])


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
                                            <h2>@lang('messages.Add New Experience')</h2>
                                        </div>
                                        <!-- updateRouteName came from UsersCtrl -->

                                        <form class="registerd" method="POST" action="{{ route('storeExperience') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <input name="slug" type="hidden" value="{{$employee->slug}}">

                                            <input name="userType" type="hidden" value="{{$userType}}">

                                            <input name="experienceType" type="hidden" value="{{$experienceType}}">

                                            <input name="user_id" type="hidden" value="{{$userId}}">

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="listing-title-area">

                                                        <div class="form-group">
                                                            <label>
                                                               {{(Config::get('app.locale') == 'ar') ? $names->company_name_ar :$names->company_name }}
                                                                <span>*</span>
                                                            </label>
                                                             <div class="single-query form-group">
                                                                <div class="intro">
                                                                   <input type="text" name="name" class="form-control" placeholder="{{(Config::get('app.locale') == 'ar') ? $names->company_name_ar :$names->company_name }}" value="{{old('name')}}" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div><!--end نوع الحساب-->
                                                </div><!--end col-9-->

                                                <div class="cleaner-h1"></div>

                                                <div class="col-md-6">
                                                    <div class="listing-title-area">

                                                        <div class="form-group">
                                                            <label>
                                                                @lang('messages.From')<span>*</span>
                                                            </label>
                                                              <input type="date" name="from_date" class="form-control" required value="{{old('from_date')}}">
                                                        </div>

                                                    </div><!--end نوع الحساب-->
                                                </div><!--end col-6-->


                                                <div class="col-md-6">
                                                    <div class="listing-title-area">

                                                        <div class="form-group">
                                                            <label>
                                                                @lang('messages.To')<span>*</span>
                                                            </label>
                                                              <input type="date" name="to_date" class="form-control" required value="{{old('to_date')}}">
                                                        </div>

                                                    </div><!--end نوع الحساب-->
                                                </div><!--end col-6-->

                                                <div class="form-group">
                                                    <button>@lang('messages.Add')</button>
                                                </div>
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

@endsection
