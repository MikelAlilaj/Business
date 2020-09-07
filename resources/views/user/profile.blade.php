@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
<body>
<section class="content">
    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <nav class="nav flex-column side-nav">
                        <a class="nav-link active icon" href="{{route('user_profile')}}">
                            <i class="fa fa-user"></i>My Profile
                        </a>
                        <a class="nav-link icon" href="my-ads.html">
                            <i class="fa fa-heart"></i>My Ads Listing
                        </a>
                        <a class="nav-link icon" href="bookmarks.html">
                            <i class="fa fa-star"></i>Bookmarks
                        </a>
                        <a class="nav-link icon" href="change-password.html">
                            <i class="fa fa-recycle"></i>Change Password
                        </a>
                        <a class="nav-link icon" href="sold-items.html">
                            <i class="fa fa-check"></i>Sold Items
                        </a>
                    </nav>
                </div>
                <div class="row">

                    <div class="col-sm-12">

                        <form method="post" action="{{route('user_update', $user)}}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-4">
                                <img class="img-profile rounded-circle" src="{{$user->avatar}}">
                            </div>

                            <div class="form-group">
                                <input type="file" name="avatar">
                            </div>


                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text"
                                       name="firstname"
                                       class="form-control @error('firstname') is-invalid @enderror"


                                       id="firstname"
                                       value="{{$user->firstname}}"

                                >
                                @error('firstname')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>



                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text"
                                       name="lastname"
                                       class="form-control @error('lastname') is-invalid @enderror"


                                       id="lastname"
                                       value="{{$user->lastname}}"

                                >
                                @error('lastname')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text"
                                       name="phone"
                                       class="form-control @error('phone') is-invalid @enderror"


                                       id="phone"
                                       value="{{$user->phone}}"

                                >
                                @error('lastname')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text"
                                       name="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       id="email"
                                       value="{{$user->email}}"

                                >

                                @error('email')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>
</section>

</body>
</html>
@endsection
