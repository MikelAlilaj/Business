<?php

namespace App\Http\Controllers;

use App\Business;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Searchable\Search;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {

        $business = Business::paginate(5);
        return view('home', ['business'=>$business]);

    }

    public function change_password(){
        $user=Auth::user();
        return view('auth.changepassword',compact('user'));
    }

    public function update_password(Request $request)
    {
        $password=Auth::user()->password;
        $oldpass=$request->oldpass;
        $newpass=$request->password;
        $confirm=$request->password_confirmation;
        if (Hash::check($oldpass,$password)) {
            if ($newpass === $confirm) {
                $user=User::find(Auth::id());
                $user->password=Hash::make($request->password);
                $user->save();
                $notification=array(
                    'message'=>'Password Changed Successfully ! Now Login with Your New Password',
                    'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
            }else{
                $notification=array(
                    'message'=>'New password and Confirm Password not matched!',
                    'alert-type'=>'error'
                );
                return Redirect()->back()->with($notification);
            }
        }else{
            $notification=array(
                'message'=>'Old Password not matched!',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }

    }
}
