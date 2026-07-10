@include('layouts.frontheader')

@if(!empty($allFaqs))
    @php
        $faqSchemaEntities = [];

        foreach ($allFaqs as $faq) {

            // ✅ CASE 1: OLD STRUCTURE (flat array)
            if (isset($faq['title']) && isset($faq['description'])) {

                $question = trim($faq['title']);
                $answer = trim(strip_tags($faq['description']));

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

            // ✅ CASE 2: NEW STRUCTURE (nested JSON)
            elseif (isset($faq->title_description)) {

                $items = is_array($faq->title_description)
                    ? $faq->title_description
                    : json_decode($faq->title_description, true);

                foreach ($items ?? [] as $item) {
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
<section class="contact_banner">
    <div class="container-fluid p-0">
        <!-- <img src="./images/faq-bg.png" alt="faq" class="img-fluid w-100"> -->
        <div class="contact_banner_ctnt" style="background-image:url('{{ asset('public/front/images/faq-bg.png') }}');" loading="lazy">
            <div class="breadcrumbs">
                <a href="{{url('/')}}"><b>Home</b></a> > <span>FAQ</span>
            </div>
            <h1 class="main_white_head col-md-12 col-xl-12 col-xxl-12">Frequently Ask Question</h1>
        </div>
    </div>
</section>
<section class="mt-80">
    <div class="ym_container">
        <div class="faq_wrapper">
            <div class="accordion" id="faqAccordion" style="column-count: 2; column-gap: 2rem;">
                @php $faqIndex = 0; @endphp
                @foreach($allFaqs as $faq)
                    <div class="accordion-item mb-4" style="break-inside: avoid;">
                        <h2 class="accordion-header" id="heading{{ $faqIndex }}">
                            <button class="accordion-button @if($faqIndex != 0) collapsed @endif"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $faqIndex }}"
                                    aria-expanded="{{ $faqIndex == 0 ? 'true' : 'false' }}"
                                    aria-controls="collapse{{ $faqIndex }}">
                                {{ $faq['title'] }}
                            </button>
                        </h2>
                        <div id="collapse{{ $faqIndex }}"
                             class="accordion-collapse collapse @if($faqIndex == 0) show @endif"
                             aria-labelledby="heading{{ $faqIndex }}"
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                {!! $faq['description'] !!}
                            </div>
                        </div>
                    </div>
                    @php $faqIndex++; @endphp
                @endforeach
            </div>
        </div>
    </div>
</section>






@include('layouts.frontfooter')