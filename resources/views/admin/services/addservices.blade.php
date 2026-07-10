@extends('admin.layouts.app')

@section('title', 'Services Add')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Services Add</h3>
            </div>
        </div>
    </div> <!-- Row end -->

    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('services.store') }}">
            @csrf
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
                            <option value="with">With Category</option>
                            <option value="without">Without Category</option>
                        </select>
                    </div>
                    
                    <div class="col-md-6" id="categoryDropdown">
                        <label class="form-label">Category</label>
                        <select name="category_id" class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                        <div class="col-md-6">
                            <label class="form-label">Product Name</label>
                            <input type="text" id="product_name" name="product_name" class="form-control">
                        </div>
                         <div class="col-md-12">
                            <label for="product_description" class="form-label">Product Description</label>
                            <textarea id="product_description" name="product_description" class="form-control"></textarea>
                        </div>
                         <div class="col-md-12">
                            <label for="product_image" class="form-label">Product Image</label>
                            <input type="file" id="product_image" name="product_image" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="service_home_image" class="form-label">Service Home Image</label>
                            <input type="file" id="service_home_image" name="service_home_image" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="service_image" class="form-label">Service Image</label>
                            <input type="file" id="service_image" name="service_image" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="detail_image">Banner Title</label>
                            <input type="text" id="banner_title" name="banner_title" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Main Title</label>
                            <input type="text" id="main_title" name="main_title" class="form-control">
                        </div>
                        
                        <div class="col-md-12">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="cta_title">CTA Title</label>
                            <input type="text" id="cta_title" name="cta_title" class="form-control">
                        </div>
                       <div class="col-md-12">
                            <label for="cta_description" class="form-label">CTA Description</label>
                            <textarea id="cta_description" name="cta_description" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"> Url</label>
                            <input type="text" id="url" name="url" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Meta Title</label>
                            <input type="text" id="meta_title" name="meta_title" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea id="meta_description" name="meta_description" class="form-control"></textarea>
                        </div>
                        <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold">Slider Image And Title</h6>
                        </div>
                        <div id="slider-container">
                            <div class="row slider-group">
                                <div class="col-md-12">
                                    <label for="slider_image_0" class="form-label">Slider Image</label>
                                    <input type="file" id="slider_image_0" name="slider_image[]" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="slider_text_0" class="form-label">Slider Title</label>
                                    <input type="text" id="slider_text_0" name="slider_text[]" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="alt_tag_0" class="form-label">Alt Tag</label>
                                    <input type="text" id="alt_tag_0" name="alt_tag[]" class="form-control">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <button type="button" class="btn btn-success add-btn">Add</button>
                                    <button type="button" class="btn btn-danger remove-btn" disabled>Remove</button>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold">Section 1</h6>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Title</label>
                            <input type="text" id="section1_title" name="section1_title" class="form-control">
                        </div>
                         <div class="col-md-12">
                            <label class="form-label" for="cta_title">Description</label>
                            <textarea id="section1_description" name="section1_description" class="form-control"></textarea>
                        </div>
                         <div class="col-md-12">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" id="image" name="section1_image" class="form-control">
                        </div>
                        <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold">Section 2</h6>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Title</label>
                            <input type="text" id="section2_title" name="section2_title" class="form-control">
                        </div>
                         <div class="col-md-12">
                            <label class="form-label" for="cta_title">Description</label>
                           <textarea id="section2_description" name="section2_description" class="form-control"></textarea>
                        </div>
                         <div class="col-md-12">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" id="image" name="section2_image" class="form-control">
                        </div>
                        <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold">Section 3</h6>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Title</label>
                            <input type="text" id="section3_title" name="section3_title" class="form-control">
                        </div>
                         <div class="col-md-12">
                            <label class="form-label" for="cta_title">Description</label>
                            <textarea id="section3_description" name="section3_description" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" id="image" name="section3_image" class="form-control">
                        </div>
                    
                        <div class="col-md-12">
                            <label for="header_image" class="form-label">Header Image</label>
                            <input type="file" id="header_image" name="header_image" class="form-control">
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

