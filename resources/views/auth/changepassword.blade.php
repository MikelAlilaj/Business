@extends('layouts.app')

@section('content')

<!--Breadcrumb-->
<section>
    <div class="bannerimg cover-image bg-background3" data-image-src="{{asset('frontend/assets/images/banners/banner2.jpg')}}">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white">
                    <h1 class="">Change Password</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">My Dashboard</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Change Password</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Breadcrumb-->

<section class="sptb">
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')
            <div class="col-xl-9 col-lg-12 col-md-12">
                <div class="card mb-0 overflow-hidden">
                            <div class="card-header">{{ __('Change Password') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('update_password') }}" >
                                    @csrf

                                    <div class="form-group row">
                                        <label for="oldpass" class="col-md-4 col-form-label ">Old Password</label>

                                        <div class="col-md-6">
                                            <input id="oldpass" type="password" class="form-control" name="oldpass"  required autofocus>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label ">New Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label ">Confirm Password</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-secondary">Update Password</button>
                                    </div>

                                </form>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection
