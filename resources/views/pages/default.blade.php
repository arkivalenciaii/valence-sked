<html>
<head>
    <meta charset="utf-8">
    <title>STUDENT - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="/assets/css/chosen.css" rel="stylesheet" tyle="text/css">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/theme/avocado.css" rel="stylesheet" type="text/cs s" id="theme-style">
    <link href="/assets/css/prism.css" rel="stylesheet/less" type="text/css">
    <link href="/assets/css/fullcalendar.css" rel="stylesheet" tyle="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,300" rel="stylesheet" type="text/css">
    <style type="text/css">
        body { padding-top: 102px; }
    </style>

    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="/assets/js/charts/excanvas.min.js"></script>
    <script src="/assets/js/charts/jquery.flot.js"></script>
    <script src="/assets/js/jquery.jpanelmenu.min.js"></script>
    <script src="/assets/js/jquery.cookie.js"></script>
    <script src="/assets/js/avocado-custom-predom.js"></script>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a href="#">
                <button type="button" class="btn btn-navbar mobile-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </a>
            <a class="brand" href="#"><i class="icon-leaf"></i> STUD<b>ENT</b> - Student-Teacher-University Development : Education Nourishment Toolkit</a>
            <ul class="nav pull-right">
                @include('pages.notifs')
                @include('pages.notifs_messages')
                @include('pages.profile_head')
            </ul>
        </div>
    </div>
    <div class="breadcrumb clearfix">
        <div class="container">
            <ul class="pull-left">
                <li><a href="#"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
                <li class="active"><a href="#"><i class="icon-align-justify"></i> Dashboard</a></li>
            </ul>
            <ul class="pull-right">
                <li><a href="login.html"><i class="icon-off"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>
@yield('content')
@include('flash::message')
@include('pages.footer')