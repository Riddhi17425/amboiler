@include('layouts.frontheader')
<section class="contact_banner">
    <div class="container-fluid p-0">
        <!-- <img src="./images/about-bg.png" alt="about" class="img-fluid"> -->
        <div class="contact_banner_ctnt" style="background-image: url('{{ asset('public/front/images/about-bg.png') }}');" loading="lazy">
            <div class="breadcrumbs">
                <a href="{{route('index')}}"><b>Home</b></a> > <span>About</span>
            </div>
            <h1 class="main_white_head col-md-6 col-xl-6 col-xxl-6">Engineering Excellence, Trusted Solutions</h1>
        </div>
    </div>
</section>
<section class="section-space-pt pt-5">
    <div class="ym_container">
        <div class="row align-items-center">
            <div class="col-md-6 ">
                <h2 class="main_h1_head">Tracing Our Journey from 1938 to Today</h2>
            </div>
            <div class="col-md-6">
                <p class="mb-0">AM Boilers, part of the esteemed <b>Al Mufaddal Group</b>, brings over five decades
                    of industry experience and credibility. We specialize in the inspection, repair,
                    and maintenance of various types of boilers and heat transfer systems. Our
                    services include tube bending, retubing, as well as refractory and insulation
                    installation, and high-pressure jetting.</p>
            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="ym-container">
         <div class="h--timeline js-h--timeline">
            <div class="h--timeline-events">
                <ol>
                    @foreach ($milestones as $milestone)
                        <li id="milestone-{{ $milestone->id }}" class="h--timeline-event text-component {{ $loop->first ? 'h--timeline-event--selected' : '' }}">
                            <div class="row h--timeline-event-content">
                                <div class="col-md-8">
                                    <em class="h--timeline-event-date">
                                        {{ $milestone->year ?? '' }} - {{ $milestone->top_title ?? '' }}
                                    </em>
                                    <h2 class="h--timeline-event-title">{{ $milestone->title ?? '' }}</h2>
                                    <p class="h--timeline-event-description">
                                        {{ strip_tags(html_entity_decode($milestone->description ?? '')) }}
                                    </p>
                                </div>
                            </div>
                            <!--<img src="{{ asset('public/front/images/timeline_img.png') }}" alt="{{ $milestone->title ?? 'Timeline Image' }}" class="img-fluid timeline_img">-->
                            <!--<picture>-->
                                <img src="{{ asset('public/milestone_images/' . $milestone->image) }}" alt="{{  str_replace(['-', '_'],' ', pathinfo($milestone->alt_tag, PATHINFO_FILENAME)) }}" class="img-fluid bd_rd_10" loading="lazy">
                                <!--<img src="{{ asset('public/front/images/indsutry_mobileimg (1).webp') }}" alt="indsutry" class="img-fluid bd_rd_10">-->
                            <!--</picture>-->
                        </li>
                    @endforeach   
                </ol>
            </div> <!-- .h--timeline-events -->
            <div class="h--timeline-container">
                <div class="h--timeline-dates">
                    <div class="h--timeline-line">
                        <ol>
                            @foreach ($milestones as $milestone)
                            <li>
                                <a href="#0" class="h--timeline-date {{ $loop->first ? 'h--timeline-date--selected' : '' }}" 
                                   data-id="{{ $milestone->id }}">
                                   {{ $milestone->year }}
                                </a>
                            </li>
                            @endforeach
                        </ol>
                        <span class="h--timeline-filling-line" aria-hidden="true"></span>
                    </div> <!-- .h--timeline-line -->
                </div> <!-- .h--timeline-dates -->

                <nav class="h--timeline-navigation-container">
                    <ul>
                        <li><a href="#0" class="text-replace h--timeline-navigation h--timeline-navigation--prev h--timeline-navigation--inactive">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                    <g clip-path="url(#clip0_382_169)">
                                        <mask id="mask0_382_169" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="26" height="26">
                                            <path d="M25.5 0.5H0.5V25.5H25.5V0.5Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask0_382_169)">
                                            <path d="M22.375 12.9999H3.625M3.625 12.9999L9.18021 20.2916M3.625 12.9999L9.18021 5.70825" stroke="#3E5057" stroke-width="2.08333" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_382_169">
                                            <rect width="25" height="25" fill="white" transform="matrix(-1 0 0 1 25.5 0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a></li>
                        <li><a href="#0" class="text-replace h--timeline-navigation h--timeline-navigation--next"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                    <g clip-path="url(#clip0_382_161)">
                                        <mask id="mask0_382_161" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="26" height="26">
                                            <path d="M0.5 0.5H25.5V25.5H0.5V0.5Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask0_382_161)">
                                            <path d="M3.625 12.9999H22.375M22.375 12.9999L16.8198 20.2916M22.375 12.9999L16.8198 5.70825" stroke="#3E5057" stroke-width="2.08333" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_382_161">
                                            <rect width="25" height="25" fill="white" transform="translate(0.5 0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg></a></li>
                    </ul>
                </nav>
            </div> <!-- .h--timeline-container -->


        </div>
    </div>
