@include('layouts.frontheader')
<section class="hero_section">
    <div class="hero_slider">
        <div class="hero_slide">
            <picture>
                <source media="(min-width: 765px)" srcset="{{ asset('public/front/images/hero_slide_img1.png') }}"
                    loading="lazy" type="image/webp">
                <img src="{{ asset('public/front/images/Banner_1.webp') }}" class="img-fluid mobile" loading="lazy"
                    alt="Banner 1">
            </picture>
            <div class="herobanner-content">
                <div class="ym_container ">
                    <div class="hero_content">
                        <div class="row">
                            <div class="col-xxl-5 col-xl-6">
                                <h1 class="hero_slide_head mb-2 mb-md-4"> Your Trusted Partner in Boiler & HRSG
                                    Maintenance</h1>
                                <p class="text-white mb-4">
                                    With over two decades of experience, we deliver end-to-end solutions for boilers,
                                    economizers, and heat recovery systems trusted by marine and industrial clients
                                    worldwide.
                                </p>
                                <a href="{{ url('service/repair-and-maintenance') }}" class="main_btn">Explore Repairs
                                    and Maintenance
                                    <span class="btn_svg">
                                        <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy"
                                            alt="setting icon" class="img-fluid">
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
                <source media="(min-width: 765px)" srcset="{{ asset('public/front/images/hero_slide_img2.png') }}"
                    loading="lazy" type="image/webp">
                <img src="{{ asset('public/front/images/Banner_2.webp') }}" class="img-fluid mobile" loading="lazy"
                    alt="Banner 2">
            </picture>
            <div class="herobanner-content">
                <div class="ym_container ">
                    <div class="hero_content">
                        <div class="row">
                            <div class="col-xxl-5 col-xl-6">
                                <h1 class="hero_slide_head mb-2 mb-md-4">Expert-Led Boiler & Heat Recovery Solutions
                                </h1>
                                <p class="text-white mb-4">
                                    From emergency breakdowns to long-term maintenance, we offer precision-engineered
                                    services for boilers and HRSG systems — both onboard and onshore.
                                </p>
                                <a href="{{ url('service/fabrications') }}" class="main_btn">Explore Fabrications
                                    <span class="btn_svg">
                                        <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy"
                                            alt="setting icon" class="img-fluid">
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
                <source media="(min-width: 765px)" srcset="{{ asset('public/front/images/hero_slide_img3.png') }}"
                    loading="lazy" type="image/webp">
                <img src="{{ asset('public/front/images/Banner_3.webp') }}" class="img-fluid mobile" loading="lazy"
                    alt="Banner 3">
            </picture>
            <div class="herobanner-content">
                <div class="ym_container ">
                    <div class="hero_content">
                        <div class="row">
                            <div class="col-xxl-5 col-xl-6">
                                <h1 class="hero_slide_head mb-2 mb-md-4">Our Solutions</h1>
                                <p class="text-white mb-4">
                                    Tailored, High-Performance Solutions
                                    Custom-engineered maintenance, retrofits, and shutdown support designed to optimize
                                    performance and extend asset life.
                                </p>
                                <a href="{{ route('quality-management') }}" class="main_btn">Explore Quality Management
                                    <span class="btn_svg">
                                        <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy"
                                            alt="setting icon" class="img-fluid">
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<a class="scroll_dwn" href="#about">-->
    <!--    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">-->
    <!--        <path fill-rule="evenodd" clip-rule="evenodd"-->
    <!--            d="M2.35359 6.64936C1.63313 5.59159 1.70982 4.35845 2.27479 3.4222C2.83604 2.49213 3.88483 1.83331 5.13359 1.83331L16.8669 1.83331C19.359 1.83331 20.9912 4.49905 19.6609 6.62748L19.6534 6.63927L13.7867 15.7143L13.7797 15.7251C12.5001 17.6444 9.50041 17.6444 8.22086 15.7251L2.35359 6.64936ZM3.84447 4.36942C4.0853 3.97033 4.54901 3.66665 5.13359 3.66665L16.8669 3.66665C18.039 3.66665 18.6069 4.84586 18.1094 5.65066L12.2511 14.7128C11.6962 15.5374 10.3043 15.5374 9.74943 14.7128L3.88673 5.64399C3.88202 5.6367 3.87721 5.62948 3.87229 5.62233C3.59293 5.21598 3.60944 4.75891 3.84447 4.36942Z"-->
    <!--            fill="#DDDDDD" />-->
    <!--        <path fill-rule="evenodd" clip-rule="evenodd"-->
    <!--            d="M1.83331 19.25C1.83331 19.7562 2.24372 20.1666 2.74998 20.1666H19.25C19.7562 20.1666 20.1666 19.7562 20.1666 19.25C20.1666 18.7437 19.7562 18.3333 19.25 18.3333H2.74998C2.24372 18.3333 1.83331 18.7437 1.83331 19.25Z"-->
    <!--            fill="#DDDDDD" />-->
    <!--    </svg>-->
    <!--    Scroll Down-->
    <!--</a>-->
    <!--<div class="custom-nav">-->
    <!--    <a class="prev">-->
    <!--        <img src="{{ asset('public/front/images/slider_leftarrow.svg') }}" loading="lazy" alt="slider arrow"-->
    <!--            class="img-fluid">-->
    <!--    </a>-->
    <!--    <a class="next">-->
    <!--        <img src="{{ asset('public/front/images/slider_rightarrow.svg') }}" loading="lazy" alt="slider arrow"-->
    <!--            class="img-fluid">-->

    <!--    </a>-->
    <!--</div>-->
</section>

