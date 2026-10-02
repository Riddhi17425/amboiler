@include('layouts.frontheader')
<section class="contact_banner">
    <div class="container-fluid p-0">
        <!-- <img src="./images/blog-bg.png" alt="blog-bg" class="img-fluid w-100"> -->
        <div class="contact_banner_ctnt" style="background-image:url({{ asset('public/front/images/blog-bg.png')}});">
            <div class="breadcrumbs">
                <a href="{{url('/')}}"><b>Home</b></a> > <span>Blogs</span>
            </div>
            <h1 class="main_white_head col-md-12 col-xl-12 col-xxl-12">Insights & Innovations – Your <br> Guide to Industrial Solutions</h1>
        </div>
    </div>
</section>

<section class="section-space-pt">
    <div class="ym_container">
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 mb-4">
                    {{--<a class="blog_wrapper" href="{{ route('blog.details', ['url' => $blog->url]) }}" target="_blank">--}}
                    <a class="blog_wrapper" href="{{ route('blog', ['url' => $blog->url]) }}" target="_blank">
                       <img src="{{ asset('public/blogs/front_image/'.$blog->front_image)}}" alt="{{ $blog->front_image_alt ?? $blog->title }}" class="img-fluid bd_radius">                        <div>
                            <p class="blog_date">{{$blog->date ?? ''}}</p>
                            <h3 class="blog_title">{{$blog->title ?? ''}}</h3>
                            <p class="blog_desc">{{ strip_tags(html_entity_decode($blog->short_description ?? '')) }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('layouts.frontfooter')