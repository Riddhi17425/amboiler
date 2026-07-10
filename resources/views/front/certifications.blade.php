@include('layouts.frontheader')
<section class="contact_banner">
    <div class="container-fluid p-0">
        <!-- <img src="./images/tm_bg.png" alt="Terms and Conditions" class="img-fluid w-/100"> -->
        <div class="contact_banner_ctnt" style="background-image:url({{ asset('public/front/images/banner_certificate.jpg')}});" loading="lazy">
            <div class="breadcrumbs">
                <a href="{{url('/')}}"><b>Home </b> > </a><span> Certifications</span>
            </div>
            <h1 class="main_white_head col-md-12 col-xl-12 col-xxl-12">Our Certification</h1>
        </div>
    </div>
</section>
<!-- section circle Certifications-->
<section class="certificates mt-80">
    <div class="ym_container">
        <div class="row g-4 g-lg-5">
            @foreach ($certifications as $certification)
                <div class="col-md-3">
                    <a href="{{asset('public/certificates/pdf/'.$certification->pdf)}}" target="_blank" data-caption="{{$certification->pdf}}">
                        <div class="certi_border">
                            <div class="certi_box">
                                <img src="{{asset('public/certificates/thumbnail/'.$certification->thumbnail)}}"  loading="lazy" alt="{{  str_replace(['-', '_'],' ', pathinfo($certification->alt_tag, PATHINFO_FILENAME)) }}" class="img-fluid mb-md-4 mb-3">
                                <p class="certi_title">{{$certification->title}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('layouts.frontfooter')