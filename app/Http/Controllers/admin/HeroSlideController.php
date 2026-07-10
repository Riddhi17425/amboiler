<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroSlide;

class HeroSlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = HeroSlide::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.heroslide.heroslidelisting', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.heroslide.addheroslide');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
        'mobile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
    ]);
    $post = new HeroSlide;
    $post->title = $validatedData['title'];
    $post->description = $validatedData['description'] ?? null;
    $post->alt_tag = $request->get('alt_tag');
    
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('heroslide_images', 'public');
        $post->image = basename($path);
    }

    if ($request->hasFile('mobile_image')) {
        $path = $request->file('mobile_image')->store('heroslide_mobile_images', 'public');
        $post->mobile_image = basename($path);
    }

    
    $post->save();
    return redirect('/admin/heroslide')->with('success', 'Hero Slide Added Successfully');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = HeroSlide::find($id);
        return view('admin.heroslide.editheroslide', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = HeroSlide::find($id);
        $post->title = $request->get('title');
        $post->description = $request->get('description');
        $post->alt_tag = $request->get('alt_tag');

        if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = $file->getClientOriginalExtension();
        $path = public_path('/heroslide_images');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $file->move($path, $filename);
        $post->image = $filename;
    }

    // Update Mobile Image
    if ($request->hasFile('mobile_image')) {
        $file = $request->file('mobile_image');
        $filename = $file->getClientOriginalExtension();
        $path = public_path('/heroslide_mobile_images');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $file->move($path, $filename);
        $post->mobile_image = $filename;
    }

        $post->save();
        return redirect('/admin/heroslide')->with('success', 'Hero Slide Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = HeroSlide::find($id);
    
        if ($data) {
            $data->delete();
            return redirect()->back()->with('success', 'Your Hero Slide Has Been Deleted Successfully!');
        }
    
        return redirect()->back()->with('error', 'Hero Slide not found!');
    }
}