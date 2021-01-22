<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, severny admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, pixel  design, pixel  dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Pixel Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow"> -->
    <title>Zipremit</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link href="{{ asset('superblog/css/app.css') }}" rel="stylesheet">
    <link rel="canonical" href="https://www.wrappixel.com/templates/pixel-admin-lite/" />
    <!-- Favicon icon -->
    <!-- Bootstrap Core CSS -->
    <link href="/sendfoodassets/pixel-html/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="/sendfoodassets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="/sendfoodassets/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="/sendfoodassets/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="/sendfoodassets/pixel-html/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/sendfoodassets/pixel-html/css/style.css" rel="stylesheet">
    <link href="/sendfoodassets/pixel-html/css/customstyles.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="/sendfoodassets/pixel-html/css/colors/blue-dark.css" id="theme" rel="stylesheet">

    <!--fontawesome styles-->
    <link href="/sendfoodassets/fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
    <script defer src="/sendfoodassets/fontawesome/js/all.js"></script> <!--load all styles -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
    <script src="/sendfoodassets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/sendfoodassets/pixel-html/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="/sendfoodassets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="/sendfoodassets/pixel-html/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/sendfoodassets/pixel-html/js/waves.js"></script>
    <!--Counter js -->
    <script src="/sendfoodassets/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="/sendfoodassets/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="/sendfoodassets/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="/sendfoodassets/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/sendfoodassets/pixel-html/js/custom.min.js"></script>
    <script src="/sendfoodassets/pixel-html/js/dashboard1.js"></script>
    <script src="/sendfoodassets/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $.toast({
                heading: 'Welcome to Pixel admin',
                text: 'Use the predefined ones, or specify a custom position object.',
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: 'info',
                hideAfter: 3500,
                stack: 6
            })
        });
    </script>
</body>

</html>