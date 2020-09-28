@extends('layouts.app')

@section('content')


    <!--Login-Section-->
    <section class="sptb">
        <div class="container customerpage">
            <div class="row">
                <div class="single-page" >
                    <div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                        <div class="wrapper wrapper2">
                            <div class="card-body">
                                <h3>Login</h3>
                                <div class="text-center">
                                    <div class="btn-list d-flex">
                                        <a href="https://www.google.com/gmail/" class="btn btn-google btn-block"><i class="fa fa-google fa-1x mr-2"></i> Google</a>
                                        <a href="https://twitter.com/" class="btn btn-twitter"><i class="fa fa-twitter fa-1x"></i></a>
                                        <a href="https://www.facebook.com/" class="btn btn-facebook"><i class="fa fa-facebook fa-1x"></i></a>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                            <hr class="divider">
                            <form id="login" class="card-body" tabindex="500">
                                <div class="email">

                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <label>Email</label>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>

                                <div class="password">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <label>Password</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="submit">

                                        <button type="submit" class="btn btn-secondary btn-block">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="mb-2" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif

                                </div>
                                <p class="text-dark mb-0">Don't have account?<a href="{{ route('register') }}" class="text-secondary ml-1">Sign UP</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter-->
    <section class="sptb border-top bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Subscribe To Our Newsletter</h2>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div class="row">
                <div class="col-lg-10 col-xl-8 col-md-12 mx-auto d-block text-center">
                    <div class="input-group sub-input mt-0">
                        <input type="text" class="form-control input-lg " placeholder="Enter your Email">
                        <div class="input-group-append ">
                            <button type="button" class="btn btn-secondary btn-lg br-tr-3 br-br-3 pl-5 pr-5">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Newsletter-->

    <!--Footer Section-->
    <section>
        <footer class="bg-dark-purple text-white">
            <div class="footer-main border-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <h6>Categories</h6>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#" class="btn footer-btn-outline btn-sm btn-pill mb-1">RealEstate</a>
                                    <a href="#" class="btn footer-btn-outline btn-sm btn-pill mb-1">Spa</a>
                                    <a href="#" class="btn footer-btn-outline btn-sm btn-pill mb-1">Education</a>
                                    <a href="#" class="btn footer-btn-outline btn-sm btn-pill mb-1">Mediation</a>
                                    <a href="#" class="btn footer-btn-outline btn-sm btn-pill mb-1">Restaurent</a>
                                    <a href="#" class="btn footer-btn-outline btn-sm btn-pill mb-1">Backery</a>
                                    <a href="#" class="btn footer-btn-outline btn-sm btn-pill mb-1">Automobiles</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <h6>Popular Listings</h6>
                            <ul class="list-unstyled mb-0">
                                <li><a href="#"><i class="fa fa-angle-double-right mr-2 text-secondary"></i> Educational college</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right mr-2 text-secondary"></i> Free Lancer for Web Developer</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right mr-2 text-secondary"></i> 2BHK Flat In Hyderabad</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right mr-2 text-secondary"></i> Best Restaurants in Hyderabad</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <h6 class="mt-6 mt-xl-0">Contact</h6>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#"><i class="fa fa-home mr-3 text-secondary"></i> New York, NY 10012, US-52014</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope mr-3 fs-12 text-secondary"></i> info12323@example.com</a></li>
                                <li>
                                    <a href="#"><i class="fa fa-phone mr-3 text-secondary"></i> + 01 234 567 88, + 01 234 567 88</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-print mr-3 text-secondary"></i> + 01 234 567 89, + 01 234 567 89</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <h6 class="mb-2 mt-6 mt-xl-0">Subscribe</h6>
                            <div class="input-group">
                                <input type="text" class="form-control br-tl-3  br-bl-3" placeholder="Email">
                                <div class="input-group-append ">
                                    <button type="button" class="btn btn-secondary br-tr-3 br-br-3 pl-5 pr-5">
                                        Subscribe
                                    </button>
                                </div>
                            </div>
                            <h6 class="mb-2 mt-5">Payments</h6>
                            <ul class="payments mb-0">
                                <li>
                                    <a href="#" class="payments-icon"><i class="fa fa-cc-amex" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="payments-icon"><i class="fa fa-cc-visa" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="payments-icon"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="payments-icon"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="payments-icon"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-dark-purple text-white p-0 border-bottom">
                <div class="container">
                    <div class="p-2 text-center footer-links">
                        <a href="#" class="btn btn-link">How It Works</a>
                        <a href="#" class="btn btn-link">About Us</a>
                        <a href="#" class="btn btn-link">Pricing</a>
                        <a href="#" class="btn btn-link">Listing Categories</a>
                        <a href="#" class="btn btn-link">Privacy Policy</a>
                        <a href="#" class="btn btn-link">Terms Of Conditions</a>
                        <a href="#" class="btn btn-link">Blog</a>
                        <a href="#" class="btn btn-link">Contact Us</a>
                        <a href="#" class="btn btn-link">Premium Ad</a>
                    </div>
                </div>
            </div>
            <div class="bg-dark-purple text-white-50 p-3">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-lg-12 col-sm-12  mt-2 mb-2 text-center ">
                            Copyright © 2020 <a href="#" class="fs-14 text-secondary">Bizdire</a>. Designed by <a href="spruko.com" class="fs-14 text-secondary">Spruko</a> All rights reserved.
                        </div>
                        <div class="col-lg-12 col-sm-12 text-center mb-2 mt-2">
                            <ul class="social-icons mb-0">
                                <li>
                                    <a class="social-icon" href=""><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href=""><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href=""><i class="fa fa-rss"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href=""><i class="fa fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href=""><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href=""><i class="fa fa-google-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <!--Footer Section-->
@endsection