<!-- ====== Home Page Auto Popup ====== -->
{{-- <div class="modal fade modal_home_popup" id="autoOpenPopup" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                aria-label="Close"></button>

            <div class="popup_bg" style="background-image:url('{{ asset('public/front/images/popup-bg.jpg') }}');">
                <div class="popup_content">
                    <img src="{{ asset('public/front/images/pop-logo.png') }}" alt="AM Boilers"
                        class="popup_logo mb-4">

                    <h3>
                        <span class="popup_head_highlight">Fabrication</span> of Pressure Vessels,
                        Storage Tanks, Pressure Piping, and Spools
                    </h3>

                    <p>Industrial & Marine Fabrication, Pressure Vessels and Tanks, Piping and Boiler Support Services
                    </p>

                    <div class="popup_footer_info">
                        <div class="popup_footer_links">
                            <a href="https://www.almufaddalboiler.com/" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none">
                                    <circle cx="12" cy="12" r="10" stroke="#cad62b" stroke-width="1.5" />
                                    <path d="M2 12h20M12 2c2.5 2.5 4 6 4 10s-1.5 7.5-4 10c-2.5-2.5-4-6-4-10s1.5-7.5 4-10z"
                                        stroke="#cad62b" stroke-width="1.5" />
                                </svg>
                                www.almufaddalboiler.com
                            </a>
                            <a href="tel:+971529037472">
                                <img src="{{ asset('public/front/images/ft_call.svg') }}" alt="call" width="18"
                                    height="18">
                                +971 529 037 472
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tagline moved outside popup_content so it can sit at the far right of the whole popup -->
                <div class="popup_footer_tagline">
                    <span class="tagline_small">Built for</span>
                    <span class="tagline_big">A Stronger <span class="tagline_underline">Tomorrow</span></span>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .modal_home_popup .modal-content {
        background: transparent;
        border: none;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35);
    }

    .modal_home_popup .popup_bg {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 480px;
        display: flex;
        align-items: center;
        padding: 50px;
        position: relative;
    }

    .modal_home_popup .popup_bg::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(9, 30, 62, 0.93) 40%, rgba(9, 30, 62, 0.25) 100%);
    }

    .modal_home_popup .popup_content {
        position: relative;
        z-index: 2;
        max-width: 400px;
        color: #fff;
    }

    /* .modal_home_popup .popup_logo {
        max-width: 140px;
        filter: brightness(0) invert(1);
    } */

    /* Heading style — bold, uppercase, first word highlighted */
    .modal_home_popup .popup_content h3 {
        font-size: 32px;
        font-weight: 500;
        line-height: 1.25;
        text-transform: uppercase;
        letter-spacing: 0.3px;
        margin-bottom: 16px;
        padding-bottom: 8px;
        border-bottom: 3px solid #cad62b;
    }

    .modal_home_popup .popup_content h3 .popup_head_highlight {
        color: #cad62b;
    }

    .modal_home_popup .popup_content p {
        color: #dcdcdc;
        margin-bottom: 26px;
    }

    /* Footer layout — just the links now (tagline moved out) */
    .modal_home_popup .popup_footer_info {
        margin-top: 30px;
        display: flex;
        align-items: center;
    }

    .modal_home_popup .popup_footer_links {
        display: flex;
        flex-direction: row;
        gap: 10px;
    }

    .modal_home_popup .popup_footer_links a {
        color: #fff;
        text-decoration: underline;
        font-size: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        white-space: nowrap;
    }

    .modal_home_popup .popup_footer_links img,
    .modal_home_popup .popup_footer_links svg {
        flex-shrink: 0;
    }

    /* Tagline — Built for / A Stronger Tomorrow — pinned to far right of the popup */
    .modal_home_popup .popup_footer_tagline {
        position: absolute;
        right: 40px;
        bottom: 40px;
        z-index: 2;
        text-align: right;
        color: #fff;
        text-transform: uppercase;
        line-height: 1.35;
        white-space: nowrap;
    }

    .modal_home_popup .popup_footer_tagline .tagline_small {
        display: block;
        font-size: 12px;
        font-weight: 400;
        letter-spacing: 1px;
        color: #dcdcdc;
    }

    .modal_home_popup .popup_footer_tagline .tagline_big {
        display: block;
        font-size: 16px;
        font-weight: 400;
         color: #dcdcdc;
    }

    .modal_home_popup .popup_footer_tagline .tagline_underline {
        border-bottom: 2px solid #cad62b;
        padding-bottom: 2px;
    }

    .modal_home_popup .btn-close {
        position: absolute;
        top: 15px;
        right: 15px;
        z-index: 999;
        filter: invert(1);
    }

    .modal_home_popup.fade .modal-dialog {
        transform: translateY(30px) scale(0.95);
        opacity: 0;
        transition: transform .5s cubic-bezier(.34, 1.56, .64, 1), opacity .5s ease;
    }

    .modal_home_popup.show .modal-dialog {
        transform: translateY(0) scale(1);
        opacity: 1;
    }

    @media (max-width: 767.98px) {
        .modal_home_popup .popup_bg {
            min-height: 420px;
            padding: 28px;
        }

        .modal_home_popup .popup_content h3 {
            font-size: 22px;
        }

        .modal_home_popup .popup_footer_info {
            flex-direction: column;
            align-items: flex-start;
            gap: 16px;
        }

        .modal_home_popup .popup_footer_tagline {
            position: static;
            text-align: left;
            white-space: normal;
            margin-top: 16px;
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const popupEl = document.getElementById('autoOpenPopup');
        if (popupEl) {
            const homePopup = new bootstrap.Modal(popupEl);
            setTimeout(() => {
                homePopup.show();
            }, 1000);
        }
    });
</script> --}}
<!-- ====== End Home Page Auto Popup ====== -->

