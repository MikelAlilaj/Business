<?php

namespace App\Http\Controllers;

use App\Business;
use App\Conversation;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Exists;
use function GuzzleHttp\Promise\all;
use Response;

class MessageController extends Controller
{

    public function store(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => sprintf($validator->errors()->all()[0]),
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        $business = Business::findorfail($id);

        $conversation = Conversation::where(function($query) use ($business) {
            $query->where('from', Auth::id())->where('to', $business->user_id);
        })
            ->orWhere(function($query) use ($business) {
                $query->where('to', Auth::id())->where('from', $business->user_id);
            })->first();

        if (!$conversation) {

            $conversation = Conversation::create([
                'from' => Auth::id(),
                'to' => $business->user_id,
            ]);
        }

        $message = Message::create([
            'conversation_id' => $conversation->id,
            'message' => $request->message,
            'from' => Auth::id(),
            'to' => $business->user_id,
        ]);

        $notification = array(
            'message' => 'Your message was sent successfully.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }






    public function all_messages()
    {

//        $conversations = Conversation::where(function($query) {
//            $query->where('from', Auth::id())->where('to', '!=', Auth::id());
//        })
//            ->orWhere(function($query)  {
//                $query->where('to', Auth::id())->where('from','!=', Auth::id());
//            })->first();
//        dd($conversations);


        $user_id=Auth::id();
//
//
        $conversations=Conversation::where('to',$user_id)->orWhere('from',$user_id)->get();

//        $users = DB::select("select users.id, count(is_read) as unread
//        from users LEFT  JOIN  messages ON users.id = messages.from and is_read = 0 and messages.to = " . Auth::id() . "
//        where users.id != " . Auth::id() . " ");




        return view('user.all_messages', ['conversations'=>$conversations]);

//          $user_id=Auth::user()->id;
//          $messages=Message::where('to',$user_id)->groupBy('from')->havingRaw('count(*) > 0')->orderBy('created_at', 'asc')->get();
//
//        return view('user.all_messages', ['messages'=>$messages ]);
// return view('user.all_messages', ['users' => $users]);
    }

    public function getMessage($user_id)
    {
        $my_id = Auth::id();

        // Make read all unread message
        Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);

        // Get all message from selected user
        $messages = Message::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->oRwhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->get();

        return view('user.index', ['messages' => $messages]);
    }


    public function getMessageAjax($user_id)
    {
        $my_id = Auth::id();

        // Make read all unread message


        // Get all message from selected user
        $messages = Message::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->get();
        $messages = array_values($messages->where('is_read','0')->sortByDesc("id")->toArray());

        Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);

        return Response::json($messages);


    }

    public function sendMessage(Request $request)
    {
        $from = Auth::id();
        $to = $request->receiver_id;
        $message = $request->message;

        $data = new Message();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0; // message will be unread when sending message

        $data->save();

        $data = ['from' => $from, 'to' => $to]; // sending from and to user id when pressed enter

    }

}
