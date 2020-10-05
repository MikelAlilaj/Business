
<!DOCTYPE html>
<html lang="en">
<head>

    <title> Admin </title>

    <!-- vendor css -->
    <link href="{{asset('backend/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">

    <!-- Tags Input CDN CSS -->
    <link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>
    <!-- chart -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- Datatable css -->
    <link href="{{asset('backend/lib/highlightjs/github.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/select2/css/select2.min.css')}}" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/starlight.css')}}">
    <link href="{{asset('backend//lib/summernote/summernote-bs4.css')}}" rel="stylesheet">
</head>

<body>

@guest


@else
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i>Business</a></div>
    <div class="sl-sideleft">


        {{--        @if(Auth::user()->role == 'admin')--}}

        <div class="sl-sideleft-menu">
            {{--                <a href="{{route('home')}}" class="sl-menu-link @if(\Route::current()->getName()== 'home') active @endif">--}}
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
            </a><!-- sl-menu-link -->



            <a href="#" class="sl-menu-link  @if(\Route::current()->getName()== 'all_categories' )  active show-sub  @endif ">
                <div class="sl-menu-item">
                    <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                    <span class="menu-item-label">Category</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item "><a href="{{ route('all_categories')}}" class=" nav-link @if(\Route::current()->getName()== 'all_categories')  active @endif">All Categories</a></li>

                {{--                    <li class="nav-item"><a href="{{ route('all.business.category')}}" class="nav-link @if(\Route::current()->getName()== 'all.business.category')  active @endif ">All Business Category</a></li>--}}

                {{--                    <li class="nav-item"><a href="{{ route('all.product.category')}}" class="nav-link @if(\Route::current()->getName()== 'all.product.category')  active @endif">All Products Category </a></li>--}}

            </ul>









                            <a href="#" class="sl-menu-link @if(\Route::current()->getName()== 'all_approved' || \Route::current()->getName()== 'all_pending'|| \Route::current()->getName()== 'all_featured')  active show-sub  @endif ">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
                <span class="menu-item-label">Business</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">



                                    <li class="nav-item"><a href="{{ route('all_approved')}}" class="nav-link @if(\Route::current()->getName()== 'all_approved')  active @endif">Approved Business</a></li>

                                    <li class="nav-item"><a href="{{ route('all_featured')}}" class="nav-link @if(\Route::current()->getName()== 'all_featured')  active @endif">Featured Business</a></li>

                                    <li class="nav-item"><a href="{{ route('all_pending')}}" class="nav-link @if(\Route::current()->getName()== 'all_pending')  active @endif">Pending Business </a></li>

            </ul>



{{--                            @endif--}}

            {{--                <a href="#" class="sl-menu-link @if(\Route::current()->getName()== 'all.products')  active show-sub  @endif">--}}
            {{--                    <div class="sl-menu-item">--}}
            {{--                        <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>--}}
            {{--                        <span class="menu-item-label">Products</span>--}}
            {{--                        <i class="menu-item-arrow fa fa-angle-down"></i>--}}
            {{--                    </div><!-- menu-item -->--}}
            {{--                </a><!-- sl-menu-link -->--}}
            {{--                <ul class="sl-menu-sub nav flex-column">--}}
            {{--                    <li class="nav-item "><a href="{{ route('all.products')}}" class=" nav-link @if(\Route::current()->getName()== 'all.products')  active @endif">All Products</a></li>--}}
            {{--                </ul>--}}




            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                    <span class="menu-item-label">Others</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                                <li class="nav-item"><a href="{{ route('all_subscribers')}}" class="nav-link">Subscribers</a></li>
                {{--                <li class="nav-item"><a href="" class="nav-link">SEO Setting </a></li>--}}

            </ul>







        </div><!-- sl-sideleft-menu -->

        <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        </div><!-- sl-header-left -->
        <div class="sl-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name">{{Auth::user()->firstname}}</span>
                        <img src="{{asset('backend/img/1.png')}}" class="wd-32 rounded-circle" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            {{--                            <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>--}}
                            {{--                            <li><a href="{{route('password.change')}}"><i class="icon ion-ios-gear-outline"></i> Change Password</a></li>--}}

                            {{--                            <li><a href="{{ route('user.logout') }}"><i class="icon ion-power"></i> Sign Out</a></li>--}}
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>
            <div class="navicon-right">
                <a id="btnRightMenu" href="" class="pos-relative">
                    <i class="icon ion-ios-bell-outline"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger"></span>
                    <!-- end: if statement -->
                </a>
            </div><!-- navicon-right -->
        </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->




@endguest



<script src="{{asset('backend/lib/jquery/jquery.js')}}"></script>
<script src="{{asset('backend/lib/popper.js/popper.js')}}"></script>
<script src="{{asset('backend/lib/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('backend/lib/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>


<script src="{{asset('backend/lib/highlightjs/highlight.pack.js')}}"></script>
<script src="{{asset('backend/lib/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('backend/lib/datatables-responsive/dataTables.responsive.js')}}"></script>
<script src="{{asset('backend/lib/select2/js/select2.min.js')}}"></script>

<script>
    $(function(){
        'use strict';

        $('#datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        $('#datatable2').DataTable({
            bLengthChange: false,
            searching: false,
            responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
</script>




<script src="{{asset('backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('backend/lib/d3/d3.js')}}"></script>
<script src="{{asset('backend/lib/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{asset('backend/lib/chart.js/Chart.js')}}"></script>
<script src="{{asset('backend/lib/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('backend/lib/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('backend/lib/Flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('backend/lib/flot-spline/jquery.flot.spline.js')}}"></script>


<script src="{{asset('backend/lib/medium-editor/medium-editor.js')}}"></script>
<script src="{{asset('backend/lib/summernote/summernote-bs4.min.js')}}"></script>


<script>
    $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
            height: 150,
            tooltip: false
        })
    });
</script>

<script>
    $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote1').summernote({
            height: 150,
            tooltip: false
        })
    });
</script>

<script src="{{asset('backend/js/starlight.js')}}"></script>
<script src="{{asset('backend/js/ResizeSensor.js')}}"></script>
<script src="{{asset('backend/js/dashboard.js')}}"></script>

@include('partials.alerts')
@yield('content')
</body>



</html>
