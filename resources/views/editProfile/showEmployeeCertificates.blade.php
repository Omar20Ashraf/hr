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
                            $certificates = App\Models\Certificates::where('type',$certificatesType)->where('user_id',$employee->id)->latest()->get()
                        @endphp

                        <div class="col-md-12">

                            <h3 class="title-cv">
                                {{(Config::get('app.locale') == 'ar') ? $names->certificates_ar :$names->certificates }}
                            </h3>
                            @if(sizeof($certificates) > 0)


                                @foreach($certificates as $certificate)
                                    <p class="line-heightt">

                                        <a class="fancybox" rel="gallery1" href="{{url('public/storage/Images/'.$certificatesFolder.'/'.$certificate->certificate)}}">
                                        <i class="fa fa-download"></i>
                                            {{$certificate->name}}
                                        </a>

                                        <a href="{{ route('deleteCertificates',['id'=>$certificate->id,'folderName'=>$certificatesFolder]) }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('delete-certificates-{{$certificate->id}}').submit();">
                                            @lang('messages.Remove')
                                        </a>

                                        <form action="{{ route('deleteCertificates',['id'=>$certificate->id,'folderName'=>$certificatesFolder]) }}" method="POST" style="display: none;" id='delete-certificates-{{$certificate->id}}'>

                                            @csrf
                                            {{ method_field('DELETE') }}
                                        </form>
                                    </p>
                                @endforeach

                            @else
                               <h3>@lang('messages.No Certificates')</h3>
                            @endif
                        </div><!--end col-12-->

                    </div><!--end background-white-->

                        <a href="{{ route('createCertificates') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('add_certificates').submit();" class="employee-delete-button">
                            @lang('messages.Add New Certificate')
                        </a>

                        <form action="{{ route('createCertificates') }}" method="get" style="display: none;" id='add_certificates'>

                            @csrf

                            <input type="hidden" name="userType" value="{{$userType}}">
                            <input type="hidden" name="employee_id" value="{{$employee->id}}">
                            <input type="hidden" name="folderName" value="{{$certificatesFolder}}">
                        </form>

                    <div class="cleaner-h3"></div>

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
