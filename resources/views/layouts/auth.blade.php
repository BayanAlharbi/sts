<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <title>@yield('title') | STS</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('css/colors/blue.css') }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div id="app">


            @yield('content')


        </div>

        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="/assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="/assets/plugins/popper/popper.min.js"></script>
        <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="js/sidebarmenu.js"></script>
        <!--stickey kit -->
        <script src="/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <script src="/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!--Custom JavaScript -->
        <script src="js/custom.js"></script>
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
