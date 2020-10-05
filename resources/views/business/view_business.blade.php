@extends('layouts.app')

@section('content')


    <div class="horizontal-main bg-dark-transparent clearfix">

        <div class="body-progress-container">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" id="myBar"></div>
        </div>
    </div>
    </div>

{{--    <!--Sliders Section-->--}}
{{--    <div>--}}
{{--        <div class="relative sptb-12 pattern2 bg-background">--}}
{{--            <div class="header-text1 mb-0">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">--}}
{{--                            <div class="text-center text-white ">--}}
{{--                                <h1 class="mb-2"><span class="font-weight-semibold">{{$business->subject_name}}</span></h1>--}}

{{--                                <ul class="social-icons mb-4 ml-auto">--}}
{{--                                    <li>--}}
{{--                                        <a class="social-icon" href=""><i class="fa fa-facebook"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a class="social-icon" href=""><i class="fa fa-twitter"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a class="social-icon" href=""><i class="fa fa-rss"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a class="social-icon" href=""><i class="fa fa-youtube"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a class="social-icon" href=""><i class="fa fa-linkedin"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a class="social-icon" href=""><i class="fa fa-google-plus"></i></a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <a class="btn btn-info mb-1 mt-1" href="#"><i class="fa fa-heart-o"></i> Add Wishlist</a>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!-- /header-text -->--}}
{{--            <div class="details-absolute">--}}
{{--                <div class="d-sm-flex container">--}}
{{--                    <div><a href="#" class="text-white d-inline-block mr-4 "><i class="icon icon-location-pin text-white mr-2"></i>Mp-214, New York, NY 10012, US-52014</a></div>--}}
{{--                    <div class="ml-auto"><a href="#" class="text-white d-inline-block mt-2 mt-sm-0 fs-18"><i class="icon icon-phone text-white mr-2 fs-14"></i>+154 256-635-654</a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!--/Sliders Section-->--}}



    <!--Add listing-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">

                    <!--Business Overview-->
                    <div class="card overflow-hidden">
                        <div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">featured</span></div>
                        <div class="card-body">
                            <div class="item-det mb-4">
                                <a href="#" class="text-dark"><h3>{{$business->subject_name}}</h3></a>
                                <div class=" d-flex">
                                    <ul class="d-flex mb-0">
                                        <li class="mr-5"><a href="#" class="icons"><i class="icon icon-briefcase text-muted mr-1"></i>{{ \App\Category::find($business->category_id)->name }}</a></li>
                                        <li class="mr-5"><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i>{{\App\City::find($business->city_id)->city_name}}, {{ \App\State::find($business->state_id)->name }}</a></li>
                                        <li class="mr-5"><a href="#" class="icons"><i class="icon icon-calendar text-muted mr-1"></i> {{ Carbon\Carbon::parse($business->created_at)->diffForHumans()}} </a></li>
{{--                                        <li class="mr-5"><a href="#" class="icons"><i class="icon icon-eye text-muted mr-1"></i> 765</a></li>--}}
                                    </ul>

                                    <div class="rating-stars d-flex">
                                        <div class="rating-stars-container mr-2">
                                            <div class="rating-star sm">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                        </div>{{ \App\Favorite::where('business_id',$business->id)->count() }}
                                    </div>
                                </div>
                            </div>
                            <div class="product-slider">
                                <div id="carousel" class="carousel slide" data-ride="carousel">
                                    <div class="arrow-ribbon bg-secondary">Open</div>
                                    <div class="carousel-inner">

                                        <div class="carousel-item active"><img src="{{URL::to('storage/businessImages/'.$business->photos->last()->file)}}" alt="img"> </div>
                                        @foreach($business->photos as $photo)
                                            <div class="carousel-item"><img src="{{ URL::to('storage/businessImages/'.$photo->file) }}" alt="img"> </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                    <div class="clearfix">
                                        <div id="thumbcarousel" class="carousel slide" data-interval="false">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div data-target="#carousel" data-slide-to="0" class="thumb">
                                                        <video controls>
                                                            <source src="{{URL::to('storage/businessVideos/'.$business->videos->last()->file)}}" type="video/mp4">
                                                            <source src="{{URL::to('storage/businessVideos/'.$business->videos->last()->file)}}" type="video/ogg">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                </div>
                                                <div class="carousel-item ">
                                                    @foreach($business->videos as $video)
                                                    <div data-target="#carousel" data-slide-to="0" class="thumb">
                                                        <video controls>
                                                            <source src="{{URL::to('storage/businessVideos/'.$video->file) }}" type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#thumbcarousel" role="button" data-slide="prev">
                                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                            </a>
                                            <a class="carousel-control-next" href="#thumbcarousel" role="button" data-slide="next">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Documents</button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <form>
                                            <div class="form-group">
                                                @foreach($business->docs as $doc)
                                                    <iframe src = "{{ URL::to('storage/businessDocs/'.$doc->file) }}" width='700' height='550' allowfullscreen  ></iframe>
                                                @endforeach
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Description</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-0">
                                <p>{{ $business->description }}</p>
                                <b>Company Service Description</b>
                                <p class="">{{ $business->company_service_description }}</p>
                            </div>
                            <h4 class="card-title mt-5 mb-3">Contact Info</h4>
                            <div class="item-user mt-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="font-weight-normal"><span><i class="fa fa-envelope mr-3 mb-2"></i></span><a href="#" class="text-body">{{ $business->email }}</a></h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="font-weight-normal"><span><i class="fa fa-phone mr-3  mb-2"></i></span><a href="#" class="text-secondary">{{ $business->phone }}</a></h6>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title mt-5 mb-4">More Business Info</h4>
                            <div class="table-responsive">
                                <table class="table mb-0 table-bordered-0">
                                    <tbody>
                                    <tr>
                                        <td class="font-weight-semibold px-0">Legale Status</td>
                                        <td class="px-0">{{ $business->legale_status }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-semibold px-0">Status</td>
                                        <td class="px-0">{{ $business->status }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-semibold px-0">Creation Year</td>
                                        <td class="px-0">{{ $business->creation_year }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-semibold px-0">Nuis</td>
                                        <td class="px-0">{{ $business->nuis }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-semibold px-0">Initial Capital</td>
                                        <td class="px-0">${{ $business->initial_capital }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-semibold px-0">Official Address</td>
                                        <td class="px-0">{{ $business->official_address }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-semibold px-0">Verified</td>
                                        <td class="px-0">{{ $business->verified }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="pt-4 pb-4 pl-5 pr-5 border-top border-top">
                            <div class="list-id">
                                <div class="row">
                                    <div class="col">
                                        <a class="mb-0">Business ID : #{{$business->id}}</a>
                                    </div>
                                    <div class="col col-auto">
                                        Posted By <a class="mb-0 font-weight-bold">{{ \App\User::find($business->user_id)->firstname }}</a> / {{ Carbon\Carbon::parse($business->created_at)->diffForHumans()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <div class="icons">
                                <a href="#" class="btn btn-info icons"><i class="icon icon-share mr-1"></i> Share Business</a>
                                <a href="#" class="btn btn-pink icons"><i class="icon icon-heart  mr-1"></i>Add to favorite</a>


                            </div>
                        </div>
                    </div>
                </div>

                <!--Right Side Content-->
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <h3 class="card-title">Posted By</h3>
                        </div>
                        <div class="card-body item-user">
                            <div class="profile-details">
                                <div class="profile-pic mb-0 mx-5">
                                    <img src="{{ \App\User::find($business->user_id)->avatar }}" class="brround w-150 h-150" alt="user">
                                </div>
                            </div>
                            <div class="text-center mt-2">
                                <a href="userprofile.html" class="text-dark text-center"><h4 class="mt-0 mb-0 font-weight-semibold">{{\App\User::find($business->user_id)->firstname}} {{\App\User::find($business->user_id)->lastname}}</h4></a>
                                <span class="text-muted">Member Since {{ Carbon\Carbon::parse(\App\User::find($business->user_id)->created_at)->diffForHumans()}} </span>
                                <div><small class="text-muted">Listing Id <b>{{ \App\User::find($business->user_id)->id }}</b></small></div>
                            </div>
                        </div>
                        <div class="profile-user-tabs">
                            <div class="tab-menu-heading border-0 p-0">
                                <div class="tabs-menu1">

                                </div>
                            </div>
                        </div>
                        <div class="tab-content border-0 bg-white">
                            <div class="tab-pane active" id="tab-contact">
                                <div class="card-body item-user">
                                    <h4 class="mb-4">Contact Info</h4>
                                    <div>
                                        <h6><span class="font-weight-semibold"><i class="fa fa-envelope mr-3 mb-2"></i></span><a href="#" class="text-body">{{ \App\User::find($business->user_id)->email }}</a></h6>
                                        <h6><span class="font-weight-semibold"><i class="fa fa-phone mr-3 mb-2"></i></span><a href="#" class="text-secondary">{{ \App\User::find($business->user_id)->phone }}</a></h6>
                                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal1" data-whatever="@fat">Send Message</button>

                                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <form method="post" action="{{ route('store_message',$business->id)}}" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="message" class="col-form-label">Message:</label>
                                                                <textarea name="message" class="form-control" id="message"></textarea>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-secondary">Send message</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Business location</h3>
                        </div>
                        <br>
                        <input id="pac-input" class="controls" class="form-control m-input" type="text" placeholder="Search Box">
                        <div class="container" id="locationMap" style="height:300px; width: 350px"></div>


                    </div>

                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <h3 class="card-title">Administrator</h3>
                        </div>
                        <div class="card-body item-user">
                            <div class="profile-details">
                            </div>
                            <div class="text-center mt-2 product-filter-desc">
                                <a href="userprofile.html" class="text-dark text-center"><h4 class="mt-0 mb-0 font-weight-semibold">{{$business->adm_first_name}} {{$business-> adm_last_name }}</h4></a>
                                <span class="text-muted">Percentage: {{$business->adm_percentage}}%</span>
                                <div class="item-user-icons mt-3">
                                    <a href="#" class="bg-light mt-0"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="bg-light"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="bg-light"><i class="fa fa-google"></i></a>
                                    <a href="#" class="bg-light"><i class="fa fa-dribbble"></i></a>
                                    <a href="#" class="bg-light"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                            <div class="card-body item-user">
                                <h4 class="mb-4">Contact Info</h4>
                                <div>
                                    <h6><span class="font-weight-semibold"><i class="fa fa-envelope mr-3 mb-2"></i></span><a href="#" class="text-body">{{$business->adm_email}}</a></h6>
                                    <h6><span class="font-weight-semibold"><i class="fa fa-phone mr-3 mb-2"></i></span><a href="#" class="text-secondary">{{$business->adm_phone}}</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>




            </div>
        </div>
    </section>



    <script>
        var marker1 = false;
        function initAutocomplete1()
        {
            var locationMap = new google.maps.Map(document.getElementById('locationMap'), {
                center: {lat:{{$business->latitude}}, lng:{{$business->longtitude}}},
                zoom: 13,
                mapTypeId: 'roadmap'
            });

            // Create the search box and link it to the UI element.
            var input = document.getElementById('pac-input');
            var searchBox = new google.maps.places.SearchBox(input);
            locationMap.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            //View marker.
            marker1 = new google.maps.Marker({
                position: {lat: {{$business->latitude}}, lng:{{$business->longtitude}}},
                map: locationMap,
                draggable: true //make it draggable
            });



            var markers1 = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }

                // Clear out the old markers.
                markers1.forEach(function(marker) {
                    marker1.setMap(null);
                });
                markers1 = [];

                // For each place, get the icon, name and location.
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function(place) {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    var icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };

                    // Create a marker for each place.
                    markers1.push(new google.maps.Marker({
                        map: locationMap,
                        icon: icon,
                        title: place.name,
                        position: place.geometry.location
                    }));

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                locationMap.fitBounds(bounds);
            });


            initAutocomplete();
            markerLocation();
        }

    </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQME12U4JLF1APtXuR45KJFrkZrqxlPH4&libraries=places&callback=initAutocomplete1"
            async defer></script>
@endsection