</section>
<section  class="section-space-pt">
    <div class="ym_container">
        <div class="row">
            <div class="col-lg-6 col-xxl-5">
                <h2 class="main_h1_head">Our Purpose, Our Commitment</h2>
                <p>We maintain a vast inventory of essential raw materials, including tubes, boiler
                    plates, insulation, and refractory materials. Our team of highly skilled and
                    experienced technicians is available 24/7, enabling us to provide
                    comprehensive turnkey solutions for the marine, oil and gas, chemical, power,
                    and desalination industries.</p>
                <p>Our certified engineers and IACS class-approved welders are proficient in
                GTAW (TIG), GMAW (MIG), and SMAW welding processes. They deliver complex
                projects with speed and precision, even in confined spaces. Additionally, our
                workshop is certified by DNV-GL for boiler manufacturing and repair.</p>
                <div class="d-flex align-items-center">
                     <div>
                         <img src="{{ asset('public/front/images/counter_Vector.png') }}"loading="lazy"  alt="Vector" class="img-fluid me-3" loading="lazy">
                     </div>
                 <h2 class="sub_head mt-4">Mission:</h2>
                 </div>
                 <p>To deliver world-class boiler maintenance, repair, and engineering solutions with a focus on safety, quality, and innovation.</p>
                 <div class="border_btm_line"></div>
                 <div class="d-flex align-items-center">
                     <div>
                         <img src="{{ asset('public/front/images/counter_Vector.png') }}" loading="lazy" alt="Vector" class="img-fluid me-3" loading="lazy">
                     </div>
                 <h2 class="sub_head mt-4">Vision:</h2>
                 </div>
                 <p>To lead the global engineering industry by providing sustainable, cutting-edge, and energy-efficient thermal solutions.</p>
                 <div class="border_btm_line"></div>
            </div>
            <div class="col-lg-6 col-xxl-7">
                 <img src="{{ asset('public/front/images/our-commitment.png')}}" loading="lazy" alt="our commitment" class="img-fluid bd_radius d-block ms-auto" loading="lazy">
            </div>
        </div>
    </div>
