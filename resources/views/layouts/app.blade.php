
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('assets/bootstrap/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('assets/fonts/font-awesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('assets/css/selectize.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/user.css')}}">

    <title>Craigs - Easy Buy & Sell Listing HTML Template</title>

</head>

<body>
<div class="page sub-page">
    <!--*********************************************************************************************************-->
    <!--************ HERO ***************************************************************************************-->
    <!--*********************************************************************************************************-->
    <header class="hero">
         <div class="hero-wrapper">
        <!--============ Secondary Navigation ===============================================================-->
        <div class="secondary-navigation">
            <div class="container">
                <ul class="left">
                    <li>
                            <span>
                                <i class="fa fa-phone"></i> +1 123 456 789
                            </span>
                    </li>
                </ul>
                <!--end left-->
                <ul class="right">
{{--                    <li>--}}
{{--                        <a href="my-ads.html">--}}
{{--                            <i class="fa fa-heart"></i>My Ads--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    @guest
                    <li>
                        <a href="{{ route('login') }}">{{ __('Login') }}
                            <i class="fa fa-sign-in"></i>
                        </a>
                    </li>
                    <li>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}">{{ __('Register') }}
                            <i class="fa fa-pencil-square-o"></i>
                        </a>
                    </li>
                    @endif
                    @else
{{--                        <li class="main-navigation">--}}
{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                {{ Auth::user()->firstname }}--}}
{{--                            </a>--}}
                        <li>
                            <a href="{{ route('home') }}">Home
                                <i class="fa fa-profile"></i>
                            </a>


                        <li>
                        <li>
                            <a href="{{ route('user_profile') }}">Profile
                                <i class="fa fa-profile"></i>
                            </a>


                        <li>
                                <a class="fa fa-sign-out" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                  <strong>Log Out</strong>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        </li>

{{--                        </li>--}}
                    @endguest






                <!--end right-->
            </div>
            <!--end container-->
        </div>
    </div>
@yield('header')
<script src="{{URL::asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>-->
<script src="{{URL::asset('assets/js/selectize.min.js')}}"></script>
<script src="{{URL::asset('assets/js/masonry.pkgd.min.js')}}"></script>
<script src="{{URL::asset('assets/js/icheck.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{URL::asset('assets/js/custom.js')}}"></script>


@include('partials.alerts')
@yield('content')
</body>
</html>


