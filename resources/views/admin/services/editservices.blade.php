@extends('admin.layouts.app')

@section('title', 'Edit Services')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Edit Services</h3>
            </div>
        </div>
    </div>
        <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('services.update', $data->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $data->id }}" />

            <div class="col-xl-12 col-lg-8">
                <div class="card mb-3 p-3">
                    <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold">Services Information</h6>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-6">
                            <label class="form-label">With or Without Category</label>
                            <select name="withorwithout" id="withorwithout" class="form-control">
                                <option value="">Select</option>
                                <option value="with" {{ $data->category_id ? 'selected' : '' }}>With Category</option>
                                <option value="without" {{ !$data->category_id ? 'selected' : '' }}>Without Category</option>
                            </select>
                        </div>
                        
                        <div class="col-md-6" id="categoryDropdown">
                            <label class="form-label">Category</label>
                            <select name="category_id" class="form-control">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $data->category_id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label">Product Name</label>
                            <input type="text" id="product_name" name="product_name"  value="{{ $data->product_name }}" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="product_description" class="form-label">Product Description</label>
                            <textarea id="product_description" name="product_description" class="form-control">{{$data->product_description}}</textarea>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold">Image</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label" for="input-file-front">Image Upload</label>
                                        <input type="file" id="input-file-front" name="product_image" class="dropify"  
                                            data-default-file="{{ asset('public/services/product/' . $data->product_image) }}">
                                    </div>
                                    @if ($errors->has('product_image'))
                                    <span class="text-danger">{{ $errors->first('product_image') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold">Service Home Image</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label" for="input-file-front">Image Upload</label>
                                        <input type="file" id="input-file-front" name="service_home_image" class="dropify"  
                                            data-default-file="{{ asset('public/services/service_home_image/' . $data->service_home_image) }}">
                                    </div>
                                    @if ($errors->has('service_home_image'))
                                    <span class="text-danger">{{ $errors->first('service_home_image') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold">Header Image</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label" for="input-file-front">Header Image Upload</label>
                                        <input type="file" id="input-file-front" name="header_image" class="dropify"  
                                            data-default-file="{{ asset('public/services/header/' . $data->header_image) }}">
                                    </div>
                                    @if ($errors->has('header_image'))
                                    <span class="text-danger">{{ $errors->first('header_image') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold">Service Image</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label" for="input-file-front">Service Image Upload</label>
                                        <input type="file" id="input-file-front" name="service_image" class="dropify"  
                                            data-default-file="{{ asset('public/services/service/' . $data->service_image) }}">
                                    </div>
                                    @if ($errors->has('service_image'))
                                    <span class="text-danger">{{ $errors->first('service_image') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="banner_title">Banner Title</label>
                            <input type="text" id="banner_title" name="banner_title" value="{{ $data->banner_title }}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Main Title</label>
                            <input type="text" id="main_title" name="main_title"  value="{{ $data->main_title }}" class="form-control">
                        </div>
                        <!--<div class="col-md-6">-->
                        <!--    <label for="dtextate" class="form-label">Footer Title</label>-->
                        <!--    <input type="text" id="footer_title" name="footer_title" value="{{ $data->footer_title }}" class="form-control">-->
                        <!--</div>-->
                        <div class="col-md-12">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" class="form-control">{{$data->description}}</textarea>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="cta_title">CTA Title</label>
                            <input type="text" id="cta_title" name="cta_title" value="{{ $data->cta_title }}" class="form-control">
                        </div>
                       <div class="col-md-12">
                            <label for="cta_description" class="form-label">CTA Description</label>
                            <textarea id="cta_description" name="cta_description" class="form-control">{{ $data->cta_description }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"> Url</label>
                            <input type="text" id="url" name="url" value="{{ $data->url }}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Meta Title</label>
                            <input type="text" id="meta_title" name="meta_title" value="{{ $data->meta_title }}" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea id="meta_description" name="meta_description" class="form-control">{{ $data->meta_description }}</textarea>
                        </div>
                        <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold">Slider Image And Title</h6>
                        </div>
                        <div>
                            @php
                                $sliders = $data->sliders;
                            @endphp

                            <div id="slider-container">
                                @if(!empty($sliders) && count($sliders) > 0)
                                    @foreach($sliders as $index => $slider)
                                        <div class="slider-group border p-3 mb-3 position-relative">
                                            <input type="hidden" name="old_slider_image[]" value="{{ $slider['image'] ?? '' }}">
                            
                                            <div class="mb-3">
                                                <label class="form-label">Slider Image</label>
                                                <input type="file" name="slider_image[]" class="form-control dropify"
                                                       data-default-file="{{ asset('public/services/sliders/' . $slider['image']) }}">
                                            </div>
                            
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Slider Title</label>
                                                    <input type="text" name="slider_text[]" class="form-control"
                                                           value="{{ $slider['text'] ?? '' }}">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Alt Tag</label>
                                                    <input type="text" name="alt_tag[]" class="form-control"
                                                           value="{{ $slider['alt_tag'] ?? '' }}">
                                                </div>
                                            </div>
                            
                                            <div class="col-md-12 mt-2">
                                                <button type="button" class="btn btn-success add-btn">Add</button>
                                                <button type="button" class="btn btn-danger remove-btn">Remove</button>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="slider-group border p-3 mb-3 position-relative">
                                        <div class="mb-3">
                                            <label class="form-label">Slider Image</label>
                                            <input type="file" name="slider_image[]" class="form-control">
                                        </div>
                            
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Slider Title</label>
                                                <input type="text" name="slider_text[]" class="form-control">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Alt Tag</label>
                                                <input type="text" name="alt_tag[]" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-12 mt-2">
                                            <button type="button" class="btn btn-success add-btn">Add</button>
                                            <button type="button" class="btn btn-danger remove-btn" disabled>Remove</button>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            @php
                                $section1 = $data->section1 ?? [];
                                $section2 = $data->section2 ?? [];
                                $section3 = $data->section3 ?? [];
                            @endphp

                            {{-- Section 1 --}}
                            <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold">Section 1</h6>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Title</label>
                                <input type="text" name="section1_title" class="form-control" value="{{ $section1['title'] ?? '' }}">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Description</label>
                                <textarea id="section1_description" name="section1_description" class="form-control">{{ $section1['description'] ?? '' }}</textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Image</label>
                                <input type="file" name="section1_image" class="dropify"
                                    data-default-file="{{ isset($section1['image']) ? asset('public/services/section1/' . $section1['image']) : '' }}">
                            </div>

                            {{-- Section 2 --}}
                            <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold">Section 2</h6>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Title</label>
                                <input type="text" name="section2_title" class="form-control" value="{{ $section2['title'] ?? '' }}">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Description</label>
                                <textarea id="section2_description" name="section2_description" class="form-control">{{ $section2['description'] ?? '' }}</textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Image</label>
                                <input type="file" name="section2_image" class="dropify"
                                    data-default-file="{{ isset($section2['image']) ? asset('public/services/section2/' . $section2['image']) : '' }}">
                            </div>

                            {{-- Section 3 --}}
                            <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold">Section 3</h6>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Title</label>
                                <input type="text" name="section3_title" class="form-control" value="{{ $section3['title'] ?? '' }}">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Description</label>
                                <textarea id="section3_description" name="section3_description" class="form-control">{{ $section3['description'] ?? '' }}</textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Image</label>
                                <input type="file" name="section3_image" class="dropify"
                                    data-default-file="{{ isset($section3['image']) ? asset('public/services/section3/' . $section3['image']) : '' }}">
                            </div>
                            
                            
                        </div>    
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
        </form>
    </div>
</div>
@endsection

@push('styles')
<!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<!-- Dropify CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify/dist/css/dropify.min.css">
@endpush

@push('scripts')
<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<!-- Dropify JS -->
<script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>

<script>
$(document).ready(function() {
    $('.dropify').dropify();
    $('#description,#cta_description,#product_description').summernote({
        placeholder: 'Enter Description here...',
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['fullscreen', 'codeview']],
            ['help', ['help']]
        ]
    });
    $('#section1_description,#section2_description,#section3_description').summernote({
        placeholder: 'Enter Description here...',
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['fullscreen', 'codeview']],
            ['help', ['help']]
        ]
    });
    $('#short_description',).summernote({
        placeholder: 'Enter News Short Description here...',
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['fullscreen', 'codeview']],
            ['help', ['help']]
        ]
    });
    $('#detail_description').summernote({
        placeholder: 'Enter News Short Description here...',
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['fullscreen', 'codeview']],
            ['help', ['help']]
        ]
    });
    
    $('#cta_image_text').summernote({
        placeholder: 'Enter News CTA Description here...',
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['fullscreen', 'codeview']],
            ['help', ['help']]
        ]
    });
    $('#conclusion').summernote({
        placeholder: 'Enter Conclusion  here...',
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['fullscreen', 'codeview']],
            ['help', ['help']]
        ]
    });
    $('#meta_description').summernote({
        placeholder: 'Enter Meta Description here...',
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['fullscreen', 'codeview']],
            ['help', ['help']]
        ]
    });
});
</script>
<script>
    $(document).ready(function () {
        function getSliderHtml() {
            return `
            <div class="slider-group border p-3 mb-3 position-relative">
                <div class="mb-3">
                    <label class="form-label">Slider Image</label>
                    <input type="file" name="slider_image[]" class="form-control">
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Slider Title</label>
                        <input type="text" name="slider_text[]" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Alt Tag</label>
                        <input type="text" name="alt_tag[]" class="form-control">
                    </div>
                </div>

                <div class="col-md-12 mt-2">
                    <button type="button" class="btn btn-success add-btn">Add</button>
                    <button type="button" class="btn btn-danger remove-btn">Remove</button>
                </div>
            </div>`;
        }

        // Add new slider
        $('#slider-container').on('click', '.add-btn', function () {
            $('#slider-container').append(getSliderHtml());
        });

        // Remove slider
        $('#slider-container').on('click', '.remove-btn', function () {
            if ($('.slider-group').length > 1) {
                $(this).closest('.slider-group').remove();
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#withorwithout').on('change', function () {
            if ($(this).val() === 'without') {
                $('#categoryDropdown').hide();
                $('#categoryDropdown select').val('');
            } else {
                $('#categoryDropdown').show();
            }
        });

        // Trigger initially based on pre-filled value
        $('#withorwithout').trigger('change');
    });
</script>


@endpush