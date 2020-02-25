@extends('layouts.master')

@section('title')
{{config('app.name')}} | ICarier
@endsection

@section('content')

    {{-- slider Section --}}
    @include('sections.Slider',['sliderType'=>'ICarier','backImage'=>'back-2.png'])


    <!-- Popular Listing -->
    <section id="login-register" class="p_b70 p_t70">

        <div class="container">
            <div class="row">

            @if(auth()->guest())
                <div class="col-md-6">
                    <div class="background-white-1 wow fadeInRight">
                        <a href="{{route('carierEmployeeAuth')}}">
                             <h4>
                                {{(Config::get('app.locale') == 'ar') ? $names->select_employee_ar :$names->select_employee }}
    
                            </h4>
    
                            <p>
                                {{(Config::get('app.locale') == 'ar') ? $names->select_employee_slug_ar :$names->select_employee_slug }}
                            </p>
                             <img src="{{url('public/storage/Images/selectImages/'.$employeeImage->image)}}" class="img-responsive"/>
    
                        </a>
    
                    </div><!--end background-white-->
                </div><!--end col-6-->
    
    
                <div class="col-md-6">
                    <div class="background-white-1 wow fadeInLeft">
                        <a href="{{route('carierCompanyAuth')}}">
                             <h4>
                                {{(Config::get('app.locale') == 'ar') ? $names->select_company_ar :$names->select_company }}
    
                            </h4>
    
                            <p>
                                {{(Config::get('app.locale') == 'ar') ? $names->select_company_slug_ar :$names->select_company_slug }}
                            </p>
    
                            <img src="{{url('public/storage/Images/selectImages/'.$companyImage->image)}}" class="img-responsive"/>
    
                        </a>
                    </div><!--end background-white-->
                </div><!--end col-6-->
            @else
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
            @endif

        </div><!--end row-->
        </div><!--end container-->

    </section>
    <!-- Popular Listing -->

@endsection
