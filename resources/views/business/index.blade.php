@extends('layouts.app')

@section('content')


    <section>
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background2" data-image-src="{{ asset('frontend/assets/images/banners/banner1.jpg') }}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white mb-7">
                        <h1 class="mb-1">Welcome To The Biggest Business Directory</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable.</p>
                    </div>
                    <div class="row">

                        <div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
                            <div class="search-background py-3 px-4 bg-white-transparent">
                                <form action="{{ route('search_business') }}" method="POST"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="form row row-sm">
                                        <div class="form-group col-xl-4 col-lg-3 col-md-12 mb-0">
                                            <input type="search"  class="form-control input-lg keywords-input" placeholder="Search for business..." name="search" required>
                                        </div>
{{--                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">--}}
{{--                                            <input type="text" class="form-control input-lg location-input" id="text5" placeholder="Enter State">--}}
{{--                                            <span><img src="{{asset('frontend/assets/images/svgs/gps.svg')}}" class="location-gps" alt="img"></span>--}}
{{--                                        </div>--}}

                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg mb-0">
                                            <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select State" name="state_id" id="state_id" required>
                                                <optgroup label="Categories">
                                                    <option>Select State</option>
                                                    @foreach($states as $state)
                                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                                    @endforeach

                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg mb-0">
                                            <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category" name="category_id" id="category_id" required>
                                                <optgroup label="Categories">
                                                    <option>Select Category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach

                                                </optgroup>
                                            </select>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                            <button type="submit" class="btn btn-lg btn-block btn-secondary"  value="Submit">Search Here</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /header-text -->
        </div>
    </section>
    <!--Sliders Section-->

    <!--Categories-->
    <section class="categories">
        <div class="container">
            <div id="small-categories" class="owl-carousel owl-carousel-icons2">
                @foreach($categories as $category)
                <div class="item">

                    <div class="card mb-0 overflow-hidden">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="{{route('view_by_category',$category->id)}}"></a>
                                    <img src="{{$category->image}}" class="cat-img"  >

                                <div class="cat-desc">
                                    <h5 class="mb-0">{{$category->name}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer p-0">
                            <div class="d-flex">
                                <div class="float-right w-150">

                                    <div class="p-3 text-center">
                                        <span class="font-weight-bold fs-16">{{\App\Business::where('category_id', $category->id)->count()}}</span> Listings
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--/Categories-->
x
    <!--Latest Listings-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Latest Listings</h2>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
                @foreach($businesses as $business)
                    @if($business->web_status=='approved')
                    <div class="item">
                        <div class="card mb-0 overflow-hidden">
                            <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                            <div class="item-card2-img">
                                <a href="{{route('view_business', $business->id)}}" class="absolute-link"></a>
                                <img src="{{$business->photos ? URL::to('storage/businessImages/'.$business->photos->first()->file) : 'http://placehold.it/400x400'}}" width="400;" height="250;" alt="img" class="cover-image">
                                <div class="item-card2-icons">
                                    <button class="addwishlist" data-id="{{ $business->id }}" >
                                        <div class="item-card2-icons-r"><i class="fa fa fa-heart-o"></i></div>
                                    </button>
                                </div>
                                <div class="blog--category">{{ \App\Category::find($business->category_id)->name }}</div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="item-card2">
                                    <div class="item-card2-desc">
                                        <div class="item-card2-text">
                                            <a href="{{route('view_business',$business->id)}}" class="text-dark"><h4 class="mb-0">{{$business->subject_name}}</h4></a>
                                        </div>
                                        <div class="pt-3">
                                            <a href="mb-1"><p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker mr-2"></i>{{\App\City::find($business->city_id)->city_name}}, {{\App\State::find($business->state_id)->name}}</p></a>
                                            <a href="mb-1"><p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-phone mr-2"></i>{{$business->phone}}</p></a>
                                            <p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-clock-o mr-2"></i>10am - 9pm<a> <span class="badge badge-success ml-2 fs-13">Open Now</span></a></p>
                                        </div>
                                        <p class="">{!!  \Illuminate\Support\Str::limit($business->description, $limit = 100 )  !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="item-card2-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!--Latest Listings-->



    <!--Featured Listings-->
    <!--Latest Listings-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Featured Listings</h2>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
                @foreach($businesses as $business)
                    @if($business->web_status=='featured')
                        <div class="item">
                            <div class="card mb-0 overflow-hidden">
                                <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                                <div class="item-card2-img">
                                    <a href="{{route('view_business', $business->id)}}" class="absolute-link"></a>
                                    <img src="{{$business->photos ? URL::to('storage/businessImages/'.$business->photos->first()->file) : 'http://placehold.it/400x400'}}" width="400;" height="250;" alt="img" class="cover-image">
                                    <div class="item-card2-icons">
                                        <button class="addwishlist" data-id="{{ $business->id }}" >
                                            <div class="item-card2-icons-r"><i class="fa fa fa-heart-o"></i></div>
                                        </button>
                                    </div>
                                    <div class="blog--category">{{ \App\Category::find($business->category_id)->name }}</div>
                                </div>
                                <div class="card-body pb-0">
                                    <div class="item-card2">
                                        <div class="item-card2-desc">
                                            <div class="item-card2-text">
                                                <a href="{{route('view_business',$business->id)}}" class="text-dark"><h4 class="mb-0">{{$business->subject_name}}</h4></a>
                                            </div>
                                            <div class="pt-3">
                                                <a href="mb-1"><p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker mr-2"></i>{{\App\City::find($business->city_id)->city_name}}, {{\App\State::find($business->state_id)->name}}</p></a>
                                                <a href="mb-1"><p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-phone mr-2"></i>{{$business->phone}}</p></a>
                                                <p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-clock-o mr-2"></i>10am - 9pm<a> <span class="badge badge-success ml-2 fs-13">Open Now</span></a></p>
                                            </div>
                                            <p class="">{!!  \Illuminate\Support\Str::limit($business->description, $limit = 100 )  !!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="item-card2-footer">

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!--Latest Listings-->

    <!--Statistics-->
    <section>
        <div class="about-1 cover-image sptb bg-background-color" data-image-src="../../assets/images/banners/banner5.jpg">
            <div class="content-text mb-0 text-white info">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status md-lg-0">
                                <div class="counter-icon text-secondary">
                                    <i class="icon icon-docs"></i>
                                </div>
                                <h5>Total Listings</h5>
                                <h2 class="counter mb-0">{{\App\Business::where('web_status','approved')->count()}}</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status-1 md-lg-0">
                                <div class="counter-icon text-warning">
                                    <i class="icon icon-rocket"></i>
                                </div>
                                <h5>Featured Listings</h5>
                                <h2 class="counter mb-0"> {{\App\Business::where('web_status','featured')->count()}}</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status mb-md-0">
                                <div class="counter-icon">
                                    <i class="icon icon-people"></i>
                                </div>
                                <h5> Our Clients</h5>
                                <h2 class="counter mb-0">{{\App\User::count()}}</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status mb-0">
                                <div class="counter-icon text-success">
                                    <i class="icon icon-emotsmile"></i>
                                </div>
                                <h5>Happy Customers</h5>
                                <h2 class="counter mb-0">{{\App\User::count()}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Statistics-->

    @guest
    <!--Section-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Getting Started</h2>

            </div>
            <div class="card overflow-hidden">
                <div class="row no-gutters row-deck">
                    <div class="col-md-6">
                        <div class="bg-light p-0 box-shadow2">
                            <div class="card-body text-center">
                                <div class="bg-white icon-bg  icon-service text-purple mb-4 service-card-svg">
                                    <!--User Icon Svg --->
                                    <svg height="618pt" viewBox="-28 -19 618 618.66574" width="618pt" xmlns="http://www.w3.org/2000/svg"><path d="m211.265625 264.132812c72.9375 0 132.066406-59.125 132.066406-132.066406 0-72.9375-59.128906-132.066406-132.066406-132.066406s-132.066406 59.128906-132.066406 132.066406c.070312 72.914063 59.15625 131.996094 132.066406 132.066406zm0-239.144531c59.140625 0 107.078125 47.945313 107.078125 107.078125 0 59.140625-47.9375 107.078125-107.078125 107.078125-59.136719 0-107.074219-47.9375-107.074219-107.078125.066406-59.109375 47.964844-107.007812 107.074219-107.078125zm0 0"/><path d="m554.492188 337.976562-107.703126-57.347656c-3.710937-2.023437-8.203124-1.976562-11.871093.121094l-98.582031 53.976562c-36.109376-26.863281-79.34375-40.855468-125.316407-40.855468-57.226562.125-110.328125 22.367187-149.6875 62.847656-39.859375 40.855469-61.726562 96.707031-61.597656 157.304688.019531 6.894531 5.601563 12.476562 12.492187 12.496093l347.597657-.625c16.339843 20.289063 37.347656 36.320313 61.222656 46.730469l14.496094 6.371094c1.574219.703125 3.28125 1.042968 5 1 1.710937-.03125 3.40625-.367188 4.996093-1l16.367188-7.121094c60.136719-25.230469 99.25-84.09375 99.207031-149.3125v-73.46875c.003907-4.640625-2.539062-8.910156-6.621093-11.117188zm-529.394532 163.429688c2.621094-49.105469 21.738282-93.957031 54.226563-127.320312 34.605469-35.609376 81.460937-55.226563 131.816406-55.226563h.375c41.359375 0 80.09375 12.996094 112.203125 37.609375v67.59375c.019531 26.835938 6.714844 53.242188 19.488281 76.839844zm511.027344-78.84375c.023438 55.21875-33.140625 105.039062-84.089844 126.324219h-.125l-11.367187 4.871093-9.5-4.125c-49.96875-21.832031-82.28125-71.160156-82.335938-125.691406v-67.597656l92.332031-50.601562 95.085938 50.726562zm0 0"/><path d="m406.804688 415.941406c-4.484376-5.242187-12.371094-5.855468-17.617188-1.371094-5.242188 4.484376-5.855469 12.371094-1.371094 17.613282l28.359375 33.109375c2.382813 2.769531 5.847657 4.363281 9.496094 4.375 2.863281.023437 5.644531-.945313 7.871094-2.75l65.972656-53.597657c5.347656-4.382812 6.128906-12.269531 1.746094-17.621093-4.378907-5.347657-12.265625-6.128907-17.613281-1.746094l-56.476563 45.980469zm0 0"/></svg>
                                    <!-- User Icon Svg --->
                                </div>
                                <h4 class="mb-4 fs-20">Exsiting User</h4>
                                <p>it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                <a href="{{ route('login') }}" class="btn btn-primary text-white px-6">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-white p-0 mt-5 mt-md-0 box-shadow2">
                            <div class="card-body text-center">
                                <div class="bg-light icon-bg  icon-service text-purple mb-4 service-card-svg">
                                    <!--User Icon Svg --->
                                    <svg height="482pt" viewBox="-15 0 482 482.60407" width="482pt" xmlns="http://www.w3.org/2000/svg"><path d="m268.941406 173.949219h25.609375c3.3125 0 6-2.6875 6-6 0-3.316407-2.6875-6-6-6h-25.609375c-3.316406 0-6 2.683593-6 6 0 3.3125 2.683594 6 6 6zm0 0"/><path d="m156.160156 173.949219h89.820313c3.316406 0 6-2.6875 6-6 0-3.316407-2.683594-6-6-6h-89.820313c-3.3125 0-6 2.683593-6 6 0 3.3125 2.6875 6 6 6zm0 0"/><path d="m94.542969 173.949219h38.199219c3.3125 0 6-2.6875 6-6 0-3.316407-2.6875-6-6-6h-38.199219c-3.316407 0-6 2.683593-6 6 0 3.3125 2.683593 6 6 6zm0 0"/><path d="m231.722656 214.8125h-106.386718c-3.316407 0-6 2.6875-6 6s2.683593 6 6 6h106.386718c3.3125 0 6-2.6875 6-6s-2.6875-6-6-6zm0 0"/><path d="m94.542969 226.8125h11.136719c3.3125 0 6-2.6875 6-6s-2.6875-6-6-6h-11.136719c-3.316407 0-6 2.6875-6 6s2.683593 6 6 6zm0 0"/><path d="m94.542969 282.972656h71.257812c3.316407 0 6-2.6875 6-6s-2.683593-6-6-6h-71.257812c-3.316407 0-6 2.6875-6 6s2.683593 6 6 6zm0 0"/><path d="m123.347656 322.875h-28.804687c-3.316407 0-6 2.6875-6 6 0 3.316406 2.683593 6 6 6h28.804687c3.3125 0 6-2.683594 6-6 0-3.3125-2.6875-6-6-6zm0 0"/><path d="m442.261719 132.910156c-7.777344-11.804687-23.644531-15.089844-35.464844-7.339844l-6.515625 4.28125h-.015625l-11.476563 7.550782v-88.261719c-.015624-14.136719-11.472656-25.59375-25.609374-25.609375h-131.363282c-6.847656-14.375-21.347656-23.53125-37.269531-23.53125-15.925781 0-30.425781 9.15625-37.273437 23.53125h-131.363282c-14.136718.015625-25.59375 11.472656-25.609375 25.609375v407.863281c.023438 14.132813 11.476563 25.582032 25.609375 25.601563h337.269532c14.132812-.015625 25.585937-11.46875 25.609374-25.601563v-245.601562l51.964844-34.144532c11.804688-7.777343 15.089844-23.640624 7.339844-35.464843zm-222.734375 175.34375-7.09375-10.800781 203.097656-133.449219 7.097656 10.800782zm111.785156 52.011719h-31.566406c-14.136719.015625-25.59375 11.46875-25.609375 25.605469v30.734375h-212.554688c-2.097656-.003907-3.796875-1.707031-3.800781-3.804688v-319.460937c.003906-2.101563 1.703125-3.800782 3.800781-3.808594h26.960938v16.472656c0 3.3125 2.683593 6 6 6h200.007812c3.3125 0 6-2.6875 6-6v-16.472656h26.957031c2.097657.003906 3.800782 1.707031 3.804688 3.808594v81.828125l-144.167969 94.726562c-.09375.0625-.179687.128907-.269531.199219-.054688.039062-.109375.078125-.164062.121094-.183594.144531-.359376.300781-.527344.464844l-.007813.007812c-.160156.164062-.3125.339844-.453125.523438-.035156.042968-.066406.085937-.101562.128906-.113282.152344-.21875.3125-.316406.476562-.019532.027344-.039063.050782-.058594.082032l-27.257813 46.972656-8.101562 5.320312c-2.769531 1.820313-3.539063 5.539063-1.71875 8.308594 1.820312 2.769531 5.539062 3.539062 8.308593 1.71875l8.101563-5.320312 53.929687-6.375c.03125 0 .0625-.011719.09375-.015626.097657-.015624.191407-.035156.289063-.054687.175781-.03125.347656-.066406.515625-.113281.101562-.027344.203125-.0625.300781-.101563.164063-.054687.324219-.113281.480469-.179687.097656-.042969.199219-.089844.292969-.136719.152343-.078125.300781-.160156.445312-.25.058594-.035156.117188-.058594.175781-.101563l110.210938-72.40625zm-8.242188 12-36.933593 36.933594v-23.328125c.007812-7.511719 6.097656-13.597656 13.609375-13.605469zm-115.609374-60.523437-33.777344 3.996093 17.074218-29.421875 8.351563 12.714844zm-1.617188-24.316407-7.09375-10.800781 187.386719-123.121094.011719-.007812 15.699218-10.316406 7.097656 10.800781zm157.335938-251.894531c7.511718.007812 13.597656 6.09375 13.609374 13.609375v96.144531l-33.476562 22v-73.945312c-.011719-8.726563-7.082031-15.796875-15.804688-15.808594h-26.957031v-18.585938c0-3.316406-2.6875-6-6-6h-58.710937v-11.648437c-.003906-1.929687-.140625-3.855469-.410156-5.765625zm-168.632813-23.527344c16.171875.015625 29.28125 13.125 29.296875 29.300782v17.640624c0 3.3125 2.6875 6 6 6h58.710938v35.058594h-188.011719v-35.058594h58.707031c3.3125 0 6-2.6875 6-6v-17.648437c.019531-16.171875 13.125-29.273437 29.296875-29.292969zm182.242187 445c-.015624 7.507813-6.101562 13.59375-13.609374 13.601563h-337.269532c-7.507812-.011719-13.59375-6.09375-13.609375-13.601563v-407.863281c.007813-7.511719 6.097657-13.601563 13.609375-13.609375h127.75c-.269531 1.910156-.40625 3.835938-.410156 5.765625v11.648437h-58.707031c-3.316407 0-6 2.683594-6 6v18.585938h-26.960938c-8.722656.015625-15.789062 7.082031-15.800781 15.808594v319.464844c.011719 8.71875 7.078125 15.789062 15.800781 15.800781h214.757813c.796875-.007813 1.589844-.066407 2.375-.175781.464844.113281.941406.171874 1.421875.175781 1.734375 0 3.382812-.753907 4.515625-2.058594 1.566406-.832031 2.996094-1.890625 4.25-3.144531l49.207031-49.199219c3.339844-3.324219 5.210937-7.847656 5.199219-12.5625v-120.363281l33.476562-22zm57.375-289.773437-1.507812.988281-20.777344-31.625 1.507813-.988281c6.28125-4.128907 14.71875-2.382813 18.84375 3.898437l5.832031 8.878906c4.117188 6.28125 2.371094 14.710938-3.898438 18.84375zm0 0"/></svg>
                                    <!--User Icon Svg --->
                                </div>
                                <h4 class="mb-4 fs-20">New User</h4>
                                <p>it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                <a href="{{ route('register') }}" class="btn btn-primary text-white px-6">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Section-->
    @endguest

    <!--Latest News-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Latest News</h2>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div>
                <div class="items-gallery">
                    <div class="items-blog-tab text-center">
                        <div class="items-blog-tab-heading row mb-0">
                            <div class="col-12">
                                <ul class="nav items-blog-tab-menu">
                                    <li class=""><a href="#tab-1" class="active show" data-toggle="tab">All</a></li>
                                    <li><a href="#tab-2" data-toggle="tab" class="">Business</a></li>
                                    <li><a href="#tab-3" data-toggle="tab" class="">Beauty</a></li>
                                    <li><a href="#tab-4" data-toggle="tab" class="">Real Estate</a></li>
                                    <li><a href="#tab-5" data-toggle="tab" class="">Restaurant</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-1">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <div class="item-card8-img  br-tr-4 br-tl-4">
                                                <img src="../../assets/images/products/products/f2.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="mb-0">Restaurants</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted mb-2">18 November 2019.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="footerimg d-flex mt-0 mb-0">
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="../../assets/images/faces/female/19.jpg" alt="image" class="avatar brround  mr-2">
                                                        <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Elizabeth<i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></h5>
                                                    </div>
                                                    <div class="mt-2 footerimg-r ml-auto">
                                                        <a href="business.html" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <div class="item-card8-img  br-tr-4 br-tl-4">
                                                <img src="../../assets/images/products/products/h2.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary mb-0">Real State</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted mb-2">22 November 2019.</p>
                                                    <h4 class="font-weight-semibold">RealEstate Company</h4>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="footerimg d-flex mt-0 mb-0">
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="../../assets/images/faces/female/1.jpg" alt="image" class="avatar brround  mr-2">
                                                        <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Jodie Melton<i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></h5>
                                                    </div>
                                                    <div class="mt-2 footerimg-r ml-auto">
                                                        <a href="business.html" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-lg-0">
                                            <div class="item-card8-img  br-tr-4 br-tl-4">
                                                <img src="../../assets/images/products/products/j1.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info mb-0">Beauty Spa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted mb-2">16 Oct 2019.</p>
                                                    <h4 class="font-weight-semibold">Modern Beauty & Spa</h4>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="footerimg d-flex mt-0 mb-0">
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="../../assets/images/faces/male/19.jpg" alt="image" class="avatar brround  mr-2">
                                                        <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Rogelio Brown<i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></h5>
                                                    </div>
                                                    <div class="mt-2 footerimg-r ml-auto">
                                                        <a href="business.html" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <div class="item-card8-img  br-tr-4 br-tl-4">
                                                <img src="../../assets/images/products/products/f1.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary mb-0">Business</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted mb-2">6 Aug 2019.</p>
                                                    <h4 class="font-weight-semibold">Business Analysis</h4>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="footerimg d-flex mt-0 mb-0">
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="../../assets/images/faces/female/2.jpg" alt="image" class="avatar brround  mr-2">
                                                        <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Thu Astudillo<i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></h5>
                                                    </div>
                                                    <div class="mt-2 footerimg-r ml-auto">
                                                        <a href="business.html" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <div class="item-card8-img">
                                                <img src="../../assets/images/products/products/j2.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary mb-0">Business</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted mb-2">7 July 2019.</p>
                                                    <h4 class="font-weight-semibold">Business Styles</h4>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="footerimg d-flex mt-0 mb-0">
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="../../assets/images/faces/male/2.jpg" alt="image" class="avatar brround  mr-2">
                                                        <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Shelton Vause <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></h5>
                                                    </div>
                                                    <div class="mt-2 footerimg-r ml-auto">
                                                        <a href="business.html" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <div class="item-card8-img">
                                                <img src="../../assets/images/products/products/j3.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info mb-0">Business</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted mb-2">16 April 2019.</p>
                                                    <h4 class="font-weight-semibold">Categorized Business</h4>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="footerimg d-flex mt-0 mb-0">
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="../../assets/images/faces/female/3.jpg" alt="image" class="avatar brround  mr-2">
                                                        <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Ellena Beachy <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></h5>
                                                    </div>
                                                    <div class="mt-2 footerimg-r ml-auto">
                                                        <a href="business.html" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <div class="item-card8-img  br-tr-4 br-tl-4">
                                                <img src="../../assets/images/products/products/b1.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info mb-0">Spa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted mb-2">16 May 2019.</p>
                                                    <h4 class="font-weight-semibold">Spanish Spa</h4>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="footerimg d-flex mt-0 mb-0">
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="../../assets/images/faces/female/5.jpg" alt="image" class="avatar brround  mr-2">
                                                        <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Vania Pease <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></h5>
                                                    </div>
                                                    <div class="mt-2 footerimg-r ml-auto">
                                                        <a href="business.html" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <div class="item-card8-img">
                                                <img src="../../assets/images/products/products/b2.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary mb-0">Spa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted mb-2">15 May 2019.</p>
                                                    <h4 class="font-weight-semibold">Beauty Saloon</h4>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="footerimg d-flex mt-0 mb-0">
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="../../assets/images/faces/male/5.jpg" alt="image" class="avatar brround  mr-2">
                                                        <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Chery Fogle <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></h5>
                                                    </div>
                                                    <div class="mt-2 footerimg-r ml-auto">
                                                        <a href="business.html" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-lg-0">
                                            <div class="item-card8-img  br-tr-4 br-tl-4">
                                                <img src="../../assets/images/products/products/j1.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary mb-0">Spa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted mb-2">16 Feb 2019.</p>
                                                    <h4 class="font-weight-semibold">Hiar Spa</h4>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="footerimg d-flex mt-0 mb-0">
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="../../assets/images/faces/female/6.jpg" alt="image" class="avatar brround  mr-2">
                                                        <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Leonila Payson <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></h5>
                                                    </div>
                                                    <div class="mt-2 footerimg-r ml-auto">
                                                        <a href="business.html" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <div class="item-card8-img  br-tr-4 br-tl-4">
                                                <img src="../../assets/images/products/products/h4.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary mb-0">Real Estate</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted mb-2">22 November 2019.</p>
                                                    <h4 class="font-weight-semibold">Building RealEstate</h4>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="footerimg d-flex mt-0 mb-0">
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="../../assets/images/faces/male/7.jpg" alt="image" class="avatar brround  mr-2">
                                                        <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Margarita Franklin <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></h5>
                                                    </div>
                                                    <div class="mt-2 footerimg-r ml-auto">
                                                        <a href="business.html" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <div class="item-card8-img">
                                                <img src="../../assets/images/products/products/h2.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info mb-0">Real Estate</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted mb-2">28 December 2019.</p>
                                                    <h4 class="font-weight-semibold">Modern Ventures</h4>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="footerimg d-flex mt-0 mb-0">
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="../../assets/images/faces/male/8.jpg" alt="image" class="avatar brround  mr-2">
                                                        <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Hobert Dillon <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></h5>
                                                    </div>
                                                    <div class="mt-2 footerimg-r ml-auto">
                                                        <a href="business.html" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <div class="item-card8-img">
                                                <img src="../../assets/images/products/products/h3.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary mb-0">Real Estate</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted mb-2">14 December 2019.</p>
                                                    <h4 class="font-weight-semibold">Consultancy Pvt Ltd</h4>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="footerimg d-flex mt-0 mb-0">
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="../../assets/images/faces/female/10.jpg" alt="image" class="avatar brround  mr-2">
                                                        <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Angele Vorpahl <i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></h5>
                                                    </div>
                                                    <div class="mt-2 footerimg-r ml-auto">
                                                        <a href="business.html" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <div class="item-card8-img  br-tr-4 br-tl-4">
                                                <img src="../../assets/images/products/products/f4.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info mb-0">Restaurant</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted mb-2">16 November 2019.</p>
                                                    <h4 class="font-weight-semibold">Food Courts</h4>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="footerimg d-flex mt-0 mb-0">
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="../../assets/images/faces/female/19.jpg" alt="image" class="avatar brround  mr-2">
                                                        <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Elizabeth<i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></h5>
                                                    </div>
                                                    <div class="mt-2 footerimg-r ml-auto">
                                                        <a href="business.html" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <div class="item-card8-img">
                                                <img src="../../assets/images/products/products/f3.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary mb-0">Restaurant</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted mb-2">7 May 2019.</p>
                                                    <h4 class="font-weight-semibold">Healthy Homely Food</h4>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="footerimg d-flex mt-0 mb-0">
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="../../assets/images/faces/female/19.jpg" alt="image" class="avatar brround  mr-2">
                                                        <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Elizabeth<i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></h5>
                                                    </div>
                                                    <div class="mt-2 footerimg-r ml-auto">
                                                        <a href="business.html" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <div class="item-card8-img">
                                                <img src="../../assets/images/products/products/f2.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary mb-0">Restaurant</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted mb-2">18 June 2019.</p>
                                                    <h4 class="font-weight-semibold">Spanish Styles</h4>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="footerimg d-flex mt-0 mb-0">
                                                    <div class="d-flex footerimg-l mb-0">
                                                        <img src="../../assets/images/faces/female/19.jpg" alt="image" class="avatar brround  mr-2">
                                                        <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">Elizabeth<i class="icon icon-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></h5>
                                                    </div>
                                                    <div class="mt-2 footerimg-r ml-auto">
                                                        <a href="business.html" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Latest News-->

    <!--Our Customers Says-->
    <section class="sptb position-relative pattern">
        <div class="container">
            <div class="section-title center-block text-center">
                <h1 class="text-white position-relative">Our Customers Says</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousl1" class="owl-carousel testimonial-owl-carousel">
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="testimonia">
                                        <p class="text-white-80">
                                            <i class="fa fa-quote-left text-white-80"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam.
                                        </p>
                                        <h3 class="title">Elizabeth</h3>
                                        <span class="post">Web Developer</span>
                                        <div class="rating-stars">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-controls clickable">
                                            <div class="owl-pagination">
                                                <div class="owl-page active">
                                                    <span class=""></span>
                                                </div>
                                                <div class="owl-page ">
                                                    <span class=""></span>
                                                </div>
                                                <div class="owl-page">
                                                    <span class=""></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="testimonia">
                                        <p class="text-white-80"><i class="fa fa-quote-left"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore. </p>
                                        <div class="testimonia-data">
                                            <h3 class="title">williamson</h3>
                                            <span class="post">Web Developer</span>
                                            <div class="rating-stars">
                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
                                                <div class="rating-stars-container">
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="owl-controls clickable">
                                                    <div class="owl-pagination">
                                                        <div class="owl-page ">
                                                            <span class=""></span>
                                                        </div>
                                                        <div class="owl-page active">
                                                            <span class=""></span>
                                                        </div>
                                                        <div class="owl-page">
                                                            <span class=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="testimonia">
                                        <p class="text-white-80"><i class="fa fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                        <div class="testimonia-data">
                                            <h3 class="title">Sophie Carr</h3>
                                            <span class="post">Web Developer</span>
                                            <div class="rating-stars">
                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
                                                <div class="rating-stars-container">
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="owl-controls clickable">
                                                    <div class="owl-pagination">
                                                        <div class="owl-page ">
                                                            <span class=""></span>
                                                        </div>
                                                        <div class="owl-page">
                                                            <span class=""></span>
                                                        </div>
                                                        <div class="owl-page active">
                                                            <span class=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Our Customers Says-->

{{--    <!--post section-->--}}
{{--    <section>--}}
{{--        <div class="sptb">--}}
{{--            <div class="content-text mb-0">--}}
{{--                <div class="container">--}}
{{--                    <div class="text-center">--}}
{{--                        <h2 class="mb-2">Subscribe</h2>--}}
{{--                        <p class="fs-16 mb-0">It is a long established fact that a reader will be distracted by the readable.</p>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-8 mx-auto d-block">--}}
{{--                                <div class="mt-5">--}}
{{--                                    <div class="input-group sub-input mt-1">--}}
{{--                                        <input type="text" class="form-control input-lg " placeholder="Enter your Email">--}}
{{--                                        <div class="input-group-append ">--}}
{{--                                            <button type="button" class="btn btn-secondary btn-lg br-tr-3 br-br-3 pl-5 pr-5">--}}
{{--                                                Subscribe--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!--/post section-->--}}



    <!--Section-->
    <section class="sptb cover-image patter-image" data-image-src="../../assets/images/pngs/7.png">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Download App</h2>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center text-wrap">
                        <div class="btn-list">
                            <a href="#" class="btn btn-secondary btn-lg mb-sm-0"><i class="fa fa-apple fa-1x mr-2"></i> App Store</a>
                            <a href="#" class="btn btn-primary btn-lg mb-sm-0"><i class="fa fa-android fa-1x mr-2"></i> Google Play</a>
                            <a href="#" class="btn btn-info btn-lg mb-0"><i class="fa fa-windows fa-1x mr-2"></i> Windows</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Section-->

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

    <!-- JQuery js-->
    <script src="{{ asset('frontend/assets/js/vendors/jquery-3.2.1.min.js') }}"></script>


    <!--JQuery Sparkline Js-->
    <script src="{{ asset('frontend/assets/js/vendors/jquery.sparkline.min.js') }}"></script>

    <!-- Star Rating Js-->
    <script src="{{ asset('frontend/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

    <!--Owl Carousel js -->
    <script src="{{ asset('frontend/assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl-carousel.js') }}"></script>








    <script type="text/javascript">

        $(document).ready(function(){
            $('.addwishlist').on('click', function(){
                var id = $(this).data('id');
                if (id) {
                    $.ajax({
                        url: " {{ url('add_favorite/') }}/"+id,
                        type:"GET",
                        datType:"json",
                        success:function(data){
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                onOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                            if ($.isEmptyObject(data.error)) {

                                Toast.fire({
                                    icon: 'success',
                                    title: data.success
                                })
                            }else{
                                Toast.fire({
                                    icon: 'error',
                                    title: data.error
                                })
                            }


                        },
                    });

                }else{
                    alert('danger');
                }
            });

        });


    </script>



@endsection
