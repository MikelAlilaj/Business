@extends('layouts.app')

@section('content')

    <section class="content">
        <section class="block">
            <div class="container">

                <form class="form form-submit">
                    <section>
                        <h2>Business Information</h2>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name" class="col-form-label required">Subject Name</label>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Name" required>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email" class="col-form-label required">Category</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone" class="col-form-label required">Initial Capital</label>
                                    <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone" required>
                                    <span class="input-group-addon">$</span>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name" class="col-form-label required">Legale Status</label>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Name" required>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email" class="col-form-label required">Status</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone" class="col-form-label required">Creation Year</label>
                                    <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone" required>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name" class="col-form-label required">Nuis</label>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Name" required>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email" class="col-form-label required">Phone</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone" class="col-form-label required">Email</label>
                                    <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone" required>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                        </div>
                    </section>
                    <!--end basic information-->
{{--                    <section>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-4">--}}
{{--                                <h2>Category</h2>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="submit-category" class="col-form-label">Category</label>--}}
{{--                                    <select class="change-tab" data-change-tab-target="category-tabs" name="submit_category" id="submit-category" data-placeholder="Select Category">--}}
{{--                                        <option value="">Select Category</option>--}}
{{--                                        <option value="computers">Computers</option>--}}
{{--                                        <option value="real_estate">Real Estate</option>--}}
{{--                                        <option value="cars_motorcycles">Cars & Motorcycles</option>--}}
{{--                                        <option value="furniture">Furniture</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end form-group-->--}}
{{--                            </div>--}}
{{--                            <!--end col-md-4-->--}}
{{--                            --}}
{{--                            <!--end col-md-8-->--}}
{{--                        </div>--}}
{{--                        <!--end row-->--}}
{{--                    </section>--}}
                    <section>
                        <div class="form-group">
                            <label for="details" class="col-form-label">Description</label>
                            <textarea name="details" id="details" class="form-control" rows="4"></textarea>
                        </div>
                        <!--end form-group-->

                        <div class="form-group">
                            <label for="details" class="col-form-label">Company Service Description</label>
                            <textarea name="details" id="details" class="form-control" rows="4"></textarea>
                        </div>
                        <!--end form-group-->
                    </section>

{{--                    <section>--}}
{{--                        <h2>Location</h2>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-4">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="city" class="col-form-label required">City</label>--}}
{{--                                    <select name="city" id="city" data-placeholder="Select City" required>--}}
{{--                                        <option value="">City</option>--}}
{{--                                        <option value="1">London</option>--}}
{{--                                        <option value="2">New York</option>--}}
{{--                                        <option value="3">Paris</option>--}}
{{--                                        <option value="4">Moscow</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end form-group-->--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="district" class="col-form-label required">District</label>--}}
{{--                                    <select name="district" id="district" data-placeholder="Select District" required>--}}
{{--                                        <option value="">District</option>--}}
{{--                                        <option value="1">Manhattan</option>--}}
{{--                                        <option value="2">Brooklyn</option>--}}
{{--                                        <option value="3">Queens</option>--}}
{{--                                        <option value="4">The Bronx</option>--}}
{{--                                        <option value="5">Staten Island</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <!--end form-group-->--}}
{{--                            </div>--}}
{{--                            <!--end col-md-6-->--}}
{{--                            <div class="col-md-4">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="street" class="col-form-label">Street</label>--}}
{{--                                    <input name="street" type="text" class="form-control" id="street">--}}
{{--                                </div>--}}
{{--                                <!--end form-group-->--}}
{{--                            </div>--}}
{{--                            <!--end col-md-6-->--}}
{{--                        </div>--}}
{{--                        <!--end row-->--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="input-location" class="col-form-label">Exact Location</label>--}}
{{--                            <input name="location" type="text" class="form-control" id="input-location" placeholder="Enter Location">--}}
{{--                            <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>--}}
{{--                        </div>--}}
{{--                        <!--end form-group-->--}}
{{--                        <label>Map</label>--}}
{{--                        <div class="map height-400px" id="map-submit"></div>--}}
{{--                        <input name="latitude" type="text" class="form-control" id="latitude" hidden>--}}
{{--                        <input name="longitude" type="text" class="form-control" id="longitude" hidden>--}}
{{--                    </section>--}}
        <section>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="state_id" class="col-form-label">State</label>
                                <select class="change-tab" data-change-tab-target="category-tabs" name="state_id" id="state_id" data-placeholder="Select State">
                                    @foreach($state as $br)

                                        <option value="{{ $br->id }}">{{ $br->name }}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="city_id" class="col-form-label">City</label>
                                <select class="change-tab" data-change-tab-target="category-tabs" name="city_id" id="city_id" data-placeholder="Select City">

                                </select>
                            </div>
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone" class="col-form-label required">Official Address</label>
                                <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone" required>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone" class="col-form-label required">Verified</label>
                                <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone" required>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-4-->
                    </div>
        </section>

                    <section>
                        <h2>Gallery</h2>
                        <div class="file-upload-previews"></div>
                        <div class="file-upload">
                            <input type="file" name="files[]" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="10" accept="gif|jpg|png">
                            <span><i class="fa fa-plus-circle"></i>Click or drag images here</span>
                        </div>
                    </section>

                    <section>
                        <h2>Additional Information</h2>
                        <h3>Opening Hours<span class="note">(optional)</span></h3>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="accordion-heading-1">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-1" aria-expanded="false" aria-controls="accordion-collapse-1">
                                            <i class="fa fa-clock-o"></i>Add opening hours
                                        </a>
                                    </h4>
                                </div>
                                <!--end panel-heading-->
                                <div id="accordion-collapse-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-1">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 horizontal-input-title">
                                                <strong>Monday</strong>
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="open_hours[]" placeholder="Open">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="close_hours[]" placeholder="Close">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 horizontal-input-title">
                                                <strong>Tuesday</strong>
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="open_hours[]" placeholder="Open">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="close_hours[]" placeholder="Close">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 horizontal-input-title">
                                                <strong>Wednesday</strong>
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="open_hours[]" placeholder="Open">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="close_hours[]" placeholder="Close">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 horizontal-input-title">
                                                <strong>Thursday</strong>
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="open_hours[]" placeholder="Open">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="close_hours[]" placeholder="Close">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 horizontal-input-title">
                                                <strong>Friday</strong>
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="open_hours[]" placeholder="Open">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="close_hours[]" placeholder="Close">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 horizontal-input-title">
                                                <strong>Saturday</strong>
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="open_hours[]" placeholder="Open">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="close_hours[]" placeholder="Close">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 horizontal-input-title">
                                                <strong>Sunday</strong>
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="open_hours[]" placeholder="Open">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="close_hours[]" placeholder="Close">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                                <!--end panel-collapse-->
                            </div>
                            <!--end panel-->
                        </div>
                        <!--end panel-group-->
                    </section>

                    <section class="clearfix">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary large icon float-right">Preview<i class="fa fa-chevron-right"></i></button>
                        </div>
                    </section>
                </form>
                <!--end form-submit-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
    </section>
    <!--end content-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('select[name="state_id"]').on('change',function(){
                var state_id = $(this).val();
                if (state_id) {

                    $.ajax({
                        url: "{{ url('/get/city/') }}/"+state_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            var d =$('select[name="city_id"]').empty();
                            $.each(data, function(key, value){

                                $('select[name="city_id"]').append('<option value="'+ value.id + '">' + value.city_name + '</option>');

                            });
                        },
                    });

                }else{
                    alert('danger');
                }

            });
        });

    </script>







@endsection
