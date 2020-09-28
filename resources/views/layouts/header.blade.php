
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



        <!-- Search -->
            <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                <div class="header_search">
                    <div class="header_search_content">
                        <div class="header_search_form_container">
                            <form  method="post" action="{{ route('search_business') }}" class="header_search_form clearfix">
                                @csrf
                                <input type="search" required="required" class="header_search_input" placeholder="Search for business..." name="search">
                                <div class="custom_dropdown">
                                    <div class="custom_dropdown_list">
                                        <span class="custom_dropdown_placeholder clc"></span>

                                        <ul class="custom_list clc">

                                        </ul>
                                    </div>
                                </div>
                                <button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{ asset('frontend/images/search.png')}}" alt=""></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wishlist -->
            <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                    <div class="wishlist d-flex flex-row align-items-center justify-content-end">
{{--                        @guest--}}

{{--                        @else--}}


{{--                            @php--}}
{{--                                $wishlist = DB::table('wishlists')->where('user_id',Auth::id())->get();--}}
{{--                            @endphp--}}



{{--                            <div class="wishlist_icon"><img src="{{ asset('frontend/images/heart.png')}}" alt=""></div>--}}
{{--                            <div class="wishlist_content">--}}
{{--                                <div class="wishlist_text"><a href="{{ route('user.wishlist') }}">Wishlist</a></div>--}}
{{--                                <div class="wishlist_count">{{ count($wishlist) }}</div>--}}
{{--                            </div>--}}
{{--                    </div>--}}

{{--                @endguest--}}



                </div>
            </div>
        </div>
    </div>
</div>


