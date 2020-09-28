@extends('admin.admin_layouts')
@section('content')


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html"></a>
            <span class="breadcrumb-item active">Business Category Section</span>
        </nav>

        <div class="sl-pagebody">


            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">New Busines Category ADD
                    <a href="{{ route('all_categories')}}" class="btn btn-success btn-sm pull-right"> All Categories</a>
                </h6>
                <p class="mg-b-20 mg-sm-b-30">New  Add From</p>

                <form method="post" action="{{ route('store_category')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Business Category Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control  " type="text" name="name"  placeholder="Enter Category Name" required>

                                    <span class="invalid-feedback" role="alert">

                                    </span>

                                </div>
                            </div><!-- col-4 -->



                            <div class="row">
                                <div class="col-lg-6 col-sm-6">

                                    <label class="form-control-label">Image: <span class="tx-danger">*</span></label><br>
                                    <label class="custom-file">
                                        <input type="file" id="image" class="custom-file-input" name="image" onchange="readURL(this);" >
                                        <span class="custom-file-control"></span>
                                        <img src="#" id="one">
                                    </label>
                                </div>

                        </div><!-- end row -->



                        <div class="col-lg-4">
                            <label class="ckbox">
                                <input type="checkbox" name="isActive" value="1">
                                <span>Is Active</span>
                            </label>

                        </div> <!-- col-4 -->
                    </div>

                    <br><br>


                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Submit Form</button>

                    </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </div><!-- card -->

        </form>




    </div><!-- row -->


    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script type="text/javascript">
        function readURL(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection
