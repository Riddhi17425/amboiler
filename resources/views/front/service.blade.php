@include('layouts.frontheader')
<section class="contact_banner">
    <div class="container-fluid p-0">
        <!-- <img src="./images/privacy-policy-bg.png" alt="Privacy Policy" class="img-fluid w-100"> -->
        <div class="contact_banner_ctnt" style="background-image:url(' {{ asset('public/front/images/services_banner.png') }}');" loading="lazy">
            <div class="breadcrumbs"> <a href="{{url('/')}}"><b>Home</b></a> > <a href="Javascript:void(0)"><b>Our Services</b></a> > <span>
                     {{ $categories->banner_title }}</span> </div>
            <h1 class="main_white_head col-12 col-md-6 col-xl-7 col-xxl-8">{{ $categories->banner_title }}</h1>
        </div>
    </div>
</section>

<section class="section-space-pt">
    <div class="ym_container">
        <div class="row g-4 g-lg-5">
          @foreach($services as $data)
            <div class="col-md-6 col-lg-4">
                <a href="{{ route('service.details', ['url' => $data->url]) }}" class="service_card_link text-decoration-none">
                    <div>
                        <img src="{{ asset('public/services/service/'.$data->service_image)}}" loading="lazy"
                            alt="{{ str_replace(['-', '_'],' ', pathinfo($data->service_image, PATHINFO_FILENAME)) }}"
                            class="img-fluid">
                    </div>
                    <div class="project_tabs_card_bot">
                        <div>
                            <h2>{{ $data->product_name}}</h2>
                        </div>
                        @if($data->product_name != 'Modular Pre-Fabrication')
                            <span>
                                <img src="{{ asset('public/front/images/slider_rightarrow.svg') }}" loading="lazy" alt="slider arrow" class="img-fluid">
                            </span>
                        @endif
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include('layouts.frontfooter')
