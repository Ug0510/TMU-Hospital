@extends('layout.app')

@section('title', 'Blog')

@section('content')
<style>
    :root {
        --bs-white-rgb: 255, 255, 255;
        --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --bs-body-font-family: var(--bs-font-sans-serif);
        --bs-body-font-size: 1rem;
        --bs-body-font-weight: 400;
        --bs-body-line-height: 1.5;
        --bs-body-color: #212529;
        --bs-body-bg: #00000010;
    }

    .container-56789 {
        padding: 2px;
    }

    .blog-card {
        display: flex;
        flex-direction: column;
        width: 100%;
        max-width: 100%;
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }


    .h1 {
        font-size: 50px;
    }

    .image-container889,
    .blog-card img {
        width: 100%;
        height: 70%;
        /* Ensures 70% height for the image container */
        object-fit: cover;
        /* Ensures the image fills the space without distortion */
    }

    .blog-content {
        padding: 10px;
        height: 30%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .blog-title {
        font-weight: bold;
        font-size: 1rem;
        margin-bottom: 5px;
    }

    .blog-description {
        font-size: 0.9rem;
        color: #666;
    }

    /* Background blur for post_path */
    .image-container889 {
        height: 100%;
        /* Set this to match the height of the img elements */
        width: auto;
        object-fit: cover;
        overflow: hidden;
        position: relative;
    }

    .image-container889::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-position: center;
        background-size: cover;
        filter: blur(80px);
        z-index: 1;
        opacity: 0.7;
    }

    .image-container889 img {
        position: relative;
        z-index: 2;
        max-width: 100%;
        height: auto;
    }

    .blog-card img,
    .image-container889 {
        aspect-ratio: 1.36;
        width: 100%;
        object-fit: contain;
    }

    .image-container889 {
        background-size: cover;
        /* Background will cover the container */
        background-position: center;
        /* Center the background image */
        background-repeat: no-repeat;
        /* Prevent repetition */
        height: 70%;
        /* Match the height to 70% like the img */
        overflow: hidden;
        position: relative;
    }

    .blurred-background {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-size: cover;
        background-position: center;
        filter: blur(5px);
        opacity: 0.6;
        z-index: 1;
    }

    .rounded-box {
        border-radius: 15px;
        transition: transform 250ms;
    }

    @media (prefers-reduced-motion: no-preference) {
        :root {
            scroll-behavior: smooth;
        }
    }


    @media (min-width: 576px) {
        .blog-title {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            /* Limit the title to 2 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            line-clamp: 2;
            /* For non-webkit browsers */
            height: 3em;
            /* Set a fixed height, adjust as necessary */
        }
    }

    #blog_box {
        cursor: pointer;
    }

    .rounded-box:hover {
        transform: translateY(-2px);
    }

    .text-reset {
        color: inherit !important;
    }

    #blog_box img {
        width: 100%;
    }

    #style-pe7mR.style-pe7mR {
        background-color: #fff;
        border-radius: 15px;
    }

    .open-more-btn {
        display: block;
        margin: 10px auto 0;
        background-color: #001055;
        color: white;
        border: none;
        padding: 8px 16px;
        font-size: 14px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease, color 0.3s ease;
        max-width: fit-content;
    }



    .open-more-btn:hover {
        background-color: #0056b3;
        color: white;
    }

    .open-more-btn:focus {
        outline: none;
    }
</style>

<div class="row">
    <div class="col-12 mb-1">
        <h1 class="fw-bolder tmu-text-primary text-center mt-5"><span style="font-size:2.5rem; color:#ff7700">TMU</span><span style="font-size:2.5rem; color:#000f54"> Blogs</span></h1>
    </div>
</div>

<div class="container pb-3">




    @if (true)
    <div class="container container-56789 mb-4">
        <div class="row p-2 mb-3 snipcss0-0-0-1 snipcss-o1qON style-pe7mR" id="style-pe7mR">
            <div class="section-title mb-1">
                <h2 class="tmu-primary mb-0" style="font-size:22px;">All Blogs</h2>
            </div>
            <!-- <div class="fw-bolder fs-5 snipcss0-1-1-2 pt-2 text-center text-sm-start ">All Blogs</div> -->
            <div class="row justify-content-center">
                @foreach (range(1, 4) as $index)
                <div class="col-sm-6 col-md-4 col-lg-3 col-xs-12 my-3 px-2 text-justify-centre mx-auto ">
                    <div id="blog_box" class="shadow bg-white overflow-hidden rounded-box p-0 snipcss0-3-4-5">
                        <a href="#" class="text-decoration-none text-reset">
                            <div class="text-justify-centre">
                                <img src="https://picsum.photos/300/200" alt="Placeholder Blog Title" />
                                <div class="blog-content">
                                    <div class="blog-title">Sample Blog Title {{ $index }}</div>
                                    <div class="blog-description">This is a placeholder description for blog post {{ $index }}.</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center col-12 col-md-12 snipcss0-1-1-36 my-4">
                <a href="#" class="open-more-btn btn-1 px-3 py-2 fs-12"> View All </a>
            </div>
        </div>
    </div>
    @endif

    {{-- Loop for each category in groupedBlogs --}}
    @php
    $categories = ['Tech', 'Health', 'Lifestyle', 'Travel'];
    @endphp

    @foreach ($categories as $category)
    <div class="container container-56789 my-4">
        <div class="row p-2 mb-3 snipcss0-0-0-1 snipcss-o1qON style-pe7mR" id="style-pe7mR">
            <div class="section-title mb-1">
                <h2 class="tmu-primary mb-0" style="font-size:22px;">{{ $category }}</h2>
            </div>
            <!-- <div class="fw-bolder fs-4 snipcss0-1-1-2 pt-2 text-center text-sm-start">{{ $category }}</div> -->
            <div class="row">
                @foreach (range(1, 4) as $index)
                <div class="col-sm-6 col-md-4 col-lg-3 col-xs-12 my-3 px-2 text-justify-centre mx-auto ">
                    <div id="blog_box" class="shadow bg-white overflow-hidden rounded-box p-0 snipcss0-3-4-5">
                        <a href="#" class="text-decoration-none text-reset">
                            <div class="blog-card text-justify-centre">
                                <img src="https://picsum.photos/300/200" alt="{{ $category }} Blog {{ $index }}" />
                                <div class="blog-content">
                                    <div class="blog-title">{{ $category }} Blog {{ $index }}</div>
                                    <div class="blog-description">This is a placeholder description for {{ $category }} blog post {{ $index }}.</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center col-12 col-md-12 snipcss0-1-1-36 my-4">
                <a href="#" class="open-more-btn btn-1 px-3 py-2 fs-12"> View All </a>
            </div>
        </div>
    </div>
    @endforeach






</div>
</div>

@endsection