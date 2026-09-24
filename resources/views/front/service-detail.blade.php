@include('layouts.frontheader')
<section class="contact_banner">
    <div class="container-fluid p-0">
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

{{-- ==================================================================== --}}
{{-- DYNAMIC SECTIONS (unlimited count, was section1/section2/section3)    --}}
{{-- Image alternates left/right, alt text and per-section header image    --}}
{{-- are now supported.                                                    --}}
{{-- Backward compatible: agar $service->sections khaali hai (purana       --}}
{{-- record), to section1/2/3 se hi build kar lete hain.                   --}}
{{-- ==================================================================== --}}
@php
    $sections = $service->sections;

    if (empty($sections)) {
        $sections = [];
        foreach (['section1', 'section2', 'section3'] as $legacyKey) {
            $legacy = $service->{$legacyKey} ?? null;
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
@endphp

@if(!empty($sections))
<section class="boiler_Inspection mt-80">
    <div class="ym_container">
        <div class="row gy-5">
            @foreach($sections as $index => $section)
                @continue(empty($section['title']) && empty($section['description']) && empty($section['image']))
                <div class="col-12">
                    <div class="row gy-3">
                        @php
                            $isEven = $index % 2 === 1; // 2nd, 4th... section => image on the left
                            $altText = !empty($section['alt_text'])
                                ? $section['alt_text']
                                : (!empty($section['image']) ? str_replace(['-', '_'], ' ', pathinfo($section['image'], PATHINFO_FILENAME)) : '');
                        @endphp

                        @if($isEven)
                            <div class="col-lg-7">
                                @if(!empty($section['header_image']))
                                    <img class="img-fluid mb-3" src="{{ asset('public/services/section_header/' . $section['header_image']) }}" loading="lazy" alt="{{ $altText }}">
                                @endif
                                @if(!empty($section['image']))
                                    <img class="img-fluid   service-details-img" src="{{ asset('public/services/section/' . $section['image']) }}" loading="lazy" alt="{{ $altText }}">
                                @endif
                            </div>
                            <div class="col-lg-5">
                                <h3 class="main_h1_head serv_head">{{ $section['title'] ?? '' }}</h3>
                                <div>{!! $section['description'] ?? '' !!}</div>
                            </div>
                        @else
                            <div class="col-lg-5">
                                <h3 class="main_h1_head serv_head">{{ $section['title'] ?? '' }}</h3>
                                <div>{!! $section['description'] ?? '' !!}</div>
                            </div>
                            <div class="col-lg-7">
                                @if(!empty($section['header_image']))
                                    <img class="img-fluid mb-3" src="{{ asset('public/services/section_header/' . $section['header_image']) }}" loading="lazy" alt="{{ $altText }}">
                                @endif
                                @if(!empty($section['image']))
                                    <img class="img-fluid  service-details-img" src="{{ asset('public/services/section/' . $section['image']) }}" loading="lazy" alt="{{ $altText }}">
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if(isset($service->url) && $service->url === 'marine-spares-parts')
<section class="text-center">
    <div class="ym_container">
        <p> <b>We remain committed to delivering dependable quality, competitive pricing, and prompt service, supported by decades of marine expertise and technical excellence.</b></p>
    </div>
</section>
@endif
<section class="boiler_auxiliary mt-80">
    <div class="boiler_auxiliary_child">
        <div class="boiler_auxiliary_top">
            <h2 class="main_h1_head">{{$service->cta_title}}</h2>
        </div>
        <div class="boiler_auxiliary_bot">
            <div class="row justify-content-between">
                {!! $service->cta_description !!}
            </div>
        </div>
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