<!-- ====== Home Page Auto Popup ====== -->
<div class="modal fade modal_home_popup" id="autoOpenPopup" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                aria-label="Close"></button>

            <div class="popup_bg" style="background-image:url('{{ asset('public/front/images/popup-bg.jpg') }}');">
                <div class="popup_content">
                    <img src="{{ asset('public/front/images/pop-logo.png') }}" alt="AM Boilers"
                        class="popup_logo mb-4">

                    <h3>
                        <span class="popup_head_highlight">Fabrication</span> of Pressure Vessels,
                        Storage Tanks, Pressure Piping, and Spools
                    </h3>

                    <p>Industrial & Marine Fabrication, Pressure Vessels and Tanks, Piping and Boiler Support Services
                    </p>

                   
                </div>

                <!-- Tagline moved outside popup_content so it can sit at the far right of the whole popup -->
                <div class="popup_footer_tagline">

                     <div class="popup_footer_info">
                        <div class="popup_footer_links">
                            <a href="https://www.almufaddalboiler.com/" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none">
                                    <circle cx="12" cy="12" r="10" stroke="#cad62b" stroke-width="1.5" />
                                    <path d="M2 12h20M12 2c2.5 2.5 4 6 4 10s-1.5 7.5-4 10c-2.5-2.5-4-6-4-10s1.5-7.5 4-10z"
                                        stroke="#cad62b" stroke-width="1.5" />
                                </svg>
                                www.almufaddalboiler.com
                            </a>
                            <a href="tel:+971529037472">
                                <img src="{{ asset('public/front/images/ft_call.svg') }}" alt="call" width="18"
                                    height="18">
                                +971 529 037 472
                            </a>
                        </div>
                    </div>
                   <div>
                     <span class="tagline_small">Built for</span>
                    <span class="tagline_big">A Stronger <span class="tagline_underline">Tomorrow</span></span>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .modal_home_popup .modal-content {
        background: transparent;
        border: none;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35);
        max-width: 100%;
    }

    .modal_home_popup .popup_bg {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 480px;
        /* display: flex;
        align-items: center; */
        padding: 50px;
        position: relative;
    }

    .modal_home_popup .popup_bg::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(9, 30, 62, 0.93) 40%, rgba(9, 30, 62, 0.25) 100%);
    }

    .modal_home_popup .popup_content {
        position: relative;
        z-index: 2;
        max-width: 400px;
        color: #fff;
    }

    /* .modal_home_popup .popup_logo {
        max-width: 140px;
        filter: brightness(0) invert(1);
    } */

    /* Heading style — bold, uppercase, first word highlighted */
    .modal_home_popup .popup_content h3 {
        font-size: 32px;
        font-weight: 500;
        line-height: 1.25;
        text-transform: uppercase;
        letter-spacing: 0.3px;
        margin-bottom: 16px;
        padding-bottom: 8px;
        border-bottom: 3px solid #cad62b;
    }

    .modal_home_popup .popup_content h3 .popup_head_highlight {
        color: #cad62b;
    }

    .modal_home_popup .popup_content p {
        color: #dcdcdc;
        margin-bottom: 26px;
    }

    /* Footer layout — just the links now (tagline moved out) */
    .modal_home_popup .popup_footer_info {
        margin-top: 30px;
        display: flex;
        align-items: center;
    }

    .modal_home_popup .popup_footer_links {
        display: flex;
        flex-direction: row;
        gap: 10px;
    }

    .modal_home_popup .popup_footer_links a {
        color: #fff;
        text-decoration: underline;
        font-size: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        white-space: nowrap;
    }

    .modal_home_popup .popup_footer_links img,
    .modal_home_popup .popup_footer_links svg {
        flex-shrink: 0;
    }

    /* Tagline — Built for / A Stronger Tomorrow — pinned to far right of the popup */
    .modal_home_popup .popup_footer_tagline {
        /* position: absolute;
        right: 40px;
        bottom: 40px; */
        position: relative;
        z-index: 2;
        text-align: right;
        color: #fff;
        text-transform: uppercase;
        line-height: 1.35;
        white-space: nowrap;
            display: flex;
    justify-content:space-between;
        align-items: end;
    }

    .modal_home_popup .popup_footer_tagline .tagline_small {
        display: block;
        font-size: 12px;
        font-weight: 400;
        letter-spacing: 1px;
        color: #dcdcdc;
    }

    .modal_home_popup .popup_footer_tagline .tagline_big {
        display: block;
        font-size: 16px;
        font-weight: 400;
        color: #dcdcdc;
    }

    .modal_home_popup .popup_footer_tagline .tagline_underline {
        border-bottom: 2px solid #cad62b;
        padding-bottom: 2px;
    }

    .modal_home_popup .btn-close {
        position: absolute;
        top: 15px;
        right: 15px;
        z-index: 999;
        filter: invert(1);
    }

    .modal_home_popup.fade .modal-dialog {
        transform: translateY(30px) scale(0.95);
        opacity: 0;
        transition: transform .5s cubic-bezier(.34, 1.56, .64, 1), opacity .5s ease;
    }

    .modal_home_popup.show .modal-dialog {
        transform: translateY(0) scale(1);
        opacity: 1;
    }

    /* ============ RESPONSIVE (MOBILE) ============ */
    @media (max-width: 767.98px) {
        .modal_home_popup .modal-dialog {
            margin: 14px;
            display: flex;
            align-items: center;
            min-height: calc(100% - 28px);
        }

        .modal_home_popup .modal-content {
            max-height: 90vh;
        }

        .modal_home_popup .popup_bg {
            min-height: auto;
            max-height: 90vh;
            overflow-y: auto;
            padding: 26px 20px;
            display: block;
        }

        .modal_home_popup .popup_content {
            max-width: 100%;
            width: 100%;
        }

        .modal_home_popup .popup_logo {
            max-width: 100px;
            margin-bottom: 18px !important;
        }

        .modal_home_popup .popup_content h3 {
            font-size: 19px;
            line-height: 1.3;
            margin-bottom: 12px;
            padding-bottom: 6px;
        }

        .modal_home_popup .popup_content p {
            font-size: 13.5px;
            line-height: 1.5;
            margin-bottom: 18px;
        }

        .modal_home_popup .popup_footer_info {
            margin-top: 14px;
        }

        .modal_home_popup .popup_footer_links {
            flex-direction: column;
            gap: 10px;
            width: 100%;
        }

        .modal_home_popup .popup_footer_links a {
            font-size: 13.5px;
            white-space: normal;
            word-break: break-word;
        }

        .modal_home_popup .popup_footer_tagline {
            /* position: static; */
            text-align: left;
            white-space: normal;
            margin-top: 18px;
            padding-top: 14px;
            border-top: 1px solid rgba(255, 255, 255, 0.15);
                    flex-direction: column;
        align-items: start;
        gap: 20px;
        }

        .modal_home_popup .btn-close {
            top: 12px;
            right: 12px;
            background-color: rgba(0, 0, 0, 0.35);
            border-radius: 50%;
            padding: 8px;
            opacity: 1;
        }
    }

    @media (max-width: 420px) {
        .modal_home_popup .popup_content h3 {
            font-size: 17px;
        }

        .modal_home_popup .popup_content p {
            font-size: 13px;
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const popupEl = document.getElementById('autoOpenPopup');
        if (popupEl) {
            const homePopup = new bootstrap.Modal(popupEl);
            setTimeout(() => {
                homePopup.show();
            }, 1000);
        }
    });
