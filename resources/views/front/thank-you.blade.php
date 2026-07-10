@include('layouts.frontheader')

<section class="thankyou-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <div class="thank-contact mt-80">
                    <img src="{{ asset('public/front/images/thank_you.png') }}" loading="lazy" alt="Thank You" class="img-fluid mb-xxl-4 mb-lg-2">
                    <h3 class="main_head">Thank You</h3>
                    <p class="mb-xxl-5 mb-lg-4 center">Your enquiry has been submitted successfully. <br/> We will get in touch with you shortly.</p>
                    <div>
                        <!-- <p><a class="main_btn" href="{{ route('index') }}">Go To Home  <img src="{{ asset('public/front/images/slider_arrow.png') }}" alt="arrow"></a></p> -->
                        <a class="main_btn d-inline-flex align-items-center justify-content-center" href="{{url('/')}}">
                            Go To Home
                            <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy" alt="thank you" class="img-fluid" style="width: 20px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.frontfooter')