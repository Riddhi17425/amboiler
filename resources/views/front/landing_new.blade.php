@include('layouts.frontheader')

 <div id="loader">
    <!-- 👇 Replace this image link with your own GIF -->
    <img src="https://st.ourhtmldemo.com/new/Industry-Preview/images/icon/preloader.gif" alt="Loading..." loading="lazy">
  </div>

  <div class="mouse-cursor cursor-outer"></div>
  <div class="mouse-cursor cursor-inner"></div>
  
    <!-- Scroll to Top Button -->
  <div class="scroll-top" id="scrollTopBtn">
    ↑
    <svg width="40" height="40">
      <circle cx="20" cy="20" r="15" />
    </svg>
  </div>

<section class="hero_section">
    <div class="hero_slider">
            <div class="hero_slide">
               <picture>
                      <source media="(min-width: 990px)" srcset="{{ asset('public/front/images/hero_slide_img1.png') }}" loading="lazy" type="image/webp" >
                    <img src="{{ asset('public/front/images/Banner_1.jpg') }}" class="img-fluid mobile" loading="lazy" alt="Banner 1">
                </picture>
                <div class="position-absolute herobanner-content">
                    <div class="ym_container ">
                    <div class="hero_content">
                        <div class="row">
                            <div class="col-xxl-5 col-xl-6">
                                 <h1 class="hero_slide_head mb-2 mb-md-4"> Your Trusted Partner in Boiler & HRSG Maintenance</h1>
                                 <p class="text-white mb-4">
                                   With over two decades of experience, we deliver end-to-end solutions for boilers, economizers, and heat recovery systems trusted by marine and industrial clients worldwide.
                                </p>
                                <a href="{{ url('service/repair-and-maintenance') }}" class="main_btn">Explore Repairs and Maintenance
                                    <span class="btn_svg">
                                        <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy" alt="setting icon" class="img-fluid">
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="hero_slide">
               <picture>
                      <source media="(min-width: 990px)" srcset="{{ asset('public/front/images/hero_slide_img2.png') }}" loading="lazy" type="image/webp" >
                    <img src="{{ asset('public/front/images/Banner_2.jpg') }}" class="img-fluid mobile" loading="lazy" alt="Banner 2">
                </picture>
                <div class="position-absolute herobanner-content">
                    <div class="ym_container ">
                    <div class="hero_content">
                        <div class="row">
                            <div class="col-xxl-5 col-xl-6">
                                 <h1 class="hero_slide_head mb-2 mb-md-4">Expert-Led Boiler & Heat Recovery Solutions</h1>
                                 <p class="text-white mb-4">
                                   From emergency breakdowns to long-term maintenance, we offer precision-engineered services for boilers and HRSG systems — both onboard and onshore.
                                </p>
                                <a href="{{ url('service/fabrications') }}" class="main_btn">Explore Fabrications
                                    <span class="btn_svg">
                                        <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy" alt="setting icon" class="img-fluid">
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="hero_slide">
               <picture>
                      <source media="(min-width: 990px)" srcset="{{ asset('public/front/images/hero_slide_img3.png') }}" loading="lazy" type="image/webp" >
                    <img src="{{ asset('public/front/images/Banner_3.jpg') }}"  class="img-fluid mobile" loading="lazy" alt="Banner 3">
                </picture>
                <div class="position-absolute herobanner-content">
                    <div class="ym_container ">
                    <div class="hero_content">
                        <div class="row">
                            <div class="col-xxl-5 col-xl-6">
                                 <h1 class="hero_slide_head mb-2 mb-md-4">Our Solutions</h1>
                                 <p class="text-white mb-4">
                                   Tailored, High-Performance Solutions
                                    Custom-engineered maintenance, retrofits, and shutdown support designed to optimize performance and extend asset life.
                                </p>
                                <a href="{{route('quality-management')}}" class="main_btn">Explore Quality Management
                                    <span class="btn_svg">
                                        <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy" alt="setting icon" class="img-fluid">
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </div>
    <a class="scroll_dwn" href="#about">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M2.35359 6.64936C1.63313 5.59159 1.70982 4.35845 2.27479 3.4222C2.83604 2.49213 3.88483 1.83331 5.13359 1.83331L16.8669 1.83331C19.359 1.83331 20.9912 4.49905 19.6609 6.62748L19.6534 6.63927L13.7867 15.7143L13.7797 15.7251C12.5001 17.6444 9.50041 17.6444 8.22086 15.7251L2.35359 6.64936ZM3.84447 4.36942C4.0853 3.97033 4.54901 3.66665 5.13359 3.66665L16.8669 3.66665C18.039 3.66665 18.6069 4.84586 18.1094 5.65066L12.2511 14.7128C11.6962 15.5374 10.3043 15.5374 9.74943 14.7128L3.88673 5.64399C3.88202 5.6367 3.87721 5.62948 3.87229 5.62233C3.59293 5.21598 3.60944 4.75891 3.84447 4.36942Z"
                fill="#DDDDDD" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M1.83331 19.25C1.83331 19.7562 2.24372 20.1666 2.74998 20.1666H19.25C19.7562 20.1666 20.1666 19.7562 20.1666 19.25C20.1666 18.7437 19.7562 18.3333 19.25 18.3333H2.74998C2.24372 18.3333 1.83331 18.7437 1.83331 19.25Z"
                fill="#DDDDDD" />
        </svg>
        Scroll Down
    </a>
    <div class="custom-nav">
        <a class="prev">
            <img src="{{ asset('public/front/images/slider_leftarrow.svg')}}" loading="lazy" alt="slider arrow" class="img-fluid">
        </a>
        <a class="next">
            <img src="{{ asset('public/front/images/slider_rightarrow.svg')}}" loading="lazy" alt="slider arrow" class="img-fluid">

        </a>
    </div>