</script>
<!-- ====== End Home Page Auto Popup ====== -->


<!--new about-->
<section class="new_about section-space-pt" id="about">
    <div class="ym_container pb-0">
        <div class="row">
            <h2 class="main_head text-center">Engineering Excellence in Boilers & Heat Exchangers</h2>
            <div class="col-sm-12 col-lg-4" style="display:flex;align-items:center;">
                <div class="about_left">

                    <img src="{{ asset('public/front/images/about_vectoer.png') }}" loading="lazy" alt="solution"
                        class="img-fluid mb-2">
                    <p><b>Over Two Decades of Trusted Boiler Maintenance</b></p>
                    <p>AM Boilers is a Dubai-based engineering service company committed to delivering reliable,
                        high-performance repair and maintenance solutions for boilers, heat exchangers, economizers, and
                        pressure vessels.</p>
                    <p>Whether onboard vessels or at industrial plants, our experienced team ensures minimal downtime
                        and maximum operational efficiency.</p>

                </div>
            </div>
            <div class="col-sm-12 col-lg-4 position-relative homemask">
                <!--<img src="https://intelliworkz.co/almuffadal-preview/public/front/images/about_pointers.png" alt="" class="img-fluid pointer">-->
                <div class="mask">
                    <video autoplay muted loop playsinline>
                        <source src="{{ asset('public/front/images/700.mp4') }}" type="video/mp4" loading="lazy">
                    </video>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4" style="display:flex;align-items:center;">
                <div class="about_left">
                    <img src="{{ asset('public/front/images/about_vectoer.png') }}" loading="lazy" alt="solution"
                        class="img-fluid mb-2">

                    <p>At AM Boilers, we are committed to delivering top-tier boiler maintenance, heat exchanger
                        repairs, refractory solutions, and industrial automation to keep your operations running at peak
                        performance.</p>
                    <p>With a proven track record in the marine, oil & gas, and power plant industries, we ensure
                        reliability, safety, and efficiency in every project we undertake.</p>
                    <p>Delivering trusted solutions to marine and industrial clients worldwide.</p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== SERVICE SECTION ====== -->
<!--<section class="service_new">-->
<!--    <div class="container">-->
<!--        <div class="row align-items-center gx-md-5">-->
<!--            <div class="col-lg-7">-->
<!--                <div class="service_new_lt">-->
<!--                    <h2 class="main_head">Comprehensive Maintenance & Repair Solutions</h2>-->
<!--                    <p>-->
<!--                        Delivering reliable, high-quality services tailored to your needs.-->
<!--                        Focused on excellence, efficiency, and long-term value.-->
<!--                    </p>-->

<!--                    <div class="service_new_lt_tabs home_mobile">-->
<!--                        <div class="service_slide_new active"-->
<!--                            data-img="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/tm-image3.jpg"-->
<!--                            data-bg="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/service-bg1.jpg"-->
<!--                            data-title="Auxiliary Boilers"-->
<!--                            data-desc="Fabrication of complete tube panels for boiler and economizer retrofits.">-->
<!--                            <img class="img-fluid mb-3"-->
<!--                                src="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/TM-IMG1.jpg"-->
<!--                                alt="">-->
<!--                            <p><a href="javascript:void(0)" class="service_new_lt_tabs_a">Auxiliary <br> Boilers</a></p>-->
<!--                        </div>-->

<!--                        <div class="service_slide_new"-->
<!--                            data-img="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/tm-image2.jpg"-->
<!--                            data-bg="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/service-bg2.jpg"-->
<!--                            data-title="Heat Exchangers"-->
<!--                            data-desc="High-performance heat exchangers designed for maximum thermal efficiency.">-->
<!--                            <img class="img-fluid mb-3"-->
<!--                                src="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/TM-IMG1.jpg"-->
<!--                                alt="">-->
<!--                            <p><a href="javascript:void(0)" class="service_new_lt_tabs_a">Heat <br> Exchangers</a></p>-->
<!--                        </div>-->

<!--                        <div class="service_slide_new"-->
<!--                            data-img="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/tm-image1.jpg"-->
<!--                            data-bg="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/service-bg3.jpg"-->
<!--                            data-title="Pressure Vessels"-->
<!--                            data-desc="Precision engineered pressure vessels with full testing and certification.">-->
<!--                            <img class="img-fluid mb-3"-->
<!--                                src="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/TM-IMG1.jpg"-->
<!--                                alt="">-->
<!--                            <p><a href="javascript:void(0)" class="service_new_lt_tabs_a">Pressure <br> Vessels</a></p>-->
<!--                        </div>-->

<!--                        <div class="service_slide_new"-->
<!--                            data-img="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/tm-image4.jpg"-->
<!--                            data-bg="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/service-bg4.jpg"-->
<!--                            data-title="Industrial Fabrication"-->
<!--                            data-desc="Complete industrial fabrication solutions with quality assurance.">-->
<!--                            <img class="img-fluid mb-3"-->
<!--                                src="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/TM-IMG1.jpg"-->
<!--                                alt="">-->
<!--                            <p><a href="javascript:void(0)" class="service_new_lt_tabs_a">Industrial <br> Fabrication </a></p>-->
<!--                        </div>-->

