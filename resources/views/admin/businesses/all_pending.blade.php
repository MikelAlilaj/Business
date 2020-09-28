@extends('admin.admin_layouts')
@section('content')

    <div class="sl-mainpanel">


        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Pending Business</h5>

            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Pending List  </h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">First Name</th>
                            <th class="wd-15p">Business Name</th>
                            <th class="wd-15p">Business Type</th>
                            <th class="wd-15p">Business Category</th>

                            <th class="wd-15p">Web Status</th>

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
                                    @if($business->web_status == 'pending')
                                        <span class="badge badge-warning">Pending</span>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('view_pending',$business->id) }} " class="btn btn-sm btn-info">View</a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-mainpanel -->

@endsection
