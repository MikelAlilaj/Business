<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function user_profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function update(user $user)
    {
        $inputs = request()->validate([

            'firstname'=> ['required', 'string', 'max:255','alpha_dash'],
            'lastname'=> ['required', 'string', 'max:255'],
            'phone'=> ['required', 'string', 'max:255'],
            'email'=> ['required', 'email', 'max:255',
            Rule::unique('users')->ignore($user),
            ],
            'avatar'=> ['file']
        ]);

        if(request('avatar')){
            $inputs['avatar'] = request('avatar')->store('avatar');
        }
        if ($user->update($inputs)) {
            return redirect()->back()->with('success', sprintf('You profile was saved successfully'));
        } else {
        return redirect()->back()->with('error', sprintf('Error. Please try again later'));
    }

    }
}