</section>
{{-- <section  class="section-space-pt">
    <div class="ym_container">
        <div class="row">
            @foreach ($milestones as $milestone)
                <div class="row milestone-content" id="milestone-{{ $milestone->id }}" style="{{ $loop->first ? '' : 'display: none;' }}">
                    <div class="col-lg-6 col-xxl-5">
                        <h2 class="main_h1_head">{{ $milestone->title ?? '' }}</h2>
                        <p>{!! html_entity_decode($milestone->description ?? '') !!}</p>
                    </div>

                    <div class="col-lg-6 col-xxl-7">
                        <img src="{{ asset('public/milestone_images/'.$milestone->image) }}" loading="lazy" alt="our commitment" class="img-fluid bd_radius d-block ms-auto">
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section> --}}
<!-- result -->
<section class="result section-space-pt">
    <div class="ym_container">
        <div class="row align-items-center mb-4">
            <div class="col-sm-12 col-lg-12">
                <h2 class="main_head">Delivering Results You Can Count On</h2>
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
            <div class="col-md-6 col-lg-3 mb-lg-4 border-leftresult">
                <div class="result_info">
                    <h3>110</h3>
                    <h4 class="sub_title">Employees</h4>
                    <img src="{{ asset('public/front/images/counter_Vector.png') }}" loading="lazy" alt="Vector" class="img-fluid my-3">
                    <p>Our team of 110+ dedicated professionals includes expert engineers and technicians who ensure precision, safety, and reliability across every service we provide.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-lg-4 border-leftresult">
                <div class="result_info">
                    <h3>98%</h3>
                    <h4 class="sub_title">Client Satisfaction</h4>
                    <img src="{{ asset('public/front/images/counter_Vector.png') }}" loading="lazy" alt="Vector" class="img-fluid my-3">
                    <p>with 98% client satisfaction rate reflects our commitment to quality, transparency, and timely delivery, earning long-term trust from clients in every industry we serve.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-lg-4 border-leftresult">
                <div class="result_info">
                    <h3>3000+</h3>
                    <h4 class="sub_title">Projects</h4>
                    <img src="{{ asset('public/front/images/counter_Vector.png') }}" loading="lazy" alt="Vector" class="img-fluid my-3">
                    <p>With 3000+ projects completed globally, we bring decades of expertise in marine and industrial maintenance solutions. From emergency repairs to full system overhauls, we deliver results that last.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-lg-4">
                <div class="result_info">
                    <h3>300+</h3>
                    <h4 class="sub_title">Clients</h4>
                    <img src="{{ asset('public/front/images/counter_Vector.png') }}" loading="lazy" alt="Vector" class="img-fluid my-3">
                    <p>With over 300+ active clients across the Middle East and beyond, our trusted partnerships span shipping firms, industrial plants, and government sectors.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-space-pt ">
   <div class="ym_container">
      <div class="row">
        
            <div class="col-md-4 order-2 order-md-1 mt-4 mt-md-0">
            <img src="{{ asset('public/front/images/huzaifa_sir.png')}}" loading="lazy" alt="director" class="img-fluid w-100 pe-md-5">
          </div>
          <div class="col-md-8 order-1 order-md-2 bd_left">
             <h2 class="sub_head">A Message from Our Managing Director</h2>
             <p>Founded in 2004 in Dubai, Al Mufaddal Engineering & Marine Services Co. LLC has 
                grown from a small emergency boiler repair unit into a trusted holistic solutions 
                provider for marine and industrial systems across the Middle East.
                 Guided by the vision of our founder Mr. Shabbir Shujauddin, and driven by our core 
                values: hard work, quality, and integrity: we deliver precision repair and fabrication 
                services for boilers, economizers, valves, piping, and more.
                 “There is no substitute for hard work, no compromise 
                for quality, and no shortcuts to success.”
                 Our growth has been made possible by our dedicated team and the continued trust of 
                our valued clients, to whom we express our deepest gratitude.</p>
                 <div class="d-flex align-items-center">
                  <div>
                     <img src="{{ asset('public/front/images/counter_Vector.png') }}" loading="lazy" alt="Vector" class="img-fluid me-3">
                  </div>
                  <div>
                    <h3 class="director_name">Huzaifa S.T.</h3>
                    <p class="f-16 mb-0">Managing Director</p>
                   </div>
             </div>
            </div>
      </div>
      <div class="row section-space pb-0">
          <div class="col-md-8 pe-md-5">
             <h2 class="sub_head">A Message from Our Vice President</h2>
             <p>What we do isn't just technical, it's deeply personal. Every job we take on carries a promise: that we will deliver with speed, precision, and purpose.</p>
             <p>For over 30 years, I’ve been immersed in the realities of marine repair. And for more than two decades, I’ve had the honour of growing this company from within, shaping a team that knows what reliability truly means.</p>
             <p>From boiler and heat exchanger repairs to expansion bellows, refractory, and insulation works, we provide complete, class-approved solutions with 24/7 responsiveness and certified manpower. Our footprint across Dubai, Fujairah, and Bahrain allows us to respond wherever the sea — or your system — calls.
But what truly defines us isn’t just what we do. It’s the way we do it; with commitment, with precision, and with trust earned one job at a time.</p>
                 <div class="d-flex align-items-center">
                  <div>
                     <img src="{{ asset('public/front/images/counter_Vector.png') }}" loading="lazy" alt="Vector" class="img-fluid me-3">
                  </div>
                  <div>
                    <h3 class="director_name">Suresh.T</h3>
                    <p class="f-16 mb-0">Vice President</p>
                   </div>
             </div>
            </div>
            <div class="col-md-4 bd_left mt-4 mt-md-0">
            <img src="{{ asset('public/front/images/suresh_sir.png')}}" loading="lazy" alt="director" class="img-fluid w-100 bd_radius">
          </div>
      </div>
   </div>
