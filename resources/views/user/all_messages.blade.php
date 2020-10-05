@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('frontend/assets/css/inbox.css') }}" rel="stylesheet" >
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="user-wrapper">
                    <ul class="users">

                        @foreach( $conversations as  $conversation)
                        @if($conversation->from!=Auth::id() && $conversation->to==Auth::id() )
                            <li class="user" id="{{\App\User::find($conversation->from)->id}}">



{{--                                @foreach($users as $user)--}}
{{--                                @if($user->unread)--}}
{{--                                    <span class="pending">{{ $user->unread }}</span>--}}
{{--                                @endif--}}
{{--                                @endforeach--}}



                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{\App\User::find($conversation->from)->avatar}}" alt="" class="media-object">
                                    </div>

                                    <div class="media-body">
                                        <p class="name">{{\App\User::find($conversation->from)->firstname}}</p>
                                        <p class="email">{{\App\User::find($conversation->from)->email}}</p>
                                    </div>
                                </div>
                            </li>

                            @elseif($conversation->from==Auth::id() && $conversation->to!=Auth::id() )
                                    <li class="user" id="{{\App\User::find($conversation->to)->id}}">


{{--                                        @foreach($users as $user)--}}
{{--                                            @if($user->unread)--}}
{{--                                                <span class="pending">{{ $user->unread }}</span>--}}
{{--                                            @endif--}}
{{--                                        @endforeach--}}

                                        <div class="media">
                                            <div class="media-left">
                                                <img src="{{\App\User::find($conversation->to)->avatar}}" alt="" class="media-object">
                                            </div>

                                            <div class="media-body">
                                                <p class="name">{{\App\User::find($conversation->to)->firstname}}</p>
                                                <p class="email">{{\App\User::find($conversation->to)->email}}</p>
                                            </div>
                                        </div>
                                    </li>

                            @endif

                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="col-md-8" id="messages">

            </div>
        </div>
    </div>
@endsection
