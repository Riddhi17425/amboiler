@include('layouts.frontheader')
@if($faqs->isNotEmpty())
    @php
        $faqSchemaEntities = [];

        foreach ($faqs as $faq) {
            foreach (($faq->title_description ?? []) as $item) {
                $question = trim($item['title'] ?? '');
                $answer = trim(strip_tags($item['description'] ?? ''));

                if ($question !== '' && $answer !== '') {
                    $faqSchemaEntities[] = [
                        '@type' => 'Question',
                        'name' => $question,
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => $answer,
                        ],
                    ];
                }
            }
        }
    @endphp

    @if(!empty($faqSchemaEntities))
        <script type="application/ld+json">
            {!! json_encode([
                '@context' => 'https://schema.org',
                '@type' => 'FAQPage',
                'mainEntity' => $faqSchemaEntities,
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
        </script>
    @endif
@endif
<style>
    a{
        color:#a2ad1c;
    }
</style>

<section class="contact_banner">
    <div class="container-fluid p-0">
        <!-- <img src="./images/blog-bg.png" alt="blog-bg" class="img-fluid w-100"> -->
        <div class="contact_banner_ctnt" style="background-image:url({{ asset('public/front/images/blog-bg.png')}});">
            <div class="breadcrumbs">
                <a href="{{url('/')}}"><b>Home</b></a> > <span>Blogs</span>
            </div>
           
    </div>
</section>

<section class="section-space-pt">
    <div class="ym_container">
         <h1 class="main_h1_head">{{$blog_details->title}}</h1>
         <p class="blog_date mb-3">{{$blog_details->date ?? ''}}</p>
        <div class="row mb-4">
             <!-- <p>{{ strip_tags(html_entity_decode($blog_details->short_description ?? '')) }}</p> -->
             <div>{!! html_entity_decode($blog_details->short_description ?? '') !!}</div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xxl-6">
                {!! html_entity_decode($blog_details->description ?? '') !!}
            </div>
            <div class="col-lg-6 col-xxl-6 mt-3 mt-lg-auto">
              <img src="{{ asset('public/blogs/detail_image/'.$blog_details->detail_image)}}" alt="{{ $blog_details->detail_image_alt ?? $blog_details->title }}" class="img-fluid bd_radius d-block ms-auto">            </div>
        </div>
    </div>
</section>
<section class="blog-description">
    <div class="ym_container">
        <div class="row">
            <div class="col-lg-12 col-xxl-12">
                {!! html_entity_decode($blog_details->detail_description ?? '') !!}
            </div>
        </div>
    </div>
</section>
<section class="my-3 my-lg-5">
    <div class="ym_container">
        <a href="https://almufaddalboiler.com/contact-us" target="_blank">
          <img src="{{ asset('public/blogs/lower_banner/'.$blog_details->lower_banner)}}" alt="{{ $blog_details->lower_banner_alt ?? $blog_details->title }}" class="img-fluid">        </a>
    </div>
</section>
<section>
    <div class="ym_container">
        <div class="row">
            
            <div class="">
                <p>{!! html_entity_decode($blog_details->conclusion ?? '') !!}</p>
            </div>
        </div>
    </div>
</section>


{{-- update desgin thats added normaly by darshan 24-03-2026 --}}
 @if(!empty($faqs) && count($faqs) > 0)
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h2 class="text-center fw-bold mb-4">FAQs</h2>

                @if(!empty($faqs) && count($faqs) > 0)
                    <div class="accordion" id="faqAccordion">
                        @foreach($faqs as $faqGroupIndex => $faqGroup)
                            @if(!empty($faqGroup['title_description']))
                                @foreach($faqGroup['title_description'] as $index => $faq)
                                    @php
                                        $uniqueId = $faqGroupIndex . '_' . $index;
                                    @endphp

                                    <div class="accordion-item mb-3 border rounded overflow-hidden shadow-sm">
                                        <h3 class="accordion-header" id="heading{{ $uniqueId }}">
                                            <button
                                                class="accordion-button {{ !($faqGroupIndex == 0 && $index == 0) ? 'collapsed' : '' }}"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $uniqueId }}"
                                                aria-expanded="{{ ($faqGroupIndex == 0 && $index == 0) ? 'true' : 'false' }}"
                                                aria-controls="collapse{{ $uniqueId }}"
                                            >
                                                {{ $faq['title'] ?? 'No Title' }}
                                            </button>
                                        </h3>

                                        <div
                                            id="collapse{{ $uniqueId }}"
                                            class="accordion-collapse collapse {{ ($faqGroupIndex == 0 && $index == 0) ? 'show' : '' }}"
                                            aria-labelledby="heading{{ $uniqueId }}"
                                            data-bs-parent="#faqAccordion"
                                        >
                                            <div class="accordion-body">
                                                {!! $faq['description'] ?? '' !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                @else
                    <p class="text-center text-muted mb-0">No FAQs available.</p>
                @endif
            </div>
        </div>
    </div>
</section>
@endif
@include('layouts.frontfooter')