<!--                        <div class="service_slide_new"-->
<!--                            data-img="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/tm-image4.jpg"-->
<!--                            data-bg="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/service-bg4.jpg"-->
<!--                            data-title="Industrial Fabrication"-->
<!--                            data-desc="Complete industrial fabrication solutions with quality assurance.">-->
<!--                            <img class="img-fluid mb-3"-->
<!--                                src="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/TM-IMG1.jpg"-->
<!--                                alt="">-->
<!--                            <p><a href="javascript:void(0)" class="service_new_lt_tabs_a">Industrial <br> Fabrication</a></p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="service_new_lt_tabs home_desktop">-->
<!--                        <div class="service_slide_new active"-->
<!--                            data-img="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/tm-image3.jpg"-->
<!--                            data-bg="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/service-bg1.jpg"-->
<!--                            data-title="Auxiliary Boilers"-->
<!--                            data-desc="Fabrication of complete tube panels for boiler and economizer retrofits.">-->
<!--                            <img class="img-fluid mb-3"-->
<!--                                src="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/TM-IMG1.jpg"-->
<!--                                alt="">-->
<!--                            <p>Auxiliary <br> Boilers</p>-->
<!--                        </div>-->

<!--                        <div class="service_slide_new"-->
<!--                            data-img="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/tm-image2.jpg"-->
<!--                            data-bg="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/service-bg2.jpg"-->
<!--                            data-title="Heat Exchangers"-->
<!--                            data-desc="High-performance heat exchangers designed for maximum thermal efficiency.">-->
<!--                            <img class="img-fluid mb-3"-->
<!--                                src="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/TM-IMG1.jpg"-->
<!--                                alt="">-->
<!--                            <p>Heat <br> Exchangers</p>-->
<!--                        </div>-->

<!--                        <div class="service_slide_new"-->
<!--                            data-img="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/tm-image1.jpg"-->
<!--                            data-bg="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/service-bg3.jpg"-->
<!--                            data-title="Pressure Vessels"-->
<!--                            data-desc="Precision engineered pressure vessels with full testing and certification.">-->
<!--                            <img class="img-fluid mb-3"-->
<!--                                src="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/TM-IMG1.jpg"-->
<!--                                alt="">-->
<!--                            <p>Pressure <br> Vessels</p>-->
<!--                        </div>-->

<!--                        <div class="service_slide_new"-->
<!--                            data-img="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/tm-image4.jpg"-->
<!--                            data-bg="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/service-bg4.jpg"-->
<!--                            data-title="Industrial Fabrication"-->
<!--                            data-desc="Complete industrial fabrication solutions with quality assurance.">-->
<!--                            <img class="img-fluid mb-3"-->
<!--                                src="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/TM-IMG1.jpg"-->
<!--                                alt="">-->
<!--                            <p>Industrial <br> Fabrication</p>-->
<!--                        </div>-->

<!--                        <div class="service_slide_new"-->
<!--                            data-img="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/tm-image4.jpg"-->
<!--                            data-bg="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/service-bg4.jpg"-->
<!--                            data-title="Industrial Fabrication"-->
<!--                            data-desc="Complete industrial fabrication solutions with quality assurance.">-->
<!--                            <img class="img-fluid mb-3"-->
<!--                                src="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/TM-IMG1.jpg"-->
<!--                                alt="">-->
<!--                            <p>Industrial <br> Fabrication</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="col-lg-5">-->
<!--                <div class="service_new_rt">-->
<!--                    <img id="serviceImage" class="img-fluid"-->
<!--                        src="https://www.themetechmount.com/demos/industriz/wp-content/uploads/2025/07/tm-image3.jpg"-->
<!--                        alt="">-->
<!--                    <div class="service_new_rt_child">-->
<!--                        <a id="serviceTitle" href="#">Auxiliary Boilers</a>-->
<!--                        <p id="serviceDesc">-->
<!--                            Fabrication of complete tube panels for boiler and economizer retrofits.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
@php
    use Illuminate\Support\Facades\DB;

    $services = DB::table('services')
        ->whereNull('deleted_at')
        ->select('product_name', 'product_image', 'service_home_image', 'product_description', 'url')
        ->get();
@endphp

<section class="service_new">
    <div class="container">
        <div class="row align-items-center gx-md-5">
            <div class="col-lg-7">
                <div class="service_new_lt">
                    <h2 class="main_head">Comprehensive Maintenance & Repair Solutions</h2>
                    <p>
                        Delivering reliable, high-quality services tailored to your needs.
                        Focused on excellence, efficiency, and long-term value.
                    </p>

                    <div class="service_new_lt_tabs">
                        @foreach ($services as $key => $service)
                            <div class="service_slide_new {{ $key == 0 ? 'active' : '' }}"
                                data-img="{{ asset('public/services/service_home_image/' . $service->service_home_image) }}"
                                data-title="{{ $service->product_name }}"
                                data-desc="{{ strip_tags($service->product_description) }}"
                                data-url="{{ route('service.details', ['url' => $service->url]) }}">
                                <img class="img-fluid mb-3"
                                    src="{{ asset('public/services/service_home_image/' . $service->service_home_image) }}"
                                    alt="{{ $service->product_name }}" loading="lazy">
                                <p><a href="{{ route('service.details', ['url' => $service->url]) }}"
                                        class="service_new_lt_tabs_a">
                                        {!! nl2br(e($service->product_name)) !!}
                                    </a></p>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

            {{-- RIGHT SIDE --}}
            <div class="col-lg-5">
                <div class="service_new_rt">
                    <img id="serviceImage" class="img-fluid"
                        src="{{ asset('public/services/service_home_image/' . $services->first()->service_home_image) }}"
                        loading="lazy" alt="{{ $services->first()->product_name }}">
                    <div class="service_new_rt_child">
                        <a id="serviceTitle"
                            href="{{ route('service.details', ['url' => $services->first()->url]) }}">
                            {{ $services->first()->product_name }}
                        </a>
                        <p id="serviceDesc">

                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--end-->
