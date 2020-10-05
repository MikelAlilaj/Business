@extends('layouts.app')

@section('content')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="{{asset('frontend/assets/images/banners/banner2.jpg')}}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">My Dashboard</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">My Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Breadcrumb-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                @include('layouts.sidebar')
                <div class="col-xl-9 col-lg-12 col-md-12">
                    <div class="card mb-0 overflow-hidden">
                        <form method="post" action="{{route('user_update')}}" enctype="multipart/form-data">
                            @csrf
                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" name="firstname" class="form-control " id="firstname" value="{{$user->firstname}}" required>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" name="lastname" class="form-control " id="lastname" value="{{$user->lastname}}" required>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone Number</label>
                                        <input type="text" name="phone" class="form-control  " id="phone" value="{{$user->phone}}" required>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email address</label>
                                        <input type="text" name="email" class="form-control " id="email" value="{{$user->email}}" required>

                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <label class="form-label">Upload Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="avatar" >
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-secondary">Updated Profile</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/User Dashboard-->


@endsection
