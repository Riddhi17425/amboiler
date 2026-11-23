@php
    // Reopen modal on server errors
    $enqHasErr = $errors->any() && old('form_source') === 'Enquiry Pop';
@endphp

<style>
    /* Enquiry popup color tokens */
    #enquiryModal,
    .enquire_btn {
        --enq-blue: #182a41;
        --enq-lemon: #cad62b;
        --enq-grey: #ddd;
        --enq-para: #444;
    }

    /* Floating Enquiry Now tab */
    .enquire_btn {
        position: fixed;
        right: 0;
        top: 80%;
        transform: rotate(90deg);
        transform-origin: right top;
        background: var(--enq-lemon);
        color: #111;
        padding: 12px 22px;
        font-size: 14px;
        font-weight: 500;
        line-height: 20px;
        text-decoration: none;
        border-radius: 0 0 6px 6px;
        z-index: 1030;
        box-shadow: 0 4px 15px rgba(0, 0, 0, .25);
        transition: right .3s, background .3s, color .3s;
    }

    .enquire_btn:hover {
        right: 5px;
    }

    /* Modal layout styles */
    #enquiryModal .modal-content {
        border: none;
        border-radius: 10px;
    }

    #enquiryModal .modal-header {
        padding: 18px 28px;
        border-bottom: 1px solid var(--enq-grey);
    }

    #enquiryModal .modal-title {
        font-size: 24px;
        font-weight: 600;
        line-height: 30px;
        color: var(--enq-blue);
        margin: 0;
    }

    #enquiryModal .modal-body {
        padding: 28px;
    }

    #enquiryModal label {
        color: var(--enq-blue);
        font-weight: 500;
        font-size: 16px;
        margin-bottom: 6px;
    }

    #enquiryModal .required-star {
        color: #e8402a;
    }

    /* Input styles */
    #enquiryModal .form-control {
        width: 100%;
        padding: 12px;
        border: 1px solid var(--enq-grey);
        border-radius: 5px;
        color: var(--enq-para);
        font-size: 16px;
        box-shadow: none;
        background-color: #fff;
    }

    #enquiryModal .form-control:focus {
        border-color: #99a639;
        box-shadow: none;
    }

    #enquiryModal .form-control::placeholder {
        color: #aaa !important;
    }

    /* Validation error styles */
    #enquiryModal .form-control.is-invalid {
        border-color: #e8402a;
        background-image: none;
    }

    #enquiryModal .invalid-feedback {
        display: block;
        font-size: 13px;
        color: #e8402a;
        margin-top: 4px;
    }

    /* Submit button styles */
    #enquiryModal .enq_submit {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--enq-lemon);
        color: #111;
        border: none;
        border-radius: 5px;
        padding: 14px 28px;
        font-size: 16px;
        cursor: pointer;
        transition: background .3s, color .3s;
    }

    #enquiryModal .enq_submit:hover {
        background: var(--enq-blue);
        color: var(--enq-lemon);
    }

    #enquiryModal .enq_submit svg path {
        stroke: currentColor;
    }

    #enquiryModal .enq_submit svg {
        transition: transform .4s ease;
    }

    #enquiryModal .enq_submit:hover svg {
        transform: rotate(45deg);
    }

    #enquiryModal .enq_submit:disabled {
        opacity: .7;
        cursor: not-allowed;
    }

    /* Mobile responsive styles */
    @media (max-width: 767.98px) {
        #enquiryModal .modal-header { padding: 14px 16px; }
        #enquiryModal .modal-title { font-size: 20px; }
        #enquiryModal .modal-body { padding: 16px; }
        #enquiryModal label { font-size: 14px; }
        .enquire_btn { top: 80%; padding: 10px 16px; font-size: 13px; }
    }

    /* Scale captcha on small screens */
    @media (max-width: 400px) {
        #enquiryModal #enq_recaptcha {
            transform: scale(.85);
            transform-origin: 0 0;
        }
    }
</style>

{{-- Floating enquiry button --}}
<a href="javascript:void(0)" class="enquire_btn main_btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
    Enquiry Now
    <span class="btn_svg">
        <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy" alt="setting icon" class="img-fluid">
    </span>
</a>

