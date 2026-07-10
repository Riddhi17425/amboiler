<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        
        $data = Faq::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.faq.faqlisting', compact('data'));
    }

    public function create()
    {   
        $blogs = Blogs::select('id', 'title')->get();
        return view('admin.faq.addfaq', compact('blogs'));
    }

    public function store(Request $request)
    {
      
        $validatedData = $request->validate([
            'blog_id' => 'nullable|exists:blogs,id',
            'title.*' => 'required|string',
            'description.*' => 'required|string',
            
        ], [
            'title.*.required' => 'Please enter the Faq title.',
            'description.*.required' => 'Please enter the Faq description.',
        ]);

        $post = new Faq;
        $post->blog_id = $request->get('blog_id');

        $titles = $request->get('title');
        $descriptions = $request->get('description');
        $title_description = [];
        foreach ($titles as $index => $title) {
            $title_description[] = [
                'title' => $title,
                'description' => $descriptions[$index],
            ];
        }
        $post->title_description = $title_description;
        
        $post->save();

        return redirect('/admin/faq')->with('success', 'Faq Added Successfully');
    }

    public function edit($id)
    {
        $data = Faq::findOrFail($id);
        $blogs = Blogs::select('id', 'title')->get();
        return view('admin.faq.editfaq', compact('data', 'blogs'));
    }
    

    public function update(Request $request, $id)
    {
        $post = Faq::find($id);
        
        // $post->faq_name = $request->get('faq_name');
        $post->blog_id = $request->get('blog_id');
        $titles = $request->get('title');
        $descriptions = $request->get('description');
        $title_description = [];
        foreach ($titles as $index => $title) {
            $title_description[] = [
                'title' => $title,
                'description' => $descriptions[$index],
            ];
        }
        $post->title_description = $title_description;
        $post->save();
        return redirect('/admin/faq')->with('success', 'Faq Updated Successfully');
    }

    public function destroy($id)
    {
        $data = Faq::find($id);
        if ($data) {
            $data->delete();
            return redirect()->back()->with('success', 'Your Faq Has Been Deleted Successfully!');
            }
            return redirect()->back()->with('error', 'Faq not found!');
    }
}