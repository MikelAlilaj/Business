
<div class="col-xl-3 col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">My Dashboard</h3>
        </div>
        <div class="card-body text-center item-user border-bottom">
            <div class="profile-pic">
                <div class="profile-pic-img">
                    <span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="online"></span>

                    <img src="{{$user->avatar}}"  class="brround" alt="user">
                </div>
                <a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">{{$user->firstname}} {{$user->lastname}}</h4></a>
            </div>
        </div>
        <div class="item1-links mb-0">
            <a href="{{ route('user_profile') }}" class="d-flex border-bottom  @if(\Route::current()->getName()== 'user_profile') active @endif">
                <span class="icon1 mr-2"><i class="typcn typcn-edit fs-20"></i></span> Edit Profile
            </a>
            <a href="{{ route('add_business') }}" class="d-flex border-bottom @if(\Route::current()->getName()== 'add_business') active @endif">
                <span class="icon1 mr-2"><i class="fa fa-plus"></i></span> Add Business
            </a>
            <a href="{{ route('my_businesses') }}" class="d-flex border-bottom @if(\Route::current()->getName()== 'my_businesses') active @endif">
                <span class="icon1 mr-2"><i class="typcn typcn-briefcase fs-20"></i></span> My Businesses
            </a>
            <a href="{{ route('my_favorites') }}" class="d-flex border-bottom @if(\Route::current()->getName()== 'my_favorites') active @endif">
                <span class="icon1 mr-2"><i class="typcn typcn-heart-outline fs-20"></i></span> My Favorites
            </a>
            <a href="{{route('change_password')}}" class="d-flex border-bottom @if(\Route::current()->getName()== 'change_password') active @endif">
                <span class="icon1 mr-2"><i class="typcn typcn-cog-outline fs-20"></i></span> Change Password
            </a>

        </div>
    </div>


</div>