</section>

<!--new about-->
<section class="new_about section-space-pt" id="about">
    <div class="ym_container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="about_left">
                    <h2 class="main_head">Engineering Excellence in Boilers & Heat Exchangers</h2>
                    <img src="{{ asset('public/front/images/about_vectoer.png')}}" loading="lazy" alt="solution" class="img-fluid mb-2">
                    <p><b>Over Two Decades of Trusted Boiler Maintenance</b></p>
                    <p>AM Boilers is a Dubai-based engineering service company committed to delivering reliable, high-performance repair and maintenance solutions for boilers, heat exchangers, economizers, and pressure vessels.</p>
                    <p>Whether onboard vessels or at industrial plants, our experienced team ensures minimal downtime and maximum operational efficiency.</p>
                    <p>At AM Boilers, we are committed to delivering top-tier boiler maintenance, heat exchanger repairs, refractory solutions, and industrial automation to keep your operations running at peak performance.</p>
                    <p>With a proven track record in the marine, oil & gas, and power plant industries, we ensure reliability, safety, and efficiency in every project we undertake.</p>
                    <p>Delivering trusted solutions to marine and industrial clients worldwide.</p>
                    <!--<a href="{{route('about')}}" class="main_btn d-inline-block mt-2">About-us-->
                    <!--    <span class="btn_svg">-->
                    <!--        <img src="{{ asset('public/front/images/blue_gear.svg')}}" loading="lazy" alt="setting icon" class="img-fluid">-->
                    <!--    </span>-->
                    <!--</a>-->
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 position-relative" style="place-content: end;">
                <img src="{{ asset('public/front/images/about_pointers.png')}}" loading="lazy" alt="" class="img-fluid pointer">
                <div class="mask">
                    <video autoplay muted loop playsinline>
                    <source src="{{ asset('public/front/images/700.mp4')}}" type="video/mp4" loading="lazy">
                </video>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- service section -->
