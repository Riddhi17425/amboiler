<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{!! $meta_title ?? 'Al Muffadal' !!}</title>
    <meta name="description" content="{!! $meta_description ?? 'Al Muffadal'!!}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:site_name" content="AM Boilers">
    <meta property="og:title" content="{!! $meta_title ?? 'AM Boilers | Marine & Industrial Boiler Maintenance' !!}">
    <meta property="og:description" content="{!! $meta_description ?? 'Dubai-based engineering company delivering repair, maintenance, and fabrication solutions for boilers, HRSGs, and heat exchangers across marine and industrial sectors.' !!}">
    <meta property="og:image" content="{{ $meta_image ?? asset('public/front/images/og-default.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="627">
    <meta property="og:locale" content="en_US">

    @if(request()->is('privacy-policy') || request()->is('thanks-for-applying') || request()->is('terms-conditions') || request()->is('register') || request()->is('login') || request()->is('thank-you'))
        <meta name="robots" content="noindex, nofollow">
    @else
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    @endif

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{!! $meta_title ?? 'AM Boilers' !!}">
    <meta name="twitter:description" content="{!! $meta_description ?? 'Al Muffadal' !!}">
    <meta name="twitter:image" content="{{ $meta_image ?? asset('public/front/images/og-default.jpg') }}">

    <link rel="canonical" href="https://www.almufaddalboiler.com{{ request()->getPathInfo() }}{{ request()->getQueryString() ? '?'.request()->getQueryString() : '' }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('public/front/images/Favicon.png')}}">
    <!-- fonts -->
    <link rel="stylesheet" href="{{ asset('public/fonts/stylesheet.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <!--select2-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('public/front/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('public/front/css/responsive.css')}}">
    <script>
    const BASE_URL = "{{ url('/') }}";
    </script>
    <style>
    .custom-placeholder {
        color: #666;
        font-size: 14px;
        transition: opacity 0.3s ease;
    }

    @media (max-width: 767.98px) {
        .custom-placeholder {
            display: none;
        }

        #google_translate_element select {
            opacity: 1 !important;
        }
    }
    .custom-placeholder {
            color: #666;
        }

       .language-select  {
        display: flex;
        align-items: center;
        border: 1px solid #DDDDDD;
        border-radius: 5px;
        padding: .4em 0;
        font-size:16px!important;

    }



    .dropdown-wrapper {
      position: relative;
      width: 150px;
    }

    .dropdown-input-lan {
      width: 100%;
      border: none;
      padding-left:10px;
      cursor: pointer;
      background: transparent;
      font-size:16px!important;
    }



    .dropdown-input-lan:focus {
      outline: none;
      border-color: unset;
    }

    .dropdown-list {
      position: absolute;
      top: 136%;
      left: -30px;
      right: 0;
      max-height: 250px;
      overflow-y: auto;
      background: #fff;
      /*border: 1px solid #ddd;*/
      /*border-radius: 6px;*/
      z-index: 100;
      display: none;
    }

    .dropdown-list.show {
      display: block;
    }

    .dropdown-list .search-box {
      padding: 6px 10px;
      /*border-bottom: 1px solid #ddd;*/
      /*background: #f9f9f9;*/
    }

    .dropdown-list .search-box input {
      width: 100%;
      padding: 6px 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .dropdown-list .search-box input:focus {
      outline: none;
      border-color: none;
    }

    .dropdown-list .list-items div {
      padding: 8px 12px;
      cursor: pointer;
    }

    .dropdown-list .list-items div:hover {
      background-color: #f1f1f1;
    }

    /* Hide Google Translate elements */
    .goog-te-banner-frame,
    .skiptranslate {
      display: none !important;
    }

    body {top: 0 !important;}

    /* Ensure dropdown remains untranslated */
    .notranslate {translate: no;}

    .skiptranslate {display: none !important;}
    .modal-body .contact{border:none;padding:0;}
    .select2-container--default .select2-selection--single{border:none;}
    @media (max-width: 767.98px) {
            .custom-placeholder {
                display: none;
            }
            .dropdown-wrapper{width:60px;}


        }
         @media (max-width: 576px) {
             .header_nav{gap:16px!important;}
             .dropdown-wrapper{width:120px;}
         }


         .am_menu_body_link
         {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;


         }

         .am_menu_body_link_catalogue
         {

               padding: 1rem;
               display: flex;
               justify-content: space-between;
               align-items:center;
               border-top: 1px solid #f0f0f038;
         }

         .am_menu_body_link_catalogue div
         {
             width:50%;

         }

    </style>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TKHSTFXF');</script>
    <!-- End Google Tag Manager -->

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKHSTFXF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="loader">
        <!--<img src="{{ asset('public/front/images/preloader.gif')}}" alt="Loading..." loading="lazy">-->
    </div>

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

     <!--Scroll to Top Button -->
 <div class="scroll-top" id="scrollTopBtn" role="button" aria-label="Scroll to top" tabindex="0">

  <svg viewBox="0 0 40 40" aria-hidden="true">
     <!-- Progress Circle -->
    <circle
      cx="20"
      cy="20"
      r="18"
      stroke="#172A42"
      stroke-width="2"
      fill="none"
      class="progress-ring"
    />

     <!-- Arrow -->
    <path
      d="M20 28 L20 12 M12 20 L20 12 L28 20"
      stroke="#ffffff"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
    />
  </svg>

</div>


    <header class="header">
        <div class="ym_container">
            <div class="header_nav">
                <!-- Mobile Toggle Button -->
                <div class="col-md-4">
                    <button class=" collapsed custom-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                        <span class="toggler-bar top-bar"></span>
                        <span class="toggler-bar middle-bar"></span>
                        <span class="toggler-bar bottom-bar"></span>
                    </button>
                </div>

                <div class="text-center col-md-4">
                    <a class="navbar-brand" href="{{route('index')}}">
                        <img src="{{ asset('public/front/images/head_logo.svg')}}" alt="Company Logo" class="img-fluid" loading="lazy">
                    </a>
                </div>

                <div class="d-flex justify-content-end col-md-4">
                    <!-- Right Icons (Search & Language) -->
                    @php

                    $categories = DB::table('service_category')
                    ->whereNull('deleted_at')
                    ->get(['id', 'name', 'url']);

                    $categoriesWithServices = DB::table('services')
                    ->select('category_id')
                    ->whereNull('deleted_at')
                    ->groupBy('category_id')
                    ->pluck('category_id')
                    ->toArray();


                    $services = DB::table('services')
                    ->whereNull('deleted_at')
                    ->get(['product_name', 'url', 'category_id']);
                    @endphp
                    <div class="d-flex gap-2 ms-0 ms-md-4 me-3 align-items-center position-relative">
                        <div class="search-box">
                            <a href="#" class="search-btn" onclick="toggleSearch(event)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                    fill="none">
                                    <path d="M28 28L21.07 21.07M21.07 21.07C22.95 19.19 24 16.65 24 14
                                         C24 8.48 19.52 4 14 4S4 8.48 4 14s4.48 10 10 10c2.65 0 5.19-1.05 7.07-2.93z"
                                        stroke="#172A42" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>

                            <div id="searchDropdown" class="search-box__dropdown"
                                style="display:none; position:absolute; top:40px; right:0; background:#fff; padding:10px; border:1px solid #ccc; box-shadow:0 2px 10px rgba(0,0,0,0.1); z-index:1000;">
                                <input id="searchInput" class="search-box__input" type="text"
                                    placeholder="Search services or categories" onkeyup="showSuggestions(this.value)">
                                <ul id="suggestionsList" style="list-style:none; padding:0; margin-top:10px;"></ul>
                            </div>

                        </div>
                    </div>
                    <script>
                    const baseUrl = "{{ url('/') }}";
                    const services = @json($services);
                    const categories = @json($categories);
                    const categoriesWithServices = @json($categoriesWithServices);

                    // Toggle search box
                    function toggleSearch(event) {
                        event.preventDefault();
                        const dropdown = document.getElementById('searchDropdown');
                        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';

                        if (dropdown.style.display === 'block') {
                            setTimeout(() => document.getElementById('searchInput').focus(), 100);
                        }
                    }

                    // Show suggestions for services and categories (without duplicates)
                    function showSuggestions(inputValue) {
                        const suggestionsList = document.getElementById('suggestionsList');
                        suggestionsList.innerHTML = '';

                        const keyword = inputValue.trim().toLowerCase();
                        if (!keyword) return;

                        const seen = new Set();

                        const matchedServices = services.filter(service =>
                            service.product_name && service.product_name.toLowerCase().includes(keyword)
                        );

                        const matchedCategories = categories.filter(category =>
                            category.name && category.name.toLowerCase().includes(keyword)
                        );

                        if (matchedServices.length === 0 && matchedCategories.length === 0) {
                            const li = document.createElement('li');
                            li.textContent = 'No matches found';
                            li.style.padding = '5px';
                            suggestionsList.appendChild(li);
                            return;
                        }

                        // Show matched services
                        matchedServices.forEach(service => {
                            const name = service.product_name.trim();
                            if (!seen.has(name)) {
                                seen.add(name);

                                const li = document.createElement('li');
                                li.textContent = name;
                                li.style.cursor = 'pointer';
                                li.style.padding = '5px 10px';
                                li.style.borderBottom = '1px solid #eee';

                                li.onclick = () => {
                                    window.location.href = `${baseUrl}/service-detail/${service.url}`;
                                };

                                suggestionsList.appendChild(li);
                            }
                        });

                        // Show matched categories
                        matchedCategories.forEach(category => {
                            const name = category.name.trim();
                            if (!seen.has(name)) {
                                seen.add(name);

                                const li = document.createElement('li');
                                li.textContent = name;
                                li.style.cursor = 'pointer';
                                li.style.padding = '5px 10px';
                                li.style.borderBottom = '1px solid #eee';

                                const hasServices = categoriesWithServices.includes(category.id);

                                li.onclick = () => {
                                    const url = hasServices ?
                                        `${baseUrl}/service/${category.url}` :
                                        `${baseUrl}/service-detail/${category.url}`;
                                    window.location.href = url;
                                };

                                suggestionsList.appendChild(li);
                            }
                        });
                    }

                    // Hide dropdown on outside click
                    document.addEventListener('click', function(e) {
                        const searchBox = document.querySelector('.search-box');
                        const dropdown = document.getElementById('searchDropdown');

                        if (!searchBox.contains(e.target)) {
                            dropdown.style.display = 'none';
                        }
                    });
                    </script>

            <div class="d-flex gap-2 align-items-center header_contact">
            <a href="tel:+971529037472" class="header_call_btn" aria-label="Call us now">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="d-none d-lg-inline">+971 52 903 7472</span>
        </a>
        </div>
                    <!-- ðŸ”§ JavaScript Logic -->
                        <!--ymcode-->
                        <div class="language-select">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 32"
                                fill="none">
                                <path
                                    d="M16 28C18.66 27.9998 21.2446 27.1163 23.348 25.488C25.4515 23.8598 26.9546 21.5791 27.6213 19.004M16 28C13.34 27.9998 10.7554 27.1163 8.65197 25.488C6.54854 23.8598 5.04544 21.5791 4.37867 19.004M16 28C19.3133 28 22 22.6267 22 16C22 9.37334 19.3133 4 16 4M16 28C12.6867 28 10 22.6267 10 16C10 9.37334 12.6867 4 16 4M27.6213 19.004C27.868 18.044 28 17.0373 28 16C28.0033 13.9361 27.4718 11.9067 26.4573 10.1093M27.6213 19.004C24.0656 20.9752 20.0656 22.0064 16 22C11.784 22 7.82267 20.9133 4.37867 19.004M4.37867 19.004C4.12633 18.0226 3.9991 17.0133 4 16C4 13.86 4.56 11.8493 5.54267 10.1093M16 4C18.1283 3.99911 20.2186 4.56448 22.0563 5.63809C23.894 6.71169 25.4129 8.25489 26.4573 10.1093M16 4C13.8717 3.99911 11.7814 4.56448 9.94375 5.63809C8.10606 6.71169 6.58708 8.25489 5.54267 10.1093M26.4573 10.1093C23.5542 12.6239 19.8407 14.0055 16 14C12.0027 14 8.34667 12.5333 5.54267 10.1093"
                                    stroke="#172A42" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>


                                <div class="ml-4">
                                    <div class="dropdown-wrapper notranslate">
                                    <input type="text" id="dropdownInput" class="dropdown-input-lan" placeholder="Select Language" readonly>
                                    <div class="dropdown-list border rounded" id="dropdownList">
                                      <div class="search-box">
                                        <input type="text" id="searchLang" placeholder="Search language...">
                                      </div>
                                      <div class="list-items" id="listItems"></div>
                                    </div>
                                  </div>

                                  <div id="google_translate_element" style="display:none;"></div>
                                </div>
                            </div>


                        </div>
                        <!--ymcode-->
                    <!--Search Icon -->
                    <!-- GOOGLE TRANSLATE SCRIPT -->
                    <!-- Google Translate Widget -->
                    <script>
                    // custom-placeholder js
                    if (window.innerWidth >= 768) {
                        const observer = new MutationObserver(() => {
                            const select = document.querySelector('#google_translate_element select');
                            if (select && select.offsetParent !== null) {
                                select.style.opacity = "1";
                                const placeholder = document.querySelector('.custom-placeholder');
                                if (placeholder) placeholder.style.display = 'none';
                                observer.disconnect();
                            }
                        });

                        observer.observe(document.getElementById('google_translate_element'), {
                            childList: true,
                            subtree: true
                        });
                    }
                    </script>



                    <!-- Google Translate dropdown container (hidden by default) -->
                </div>
            </div>
        </div>
    </header>


    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-start header_off" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">>
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body">

            <!-- LEVEL 1 -->
            <div class="menu-level active" id="menu-main">
                <div class="menu-body am_menu_body_link">
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="#" class="next-menu" data-target="menu-services"> Our Services
                                <span>&rsaquo;</span></a>
                        </li>
                         <li><a href="{{ route('service.details', ['url' => 'marine-spares-parts']) }}"> Marine Spare Parts Supply </a></li>
                        <li><a href="{{ route('certifications') }}">Certifications</a></li>
                        {{--<li><a href="{{ route('blogs') }}">Blogs</a></li>--}}
                        <li><a href="{{ route('blog') }}">Blogs</a></li>
                        <li><a href="{{route('quality-management')}}">Quality Management</a></li>
                        <!--<li><a href="{{route('contact')}}">Contact Us</a></li>-->
                    </ul>
                    <div class="am_menu_body_link_catalogue">
                       <div>
                            <a href="{{route('contact')}}" class="text-white">Contact Us</a>
                       </div>
                       <div>

                           <a href="{{ asset('public/Am_Boiler_Brochure.pdf') }}" target="_blank" class="text-white">Catalogue</a>
                       </div>
                    </div>
                </div>
            </div>

            @php
                use Illuminate\Support\Facades\DB;

                $categories = DB::table('service_category')
                    ->whereNull('deleted_at')
                    ->get();

                $servicesByCategory = DB::table('services')
                    ->whereNull('deleted_at')
                    ->get()
                    ->groupBy('category_id');

                $categoriesWithServices = $servicesByCategory->keys()->toArray();
            @endphp


            <!-- LEVEL 2: SERVICES -->
            <div class="menu-level" id="menu-services">
                <div class="menu-header">
                    <button class="back-btn" data-back="menu-main">&lsaquo; Back</button>
                    <h6 class="m-0">Our Services</h6>
                </div>

                <div class="menu-body">
                    <ul>
                        @foreach($categories as $category)
                             @unless($category->url === 'marine-spares-parts')

                            @php
                                $hasServices = in_array($category->id, $categoriesWithServices);
                                $url = $hasServices
                                    ? '#'
                                    : route('service.details', ['url' => $category->url]);
                            @endphp

                            <li>
                                <a href="{{ $url }}"
                                   @if($hasServices)
                                       class="next-menu"
                                       data-target="menu-{{ $category->id }}"
                                   @endif
                                >
                                    {{ $category->name }}
                                    @if($hasServices)
                                        <span>&rsaquo;</span>
                                    @endif
                                </a>
                            </li>
                             @endunless
                        @endforeach
                    </ul>
                </div>
            </div>


            @foreach($categories as $category)

            @if(in_array($category->id, $categoriesWithServices))

            <div class="menu-level" id="menu-{{ $category->id }}">
                <div class="menu-header">
                    <button class="back-btn" data-back="menu-services">&lsaquo; Back</button>
                    <h6 class="m-0">{{ $category->name }}</h6>
                </div>

                <div class="menu-body">
                    <ul>
                        @foreach($servicesByCategory[$category->id] as $service)
                            <li>
                                <a href="{{ route('service.details', ['url' => $service->url]) }}">
                                    {{ $service->product_name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <div class="text-center mt-4">
                        <a href="{{ route('service', ['url' => $category->url]) }}"
                           class="main_btn d-inline-block">
                            View all
                            <span class="btn_svg">
                                <img src="{{ asset('public/front/images/blue_gear.svg') }}" class="img-fluid" loading="lazy">
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            @endif
            @endforeach


            <!-- LEVEL 2: PRODUCTS -->
            <!-- <div class="menu-level" id="menu-products">
                <div class="menu-header">
                    <button class="back-btn" data-back="menu-main">&lsaquo; Back</button>
                    <h6 class="m-0">Products</h6>
                </div>
                <div class="menu-body">
                    <ul>
                        <li><a href="#">ERP Software</a></li>
                        <li><a href="#">CRM Tools</a></li>
                        <li><a href="#">Accounting Systems</a></li>
                    </ul>
                </div>
            </div> -->

        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
     <!--language code ym-->
      <script>
    const languages = [
      { code: 'af', name: 'Afrikaans' }, { code: 'sq', name: 'Shqip (Albanian)' }, { code: 'am', name: 'አማርኛ (Amharic)' }, { code: 'ar', name: 'العربية (Arabic)' }, { code: 'hy', name: 'Հայերեն (Armenian)' }, { code: 'az', name: 'Azərbaycan (Azerbaijani)' }, { code: 'eu', name: 'Euskara (Basque)' }, { code: 'be', name: 'Беларуская (Belarusian)' }, { code: 'bn', name: 'বাংলা (Bengali)' }, { code: 'bs', name: 'Bosanski (Bosnian)' },
      { code: 'bg', name: 'Български (Bulgarian)' }, { code: 'ca', name: 'Català (Catalan)' }, { code: 'ceb', name: 'Cebuano' }, { code: 'ny', name: 'Chichewa' }, { code: 'zh-CN', name: '中文 (Chinese Simplified)' }, { code: 'zh-TW', name: '中文繁體 (Chinese Traditional)' }, { code: 'co', name: 'Corsican' }, { code: 'hr', name: 'Hrvatski (Croatian)' }, { code: 'cs', name: 'Čeština (Czech)' }, { code: 'da', name: 'Dansk (Danish)' },
      { code: 'nl', name: 'Nederlands (Dutch)' }, { code: 'en', name: 'English' }, { code: 'eo', name: 'Esperanto' }, { code: 'et', name: 'Eesti (Estonian)' }, { code: 'tl', name: 'Filipino' }, { code: 'fi', name: 'Suomi (Finnish)' }, { code: 'fr', name: 'Français (French)' }, { code: 'fy', name: 'Frysk (Frisian)' }, { code: 'gl', name: 'Galego (Galician)' }, { code: 'ka', name: 'ქართული (Georgian)' },
      { code: 'de', name: 'Deutsch (German)' }, { code: 'el', name: 'Ελληνικά (Greek)' }, { code: 'gu', name: 'ગુજરાતી (Gujarati)' }, { code: 'ht', name: 'Kreyòl ayisyen (Haitian Creole)' }, { code: 'ha', name: 'Hausa' }, { code: 'haw', name: 'ʻŌlelo Hawaiʻi (Hawaiian)' }, { code: 'he', name: 'עברית (Hebrew)' }, { code: 'hi', name: 'हिन्दी (Hindi)' }, { code: 'hmn', name: 'Hmong' }, { code: 'hu', name: 'Magyar (Hungarian)' },
      { code: 'is', name: 'Íslenska (Icelandic)' }, { code: 'ig', name: 'Igbo' }, { code: 'id', name: 'Bahasa Indonesia' }, { code: 'ga', name: 'Gaeilge (Irish)' }, { code: 'it', name: 'Italiano (Italian)' }, { code: 'ja', name: '日本語 (Japanese)' }, { code: 'jw', name: 'Javanese' }, { code: 'kn', name: 'ಕನ್ನಡ (Kannada)' }, { code: 'kk', name: 'Қазақ тілі (Kazakh)' }, { code: 'km', name: 'Khmer (ភាសាខ្មែរ)' },
      { code: 'rw', name: 'Kinyarwanda' }, { code: 'ko', name: '한국어 (Korean)' }, { code: 'ku', name: 'Kurdî (Kurdish)' }, { code: 'ky', name: 'Кыргызча (Kyrgyz)' }, { code: 'lo', name: 'ລາວ (Lao)' }, { code: 'la', name: 'Latina (Latin)' }, { code: 'lv', name: 'Latviešu (Latvian)' }, { code: 'lt', name: 'Lietuvių (Lithuanian)' }, { code: 'lb', name: 'Lëtzebuergesch (Luxembourgish)' }, { code: 'mk', name: 'Македонски (Macedonian)' },
      { code: 'mg', name: 'Malagasy' }, { code: 'ms', name: 'Bahasa Melayu (Malay)' }, { code: 'ml', name: 'മലയാളം (Malayalam)' }, { code: 'mt', name: 'Malti (Maltese)' }, { code: 'mi', name: 'Māori' }, { code: 'mr', name: 'मराठी (Marathi)' }, { code: 'mn', name: 'Монгол (Mongolian)' }, { code: 'my', name: 'မြန်မာစာ (Myanmar/Burmese)' }, { code: 'ne', name: 'नेपाली (Nepali)' }, { code: 'no', name: 'Norsk (Norwegian)' },
      { code: 'or', name: 'ଓଡ଼ିଆ (Odia)' }, { code: 'ps', name: 'پښتو (Pashto)' }, { code: 'fa', name: 'فارسی (Persian)' }, { code: 'pl', name: 'Polski (Polish)' }, { code: 'pt', name: 'Português (Portuguese)' }, { code: 'pa', name: 'ਪੰਜਾਬੀ (Punjabi)' }, { code: 'ro', name: 'Română (Romanian)' }, { code: 'ru', name: 'Русский (Russian)' }, { code: 'sm', name: 'Gagana Sāmoa (Samoan)' }, { code: 'gd', name: 'Gàidhlig (Scots Gaelic)' },
      { code: 'sr', name: 'Српски (Serbian)' }, { code: 'st', name: 'Sesotho' }, { code: 'sn', name: 'Shona' }, { code: 'sd', name: 'سنڌي (Sindhi)' }, { code: 'si', name: 'සිංහල (Sinhala)' }, { code: 'sk', name: 'Slovenčina (Slovak)' }, { code: 'sl', name: 'Slovenščina (Slovenian)' }, { code: 'so', name: 'Soomaali (Somali)' }, { code: 'es', name: 'Español (Spanish)' }, { code: 'su', name: 'Sundanese' },
      { code: 'sw', name: 'Kiswahili (Swahili)' }, { code: 'sv', name: 'Svenska (Swedish)' }, { code: 'tg', name: 'Тоҷикӣ (Tajik)' }, { code: 'ta', name: 'தமிழ் (Tamil)' }, { code: 'tt', name: 'Татар (Tatar)' }, { code: 'te', name: 'తెలుగు (Telugu)' }, { code: 'th', name: 'ไทย (Thai)' }, { code: 'tr', name: 'Türkçe (Turkish)' }, { code: 'tk', name: 'Türkmençe (Turkmen)' }, { code: 'uk', name: 'Українська (Ukrainian)' },
      { code: 'ur', name: 'اردو (Urdu)' }, { code: 'ug', name: 'ئۇيغۇرچە (Uyghur)' }, { code: 'uz', name: 'Oʻzbek (Uzbek)' }, { code: 'vi', name: 'Tiếng Việt (Vietnamese)' }, { code: 'cy', name: 'Cymraeg (Welsh)' }, { code: 'xh', name: 'isiXhosa (Xhosa)' }, { code: 'yi', name: 'ייִדיש (Yiddish)' }, { code: 'yo', name: 'Yorùbá' }, { code: 'zu', name: 'isiZulu (Zulu)' }
    ];

    const dropdownInput = document.getElementById('dropdownInput');
    const dropdownList = document.getElementById('dropdownList');
    const listItemsContainer = document.getElementById('listItems');
    const searchInput = document.getElementById('searchLang');

    // Render language items
    function renderList(list) {
      listItemsContainer.innerHTML = '';
      list.forEach(lang => {
        const div = document.createElement('div');
        div.textContent = lang.name;
        div.dataset.code = lang.code;
        div.classList.add('notranslate'); // Prevent translation of list items
        div.addEventListener('click', () => {
          dropdownInput.value = lang.name;
          dropdownList.classList.remove('show');
          changeLanguage(lang.code);
        });
        listItemsContainer.appendChild(div);
      });
    }

    // Initial render
    renderList(languages);

    // Search filter
    searchInput.addEventListener('input', () => {
      const term = searchInput.value.toLowerCase();
      const filtered = languages.filter(l => l.name.toLowerCase().includes(term));
      renderList(filtered);
    });

    // Toggle dropdown
    dropdownInput.addEventListener('click', () => dropdownList.classList.toggle('show'));

    // Close dropdown on click outside
    document.addEventListener('click', e => {
      if (!e.target.closest('.dropdown-wrapper')) dropdownList.classList.remove('show');
    });

    // Google Translate
    function changeLanguage(languageCode) {
      if (!languageCode) return;
      deleteGoogTransCookies();
      document.cookie = languageCode === 'en' ? 'googtrans=/en/en; path=/;' : `googtrans=/en/${languageCode}; path=/;`;
      // Reload the page to apply translation
      window.location.reload();
    }

    // function deleteGoogTransCookies() {
    //   document.cookie.split(';').forEach(cookie => {
    //     const name = cookie.split('=')[0].trim();
    //     if (name === 'googtrans') {
    //       document.cookie = 'googtrans=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/;';
    //     }
    //   });
    // }

    function deleteGoogTransCookies() {
            // Get all cookies
            const cookies = document.cookie.split(';');

            // Find and delete all googtrans cookies
            cookies.forEach(cookie => {
                const cookieName = cookie.split('=')[0].trim();
                // console.log("Cookie found first : " + cookieName);
                if (cookieName === 'googtrans') {
                    // console.log('Found googtrans cookie, attempting to delete...');

                    // Try multiple deletion strategies to cover all cases
                    const hostname = window.location.hostname;
                    const domainParts = hostname.split('.');

                    // Delete with various path and domain combinations
                    document.cookie = 'googtrans=; path=/; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                    document.cookie = 'googtrans=; path=/; domain=' + hostname + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';

                    // Try with parent domain (e.g., .example.com)
                    if (domainParts.length > 2) {
                        const parentDomain = '.' + domainParts.slice(-2).join('.');
                        document.cookie = 'googtrans=; path=/; domain=' + parentDomain + '; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                    }

                    // Also try without domain (lets browser handle it)
                    document.cookie = 'googtrans=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';

                    // console.log('Deleted googtrans cookie');
                }
                // console.log("Cookie found: " + cookieName);
            });

            // Force clear by setting empty value
            document.cookie = 'googtrans=; path=/;';
        }

    // Set default selection based on cookie and ensure dropdown remains in English
    window.addEventListener('load', () => {
      const cookie = document.cookie.split(';').find(c => c.trim().startsWith('googtrans='));
      if (cookie) {
        const langCode = cookie.split('=')[1].split('/')[2];
        const found = languages.find(l => l.code === langCode);
        if (found) {
          dropdownInput.value = found.name; // Set dropdown to original English name
        }
      }
      // Re-render the list to ensure it stays in English
      renderList(languages);
    });

    // Google Translate init
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en',
        includedLanguages: languages.map(l => l.code).join(','),
        autoDisplay: false
      }, 'google_translate_element');
    }

      function toggleGoogleTranslate() {
            var translateElement = document.getElementById("google_translate_element");
            translateElement.style.display = (translateElement.style.display === "none") ? "block" : "none";
        }

  </script>
  <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
     <!--language code ym-->
    <script>
    // Next level navigation
    document.querySelectorAll('.next-menu').forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            const target = link.getAttribute('data-target');
            document.querySelectorAll('.menu-level').forEach(menu => menu.classList.remove('active'));
            document.getElementById(target).classList.add('active');
        });
    });

    // Back navigation
    document.querySelectorAll('.back-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const backTarget = btn.getAttribute('data-back');
            document.querySelectorAll('.menu-level').forEach(menu => menu.classList.remove('active'));
            document.getElementById(backTarget).classList.add('active');
        });
    });
    </script>


    <style>
    .goog-te-gadget span {

        display: none !important;
    }

    .goog-te-gadget {
        font-size: 0px !important;
        text-emphasis: none;
        height: 32px;
        overflow-Y: hidden;
    }

    .goog-te-gadget select {
        width: 94%;
        height: 28px;
        font-size: 14px;
        color: #182a41;
        padding: 0px 5px;
        font-weight: 400;
        background: #ffffff;
        border: none;
    }
    </style>
    <script>
    document.querySelectorAll('.dropdown').forEach(function(dropdown) {
        dropdown.addEventListener('show.bs.dropdown', function() {
            // Remove .open from all
            document.querySelectorAll('.dropdown.open').forEach(el => {
                el.classList.remove('open');
            });
            // Add to current
            dropdown.classList.add('open');
        });

        dropdown.addEventListener('hide.bs.dropdown', function() {
            dropdown.classList.remove('open');
        });
    });
    </script>
    <script>
    // let scrollTop = 0;

    // const dropdown = document.querySelector('.mega-dropdown');

    // function disableBodyScroll() {
    //     scrollTop = window.scrollY;
    //     document.body.style.position = 'fixed';
    //     document.body.style.top = `-${scrollTop}px`;
    //     document.body.style.left = '0';
    //     document.body.style.right = '0';
    //     document.body.style.width = '100%';
    // }

    // function enableBodyScroll() {
    //     document.body.style.position = '';
    //     document.body.style.top = '';
    //     document.body.style.left = '';
    //     document.body.style.right = '';
    //     document.body.style.width = '';
    //     window.scrollTo(0, scrollTop);
    // }

    // // Use on mouseenter/mouseleave or open/close
    // dropdown.addEventListener('mouseenter', disableBodyScroll);
    // dropdown.addEventListener('mouseleave', enableBodyScroll);
    //
    </script>
    <script>
document.querySelectorAll('.next-menu').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();

        const target = this.getAttribute('data-target');

        document.querySelectorAll('.menu-level').forEach(menu => {
            menu.classList.remove('active');
        });

        document.getElementById(target).classList.add('active');
    });
});

document.querySelectorAll('.back-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        const backTarget = this.getAttribute('data-back');

        document.querySelectorAll('.menu-level').forEach(menu => {
            menu.classList.remove('active');
        });

        document.getElementById(backTarget).classList.add('active');
    });
});
</script>
