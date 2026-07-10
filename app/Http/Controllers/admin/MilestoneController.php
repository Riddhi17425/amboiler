<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Milestone;
use Illuminate\Http\Request;

class MilestoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Milestone::orderBy('created_at', 'desc')->whereNull('deleted_at')->paginate(15);
        return view('admin.milestone.milestonelisting', compact('data'));
    }
    public function create()
    {
        return view('admin.milestone.addmilestone');
    }
   public function store(Request $request)
    {
        $validatedData = $request->validate([
            'top_title' => 'required',
            'title' => 'required',
            'year' => 'required',
            'description' => 'required',
            'image' => 'required',
            
        ]);
        $post = new milestone;
        $post->top_title = $request->get('top_title');
        $post->title = $request->get('title');
        $post->year = $request->get('year');
        $post->description = $request->get('description');
        $post->alt_tag = $request->get('alt_tag');
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/milestone_images');
            $file->move($path, $filename);
            $post->image = $filename;
        }
        $post->save();

        return redirect('/admin/milestone')->with('success', 'milestone Added Successfully');
    }
    public function edit($id)
    {
        $data = Milestone::find($id);
        return view('admin.milestone.editmilestone', compact('data'));
    }
    public function show($id)
    {
        $data = Milestone::findOrFail($id);
        return view('admin.milestone.milestonelisting', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $post = Milestone::find($id);
        $post->top_title = $request->get('top_title');
        $post->title = $request->get('title');
        $post->year = $request->get('year');
        $post->description = $request->get('description');
        $post->alt_tag = $request->get('alt_tag');
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/milestone_images');
            $file->move($path, $filename);
            $post->image = $filename;
        }
        $post->save();
        return redirect('/admin/milestone')->with('success', 'milestone Updated Successfully');
    }

    public function destroy($id)
    {
        $data = Milestone::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your Milestone Has Been Deleted Successfully!');
        }
        return redirect()->back()->with('error', 'Milestone not found!');
    }
}