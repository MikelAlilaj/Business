<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.categories.all_categories', compact('category'));
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
            ]);

        if ($validator->fails()) {
            $notification = array(
                'message' => 'Please fill all the fields',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }

        $category=new Category();
        $category->name = $request->name;
        $category->isActive = $request->isActive;

        if ($category->save())
        {
            $notification2 = array(
                'message' => 'Category Inserted Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification2);
        }
        else
        {
            $notification2 = array(
                'message' => 'Error. Please try again',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification2);
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
            $notification = array(
                'message' => 'Please fill all the fields',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }

        $category=Category::find($id);;
        $category->name = $request->name;
        $category->isActive = $request->isActive;

        if ($category->save()) {
            $notification1 = array(
                'message' => 'Business Category has been updated successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('all_categories')->with($notification1);
        }
        else {
            $notification2 = array(
                'message' => 'Error. Please try again',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification2);
        }
    }
}