<section class="service mt-80" id="service-section">
    <div class="ym_container">
        <div class="row align-items-center mb-4">
            <div class="col-sm-12 col-lg-12">
                <h2 class="text-left main_head">Comprehensive Maintenance & Repair Solutions</h2>
            </div>
           
        </div>
        @php
            use Illuminate\Support\Facades\DB;

            $categories = DB::table('service_category')->whereNull('deleted_at')->get();

            $allServices = DB::table('services')->whereNull('deleted_at')->select('id', 'category_id', 'product_name', 'product_image', 'product_description', 'url')->get();

            $servicesByCategory = $allServices->whereNotNull('category_id')->groupBy('category_id');

            $uncategorizedServices = $allServices->whereNull('category_id');
        @endphp

        <div class="row">
            <div class="service_slider">
        
                @php
                    use Illuminate\Support\Str;
                
                    $excluded = ["igg repair services" , "chemical cleaning" , "modular pre-fabrication"];
                @endphp
                @foreach($categories as $category)
                    @php
                        $categoryServices = $servicesByCategory[$category->id] ?? collect();
                    @endphp
        
                    @if($categoryServices->count())
                        @foreach($categoryServices as $data)
                            @if($data->product_name != 'Expansion Joints')
                                <div class="service_slide">
                                    <div class="serv_slid_wrapper">
                                        <div class="serv_slid_image bd_radius">
                                            <img src="{{ asset('public/services/product/' . $data->product_image) }}" class="img-fluid" loading="lazy" alt="{{ $data->product_name }}">
                                            <div class="serv_tag">{{ $data->product_name }} </div>
                                        </div>
                                        <div class="inds_slide_foot">
                                            <p class="mb-0">{!! $data->product_description !!}</p>
                                                
                                            
                                            
                                            @if(!collect($excluded)->contains(fn($word) => Str::contains(strtolower($data->product_name), $word)))
                                                <a href="{{ route('service.details', ['url' => $data->url]) }}">
                                                    <img src="{{ asset('public/front/images/slider_rightarrow.svg') }}" loading="lazy" alt="slider arrow darshan" class="img-fluid">
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                @endforeach
        
                @if($uncategorizedServices->count())
                    @foreach($uncategorizedServices as $uncat)
                        <div class="service_slide">
                            <div class="serv_slid_wrapper">
                                <div class="serv_slid_image bd_radius">
                                    <img src="{{ asset('public/services/product/' . $uncat->product_image) }}" class="img-fluid" loading="lazy" alt="{{ $uncat->product_name }}">
                                    <div class="serv_tag">{{ $uncat->product_name }}</div>
                                </div>
                                <div class="inds_slide_foot">
                                    <p class="mb-0">{!! $uncat->product_description !!}</p>
                                    @if(!collect($excluded)->contains(fn($word) => Str::contains(strtolower($uncat->product_name), $word)))
                                        <a href="{{ route('service.details', ['url' => $uncat->url]) }}">
                                            <img src="{{ asset('public/front/images/slider_rightarrow.svg') }}" loading="lazy" alt="slider arrow" class="img-fluid">
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>

    </div>
</section>

