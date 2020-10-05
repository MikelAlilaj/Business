@extends('admin.admin_layouts')
@section('content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html"></a>
            <span class="breadcrumb-item active">Business Section</span>
        </nav>

        <div class="sl-pagebody">


            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Business Details Page  </h6>

                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Subject Name: <span class="tx-danger">*</span></label><br>
                                <strong>{{ $business->subject_name }}</strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Category: <span class="tx-danger">*</span></label><br>
                                <strong>{{\App\Category::find($business->category_id)->name}}</strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Initial Capital: <span class="tx-danger">*</span></label><br>
                                <strong>{{ $business->initial_capital}}</strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Legale Status: <span class="tx-danger">*</span></label><br>
                                <strong>{{ $business->legale_status}}</strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Status: <span class="tx-danger">*</span></label><br>
                                <strong>{{ $business->status}}</strong>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Creation Year: <span class="tx-danger">*</span></label><br>
                                <strong>{{ $business->creation_year}}</strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Business NUIS: <span class="tx-danger">*</span></label><br>
                                <strong>{{ $business->nuis}}</strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Phone: <span class="tx-danger">*</span></label><br>
                                <strong>{{ $business->phone}}</strong>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Email: <span class="tx-danger">*</span></label><br>
                                <strong>{{ $business->email}}</strong>
                            </div>
                        </div><!-- col-4 -->



                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">State: <span class="tx-danger">*</span></label><br>
                                <strong>{{\App\State::find($business->state_id)->name}}</strong>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">City: <span class="tx-danger">*</span></label><br>
                                <strong>{{\App\City::find($business->city_id)->city_name}}</strong>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Official Address: <span class="tx-danger">*</span></label><br>
                                <strong>{{ $business->official_address}}</strong>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Description: <span class="tx-danger">*</span></label><br>
                                <strong>{{ $business->description}}</strong>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Company Service Description: <span class="tx-danger">*</span></label><br>
                                <strong>{{ $business->company_service_description}}</strong>
                            </div>
                        </div><!-- col-4 -->


                        <div class="col-lg-4">

                            <div class="left" id="locationMap" style="height:250px; width: 350px"></div>

                        </div><!-- col-4 -->




                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Verified: <span class="tx-danger">*</span></label><br>
                                <strong>{{ $business->verified}}</strong>
                            </div>
                        </div><!-- col-4 -->



                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Administrator First Name: <span class="tx-danger">*</span></label><br>
                                <strong>{{$business->adm_first_name}}</strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Administrator Last Name: <span class="tx-danger">*</span></label><br>
                                <strong>{{$business->adm_last_name}}</strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Administrator Phone: <span class="tx-danger">*</span></label><br>
                                <strong>{{$business->adm_phone}}</strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Administrator Email: <span class="tx-danger">*</span></label><br>
                                <strong>{{$business->adm_email}}</strong>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Administrator Percentage: <span class="tx-danger">*</span></label><br>
                                <strong>{{$business->adm_percentage}}</strong>
                            </div>
                        </div><!-- col-4 -->


                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Status: <span class="tx-danger">*</span></label><br>
                                <strong>
                                    @if($business->web_status == 'approved')
                                        <span class="badge badge-warning">Approved</span>
                                    @endif
                                </strong>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            @foreach($business->photos as $photo)

                                <img src="{{ URL::to('storage/businessImages/'.$photo->file) }}" style="width: 100px; height: 100px;">

                            @endforeach
                        </div> <!-- col-4 -->

                        <div class="col-lg-4">
                            @foreach($business->videos as $video)


                                <div class="control-group1 input-group" style="margin-top:20px" >

                                    <iframe src="{{ URL::to('storage/businessVideos/'.$video->file) }}" width="350" height="205" frameborder="0" allowfullscreen></iframe>

                                </div>

                            @endforeach
                        </div> <!-- col-4 -->



                        <div class="col-lg-4">
                            @foreach($business->docs as $doc)

                                <iframe src = "{{ URL::to('storage/businessDocs/'.$doc->file) }}" width='950' height='250' allowfullscreen  ></iframe>

                            @endforeach
                        </div> <!-- col-4 -->
                    </div>

                </div><!-- card -->
                <br>

                @if($business->web_status == 'featured')

                    <a href="{{route('approve',$business->id) }}" class="btn btn-danger">Remove from Featured listing</a>
                @endif


            </div><!-- row -->


        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->


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
