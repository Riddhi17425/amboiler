@include('layouts.frontheader')
<section class="contact_banner">
    <div class="container-fluid p-0">
        <!-- <img src="./images/tm_bg.png" alt="Terms and Conditions" class="img-fluid w-100"> -->
        <div class="contact_banner_ctnt" style="background-image:url({{ asset('public/front/images/current_vaccancy_banner.png')}});" loading="lazy">
            <div class="breadcrumbs">
                <a href="{{url('/')}}"><b>Home </b> ></a> <a href="Javascript:void(0)"><b>Career </b> ></a> <a href="{{ route('current-vacancies') }}"><b>Current Vacancies </b> ></a> <span>{{ $vacancy->banner_title }}</span>
            </div>
            <h1 class="main_white_head col-md-12 col-xl-12 col-xxl-12">{{ $vacancy->banner_title }}</h1>
        </div>
    </div>
</section>
<section class="mt-80 ">
    <div class="ym_container">
        <div class="row sidebar">
            <div class="col-md-6">
                <h2 class="main_head">{{ $vacancy->title}}</h2>
                <ul class="two-column-list">
                    {!! $vacancy->details !!}
                </ul>
                {!! $vacancy->description !!}
            </div>
            <div class="col"></div>
            <div class="col-md-5 sticky-sidebar">
                <div class="">
                    <form class="apply-form contact_input" id="applicationForm" action="{{ route('job-details.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- First Name and Last Name in a single row -->
                        <h4 class="sub_head mb-0">Apply Now</h4>
                        <div class="form">
                            <div class="row">
                                <!-- this is for the position of the user applied for -->
                                <input type="hidden" name="applied_for" value="{{ $vacancy->title }}"> 
                                
                                <div class="col-lg-6 form_item">
                                    <label for="FullName">Full name *:</label><br>
                                    <input type="text" id="fullname" name="fullname" maxlength="60"
                                            oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();"
                                            placeholder="Your Full Name" >
                                    <span class="error" id="error-fullname"></span>
                                </div>
                                <div class="col-lg-6 form_item">
                                    <label for="email">Email Id *:</label><br>
                                    <input type="email" id="email" name="email" maxlength="60" placeholder="Your Email ID">
                                    <span class="error" id="error-email"></span>
                                </div>
                                <div class="col-lg-6 form_item">
                                    <label for="phone">Phone number *:</label><br>
                                    <input type="tel" id="phone" name="phone" maxlength="15" minlength="10"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);"
                                            placeholder="Your Contact No." pattern="\d{10,15}" title="Phone number must be between 10 to 15 digits">
                                    <span class="error" id="error-phone"></span>
                                </div>
                                <div class="col-lg-6 form_item">
                                    <label for="Location">Current Location *:</label><br>
                                    <input type="text" id="Location" name="Location" maxlength="100" placeholder="Enter Your Location">
                                    <span class="error" id="error-Location"></span>
                                </div>
                                <div class="col-lg-12 form_item">
                                    <label for="linkedInprofile">LinkedIn Profile *:</label><br>
                                    <input type="text" id="linkedInprofile" name="linkedInprofile" maxlength="50" placeholder="Your Linkedin Profile">
                                    <span class="error" id="error-linkedInprofile"></span>
                                </div>
                                <div class="col-md-12 form_item">
                                <label for="uploadResume" class="form-label">Upload Resume *:</label>
                                <label class="custom-file-upload">
                                    <input type="file" id="uploadResume" name="resume" accept=".pdf,.doc,.docx" >
                                            <p>Attach Your Resume In PDF, Word Format</p>
                                            <p><small>Max Size: 5 Mb</small></p>
                                </label>
                                    <span class="error" id="error-uploadResume"></span>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_item">
                                        <div class="g-recaptcha" data-sitekey="6LfTLWAsAAAAADlJboKj1mvD4P2RsAQaSex8CYMp" data-callback="recaptchaVerified"></div>
                                        <div id="recaptcha-error" class="error-message" style="color: red; margin-top: 5px;"></div>
                                        @error('g-recaptcha-response')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="main_btn">Send Message
                                <span class="btn_svg">
                                    <img src="{{ asset('public/front/images/blue_gear.svg')}}" loading="lazy" alt="setting icon" class="img-fluid">
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.getElementById('uploadResume').addEventListener('change', function() {
    if (this.files.length > 0) {
        this.nextElementSibling.innerHTML = `<p>${this.files[0].name}</p>`;
    }
});
 