<!-- expert solution -->
<section class="solution section-space-pt mt-80">
    <div class="ym_container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <h2 class="main_head text-white">Our Expert Solutions</h2>
                <p class="text-white">We offer comprehensive boiler and heat exchanger services designed for critical
                    industries, ensuring
                    safety, reliability, and peak performance in every project.</p>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-lg-6 mb-md-4 mb-3">
                        <div class="expert_1">
                            <img src="{{ asset('public/front/images/expert_icon_1.svg') }}" loading="lazy"
                                alt="expert icon" class="img-fluid  mb-4">
                            <h2>Repairs & Maintenance</h2>
                            <p class="mb-4">Keeping Your Equipment Running at Peak Performance</p>
                            <div class="readmore-box">
                                <div class="readmore-text">
                                    <p>At AM Boilers, we offer complete lifecycle care for critical equipment, including
                                        boilers,
                                        heat
                                        exchangers, economizers, HRSGs, WHRBs, condensers, coolers, and plate heat
                                        exchangers
                                        (PHEs).
                                        Whether it's on-site emergency repairs or full-scale workshop overhauls, our
                                        expert
                                        teams
                                        are
                                        equipped to deliver fast, reliable solutions. With 24/7 rapid response
                                        availability
                                        across
                                        the
                                        WorldWide, we ensure minimal downtime and maximum operational efficiency for
                                        your marine
                                        and
                                        industrial assets.</p>
                                </div>
                                <a class="readmore-btn">Read More</a>
                            </div>

                            <div class="mt-5">
                                <a href="{{ route('service', ['url' => 'repair-and-maintenance']) }}"
                                    class="main_btn d-inline-block">Know More
                                    <span class="btn_svg">
                                        <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy"
                                            alt="setting icon" class="img-fluid">
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-md-4 mb-3">
                        <div class="expert_2">
                            <img src="{{ asset('public/front/images/expert_icon_2.svg') }}" loading="lazy"
                                alt="Manufacturing of Bellows" class="img-fluid  mb-4">
                            <h2>Manufacturing of Bellows</h2>
                            <p class="mb-4">Keeping Your Equipment Running at Peak Performance</p>

                            <div class="readmore-box">
                                <div class="readmore-text">
                                    <p>We specialize in the custom fabrication of high-performance expansion joints and
                                        bellows,
                                        precisely crafted to meet your application’s pressure, temperature, and
                                        dimensional
                                        requirements. Every unit is designed with close attention to detail and
                                        manufactured
                                        under
                                        strict QA/QC protocols, ensuring long-term reliability, enhanced safety, and
                                        consistent
                                        performance across critical industrial operations.</p>
                                </div>
                                <a class="readmore-btn">Read More</a>
                            </div>


                            <div class="mt-5">
                                <a href="{{ route('service', ['url' => 'marine-expansion-joint']) }}"
                                    class="main_btn d-inline-block">Know More
                                    <span class="btn_svg">
                                        <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy"
                                            alt="setting icon" class="img-fluid">
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                <a href="{{ route('contact') }}" class="main_btn d-inline-block">Get in Touch
                    <span class="btn_svg">
                        <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy"
                            alt="setting icon" class="img-fluid">
                    </span>
                </a>
            </div>
            <div class="col-lg-12">
                <p>At AM Boilers, we follow a structured and transparent process to deliver your boiler, HRSG, and plant
                    services projects on time, within budget, and to the highest safety and quality standards. From our
                    first site visit through post-handover support, we’re right beside you every step of the way.</p>
            </div>
            <div class="col-sm-12 col-lg-5 d-lg-none">
                <a href="{{ route('contact') }}" class="main_btn d-inline-block">Get in Touch
                    <span class="btn_svg">
                        <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy"
                            alt="setting icon" class="img-fluid">
                    </span>
                </a>
            </div>
        </div>
        <div class="row gx-md-5">
            <div class="col-sm-12 col-lg-6 mb-md-0 mb-4 d-none d-lg-block">
                <img src="{{ asset('public/front/images/solution_img.jpg') }}" loading="lazy" alt="solution"
                    class="img-fluid">
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="processslider">
                    @foreach ($processdata as $data)
                        <div class="processslide" data-img="{{ asset('public/front/images/solution_img.jpg') }}"
                            loading="lazy">
                            <div class="process_head">
                                <div>
                                    <h4 class="process_vector">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                    </h4>
                                    <h6>{{ $data->title }}</h6>
                                </div>
                                <img src="{{ asset('public/others/' . $data->image) }}" loading="lazy"
                                    alt="{{ str_replace(['-', '_'], ' ', pathinfo($data->alt_tag, PATHINFO_FILENAME)) }}"
                                    class="img-fluid d-none d-md-block">
                            </div>
                            <p>{{ strip_tags($data->description ?? '') }}</p>
                        </div>
                    @endforeach
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
                <h2 class="main_head">Delivering Results You Can Count On</h2>
            </div>
        </div>


        <div class="counter_new">
            <div class="homeresult_info">
                <span><img class="my-3 result_info_img" src="{{ asset('public/front/images/Employees.svg') }}"
                        loading="lazy" alt="counter Vector"></span>
                <h3 class="">110+</h3>
                <h4 class="sub_title">Employees</h4>
                <span><img class="my-3" src="{{ asset('public/front/images/counter_Vector.png') }}" loading="lazy"
                        alt="counter Vector"></span>
                <p>Our team of 110+ dedicated professionals includes expert engineers and technicians who ensure
                    precision, safety, and reliability across every service we provide.</p>
            </div>

            <div class="homeresult_info">
                <span><img class="my-3 result_info_img"
                        src="{{ asset('public/front/images/Client-Satisfaction.svg') }}" loading="lazy"
                        alt="counter Vector"></span>
                <h3 class="">98%</h3>
                <h4 class="sub_title ">Client Satisfaction</h4>
                <span><img class="my-3" src="{{ asset('public/front/images/counter_Vector.png') }}" loading="lazy"
                        alt="counter Vector"></span>
                <p>with 98% client satisfaction rate reflects our commitment to quality, transparency, and timely
                    delivery, earning long-term trust from clients in every industry we serve.</p>
            </div>


            <div class="homeresult_info">
                <span><img class="my-3 result_info_img" src="{{ asset('public/front/images/Projects.svg') }}"
                        loading="lazy" alt="counter Vector"></span>
                <h3 class="">3000+</h3>
                <h4 class="sub_title ">Projects</h4>
                <span><img class="my-3" src="{{ asset('public/front/images/counter_Vector.png') }}" loading="lazy"
                        alt="counter Vector"></span>
                <p>With 3000+ projects completed globally, we bring decades of expertise in marine and industrial
                    maintenance solutions. From emergency repairs to full system overhauls, we deliver results that
                    last.</p>
            </div>


            <div class="homeresult_info">
                <span><img class="my-3 result_info_img" src="{{ asset('public/front/images/Client.svg') }}"
                        loading="lazy" alt="counter Vector"></span>
                <h3 class="">300+</h3>
                <h4 class="sub_title ">Clients</h4>
                <span><img class="my-3" src="{{ asset('public/front/images/counter_Vector.png') }}" loading="lazy"
                        alt="counter Vector"></span>
                <p>With over 300+ active clients across the Middle East and beyond, our trusted partnerships span
                    shipping firms, industrial plants, and government sectors.</p>
            </div>
        </div>


    </div>