<!-- expert solution -->
<section class="solution section-space-pt">
    <div class="ym_container">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <h2 class="main_head">Our Expert Solutions</h2>
                <p>We offer comprehensive boiler and heat exchanger services designed for critical industries, ensuring safety, reliability, and peak performance in every project.</p>
            </div>
            <div class="col-lg-6 col-sm-12 mb-md-4 mb-3">
                <div class="expert_1">
                    <img src="{{ asset('public/front/images/expert_icon_1.svg')}}" loading="lazy" alt="expert icon" class="img-fluid  mb-4">
                    <h2>Repairs & Maintenance</h2>
                    <p class="mb-4">Keeping Your Equipment Running at Peak Performance</p>
                    <p>At AM Boilers, we offer complete lifecycle care for critical equipment, including boilers, heat exchangers, economizers, HRSGs, WHRBs, condensers, coolers, and plate heat exchangers (PHEs). Whether it's on-site emergency repairs or full-scale workshop overhauls, our expert teams are equipped to deliver fast, reliable solutions. With 24/7 rapid response availability across the WorldWide, we ensure minimal downtime and maximum operational efficiency for your marine and industrial assets.</p>
                    <div class="mt-5">
                        <a href="{{ route('service',['url' => 'repair-and-maintenance']) }}" class="main_btn d-inline-block">Know More
                            <span class="btn_svg">
                                <img src="{{ asset('public/front/images/blue_gear.svg')}}" loading="lazy" alt="setting icon" class="img-fluid">
                            </span>
                        </a>
                    </div>
                </div>                
            </div>
            <div class="col-lg-6 col-sm-12 mb-md-4 mb-3">
                <div class="expert_2">
                    <img src="{{ asset('public/front/images/expert_icon_2.svg')}}" loading="lazy" alt="Manufacturing of Bellows" class="img-fluid  mb-4">
                    <h2>Manufacturing of Bellows</h2>
                    <p class="mb-4">Keeping Your Equipment Running at Peak Performance</p>
                    <p>We specialize in the custom fabrication of high-performance expansion joints and bellows, precisely crafted to meet your application's pressure, temperature, and dimensional requirements. Every unit is designed with close attention to detail and manufactured under strict QA/QC protocols, ensuring long-term reliability, enhanced safety, and consistent performance across critical industrial operations.</p>
                    <div class="mt-5">
                        <a href="{{ route('service',['url' => 'marine-expansion-joint']) }}" class="main_btn d-inline-block">Know More
                            <span class="btn_svg">
                                <img src="{{ asset('public/front/images/blue_gear.svg')}}" loading="lazy" alt="setting icon" class="img-fluid">
                            </span>
                        </a>
                    </div>
                </div>                
            </div>
            <!--<div class="col-lg-12 col-sm-12">-->
            <!--    <div class="expert_3">-->
            <!--        <img src="{{ asset('public/front/images/expert_icon_3.svg')}}" loading="lazy" alt="Manufacturing of Bellows" class="img-fluid  mb-4">-->
            <!--        <h2>Expansion Joints</h2>-->
            <!--        <p class="mb-4">Flexible Solutions for Reliable Performance</p>-->
            <!--        <p>At AM Boilers, we design, fabricate, and supply metallic expansion joints and bellows for exhaust gas, steam, condensate water, and LPG applications. Ranging from 100 mm to 5000 mm in diameter, our expansion joints are engineered to absorb thermal movement, vibration, and pressure fluctuations — protecting your piping systems and extending their lifespan.-->
            <!--            Each unit is fabricated with high-grade materials, precision-welded, and inspected to meet international quality standards. Whether for new installations or replacement projects, we ensure fast turnaround and seamless integration, reducing downtime and maintaining system reliability.</p>-->
            <!--        <div class="mt-5">-->
            <!--            <a href="{{ route('service',['url' => 'marine-expansion-joint']) }}" class="main_btn d-inline-block">Know More-->
            <!--                <span class="btn_svg">-->
            <!--                    <img src="{{ asset('public/front/images/blue_gear.svg')}}" loading="lazy" alt="setting icon" class="img-fluid">-->
            <!--                </span>-->
            <!--            </a>-->
            <!--        </div>-->
            <!--    </div>                -->
            <!--</div>-->
        </div>
    </div>
</section>
<!-- proces  -->
<section class="process mt-80">
    <div class="ym_container">
        <div class="row mb-4">
            <div class="col-sm-12 col-lg-7">
                <h2 class="main_head">Working on Every Step with You</h2>
            </div>
            <div class="col-sm-12 col-lg-5 text-end  d-none d-lg-block">
                <a href="{{route('contact')}}" class="main_btn d-inline-block">Get in Touch
                    <span class="btn_svg">
                        <img src="{{ asset('public/front/images/blue_gear.svg')}}" loading="lazy" alt="setting icon" class="img-fluid">
                    </span>
                </a>
            </div>
            <div class="col-lg-12">
                <p>At AM Boilers, we follow a structured and transparent process to deliver your boiler, HRSG, and plant services projects on time, within budget, and to the highest safety and quality standards. From our first site visit through post-handover support, we're right beside you every step of the way.</p>
            </div>
              <div class="col-sm-12 col-lg-5 d-lg-none">
                <a href="{{route('contact')}}" class="main_btn d-inline-block">Get in Touch
                    <span class="btn_svg">
                        <img src="{{ asset('public/front/images/blue_gear.svg')}}" loading="lazy" alt="setting icon" class="img-fluid">
                    </span>
                </a>
            </div>
        </div>
        <div class="row gx-md-5">
            <div class="col-sm-12 col-lg-6 mb-md-0 mb-4 d-none d-lg-block">
                 <img src="{{ asset('public/front/images/solution_img.jpg') }}" loading="lazy" alt="solution" class="img-fluid">
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="processslider">
                 
                    <div class="processslide" data-img="{{ asset('public/front/images/solution_img.jpg') }}">
                        <div class="process_head">
                            <div>
                                <h4 class="process_vector">FG</h4>
                                <h6>FSG</h6>
                            </div>
                            <img src="GF" loading="lazy" alt="DF" class="img-fluid d-none d-md-block">
                        </div>
                        <p>ADSF</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- result -->
