<?php

namespace App\Http\Controllers;

use App\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


}
