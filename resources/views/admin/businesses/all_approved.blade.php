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
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">Subject Name</th>
                            <th class="wd-15p">Creation Year</th>
                            <th class="wd-15p">Business Type</th>
                            <th class="wd-15p">Business Category</th>
                            <th class="wd-15p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($businesses as $business)
                            <tr>
                                <td>{{ $business->subject_name }}</td>
                                <td>{{ $business->creation_year }}</td>
                                <td>{{ \App\State::find($business->state_id)->name }} </td>
                                <td>{{ \App\Category::find($business->category_id)->name }}</td>

                                <td>
                                    <a href="{{ route('view_approved',$business->id) }}" class="btn btn-sm btn-warning" title="Show"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->




        </div><!-- sl-mainpanel -->

@endsection


