<!doctype html>
<html lang="en" dir="ltr">

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
                                        <a class="dropdown-item" href="{{ route('all_messages') }}">
                                            <i class="dropdown-icon icon icon-speech"></i> Inbox
                                        </a>
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
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
            "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
        ];
    </script>
    <script>
        var receiver_id = '';
        var my_id = "{{ Auth::id() }}";
        $(document).ready(function () {
            // ajax setup form csrf token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('85a778d355b6659bb2ef', {
                cluster: 'eu',
            });

            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function(data) {
                // alert(JSON.stringify(data));

                if (my_id == data.from) {
                    $('#' + data.to).click();
                } else if (my_id == data.to) {
                    if (receiver_id == data.from) {
                        // if receiver is selected, reload the selected user ...
                        $('#' + data.from).click();
                    } else {
                        // if receiver is not seleted, add notification for that user
                        var pending = parseInt($('#' + data.from).find('.pending').html());

                        // if (pending) {
                        //     $('#' + data.from).find('.pending').html(pending + 1);
                        // } else {
                        //     $('#' + data.from).append('<span class="pending">1</span>');
                        // }
                    }
                }
            });

            $('.user').click(function () {
                $('.user').removeClass('active');
                $(this).addClass('active');
                $(this).find('.pending').remove();

                receiver_id = $(this).attr('id');
                $.ajax({
                    type: "get",
                    url: "message/" + receiver_id, // need to create this route
                    data: "",
                    cache: false,
                    success: function (data) {
                        $('#messages').html(data);
                        scrollToBottomFunc();
                    }
                });
            });

            $(document).on('keyup', '.input-text input', function (e) {
                var message = $(this).val();

                // check if enter key is pressed and message is not null also receiver is selected
                if (e.keyCode == 13 && message != '' && receiver_id != '') {
                    var d = new Date();
                    //03 Oct 20, 10:45 pm
                    var ampm = d.getHours() >= 12 ? 'pm' : 'am';
                    var currentHours = ("0" + d.getHours()).slice(-2);
                    var currentDate = ("0" + d.getDate()).slice(-2);
                    var strDate = currentDate + " " + monthNames[d.getMonth()] +" "+ d.getFullYear().toString().slice(-2) + ", " + (currentHours) + ":" +d.getMinutes()+ " "+ampm ;
                    $("#messages ul").append('<li class="message clearfix"><div class="sent"><p>'+$("#sendMessage").val()+'</p><p class="date">'+strDate+'</p></div></li>');

                    $(this).val(''); // while pressed enter text box will be empty

                    var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                    $.ajax({
                        type: "post",
                        url: "message", // need to create this post route
                        data: datastr,
                        cache: false,
                        success: function (data) {

                        },
                        error: function (jqXHR, status, err) {
                        },
                        complete: function () {
                            scrollToBottomFunc();
                        }
                    })
                }
            });
        });

        // make a function to scroll down auto
        function scrollToBottomFunc() {
            $('.message-wrapper').animate({
                scrollTop: $('.message-wrapper').get(0).scrollHeight
            }, 50);
        }
        // function fetchdata(){
        //     receiver_id = $('.active').attr('id');
        //     $.ajax({
        //         url: '/business/public/message_ajax/'+receiver_id,
        //         type: 'get',
        //         success: function(data){
        //             // Perform operation on return value
        //             console.log(data);
        //             if (data.length > 0 ){
        //                 for (var i = 0; i < data.length; i++){
        //                     var mesazhi = data[i];
        //                     var d = new Date();
        //                     //03 Oct 20, 10:45 pm
        //                     var ampm = d.getHours() >= 12 ? 'pm' : 'am';
        //                     var currentHours = ("0" + d.getHours()).slice(-2);
        //                     var currentDate = ("0" + d.getDate()).slice(-2);
        //                     var strDate = currentDate + " " + monthNames[d.getMonth()] +" "+ d.getFullYear().toString().slice(-2) + ", " + (currentHours) + ":" +d.getMinutes()+ " "+ampm ;
        //                     $("#messages ul").append('<li class="message clearfix"><div class="received"><p>'+mesazhi.message+'</p><p class="date">'+strDate+'</p></div></li>');
        //                     scrollToBottomFunc();
        //                 }
        //             }
        //         },
        //         complete:function(data){
        //             setTimeout(fetchdata,1000);
        //         }
        //     });
        // }
        //script to get new messages
        $(document).ready(function () {
            setTimeout(fetchdata,1000);
        });
    </script>
    <script>

    </script>












</body>

</html>
