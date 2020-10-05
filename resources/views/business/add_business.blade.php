@extends('layouts.app')

@section('content')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="{{asset('frontend/assets/images/banners/banner2.jpg')}}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">Add Business</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">My Dashboard</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Add Business</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->
    <!--User Dashboard-->
<section class="sptb">
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')
        <div class="col-xl-9 col-lg-12 col-md-12">
                    <div class="card mb-0 overflow-hidden">
                        <form method="post" action="{{ route('store_business')}}" enctype="multipart/form-data">
                            @csrf
                        <div class="card-header">
                            <h3 class="card-title">Add Business</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Subject Name</label>
                                        <input name="subject_name" type="text" class="form-control" id="subject_name" placeholder="Subject Name" required>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Category</label>
                                        <select class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" name="category_id" id="category_id" data-placeholder="Select" required>
                                            <option value="">Choose Category</option>
                                                @foreach($categories as $category)

                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>

                                                @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Initial Capital</label>
                                        <input name="initial_capital" type="text" class="form-control" id="initial_capital" placeholder="Initial Capital" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Legale Status</label>
                                        <input name="legale_status" type="text" class="form-control" id="legale_status" placeholder="Legale Status" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <input name="status" type="text" class="form-control" id="status" placeholder="Status" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Creation Year</label>
                                        <input name="creation_year" type="text" class="form-control" id="creation_year" placeholder="Creation Year" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nuis</label>
                                        <input name="nuis" type="text" class="form-control" id="nuis" placeholder="Nuis" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone</label>
                                        <input name="phone" type="text" class="form-control" id="phone" placeholder="phone" required>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input name="email" type="text" class="form-control" id="email" placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Company Service Description</label>
                                        <textarea name="company_service_description" id="company_service_description" class="form-control" rows="4" required></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">State</label>
                                        <select class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" name="state_id" id="state_id" onchange="getCities(this)" data-placeholder="Select State" required>
                                                <option value="">Choose State</option>
                                                @foreach($states as $state)

                                                    <option value="{{ $state->id }}">{{ $state->name }}</option>

                                                @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">City</label>
                                        <select class="form-control select2-show-search border-bottom-0 w-100 select2-show-search"name="city_id" id="city_id"  data-placeholder="Select City" required>
                                            <option value="">Choose City</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Official Address</label>
                                        <input name="official_address" type="text" class="form-control" id="official_address" placeholder="Official Address" required>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Verified</label>
                                        <input name="verified" type="text" class="form-control" id="verified" placeholder="Verified" required>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <label class="form-label">Upload Multiple Photos</label>
                                    <div class="input-group control-group increment1" >
                                        <input type="file" name="photo_id[]" class="form-control" required>
                                        <div class="input-group-btn">
                                            <button class="btn btn-success1" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                        </div>
                                    </div>
                                    <div class="clone hide">
                                        <div class="control-group1 input-group" style="margin-top:10px">
                                            <input type="file" name="photo_id[]" class="form-control">
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger1" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        </div>
                                    </div>
                               </div>

                                <div class="col-sm-6 col-md-6">
                                    <label class="form-label">Upload Multiple Videos</label>
                                    <div class="input-group control-group increment2" >
                                        <input type="file" name="video_id[]" class="form-control" required>
                                        <div class="input-group-btn">
                                            <button class="btn btn-success2" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                        </div>
                                    </div>
                                    <div class="clone hide">
                                        <div class="control-group2 input-group" style="margin-top:10px">
                                            <input type="file" name="video_id[]" class="form-control">
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger2" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-6" style="margin-top:20px">
                                    <label class="form-label">Upload Multiple Documents</label>
                                    <div class="input-group control-group increment3" >
                                        <input type="file" name="doc_id[]" class="form-control" required>
                                        <div class="input-group-btn">
                                            <button class="btn btn-success3" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                        </div>
                                    </div>
                                    <div class="clone hide">
                                        <div class="control-group3 input-group" style="margin-top:10px">
                                            <input type="file" name="doc_id[]" class="form-control">
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger3" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-6" style="margin-top:70px">
                                    <div class="form-group">
                                        <label class="form-label">Administrator First Name</label>
                                        <input name="adm_first_name" type="text" class="form-control" id="adm_first_name" placeholder="Administrator First Name" required>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6" style="margin-top:10px">
                                    <div class="form-group">
                                        <label class="form-label">Administrator Last Name</label>
                                        <input name="adm_last_name" type="text" class="form-control" id="adm_last_name" placeholder="Administrator Last Name" required>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6" style="margin-top:10px">
                                    <div class="form-group">
                                        <label class="form-label">Administrator Phone</label>
                                        <input name="adm_phone" type="text" class="form-control" id="adm_phone" placeholder="Administrator Phone" required>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Administrator Email</label>
                                        <input name="adm_email" type="text" class="form-control" id="adm_email" placeholder="Administrator Email" required>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Administrator Percentage</label>
                                        <input name="adm_percentage" type="text" class="form-control" id="adm_percentage" placeholder="Administrator Percentage" required>
                                    </div>
                                </div>

                                <div class="row field-row">
                                    <div class="col-xs-12 col-sm-6">
                                        <input hidden class="form-control" type="hidden" name="latitude" id="latitude" readonly>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <input hidden class="form-control" type="hidden" name="longtitude" id="longtitude" readonly >
                                    </div>
                                </div><!-- /.field-row -->
                                <br>
                                <input id="pac-input" class="controls" class="form-control m-input" type="text" placeholder="Search Box">
                                <div class="container" id="locationMap" style="height:300px; width: 500px"></div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-secondary">Add Business</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/User Dashboard-->






    <script type="text/javascript">
        function getCities(obj){

            var state_id = obj.value;
            if (state_id) {

                $.ajax({
                    url: "{{ url('/get/city/') }}/"+state_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                        $('#city_id').children().remove();
                        $('#city_id').append($('<option>', {
                            value: '',
                            text : 'Choose'
                        }));

                        $.each(data, function(key, value){

                            $('#city_id').append($('<option>', {
                                value: value.id,
                                text : value.city_name
                            }));

                        });
                    },
                });

            }else{
                $('#city_id').children().remove();
                $('#city_id').append($('<option>', {
                    value: '',
                    text : 'Choose'
                }));
                // alert('danger');
            }
        }



    </script>



