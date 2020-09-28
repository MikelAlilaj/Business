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
                                    @if($business->web_status == 'pending')
                                        <span class="badge badge-warning">Pending</span>
                                    @endif
                                </strong>
                            </div>
                        </div><!-- col-4 -->




                        @foreach($business->photos as $photo)
                            <div class="col-lg-1">
                                <img src="{{ URL::to('storage/businessImages/'.$photo->file) }}" style="width: 80px; height: 80px;">
                            </div>
                        @endforeach

                        @foreach($business->videos as $video)


                                    <div class="control-group1 input-group" style="margin-top:20px" >

                                        <iframe src="{{ URL::to('storage/businessVideos/'.$video->file) }}" width="600" height="305" frameborder="0" allowfullscreen></iframe>

                                    </div>


                        @endforeach

                    </div> <!-- col-4 -->



                    @foreach($business->docs as $doc)
                        <div class="col-lg-1">
                            <iframe src = "{{ URL::to('storage/businessDocs/'.$doc->file) }}" width='1150' height='150' allowfullscreen webkitallowfullscreen></iframe>
                        </div>
                    @endforeach

                </div><!-- end row -->
                <br>

                @if($business->web_status == 'pending')
                    <a href="{{ route('approve',$business->id) }}" class="btn btn-info">Approve</a>
                    <br>
                    <a href="{{route('cancel',$business->id) }}" class="btn btn-danger">Cancel </a>
                @endif




            </div><!-- form-layout -->

        </div><!-- card -->


    </div><!-- row -->


    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


@endsection
