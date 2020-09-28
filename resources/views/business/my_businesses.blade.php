@extends('layouts.app')

@section('content')

    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="{{asset('frontend/assets/images/banners/banner2.jpg')}}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">My Businesses</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">My Dashboard</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">My Businesses</li>
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
                            <h3 class="card-title">My Businesses</h3>
                        </div>
                        <div class="card-body ads-tabs">
                            @foreach($my_businesses as $my_business)
                            <div class="card overflow-hidden card-absolute">
                                <div class="edit-buttons-absolute">
                                    <a href="{{route('edit_business', $my_business->id)}}" class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                    <a class="btn btn-info btn-sm text-white" data-toggle="tooltip" data-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a class="btn btn-secondary btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
                                </div>
                                <div class="d-md-flex">
                                    <div class="item-card9-img">
                                        <div class="item-card9-imgs">
                                            <a href="{{route('view_business', $my_business->id)}}"></a>
                                            <img src="{{URL::to('storage/businessImages/'.$my_business->photos->first()->file)}}" alt="img" width="600;" height="200;"  >
                                        </div>

                                    </div>
                                    <div class="card border-0 mb-0">
                                        <div class="card-body py-4">
                                            <div class="item-card9">
                                                <div class="d-flex">
                                                    <a href="{{route('view_business', $my_business->id)}}">{{ \App\Category::find($my_business->category_id)->name }}</a>
                                                </div>
                                                <a href="{{route('view_business', $my_business->id)}}" class="text-dark"><h4 class="font-weight-semibold mt-0">{{$my_business->subject_name}}<i class="ion-checkmark-circled text-success ml-1"></i></h4></a>
                                                <div class="item-card2-desc mt-3">
                                                    <div class="item-card2-desc-cost">
                                                        <h6 class="text-dark font-weight-normal mb-0 mt-0"><i class="fa fa-map-marker mr-1"></i>{{\App\City::find($my_business->city_id)->city_name}}, {{ \App\State::find($my_business->state_id)->name }}</h6>
                                                        <h6 class="text-dark font-weight-normal mb-0 mt-2"><i class="fa fa-phone mr-1"></i> {{$my_business->phone}}</h6>
                                                        <h6 class="text-dark font-weight-normal mb-0 mt-2"> <a href="{{route('view_business', $my_business->id)}}">{{\Illuminate\Support\Str::limit($my_business->description,500)}}</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-3">
                                            <div class="row">
{{--                                                <div class="col col-auto">--}}
{{--                                                    <a href="#" class="mt-1 mb-1 mr-2"><i class="fa fa-heart-o"></i> Add to favorities</a>--}}
{{--                                                    <a href="#" class="mt-1 mb-1 mr-0"><i class="fa fa-eye"></i> 42</a>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
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
