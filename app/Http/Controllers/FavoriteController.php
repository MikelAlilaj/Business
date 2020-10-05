<?php

namespace App\Http\Controllers;

use App\Favorite;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class FavoriteController extends Controller
{
    public function add_favorite($id){

        $user_id = Auth::id();
        $check = Favorite::where('user_id',$user_id)->where('business_id',$id)->first();

        $data = array(
            'user_id' => $user_id,
            'business_id' => $id,
        );

        if (Auth::Check()) {

            if ($check) {
                return \Response::json(['error' => 'Business is already on the favorites']);
            }else{
                Favorite::insert($data);
                return \Response::json(['success' => 'The business was added to the favorites']);
            }

        }else{
            return \Response::json(['error' => 'You need to login to your account first']);

        }
    }


    public function add_subscriber(Request $request){

        $validator = Validator::make($request->all(),
            [
                'email'=> ['required', 'email', 'max:95']


            ]);
        if ($validator->fails()) {
            $notification=array(
                'message'=>sprintf($validator->errors()->all()[0]),
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }

        $subscribe=new Subscriber();
        $subscribe->email = $request->email;

        if ($subscribe->save())
        {
            $notification = array(
                'message' => 'Subscription Added Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }
        else
        {
            $notification = array(
                'message' => 'Error. Please try again',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

}
