<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;


class ServiceCategoryController extends Controller
{
    public function index()
    {
        $data = ServiceCategory::with('services')->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.category.categorylisting', compact('data'));
    }

    public function create()
    {
        return view('admin.category.addcategory');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            
        ], [
             'name.required' => 'Please enter the category name.'
        ]);

        $post = new ServiceCategory;
        $post->name = $request->get('name');
        $post->description = $request->get('description');
        $post->banner_title = $request->get('banner_title');
        $post->url = $request->get('url');
        $post->meta_title = $request->get('meta_title');
        $post->meta_description = $request->get('meta_description');

        $post->save();

        return redirect('/admin/category')->with('success', 'Category Added Successfully');
    }
    public function show($id)
    {
        $data = ServiceCategory::findOrFail($id);
        return view('admin.category.categorydetail', compact('data'));
    }
    public function edit($id)
    {
        $data = ServiceCategory::find($id);
        return view('admin.category.editcategory', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $post = ServiceCategory::find($id);
        $post->name = $request->get('name');
        $post->description = $request->get('description');
        $post->banner_title = $request->get('banner_title');
        $post->url = $request->get('url');
        $post->meta_title = $request->get('meta_title');
        $post->meta_description = $request->get('meta_description');

        $post->save();
        return redirect('/admin/category')->with('success', 'Category Updated Successfully');
    }

    public function destroy($id)
    {
        $data = ServiceCategory::find($id);
    
        if ($data) {
            $data->delete();
            return redirect()->back()->with('success', 'Your Category Has Been Deleted Successfully!');
        }
    
        return redirect()->back()->with('error', 'Category not found!');
    }
}