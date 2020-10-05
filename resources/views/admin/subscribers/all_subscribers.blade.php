@extends('admin.admin_layouts')
@section('content')

    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Subscriber List</h5>

            </div><!-- sl-page-title -->
            <div class="card pd-20 pd-sm-40">
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($subscribers as $subscriber)
                            <tr>
                                <td>{{$subscriber->email }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->

        </div><!-- sl-mainpanel -->

@endsection