<section class="result Count-result section-space-pt mt-80">
    <div class="ym_container">
        <div class="row align-items-center mb-0 mb-md-4">
            <div class="col-sm-12 col-lg-12">
                <h2 class="main_head text-white">Delivering Results You Can Count On</h2>
            </div>
            <!--<div class="col-sm-12 col-lg-4 text-md-end text-start">-->
            <!--    <a href="{{route('project')}}" target="_blank" class="main_btn d-inline-block">Our Projects-->
            <!--        <span class="btn_svg">-->
            <!--            <img src="{{ asset('public/front/images/blue_gear.svg')}}" alt="" class="img-fluid">-->
            <!--        </span>-->
            <!--    </a>-->
            <!--</div>-->
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-md-4 border-leftresult">
                <div class="result_info">
                    <h3 class="text-white">110+</h3>
                    <h4 class="sub_title text-white">Employees</h4>
                     <img class="my-3" src="{{ asset('public/front/images/counter_Vector.png')}}" loading="lazy" alt="counter Vector">
                    <p>Our team of 110+ dedicated professionals includes expert engineers and technicians who ensure precision, safety, and reliability across every service we provide.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-lg-4 border-leftresult">
                <div class="result_info">
                    <h3 class="text-white">98%</h3>
                    <h4 class="sub_title text-white">Client Satisfaction</h4>
                    <img class="my-3" src="{{ asset('public/front/images/counter_Vector.png')}}" loading="lazy" alt="counter Vector">
                    <p>with 98% client satisfaction rate reflects our commitment to quality, transparency, and timely delivery, earning long-term trust from clients in every industry we serve.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-lg-4 border-leftresult">
                <div class="result_info">
                    <h3 class="text-white">3000+</h3>
                    <h4 class="sub_title text-white">Projects</h4>
                    <img class="my-3" src="{{ asset('public/front/images/counter_Vector.png')}}" loading="lazy" alt="counter Vector">
                    <p>With 3000+ projects completed globally, we bring decades of expertise in marine and industrial maintenance solutions. From emergency repairs to full system overhauls, we deliver results that last.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-lg-4">
                <div class="result_info">
                    <h3 class="text-white">300+</h3>
                    <h4 class="sub_title text-white">Clients</h4>
                    <img class="my-3" src="{{ asset('public/front/images/counter_Vector.png')}}" loading="lazy" alt="counter Vector">
                    <p>With over 300+ active clients across the Middle East and beyond, our trusted partnerships span shipping firms, industrial plants, and government sectors.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- LinkedIn -->

