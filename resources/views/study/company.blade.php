@extends('layouts.master')

@section('title')
{{config('app.name')}} | IStudy Companines
@endsection

@section('content')

    {{-- slider Section --}}
    @include('sections.Slider',['sliderType'=>'IStudy','backImage'=>'back2-2.png'])



    <section id="login-register" class="p_b70 p_t70">

        <div class="container">
            <div class="row">

                @foreach(App\Models\StudyCompany::where('status',1)->latest()->get() as $company)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="popular-listing-box wow fadeInLeft">
                            <div class="popular-listing-img">
                                @if($company->image)
                                <figure class="effect-ming">

                                    <img src="{{url('public/storage/Images/studyCompanies/'.$company->image)}}"  alt="image">
                                    <figcaption>

                                    </figcaption>
                                </figure>
                                @endif
                            </div>
                            <div class="popular-listing-detail popular-gemy">
                                <a href="{{route('studyCompanyName',$company->slug)}}">
                                    <h3>{{$company->name}}</h3>
                                    <p><i class="fa fa-location-arrow"></i>
                                        {{$company->job_title}}
                                    </p>
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div><!--end row-->
        </div><!--end container-->
    </section>


@endsection
