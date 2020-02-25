@extends('layouts.master')

@section('title')
{{config('app.name')}} | {{$employee->name}}
@endsection

@section('content')


{{-- slider Section --}}
@include('sections.Slider',['sliderType'=>$sliderType,'backImage'=>$backImage])


    <section id="login-register" class="p_b70 p_t70">

        <div class="container">
            <div class="row">


                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="background-white cv wow fadeInLeft">

                        <h2 class="h4-style"> {{$employee->name}} </h2>

                        @php
                            $experiences = App\Models\workExperience::where('type',$experienceType)->where('user_id',$employee->id)->latest()->get();
                        @endphp

                        <div class="col-md-12">

                            <h3 class="title-cv">
                                {{(Config::get('app.locale') == 'ar') ? $globalNames->work_experience_ar :$globalNames->work_experience }}
                            </h3>
                            @if((sizeof($experiences) > 0))

                                @foreach($experiences as $experience)

                                    @if((Config::get('app.locale') == 'ar'))
                                        <p class="title-p-date">
                                           من  {{$experience->from_date}} الى   {{$experience->to_date}}
                                            <span>{{$experience->name}}</span>

                                            <a href="{{ route('deleteExperience',$experience->id) }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('delete-experience-{{$experience->id}}').submit();" class="employee-delete-button">
                                                @lang('messages.Remove')
                                            </a>
                                        </p>
                                        <br>
                                        <br>
                                    @else
                                        <p class="title-p-date">
                                           From {{$experience->from_date}} To {{$experience->to_date}}
                                            <span>{{$experience->name}}</span>
                                            <a href="{{ route('deleteExperience',$experience->id) }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('delete-experience-{{$experience->id}}').submit();" class="employee-delete-button">
                                                @lang('messages.Remove')
                                            </a>

                                        </p>
                                        <br>
                                        <br>
                                    @endif
                                    <form action="{{ route('deleteExperience',$experience->id) }}" method="POST" style="display: none;" id='delete-experience-{{$experience->id}}'>
                                        @csrf
                                        {{ method_field('DELETE') }}
                                    </form>

                                @endforeach

                            @else
                               <h3>@lang('messages.No Experience')</h3>
                            @endif
                        </div><!--end col-12-->

                    </div><!--end background-white-->

                        <a href="{{ route('createExperience',['userType' => $userType,'employeeId'=>$employee->id]) }}" class="add-experience">
                            @lang('messages.Add New Experience')
                        </a>

                    <div class="cleaner-h3"></div>

             </div><!--end col-12-->





            </div><!--end row-->
        </div><!--end container-->
    </section>

@endsection