<section class="boiler_slider_main mt-80">
    <div class="ym_container">
        <div class="row mb-4">
            <div class="col-sm-12 col-lg-8">
                <h2 class="main_head">Latest LinkedIn Feed</h2>
            </div> 
            <div class="col-sm-12 col-lg-4 d-none d-md-block">
                <div class="linkedin_slider_arrow">
                    <div class="d-flex gap-3 align-items-center justify-content-end">
                        <img src="{{ asset('public/front/images/slider_leftarrow.svg')}}" loading="lazy" alt="left" id="linkedin-prev"  class="linkedin-prev" style="cursor: pointer;">
                        <img src="{{ asset('public/front/images/slider_rightarrow.svg')}}" loading="lazy"  alt="right" id="linkedin-next" class="linkedin-next" style="cursor: pointer;">
                    </div>
               </div>
            </div>
           
        </div>
            <div class="row gx-md-5">
                <div class="col-sm-12 col-lg-12">
                    <div class="linkedin_slider row">
                     
                            <div class="col-lg-4 linkedinslid" style="border: 1px solid #ccc; padding: 10px; border-radius: 5px;">
                                <div class="linkedin_card">
                                   
                    
                                            <iframe width="100%" height="auto"
                                                class="linkedin_img mb-3"
                                                src="asdf"
                                                title="LinkedIn video" frameborder="0"
                                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                     
                                            <img src="https://intelliworkz.co/almuffadal-preview/public/others/3.png" alt="LinkedIn Image" width="100%" class="linkedin_img mb-3">
                                     
                                        <p class="linkedin_card_subtext">fdsa</p>
                                  
                                    <div class="text-center mt-2">
                                        <a href="df" class="main_btn" target="_blank">
                                            View on LinkedIn
                                            <span class="btn_svg">
                                                <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy" alt="setting icon" class="img-fluid">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                       
                            <p>No LinkedIn posts found.</p>
                       
                    </div>

                 <div class="col-sm-12 col-lg-4 mt-4 d-block d-md-none">
                    <div class="linkedin_slider_arrow">
                        <div class="d-flex gap-3 align-items-center justify-content-center">
                            <img src="{{ asset('public/front/images/slider_leftarrow.svg')}}" loading="lazy" alt="left" id="linkedin-prev"   class="linkedin-prev"  style="cursor: pointer;">
                            <img src="{{ asset('public/front/images/slider_rightarrow.svg')}}" loading="lazy" alt="right" id="linkedin-next"  class="linkedin-next" style="cursor: pointer;">
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="Request_home mt-80">
    <div class="ym_container">
        <div class="Request_Quote_top">
            <h1 class="main_head">Maximize Efficiency, Minimize Downtime</h1>
            <p>We offer integrated boiler and heat exchanger solutions that prioritize safety, durability, and peak efficiency. From installation to maintenance, our services are engineered for the marine, oil & gas, and power sectors. Through innovation and expertise, we ensure smoother operations and longer equipment life.</p>
        </div>
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 mb-3 mb-md-0">
                <div>
                    <form class="apply-form contact_input" id="projectform" method="post" action="{{ route('project.submit') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- First Name and Last Name in a single row -->
                        <h4 class="sub_head mb-0">Request a Quote</h4>
                        <div class="form">
                            <div class="row">
                                <div class="col-lg-6 form_item"> 
                                    <label for="firstName">Full Name * :</label><br> 
                                    <input type="text" id="firstName" name="firstName" maxlength="70" 
                                        oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();"
                                        placeholder="Your Full Name">
                                    <span class="error" id="error-firstName"></span>
                                </div>
                                <div class="col-lg-6 form_item"> 
                                    <label for="email">Email Id * :</label><br> 
                                    <input type="email" id="email" name="email" maxlength="60"
                                        placeholder="Your Email ID">
                                    <span class="error" id="error-email"></span>
                                </div>
                                <div class="col-lg-6 form_item"> 
                                    <label for="phone">Phone Number * :</label><br>
                                        <div class="phone-input-wrapper">
                                            <input type="tel" class="phone" id="phone" name="phone" maxlength="15" minlength="10"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);"
                                                placeholder="Your Contact No." pattern="\d{10,15}" title="Phone number must be between 10 to 15 digits">
                                        </div>
                                    <span class="error" id="error-phone"></span>
                                </div>
                                <div class="col-lg-6 form_item"> 
                                    <label for="pincode">Pincode * :</label><br> 
                                    <input type="text" id="pincode" name="pincode" maxlength="8" pattern="^[A-Za-z0-9\s-]+$" placeholder="Enter Your Pincode">
                                    <span class="error" id="error-pincode"></span>
                                </div>
                                <div class="col-lg-12 form_item"> 
                                    <label for="subject">Subject* :</label><br> 
                                        <input type="text" id="subject" name="subject" maxlength="50"
                                        placeholder="Subject">
                                    <span class="error" id="error-subject"></span>
                                </div>
                                <div class="col-md-12 form_item"> 
                                    <label for="message" class="form-label">Message:</label>
                                        <textarea id="message" name="message" rows="3" maxlength="100"
                                        placeholder="Message"
                                        style="resize: none;"></textarea> 
                                    <!--<span class="error" id="error-message"></span> -->
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_item">
                                        <div class="g-recaptcha" data-sitekey="6LcxVn0rAAAAANw99I--HUD3Ierf6YiWafD1Sx8S" data-callback="recaptchaVerified"></div>
                                        <div id="recaptcha-error" class="error-message" style="color: red; margin-top: 5px;"></div>
                                        @error('g-recaptcha-response')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div> 
                            <button type="submit" class="main_btn">Submit 
                                <span class="btn_svg"> <img src="{{ asset('public/front/images/blue_gear.svg')}}" loading="lazy" alt="setting icon" class="img-fluid"> 
                                </span> 
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="Request_Quote_bot">
                    <img class="img-fluid" src="{{ asset('public/front/images/project_from.png')}}" loading="lazy" alt="worker">
                    <!-- <img class="img-fluid Request_Quote_bot_left_icon " src="images/project_form_icon.png" alt=""> -->
                </div>
            </div>
        </div>
    </div>
