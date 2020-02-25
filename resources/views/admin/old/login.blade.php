<!DOCTYPE html>
<html lang="en" dir="rtl">

<!-- Added by HTTrack -->
<!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
        @yield('title')
    </title>

	<!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ url('public/asset/Admin') }}/css_en/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="{{ url('public/asset/Admin') }}/css_en/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ url('public/asset/Admin') }}/css_en/core.min.css" rel="stylesheet" type="text/css">
    <link href="{{ url('public/asset/Admin') }}/css_en/components.min.css" rel="stylesheet" type="text/css">
    <link href="{{ url('public/asset/Admin') }}/css_en/colors.min.css" rel="stylesheet" type="text/css">
    <link href="{{ url('public/asset/Admin') }}/css_en/style.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!--begin::Web font -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script> --}}
    <link href="https://fonts.googleapis.com/css?family=Changa:500|El+Messiri|Harmattan|Mada:600|Tajawal:700" rel="stylesheet">


    @yield('header')
</head>

<body class="login-container">


        <!-- Page container -->
        <div class="page-container">

            <!-- Page content -->
            <div class="page-content">

                <!-- Main content -->
                <div class="content-wrapper">

                    <!-- Content area -->
                    <div class="content">

                        <!-- Simple login form -->
                        <form method="POST" action="{{ url('/admin/login') }}">
                                @csrf
                                <div class="panel panel-body login-form">
                                    <div class="text-center">
                                        <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                                        <h5 class="content-group">Login
                                            <small class="display-block">
                                                Enter Your Email And Password
                                            </small>
                                        </h5>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">

                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        <div class="form-control-feedback">
                                            <i class="icon-user text-muted"></i>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">

                                        <input id="password" type="password" class="form-control" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                        <div class="form-control-feedback">
                                            <i class="icon-lock2 text-muted"></i>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Login<i class="icon-circle-left2 position-right"></i></button>
                                    </div>

                                </div>
                            </form>
                        <!-- /simple login form -->


                        <!-- Footer -->

                        <!-- /footer -->

                    </div>
                    <!-- /content area -->

                </div>
                <!-- /main content -->

            </div>
            <!-- /page content -->

        </div>
        <!-- /page container -->


    <!-- Core JS files -->
    <script src="{{ url('public/asset/Admin') }}/js/plugins/loaders/pace.min.js"></script>
    <script src="{{ url('public/asset/Admin') }}/js/core/libraries/jquery.min.js"></script>
    <script src="{{ url('public/asset/Admin') }}/js/core/libraries/bootstrap.min.js"></script>
    <script src="{{ url('public/asset/Admin') }}/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ url('public/asset/Admin') }}/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="{{ url('public/asset/Admin') }}/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="{{ url('public/asset/Admin') }}/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="{{ url('public/asset/Admin') }}/js/plugins/ui/moment/moment.min.js"></script>
    <script src="{{ url('public/asset/Admin') }}/js/plugins/pickers/daterangepicker.js"></script>

    <!-- Theme JS files -->
    <script src="{{ url('public/asset/Admin') }}/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="{{ url('public/asset/Admin') }}/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="{{ url('public/asset/Admin') }}/js/plugins/forms/styling/switch.min.js"></script>

    <!-- Theme JS files -->
    <script src="{{ url('public/asset/Admin') }}/js/plugins/notifications/noty.min.js"></script>
    <script src="{{ url('public/asset/Admin') }}/js/plugins/notifications/jgrowl.min.js"></script>

    <script src="{{ url('public/asset/Admin') }}/js/app.js"></script>
    <script src="{{ url('public/asset/Admin') }}/js/demo_pages/components_notifications_other.js"></script>
    <script src="{{ url('public/asset/Admin') }}/js/demo_pages/form_checkboxes_radios.js"></script>
    <script src="{{ url('public/asset/Admin') }}/js/demo_pages/uploader_bootstrap.js"></script>
    <script src="{{ url('public/asset/Admin') }}/js/demo_pages/dashboard.js"></script>
    <!-- /theme JS files -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('footer')

</body>

</html>
