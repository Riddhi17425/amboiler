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

                            {{-- ============================================================ --}}
                            {{-- DYNAMIC SECTIONS (unlimited, Add More / Remove)                --}}
                            {{-- Fallback: agar naya `sections` column khaali hai (purana data   --}}
                            {{-- section1/section2/section3 me hai), to usse yahin convert       --}}
                            {{-- karke dikha rahe hain taaki purani services bhi turant dikhein.  --}}
                            {{-- ============================================================ --}}
                            @php
                                $sections = $data->sections;
                                if (empty($sections)) {
                                    $sections = [];
                                    foreach (['section1', 'section2', 'section3'] as $legacyKey) {
                                        $legacy = $data->{$legacyKey} ?? null;
                                        if (!empty($legacy) && (!empty($legacy['title']) || !empty($legacy['description']) || !empty($legacy['image']))) {
                                            $sections[] = [
                                                'title'        => $legacy['title'] ?? '',
                                                'description'  => $legacy['description'] ?? '',
                                                'image'        => $legacy['image'] ?? null,
                                                'alt_text'     => $legacy['alt_text'] ?? '',
                                                'header_image' => null,
                                            ];
                                        }
                                    }
                                }
                                if (empty($sections)) {
                                    // guarantee at least one empty section block shows up
                                    $sections = [[
                                        'title' => '', 'description' => '', 'image' => null,
                                        'alt_text' => '', 'header_image' => null,
                                    ]];
                                }
                            @endphp

                            <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold">Sections</h6>
                            </div>

                            <div id="section-container">
                                @foreach($sections as $index => $section)
                                    <div class="row section-group border rounded p-3 mb-3 mx-0">
                                        <div class="col-md-12">
                                            <span class="badge bg-secondary mb-2 section-number">Section {{ $index + 1 }}</span>
                                        </div>

                                        <input type="hidden" name="old_section_image[]" value="{{ $section['image'] ?? '' }}">
                                        <input type="hidden" name="old_section_header_image[]" value="{{ $section['header_image'] ?? '' }}">

                                        <div class="col-md-12">
                                            <label class="form-label">Title</label>
                                            <input type="text" name="section_title[]" class="form-control" value="{{ $section['title'] ?? '' }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Description</label>
                                            <textarea name="section_description[]" class="form-control section-editor">{{ $section['description'] ?? '' }}</textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Image</label>
                                            <input type="file" name="section_image[]" class="form-control dropify"
                                                data-default-file="{{ !empty($section['image']) ? asset('public/services/section/' . $section['image']) : '' }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Image Alt Text</label>
                                            <input type="text" name="section_alt_text[]" class="form-control" value="{{ $section['alt_text'] ?? '' }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Header Image</label>
                                            <input type="file" name="section_header_image[]" class="form-control dropify"
                                                data-default-file="{{ !empty($section['header_image']) ? asset('public/services/section_header/' . $section['header_image']) : '' }}">
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <button type="button" class="btn btn-success section-add-btn">Add More</button>
                                            <button type="button" class="btn btn-danger section-remove-btn" {{ count($sections) <= 1 ? 'disabled' : '' }}>Remove</button>
                                        </div>
                                    </div>
                                @endforeach
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
function summernoteToolbar() {
    return [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        ['fontname', ['fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['insert', ['link', 'picture', 'hr']],
        ['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
    ];
}

$(document).ready(function() {
    $('.dropify').dropify();

    $('#description,#cta_description,#product_description').summernote({
        placeholder: 'Enter Description here...',
        height: 300,
        toolbar: summernoteToolbar()
    });
    $('#meta_description').summernote({
        placeholder: 'Enter Meta Description here...',
        height: 300,
        toolbar: summernoteToolbar()
    });

    // Init summernote on every existing section's description (edit page can have many)
    $('.section-editor').each(function () {
        $(this).summernote({
            placeholder: 'Enter Section Description here...',
            height: 250,
            toolbar: summernoteToolbar()
        });
    });
});
</script>

<script>
    // ---- Slider Image And Title (unchanged) ----
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

        $('#slider-container').on('click', '.add-btn', function () {
            $('#slider-container').append(getSliderHtml());
        });

        $('#slider-container').on('click', '.remove-btn', function () {
            if ($('.slider-group').length > 1) {
                $(this).closest('.slider-group').remove();
            }
        });
    });
</script>

<script>
    // ---- DYNAMIC SECTIONS: Add More / Remove ----
    $(document).ready(function () {
        function renumberSections() {
            $('#section-container .section-group').each(function (index) {
                $(this).find('.section-number').text('Section ' + (index + 1));
            });
        }

        function blankSectionHtml() {
            return `
            <div class="row section-group border rounded p-3 mb-3 mx-0">
                <div class="col-md-12">
                    <span class="badge bg-secondary mb-2 section-number">Section</span>
                </div>
                <input type="hidden" name="old_section_image[]" value="">
                <input type="hidden" name="old_section_header_image[]" value="">
                <div class="col-md-12">
                    <label class="form-label">Title</label>
                    <input type="text" name="section_title[]" class="form-control">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Description</label>
                    <textarea name="section_description[]" class="form-control section-editor"></textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Image</label>
                    <input type="file" name="section_image[]" class="form-control dropify">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Image Alt Text</label>
                    <input type="text" name="section_alt_text[]" class="form-control">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Header Image</label>
                    <input type="file" name="section_header_image[]" class="form-control dropify">
                </div>
                <div class="col-md-12 mt-2">
                    <button type="button" class="btn btn-success section-add-btn">Add More</button>
                    <button type="button" class="btn btn-danger section-remove-btn">Remove</button>
                </div>
            </div>`;
        }

        $(document).on('click', '.section-add-btn', function () {
            var $newGroup = $(blankSectionHtml());
            $('#section-container').append($newGroup);

            $newGroup.find('.dropify').dropify();
            $newGroup.find('.section-editor').summernote({
                placeholder: 'Enter Section Description here...',
                height: 250,
                toolbar: summernoteToolbar()
            });

            $('#section-container .section-remove-btn').prop('disabled', false);
            renumberSections();
        });

        $(document).on('click', '.section-remove-btn', function () {
            var $groups = $('#section-container .section-group');
            if ($groups.length > 1) {
                $(this).closest('.section-group').find('.section-editor').summernote('destroy');
                $(this).closest('.section-group').remove();
                if ($('#section-container .section-group').length === 1) {
                    $('#section-container .section-remove-btn').prop('disabled', true);
                }
                renumberSections();
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

        $('#withorwithout').trigger('change');
    });
</script>

@endpush
