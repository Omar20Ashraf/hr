<!-- HEADER -->
@php
$setting = App\Models\Admin\Settings::where('id',1)->get(['email','phone'])->first();

$name = App\Models\StaticNames::get(['more_info','more_info_ar','write_email','write_email_ar','icarier','icarier_ar','imedia','imedia_ar','istudy','istudy_ar'])->first();
@endphp
<header id="main_header_2"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <div id="header-top">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="top-contact">
                        <p>
                            {{(Config::get('app.locale') == 'ar') ? $name->more_info_ar :$name->more_info }} :
                            <span>+{{$setting->phone}}</span>


                            {{(Config::get('app.locale') == 'ar') ? $name->write_email_ar :$name->write_email }} :
                            <span>{{$setting->email}}</span>
                        </p>
                    </div>
                    @if(auth()->check())
                        <div class="top-header-user">

                            <ul class="header-user-info">
                                <li>
                                    @lang('messages.Welcome') {{auth()->user()->name}}
                                </li>
                                
                                <li>
                                    <a href="{{route('profile',['id' =>auth()->user()->id,'type' =>auth()->user()->type])}}">
                                        @lang('messages.My Account')
                                    </a>
                                </li>


                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        @lang('messages.Logout')
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endif
                </div>
                
                <!--<div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="top_right_links2">
                        <ul class="top_links">
                            <li><a href="profile.html"><i class="fa fa-user-o" aria-hidden="true"></i> Profile</a> </li>
                            <li><a href="login-registerd.html"><i class="fa fa-lock" aria-hidden="true"></i> Login / Register</a> </li>
                        </ul>
                        <div class="add-listing"> <a href="add-listing.html"><i class="fa fa-plus" aria-hidden="true"></i> Add Listing</a> </div>
                    </div>
                </div>-->
                <!--<div class="top_right_links2-bg"></div>-->

            </div>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand sticky_logo" href="{{url('/')}}">
                            <img src="{{url('public/asset/images/logo.png')}}" class="logo" alt="">
                        </a>
                    </div>
                    <!-- End Header Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">

                            <li> <a href="{{url('/')}}">@lang('messages.Home')</a>

                              </li>

                            <li>
                                <a href="{{route('carierSelect')}}" >
                                    {{(Config::get('app.locale') == 'ar') ? $name->icarier_ar :$name->icarier }}
                                </a>

                            </li>

                            <li>
                                <a href="{{route('mediaSelect')}}">
                                    {{(Config::get('app.locale') == 'ar') ? $name->imedia_ar :$name->imedia }}
                                </a>

                            </li>

                            <li>
                                <a href="{{route('studySelect')}}">
                                    {{(Config::get('app.locale') == 'ar') ? $name->istudy_ar :$name->istudy }}
                                </a>

                            </li>

                             <li>
                                <a href="{{url('/about')}}" >
                                    @lang('messages.About Us')
                                </a>

                            </li>

                            <li>
                                <a href="{{url('/contact')}}">
                                    @lang('messages.Contact Us')
                                </a>
                            </li>

                            @if(Config::get('app.locale') == 'ar' )
                                <li><a href="{{ url('locale/en') }}" class="main-menu"><span class="text">English</span></a></li>
                            @else
                                <li><a href="{{ url('locale/ar') }}" class="main-menu"><span class="text">عربى</span></a></li>
                            @endif


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- HEADER  -->
