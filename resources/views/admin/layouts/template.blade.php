<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>@yield('title',env('App-name'))</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{asset('dashboard/assets/css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/css/lib/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/assets/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/css/lib/helper.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/css/style.css')}}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
{{--side bar--}}
@include('admin.layouts.sidebar')
<!-- /# sidebar -->
{{--header--}}
{{--end header--}}
@include('admin.layouts.header')
{{--container--}}
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Hello, <span>Welcome Here</span></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Home</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    @yield('content')
                </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>

<!-- jquery vendor -->
<script src="{{asset('dashboard/assets/js/lib/jquery.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/lib/jquery.nanoscroller.min.js')}}"></script>
<!-- nano scroller -->
<script src="{{asset('dashboard/assets/js/lib/menubar/sidebar.js')}}"></script>
<script src="{{asset('dashboard/assets/js/lib/preloader/pace.min.js')}}"></script>
<!-- sidebar -->

<script src="{{asset('dashboard/assets/js/lib/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/scripts.js')}}"></script>
<!-- bootstrap -->

<script src="{{asset('dashboard/assets/js/lib/calendar-2/moment.latest.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/lib/calendar-2/pignose.calendar.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/lib/calendar-2/pignose.init.js')}}"></script>


<script src="{{asset('dashboard/assets/js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/lib/weather/weather-init.js')}}"></script>
<script src="{{asset('dashboard/assets/js/lib/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/lib/circle-progress/circle-progress-init.js')}}"></script>
<script src="{{asset('dashboard/assets/js/lib/chartist/chartist.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/lib/sparklinechart/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/lib/sparklinechart/sparkline.init.js')}}"></script>
<script src="{{asset('dashboard/assets/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>
<!-- scripit init-->
<script src="{{asset('dashboard/assets/js/dashboard2.js')}}"></script>
</body>

</html>
