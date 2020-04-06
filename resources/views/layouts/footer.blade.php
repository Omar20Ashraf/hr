@php
$setting = App\Models\Admin\Settings::where('id',1)->get(['facebook','twitter','dribbble','linkedin','phone'])->first();

//get the current page url
$url = str_replace(url('/'), '', url()->current());

//get static names
$name = App\Models\StaticNames::get(['contact_us','contact_us_ar','icarier','icarier_ar','imedia','imedia_ar','istudy','istudy_ar'])->first();
@endphp

<section class="contact-options">
    <div class="clearfix">
        <ul class="info-box clearfix wow bounceInRight">

            <li>
                <a href="tel:{{$setting->phone}}">
                    <span class="fa fa-phone"></span>
                    {{(Config::get('app.locale') == 'ar') ? $name->contact_us_ar :$name->contact_us }}
                </a>
            </li>
          </ul>
      </div>
</section>

<footer id="footer_1" class="bg_blue p_t70 ">

{{-- check to see which current page to display the right image --}}
@if(strpos($url, 'media'))

    <img src="{{url('asset/'.Config::get('app.locale')).'/images/back1-1.png'}}" class="img-pos img-responsive"/>

@elseif(strpos($url, 'carier'))

    <img src="{{url('asset/'.Config::get('app.locale')).'/images/back-1.png'}}" class="img-pos img-responsive"/>
@elseif(strpos($url, 'study'))
        <img src="{{url('asset/'.Config::get('app.locale')).'/images/back2-1.png'}}" class="img-pos img-responsive"/>

@endif

<!-- Footer -->


    <div class="container">
        <div class="row"></div>
        <div class="col-md-12 col-sm-6 col-xs-12 text-center">
            <ul class="footer_link">
                <li>
                    <a href="{{url('/')}}">@lang('messages.Home')</a> </li>
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

                <li><a href="{{route('studySelect')}}">{{(Config::get('app.locale') == 'ar') ? $name->istudy_ar :$name->istudy }}</a></li>

                <li> <a href="{{url('/about')}}" >@lang('messages.About Us')</a></li>

                <li> <a href="{{url('/contact')}}">@lang('messages.Contact Us')</a></li>

                @if(Config::get('app.locale') == 'ar' )
                    <li><a href="{{ url('locale/en') }}" class="main-menu"><span class="text">English</span></a></li>
                @else
                    <li><a href="{{ url('locale/ar') }}" class="main-menu"><span class="text">عربى</span></a></li>
                @endif

            </ul>

            <div class="cleaner-h3"></div>

                <div class="social-icons">
                    <ul>
                        @if($setting->facebook)
                            <li><a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                        @endif
                        @if($setting->twitter)
                            <li><a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        @endif
                        @if($setting->dribbble)
                            <li><a href="{{$setting->dribbble}}" target="_blank"><i aria-hidden="true" class="fa fa-dribbble"></i></a>
                            </li>
                        @endif
                        @if($setting->linkedin)
                            <li><a href="{{$setting->linkedin}}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                        @endif
                    </ul>
                </div>


        </div>

    </div>
    <div class="footer_line"></div>
    {{-- </div> --}}
    <div class="footer_botom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-6 col-sm-12">
                    <p>Copyrights © 2020 I Life. All rights reserved.</p>
                </div>
                <div class="col-md-6 col-md-6 col-sm-12 text-right">
                    <p>Design & Development
                        <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://www.fekra-web.com">fekra</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
 </footer>
 <!-- Footer -->