{{--    <script type="text/javascript">--}}
{{--        $(document).ready(function() {--}}
{{--            $(".mybtn-success").click(function(){--}}
{{--                var html = $(".clone1").html();--}}
{{--                $(".increment1").after(html);--}}
{{--            });--}}
{{--            $("body").on("click",".mybtn-danger",function(){--}}
{{--                $(this).parents(".control-group1").remove();--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}


    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-success1").click(function(){
                var html = $(".clone").html();
                $(".increment1").after(html);
            });
            $("body").on("click",".btn-danger1",function(){
                $(this).parents(".control-group1").remove();
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-success2").click(function(){
                var html = $(".clone").html();
                $(".increment2").after(html);
            });
            $("body").on("click",".btn-danger2",function(){
                $(this).parents(".control-group2").remove();
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-success3").click(function(){
                var html = $(".clone").html();
                $(".increment3").after(html);
            });
            $("body").on("click",".btn-danger3",function(){
                $(this).parents(".control-group3").remove();
            });
        });
    </script>




    <script>
        var marker1 = false;
        function initAutocomplete1()
        {
            var locationMap = new google.maps.Map(document.getElementById('locationMap'), {
                center: {lat: 41.3275, lng: 19.8187},
                zoom: 13,
                mapTypeId: 'roadmap'
            });

            // Create the search box and link it to the UI element.
            var input = document.getElementById('pac-input');
            var searchBox = new google.maps.places.SearchBox(input);
            locationMap.controls[google.maps.ControlPosition.TOP_LEFT].push(input);



            google.maps.event.addListener(locationMap, 'click', function(event) {
                //Get the location that the user clicked.
                var clickedLocation1= event.latLng;
                //If the marker hasn't been added.
                if(marker1 === false){
                    //Create the marker.
                    marker1 = new google.maps.Marker({
                        position: clickedLocation1,
                        map: locationMap,
                        draggable: true //make it draggable
                    });
                    //Listen for drag events!
                    google.maps.event.addListener(marker1, 'dragend', function(event){
                        markerLocation1();
                    });
                } else{
                    //Marker has already been added, so just change its location.
                    marker1.setPosition(clickedLocation1);
                }
                //Get the marker's location.
                markerLocation1();
            });

            // Bias the SearchBox results towards current map's viewport.
            locationMap.addListener('bounds_changed', function() {
                searchBox.setBounds(locationMap.getBounds());
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




        function markerLocation1(){
            //Get location.
            var currentLocation1 = marker1.getPosition();
            //Add lat and lng values to a field that we can save.
            document.getElementById('latitude').value = currentLocation1.lat(); //latitude
            document.getElementById('longtitude').value = currentLocation1.lng(); //longitude
        }


        var marker = false;
        function initAutocomplete() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 41.3275, lng: 19.8187},
                zoom: 13,
                mapTypeId: 'roadmap'
            });

            // Create the search box and link it to the UI element.
            var input = document.getElementById('pac-input');
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);



            google.maps.event.addListener(map, 'click', function(event) {
                //Get the location that the user clicked.
                var clickedLocation = event.latLng;
                //If the marker hasn't been added.
                if(marker === false){
                    //Create the marker.
                    marker = new google.maps.Marker({
                        position: clickedLocation,
                        map: map,
                        draggable: true //make it draggable
                    });
                    //Listen for drag events!
                    google.maps.event.addListener(marker, 'dragend', function(event){
                        markerLocation();
                    });
                } else{
                    //Marker has already been added, so just change its location.
                    marker.setPosition(clickedLocation);
                }
                //Get the marker's location.
                markerLocation();
            });

            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', function() {
                searchBox.setBounds(map.getBounds());
            });

            var markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }

                // Clear out the old markers.
                markers.forEach(function(marker) {
                    marker.setMap(null);
                });
                markers = [];

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
                    markers.push(new google.maps.Marker({
                        map: map,
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
                map.fitBounds(bounds);
            });
        }

        function markerLocation(){
            //Get location.
            var currentLocation = marker.getPosition();
            //Add lat and lng values to a field that we can save.
            document.getElementById('lat').value = currentLocation.lat(); //latitude
            document.getElementById('lng').value = currentLocation.lng(); //longitude
        }


    </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQME12U4JLF1APtXuR45KJFrkZrqxlPH4&libraries=places&callback=initAutocomplete1"
            async defer></script>
@endsection
