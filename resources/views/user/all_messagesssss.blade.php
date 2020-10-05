@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('frontend/assets/css/inbox.css') }}" rel="stylesheet" >
</head>
<body>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="panel messages-panel">
        <div class="contacts-list">
            <div class="inbox-categories">
                <div data-toggle="tab" data-target="#inbox" class="active"> Inbox </div>
            </div>
            <div class="tab-content">
                <div id="inbox" class="contacts-outter-wrapper tab-pane active">


                    <div class="contacts-outter">
                        <ul class="list-unstyled contacts">
                            @foreach($user_message as $message)
                            <a href="{{route('view_message', $message->id)}}" class="absolute-link">
                                <li data-togglee="tab"   class="@if(\Route::current()->getName()== 'view_message') active @endif">
                                    <div class="message-count"> 1 </div>
                                    <img alt="" class="img-circle medium-image" src="{{\App\User::find($message->sender_id)->avatar}}">

                                    <div class="vcentered info-combo">
                                        <h3 class="no-margin-bottom name">{{\App\User::find($message->sender_id)->firstname}} {{\App\User::find($message->sender_id)->lastname}}</h3>
                                        <h5> {{$message->subject}}</h5>
                                    </div>
                                    <div class="contacts-add">
                                        <span class="message-time" >{{ Carbon\Carbon::parse($message->created_at)->diffForHumans()}} </span>

                                        <i class="fa fa-trash-o"></i>
                                        <i class="fa fa-paperclip"></i>
                                    </div>
                                </li>
                            </a>
                            @endforeach

                        </ul>
                    </div>

                </div>



            </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane message-body active" id="inbox-message-1">

                <div class="message-chat">
                    <div class="chat-body">

                        @foreach($messages as $message)
                        <div class="message info">
                            <img alt="" class="img-circle medium-image" src="{{\App\User::find($message->sender_id)->avatar}}">
                                <div class="message-body">
                                    <div class="message-info">
                                        <h4>{{\App\User::find($message->sender_id)->firstname}}</h4>
                                        <h5> <i class="fa fa-clock-o"></i> {{ Carbon\Carbon::parse($message->created_at)->diffForHumans()}}</h5>
                                    </div>
                                    <hr>
                                    <div class="message-text">
                                        {{$message->message}}
                                    </div>
                                </div>
                            <br>
                        </div>
                        @endforeach

                        @foreach($my_messages as $my_message)
                            <div class="message my-message">
                                <img alt="" class="img-circle medium-image" src="{{\App\User::find($my_message->sender_id)->avatar}}">

                                <div class="message-body">
                                    <div class="message-body-inner">

                                        <div class="message-info">
                                            <h4>{{\App\User::find($my_message->sender_id)->firstname}}</h4>
                                            <h5> <i class="fa fa-clock-o"></i> {{ Carbon\Carbon::parse($my_message->created_at)->diffForHumans()}}</h5>
                                        </div>
                                        <hr>
                                        <div class="message-text">
                                            {{$my_message->message}}
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        @endforeach

                    </div>

                    <div class="chat-footer">
                        <form method="post" action="{{ route('reply_message',$message->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">

                                <textarea name="message" class="form-control" id="message"></textarea>
                            </div>


                            <button type="submit" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">


</script>
</body>
</html>
@endsection