</script>
@include('layouts.frontfooter')

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
const disposableDomains = [
    'mailinator.com', '10minutemail.com', 'guerrillamail.com', 'tempmail.com',
    'temp-mail.org', 'throwawaymail.com', 'maildrop.cc', 'dispostable.com',
    'getairmail.com', 'moakt.com', 'spamgourmet.com', 'yopmail.com',
    'sharklasers.com', 'mailnesia.com', 'fakemail.net', 'emailondeck.com',
    'trashmail.com', 'mintemail.com', 'mytemp.email'
];

function recaptchaVerified() {
    document.getElementById('recaptcha-error').innerText = '';
}

$(document).ready(function () {
    const blurredFields = {};

    $('#applicationForm input, #applicationForm textarea').on('input', function () {
        let fieldId = $(this).attr('id');
        let value = $(this).val().trim();
        let errorId = '#error-' + fieldId;

        if ((fieldId === 'phone' || fieldId === 'email') && !blurredFields[fieldId]) {
            $(errorId).text('');
            return;
        }

        if (value === '') {
            switch (fieldId) {
                case 'fullname':
                    $(errorId).text('Please enter your full name');
                    break;
                case 'phone':
                    $(errorId).text('Please enter your phone number');
                    break;
                case 'email':
                    $(errorId).text('Please enter your email');
                    break;
                case 'Location':
                    $(errorId).text('Please enter your location');
                    break;
                case 'linkedInprofile':
                    $(errorId).text('Please enter your LinkedIn profile');
                    break;
                case 'resume':
                    $(errorId).text('Please upload your resume');
                    break;
                default:
                    $(errorId).text('');
            }
        } else {
            if (fieldId === 'phone') {
                if (!/^\d{10,15}$/.test(value)) {
                    $(errorId).text('Phone number must be between 10 to 15 digits');
                } else {
                    $(errorId).text('');
                }
            } else if (fieldId === 'email') {
                if (!/^\S+@\S+\.\S+$/.test(value)) {
                    $(errorId).text('Please enter a valid email');
                } else {
                    const domain = value.split('@')[1]?.toLowerCase();
                    if (disposableDomains.includes(domain)) {
                        $(errorId).text('Invalid email addresses are not allowed');
                    } else {
                        $(errorId).text('');
                    }
                }
            } else {
                $(errorId).text('');
            }
        }
    });

    $('#applicationForm input, #applicationForm textarea').on('blur', function () {
        let fieldId = $(this).attr('id');
        blurredFields[fieldId] = true;
        $(this).trigger('input');
    });

    $('#applicationForm').on('submit', function (e) {
        e.preventDefault();
        let isValid = true;
        $('.error').text('');

        if ($('#fullname').val().trim() === '') {
            $('#error-fullname').text('Please enter your full name');
            isValid = false;
        }

        let phone = $('#phone').val().trim();
        if (phone === '') {
            $('#error-phone').text('Please enter your phone number');
            isValid = false;
        } else if (!/^\d{10,15}$/.test(phone)) {
            $('#error-phone').text('Phone number must be 10 digits');
            isValid = false;
        }

        let email = $('#email').val().trim();
        if (email === '') {
            $('#error-email').text('Please enter your email');
            isValid = false;
        } else if (!/^\S+@\S+\.\S+$/.test(email)) {
            $('#error-email').text('Please enter a valid email');
            isValid = false;
        } else {
            let domain = email.split('@')[1].toLowerCase();
            if (disposableDomains.includes(domain)) {
                $('#error-email').text('Invalid email addresses are not allowed');
                isValid = false;
            }
        }

        if ($('#Location').val().trim() === '') {
            $('#error-Location').text('Please enter your location');
            isValid = false;
        }

        if ($('#linkedInprofile').val().trim() === '') {
            $('#error-linkedInprofile').text('Please enter your LinkedIn profile');
            isValid = false;
        }

        const fileInput = $('#uploadResume').get(0);
        const file = fileInput.files[0];
        const allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        const maxSize = 5 * 1024 * 1024;

        if (!file) {
            $('#error-uploadResume').text('Please upload your resume.');
            isValid = false;
        } else if (!allowedTypes.includes(file.type)) {
            $('#error-uploadResume').text('Only PDF or Word (DOC/DOCX) files are allowed.');
            isValid = false;
        } else if (file.size > maxSize) {
            $('#error-uploadResume').text('File size must be less than 5MB.');
            isValid = false;
        } else {
            $('#error-uploadResume').text('');
        }

        if (grecaptcha.getResponse() === '') {
            $('#recaptcha-error').text('Please verify that you are not a robot');
            isValid = false;
        }

        if (isValid) {
            const submitBtn = $(this).find('button[type="submit"]');
            submitBtn.prop('disabled', true).text('Submitting...');
            this.submit();
        }
    });
});
</script>

<style>
    .error {
        color: red;
        font-size: 14px;
    }
</style>
