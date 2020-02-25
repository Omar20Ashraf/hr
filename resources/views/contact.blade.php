@extends('layouts.master')

@section('title')
{{config('app.name')}} | Contact
@endsection

@section('content')

       <!-- Inner Banner -->
    <section  id="banner-2" style="background:url(<?php echo 'public/storage/Images/contact/'.$contact->image; ?>)">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">

                    @if($contact->title || $contact->title)
                        <h2>{{(Config::get('app.locale') == 'en') ? $contact->title : $contact->title_ar}}</h2>
                    @endif
                    @if($contact->description || $contact->description_ar)
                        {!! (Config::get('app.locale') == 'en') ? $contact->description : $contact->description_ar !!}
                    @endif

                </div>
            </div>
        </div>

    </section>
    <!-- Inner Banner -->





    <!-- Contact Us -->
    <section id="contact-us" class="p_b70 p_t70">

        <div class="container">

            <div class="row">

                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">


                  <div class="row">

                        <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                            <div class="address-box">
                                <p><i class="fa fa-phone" aria-hidden="true"></i>
                                </p>
                                <h4>
                                    {{(Config::get('app.locale') == 'en') ? $names->phone : $names->phone_ar}}
                                </h4>
                                <p>
                                    <a href="tel:{{$info->phone}}">
                                        {{$info->phone}}
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                            <div class="address-box">
                                <p><i class="fa fa-envelope" aria-hidden="true"></i>
                                </p>
                                <h4>
                                    {{(Config::get('app.locale') == 'en') ? $names->email : $names->email_ar}}
                                </h4>
                                <p>
                                    <a href="mailto:{{ $info->email }}">
                                        {{ $info->email }}
                                    </a>
                                </p>
                            </div>
                        </div>
                        @if($info->website)
                        <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                            <div class="address-box">
                                <p><i class="fa fa-globe" aria-hidden="true"></i>
                                </p>
                                <h4>
                                    @lang('messages.Website')
                                </h4>
                                <p>
                                    <a href="{{ $info->website }}" target="_blank">
                                        @lang('messages.Website')
                                    </a>
                                </p>
                            </div>
                        </div>
                        @endif
                        @if($info->address)
                            <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                                <div class="address-box">
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </p>
                                    <h4>
                                        {{(Config::get('app.locale') == 'en') ? $names->address : $names->address_ar}}
                                    </h4>
                                    <p>
                                        <a>{{ $info->address }}</a>
                                    </p>
                                </div>
                            </div>
                        @endif

                    </div>


                <div class="cleaner-h4"></div>


                    <div class="contact-bg">

                        <div class="heading">
                            @include('admin/elements/flash')
                            <h2>
                                {{(Config::get('app.locale') == 'en') ? $names->get_in_touch : $names->get_in_touch_ar}}
                            </h2>
                        </div>

                        <form class="contact-form" method="post" action="{{route('storeContactus')}}">
                            @csrf
                            <div class="row">

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="{{(Config::get('app.locale') == 'en') ? $names->name : $names->name_ar}}" required value="{{old('name')}}">
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="{{(Config::get('app.locale') == 'en') ? $names->email : $names->email_ar}}" required value="{{old('email')}}">
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="{{(Config::get('app.locale') == 'en') ? $names->phone : $names->phone_ar}}" required value="{{old('phone')}}">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" placeholder="Your Question" required>
                                           
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">



                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit">
                                            {{(Config::get('app.locale') == 'en') ? $names->submit : $names->submit_ar}}
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- Contact Us -->

@endsection