</section>
<!-- LinkedIn -->
<section class="boiler_slider_main mt-80 d-none">
    <div class="ym_container">
        <div class="row mb-4">
            <div class="col-sm-12 col-lg-8">
                <h2 class="main_head">Latest LinkedIn Feed</h2>
            </div>
            <div class="col-sm-12 col-lg-4 d-none d-md-block">
                <div class="linkedin_slider_arrow">
                    <div class="d-flex gap-3 align-items-center justify-content-end">
                        <img src="{{ asset('public/front/images/slider_leftarrow.svg') }}" loading="lazy"
                            alt="left" id="linkedin-prev" class="linkedin-prev" style="cursor: pointer;">
                        <img src="{{ asset('public/front/images/slider_rightarrow.svg') }}" loading="lazy"
                            alt="right" id="linkedin-next" class="linkedin-next" style="cursor: pointer;">
                    </div>
                </div>
            </div>

        </div>
        <div class="row gx-md-5">
            <div class="col-sm-12 col-lg-12">
                <div class="linkedin_slider row">
                    @forelse ($feed as $post)
                        <div class="col-lg-4 linkedinslid"
                            style="border: 1px solid #ccc; padding: 10px; border-radius: 5px;">
                            <div class="linkedin_card">
                                @php
                                    $description = $post['text']['text'] ?? '';
                                    $contentEntities = $post['content']['contentEntities'][0] ?? [];
                                    $thumbnail =
                                        $contentEntities['thumbnails'][0]['imageSpecificContent']['url'] ?? null;
                                    $image = $thumbnail ?? ($contentEntities['entityLocation'] ?? null);
                                    $mediaUrl = $image;
                                    $isVideo = Str::contains($mediaUrl, ['.mp4', 'video']);
                                    $activityUrn = $post['activity'] ?? null;
                                    $permalink = $activityUrn
                                        ? 'https://www.linkedin.com/feed/update/' . $activityUrn
                                        : '#';
                                @endphp

                                @if ($mediaUrl)
                                    @if ($isVideo)
                                        <iframe width="100%" height="auto" class="linkedin_img mb-3"
                                            src="{{ $mediaUrl }}" title="LinkedIn video" frameborder="0"
                                            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>
                                    @else
                                        <img src="{{ $mediaUrl }}" alt="LinkedIn Image" width="100%"
                                            class="linkedin_img mb-3">
                                    @endif
                                @endif

                                @if (!empty($description))
                                    <p class="linkedin_card_subtext">{{ Str::limit($description, 100) }}</p>
                                @endif

                                <div class="text-center mt-2">
                                    <a href="{{ $permalink }}" class="main_btn" target="_blank">
                                        View on LinkedIn
                                        <span class="btn_svg">
                                            <img src="{{ asset('public/front/images/blue_gear.svg') }}"
                                                loading="lazy" alt="setting icon" class="img-fluid">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No LinkedIn posts found.</p>
                    @endforelse
                </div>

                <div class="col-sm-12 col-lg-4 mt-4 d-block d-md-none">
                    <div class="linkedin_slider_arrow">
                        <div class="d-flex gap-3 align-items-center justify-content-center">
                            <img src="{{ asset('public/front/images/slider_leftarrow.svg') }}" loading="lazy"
                                alt="left" id="linkedin-prev" class="linkedin-prev" style="cursor: pointer;">
                            <img src="{{ asset('public/front/images/slider_rightarrow.svg') }}" loading="lazy"
                                alt="right" id="linkedin-next" class="linkedin-next" style="cursor: pointer;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonials -->
<!--<section class="testimonial  text-center">-->
<!--    <div class="ym_container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <h3 class="main_head">Trusted by Industry Leaders</h3>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row   justify-content-center">-->
<!--            <div class="col-lg-7 z-1">-->
<!--                    <div class="test_face">-->
<!--                        <div class="test_face_slider">-->
<!--                            @foreach ($testimonials as $testimonial)
-->
<!--                                <div class="test_face_slide">-->
<!--                                    <div class="face_slide_bg">-->
<!--                                        <img src="{{ asset('public/testimonials_images/' . $testimonial->image) }}" alt="{{ str_replace(['-', '_'], ' ', pathinfo($testimonial->alt_tag, PATHINFO_FILENAME)) }}" class="img-fluid">-->
<!--                                        <svg class="progress-circle">-->
<!--                                            <circle class="circle-bg" cx="40" cy="40" r="35"></circle>-->
<!--                                            <circle class="circle-progress" cx="40" cy="40" r="35"></circle>-->
<!--                                        </svg>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--
@endforeach-->
<!--                        </div>-->
<!--                    </div>-->
<!--                <div class="test_msg">-->
<!--                    <div class="test_msg_slider">-->
<!--                        @foreach ($testimonials as $testimonial)
-->
<!--                        <div class="test_msg_slide">-->
<!--                            <h3 class="sub_title">Sumita Marine Services</h3>-->
<!--                            <p class="test_msg_para">{!! html_entity_decode($testimonial->description) !!}</p>-->
<!--                            <div class="test_writer">-->
<!--                                <img src="{{ asset('public/testimonials_images/' . $testimonial->image) }}" alt="{{ str_replace(['-', '_'], ' ', pathinfo($testimonial->alt_tag, PATHINFO_FILENAME)) }}" class="img-fluid">-->
<!--                                <div>-->
<!--                                    <p class="test_name">{{ $testimonial->name ?? '' }}</p>-->
<!--                                    <p class="test_post">{{ $testimonial->designation ?? '' }}</p>-->
<!--                                </div>-->
<!--                            </div>-->

