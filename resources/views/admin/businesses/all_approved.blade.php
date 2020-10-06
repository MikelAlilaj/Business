@extends('admin.admin_layouts')
@section('content')
    <div class="sl-mainpanel">


        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Business List</h5>

            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <br>
                <h6 class="card-body-title">Business List
                    <a href=" " class="btn btn-sm btn-warning" style="float: right;">Add New</a>
                </h6>


                <div class="table-wrapper">
                    <table  class="table display responsive nowrap server-side">
                        <thead>
                        <tr>
                            <th class="wd-15p">Subject Name</th>
                            <th class="wd-15p">Category</th>
                            <th class="wd-15p">State</th>
                            <th class="wd-15p">Business Category</th>
                            <th class="wd-15p">Action</th>
                        </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->




        </div><!-- sl-mainpanel -->

        <script>
            $('.server-side').DataTable( {
                "processing": true,
                "serverSide": true,
                "stateSave":true,
                "ajax": {
                    "url": "{{ route('businesses_datatable') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data":{ _token: "{{csrf_token()}}"}

                },
                "columns": [

                    { "data": "subject_name" },
                    { "data": "category" },
                    { "data": "state" },
                    { "data": "initial_capital" },
                    { "data": "actions" },


                ]

            } );

        </script>

@endsection


