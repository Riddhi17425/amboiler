<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $data = Services::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.services.servicesindex', compact('data'));
    }

    public function create()
    {
        $categories = ServiceCategory::all();
        return view('admin.services.addservices',compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'banner_title' => 'nullable|string|max:255',
        ]);
        
        $productImagePath = null;
        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/services/product');
            $file->move($path, $filename);
            $productImagePath = $filename;
        }
        
        $headerImagePath = null;
        if ($request->hasFile('header_image')) {
            $file = $request->file('header_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/services/header');
            $file->move($path, $filename);
            $headerImagePath = $filename;
        }
        
        $servicehomeImagePath = null;
        if ($request->hasFile('service_home_image')) {
            $file = $request->file('service_home_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/services/service_home_image');
            $file->move($path, $filename);
            $servicehomeImagePath = $filename;
        }
        
        $serviceImagePath = null;
        if ($request->hasFile('service_image')) {
            $file = $request->file('service_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/services/service');
            $file->move($path, $filename);
            $serviceImagePath = $filename;
        }

        // Handle banner image upload
        $bannerImagePath = null;
        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/services/banner');
            $file->move($path, $filename);
            $bannerImagePath =  $filename;
        }

        // Handle Slider JSON array
        $sliders = [];
        if ($request->hasFile('slider_image')) {
            foreach ($request->file('slider_image') as $index => $file) {
                $originalName = $file->getClientOriginalName();
                $filename = $originalName;
                $path = public_path('/services/sliders');
                $file->move($path, $filename);
                $sliders[] = [
                    'image' => $filename,
                    'text' => $request->slider_text[$index] ?? '',
                    'alt_tag' => $request->alt_tag[$index] ?? ''
                ];
            }
        }

        $section1ImagePath = null;
        if ($request->hasFile('section1_image')) {
            $file = $request->file('section1_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/services/section1');
            $file->move($path, $filename);
            $section1ImagePath =  $filename;
        }
        $section2ImagePath = null;
        if ($request->hasFile('section2_image')) {
            $file = $request->file('section2_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/services/section2');
            $file->move($path, $filename);
            $section2ImagePath =  $filename;
        }
        $section3ImagePath = null;
        if ($request->hasFile('section3_image')) {
            $file = $request->file('section3_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/services/section3');
            $file->move($path, $filename);
            $section3ImagePath =  $filename;
        }

        $section1 = [
            'title' => $request->input('section1_title'),
            'description' => $request->input('section1_description'),
            'image' => $section1ImagePath,
        ];
        $section2 = [
            'title' => $request->input('section2_title'),
            'description' => $request->input('section2_description'),
            'image' => $section2ImagePath,
        ];
        $section3 = [
            'title' => $request->input('section3_title'),
            'description' => $request->input('section3_description'),
            'image' => $section3ImagePath,
        ];

        Services::create([
            'category_id' => $request->category_id,
            'banner_title' => $request->banner_title,
            'main_title' => $request->main_title,
            'footer_title' => $request->footer_title,
            'description' => $request->description,
            'withorwithout' => $request->withorwithout,
            'cta_title' => $request->cta_title,
            'cta_description' => $request->cta_description,
            'url' => $request->url,
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'product_image' => $productImagePath,
            'banner_image' => $bannerImagePath,
            'sliders' =>  $sliders,
            'section1' => $section1,
            'section2' => $section2,
            'section3' => $section3,
            'header_image' =>  $headerImagePath,
            'service_image' => $serviceImagePath,
            'service_home_image' => $servicehomeImagePath,
        ]);

        return redirect('/admin/services')->with('success', 'Services Added Successfully');
    }

    public function edit($id)
    {
        $categories = ServiceCategory::all();
        $data = Services::find($id);
        return view('admin.services.editservices', compact('data','categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'banner_title' => 'nullable|string|max:255',
        ]);
    
        $service = Services::findOrFail($id);
        
        $productImagePath = $service->product_image;
        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/services/product');
            $file->move($path, $filename);
            $productImagePath = $filename;
        }
        
        $headerImagePath = $service->header_image;
        if ($request->hasFile('header_image')) {
            $file = $request->file('header_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/services/header');
            $file->move($path, $filename);
            $headerImagePath = $filename;
        }
        
        $serviceImagePath = $service->service_image;
        if ($request->hasFile('service_image')) {
            $file = $request->file('service_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/services/service');
            $file->move($path, $filename);
            $serviceImagePath = $filename;
        }
        
         $servicehomeImagePath = $service->service_home_image;
        if ($request->hasFile('service_home_image')) {
            $file = $request->file('service_home_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/services/service_home_image');
            $file->move($path, $filename);
            $servicehomeImagePath = $filename;
        }

        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/services/banner');
            $file->move($path, $filename);
            $bannerImagePath = $filename;
        }
        
        // === Update Banner Image ===
        $bannerImagePath = $service->banner_image;
        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/services/banner');
            $file->move($path, $filename);
            $bannerImagePath = $filename;
        }
        
        // === Update Slider Images ===
        $sliders = [];
        $sliderImages = $request->file('slider_image', []);
        $oldSliderImages = $request->old_slider_image ?? [];
        $sliderTexts = $request->slider_text ?? [];
        $altTags = $request->alt_tag ?? [];
    
        $total = max(count($sliderTexts), count($altTags), count($oldSliderImages), count($sliderImages));
    
        for ($i = 0; $i < $total; $i++) {
            if (isset($sliderImages[$i])) {
                $file = $sliderImages[$i];
                $filename = $file->getClientOriginalName();
                $path = public_path('/services/sliders');
                $file->move($path, $filename);
                $image = $filename;
            } else {
                $image = $oldSliderImages[$i] ?? null;
            }
    
            if ($image) {
                $sliders[] = [
                    'image' => $image,
                    'text' => $sliderTexts[$i] ?? '',
                    'alt_tag' => $altTags[$i] ?? '',
                ];
            }
        }
    
        // === Section 1 ===
        $section1 = $service->section1 ?? [];
        if ($request->hasFile('section1_image')) {
            $file = $request->file('section1_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/services/section1');
            $file->move($path, $filename);
            $section1['image'] = $filename;
        }
        $section1['title'] = $request->input('section1_title');
        $section1['description'] = $request->input('section1_description');
    
        // === Section 2 ===
        $section2 = $service->section2 ?? [];
        if ($request->hasFile('section2_image')) {
            $file = $request->file('section2_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/services/section2');
            $file->move($path, $filename);
            $section2['image'] = $filename;
        }
        $section2['title'] = $request->input('section2_title');
        $section2['description'] = $request->input('section2_description');
    
        // === Section 3 ===
            $section3 = $service->section3 ?? [];

            if (!$request->hasFile('section3_image')) {
                $section3['image'] = null;  
            } else {
                
                $file = $request->file('section3_image');
                $filename = $file->getClientOriginalName();
                $path = public_path('/services/section3');
                $file->move($path, $filename);
                $section3['image'] = $filename;
            }
            
            
            $section3['title'] = $request->input('section3_title') ?: null;
            $section3['description'] = $request->input('section3_description') ?: null;
            
            
            if (!$section3['title'] && !$section3['description']) {
                $section3 = null; 
            }
      
    
        // === Update the service ===
        $service->update([
            'category_id' => $request->category_id,
            'banner_title' => $request->banner_title,
            'header_image' =>  $headerImagePath,
            'service_image' => $serviceImagePath,
            'main_title' => $request->main_title,
            'footer_title' => $request->footer_title,
            'description' => $request->description,
            'withorwithout' => $request->withorwithout,
            'cta_title' => $request->cta_title,
            'cta_description' => $request->cta_description,
            'url' => $request->url,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_image' => $productImagePath,
            'banner_image' => $bannerImagePath,
            'service_home_image' => $servicehomeImagePath,
            'sliders' => $sliders,
            'section1' => $section1,
            'section2' => $section2,
            'section3' => $section3,
        ]);
    
        return redirect('/admin/services')->with('success', 'Services Updated Successfully');
    }

    public function destroy($id)
    {
        $data = Services::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your Services Has Been Deleted Successfully!');
        }
        return redirect()->back()->with('error', 'Services not found!');
    }
}