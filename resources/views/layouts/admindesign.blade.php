<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>AdminDesigns - A Responsive HTML5 Admin UI Framework</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/skin/default_skin/css/theme.css')}}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body class="blank-page">

<!-- Start: Main -->
<div id="main">

    <!-- Start: Header -->
    <header class="navbar navbar-static-top">
        <div class="navbar-branding">
            <a class="navbar-brand" href="#">
                <b>Emlido </b>Admin Panel
            </a>
        </div>



        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">John.Smith
                    <span class="caret caret-tp hidden-xs"></span>
                </a>
                <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">

                    <li class="list-group-item">
                        <a href="#">
                            <span class="fa fa-power-off"></span> Logout </a>
                    </li>
                </ul>
            </li>
        </ul>

    </header>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-primary">

        <!-- Start: Sidebar Left Content -->
        <div class="sidebar-left-content nano-content">

            <!-- Start: Sidebar Menu -->
            <ul class="nav sidebar-menu">
                <li class="sidebar-label pt20">Menu</li>
                <li>
                    <a href="{{url('main')}}">
                        <span class="glyphicon glyphicon-home"></span>
                        <span class="sidebar-title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('users')}}">
                        <span class="glyphicon glyphicon-user"></span>
                        <span class="sidebar-title">User List</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('affiliates')}}">
                        <span class="fa fa-female"></span>
                        <span class="sidebar-title">Affiliate List</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('tasks')}}">
                        <span class="glyphicon glyphicon-tasks"></span>
                        <span class="sidebar-title">Task List</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('offers')}}">
                        <span class="glyphicon glyphicon-share-alt"></span>
                        <span class="sidebar-title">Offer List</span>
                    </a>
                </li>
            </ul>
            <ul class="nav sidebar-menu">
                <li class="sidebar-label pt20">Operations</li>
                <li>
                    <a href="{{url('send-sms')}}">
                        <span class="glyphicon glyphicon-envelope"></span>
                        <span class="sidebar-title">SMS Sender</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('faq')}}">
                        <span class="glyphicon glyphicon-duplicate"></span>
                        <span class="sidebar-title">FAQ Modifer</span>
                    </a>
                </li>
            </ul>
            <ul class="nav sidebar-menu">
                <li class="sidebar-label pt20">Others</li>
                <li>
                    <a href="dashboard.html">
                        <span class="glyphicon glyphicon-duplicate"></span>
                        <span class="sidebar-title">Logout</span>
                    </a>
                </li>
            </ul>
            <!-- End: Sidebar Menu -->

        </div>
        <!-- End: Sidebar Left Content -->

    </aside>

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

    @yield('content')

    </section>

</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('vendor/jquery/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('vendor/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

<!-- Theme Javascript -->
<script src="{{asset('assets/js/utility/utility.js')}}"></script>
<script src="{{asset('assets/js/demo/demo.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {

        "use strict";

        // Init Theme Core
        Core.init();


    });
</script>
<!-- END: PAGE SCRIPTS -->

</body>

</html>
