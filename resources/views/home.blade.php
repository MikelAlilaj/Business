@extends('layouts.app')
@section('content')

{{--    @php--}}
{{--        $order = DB::table('orders')->where('user_id',Auth::id())->orderBy('id','DESC')->limit(10)->get();--}}
{{--    @endphp--}}

<!-- Header Main -->
<div class="header_main">
    <div class="container">
        <div class="row">

            <!-- Logo -->
            <div class="col-lg-2 col-sm-3 col-3 order-1">
                <div class="logo_container">
                    <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('frontend/images/logo.png')}}" alt=""></a></div>
                </div>
            </div>

        </div>
    </div>
</div>


    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-8 card">
                    <table class="table table-response">
                        <thead>
                        <tr>
{{--                            <th scope="col">Payment Type </th>--}}
{{--                            <th scope="col">Payment ID </th>--}}
{{--                            <th scope="col">Amount </th>--}}
{{--                            <th scope="col">Date </th>--}}
{{--                            <th scope="col">Status  </th>--}}
{{--                            <th scope="col">Status Code </th>--}}
{{--                            <th scope="col">Action </th>--}}

                        </tr>
                        </thead>
                        <tbody>


                        </tbody>

                    </table>

                </div>

                <div class="col-4">
                    <div class="card">
                        <img  class="img-profile rounded-circle" src="{{ Auth::user()->avatar }}" height="170px;" width="170px"  style=" margin-left: 34%;">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ Auth::user()->name }}</h5>

                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> <a href="{{ route('change_password') }}">Change Password</a>  </li>
                            <li class="list-group-item">Edit Profile</li>

                        </ul>

                        <div class="card-body">
                            <a href="" class="btn btn-danger btn-sm btn-block">Logout</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>


    </div>





@endsection
