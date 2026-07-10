<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectCategory;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Project::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.project.projectlisting', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projectcategory = ProjectCategory::all();
        return view('admin.project.addproject',compact('projectcategory'));
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
            'title' => 'required',
        ], [
            'title.required' => 'Please enter the title.',
        ]);

        $post = new Project;
        $post->title = $request->get('title');
        $post->projectcategory_id = $request->get('projectcategory_id');
        $post->location = $request->get('location');
        $post->date = date('Y-m-d', strtotime($request->input('date')));
        $post->meta_title = $request->get('meta_title');
        $post->meta_description = $request->get('meta_description');
        $post->description = $request->get('description');

        if ($request->hasFile('front_image')) {
            $file = $request->file('front_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/project_image/front');
            $file->move($path, $filename);
            $post->front_image = $filename;
        }
        $uploadedImages = [];
        if ($request->hasFile('detail_image')) {
            foreach ($request->file('detail_image') as $file) {
                $filename =  $file->getClientOriginalExtension();
                $file->move(public_path('/project_image/detail'), $filename);
                $uploadedImages[] = $filename;
            }
        }
        $post->detail_image = json_encode($uploadedImages);
        $post->save();
        return redirect('/admin/project')->with('success', 'Project Added Successfully');
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
        $data = Project::find($id);
        $projectcategory = ProjectCategory::all();
        return view('admin.project.editproject', compact('data','projectcategory'));
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
        $post = Project::find($id);
        $post->title = $request->get('title');
        $post->projectcategory_id = $request->get('projectcategory_id');
        $post->location = $request->get('location');
        $post->date = date('Y-m-d', strtotime($request->input('date')));
        $post->meta_title = $request->get('meta_title');
        $post->meta_description = $request->get('meta_description');
        $post->description = $request->get('description');

        if ($request->hasFile('front_image')) {
            $file = $request->file('front_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/project_image/front');
            $file->move($path, $filename);
            $post->front_image = $filename;
        }
        $existingImages = $request->input('existing_images', []);
        $finalImages = [];
        foreach ($existingImages as $index => $oldFilename) {
            
            if ($request->hasFile("detail_image.$index")) {
                $file = $request->file("detail_image.$index");
                $filename = $file->getClientOriginalExtension();
                $file->move(public_path('/project_image/detail'), $filename);
                
                $oldPath = public_path('/project_image/detail/' . $oldFilename);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
                $finalImages[] = $filename;
            } else {
                
                $finalImages[] = $oldFilename;
            }
        }
        
        if ($request->hasFile('detail_image')) {
            foreach ($request->file('detail_image') as $key => $file) {
                if (!array_key_exists($key, $existingImages)) {
                    $filename =  $file->getClientOriginalExtension();
                    $file->move(public_path('/project_image/detail'), $filename);
                    $finalImages[] = $filename;
                }
            }
        }
        $post->detail_image = json_encode(array_values($finalImages));
        $post->save();
        return redirect('/admin/project')->with('success', 'Project Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Project::find($id);
    
        if ($data) {
            $data->delete();
            return redirect()->back()->with('success', 'Your Project Has Been Deleted Successfully!');
        }
    
        return redirect()->back()->with('error', 'Project not found!');
    }
}