</section>

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

$(document).ready(function () {
    const blurredFields = {};

    $('.processslider').on('afterChange', function (event, slick, currentSlide) {
        var currentSlideElement = $('.processslide').eq(currentSlide);
        var newImage = currentSlideElement.data('img');
        $('#dynamicImage').attr('src', newImage);
    });

    $('#projectform input, #projectform textarea').on('input', function () {
        let fieldId = $(this).attr('id');
        let errorId = '#error-' + fieldId;
        let value = $(this).val().trim();

        // Skip phone/email format validation until blur
        if ((fieldId === 'phone' || fieldId === 'email') && !blurredFields[fieldId]) {
            $(errorId).text('');
            return;
        }

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
                    let domain = value.split('@')[1]?.toLowerCase();
                    if (disposableDomains.includes(domain)) {
                        $(errorId).text('Invalid email addresses are not allowed');
                    } else {
                        $(errorId).text('');
                    }
                }
            } else if (fieldId === 'pincode' && !/^[A-Za-z0-9\s-]+$/.test(value)) {
                $(errorId).text('Please enter a valid pin code');
            } else {
                $(errorId).text('');
            }
        }
    });

    $('#projectform input, #projectform textarea').on('blur', function () {
        let fieldId = $(this).attr('id');
        blurredFields[fieldId] = true;
        $(this).trigger('input');
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
        } else if (!/^\d{10,15}$/.test(phone)) {
            $('#error-phone').text('Phone number must be between 10 to 15 digits');
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

        if (grecaptcha.getResponse() === '') {
            $('#recaptcha-error').text('Please verify that you are not a robot');
            isValid = false;
        } else {
            $('#recaptcha-error').text(''); // clear if already valid
        }
        if (isValid) {
            const submitBtn = $(this).find('button[type="submit"]');
            submitBtn.prop('disabled', true).text('Submitting...');
            this.submit();
        }
    });
});
    function recaptchaVerified() {
    $('#recaptcha-error').text('');
}
</script>



