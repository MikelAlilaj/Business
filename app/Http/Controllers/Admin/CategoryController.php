<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.all_categories', compact('categories'));
    }



    public function create()
    {
        return view('admin.categories.add_category');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required',
                'image'=>'required'
            ]);

        if ($validator->fails()) {
            $notification=array(
                'message'=>sprintf($validator->errors()->all()[0]),
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }

        $category=new Category();
        $category->name = $request->name;
        $category->isActive = $request->isActive;
        $file = $request->image;
        if ($request->image) {
            $extension = $file->getClientOriginalExtension();
            $final_filename = $file->getFilename() . '.' . $extension;
            $file->storeAs('categoryImage/', $final_filename);
            $category->image=$final_filename;
        }

        if ($category->save())
        {
            $notification = array(
                'message' => 'Category Inserted Successfully',
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
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit_category', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required',

            ]);

        if ($validator->fails()) {
            $notification=array(
                'message'=>sprintf($validator->errors()->all()[0]),
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }

        $category=Category::find($id);;
        $category->name = $request->name;
        $category->isActive = $request->isActive;
        $file = $request->image;
        if ($request->image) {
            $extension = $file->getClientOriginalExtension();
            $final_filename = $file->getFilename() . '.' . $extension;
            $file->storeAs('categoryImage/', $final_filename);
            $category->image=$final_filename;
        }

        if ($category->save()) {
            $notification = array(
                'message' => 'Business Category has been updated successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('all_categories')->with($notification);
        }
        else {
            $notification = array(
                'message' => 'Error. Please try again',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function all_subscribers()
    {
        $subscribers = Subscriber::all();
        return view('admin.subscribers.all_subscribers', compact('subscribers'));
    }
}
