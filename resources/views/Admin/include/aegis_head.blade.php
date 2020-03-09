<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Aegis International</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('aegis_files/myasset/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('aegis_files/myasset/vendors/bower_components/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('aegis_files/myasset/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('aegis_files/myasset/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('aegis_files/myasset/vendors/bower_components/sweetalert2/dist/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('aegis_files/myasset/vendors/bower_components/trumbowyg/dist/ui/trumbowyg.min.css')}}">
    <link rel="stylesheet" href="{{asset('aegis_files/myasset/vendors/bower_components/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('aegis_files/myasset/css/lobilist.min.css')}}">
    <link rel="stylesheet" href="{{asset('aegis_files/myasset/css/app.min.css')}}">
    <link rel="stylesheet" href="{{asset('aegis_files/myasset/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('aegis_files/myasset/css/simplebar.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body data-sa-theme="1">
<main class="main">
<div class="page-loader">
    <div class="page-loader__spinner">
        <svg viewBox="25 25 50 50">
            <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<header class="header">
    <div class="logo hidden-sm-down">
        <h1><a href="{{url('management')}}"><span>Aegis</span> International</a></h1>
    </div>
    <form class="search">
        <div class="search__inner">
            <input type="text" class="search__text" placeholder="Search for project, supplier, contact...">
            <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
            <div class="dropdown-new sm-width pull-right mr-1-half">
                <div class="select">
                    <span>Category</span>
                    <i class="zmdi zmdi-chevron-left"></i>
                </div>
                <input type="hidden" name="sort">
                <ul class="dropdown-menu-new call-sort">
                    <li>Project</li>
                    <li>Supplier</li>
                    <li onclick="Contact()">Contact</li>
                    <li>Employee</li>
                </ul>
            </div>
        </div>
    </form>
    <ul class="top-nav">
        <li class="hidden-xl-up"><a href="" data-sa-action="search-open"><i class="zmdi zmdi-search"></i></a></li>
        <li class="dropdown hidden-xs-down">
            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="" class="dropdown-item" data-sa-action="fullscreen">Fullscreen</a>
                <a href="security.html" class="dropdown-item">Security</a>
            </div>
        </li>
        <li class="hidden-xs-down">
            <a href="" class="top-nav__themes" data-sa-action="aside-open" data-sa-target=".themes"><i class="zmdi zmdi-palette"></i></a>
        </li>
    </ul>
    <div class="clock hidden-md-down">
        <div class="time">
            <span class="time__hours"></span>
            <span class="time__min"></span>
            <span class="time__sec"></span>
        </div>
    </div>
</header>
    <div id="test">
        @include('Admin.include.sidebar')
        <div class="themes">
            <div class="scrollbar-inner">
                <a href="" class="themes__item active" data-sa-value="1"><img src="{{asset('myasset/img/bg/1.jpg')}}" alt=""></a>
                <a href="" class="themes__item" data-sa-value="2"><img src="{{asset('myasset/img/bg/2.jpg')}}" alt=""></a>
                <a href="" class="themes__item" data-sa-value="3"><img src="{{asset('myasset/img/bg/3.jpg')}}" alt=""></a>
                <a href="" class="themes__item" data-sa-value="4"><img src="{{asset('myasset/img/bg/4.jpg')}}" alt=""></a>
                <a href="" class="themes__item" data-sa-value="5"><img src="{{asset('myasset/img/bg/5.jpg')}}" alt=""></a>
                <a href="" class="themes__item" data-sa-value="6"><img src="{{asset('myasset/img/bg/6.jpg')}}" alt=""></a>
                <a href="" class="themes__item" data-sa-value="7"><img src="{{asset('myasset/img/bg/7.jpg')}}" alt=""></a>
                <a href="" class="themes__item" data-sa-value="8"><img src="{{asset('myasset/img/bg/8.jpg')}}" alt=""></a>
                <a href="" class="themes__item" data-sa-value="9"><img src="{{asset('myasset/img/bg/9.jpg')}}" alt=""></a>
                <a href="" class="themes__item" data-sa-value="10"><img src="{{asset('myasset/img/bg/10.jpg')}}" alt=""></a>
            </div>
        </div>
        <section class="content">
            @yield('mycontent')
            @include('Admin.include.footer')
        </section>
</main>
    </div>
@include('Admin.include.script_bottom_master')
</body>
</html>