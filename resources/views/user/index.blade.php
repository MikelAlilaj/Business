<div class="message-wrapper">
    <ul id="messages" class="messages">
        @foreach($messages as $message)
            <li class="message clearfix">

                <div class="{{ ($message->from == Auth::id()) ? 'sent' : 'received' }}">
                    <p>{{ $message->message }}</p>
                    <p class="date">{{ date('d M y, h:i a', strtotime($message->created_at)) }}</p>
                </div>
            </li>
        @endforeach
    </ul>
</div>

<div class="input-text">
    <input type="text" name="message" id="sendMessage" class="submit">
</div>
<script>
    // $("#sendMessage").keypress(function(event){
    //
    //     var keycode = (event.keyCode ? event.keyCode : event.which);
    //     if(keycode == '13'){
    //
    //     }
    //             //event.stopPropagation();
    // });

</script>
