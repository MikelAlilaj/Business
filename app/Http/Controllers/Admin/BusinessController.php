<?php

namespace App\Http\Controllers\Admin;

use App\Business;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessController extends Controller
{



    public function all_approved(){
        $businesses = Business::where('web_status','approved')->get();
        return view('admin.businesses.all_approved', compact('businesses'));
    }

    public function all_pending(){
        $businesses = Business::where('web_status','pending')->get();
        return view('admin.businesses.all_pending', compact('businesses'));
    }

    public function all_featured(){
        $businesses = Business::where('web_status','featured')->get();
        return view('admin.businesses.all_featured', compact('businesses'));
    }

    public function view_approved($id){
        $business = Business::where('web_status','approved')->findorfail($id);
        return view('admin.businesses.view_approved', compact('business'));
    }

    public function view_pending($id){
        $business = Business::where('web_status','pending')->findorfail($id);
        return view('admin.businesses.view_pending', compact('business'));
    }

    public function view_featured($id){
        $business = Business::where('web_status','featured')->findorfail($id);
        return view('admin.businesses.view_featured', compact('business'));
    }


    public function approve($id){
       Business::where('id',$id)->update(['web_status'=>'approved']);
        $notification=array(
            'message'=>'The request has been approved',
            'alert-type'=>'success'
        );
        return Redirect()->route('all_pending')->with($notification);
    }

    public function cancel($id){
        Business::where('id',$id)->update(['web_status'=>'canceled']);
        $notification=array(
            'message'=>'The request has been canceled',
            'alert-type'=>'success'
        );
        return Redirect()->route('all_pending')->with($notification);
    }

    public function feature($id){
        Business::where('id',$id)->update(['web_status'=>'featured']);
        $notification=array(
            'message'=>'The request has been approved',
            'alert-type'=>'success'
        );
        return Redirect()->route('all_approved')->with($notification);
    }
}
