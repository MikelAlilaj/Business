<?php

namespace App\Http\Controllers\Admin;

use App\Business;
use App\Category;
use App\Http\Controllers\Controller;
use App\State;
use Illuminate\Http\Request;
use PHPUnit\Util\Configuration;

class BusinessController extends Controller
{

    public function businesses_datatable(Request $request)
    {
        $limit = $request->input('length');
        $start = $request->input('start');


        $totalData = Business::count();

        $totalFiltered = $totalData;


        if (empty($request->input('search.value'))) {
            $businesses = Business::offset($start)
                ->limit($limit)
                ->orderBy('created_at', 'desc')
                ->get();
        } else {
            $search = $request->input('search.value');

            $category=Category::where('name', 'LIKE', "%{$search}%")->first();
            if($category)
                $id=$category->id;
            else
                $id=0;

            $businesses = Business::where('subject_name', 'LIKE', "%{$search}%")
                ->orWhere('category_id',$id)
                ->offset($start)
                ->limit($limit)
                ->orderBy('created_at', 'desc')
                ->get();


            $totalFiltered = Business::where('subject_name', 'LIKE', "%{$search}%")
                ->orWhere('category_id',$id)
                ->count();
        }


        $data = array();


        if (!empty($businesses)) {

            foreach ($businesses as $business) {

                $nestedData['subject_name'] = $business->subject_name;
                $nestedData['category'] = Category::find($business->category_id)->name;
                $nestedData['state'] = State::find($business->state_id)->name;
                $nestedData['initial_capital'] = $business->initial_capital;

                $nestedData['actions'] = '<a  class="btn btn-icon btn-success box-shadow-2 mr-1 btn-sm"
                                                        href="' . route('view_approved', $business->id) . '" class="btn btn-sm btn-warning" title="Show"><i class="fa fa-eye">';



                $data[] = $nestedData;
            }

        }

        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );


        echo json_encode($json_data);

    }



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
