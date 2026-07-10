<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Certificate::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.certificates.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.certificates.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg',
            'pdf' => 'nullable|mimes:pdf|max:2048',
        ], [
            'title.required' => 'Please Enter the title.',
            'thumbnail.required' => 'Please upload the thumbnail.',
            'pdf.required' => 'Please upload the pdf.',
        ]);

        $post = new Certificate;
        $post->title = $request->get('title');
        $post->alt_tag = $request->get('alt_tag');

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = $file->getClientOriginalName(); 
            $path = public_path('/certificates/thumbnail');

            if (!File::exists($path)) {
                File::makeDirectory($path, 0755, true); 
            }

            $file->move($path, $filename);
            $post->thumbnail = $filename;
        }
        if ($request->hasFile('pdf')) {
            $pdfFile = $request->file('pdf');
            $pdfFilename = $pdfFile->getClientOriginalName();
            $pdfPath = public_path('/certificates/pdf');
        
            if (!File::exists($pdfPath)) {
                File::makeDirectory($pdfPath, 0755, true);
            }
        
            $pdfFile->move($pdfPath, $pdfFilename);
            $post->pdf = $pdfFilename;
        }

        $post->save();

        return redirect('/admin/certificates')->with('success', 'Certificate Added Successfully');
    }
    public function show($id)
    {
        $data = Certificate::findOrFail($id);
        return view('admin.certificates.index', compact('data'));
    }
    public function edit($id)
    {
        $data = Certificate::find($id);
        return view('admin.certificates.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $post = Certificate::find($id);
        $post->title = $request->get('title');
        $post->alt_tag = $request->get('alt_tag');
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = $file->getClientOriginalName();
            $path = public_path('/certificates/thumbnail');

            if (!File::exists($path)) {
                File::makeDirectory($path, 0755, true); 
            }

            $file->move($path, $filename);
            $post->thumbnail = $filename;
        }
        if ($request->hasFile('pdf')) {
            $pdfFile = $request->file('pdf');
            $pdfFilename = $pdfFile->getClientOriginalName();
            $pdfPath = public_path('/certificates/pdf');

            if (!File::exists($pdfPath)) {
                File::makeDirectory($pdfPath, 0755, true);
            }
        
            $pdfFile->move($pdfPath, $pdfFilename);
            $post->pdf = $pdfFilename;
        }

        $post->save();  
        return redirect('/admin/certificates')->with('success', 'Awards Updated Successfully');
    }

    public function destroy($id)
    {
        $data = Certificate::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your Awards Has Been Deleted Successfully!');
        }
        return redirect()->back()->with('error', 'Awards not found!');
    }
}
