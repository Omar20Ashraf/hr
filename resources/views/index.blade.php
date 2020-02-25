@extends('layouts.master')

@section('title')
{{config('app.name')}}
@endsection

@section('content')

    {{-- first slider --}}
    @include('sections.homeslider',['sliderLoop'=>$firstSliders,'sliderID'=>'carousel-example-generic'])

<!--end slider-->



    <div class="background">
        <div class="container">
            <div class="row">

                <div class="cleaner-h4"></div>
                <div class="cleaner-h4"></div>

                <div class="col-md-6">

                    <h3 class="head-index ililfe">
                        {{(Config::get('app.locale') == 'ar') ? $name->ilife_ar :$name->ilife }}
                    </h3>
                    <div class="line-orangge"></div>

                    <!--<p class="head-index">-->
                    <div class="about_home_description">
                        {!!(Config::get('app.locale') == 'en') ? $about->home_description : $about->home_description_ar!!}
                    </div>    
                    <!--</p>-->

                    <a href="{{url('/about')}}" class="btn btn-gemy-orange">
                        {{(Config::get('app.locale') == 'ar') ? $name->read_more_ar :$name->read_more }}
                    </a>
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
                            <div class="home-service-image-div">
                                <img src="{{url('public/storage/Images/services/'.$service->image)}}" class="home-service-image"/>
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

            </div><!--end row-->
        </div><!--end container-->
    </div><!--end background-->

    <div class="background">
            <img src="{{url('public/asset/'.Config::get('app.locale')).'/images/back-1.png'}}" class="img-pos-home img-responsive"/>
        <div class="container">
            <div class="row">
                
                 <div class="cleaner-h4"></div>
    <div class="cleaner-h3"></div>

                <div class="col-md-12">
                    <h3 class="head-index text-center">iCareer</h3>
                </div><!--end col-12-->

                <div class="cleaner-h4"></div>

                @foreach($carierCompanines as $carier)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="popular-listing-box wow fadeInLeft">
                        <div class="popular-listing-img">
                            <figure class="effect-ming">
                                <img src="{{url('public/storage/Images/carierCompanies/'.$carier->image)}}" alt="image">
                                <figcaption>

                                </figcaption>
                            </figure>
                        </div>
                        <div class="popular-listing-detail popular-gemy">
                       <a href="{{route('carierCompanyName',$carier->slug)}}">
                            <h3>{{$carier->name}}</h3>
                            <p><i class="fa fa-location-arrow"></i>
                                {{$carier->job_title}}
                            </p>
                            </a>
                        </div>

                    </div>
                </div>
                @endforeach

            </div><!--end row-->
        </div><!--end container-->

        <div class="cleaner-h4"></div>
        <div class="cleaner-h2"></div>

    </div><!--end icarrier-->

    <div class="slider-adv-1">
        {{-- //second slider --}}

        @include('sections.homeslider',['sliderLoop'=>$secondSliders,'sliderID'=>'carousel-example-generic-1'])

    </div><!--end slider-adv-1-->

    <div class="background imedia">
        <img src="{{url('public/asset/'.Config::get('app.locale')).'/images/back1-2.png'}}" class="img-pos-home img-responsive"/>

        <div class="cleaner-h4"></div>
        <div class="cleaner-h4"></div>
        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <h3 class="head-index orange-color text-left">iMedia</h3>
                </div><!--end col-12-->

                <div class="cleaner-h4"></div>

                @foreach($mediaEmployees as $media)
                    <div class="col-md-3 col-sm-6 col-xs-12">

                       <div class="gemy-a wow fadeInLeft">
                            <div class="popular-image">

                                <img class="iimg" src="{{url('public/storage/Images/mediaEmployee/'.$media->image)}}" alt="image">
                            </div>


                            <div class="gemy-block trainer-gemy">
                                <a href="{{route('mediaTalented',$media->slug)}}">
                                    <h3>{{$media->name}}</h3>

                                    <span class="text-center"><i class="fa fa-location-arrow"></i> {{$media->job_title}}</span>

                                    {!! $media->personal_info !!}
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div><!--end row-->
        </div><!--end container-->
        <div class="cleaner-h4"></div>
        <div class="cleaner-h2"></div>
    </div><!--end istudy-->

    <div class="slider-adv-1">

        {{-- //second slider --}}
        @include('sections.homeslider',['sliderLoop'=>$thirdSliders,'sliderID'=>'carousel-example-generic-2'])
     </div><!--end slider-adv-1-->

  <div class="background">
    <img src="{{url('public/asset/'.Config::get('app.locale')).'/images/back2-1.png'}}" class="img-pos-home img-responsive"/>
        <div class="cleaner-h4"></div>
            <div class="container">
                <div class="row">

<div class="cleaner-h4"></div>


                <div class="col-md-12">
                    <h3 class="head-index green-color text-center">iStudy</h3>
                </div><!--end col-12-->

                <div class="cleaner-h4"></div>

                @foreach($studyCompanines as $study)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="popular-listing-box wow fadeInLeft">
                            <div class="popular-listing-img">
                                <figure class="effect-ming">
                                    <img src="{{url('public/storage/Images/studyCompanies/'.$study->image)}}" alt="image">
                                    <figcaption>

                                    </figcaption>
                                </figure>
                            </div>
                            <div class="popular-listing-detail popular-gemy">
                                <a href="{{route('studyCompanyName',$study->slug)}}">
                                    <h3>{{$study->name}}</h3>
                                    <p><i class="fa fa-location-arrow"></i> {{$study->job_title}}</p>
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach
</div><!--end row-->
</div><!--end container-->
<div class="cleaner-h4"></div>
<div class="cleaner-h3"></div>
</div><!--end media-->


@endsection









