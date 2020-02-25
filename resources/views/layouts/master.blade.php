<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>
         @yield('title')
     </title>
        {{-- href="{{ url('asset/'.Config::get('app.locale')) }}/css/bootstrap.min.css" --}}

       <link href="{{url('public/asset/'.Config::get('app.locale')) }}/css/animate.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{url('public/asset/'.Config::get('app.locale')) }}/css/master.css">

        <link rel="stylesheet" type="text/css" href="{{url('public/asset/'.Config::get('app.locale')) }}/css/color-green.css">
        <link rel="shortcut icon"  href="{{url('public/asset/images/short_icon.png')}}">
        
        <link rel="stylesheet" type="text/css" href="{{url('public/asset/'.Config::get('app.locale')) }}/css/jquery.fancybox.min.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body>
    @include('layouts.header')
    @yield('content')

        @include('sweet::alert')


        @include('layouts.footer')
        <script src="{{asset('public/asset/js/jquery.2.2.3.min.js')}}"></script>
        <script src="{{asset('public/asset/js/bootstrap.min.js')}}"></script>

        <script src="{{asset('public/asset/js/wow.min.js')}}"></script>
        <script src="{{asset('public/asset/js/script.js')}}"></script>
        
        <script src="{{asset('public/asset/js/jquery.fancybox.min.js')}}"></script>
        
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @yield('footer')
</body>

</html>