<!--                        </div>-->
<!--
@endforeach-->
<!--                    </div>-->
<!--                </div>-->

<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!-- network -->
<!--<section class="network">-->
<!--    <div class="ym_container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <h2 class="main_head text-center">A Strong Network of Excellence</h2>-->
<!--            </div>-->
<!--            <div class="col-lg-12">-->
<!--                <div class="network_slider">-->
<!--                    @foreach ($networks as $network)
-->
<!--                        <img src="{{ asset('public/network_image/' . $network->image) }}" alt="{{ str_replace(['-', '_'], ' ', pathinfo($network->alt_tag, PATHINFO_FILENAME)) }}" class="img-fluid me-5">-->
<!--
@endforeach-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!-- request -->
<section class="Request_home mt-80">
    <div class="ym_container">
        <div class="Request_Quote_top">
            <h1 class="main_head">Maximize Efficiency, Minimize Downtime</h1>
            <p>We offer integrated boiler and heat exchanger solutions that prioritize safety, durability, and peak
                efficiency. From installation to maintenance, our services are engineered for the marine, oil & gas, and
                power sectors. Through innovation and expertise, we ensure smoother operations and longer equipment
                life.</p>
        </div>
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 mb-3 mb-md-0">
                <div>
                    <form class="apply-form contact_input" id="projectform" method="post"
                        action="{{ route('project.submit') }}" enctype="multipart/form-data">
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
                                        <input type="tel" class="phone" id="phone" name="phone"
                                            maxlength="15" minlength="10"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);"
                                            placeholder="Your Contact No." pattern="\d{10,15}"
                                            title="Phone number must be between 10 to 15 digits">
                                    </div>
                                    <span class="error" id="error-phone"></span>
                                </div>
                                <!--pattern="^[A-Za-z0-9\s-]+$"-->
                                <div class="col-lg-6 form_item">
                                    <label for="location">Location * :</label><br>
                                    <input type="text" id="location" name="location" maxlength="8"
                                        placeholder="Enter Your Location">
                                    <span class="error" id="error-location"></span>
                                </div>
                                <div class="col-lg-12 form_item">
                                    <label for="subject">Subject* :</label><br>
                                    <input type="text" id="subject" name="subject" maxlength="50"
                                        placeholder="Subject">
                                    <span class="error" id="error-subject"></span>
                                </div>
                                <div class="col-md-12 form_item">
                                    <label for="message" class="form-label">Message:</label>
                                    <textarea id="message" name="message" rows="3" maxlength="100" placeholder="Message"
                                        style="resize: none;"></textarea>
                                    <!--<span class="error" id="error-message"></span> -->
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_item">
                                        <div class="g-recaptcha"
                                            data-sitekey="6LfTLWAsAAAAADlJboKj1mvD4P2RsAQaSex8CYMp"
                                            data-callback="recaptchaVerified"></div>
                                        <div id="recaptcha-error" class="error-message"
                                            style="color: red; margin-top: 5px;"></div>
                                        @error('g-recaptcha-response')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="main_btn">Submit
                                <span class="btn_svg"> <img src="{{ asset('public/front/images/blue_gear.svg') }}"
                                        loading="lazy" alt="setting icon" class="img-fluid">
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="Request_Quote_bot">
                    <img class="img-fluid" src="{{ asset('public/front/images/project_from.png') }}" loading="lazy"
                        alt="worker">
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

    $(document).ready(function() {
        const blurredFields = {};

        $('.processslider').on('afterChange', function(event, slick, currentSlide) {
            var currentSlideElement = $('.processslide').eq(currentSlide);
            var newImage = currentSlideElement.data('img');
            $('#dynamicImage').attr('src', newImage);
        });

        $('#projectform input, #projectform textarea').on('input', function() {
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
                        // case 'pincode':
                        //     $(errorId).text('Please enter your pin code');
                        //     break;
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
                }
                // else if (fieldId === 'pincode' && !/^[A-Za-z0-9\s-]+$/.test(value)) {
                //     $(errorId).text('Please enter a valid pin code');
                // }
                else {
                    $(errorId).text('');
                }
            }
        });

        $('#projectform input, #projectform textarea').on('blur', function() {
            let fieldId = $(this).attr('id');
            blurredFields[fieldId] = true;
            $(this).trigger('input');
        });

        $('#projectform').on('submit', function(e) {
            e.preventDefault();
            let isValid = true;

            $('.error').text('');
            // Blocked spam Names & Emails
            const blockedNames = ['robertjaxia'];
            const blockedEmails = ['zekisuquc419@gmail.com'];
            // Get form values
            let firstName = $('#firstName').val().trim();
            let email = $('#email').val().trim().toLowerCase();

            // Check blocked name
            if (blockedNames.includes(firstName.toLowerCase())) {
                $('#error-firstName').text('This name is not allowed');
                isValid = false;
            }
            // Check blocked email
            if (blockedEmails.includes(email)) {
                $('#error-email').text('This email is blocked');
                isValid = false;
            }


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

            email = $('#email').val().trim();
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

            // let pin = $('#pincode').val().trim();
            // if (pin === '') {
            //     $('#error-pincode').text('Please enter your pin code');
            //     isValid = false;
            // }
            // else if (!/^[A-Za-z0-9\s-]+$/.test(pin)) {
            // if (!/^[A-Za-z0-9\s-]+$/.test(pin)) {
            //     $('#error-pincode').text('Please enter a valid pin code');
            //     isValid = false;
            // }

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
<script>
    // Works for any number of .readmore-btn
    document.querySelectorAll('.readmore-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const text = btn.closest('.readmore-box').querySelector('.readmore-text');
            text.classList.toggle('show');
            btn.textContent = text.classList.contains('show') ? 'Read Less' : 'Read More';
        });
    });
</script>


<style>
    .error {
        color: red;
        font-size: 14px;
    }
</style>
