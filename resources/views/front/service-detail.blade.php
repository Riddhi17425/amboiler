@include('layouts.frontheader')
<section class="contact_banner">
    <div class="container-fluid p-0">
        <!-- <img src="./images/privacy-policy-bg.png" alt="Privacy Policy" class="img-fluid w-100"> -->
        <!--<div class="contact_banner_ctnt" style="background-image:url({{asset('public/services/banner/'.optional($service)->banner_image)}});" alt="{{  str_replace(['-', '_'],' ', pathinfo(optional($service)->banner_image, PATHINFO_FILENAME)) }}">-->
        <div class="contact_banner_ctnt" style="background-image:url(' {{ asset('public/front/images/services_banner.png') }}');" loading="lazy">
            <div class="breadcrumbs"> <a href="{{url('/')}}"><b>Home</b></a> > <a href="Javascript:void(0)"><b>Our Services</b></a> > <span>
                    {{$service->banner_title}}</span> </div>
            <h1 class="main_white_head">{{$service->banner_title}}</h1>
        </div>
    </div>
</section>

<section class="mt-80">
    <div class="ym_container">
        <div class="boiler_exp_repairs">
            <div class="row justify-content-between">
                <h2 class="main_h1_head">{{$service->main_title}}</h2>
                <div>{!! $service->description !!}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="boiler_slider_main mt-5">
    <div class="boiler_slider ">
        @php
            $sliders = $service->sliders; 
        @endphp
        @foreach ($sliders as $slider)
            <div class="boiler_slide">
                <img class="img-fluid" src="{{ asset('public/services/sliders/' . $slider['image']) }}" loading="lazy" alt="{{  str_replace(['-', '_'],' ', pathinfo($slider['image'], PATHINFO_FILENAME)) }}">
                <div class="boiler_slide_child col-lg-8">
                    <span>
                    <span><img src="{{asset('public/front/images/Vector (20).png')}}" loading="lazy" alt="vector"></span>
                    </span>
                    <div>{{ $slider['text'] ?? '' }}</div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="boiler_slider_arrow mt-4 mt-md-0">
            <div class="d-flex gap-3 align-items-center justify-content-center">
                <img src="{{asset('public/front/images/slider_leftarrow.svg')}}" loading="lazy" alt="left" id="boiler-prev" style="cursor: pointer;">
                <img src="{{asset('public/front/images/slider_rightarrow.svg')}}" loading="lazy" alt="right" id="boiler-next" style="cursor: pointer;">
            </div>
    </div>
</section>

<section class="boiler_Inspection mt-80">
    <div class="ym_container">
        <div class="row gy-5">
            @php
                $section1 = $service->section1;
            @endphp
            <div class="col-12">
               
                <div class="row gy-3">
                    <div class="col-lg-5">
                         <h2 class="main_h1_head serv_head">{{ $section1['title'] }}</h2>
                        <div>{!! $section1['description'] !!}</div>
                    </div>
                    <div class="col-lg-7">
                        <img class=" img-fluid" src="{{asset('public/services/section1/'.$section1['image'])}}" loading="lazy" alt="{{  str_replace(['-', '_'],' ', pathinfo($section1['image'], PATHINFO_FILENAME)) }}">
                    </div>
                </div>
            </div>
            @php
                $section2 = $service->section2;
            @endphp
            <div class="col-12">
               
                <div class="row gy-3">
                    <div class="col-lg-7">
                        <img class=" img-fluid" src="{{asset('public/services/section2/'.$section2['image'])}}" loading="lazy" alt="{{  str_replace(['-', '_'],' ', pathinfo($section2['image'], PATHINFO_FILENAME)) }}">
                    </div>
                    <div class="col-lg-5">
                         <h2 class="main_h1_head serv_head">{{ $section2['title'] }}</h2>
                        <div>{!! $section2['description'] !!}
                        </div>
                    </div>
                </div>
            </div>
            @php
                $section3 = $service->section3;
            @endphp
            @if(!empty($section3))
                <div class="col-12">
                    
                    <div class="row gy-3">
                        <div class="col-lg-5">
                            <h2 class="main_h1_head serv_head">{{ $section3['title'] ?? '' }}</h2>
                            <div>{!! $section3['description'] ?? '' !!}</div>
                        </div>
                        <div class="col-lg-7">
                            @if(!empty($section3['image']))
                                <img class="img-fluid"
                                     src="{{ asset('public/services/section3/' . $section3['image']) }}"
                                     loading="lazy"
                                     alt="{{ str_replace(['-', '_'], ' ', pathinfo($section3['image'], PATHINFO_FILENAME)) }}">
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

@if(isset($service->url) && $service->url === 'marine-spares-parts')
<section class="text-center">
    <div class="ym_container">
        <p> <b>We remain committed to delivering dependable quality, competitive pricing, and prompt service, supported by decades of marine expertise and technical excellence.</b></p>
    </div>
</section>
@endif
<section class="boiler_auxiliary mt-80">
    <div class="boiler_auxiliary_child">
        <!-- <div class="ym_container"> -->
        
        <div class="boiler_auxiliary_top">
            <h2 class="main_h1_head">{{$service->cta_title}}</h2>
        </div>
        <div class="boiler_auxiliary_bot">
            <div class="row justify-content-between">
                {!! $service->cta_description !!}
                
            </div>
        </div>
        <!-- </div> -->
    </div>

</section>
@if($relatedServices->count() > 0)
<section class="service mt-80 pb-5 pb-md-0">
    <div class="ym_container">
        <div class="row align-items-center mb-4">
            <div class="col-sm-12 col-lg-12">
                <h2 class="text-left main_head">End-to-End Maintenance & Manufacturing Solutions</h2>
            </div>
        </div>
        <div class="row">
            <div class="service_slider">
                @foreach($relatedServices as $item)
                <div class="service_slide">
                    <div class="serv_slid_wrapper">
                        <div class="serv_slid_image bd_radius">
                            <img src="{{ asset('public/services/product/' . $item->product_image) }}" loading="lazy" alt="{{  str_replace(['-', '_'],' ', pathinfo($item->product_image, PATHINFO_FILENAME)) }}" class="img-fluid">
                            <div class="serv_tag">{{ $item->product_name }}</div>
                        </div>
                        <div class="inds_slide_foot">
                            {!! $item->product_description !!}
                            <a href="{{ route('service.details', ['url' => $item->url]) }}">
                                <img src="{{ asset('public/front/images/slider_rightarrow.svg') }}" loading="lazy" alt="slider arrow" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif



@include('layouts.frontfooter')