{{-- Enquiry modal --}}
<div class="modal fade" id="enquiryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="enquiryModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <p class="modal-title" id="enquiryModalTitle">Enquiry</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                {{-- Server validation errors --}}
                @if ($enqHasErr)
                    <div class="alert alert-danger py-2 mb-3" style="font-size:14px;">
                        @foreach ($errors->all() as $err)
                            <div>{{ $err }}</div>
                        @endforeach
                    </div>
                @endif

                <form id="inquiryform" action="{{ route('enquiry.submit') }}" method="POST" novalidate>
                    @csrf
                    <input type="hidden" name="form_source" value="Enquiry Pop">
                    {{-- Spam honeypot field --}}
                    <input type="text" name="website" tabindex="-1" autocomplete="off"
                        style="position:absolute;left:-9999px;" aria-hidden="true">

                    <div class="row">
                        {{-- Name --}}
                        <div class="col-md-6 mb-3">
                            <label for="enq_fullname">Name <span class="required-star">*</span></label>
                            <input type="text" class="form-control" name="fullname" id="enq_fullname"
                                placeholder="Enter your name" value="{{ $enqHasErr ? old('fullname') : '' }}">
                        </div>

                        {{-- Company --}}
                        <div class="col-md-6 mb-3">
                            <label for="enq_company">Company Name <span class="required-star">*</span></label>
                            <input type="text" class="form-control" name="company_name" id="enq_company"
                                placeholder="Enter company name" value="{{ $enqHasErr ? old('company_name') : '' }}">
                        </div>

                        {{-- Mobile --}}
                        <div class="col-md-6 mb-3">
                            <label for="enq_mobile">Mobile <span class="required-star">*</span></label>
                            <input type="text" class="form-control" name="mobile" id="enq_mobile"
                                placeholder="Enter mobile" inputmode="numeric" maxlength="15" autocomplete="tel"
                                value="{{ $enqHasErr ? old('mobile') : '' }}">
                        </div>

                        {{-- Email --}}
                        <div class="col-md-6 mb-3">
                            <label for="enq_email">Email <span class="required-star">*</span></label>
                            <input type="email" class="form-control" name="email" id="enq_email"
                                placeholder="Enter email" value="{{ $enqHasErr ? old('email') : '' }}">
                        </div>

                        {{-- Subject --}}
                        <div class="col-md-6 mb-3">
                            <label for="enq_subject">Subject <span class="required-star">*</span></label>
                            <input type="text" class="form-control" name="subject" id="enq_subject"
                                placeholder="Subject" maxlength="150"
                                value="{{ $enqHasErr ? old('subject') : '' }}">
                        </div>

                        {{-- Message --}}
                        <div class="col-md-6 mb-3">
                            <label for="enq_message">Message</label>
                            <input type="text" class="form-control" name="message" id="enq_message"
                                placeholder="Enter message" maxlength="100"
                                value="{{ $enqHasErr ? old('message') : '' }}">
                        </div>

                        {{-- Captcha --}}
                        <div class="col-md-12 mb-3">
                            <div id="enq_recaptcha"></div>
                            <input type="hidden" name="hiddenRecaptcha" id="hiddenRecaptcha">
                        </div>

                        {{-- Submit button --}}
                        <div class="col-md-12">
                            <button type="submit" id="enq_submitBtn" class="enq_submit">
                                <span class="enq_label">Submit</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14"
                                    fill="none">
                                    <path d="M1.5 13L11.5 1M11.5 1H1.5M11.5 1V11.9091" stroke="#111"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Captcha success callback
    function enqCaptchaDone(token) {
        $('#hiddenRecaptcha').val(token);
        $('#hiddenRecaptcha-error').remove();
    }

    // Captcha expired callback
    function enqCaptchaExpired() {
        $('#hiddenRecaptcha').val('');
    }

    // Render captcha once
    var enqCaptchaId = null;
    function enqRenderCaptcha() {
        if (enqCaptchaId !== null) return;
        enqCaptchaId = grecaptcha.render('enq_recaptcha', {
            sitekey: '{{ app()->environment('local') ? '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI' : '6LfTLWAsAAAAADlJboKj1mvD4P2RsAQaSex8CYMp' }}',
            callback: enqCaptchaDone,
            'expired-callback': enqCaptchaExpired
        });
    }

    // Api onload callback
    function enqInitCaptcha() {
        grecaptcha.ready(enqRenderCaptcha);
    }

    // Load api if missing
    function enqLoadCaptcha() {
        if (window.grecaptcha && grecaptcha.ready) { enqInitCaptcha(); return; }
        if (document.getElementById('enq-recaptcha-api')) return;
        var s = document.createElement('script');
        s.id = 'enq-recaptcha-api';
        s.src = 'https://www.google.com/recaptcha/api.js?onload=enqInitCaptcha&render=explicit';
        s.async = true;
        document.head.appendChild(s);
    }

    $(function () {
        var $modal = $('#enquiryModal');

        // Move modal to body
        $modal.appendTo('body');

        // Allow digits only
        $('#enq_mobile').on('input', function () {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        var submitted = false;

        // Form validation rules
        $('#inquiryform').validate({
            ignore: [],
            rules: {
                fullname:        { required: true, minlength: 2 },
                company_name:    { required: true },
                mobile:          { required: true, digits: true, minlength: 10, maxlength: 15 },
                email:           { required: true, email: true },
                subject:         { required: true, minlength: 3, maxlength: 150 },
                hiddenRecaptcha: { required: true }
            },
            messages: {
                fullname:        'Name is required',
                company_name:    'Company is required',
                mobile:          'Valid mobile required',
                email:           'Valid email required',
                subject:         'Please enter your subject',
                hiddenRecaptcha: 'Please verify captcha'
            },
            errorElement: 'div',
            errorClass: 'invalid-feedback',
            highlight:   function (el) { $(el).addClass('is-invalid'); },
            unhighlight: function (el) { $(el).removeClass('is-invalid'); },
            submitHandler: function (form) {
                // Prevent double submit
                if (submitted) return false;
                submitted = true;
                $('#enq_submitBtn').prop('disabled', true).find('.enq_label').text('Submitting...');
                form.submit();
            }
        });

        // Load captcha on open
        $modal[0].addEventListener('show.bs.modal', enqLoadCaptcha);

        // Reset form on close
        $modal[0].addEventListener('hidden.bs.modal', function () {
            var v = $('#inquiryform').data('validator');
            if (v) v.resetForm();
            $('#inquiryform')[0].reset();
            $('#inquiryform .is-invalid').removeClass('is-invalid');
            $('#hiddenRecaptcha').val('');
            if (window.grecaptcha && enqCaptchaId !== null) { try { grecaptcha.reset(enqCaptchaId); } catch (e) {} }
        });

        @if ($enqHasErr)
            // Reopen modal after errors
            bootstrap.Modal.getOrCreateInstance($modal[0]).show();
        @endif
    });
</script>
