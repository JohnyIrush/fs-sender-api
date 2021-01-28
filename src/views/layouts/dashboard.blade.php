<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Zipremit</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles
            <link rel="canonical" href="https://www.wrappixel.com/templates/pixel-admin-lite/" />
         -->
        <link href="{{ asset('superblog/css/app.css') }}" rel="stylesheet">
    
    <!-- Favicon icon -->
    <!-- Bootstrap Core CSS -->
    <link href="/sendfoodassets/pixel-html/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="/sendfoodassets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS-->
    <link href="/sendfoodassets/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    
    <!-- morris CSS-->
    <link href="/sendfoodassets/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    
    <!-- animation CSS-->
    <link href="/sendfoodassets/pixel-html/css/animate.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="/sendfoodassets/pixel-html/css/style.css" rel="stylesheet">
    <link href="/sendfoodassets/pixel-html/css/customstyles.css" rel="stylesheet">

    <!-- color CSS -->
    <link href="/sendfoodassets/pixel-html/css/colors/blue-dark.css" id="theme" rel="stylesheet">

    <!--fontawesome styles-->
    <link href="/sendfoodassets/fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
    <script defer src="/sendfoodassets/fontawesome/js/all.js"></script> <!--load all styles -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://gatewayt.moneris.com/chkt/js/chkt_v1.00.js"></script>
    <script src="https://js.stripe.com/v3/"></script>

    
</head>

<body>
    <!-- Preloader 
            <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    -->


    <div id="wrapper">
        <!-- Navigation -->
        @include('sendfood::Themes.partials.navbar')
        <!-- Left navbar-header -->
        @include('sendfood::Themes.partials.sidebar')
        

        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <main>
                @yield('content')
            </main>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->

    <!-- Bootstrap Core JavaScript -->

    <!-- Menu Plugin JavaScript -->

    <!--slimscroll JavaScript -->

    <!--Wave Effects -->

    <!--Counter js -->

    <!--Morris JavaScript -->

    <!-- Custom Theme JavaScript -->

    <script src="/sendfoodassets/plugins/bower_components/jquery/dist/jquery.min.js"></script>

    <script src="/sendfoodassets/pixel-html/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="/sendfoodassets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

    <script src="/sendfoodassets/pixel-html/js/jquery.slimscroll.js"></script>

    <script src="/sendfoodassets/pixel-html/js/waves.js"></script>

    <script src="/sendfoodassets/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="/sendfoodassets/plugins/bower_components/counterup/jquery.counterup.min.js"></script>

    <script src="/sendfoodassets/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="/sendfoodassets/plugins/bower_components/morrisjs/morris.js"></script>

    <script src="/sendfoodassets/pixel-html/js/dashboard1.js"></script>
    <script src="/sendfoodassets/pixel-html/js/custom.min.js"></script>

    <!--my scripts-->
    <script src="/sendfoodassets/pixel-html/js/customizedjs.js"></script>
    <script src="/sendfoodassets/pixel-html/js/stripe.js"></script>
    <script src="https://gatewayt.moneris.com/chkt/js/chkt_v1.00.js"></script>
    <script src="/sendfoodassets/pixel-html/js/moneris.js"></script>

</body>

</html>