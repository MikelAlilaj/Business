<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bizdire - Business Directory and classifieds premium html5 CSS template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="business directory website,online business directory website,directory listing sites,bootstrap form template,bootstrap templates,responsive web design,bootstrap website templates,business directory,business directory template,business listing,buy web templates,directory,directory html template,directory listing html template,directory website template,html list template,html template,html5 responsive template,html5 template,local business directory,local business listing,online business directory,online directory,premium,premium bootstrap templates,small business directory,classified,Premium business directory Templates,Directory & Listing HTML Template,business listing websites">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <!-- Title -->
    <title>Bizdire - Business Directory and classifieds premium html5 CSS template</title>

    <!-- Bootstrap Css -->
    <link href="{{ asset('frontend/assets/plugins/bootstrap-4.4.1-dist/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet" />

    <!-- Font-awesome  Css -->
    <link href="{{ asset('frontend/assets/css/icons.css') }}" rel="stylesheet"/>

    <!--Horizontal Menu-->
    <link href="{{ asset('frontend/assets/plugins/horizontal/horizontal-menu/horizontal.css') }}" rel="stylesheet" />

    <!--Select2 Plugin -->
    <link href="{{ asset('frontend/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

    <!-- Cookie css -->
    <link href="{{ asset('frontend/assets/plugins/cookie/cookie.css') }}" rel="stylesheet">

    <!-- Auto Complete css -->
    <link href="{{ asset('frontend/assets/plugins/autocomplete/jquery.autocomplete.css') }}" rel="stylesheet">

    <!-- Auto Complete css -->
    <link href="{{ asset('frontend/assets/plugins/autocomplete/jquery.autocomplete.css') }}" rel="stylesheet">

    <!-- Owl Theme css-->
    <link href="{{ asset('frontend/assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />

    <!-- Custom scroll bar css-->
    <link href="{{ asset('frontend/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

    <!-- Color-Skins -->
    <link id="theme" href="{{ asset('frontend/assets/color-skins/color1.css') }}"  rel="stylesheet"/>



</head>
<body>



<!--Topbar-->
<div class="header-main">
    <div class="top-bar p-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-sm-4 col-7">
                    <div class="top-bar-left d-flex">
                        <div class="clearfix">
                            <ul class="socials d-lg-none">
                                <li>
                                    <a class="social-icon text-dark" href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon text-dark" href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon text-dark" href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon text-dark" href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                            </ul>
                            <div class="header-search-logo d-none d-lg-block ">
                                <a href="{{route('index')}}" class="absolute-link"> <img src="{{ asset('frontend/assets/images/brand/logo2.png') }}" alt="image"></a>
                            </div>
                        </div>
                        <div class="clearfix">
                            <ul class="contact border-left">
                                <li class="mr-5 d-lg-none">
                                    <a href="#" class="callnumber text-dark"><span><i class="fa fa-phone mr-1"></i>: +425 345 8765</span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-sm-8 col-5">
                    <div class="top-bar-right">
                        <ul class="custom ">
                            @guest
                                <li>
                                    <a href="{{ route('register') }}" class="text-dark"><i class="fa fa-user mr-1"></i> <span >Register</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('login') }}" class="text-dark"><i class="fa fa-sign-in mr-1"></i> <span>Login</span></a>
                                </li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="text-dark" data-toggle="dropdown"><i class="fa fa-home mr-1"></i><span> My Dashboard</span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a href="{{ route('user_profile') }}" class="dropdown-item" >
                                            <i class="dropdown-icon icon icon-user"></i> My Profile
                                        </a>
{{--                                        <a class="dropdown-item" href="#">--}}
{{--                                            <i class="dropdown-icon icon icon-speech"></i> Inbox--}}
{{--                                        </a>--}}
{{--                                        <a class="dropdown-item" href="#">--}}
{{--                                            <i class="dropdown-icon icon icon-bell"></i> Notifications--}}
{{--                                        </a>--}}
{{--                                        <a href="settings.html" class="dropdown-item" >--}}
{{--                                            <i class="dropdown-icon  icon icon-settings"></i> Account Settings--}}
{{--                                        </a>--}}

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="dropdown-icon icon icon-power"></i> Log out
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <a href="{{route('my_favorites')}}" class="text-dark"><i class="fa fa-heart mr-1"></i> <span>My Favorites</span></a>
                                </li>

                                <li>
                                    <a href="{{route('add_business')}}" class="text-dark"><i class="fa fa-plus  "></i> <span>Add Business</span></a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Footer Section-->


    <!-- Back to top -->
    <a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>

    <!-- JQuery js-->
    <script src="{{ asset('frontend/assets/js/vendors/jquery-3.2.1.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('frontend/assets/plugins/bootstrap-4.4.1-dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/bootstrap-4.4.1-dist/js/bootstrap.min.js') }}"></script>

{{--    <!--JQuery Sparkline Js-->--}}
{{--    <script src="{{ asset('frontend/assets/js/vendors/jquery.sparkline.min.js') }}"></script>--}}

    <!-- Circle Progress Js-->
    <script src="{{ asset('frontend/assets/js/vendors/circle-progress.min.js') }}"></script>

{{--    <!-- Star Rating Js-->--}}
{{--    <script src="{{ asset('frontend/assets/plugins/rating/jquery.rating-stars.js') }}"></script>--}}

    <!--Counters -->
    <script src="{{ asset('frontend/assets/plugins/counters/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/counters/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/counters/numeric-counter.js') }}"></script>

{{--    <!--Owl Carousel js -->--}}
{{--    <script src="{{ asset('frontend/assets/plugins/owl-carousel/owl.carousel.js') }}"></script>--}}
{{--    <script src="{{ asset('frontend/assets/js/owl-carousel.js') }}"></script>--}}

    <!--Horizontal Menu-->
    <script src="{{ asset('frontend/assets/plugins/horizontal/horizontal-menu/horizontal.js') }}"></script>

    <!--JQuery TouchSwipe js-->
    <script src="{{ asset('frontend/assets/js/jquery.touchSwipe.min.js') }}"></script>

    <!--Select2 js -->
    <script src="{{ asset('frontend/assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/select2.js') }}></script>

<!-- sticky Js-->
<script src="{{ asset('frontend/assets/js/sticky.js') }}></script>

    <!-- Cookie js -->
    <script src="{{ asset('frontend/assets/plugins/cookie/jquery.ihavecookies.js') }}></script>
<script src="{{ asset('frontend/assets/plugins/cookie/cookie.js') }}"></script>

    <!--Auto Complete js -->
    <script src="{{ asset('frontend/assets/plugins/autocomplete/jquery.autocomplete.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/autocomplete/autocomplete.js') }}"></script>

    <!-- Custom scroll bar Js-->
    <script src="{{ asset('frontend/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!-- Swipe Js-->
    <script src="{{ asset('frontend/assets/js/swipe.js') }}"></script>

    <!-- Scripts Js-->
    <script src="{{ asset('frontend/assets/js/scripts2.js') }}"></script>

    <!-- Custom Js-->
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
@include('partials.alerts')

        @yield('content')









</body>

</html>
