<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function user_profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }



    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname'=> ['required', 'string', 'max:255','alpha_dash'],
            'lastname'=> ['required', 'string', 'max:255'],
            'phone'=> ['required', 'string', 'max:255'],
            'avatar'=> ['image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
            'email'=> ['required', 'email', 'max:255',
             Rule::unique('users')->ignore(Auth::user()->id)]
        ]);

        if ($validator->fails()) {
            $notification=array(
                'message'=>sprintf($validator->errors()->all()[0]),
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }
        $user = Auth::user();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $file = $request->avatar;
        if ($request->avatar) {
            $extension = $file->getClientOriginalExtension();
            $final_filename = $file->getFilename() . '.' . $extension;
            $file->storeAs('avatar/', $final_filename);
            $user->avatar=$final_filename;
        }
        if ($user->save()) {
            $notification=array(
                'message'=>'You profile was saved successfully',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification=array(
                'message'=>'Error. Please try again later',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
    }


}
