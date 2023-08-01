<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>Focus Admin: Creative Admin Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="{{asset('http://placehold.it/64.png/000/fff')}}">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('http://placehold.it/144.png/000/fff')}}">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('http://placehold.it/114.png/000/fff')}}">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('http://placehold.it/72.png/000/fff')}}">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('http://placehold.it/57.png/000/fff')}}">
    <!-- Styles -->
    <link href="{{asset('css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/lib/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/lib/helper.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>


@include ('partials.sidebar');
@include ('partials.header');


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

        </div>
  


<section class="main-content">

    @yield('content');

    </div>
</div>

</section>







    <!-- jquery vendor -->
    <script src="{{asset('js/lib/jquery.min.js')}}"></script>
    <script src="{{asset('js/lib/jquery.nanoscroller.min.js')}}"></script>
    <!-- nano scroller -->
    <script src="{{asset('js/lib/menubar/sidebar.js')}}"></script>
    <script src="{{asset('js/lib/preloader/pace.min.js')}}"></script>
    <!-- sidebar -->

    <script src="{{asset('js/lib/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <!-- bootstrap -->

    <script src="{{asset('js/lib/calendar-2/moment.latest.min.js')}}"></script>
    <script src="{{asset('js/lib/calendar-2/pignose.calendar.min.js')}}"></script>
    <script src="{{asset('js/lib/calendar-2/pignose.init.js')}}"></script>


    <script src="{{asset('js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{asset('js/lib/weather/weather-init.js')}}"></script>
    <script src="{{asset('js/lib/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('js/lib/circle-progress/circle-progress-init.js')}}"></script>
    <script src="{{asset('js/lib/chartist/chartist.min.js')}}"></script>
    <script src="{{asset('js/lib/sparklinechart/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/lib/sparklinechart/sparkline.init.js')}}"></script>
    <script src="{{asset('js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/lib/owl-carousel/owl.carousel-init.js')}}"></script>
    <!-- scripit init-->
    <script src="{{asset('js/dashboard2.js')}}"></script>
</body>

</html>