<!--plugin css file -->
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
<script src="{!! asset('public/admin_public/dist/assets/plugin/bootstrap-tagsinput/bootstrap-tagsinput.js') !!}">
</script>
<script src="{!! asset('public/admin_public/dist/assets/bundles/dropify.bundle.js') !!}"></script>
<script src="{!! asset('public/admin_public/dist/assets/bundles/dataTables.bundle.js') !!}"></script>


<script>
$(document).ready(function() {
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
    $('#meta_description,#product_description').summernote({
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
    $('#section1_description,#section2_description,#section3_description').summernote({
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

    var $modal = $('#modalCrop');
    var image = document.getElementById('image');
    var cropper;

    $("body").on("change", ".image", function(e) {
        var files = e.target.files;
        var done = function(url) {
            image.src = url;
            $modal.modal('show');
        };

        if (files && files.length > 0) {
            var reader = new FileReader();
            reader.onload = function(e) {
                done(reader.result);
            };
            reader.readAsDataURL(files[0]);
        }
    });

    $modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: 3 / 2,
            viewMode: 3,
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    $("#crop").click(function() {
        canvas = cropper.getCroppedCanvas({
            width: 400,
            height: 400,
        });

        canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                var base64data = reader.result;
                $modal.modal('hide');
                $('#cropped_image').val(base64data);
            };
        });
    });
});

$(document).ready(function() {
    ClassicEditor.create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });

    $('#myCartTable').addClass('nowrap').dataTable({
        responsive: true,
        columnDefs: [{
            targets: [-1, -3],
            className: 'dt-body-right'
        }]
    });

    $('.deleterow').on('click', function() {
        var tablename = $(this).closest('table').DataTable();
        tablename.row($(this).parents('tr')).remove().draw();
    });

    $('#optgroup').multiSelect({
        selectableOptgroup: true
    });
});

$(function() {
    $('.dropify').dropify();

    var drEvent = $('#dropify-event').dropify();
    drEvent.on('dropify.beforeClear', function(event, element) {
        return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
    });

    drEvent.on('dropify.afterClear', function(event, element) {
        alert('File deleted');
    });

    $('.dropify-fr').dropify({
        messages: {
            default: 'Glissez-déposez un fichier ici ou cliquez',
            replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
            remove: 'Supprimer',
            error: 'Désolé, le fichier trop volumineux'
        }
    });
});
document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.add-more').addEventListener('click', function() {
        let row = document.querySelector('.template').cloneNode(true);
        row.classList.remove('template');
        row.style.display = 'flex';
        document.querySelector('.wattage-price-container').appendChild(row);
    });

    document.querySelector('.wattage-price-container').addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-row')) {
            e.target.closest('.wattage-price-row').remove();
        }
    });
});
</script>
<script>
    let counter = 1;

    document.addEventListener("click", function(e) {
        if (e.target.classList.contains("add-btn")) {
            const container = document.getElementById("slider-container");
            const newGroup = document.querySelector(".slider-group").cloneNode(true);

            // Update input fields and IDs
            newGroup.querySelectorAll("input").forEach((input, idx) => {
                input.value = "";
                input.id = input.name.split('[')[0] + "_" + counter;
            });

            // Enable remove button
            newGroup.querySelector(".remove-btn").disabled = false;
            container.appendChild(newGroup);
            counter++;
        }

        if (e.target.classList.contains("remove-btn")) {
            const allGroups = document.querySelectorAll(".slider-group");
            if (allGroups.length > 1) {
                e.target.closest(".slider-group").remove();
            }
        }
    });
</script>
<script>
    $(document).ready(function () {
        $('#withorwithout').on('change', function () {
            if ($(this).val() === 'without') {
                $('#categoryDropdown').hide();
                $('#categoryDropdown select').val(''); // Optional: clear category selection
            } else {
                $('#categoryDropdown').show();
            }
        });

        // Run on page load to apply correct initial visibility
        $('#withorwithout').trigger('change');
    });
</script>


@endpush