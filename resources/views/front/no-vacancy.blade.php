@include('layouts.frontheader')
<section class="contact_banner">
    <div class="container-fluid p-0">
        <!-- <img src="./images/contact_bg.png" alt="contact" class="img-fluid"> -->
        <div class="contact_banner_ctnt" style="background-image:url('{{ asset('public/front/images/vacancies_bg.png') }}');" loading="lazy">
            
           <div class="breadcrumbs">
                <a href="{{url('/')}}"><b>Home </b>  > </a> <a href="Javascript:void(0)"><b>Career </b>  > </a> <span>Current Vacancies</span>
            </div>
            <h1 class="main_white_head col-md-12 col-xl-12 col-xxl-12">Join Our Team – Build a Future with Us!</h1>
        </div>
    </div>
</section>

<section class="contact">
    <div class="ym_container">
        <div class="row g-3 g-md-5">
            <div class="col-lg-12  col-md-12  mb-4 ">
                <div class="row     justify-content-between">
                    <div class="col-lg-6 mb-4">
                        <img src="{{ asset('public/front/images/no_vacancies.png') }}" loading="lazy"  alt="no vacancies" class="img-fluid">
                    </div>
                    <div class="col-lg-5 mb-4">
                        <h1 class="main_head">No Vacancies at the Moment</h1>
                        <a href="#applicationForm" class="main_btn d-inline-block mb-4">Submit your resume
                    <span class="btn_svg">
                        <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy"  alt="setting icon" class="img-fluid">
                    </span>
                </a>
                        <p>
                            While we don’t have open roles right now, we’re always excited to connect with passionate marine engineering professionals. Submit your resume at  <b><a href="#">futurewithus.com</a></b>  and we’ll reach out when the right opportunity sets sail!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12  col-md-12 ">
                   <form class="apply-form contact_input" id="applicationForm" method="POST" action="{{ route('job-details.submit') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- First Name and Last Name in a single row -->
                        <h4 class="sub_head mb-0">Apply Now</h4>
                        <div class="form">
                            <div class="row">
                                <div class="col-lg-6 form_item">
                                    <label for="firstName">First name *:</label><br>
                                    <input type="text" id="fullname" name="fullname"
                                            oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();"
                                            placeholder="John Carter" >
                                        <span class="error" id="error-fullname"></span>
                                </div>
                                <div class="col-lg-6 form_item">
                                    <label for="lastName">Email Id *:</label><br>
                                    <input type="email" id="email" name="email" placeholder="John@gmail.com">
                                    <span class="error" id="error-email"></span>
                                </div>
                                <div class="col-lg-6 form_item">
                                    <label for="phone">Phone number *:</label><br>
                                    <input type="tel" id="phone" name="phone" maxlength="15" minlength="10"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);"
                                            placeholder="US - (555) 000-0000" pattern="\d{10,15}" title="Phone number must be between 10 to 15 digits">
                                            <span class="error" id="error-phone"></span>
                                </div>
                                <div class="col-lg-6 form_item">
                                    <label for="Location">Current Location *:</label><br>
                                    <input type="text" id="Location" name="Location" placeholder="you@company.com">
                                    <span class="error" id="error-Location"></span>
                                </div>
                                <div class="col-lg-12 form_item">
                                    <label for="linkedInprofile">LinkedIn Profile *:</label><br>
                                    <input type="text" id="linkedInprofile" name="linkedInprofile" placeholder="@John_carter">
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
                                        <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy" alt="setting icon" class="img-fluid">
                                    </span>
                            </button>
                        </div>
                    </form>
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
    
   $(document).ready(function() {

    $('#applicationForm input, #applicationForm textarea').on('input', function () {
            let fieldId = $(this).attr('id'); 
            let value = $(this).val().trim();
            let errorId = '#error-' + fieldId; 
            //$(errorId).text(''); 

            if (value === '') {
            switch (fieldId) {
                case 'fullname':
                    $(errorId).text('Please enter your first name');
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
                    $(errorId).text('Please enter your linkedin profile');
                    break;
                case 'resume':
                    $(errorId).text('Please upload your resume');
                    break;
                default:
                    $(errorId).text('');
            }
        } 
        else {
            // Also check format-specific validation
            if (fieldId === 'phone' && !/^\d{10,15}$/.test(value)) {
                $(errorId).text('Phone number must be between 10 to 15 digits');
            } else if (fieldId === 'email' && !/^\S+@\S+\.\S+$/.test(value)) {
                $(errorId).text('Please enter a valid email');
            } else if (fieldId === 'pin' && !/^[A-Za-z0-9\s-]+$/.test(value)) {
                $(errorId).text('Please enter pin code');
            } else {
                $(errorId).text('');
            }
        }
        });
      $('#applicationForm').on('submit', function(e) {
         e.preventDefault();
         let isValid = true;

         $('.error').text('');

         if ($('#fullname').val().trim() === '') {
               $('#error-fullname').text('Please enter your first name');
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
         }  else {
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

        if ($('#uploadResume').get(0).files.length === 0) {
            $('#error-uploadResume').text('Please upload your resume');
            isValid = false;
        }
        
        if (grecaptcha.getResponse() === '') {
               $('#recaptcha-error').text('Please verify that you are not a robot');
               isValid = false;
            }

         if (isValid) {
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
