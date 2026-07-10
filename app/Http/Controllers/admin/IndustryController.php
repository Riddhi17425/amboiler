<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use App\Models\Product;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function index()
    {
        $data = Industry::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.industry.industrylisting', compact('data'));
    }

    public function create()
    {   
        $product = Product::wherenull('deleted_at')->get();
        return view('admin.industry.addindustry',compact('product'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'short_description'=> 'required',
            'sub_title'=> 'required',
            'description' => 'required',
            'alt'=> 'required',
        ], [
            'title.required' => 'Please Enter the name.',
            'short_description.required'=> 'Please Enter the short description.',
            'sub_title.required'=> 'Please Enter the sub title.',
            'description.required'=> 'Please Enter the description.',
            'alt.required'=> 'Please Enter the designation.',
        ]);

        $post = new Industry;
        $post->product_id = $request->get('product_id');
        $post->title = $request->get('title');
        $post->short_description = $request->get('short_description');
        $post->sub_title = $request->get('sub_title');
        $post->description = $request->get('description');
        $post->industry_pro_title = $request->get('industry_pro_title');
        $post->industry_pro_desc = $request->get('industry_pro_desc');  
        $post->alt = $request->get('alt');

        if($request->hasFile('home_image')) {
            $file = $request->file('home_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/industry_home_image');
            $file->move($path, $filename);
            $post->home_image = $filename;
        }

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/industry_image');
            $file->move($path, $filename);
            $post->image = $filename;
        }  
        if($request->hasFile('industry_pro_image')) {
            $file = $request->file('industry_pro_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/industry_pro_image');
            $file->move($path, $filename);
            $post->industry_pro_image = $filename;
        }  

        $post->save();

        return redirect('/admin/industry')->with('success', 'Industry Added Successfully');
    }

    public function edit($id)
    {
        $data = Industry::find($id);
        $product = Product::wherenull('deleted_at')->get();
        return view('admin.industry.editindustry', compact('data','product'));
    }

    public function update(Request $request, $id)
    {
        $post = Industry::find($id);
        $post->product_id = $request->get('product_id');
        $post->title = $request->get('title');
        $post->short_description = $request->get('short_description');
        $post->sub_title = $request->get('sub_title');
        $post->description = $request->get('description');
        $post->industry_pro_title = $request->get('industry_pro_title');
        $post->industry_pro_desc = $request->get('industry_pro_desc');
        $post->alt = $request->get('alt');

        if($request->hasFile('home_image')) {
            $file = $request->file('home_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/industry_home_image');
            $file->move($path, $filename);
            $post->home_image = $filename;
        }
     
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/industry_image');
            $file->move($path, $filename);
            $post->image = $filename;
        }
        
        if($request->hasFile('industry_pro_image')) {
            $file = $request->file('industry_pro_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/industry_pro_image');
            $file->move($path, $filename);
            $post->industry_pro_image = $filename;
        }

        $post->save();
        return redirect('/admin/industry')->with('success', 'Industry Updated Successfully');
    }

    public function destroy($id)
    {
        $data = Industry::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your Industry Has Been Deleted Successfully!');
        }
        return redirect()->back()->with('error', 'Industry not found!');
    }
}