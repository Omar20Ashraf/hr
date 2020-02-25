@extends('layouts.master')

@section('title')
{{config('app.name')}} | {{$employee->name}}
@endsection

@section('content')

    {{-- slider Section --}}
    @include('sections.Slider',['sliderType'=>'IMedia','backImage'=>'back1-2.png'])



    <section id="login-register" class="p_b70 p_t70">

        <div class="container">
            <div class="row">

            <div class="col-md-3">

                <div class="background-orange">
                    @if($employee->video)
                        @php
                            $url = $employee->video;
                            // https://www.youtube.com/watch?v=CYAhxgU5PtQ
                            $url_string = parse_url($url, PHP_URL_QUERY);
                            parse_str($url_string, $args);
                        @endphp
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{(isset($args['v'])) ? $args['v'] : ''}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen></iframe>
                    @else
                        <img src="{{url('public/storage/Images/mediaEmployee/'.$employee->image)}}" class="img-responsive"/>
                        
                    @endif    
                    <div class="contact">
                        <h4>{{(Config::get('app.locale') == 'ar') ? $globalNames->contact_ar :$globalNames->contact }}</h4>
                        <div class="line"></div>
                            <ul>
                                <li><i class="fa fa-envelope"></i> {{$employee->email}}</li>

                                @if($employee->address)
                                    <li><i class="fa fa-map-marker"></i>
                                        {{$employee->address}}
                                    </li>
                                @endif

                                <li><i class="fa fa-phone"></i>
                                {{$employee->phone}}
                                </li>

                            </ul>

                    </div><!--end contact-->

                    @if(($employee->first_skill) || ($employee->second_skill) || ($employee->third_skill) || ($employee->forth_skill))

                        <div class="contact">
                            <h4>
                                {{(Config::get('app.locale') == 'ar') ? $globalNames->skills_ar :$globalNames->skills }}
                            </h4>
                            <div class="line"></div>
                                <ul class="ul-skills">

                                    @if($employee->first_skill)
                                        <li>

                                            {{(Config::get('app.locale') == 'ar') ? $names->first_skill_ar :$names->first_skill }}
                                            @include('sections.skillsValueImages',['skillValue'=>$employee->first_skill])
                                        </li>
                                    @endif


                                    @if($employee->second_skill)
                                        <li>
                                            {{(Config::get('app.locale') == 'ar') ? $names->second_skill_ar :$names->second_skill }}
                                            @include('sections.skillsValueImages',['skillValue'=>$employee->second_skill])
                                        </li>
                                    @endif


                                    @if($employee->third_skill)
                                        <li>
                                            {{(Config::get('app.locale') == 'ar') ? $names->third_skill_ar :$names->third_skill }}
                                            @include('sections.skillsValueImages',['skillValue'=>$employee->third_skill])
                                        </li>
                                    @endif

                                    @if($employee->forth_skill)
                                        <li>
                                            {{(Config::get('app.locale') == 'ar') ? $names->forth_skill_ar :$names->forth_skill }}
                                            @include('sections.skillsValueImages',['skillValue'=>$employee->forth_skill])
                                        </li>
                                    @endif

                                </ul>

                        </div><!--end contact-->
                    @endif
                </div><!--end background-blue-->

            </div><!--end col-4-->


            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="background-white cv wow fadeInLeft">

                    <h2 class="h4-style"> {{$employee->name}} </h2>

                    <h4>{{$employee->job_title}} </h4>

                    <div class="cleaner-h3"></div>

                    <h3 class="title-cv">
                        {{(Config::get('app.locale') == 'ar') ? $names->personal_info_ar :$names->personal_info }}
                    </h3>

                    {!! $employee->personal_info!!}

                    <div class="cleaner-h3"></div>

                    <div class="row">

                        @if(($employee->gender != null))
                            <div class="col-md-6">
                                <h3 class="title-cv">
                                    {{(Config::get('app.locale') == 'ar') ? $globalNames->gender_ar :$globalNames->gender }}
                                </h3>
                                <p>
                                    @if($employee->gender == '1')
                                        @lang('messages.Male')
                                    @elseif($employee->gender == '2')
                                        @lang('messages.Female')
                                    @endif
                                </p>
                            </div><!--end col-6-->
                        @endif

                        @if($employee->birth_date)
                           <div class="col-md-6">
                                <h3 class="title-cv">{{(Config::get('app.locale') == 'ar') ? $globalNames->birth_date_ar :$globalNames->birth_date }}</h3>
                                <p>{{$employee->birth_date}}</p>
                            </div><!--end col-6-->
                        @endif

                        <div class="cleaner-h3"></div>

                        @if($employee->military_service)
                            <div class="col-md-6">
                                <h3 class="title-cv">
                                    {{(Config::get('app.locale') == 'ar') ? $globalNames->military_service_ar :$globalNames->military_service }}
                                </h3>
                                <p>
                                    {{(Config::get('app.locale') == 'ar') ? $militray->name_ar :$militray->name }}
                                </p>
                            </div><!--end col-6-->
                        @endif

                    </div><!--end row-->

                </div><!--end background-white-->



                <div class="cleaner-h3"></div>

                <div class="background-white wow fadeInLeft">


                    <div class="row">

                        @if($employee->years_experience)
                            <div class="col-md-6">
                                <h3 class="title-cv">
                                    {{(Config::get('app.locale') == 'ar') ? $names->experience_years_ar :$names->experience_years }}
                                </h3>
                                <p>{{$employee->years_experience}}</p>

                            </div><!--end col-6-->
                        @endif


                        @if($employee->education)
                            <div class="col-md-6">
                                <h3 class="title-cv">
                                    {{(Config::get('app.locale') == 'ar') ? $names->education_ar :$names->education }}
                                </h3>
                                <p>{{$employee->education}}</p>
                            </div><!--end col-6-->
                        @endif

                        @php
                            $experiences = App\Models\workExperience::where('type',2)->where('user_id',$employee->id)->latest()->get();

                            $certificates = App\Models\Certificates::where('type',2)->where('user_id',$employee->id)->latest()->get();
                        @endphp

                        @if((sizeof($experiences) > 0) || (sizeof($certificates) > 0))
                        <div class="col-md-12">

                            <div class="cleaner-h3"></div>
                            @if(sizeof($experiences) > 0)
                                <h3 class="title-cv">
                                    {{(Config::get('app.locale') == 'ar') ? $globalNames->work_experience_ar :$globalNames->work_experience }}
                                </h3>

                                @foreach($experiences as $experience)

                                    @if((Config::get('app.locale') == 'ar'))
                                        <p class="title-p-date">
                                           من  {{$experience->from_date}} الى   {{$experience->to_date}}
                                        </p>

                                        <span>{{$experience->name}}</span>

                                    @else
                                        <p class="title-p-date">
                                           From {{$experience->from_date}} To {{$experience->to_date}}
                                        </p>

                                        <span>{{$experience->name}}</span>
                                    @endif
                                    <div class="cleaner-h1"></div>
                                @endforeach
                            @endif


                                <div class="cleaner-h3"></div>

                                @if(sizeof($certificates) > 0)
                                <h3 class="title-cv">
                                    {{(Config::get('app.locale') == 'ar') ? $names->certificates_ar :$names->certificates }}
                                </h3>

                                    @foreach($certificates as $certificate)
                                        <p class="line-heightt">
{{--                                             <a href="{{route('dowloadCertificate',['file_name'=>$certificate->certificate,'folderName'=>'mediaCertificates'])}}">
                                            <i class="fa fa-download"></i>

                                                {{$certificate->name}}
                                            </a> --}}

                                            <a class="fancybox" rel="gallery1" href="{{url('public/storage/Images/mediaCertificates/'.$certificate->certificate)}}">
                                            <i class="fa fa-download"></i>
                                                {{$certificate->name}}
                                            </a>
                                        </p>
                                    @endforeach
                                @endif
                        </div><!--end col-12-->
                        @endif

                    </div><!--end row-->

                </div><!--end background-white-->

            </div><!--end col-12-->

        </div><!--end row-->
    </div><!--end container-->
</section>

@endsection

@section('footer')

    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                // openEffect  : 'none',
                // closeEffect : 'none'
            });
        });
    </script>
@endsection
