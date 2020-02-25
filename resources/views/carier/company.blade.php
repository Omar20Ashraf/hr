@extends('layouts.master')

@section('content')


{{-- slider Section --}}
@include('sections.Slider',['sliderType'=>'ICarier','backImage'=>'back-2.png'])


    <section id="login-register" class="p_b70 p_t70">

        <div class="container">
            <div class="row">

            @foreach(App\Models\JobCompany::where('status','1')->latest()->get() as $job)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="popular-listing-box wow fadeInLeft">
                        <div class="popular-listing-img">
                            @if($job->image)
                                <figure class="effect-ming">
                                    <img src="{{url('public/storage/Images/carierCompanies/'.$job->image)}}" alt="image">
                                    <figcaption></figcaption>
                                </figure>
                            @endif
                        </div>
                            <div class="popular-listing-detail popular-gemy">
                                <a href="{{route('carierCompanyName',$job->slug)}}">
                                    <h3>{{$job->name}}</h3>
                                    <p><i class="fa fa-location-arrow"></i> {{$job->job_title}}</p>
                                </a>
                            </div>

                    </div>
                </div>
            @endforeach


        </div><!--end row-->
    </div><!--end container-->
</section>

@endsection
