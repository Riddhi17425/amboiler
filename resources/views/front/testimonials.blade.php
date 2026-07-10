@include('layouts.frontheader')
<section class="contact_banner">
    <div class="container-fluid p-0">
        <!-- <img src="./images/tm_bg.png" alt="Terms and Conditions" class="img-fluid w-100"> -->
        <div class="contact_banner_ctnt" style="background-image: url('{{ asset('public/front/images/tm_bg.png') }}');" loading="lazy">
            <div class="breadcrumbs">
                <a href="{{url('/')}}"><b>Home</b></a> > <span>Testimonials</span>
            </div>
            <h1 class="main_white_head col-md-12 col-xl-12 col-xxl-12">Proven Excellence, Shared by Clients</h1>
        </div>
    </div>
</section>

<section class="section-space-mt">
    <div class="ym_container">
       <div class="row gy-4 g-lg-5">
        @foreach ($testimonials as $testimonial)
            <div class="col-md-4">
                <div class="testimonial-card">
                    <img src="{{ asset('public/front/images/testimonial-bgimg.png')}}" loading="lazy" alt="testimonial" class="img-fluid">
                    <p>{!! html_entity_decode($testimonial->description ?? '') !!}</p>
                    <div class="border_btm_line"></div>
                    <div class="testimonial_writer">
                        <img src="{{ asset('public/front/images/test_1.svg')}}" loading="lazy" alt="Mr. Ahmed Al Mansoori" class="img-fluid">
                        <div>
                            <p class="test_name">{{$testimonial->name ?? ''}}</p>
                            <p class="test_post">{{$testimonial->designation ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
       </div>
    </div>
</section>
@include('layouts.frontfooter')