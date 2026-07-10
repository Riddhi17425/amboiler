@include('layouts.frontheader')
<section class="contact_banner">
    <div class="container-fluid p-0">
        <!-- <img src="./images/tm_bg.png" alt="Terms and Conditions" class="img-fluid w-100"> -->
        <div class="contact_banner_ctnt" style="background-image:url({{ asset('public/front/images/current_vaccancy_banner.png);')}}" loading="lazy">
            <div class="breadcrumbs">
                <a href="{{url('/')}}"><b>Home </b> ></a> <a href="Javascript:void(0)"><b>Career </b> ></a> <span>Current Vacancies</span>
            </div>
            <h1 class="main_white_head col-md-12 col-xl-12 col-xxl-12">Join Our Team – Build a Future with Us!</h1>
        </div>
    </div>
</section>
<section class="section-space-mt current-vacancies">
    <div class="ym_container">
        <div class="row justify-content-between">
            <div class="col-md-5">
                <h1 class="main_head">We’re Hiring! Discover Your Ideal Role Today</h1>
            </div>
            <div class="col-md-6 ">
                <p class="m-0">
                    We believe that every role contributes to our shared success. That’s why we provide diverse opportunities across various departments, ensuring you can find a career path that excites and challenges you.
                </p>
                <div class=" d-inline-block"> 
                <select class="form-select vacancies_select form-select-lg mb-3" id="categoryFilter">
                    <option value="all" selected>Show All</option>
                     @foreach($vacancy_categories as $category)
                         <option value="{{ $category->id }}">{{ $category->name }}</option>
                     @endforeach
                    </select>
                </div>
            </div>
            <hr>
        </div>
        <div class="category-item">
            @foreach($vacancy_categories as $category)
            <div class="row" id="{{ $category->id }}">
                <div class="col-md-6">
                    <img src="{{ asset('public/front/images/counter_Vector.png') }}" loading="lazy" alt="Vector" class="img-fluid mb-2">
                    <h2 class="sub_head">{{ $category->name }}</h2>
                    {!! html_entity_decode($category->description ?? '') !!}
                </div>
                <div class="col-md-6">
                    @foreach($vacancies[$category->id] ?? [] as $vacancy)
                    <div class="apply-card {{ !$loop->first ? 'mt-5' : '' }}">
                        <h4 class="sub_title">{{ $vacancy->title }}</h4>
                        <div>{!! html_entity_decode($vacancy->short_description ?? '') !!}</div>
                        <a href="{{route('vacancy.details',["url"=> $vacancy->url])}}" class="main_btn d-inline-block">Apply Now
                            <span class="btn_svg">
                                <img src="{{ asset('public/front/images/blue_gear.svg')}}" loading="lazy" alt="setting icon" class="img-fluid">
                            </span>
                        </a>
                    </div>
                    @endforeach
                </div>
                @if(!$loop->last)
                <hr>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const categoryFilter = document.getElementById('categoryFilter');
        const categorySection = document.querySelectorAll('.category-section');
        
        categoryFilter.addEventListener('change', function() {
            const selectedValue = this.value;
            
            if (selectedValue === 'all') {
                categorySection.forEach(section => {
                    section.style.display = 'flex';
                });
            } else {
                categorySection.forEach(section => {
                    if (section.dataset.categoryId === selectedValue) {
                        section.style.display = 'flex';
                    } else {
                        section.style.display = 'none';
                    }
                });
            }
        });
    });
</script>
@include('layouts.frontfooter')
