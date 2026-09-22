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
        return view('admin.services.addservices', compact('categories'));
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
            $bannerImagePath = $filename;
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

        // === Dynamic Sections (unlimited, replaces section1/section2/section3) ===
        $sections = $this->buildSectionsFromRequest($request);

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
            'sliders' => $sliders,
            'sections' => $sections,
            'header_image' => $headerImagePath,
            'service_image' => $serviceImagePath,
            'service_home_image' => $servicehomeImagePath,
        ]);

        return redirect('/admin/services')->with('success', 'Services Added Successfully');
    }

    public function edit($id)
    {
        $categories = ServiceCategory::all();
        $data = Services::find($id);
        return view('admin.services.editservices', compact('data', 'categories'));
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

        // === Dynamic Sections (unlimited, replaces section1/section2/section3) ===
        $sections = $this->buildSectionsFromRequest($request, keepOldOnNoFile: true);

        // === Update the service ===
        $service->update([
            'category_id' => $request->category_id,
            'banner_title' => $request->banner_title,
            'header_image' => $headerImagePath,
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
            'sections' => $sections,
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

    /**
     * Build the dynamic "sections" array from the submitted request.
     *
     * Reads section_title[], section_description[], section_alt_text[],
     * section_image[] (files) and section_header_image[] (files).
     * On update, old_section_image[] / old_section_header_image[] hidden
     * fields let us keep the previously uploaded file when no new file
     * was chosen for that particular row.
     */
    private function buildSectionsFromRequest(Request $request, bool $keepOldOnNoFile = false): array
    {
        $titles       = $request->input('section_title', []);
        $descriptions = $request->input('section_description', []);
        $altTexts     = $request->input('section_alt_text', []);
        $images       = $request->file('section_image', []);
        $headerImages = $request->file('section_header_image', []);
        $oldImages    = $request->input('old_section_image', []);
        $oldHeaderImages = $request->input('old_section_header_image', []);

        $total = count($titles);
        $sections = [];

        for ($i = 0; $i < $total; $i++) {
            // skip a totally empty row (no title/description/files) so blank
            // "Add More" rows that were never filled in don't get saved
            $hasTitle = !empty($titles[$i]);
            $hasDescription = !empty($descriptions[$i]);
            $hasImage = isset($images[$i]) && $images[$i];
            $hasOldImage = $keepOldOnNoFile && !empty($oldImages[$i]);

            if (!$hasTitle && !$hasDescription && !$hasImage && !$hasOldImage) {
                continue;
            }

            // section image
            if (isset($images[$i]) && $images[$i]) {
                $file = $images[$i];
                $imageName = $file->getClientOriginalName();
                $file->move(public_path('/services/section'), $imageName);
            } else {
                $imageName = $keepOldOnNoFile ? ($oldImages[$i] ?? null) : null;
            }

            // section header image
            if (isset($headerImages[$i]) && $headerImages[$i]) {
                $file = $headerImages[$i];
                $headerImageName = $file->getClientOriginalName();
                $file->move(public_path('/services/section_header'), $headerImageName);
            } else {
                $headerImageName = $keepOldOnNoFile ? ($oldHeaderImages[$i] ?? null) : null;
            }

            $sections[] = [
                'title'        => $titles[$i] ?? '',
                'description'  => $descriptions[$i] ?? '',
                'image'        => $imageName,
                'alt_text'     => $altTexts[$i] ?? '',
                'header_image' => $headerImageName,
            ];
        }

        return $sections;
    }
}
