<!DOCTYPE html>
<html lang="en">


<!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
        @yield('title')
    </title>

	<!-- Global stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
        <link href="{{ url('asset/Admin') }}/css_en/icons/icomoon/styles.css" rel="stylesheet" type="text/css">

        <link href="{{ url('asset/Admin') }}/css_en/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="{{ url('asset/Admin') }}/css_en/core.min.css" rel="stylesheet" type="text/css">
        <link href="{{ url('asset/Admin') }}/css_en/components.min.css" rel="stylesheet" type="text/css">
        <link href="{{ url('asset/Admin') }}/css_en/colors.min.css" rel="stylesheet" type="text/css">
        <link href="{{ url('asset/Admin') }}/css_en/style.css" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css?family=Changa:500|El+Messiri|Harmattan|Mada:600|Tajawal:700" rel="stylesheet">

        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

        {{-- font awesome --}}
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    @yield('header')
</head>

<body>

    @include('admin/elements/navbar')

    <!-- Page container -->
	<div class="page-container">
		<!-- Page content -->
		<div class="page-content">

            @include('admin/elements/sidebar')

            @include('admin/elements/flash')
            @yield('content')
                @include('sweet::alert')


        </div><!-- Page content -->
    </div><!-- Page container -->


        <!-- Core JS files -->
        <script src="{{ url('asset/Admin/js/plugins/loaders/pace.min.js') }}"></script>
        <script src="{{ url('asset/Admin/js/core/libraries/jquery.min.js')}}"></script>
        <script src="{{ url('asset/Admin/js/core/libraries/bootstrap.min.js') }}"></script>
        <script src="{{ url('asset/Admin/js/plugins/loaders/blockui.min.js') }}"></script>
        <!-- /core JS files -->

        <!-- Theme JS files -->
        <script src="{{ url('asset/Admin/js/plugins/visualization/d3/d3.min.js') }}"></script>
        <script src="{{ url('asset/Admin/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
        <script src="{{ url('asset/Admin/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
        <script src="{{ url('asset/Admin/js/plugins/ui/moment/moment.min.js') }}"></script>
        <script src="{{ url('asset/Admin/js/plugins/pickers/daterangepicker.js') }}"></script>

        <!-- Theme JS files -->
        <script src="{{ url('asset/Admin/js/plugins/forms/styling/uniform.min.js')}}"></script>

        <!-- Theme JS files -->
        <script src="{{ url('asset/Admin/js/plugins/notifications/noty.min.js')}}"></script>
        <script src="{{ url('asset/Admin/js/plugins/notifications/jgrowl.min.js')}}"></script>

        <script src="{{ url('asset/Admin/js/app.js')}}"></script>
        <script src="{{ url('asset/Admin/js/demo_pages/components_notifications_other.js')}}"></script>
        <!-- /theme JS files -->

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
        @yield('footer')

</body>

</html>
