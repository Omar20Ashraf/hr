@extends('layouts.master')

@section('title')
{{config('app.name')}} | IMedia Talented
@endsection

@section('content')

    {{-- slider Section --}}
    @include('sections.Slider',['sliderType'=>'IMedia','backImage'=>'back1-2.png'])



    <section id="login-register" class="p_b70 p_t70">

        <div class="container">
            <div class="row">

                @foreach(App\Models\MediaEmployee::where('status',1)->latest()->get() as $employee)
                   <div class="col-md-3 col-sm-6 col-xs-12">

                        <div class="gemy-a wow fadeInLeft">
                            <div class="popular-image">

                               <img src="{{url('public/storage/Images/mediaEmployee/'.$employee->image)}}"  alt="image" class="iimg">
                            </div>


                            <div class="gemy-block trainer-gemy">
                           <a href="{{route('mediaTalented',$employee->slug)}}">
                                <h3>{{$employee->name}}</h3>
                                <span class="text-center">
                                    <i class="fa fa-location-arrow"></i>
                                    {{$employee->job_title}}
                                </span> <br>

                                {!!$employee->personal_info!!}
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach



            </div><!--end row-->
        </div><!--end container-->
    </section>

@endsection
