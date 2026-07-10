<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Testimonials::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.testimonials.index', compact('data'));
    }

    public function create()
    {
        return view('admin.testimonials.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
            'designation' => 'required',
        ], [
            'name.required' => 'Please enter the testimonials title.',
            'description.required' => 'Please enter the testimonials description.',
            'designation.required' => 'Please enter the testimonials designation.',
        ]);

        $post = new Testimonials;
        $post->name = $request->get('name');
        $post->designation = $request->get('designation');
        $post->description = $request->get('description');
        $post->alt_tag = $request->get('alt_tag');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/testimonials_images');
            $file->move($path, $filename);
            $post->image = $filename;
        }
        
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/testimonials_profile_images');
            $file->move($path, $filename);
            $post->profile_image = $filename;
        }

        $post->save();

        return redirect('/admin/testimonials')->with('success', 'testimonials Added Successfully');
    }

    public function edit($id)
    {
        $data = Testimonials::find($id);
        return view('admin.testimonials.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $post = Testimonials::find($id);
        $post->name = $request->get('name');
        $post->designation = $request->get('designation');
        $post->description = $request->get('description');
        $post->alt_tag = $request->get('alt_tag');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/testimonials_images');
            $file->move($path, $filename);
            $post->image = $filename;
        }
        
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/testimonials_profile_images');
            $file->move($path, $filename);
            $post->profile_image = $filename;
        }

        $post->save();
        return redirect('/admin/testimonials')->with('success', 'testimonials Updated Successfully');
    }

    public function destroy($id)
    {
        $data = Testimonials::find($id);
    
        if ($data) {
            $data->delete();
            return redirect()->back()->with('success', 'Your testimonials Has Been Deleted Successfully!');
        }
    
        return redirect()->back()->with('error', 'testimonials not found!');
    }
}
