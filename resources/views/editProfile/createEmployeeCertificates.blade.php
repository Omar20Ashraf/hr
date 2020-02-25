@extends('layouts.master')

@section('title')
{{config('app.name')}} | {{$employee->name}}
@endsection

@section('content')


{{-- slider Section --}}
@include('sections.Slider',['sliderType'=>$sliderType,'backImage'=>$backImage])


<section id="login-register" class="p_b70 p_t70">
        <!-- Tab panes -->
        <div class="tab-content">

            <div id="registerd">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="login-register-bg">

                                <div class="row">
                                    @include('admin/elements/flash')
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="heading">
                                            <h2>@lang('messages.Add New Certificate')</h2>
                                        </div>
                                        <!-- updateRouteName came from UsersCtrl -->

                                        <form class="registerd" method="POST" action="{{ route('storeCertificates') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <input name="slug" type="hidden" value="{{$employee->slug}}">

                                            <input name="userType" type="hidden" value="{{$userType}}">

                                            <input name="certificatesType" type="hidden" value="{{$certificatesType}}">

                                            <input name="user_id" type="hidden" value="{{$userId}}">

                                            <input name="folderName" type="hidden" value="{{$folderName}}">

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="listing-title-area">

                                                        <div class="form-group">
                                                            <label>
                                                                {{(Config::get('app.locale') == 'ar') ? $names->certificates_ar :$names->certificates }}
                                                                <span>*</span>
                                                            </label>

                                                            <input type="file" name="certificate"  required>
                                                        </div>

                                                    </div><!--end نوع الحساب-->
                                                </div><!--end col-9-->
                                            </div>


                                            <div class="form-group">
                                                <button>@lang('messages.Add')</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</section>

@endsection
