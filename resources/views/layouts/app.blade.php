<!doctype html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}">

        <!--Google Fonts link-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">


        <link rel="stylesheet" href="{{asset('/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('/css/slick-theme.css')}}">
        <link rel="stylesheet" href="{{asset('/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/fonticons.css')}}">
        <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('/css/bootsnav.css')}}">


        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css')}}" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css')}}">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{asset('/css/responsive.css')}}" />

        <script src="{{asset('/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


    @yield('preloader')

        <div class="culmn">
            @include('partials._navbar')

            @yield('content')

            @include('partials._footer')
        </div><!--End off colmn -->

        <!-- JS includes -->

        <script src="{{asset('/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('/js/vendor/bootstrap.min.js')}}"></script>

        <script src="{{asset('/js/isotope.min.js')}}"></script>
        <script src="{{asset('/js/jquery.magnific-popup.js')}}"></script>
        <script src="{{asset('/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('/js/slick.min.js')}}"></script>
        <script src="{{asset('/js/jquery.collapse.js')}}"></script>
        <script src="{{asset('/js/bootsnav.js')}}"></script>

        @yield('script')

        <script src="{{asset('/js/plugins.js')}}"></script>
        <script src="{{asset('/js/main.js')}}"></script>

    </body>
</html>
