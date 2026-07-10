<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Others;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function index()
    {
        $data = Others::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.others.index', compact('data'));
    }

    public function create()
    {
        return view('admin.others.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        ], [
            'title.required' => 'Please Enter the name.',
            'description.required' => 'Please Enter the description.',
            'image.required' => 'Please upload the image', 
        ]);

        $post = new Others;
        $post->title = $request->get('title');
        $post->description = $request->get('description');
        $post->alt_tag = $request->get('alt_tag');
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/others');
            $file->move($path, $filename);
            $post->image = $filename;
        }

        $post->save();

        return redirect('/admin/others')->with('success', 'Network Added Successfully');
    }

    public function edit($id)
    {
        $data = Others::find($id);
        return view('admin.others.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $post = Others::find($id);
        $post->title = $request->get('title');
        $post->description = $request->get('description');
        $post->alt_tag = $request->get('alt_tag');
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/others');
            $file->move($path, $filename);
            $post->image = $filename;
        }
        $post->save();
        return redirect('/admin/others')->with('success', 'Network Updated Successfully');
    }

    public function destroy($id)
    {
        $data = Others::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your Network Has Been Deleted Successfully!');
        }
        return redirect()->back()->with('error', 'Network not found!');
    }
}