<!--------------------------- new add script start ----------------->
  <style>

    /* Cursor base */
    .mouse-cursor {
      position: fixed;
      left: 0;
      top: 0;
      pointer-events: none;
      border-radius: 50%;
      transform: translateZ(0);
      visibility: hidden;
    }

    .cursor-inner {
      width: 6px;
      height: 6px;
      z-index: 10000001;
      background-color: #cad62b;
      transition: width 0.3s, height 0.3s, margin 0.3s, opacity 0.3s;
    }

    .cursor-inner.cursor-hover {
      margin-left: -35px;
      margin-top: -35px;
      width: 70px;
      height: 70px;
      background-color: #cad62b;
      opacity: 0.3;
    }

    .cursor-outer {
      margin-left: -12px;
      margin-top: -12px;
      width: 30px;
      height: 30px;
      border: 1px solid #cad62b;
      box-sizing: border-box;
      z-index: 10000000;
      opacity: 0.5;
      transition: all 0.08s ease-out;
    }

    .cursor-outer.cursor-hover {
      opacity: 0;
    }
    
    /*-----------------------------------------*/

    /* ===== Scroll to Top Button ===== */
    .scroll-top {
      position: fixed;
      right: 15px;
      bottom: 15px;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #222;
      color: #fff;
      font-size: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 999;
      opacity: 0;
      pointer-events: none;
      transition: all 0.3s ease;
    }

    .scroll-top:hover {
      background: #cad62b;
      color: #000;
    }

    /* ===== Border Animation ===== */
    .scroll-top svg {
      position: absolute;
      top: 0;
      left: 0;
      transform: rotate(-90deg);
    }

   .scroll-top svg circle {
      fill: none;
      stroke: #cad62b;
      stroke-width: 3;
      stroke-dasharray: 188; /* smaller circle circumference */
      stroke-dashoffset: 188;
      transition: stroke-dashoffset 0.3s linear;
    }
    
    /*--------------------------------------------*/
    
     /* Loader overlay */
    #loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
      transition: opacity 0.6s ease, visibility 0.6s ease;
    }

    /* Hide loader smoothly */
    #loader.hide {
      opacity: 0;
      visibility: hidden;
    }

    /* Loader GIF image */
    #loader img {
      width: 120px;
      height: 120px;
      animation: pulse 1.8s infinite ease-in-out;
    }

    @keyframes pulse {
      0% { transform: scale(1); opacity: 1; }
      50% { transform: scale(1.1); opacity: 0.7; }
      100% { transform: scale(1); opacity: 1; }
    }

  </style>
  
<script>
    function mousecursor() {
      const inner = document.querySelector(".cursor-inner"),
            outer = document.querySelector(".cursor-outer");
      let mouseX = 0, mouseY = 0, isHover = false;

      window.addEventListener("mousemove", e => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        outer.style.transform = `translate(${mouseX}px, ${mouseY}px)`;
        inner.style.transform = `translate(${mouseX}px, ${mouseY}px)`;
      });

      $("body").on("mouseenter", "a, .cursor-pointer", function() {
        inner.classList.add("cursor-hover");
        outer.classList.add("cursor-hover");
      });

      $("body").on("mouseleave", "a, .cursor-pointer", function() {
        inner.classList.remove("cursor-hover");
        outer.classList.remove("cursor-hover");
      });

      inner.style.visibility = "visible";
      outer.style.visibility = "visible";
    }

    mousecursor();
    
    // -----------------------------------
    
        const scrollBtn = document.getElementById('scrollTopBtn');
    const circle = scrollBtn.querySelector('circle');
    const radius = 15;
    const circumference = 2 * Math.PI * radius;
    circle.style.strokeDasharray = circumference;
    circle.style.strokeDashoffset = circumference;

    window.addEventListener('scroll', () => {
      const scrollTop = document.documentElement.scrollTop;
      const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
      const scrollPercent = scrollTop / scrollHeight;
      const offset = circumference - scrollPercent * circumference;
      circle.style.strokeDashoffset = offset;

      if (scrollTop > 200) {
        scrollBtn.style.opacity = '1';
        scrollBtn.style.pointerEvents = 'auto';
      } else {
        scrollBtn.style.opacity = '0';
        scrollBtn.style.pointerEvents = 'none';
      }
    });

    scrollBtn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    
    // -------------------------------
    
    // When page fully loads, hide loader
    window.addEventListener("load", function() {
      const loader = document.getElementById("loader");
      loader.classList.add("hide");
    });

</script>

<!--------------------------- new add script end ------------------->



<style>
    .error {
        color: red;
        font-size: 14px;
    }
</style>