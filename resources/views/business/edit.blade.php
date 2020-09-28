@extends('layouts.app')

@section('content')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="{{asset('frontend/assets/images/banners/banner2.jpg')}}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">Edit Business</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">My Dashboard</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Edit Business</li>
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
                        <form method="post" action="{{ route('update_business',$business->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <h3 class="card-title">Add Business</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Subject Name</label>
                                            <input name="subject_name" type="text" class="form-control" value="{{ $business->subject_name }}" id="subject_name" placeholder="Subject Name"  required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Category</label>
                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" value="{{\App\Category::find($business->category_id)->name}}"  name="category_id" id="category_id" data-placeholder="Select" required>

                                                @foreach($categories as $category)

                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>

                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Initial Capital</label>
                                            <input name="initial_capital" type="text" class="form-control" value="{{ $business->initial_capital}}" id="initial_capital" placeholder="Initial Capital" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Legale Status</label>
                                            <input name="legale_status" type="text" class="form-control" value="{{ $business->legale_status}}" id="legale_status" placeholder="Legale Status" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Status</label>
                                            <input name="status" type="text" class="form-control" value="{{ $business->status}}" id="status" placeholder="Status" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Creation Year</label>
                                            <input name="creation_year" type="text" class="form-control" value="{{ $business->creation_year}}" id="creation_year" placeholder="Creation Year" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Nuis</label>
                                            <input name="nuis" type="text" class="form-control" value="{{ $business->nuis}}" id="nuis" placeholder="Nuis" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone</label>
                                            <input name="phone" type="text" class="form-control" value="{{ $business->phone}}" id="phone" placeholder="phone" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input name="email" type="text" class="form-control" value="{{ $business->email}}" id="email" placeholder="Email" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Description</label>
                                            <textarea name="description"  id="description" class="form-control"  rows="4" required>{{ $business->description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Company Service Description</label>
                                            <textarea name="company_service_description" id="company_service_description" class="form-control" rows="4" required>{{ $business->company_service_description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">State</label>
                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" value="{{\App\State::find($business->state_id)->name}}" name="state_id" id="state_id" onchange="getCities(this)" data-placeholder="Select State" required>

                                                @foreach($states as $state)

                                                    <option value="{{ $state->id }}">{{ $state->name }}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">City</label>
                                            <select class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" value="{{\App\City::find($business->city_id)->city_name}}" name="city_id" id="city_id"  data-placeholder="Select City" required>
                                                <option value="{{$business->city_id}}">{{\App\City::find($business->city_id)->city_name}}</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Official Address</label>
                                            <input name="official_address" type="text" class="form-control" value="{{ $business->official_address}}" id="official_address" placeholder="Official Address" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Verified</label>
                                            <input name="verified" type="text" class="form-control" value="{{ $business->verified}}" id="verified" placeholder="Verified" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <label class="form-label">Upload Multiple Photos</label>
                                        <div class="input-group control-group increment1" >
                                            <input type="file" name="photo_id[]" class="form-control" >
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
                                            <input type="file" name="video_id[]" class="form-control" >
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
                                            <input type="file" name="doc_id[]" class="form-control" >
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
                                            <input name="adm_first_name" type="text" class="form-control" value="{{$business->adm_first_name}}" id="adm_first_name" placeholder="Administrator First Name" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6" style="margin-top:10px">
                                        <div class="form-group">
                                            <label class="form-label">Administrator Last Name</label>
                                            <input name="adm_last_name" type="text" class="form-control" value="{{$business->adm_last_name}}"  id="adm_last_name" placeholder="Administrator Last Name" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6" style="margin-top:10px">
                                        <div class="form-group">
                                            <label class="form-label">Administrator Phone</label>
                                            <input name="adm_phone" type="text" class="form-control" id="adm_phone" value="{{$business->adm_phone}}" placeholder="Administrator Phone" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Administrator Email</label>
                                            <input name="adm_email" type="text" class="form-control" id="adm_email" value="{{$business->adm_email}}"  placeholder="Administrator Email" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Administrator Percentage</label>
                                            <input name="adm_percentage" type="text" class="form-control" id="adm_percentage" value="{{$business->adm_percentage}}"  placeholder="Administrator Percentage" required>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-secondary">Update Business</button>
                            </div>
                        </form>
                    </div>
                    @foreach($business->videos as $video)
                        @if($video->file)
                            <div class="clone hide">
                                <div class="control-group1 input-group" style="margin-top:20px" >

                                    <iframe src="{{ URL::to('storage/businessVideos/'.$video->file) }}" width="400" height="205" frameborder="0" allowfullscreen></iframe>
                                    <form  action="{{ route('delete_video',$video->id)}}" method="post" >
                                        @csrf
                                        @method('DELETE')

                                        <div class="input-group-btn">
                                            <button class="btn btn-danger3" type="submit" type="button"><i class="glyphicon glyphicon-remove"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @endforeach

                    @foreach($business->docs as $doc)
                        @if($doc->file)
                            <div class="clone hide">
                                <div class="control-group1 input-group" style="margin-top:20px" >

                                    <iframe src = "{{ URL::to('storage/businessDocs/'.$doc->file) }}" width='700' height='550' allowfullscreen webkitallowfullscreen></iframe>
                                    <form  action="{{ route('delete_doc',$doc->id)}}" method="post" >
                                        @csrf
                                        @method('DELETE')

                                        <div class="input-group-btn">
                                            <button class="btn btn-danger3" type="submit" type="button"><i class="glyphicon glyphicon-remove"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                @foreach($business->photos as $photo)
                    @if($photo->file)
                    <div class="clone hide">
                        <div class="control-group1 input-group" style="margin-top:20px" >
                            <img src="{{ URL::to('storage/businessImages/'.$photo->file) }}" alt="img" height="80;" width="80;">
                            <form  action="{{ route('delete_photo',$photo->id)}}" method="post" >
                                @csrf
                                @method('DELETE')

                                <div class="input-group-btn">
                                    <button class="btn btn-danger3" type="submit" type="button"><i class="glyphicon glyphicon-remove"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif
                @endforeach


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

@endsection
