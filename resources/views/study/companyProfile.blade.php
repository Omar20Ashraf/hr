@extends('layouts.master')

@section('title')
{{config('app.name')}} | {{$company->name}}
@endsection

@section('content')

    {{-- slider Section --}}
    @include('sections.Slider',['sliderType'=>'IStudy','backImage'=>'back2-2.png'])



    <section id="login-register" class="p_b70 p_t70">

        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="background-white wow fadeInLeft">

                        <div class="row">

                            <div class="col-md-8">

                                <h4 class="h4-style">
                                    <span>
                                        {{(Config::get('app.locale') == 'ar') ? $globalNames->job_ar :$globalNames->job }} :
                                    </span>
                                        <p>{{$company->job_title}} </p>
                                </h4>


                                <h4 class="h4-style">
                                    <span>
                                        {{(Config::get('app.locale') == 'ar') ? $names->company_name_ar :$names->company_name }} :
                                     </span>
                                        <p> {{$company->name}} </p>
                                </h4>

                                @if($company->address)
                                    <h4 class="h4-style"><span>{{(Config::get('app.locale') == 'ar') ? $globalNames->location_ar :$globalNames->location }} :</span>
                                        <p>
                                            {{$company->address}}
                                        </p>
                                    </h4>
                                @endif

                                <h4 class="h4-style"><span>
                                    {{(Config::get('app.locale') == 'ar') ? $globalNames->phone_ar :$globalNames->phone }} :</span>
                                    <p>{{$company->phone}}</p>
                                </h4>

                                <h4 class="h4-style"><span>{{(Config::get('app.locale') == 'ar') ? $globalNames->date_ar :$globalNames->date }} :</span>
                                    <p>
                                    {{$company->created_at->format('d/m/Y')}}
                                    </p>
                                </h4>

                            </div><!--end col-8-->


                            <div class="col-md-4">
                               @if($company->image)
                                   <img src="{{url('public/storage/Images/studyCompanies/'.$company->image)}}" class="img-responsive width-img"/>
                               @endif
                            </div><!--end col-4-->


                        </div><!--end row-->

                    </div><!--end background-white-->



                    <div class="cleaner-h3"></div>



                    <div class="background-white wow fadeInLeft">

                        <div class="row">

                           <div class="col-md-8">

                                @if($company->exp_level)
                                    <h4 class="h4-style">
                                        <span>{{(Config::get('app.locale') == 'ar') ? $names->experience_level_ar :$names->experience_level }} :</span>
                                        <p>{{$company->exp_level}} </p>
                                    </h4>
                                @endif

                                @if($company->years_experience)
                                    <h4 class="h4-style"><span>{{(Config::get('app.locale') == 'ar') ? $names->experience_years_ar :$names->experience_years }} :</span>
                                        <p>{{$company->years_experience}} </p>
                                    </h4>
                                @endif

                                @if(($company->job_time != null ))
                                    <h4 class="h4-style">
                                        <span>{{(Config::get('app.locale') == 'ar') ? $names->job_type_ar :$names->job_type }} :</span>
                                        <p>
                                            @if ($company->job_time == '1')
                                                {{(Config::get('app.locale') == 'ar') ? $globalNames->full_time_ar :$globalNames->full_time }}
                                            @elseif($company->job_time == '2')
                                                {{(Config::get('app.locale') == 'ar') ? $globalNames->part_time_ar :$globalNames->part_time }}
                                            @elseif($company->job_time == '3')
                                                {{(Config::get('app.locale') == 'ar') ? $globalNames->freelance_ar :$globalNames->freelance }}
                                            @endif
                                        </p>
                                    </h4>
                                @endif


                                <h4 class="h4-style">
                                    <span>
                                        {{(Config::get('app.locale') == 'ar') ? $names->job_description_ar :$names->job_description }} :
                                    </span>
                                     <br>
                                     {!! $company->job_description!!}

                                 </h4>


                            </div><!--end col-8-->


                            <div class="col-md-4">
                                @if(($company->gender != null))
                                    <h4 class="h4-style"><span>{{(Config::get('app.locale') == 'ar') ? $globalNames->gender_ar :$globalNames->gender }} :</span>
                                        <p>
                                            @if ($company->gender == '1')
                                                @lang('messages.Male')
                                            @elseif($company->gender == '2')
                                                @lang('messages.Female')
                                            @endif

                                        </p>
                                    </h4>
                                @endif

                            </div><!--end col-4-->


                        </div><!--end row-->

                    </div><!--end background-white-->
                        
                    <div class="company-edit">
                        <a href="{{ route('editStudyCompany',$company->slug) }}" class="company-edit-button">
                            @lang('messages.Edit Your Information')
                        </a>
                    </div>
                </div><!--end col-12-->

            </div><!--end row-->
        </div><!--end container-->
    </section>


@endsection
