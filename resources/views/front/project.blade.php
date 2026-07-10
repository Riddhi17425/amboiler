@include('layouts.frontheader')

<section class="contact_banner">
    <div class="container-fluid p-0">
        <!-- <img src="./images/privacy-policy-bg.png" alt="Privacy Policy" class="img-fluid w-100"> -->
        <div class="contact_banner_ctnt" style="background-image:url(' {{ asset('public/front/images/project_banner.png') }}');" loading="lazy">
            <div class="breadcrumbs"> <a href="{{url('/')}}"><b>Home</b></a> > <span>Project</span> </div>
            <h1 class="main_white_head col-12 col-md-6 col-xl-7 col-xxl-8"> Delivering Engineering Excellence Across Industries</h1>
        </div>
    </div>
</section>
<section class="heat_sec1">
    <div class="ym_container">
        <div class="heat_sec1_top">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="main_head">The Great Work <br /> We've Done</h2>
                </div>
                <div class="col-lg-6">
                    <p>Explore a selection of our current and completed projects showcasing our capabilities in boiler systems, heat exchangers, economizers, refractory work, automation, and more. At Al Mufaddal, we pride ourselves on delivering high-quality, on-time engineering solutions for the marine, oil & gas, power plant, and industrial sectors.</p>
                </div>
            </div>
        </div>
        <div class="project_tabs">
            <div class="project_tabs_child" id="nav-tab" role="tablist">
                <ul >
                    <li class="active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All project</li>
                    
                    @foreach($categories as $category)
                        <li id="nav-{{ Str::slug($category->category) }}-tab" data-bs-toggle="tab" data-bs-target="#nav-{{ Str::slug($category->category) }}" role="tab" aria-controls="nav-{{ Str::slug($category->category) }}" aria-selected="false">{{ $category->category }}</li>
                    @endforeach
                    
                </ul>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="project_tabs_card">
                        <div class="row g-4 g-lg-5">
                        @foreach($projects as $data)
                        <div class="col-md-6 col-lg-4">
                            <div>
                                <img src="{{ asset('public/project_image/front/' . $data->front_image) }}" loading="lazy" class="img-fluid" alt="{{  str_replace(['-', '_'],' ', pathinfo($data->front_image, PATHINFO_FILENAME)) }}">
                            </div>
                            <div class="project_tabs_card_bot">
                                <div>
                                    <p>{{ $data->location }} <span>|</span> <i>{{ \Carbon\Carbon::parse($data->date)->format('M - Y') }}</i></p>
                                    <h2>{{ $data->title }}</h2>
                                </div>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#projectModal{{ $data->id}}"> 
                                            <img src="{{ asset('public/front/images/slider_rightarrow.svg') }}" loading="lazy" alt="" class="img-fluid"> 
                                    </a>
                                
                            </div>
                        </div>
                        @endforeach
                           
                        </div>
                    </div>
                </div>
                
                @foreach($categories as $category)
                    <div class="tab-pane fade" id="nav-{{ Str::slug($category->category) }}" role="tabpanel" aria-labelledby="nav-{{ Str::slug($category->category) }}-tab">
                        <div class="project_tabs_card">
                            <div class="row g-4 g-lg-5">
                                @foreach($projects->where('projectcategory_id', $category->id) as $data)
                                    <div class="col-md-6 col-lg-4">
                                        <div>
                                            <img src="{{ asset('public/project_image/front/' . $data->front_image) }}" class="img-fluid" loading="lazy" alt="{{  str_replace(['-', '_'],' ', pathinfo($data->front_image, PATHINFO_FILENAME)) }}">
                                        </div>
                                        <div class="project_tabs_card_bot">
                                            <div>
                                                <p>{{ $data->location }} <span>|</span> <i>{{ \Carbon\Carbon::parse($data->date)->format('M - Y') }}</i></p>
                                                <h2>{{ $data->title }}</h2>
                                            </div>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#projectModal{{ $data->id}}"> 
                                                <img src="{{ asset('public/front/images/slider_rightarrow.svg') }}" loading="lazy" alt="" class="img-fluid"> 
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
</section>
<section class="Request_Quote">
    <div class="ym_container">
        <div class="Request_Quote_top">
            <h1 class="main_head">Maximize Efficiency, Minimize Downtime.</h1>
            <p>We deliver end-to-end solutions for industrial boilers and heat exchangers, ensuring maximum efficiency, safety, and reliability. Our expert services in Manufacturing, Repairs, and Maintenance are tailored for the Marine, Oil & Gas, and Power Plant industries. With a focus on innovation and excellence, we help you maintain seamless operations and extend the lifespan of your equipment.</p>
        </div>
        <div class="row gy-5 justify-content-between align-items-center">
            <div class="col-lg-6"> 
                <div class="Request_Quote_bot">
                  <img class="img-fluid" src="{{ asset('public/front/images/solution_img.jpg') }}"loading="lazy"  alt="worker"> 
                  <img class="img-fluid Request_Quote_bot_left_icon " src="{{ asset('public/front/images/solution_img.jpg') }}" loading="lazy" alt="">
                </div>
        </div>
            <div class="col-lg-6">
                <div>
                    <form class="apply-form contact_input" id="projectform" method="post" action="{{ route('project-submit') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- First Name and Last Name in a single row -->
                        <h4 class="sub_head mb-0">Request a Quote</h4>
                        <div class="form">
                            <div class="row">
                                <div class="col-lg-6 form_item"> 
                                    <label for="firstName">Full Name * :</label><br> 
                                        <input type="text" id="firstName" name="firstName" 
                                            oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();"
                                            placeholder="John Carter"> 
                                        <span class="error" id="error-firstName"></span>
                                </div>
                                <div class="col-lg-6 form_item"> 
                                    <label for="lastName">Email Id * :</label><br> 
                                        <input type="email" id="email" name="email" placeholder="John@gmail.com"> 
                                        <span class="error" id="error-email"></span>
                                </div>
                                <div class="col-lg-6 form_item"> 
                                    <label for="phone">Phone Number * :</label><br>
                                
                                <div class="phone-input-wrapper">
                                    <div class="select-wrapper">
                                        <select class="country-select">
                                        <option value="+1">US</option>
                                        <option value="+91">India</option>
                                        <option value="+44">UK</option>
                                        </select>
                                    </div>
                                       <input type="tel" class="phone" id="phone" name="phone" maxlength="15" minlength="10"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);"
                                    placeholder="+1 (555) 000-0000" pattern="\d{10,15}" title="Phone number should be between 10 to 15 digits" >
                                       
                                </div>
                                <span class="error" id="error-phone"></span>
                            </div>
                                <div class="col-lg-6 form_item"> 
                                    <label for="pincode">Pincode * :</label><br> 
                                    <input type="text" id="pincode" name="pincode" pattern="^[A-Za-z0-9\s-]+$" placeholder="893320">
                                    <span class="error" id="error-pincode"></span> 
                                </div>
                                <div class="col-lg-12 form_item"> 
                                    <label for="">Subject* :</label><br> 
                                    <input type="text" id="subject" name="subject" placeholder="Lorem ipsum dolor sit amet consectetur. "> 
                                    <span class="error" id="error-subject"></span>
                                </div>
                                <div class="col-md-12 form_item"> 
                                    <label for="uploadResume" class="form-label">Message :</label> 
                                    <textarea id="message" name="message" rows="3"
                                        placeholder="Lorem ipsum dolor sit amet consectetur. Pellentesque sit amet ut accumsan ut maecenas. Lobortis pharetra dictum pulvinar lectus facilisis. Nec laoreet aliquet faucibus volutpat"
                                        style="resize: none;"></textarea> 
                                    <!--<span class="error" id="error-message"></span>-->
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_item">
                                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}" data-callback="recaptchaVerified"></div>
                                        <div id="recaptcha-error" class="error-message" style="color: red; margin-top: 5px;"></div>
                                        @error('g-recaptcha-response')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                </div> 
                                <button  type="submit" class="main_btn">Submit
                                     <span class="btn_svg"> 
                                    <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy" alt="" class="img-fluid"> 
                                    </span> 
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> 
<!-- Modal -->
<!-- @foreach($projects as $data) -->
<div class="modal" id="projectModal{{ $data->id }}" tabindex="-1" aria-labelledby="projectModalLabel{{ $data->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered project_Modal">
            <div class="modal-content">
                <div class="project_card_modal">
                    <div class="project_card_modal_top">
                        <div class="d-flex justify-content-between gap-5">
                            <h1 class="main_head">{{ $data->meta_title}}</h1> 
                            <a href="#" data-bs-dismiss="modal" aria-label="Close">
                                <img src="{{ asset('public/front/images/xmark.png') }}" alt="close">
                            </a>
                        </div>
                        <p>{!! $data->meta_description !!}</p>
                    </div>
                    <div class="row gy-5">
                    <div class="col-lg-4">
                        <div class="project_slider">
                            @php
                                $images = json_decode($data->detail_image ?? '[]');
                            @endphp
                           @if (!empty($images))

                                @foreach ($images as $image)
                                    <div class="col-md-4 mb-3">
                                        <img src="{{ asset('public/project_image/detail/'.$image) }}" loading="lazy" class="img-fluid" alt="{{  str_replace(['-', '_'],' ', pathinfo($image, PATHINFO_FILENAME)) }}">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="project_card_modal_bot">
                            <ul class="project_card_modal_bot_child1">
                                {!! $data->description !!}
                               
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
</div>
<!-- @endforeach -->
@include('layouts.frontfooter')

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    $(document).ready(function() {
        $('.modal').on('shown.bs.modal', function () {
            var slider = $(this).find('.project_slider');

            if (slider.hasClass('slick-initialized')) {
                slider.slick('unslick');
            }

            slider.slick({
                slidesToShow: 1,
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 2000,
                pauseOnHover: true,
                infinite: true,
            });
        });

        $('.modal').on('hidden.bs.modal', function () {
            var slider = $(this).find('.project_slider');
            if (slider.hasClass('slick-initialized')) {
                slider.slick('unslick');
            }
        });
    });
    
    function recaptchaVerified() {
        document.getElementById('recaptcha-error').innerText = '';
    }

    $(document).ready(function () {

        $('#projectform input, #projectform textarea').on('input', function () {
            let fieldId = $(this).attr('id'); 
            let errorId = '#error-' + fieldId; 
            let value = $(this).val().trim();
            //$(errorId).text(''); 

            if (value === '') {
            switch (fieldId) {
                case 'firstName':
                    $(errorId).text('Please enter your first name');
                    break;
                case 'phone':
                    $(errorId).text('Please enter your phone number');
                    break;
                case 'email':
                    $(errorId).text('Please enter your email');
                    break;
                case 'pincode':
                    $(errorId).text('Please enter your pin code');
                    break;
                case 'subject':
                    $(errorId).text('Please enter your subject');
                    break;
                // case 'message':
                //     $(errorId).text('Please enter your message');
                //     break;
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

        $('#projectform').on('submit', function (e) {
            e.preventDefault();
            let isValid = true;

            $('.error').text('');

            if ($('#firstName').val().trim() === '') {
                $('#error-firstName').text('Please enter your full name');
                isValid = false;
            }

            let phone = $('#phone').val().trim();
            if (phone === '') {
                $('#error-phone').text('Please enter your phone number');
                isValid = false;
            } else if (!/^[+\d\s()-]{10,20}$/.test(phone)) {
                $('#error-phone').text('Please enter a valid phone number');
                isValid = false;
            }

            let email = $('#email').val().trim();
            if (email === '') {
                $('#error-email').text('Please enter your email');
                isValid = false;
            } else if (!/^\S+@\S+\.\S+$/.test(email)) {
                $('#error-email').text('Please enter a valid email');
                isValid = false;
            }

            let pin = $('#pincode').val().trim();
            if (pin === '') {
                $('#error-pincode').text('Please enter your pin code');
                isValid = false;
            } else if (!/^[A-Za-z0-9\s-]+$/.test(pin)) {
                $('#error-pincode').text('Please enter a valid pin code');
                isValid = false;
            }

            if ($('#subject').val().trim() === '') {
                $('#error-subject').text('Please enter the subject');
                isValid = false;
            }

            // if ($('#message').val().trim() === '') {
            //     $('#error-message').text('Please enter your message');
            //     isValid = false;
            // }
            
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
