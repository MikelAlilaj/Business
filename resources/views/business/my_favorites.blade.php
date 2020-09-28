@extends('layouts.app')

@section('content')
<!--Breadcrumb-->
<section>
    <div class="bannerimg cover-image bg-background3" data-image-src="{{asset('frontend/assets/images/banners/banner2.jpg')}}">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white">
                    <h1 class="">My Favorite Listings</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">My Dashboard</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">My Favorite Listings</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Breadcrumb-->

<!--User Dashboard-->
<section class="sptb">
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')
            <div class="col-xl-9 col-lg-12 col-md-12">
                <div class="card mb-0 overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title">My Favorite Listings</h3>
                    </div>
                    <div class="card-body ads-tabs">
                        @foreach($favorites as $favorite)
                            <div class="card overflow-hidden card-absolute">
                                <div class="d-md-flex">
                                    <div class="item-card9-img">
                                        <div class="item-card9-imgs">
                                            <a href="{{route('view_business', \App\Business::find($favorite->business_id)->id)}}"></a>
                                            <img src="{{URL::to('storage/businessImages/'.\App\Business::find($favorite->business_id)->photos->first()->file)}}" alt="img" width="300px;" hright="300;" class="cover-image">
                                        </div>
                                    </div>
                                    <div class="card border-0 mb-0">
                                        <div class="card-body py-4">
                                            <div class="item-card9">
                                                <div class="d-flex">
                                                    <a href="business.html">{{\App\Category::find( \App\Business::find($favorite->business_id)->category_id)->name}}</a>
                                                </div>
                                                <a href="{{route('view_business', \App\Business::find($favorite->business_id)->id)}}" class="text-dark"><h4 class="font-weight-semibold mt-0">{{ \App\Business::find($favorite->business_id)->subject_name }} <i class="ion-checkmark-circled text-success ml-1"></i></h4></a>
                                                <div class="item-card2-desc mt-3">
                                                    <div class="item-card2-desc-cost">
                                                        <h6 class="text-dark font-weight-normal mb-0 mt-0"><i class="fa fa-map-marker mr-1"></i>{{\App\City::find( \App\Business::find($favorite->business_id)->city_id)->city_name}}, {{\App\State::find( \App\Business::find($favorite->business_id)->state_id)->name}}</h6>
                                                        <h6 class="text-dark font-weight-normal mb-0 mt-2"><i class="fa fa-phone mr-1"></i> <a href="#">{{ \App\Business::find($favorite->business_id)->phone }}</a></h6>
                                                        <h6 class="text-dark font-weight-normal mb-0 mt-2"><i class=""></i> <a href="#">{{\Illuminate\Support\Str::limit( \App\Business::find($favorite->business_id)->description,500) }}</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
{{--                                        <div class="card-footer py-3">--}}
{{--                                            <div class="row">--}}

{{--                                                <div class="col col-auto">--}}
{{--                                                    <a href="#" class="mt-1 mb-1 mr-2"><i class="fa fa-heart-o"></i> Add to favorities</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/User Dashboard-->

@endsection
