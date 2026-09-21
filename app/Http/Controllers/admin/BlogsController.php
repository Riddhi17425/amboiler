<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $data = Blogs::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.blogs.index', compact('data'));
    }

    public function create() 
    {
        $statuses = Blogs::statusOptions();
        return view('admin.blogs.add', compact('statuses'));
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'status' => 'required|in:' . implode(',', Blogs::statusOptions()),
        ], [
            'title.required' => 'Please Enter the Blogs title.',
            'status.required' => 'Please select the blog status.',
        ]);

        $post = new Blogs;
        $post->title = $request->get('title');
        $post->status = $request->get('status', Blogs::STATUS_ACTIVE);
        $post->date = date('Y-m-d', strtotime($request->input('date')));
        $post->short_description = $request->get('short_description');
        $post->description = $request->get('description');
        $post->detail_description = $request->get('detail_description');
        $post->cta_image_text = $request->get('cta_image_text');
        $post->conclusion = $request->get('conclusion');
        $post->url = $request->get('url');
        $post->alt = $request->get('alt');
        $post->meta_title = $request->get('meta_title');
        $post->meta_description = $request->get('meta_description');
        $post->front_image_alt = $request->get('front_image_alt');
        $post->detail_image_alt = $request->get('detail_image_alt');
        $post->lower_banner_alt = $request->get('lower_banner_alt');
       
 
        if($request->hasFile('detail_image')) {
            $file = $request->file('detail_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('blogs/detail_image');
            $file->move($path, $filename);
            $post->detail_image = $filename;
        }  

        if($request->hasFile('front_image')) {
            $file = $request->file('front_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('blogs/front_image');
            $file->move($path, $filename);
            $post->front_image = $filename;
        } 
        if($request->hasFile('lower_banner')) {
            $file = $request->file('lower_banner');
            $filename = $file->getClientOriginalName();
            $path = public_path('blogs/lower_banner');
            $file->move($path, $filename);
            $post->lower_banner = $filename;
        } 
        
        $post->save();

        return redirect('/admin/blog')->with('success', 'News Added Successfully');
    }

    public function edit($id)
    {
        $data = Blogs::find($id);
        $statuses = Blogs::statusOptions();
        return view('admin.blogs.edit', compact('data', 'statuses'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required|in:' . implode(',', Blogs::statusOptions()),
        ], [
            'title.required' => 'Please Enter the Blogs title.',
            'status.required' => 'Please select the blog status.',
        ]);

        $post = Blogs::find($id);
        $post->title = $request->get('title'); 
        $post->status = $request->get('status', Blogs::STATUS_ACTIVE);
        $post->description = $request->get('description');
        $post->detail_description = $request->get('detail_description');
        $post->short_description = $request->get('short_description');
        $post->date = date('Y-m-d', strtotime($request->input('date')));
        $post->cta_image_text = $request->get('cta_image_text');
        $post->conclusion = $request->get('conclusion');
        $post->url = $request->get('url');
        $post->alt = $request->get('alt');
        $post->meta_title = $request->get('meta_title');
        $post->meta_description = $request->get('meta_description');
        $post->front_image_alt = $request->get('front_image_alt');
        $post->detail_image_alt = $request->get('detail_image_alt');
        $post->lower_banner_alt = $request->get('lower_banner_alt');
       
        if($request->hasFile('detail_image')) {
            $file = $request->file('detail_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('blogs/detail_image');
            $file->move($path, $filename);
            $post->detail_image = $filename;
        }  

        if($request->hasFile('front_image')) {
            $file = $request->file('front_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('blogs/front_image');
            $file->move($path, $filename);
            $post->front_image = $filename;
        } 
        if($request->hasFile('lower_banner')) {
            $file = $request->file('lower_banner');
            $filename = $file->getClientOriginalName();
            $path = public_path('blogs/lower_banner');
            $file->move($path, $filename);
            $post->lower_banner = $filename;
        } 

       $post->save();
        return redirect('/admin/blog')->with('success', 'News Updated Successfully');
    }

    public function destroy($id)
    {
        $data = Blogs::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your News Has Been Deleted Successfully!');
        }
        return redirect()->back()->with('error', 'News not found!');
    }
}