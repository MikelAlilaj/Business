<?php

namespace App\Http\Controllers;

use App\Business;
use App\Category;
use App\City;
use App\Doc;
use App\Favorite;
use App\Photo;
use App\State;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class BusinessController extends Controller
{

    public function index()
    {
        $businesses = Business::all();
        $categories=Category::all();
        $states=State::all();

        return view('business.index', ['businesses'=>$businesses,'categories'=>$categories,'states'=>$states]);
    }

    public function search_business(Request $request){

        if (Auth::Check()) {

            $validator = Validator::make($request->all(), [
                'search' => 'required',
                'category_id' => 'required',
                'state_id' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', sprintf( $validator->errors()->all()[0]));
            }
            $item = $request->search;
            $category_id = $request->category_id;
            $state_id = $request->state_id;

            $businesses = Business::where('subject_name','LIKE',"%$item%")
                ->where('category_id',$category_id)
                ->where('state_id',$state_id)
                ->get();

            $categories=Category::all();
            $states=State::all();

            return view('business.index', ['businesses'=>$businesses,'categories'=>$categories,'states'=>$states]);
        }else{
            $notification=array(
                'message'=>'You need to login to your account first',
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function view_by_category($id){
        $businesses = Business::where('category_id',$id)->get();
        $categories=Category::all();
        $states=State::all();
        return view('business.index', ['businesses'=>$businesses,'categories'=>$categories,'states'=>$states]);
    }

    public function create()
    {
        $user=Auth::user();
        $categories=Category::all();
        $states = State::all();
        return view('business.add_business',compact('states','categories','user'));
    }

    public function getCity($state_id){
        $city=City::where('state_id',$state_id)->get();
        return json_encode($city);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subject_name' => 'required|max:100',
            'category_id' => 'required|max:100',
            'initial_capital' => 'required|max:100',
            'legale_status' => 'required|max:100',
            'status' => 'required|max:100',
            'creation_year' => 'required|max:20',
            'nuis' => 'required|max:20',
            'phone' => 'required|max:20',
            'email' => 'required|max:100',
            'description' => 'required|max:1000',
            'company_service_description' => 'required|max:1000',
            'state_id' => 'required|max:100',
            'city_id' => 'required|max:1000',
            'official_address' => 'required|max:100',
            'verified' => 'required|max:100',
            'adm_first_name' => 'required|max:100',
            'adm_last_name' => 'required|max:100',
            'adm_phone' => 'required|max:100',
            'adm_email' => 'required|max:100',
            'adm_percentage' => 'required|max:50',
            'photo_id' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'video_id' => 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi',
            'doc_id' => 'required|max:10000|mimes:application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        ],
        [
        'photo_id.*.required' => 'Please upload an image',
        'photo_id.*.mimes' => 'Only jpeg,png and bmp images are allowed',
        'photo_id.*.max' => 'Sorry! Maximum allowed size for an image is 20MB',
    ]);
        if ($validator->fails()) {
            $notification=array(
                'message'=>sprintf($validator->errors()->all()[0]),
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }

        $business = new Business();
        $business->web_status = 'pending';
        $business->user_id = Auth::user()->id;
        $business->subject_name = $request->subject_name;
        $business->category_id = $request->category_id;
        $business->initial_capital = $request->initial_capital;
        $business->legale_status = $request->legale_status;
        $business->status = $request->status;
        $business->creation_year = $request->creation_year;
        $business->nuis = $request->nuis;
        $business->phone = $request->phone;
        $business->email = $request->email;
        $business->description = $request->description;
        $business->company_service_description = $request->company_service_description;
        $business->state_id = $request->state_id;
        $business->city_id = $request->city_id;
        $business->official_address = $request->official_address;
        $business->verified = $request->verified;
        $business->adm_first_name = $request->adm_first_name;
        $business->adm_last_name = $request->adm_last_name;
        $business->adm_phone = $request->adm_phone;
        $business->adm_email = $request->adm_email;
        $business->adm_percentage = $request->adm_percentage;
        $business->latitude = $request->latitude;
        $business->longtitude = $request->longtitude;



        if ($business->save()) {

            if ($file = $request->file('photo_id')) {
                foreach ($request->photo_id as $key => $image) {
                    $extension = $image->getClientOriginalExtension();
                    $final_filename = $image->getFilename() . '.' . $extension;
                    $image->storeAs('businessImages/', $final_filename);
                    $value = Photo::create([
                        'business_id' => $business->id,
                        'file' => $final_filename
                    ]);
                }

            }

            if ($file = $request->file('video_id')) {
                foreach ($request->video_id as $key => $video) {
                    $extension = $video->getClientOriginalExtension();
                    $final_filename = $video->getFilename() . '.' . $extension;
                    $video->storeAs('businessVideos/',  $final_filename);
                    $value = Video::create([
                        'business_id' => $business->id,
                        'file' =>  $final_filename
                    ]);
                }
            }

            if ($file = $request->file('doc_id')) {
                foreach ($request->doc_id as $key => $doc) {
                    $extension = $doc->getClientOriginalExtension();
                    $final_filename = $doc->getFilename() . '.' . $extension;
                    $doc->storeAs('businessDocs/', $final_filename);
                    $value = Doc::create([
                        'business_id' => $business->id,
                        'file' => $final_filename
                    ]);
                }
            }

            $notification=array(
                'message'=>'Business was created successfully',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification=array(
                'message'=>'Error. Please try again later',
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function my_businesses()
    {
        $user=Auth::user();
        $user_id=Auth::user()->id;
        $my_businesses = Business::where('user_id',$user_id)->get();
        return view('business.my_businesses', compact('my_businesses','user'));

    }

    public function view_Business($id){
        $business = Business::findorfail($id);
        return view('business.view_business', compact('business'));
    }

    public function edit($id)
    {

        $user=Auth::user();
        $user_id=Auth::user()->id;
        $business = Business::where('user_id',$user_id)->findorfail($id);
        $categories=Category::all();
        $states = State::all();
        return view('business.edit', compact('business','user','categories','states'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'subject_name' => 'required',
            'category_id' => 'required',
            'initial_capital' => 'required',
            'legale_status' => 'required',
            'status' => 'required',
            'creation_year' => 'required',
            'nuis' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'description' => 'required',
            'company_service_description' => 'required',
            'state_id' => 'required',
            'city_id' => 'required',
            'official_address' => 'required',
            'verified' => 'required',
            'adm_first_name' => 'required',
            'adm_last_name' => 'required',
            'adm_phone' => 'required',
            'adm_email' => 'required',
            'adm_percentage' => 'required',
            'photo_id' => 'max:2048',
            'video_id' => 'max:20000',
            'doc_id' => 'max:2048',
        ]);
        if ($validator->fails()) {
            $notification=array(
                'message'=>sprintf($validator->errors()->all()[0]),
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }
        $business= Business::findorfail($id);
        $business->user_id = Auth::user()->id;
        $business->subject_name = $request->subject_name;
        $business->category_id = $request->category_id;
        $business->initial_capital = $request->initial_capital;
        $business->legale_status = $request->legale_status;
        $business->status = $request->status;
        $business->creation_year = $request->creation_year;
        $business->nuis = $request->nuis;
        $business->phone = $request->phone;
        $business->email = $request->email;
        $business->description = $request->description;
        $business->company_service_description = $request->company_service_description;
        $business->state_id = $request->state_id;
        $business->city_id = $request->city_id;
        $business->official_address = $request->official_address;
        $business->verified = $request->verified;
        $business->adm_first_name = $request->adm_first_name;
        $business->adm_last_name = $request->adm_last_name;
        $business->adm_phone = $request->adm_phone;
        $business->adm_email = $request->adm_email;
        $business->adm_percentage = $request->adm_percentage;
        $business->latitude = $request->latitude;
        $business->longtitude = $request->longtitude;


        if ($business->save()) {

            if ($file = $request->file('photo_id')) {
                if(file_exists('photo_id')){
                    @unlink('photo_id');

                }
                foreach ($request->photo_id as $key => $image) {
                    $extension = $image->getClientOriginalExtension();
                    $final_filename = $image->getFilename() . '.' . $extension;

                    $image->storeAs('businessImages/', $final_filename);

                    $value = Photo::create([
                        'business_id' => $business->id,
                        'file' => $final_filename
                    ]);
                }

            }

            if ($file = $request->file('video_id')) {
                foreach ($request->video_id as $key => $video) {
                    $extension = $video->getClientOriginalExtension();
                    $final_filename = $video->getFilename() . '.' . $extension;
                    $video->storeAs('businessVideos/',  $final_filename);
                    $value = Video::create([
                        'business_id' => $business->id,
                        'file' =>  $final_filename
                    ]);
                }
            }

            if ($file = $request->file('doc_id')) {
                foreach ($request->doc_id as $key => $doc) {
                    $extension = $doc->getClientOriginalExtension();
                    $final_filename = $doc->getFilename() . '.' . $extension;
                    $doc->storeAs('businessDocs/', $final_filename);
                    $value = Doc::create([
                        'business_id' => $business->id,
                        'file' => $final_filename
                    ]);
                }
            }

            $notification=array(
                'message'=>'Business was Updated successfully',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification=array(
                'message'=>'Error. Please try again later',
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function delete_photo($id)
    {
        $photo = Photo::find($id);
        $imagePath = public_path()."/storage/businessImages/".$photo->file;

        if ($photo->delete())
        {
            unlink($imagePath);
            $notification = array(
                'message' => 'Deleted successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'Error. Please try again later',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }

    public function delete_video($id)
    {
        $video = Video::find($id);
        $videoPath = public_path()."/storage/businessVideos/".$video->file;

        if ($video->delete())
        {
            unlink($videoPath);
            $notification = array(
                'message' => 'Deleted successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'Error. Please try again later',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }


    public function delete_doc($id)
    {
        $doc = Doc::find($id);
        $docPath = public_path()."/storage/businessDocs/".$doc->file;

        if ($doc->delete())
        {
            unlink($docPath);
            $notification = array(
                'message' => 'Deleted successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'Error. Please try again later',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }



    public function my_favorites()
    {
        $user=Auth::user();
        $user_id=Auth::user()->id;
        $favorites=Favorite::where('user_id',$user_id)->get();
        return view('business.my_favorites',compact('favorites','user'));
    }


}
