@extends('admin.layouts.app')

@section('title', 'Edit Project')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Edit Project</h3>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('project.update', $data->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $data->id }}" />

            <div class="col-xl-12 col-lg-8">
                <div class="card mb-3 p-3">
                    <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold">Project Information</h6>
                    </div>
                    <div class="row g-3 align-items-center">
    
                        <div class="col-md-6">
                            <label class="form-label">Title</label>
                            <input type="text" id="title" name="title" value="{{ $data->title }}"
                                class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Projectcategory Id</label>
                            <select name="projectcategory_id" class="form-control">
                                <option value="">Select Projectcategory</option>
                                @foreach ($projectcategory as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $data->projectcategory_id ? 'selected' : '' }}>
                                        {{ $category->category }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Location</label>
                            <input type="text" id="location" name="location" value="{{ $data->location }}"
                                class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date</label>
                            <input type="date" id="date" name="date" value="{{ $data->date }}" 
                                class="form-control">
                        </div>
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold">Front Image</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label" for="input-file-front">Front Image Upload</label>
                                        <input type="file" id="input-file-front" name="front_image" class="dropify" 
                                            data-default-file="{{ asset('public/project_image/front/' . $data->front_image) }}">
                                    </div>
                                    @if ($errors->has('front_image'))
                                    <span class="text-danger">{{ $errors->first('front_image') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Meta Title</label>
                            <input type="text" id="meta_title" name="meta_title" value="{{ $data->meta_title }}"
                                class="form-control">
                        </div>
                        
                        <div class="col-md-12">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea id="meta_description" name="meta_description" class="form-control">{{ $data->meta_description }}</textarea>
                        </div>
                        {{-- <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold">Detail Image</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label" for="input-file-front">Detail Image Upload</label>
                                        <input type="file" id="input-file-front" name="detail_image[]" class="dropify" multiple
                                            data-default-file="{{ asset('public/project_image/detail/' . $data->detail_image) }}">
                                    </div>
                                    @if ($errors->has('detail_image'))
                                    <span class="text-danger">{{ $errors->first('detail_image') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div> --}}
<div class="col-md-12">
    <label class="form-label">Detail Images</label>
    <div id="imageInputs">
        @php
            $detailImages = json_decode($data->detail_image ?? '[]', true);

        @endphp

        @if (!empty($detailImages))
            @foreach ($detailImages as $index => $image)
                <div class="input-group mb-2">
                    {{-- Hidden input to preserve existing image filename --}}
                    <input type="hidden" name="existing_images[{{ $index }}]" value="{{ $image }}">
                    
                    {{-- File input with Dropify and preview --}}
                    <input type="file" name="detail_image[]" class="form-control dropify"
                        data-default-file="{{ asset('public/project_image/detail/' . $image) }}">
                    
                    {{-- Remove button --}}
                    <button type="button" class="btn btn-danger remove-btn" onclick="removeInput(this)">Remove</button>
                </div>
            @endforeach
        @else
            <div class="input-group mb-2">
                <input type="file" name="detail_image[]" class="form-control dropify">
                <button type="button" class="btn btn-danger remove-btn" onclick="removeInput(this)">Remove</button>
            </div>
        @endif
    </div>

    <button type="button" class="btn btn-primary mt-2" onclick="addImageInput()">Add More</button>
</div>
                        <div class="col-md-12">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" class="form-control">{{ $data->description }}</textarea>
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

<!-- Cropper CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">

<!-- Plugin CSS files -->
<link rel="stylesheet" href="{!! asset('public/admin_public/dist/assets/plugin/multi-select/css/multi-select.css') !!}">
<link rel="stylesheet"
    href="{!! asset('public/admin_public/dist/assets/plugin/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}">
<link rel="stylesheet" href="{!! asset('public/admin_public/dist/assets/plugin/dropify/dist/css/dropify.min.css') !!}">
<link rel="stylesheet"
    href="{!! asset('public/admin_public/dist/assets/plugin/datatables/responsive.dataTables.min.css') !!}">
<link rel="stylesheet"
    href="{!! asset('public/admin_public/dist/assets/plugin/datatables/dataTables.bootstrap5.min.css') !!}">
@endpush

@push('scripts')
<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<!-- Cropper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
<script src="{!! asset('public/admin_public/dist/assets/plugin/multi-select/js/jquery.multi-select.js') !!}"></script>
<script src="{!! asset('public/admin_public/dist/assets/plugin/bootstrap-tagsinput/bootstrap-tagsinput.js') !!}"></script>
<script src="{!! asset('public/admin_public/dist/assets/bundles/dropify.bundle.js') !!}"></script>
<script src="{!! asset('public/admin_public/dist/assets/bundles/dataTables.bundle.js') !!}"></script>

<script>
    $(document).ready(function() {
        $('.dropify').dropify();
        $('#description').summernote({
            placeholder: 'Enter process description here...',
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
            placeholder: 'Enter process description here...',
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
    function addImageInput() {
        const container = document.getElementById('imageInputs');
        const div = document.createElement('div');
        div.classList.add('input-group', 'mb-2');
        div.innerHTML = `
            <input type="file" name="detail_image[]" class="form-control">
            <button type="button" class="btn btn-danger remove-btn" onclick="removeInput(this)">Remove</button>
        `;
        container.appendChild(div);
    }

    function removeInput(button) {
        const container = document.getElementById('imageInputs');
        const inputs = container.querySelectorAll('.input-group');

        if (inputs.length > 1) {
            button.parentElement.remove();
        } else {
            alert("At least one image must remain.");
        }
    }
</script>
@endpush