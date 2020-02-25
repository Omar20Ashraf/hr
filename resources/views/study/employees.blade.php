@extends('layouts.master')

@section('title')
{{config('app.name')}} | IStudy
@endsection

@section('content')

    {{-- slider Section --}}
    @include('sections.Slider',['sliderType'=>'IStudy','backImage'=>'back2-2.png'])



    <section id="login-register" class="p_b70 p_t70">

      <div class="container">
          <div class="row">


            @foreach(App\Models\StudyEmployee::where('status',1)->latest()->get() as $employee)
              <div class="col-md-3 col-sm-6 col-xs-12">

                  <div class="gemy-a wow fadeInLeft">
                       <div class="popular-image">

                           <img class="iimg" src="{{url('public/storage/Images/studyEmployee/'.$employee->image)}}" alt="image">
                       </div>


                           <div class="gemy-block trainer-gemy">
                          <a href="{{route('singleStudyEmployee',$employee->slug)}}">
                               <h3>{{$employee->name}}</h3>
                               <span class="text-center"><i class="fa fa-location-arrow"></i>
                                    {{$employee->job_title}}
                                </span> <br>

                               {!! str_limit($employee->personal_info,100)!!}
                               </a>
                           </div>

                   </div>
              </div>
             @endforeach


          </div><!--end row-->
      </div><!--end container-->
    </section>


@endsection
