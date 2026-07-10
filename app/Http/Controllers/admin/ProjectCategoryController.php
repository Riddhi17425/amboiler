<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProjectCategory::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.projectcategory.projectcatlisting', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projectcategory.addprojectcat');
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
            'category' => 'required',
        ], [
            'category.required' => 'Please enter the project category.',
        ]);

        $post = new ProjectCategory;
        $post->category = $request->get('category');
        
        $post->save();

        return redirect('/admin/projectcategory')->with('success', 'Project Category Added Successfully');
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
        $data = ProjectCategory::find($id);
        return view('admin.projectcategory.editprojectcat', compact('data'));
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
        $post = ProjectCategory::find($id);
        $post->category = $request->get('category');
        
        $post->save();
        return redirect('/admin/projectcategory')->with('success', 'Project Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ProjectCategory::find($id);
    
        if ($data) {
            $data->delete();
            return redirect()->back()->with('success', 'Your Project Category Has Been Deleted Successfully!');
        }
    
        return redirect()->back()->with('error', 'Project Category not found!');
    }
}
