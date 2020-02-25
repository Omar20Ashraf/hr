@extends('layouts.master')

@section('title')
{{config('app.name')}}| About Us
@endsection

@section('content')
       <!-- Inner Banner -->
    <section  id="banner-2" style="background:url(<?php echo 'public/storage/Images/sliders/'.$slider->image; ?>)">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">

                    @if($slider->title || $slider->title)
                        <h2>{{(Config::get('app.locale') == 'en') ? $slider->title : $slider->title_ar}}</h2>
                    @endif
                    @if($slider->description || $slider->description_ar)
                        {!! (Config::get('app.locale') == 'en') ? $slider->description : $slider->description_ar !!}
                    @endif

                </div>
            </div>
        </div>

    </section>
    <!-- Inner Banner -->

    <div class="background">
        <div class="container">
            <div class="row">

                <div class="cleaner-h4"></div>
                <div class="cleaner-h4"></div>

                <div class="col-md-6">

                    <h3 class="head-index">
                        {{(Config::get('app.locale') == 'ar') ? $name->ilife_ar :$name->ilife }}
                    </h3>
                    <div class="line-orangge"></div>

                    <!--<p class="head-index">-->
                    <div class="about_description">
                        {!!(Config::get('app.locale') == 'en') ? $about->description : $about->description_ar!!}
                    </div>    
                    <!--</p>-->

                </div><!--end col-6-->

                <div class="col-md-6">
                    <img src="{{url('public/storage/Images/about/'.$about->image)}}" class="img-responsive"/>

                </div><!--end col-6-->


                <div class="cleaner-h4"></div>
                <div class="cleaner-h4"></div>

                @foreach($services as $service)
                    <div class="col-md-4">
                        <p class="title-bold">
                            <!--<i class="fa fa-comment"></i>-->
                            <div class="about-service-image-div">
                                <img src="{{url('public/storage/Images/services/'.$service->image)}}" class="about-service-image"/>
                            </div>
                            
                            <span>
                                {{(Config::get('app.locale') == 'en') ? $service->title : $service->title_ar}}
                            </span>
                        </p>

                        {{-- <p class="data-title"> --}}
                        <div class="service_description">
                            {!!(Config::get('app.locale') == 'en') ? $service->description : $service->description_ar!!}
                        </div>    
                            <br>
                        {{-- </p> --}}
                    </div><!--end col-4-->
                @endforeach

 <div class="cleaner-h4"></div>
    <div class="cleaner-h3"></div>

            </div><!--end row-->
        </div><!--end container-->
    </div><!--end background-->

   

    </div><!--end media-->


@endsection