</section>
<!-- timline js -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.h--timeline-date');

    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('data-id');
            const targetElement = document.getElementById('milestone-' + targetId);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start' // or 'center' if you prefer
                });

                // Optionally: highlight or mark selected
                document.querySelectorAll('.h--timeline-event--selected').forEach(el => {
                    el.classList.remove('h--timeline-event--selected');
                });
                targetElement.classList.add('h--timeline-event--selected');
            }
        });
    });
});
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        class HorizontalTimeline {
            constructor(element) {
                this.element = element;
                this.dates = element.querySelectorAll('.h--timeline-date');
                this.contents = element.querySelectorAll('.h--timeline-event');
                this.line = element.querySelector('.h--timeline-line');
                this.fillingLine = element.querySelector('.h--timeline-filling-line');
                this.navPrev = element.querySelector('.h--timeline-navigation--prev');
                this.navNext = element.querySelector('.h--timeline-navigation--next');
                this.selectedIndex = 0;
                this.translate = 0;
                this.isDragging = false;
                this.startX = 0;
                this.init();
            }

            init() {
                this.positionDates();
                this.dates.forEach((date, index) => {
                    date.addEventListener('click', (e) => {
                        e.preventDefault();
                        this.selectDate(index);
                    });
                });
                this.navPrev.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.navigate('prev');
                });
                this.navNext.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.navigate('next');
                });

                // Add drag events
                this.line.addEventListener('mousedown', (e) => this.startDrag(e));
                this.line.addEventListener('mousemove', (e) => this.drag(e));
                this.line.addEventListener('mouseup', () => this.endDrag());
                this.line.addEventListener('mouseleave', () => this.endDrag());
                this.line.addEventListener('touchstart', (e) => this.startDrag(e));
                this.line.addEventListener('touchmove', (e) => this.drag(e));
                this.line.addEventListener('touchend', () => this.endDrag());

                this.element.classList.add('h--timeline--loaded');
                this.selectDate(0);
            }

            positionDates() {
                let left = 100;
                this.dates.forEach((date, i) => {
                    date.style.left = `${left}px`;
                    left += 200; // Fixed distance between dates
                });
                this.line.style.width = `${left}px`;
            }

            selectDate(index) {
                this.dates[this.selectedIndex].classList.remove('h--timeline-date--selected');
                this.contents[this.selectedIndex].classList.remove('h--timeline-event--selected');
                this.dates[index].classList.add('h--timeline-date--selected');
                this.contents[index].classList.add('h--timeline-event--selected');
                this.selectedIndex = index;
                this.updateFilling();
                this.updateNav();
            }

            updateFilling() {
                const dateStyle = window.getComputedStyle(this.dates[this.selectedIndex]);
                const left = Number(dateStyle.getPropertyValue('left').replace('px', '')) +
                    Number(dateStyle.getPropertyValue('width').replace('px', '')) / 2;
                const lineWidth = Number(this.line.style.width.replace('px', ''));
                this.fillingLine.style.transform = `scaleX(${left / lineWidth})`;
            }

            navigate(direction) {
                const containerWidth = this.element.querySelector('.h--timeline-dates').offsetWidth;
                const lineWidth = Number(this.line.style.width.replace('px', ''));
                this.translate = direction === 'next' ? this.translate - containerWidth + 160 : this.translate + containerWidth - 160;
                if (-this.translate > lineWidth - containerWidth) this.translate = containerWidth - lineWidth;
                if (this.translate > 0) this.translate = 0;
                this.line.style.transform = `translateX(${this.translate}px)`;
                let newIndex = direction === 'next' ? this.selectedIndex + 1 : this.selectedIndex - 1;
                if (newIndex >= 0 && newIndex < this.dates.length) {
                    this.selectDate(newIndex);
                }
            }

            updateNav() {
                this.navPrev.classList.toggle('h--timeline-navigation--inactive', this.selectedIndex === 0);
                this.navNext.classList.toggle('h--timeline-navigation--inactive', this.selectedIndex === this.dates.length - 1);
            }

            // Drag/Slide Functionality
            startDrag(e) {
                this.isDragging = true;
                this.startX = e.type.includes('touch') ? e.touches[0].clientX : e.clientX;
            }

            drag(e) {
                if (!this.isDragging) return;
                const currentX = e.type.includes('touch') ? e.touches[0].clientX : e.clientX;
                const delta = currentX - this.startX;
                const containerWidth = this.element.querySelector('.h--timeline-dates').offsetWidth;
                const lineWidth = Number(this.line.style.width.replace('px', ''));
                let newTranslate = this.translate + delta;

                if (-newTranslate > lineWidth - containerWidth) newTranslate = containerWidth - lineWidth;
                if (newTranslate > 0) newTranslate = 0;
                this.line.style.transform = `translateX(${newTranslate}px)`;
            }

            endDrag() {
                if (!this.isDragging) return;
                this.isDragging = false;
                this.translate = Number(this.line.style.transform.match(/-?\d+/)?.[0] || 0);
                this.updateNav();
            }
        }

        document.querySelectorAll('.js-h--timeline').forEach(timeline => new HorizontalTimeline(timeline));
        
        // $('.h--timeline-date').on('click', function(e) {
        //     e.preventDefault();
        //     let id = $(this).data('id');
        //     // Remove active class from all
        //     $('.h--timeline-date').removeClass('h--timeline-date--selected');
        //     $(this).addClass('h--timeline-date--selected');
    
        //     // Hide all milestone content
        //     $('.milestone-content').hide();
    
        //     // Show only the selected one
        //     $('#milestone-' + id).show();
        // });
    });
</script>
    
@include('layouts.frontfooter')