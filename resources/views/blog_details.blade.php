@extends('layout.app')

@section('title', 'Blog_Details')

@section('content')
<style>
    .page-title-area-blog {
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 80px;
        text-align: left;
        position: relative;
    }

    .page-title-area-blog:before {
        position: absolute;
        content: '';
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        opacity: .60;
        background-color: rgb(255, 255, 255);
    }


    .page-title-item {
        position: relative;
        margin-top: -80px;
    }

    .page-title-item h2 {
        color: #f8f8f8;
        font-weight: 700;
        font-size: 48px;
        margin-bottom: 20px;
    }

    .page-title-item ul {
        margin: 0;
        padding: 0;
        padding-left: 20px;
    }

    .page-title-item ul li {
        list-style-type: none;
        display: inline-block;
        color: rgb(0, 0, 0);
        font-weight: 600;
        font-size: 15px;
        margin-right: 3px;
        margin-left: 3px;
    }

    .page-title-item ul li a {
        display: inline-block;
        color: rgb(0, 0, 0);
    }

    .page-title-item ul li a:hover {
        color: #111;
    }

    .page-title-item ul li i {
        display: inline-block;
        font-size: 15px;
        position: relative;
        top: 1px;
    }

    .blog-852-details-area {
        padding-bottom: 20px;
    }

    .blog-852-details-category {
        margin-bottom: 40px;
    }

    .blog-852-details-category h3 {
        font-weight: 600;
        font-size: 26px;
        margin-bottom: 30px;
    }

    .blog-852-details-category ul {
        margin: 0;
        padding: 0;
    }

    .blog-852-details-category ul li {
        list-style-type: none;
        display: block;
        border-bottom: 1px solid #dee8f5;
        position: relative;
        padding-left: 20px;
        padding-bottom: 10px;
        margin-bottom: 5px;
    }

    .blog-852-details-category ul li:hover a {
        color: #fff;
    }

    .blog-852-details-category ul li:hover:before {
        width: 100%;
    }

    .blog-852-details-category ul li:before {
        position: absolute;
        content: "";
        left: 0;
        top: -3px;
        width: 3px;
        height: 30px;
        z-index: -1;
        transition: 0.5s all ease;
        background-color: #2362bc;
    }

    .blog-852-details-category ul li:last-child {
        margin-bottom: 0;
    }

    .blog-852-details-category ul li a {
        display: block;
        z-index: 1;
        color: #4a6f8a;
        font-weight: 500;
        font-size: 14px;
    }

    .blog-852-details-item .blog-852-details-img img {
        width: 100%;
        margin-bottom: 30px;
    }

    .blog-852-details-item .blog-852-details-img h2 {
        color: #232323;
        font-weight: 600;
        font-size: 28px;
        margin-bottom: 16px;
    }

    .blog-852-details-item .blog-852-details-img ul {
        margin: 0;
        padding: 0;
        margin-bottom: 20px;
    }

    .blog-852-details-item .blog-852-details-img ul li {
        list-style-type: none;
        display: inline-block;
        color: #3a5ed3;
        font-size: 12px;
        margin-right: 15px;
    }

    .blog-852-details-item .blog-852-details-img ul li a {
        font-weight: 400;
        color: #001055;
        display: inline-block;
    }

    .blog-852-details-item .blog-852-details-img ul li a:hover {
        color: #111;
    }

    .blog-852-details-item .blog-852-details-img ul li:last-child {
        margin-right: 0;
    }

    .blog-852-details-item .blog-852-details-img ul li i {
        display: inline-block;
        font-size: 20px;
        margin-right: 5px;
    }

    .blog-852-details-item .blog-852-details-img p {
        font-size: 15px;
        margin-bottom: 22px;
    }

    .blog-852-details-item .blog-852-details-recent {
        margin-bottom: 40px;
    }

    .blog-852-details-item .blog-852-details-recent h3 {
        font-weight: 600;
        font-size: 26px;
        margin-bottom: 15px;
    }

    .blog-852-details-item .blog-852-details-recent ul {
        margin: 0;
        padding: 0;
    }

    .blog-852-details-item .blog-852-details-recent ul li {
        list-style-type: none;
        display: block;
        position: relative;
        padding-left: 90px;
        padding-bottom: 30px;
    }

    .blog-852-details-item .blog-852-details-recent ul li:last-child {
        padding-bottom: 0;
    }

    .blog-852-details-item .blog-852-details-recent ul li img {
        position: absolute;
        top: 0;
        left: 0;
        width: 80px;
        height: auto;
        border-radius: 7px;
    }

    .blog-852-details-item .blog-852-details-recent ul li a {
        display: block;
        font-weight: 600;
        font-size: 12px;
        color: #232323;
        margin-bottom: 8px;
        padding-top: 4px;
    }

    .blog-852-details-item .blog-852-details-recent ul li a:hover {
        color: #001055;
    }

    .blog-852-details-item .blog-852-details-recent ul li ul li {
        display: inline-block;
        padding-left: 0;
        color: #3a5ed3;
        font-size: 12px;
        margin-right: 25px;
        padding-bottom: 0;
    }

    .blog-852-details-item .blog-852-details-recent ul li ul li a {
        font-weight: 400;
        color: #001055;
        display: inline-block;
    }

    .blog-852-details-item .blog-852-details-recent ul li ul li a:hover {
        color: #111;
    }

    .blog-852-details-item .blog-852-details-recent ul li ul li i {
        font-size: 15px;
        margin-right: 2px;
        display: inline-block;
    }

    .blog-852-details-item .blog-852-details-recent ul li ul li:last-child {
        margin-right: 0;
    }

    .page-title-four {
        background-image: url(../img/blog/blog.jpg);
    }

    .page-title-four-n .page-title-item {
        margin-top: 0;
    }

    .blog-details-previous .prev-next ul li a {
        display: block;
        font-size: 15px;
        color: #0045be;
        border: 1px solid #0045be;
        padding: 10px 25px;
        border-radius: 6px;
    }

    .blog-details-previous .prev-next ul {
        margin: 0;
        padding: 0;
    }

    .blog-details-previous .prev-next ul li {
        list-style-type: none;
        display: inline-block;
    }

    .blog-details-previous .prev-next ul li:last-child {
        float: right;
    }

    .blog-details-previous .prev-next ul li a {
        display: block;
        font-size: 15px;
        color: #0045be;
        border: 1px solid #0045be;
        padding: 10px 25px;
        border-radius: 6px;
    }

    .blog-details-previous .prev-next ul li a:hover {
        color: #fff;
        border: 1px solid #4a6f8a;
        background-color: #4a6f8a;
    }

    .blog-details-item .blog-details-previous .prev-next ul {
        margin: 0;
        padding: 0;
    }

    .blog-details-previous .prev-next ul li {
        list-style-type: none;
        display: inline-block;
    }

    .blog-details-previous .prev-next ul li:last-child {
        float: right;
    }

    .blog-details-previous .prev-next ul li a {
        display: block;
        font-size: 15px;
        color: #0045be;
        border: 1px solid #0045be;
        padding: 10px 25px;
        border-radius: 6px;
    }

    .blog-details-previous .prev-next ul li a:hover {
        color: #fff;
        border: 1px solid #4a6f8a;
        background-color: #4a6f8a;
    }

    .blog-details-previous h3 {
        color: #232323;
        font-weight: 700;
        margin-top: 10px;
        font-size: 15px;
        margin-bottom: 25px;
    }

    .blog-details-previous ul {
        margin: 0;
        padding: 0;
        margin-bottom: 30px;
    }

    .blog-details-previous ul li {
        list-style-type: none;
        display: block;
        margin-bottom: 6px;
    }

    .blog-details-previous ul li:last-child {
        margin-bottom: 0;
    }
</style>
<!-- Page Title -->
<div class="page-title-area-blog">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="page-title-item mt-0">
                <ul>
                    <li>
                        <i class="icofont-hospital pe-2" style="font-size:13px;"></i>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <i class="icofont-simple-right"></i>
                    </li>
                    <li>
                        <i class="icofont-edit pe-2"></i>
                        Blogs
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title -->

<!-- Blog Details -->
<div class="blog-852-details-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-852-details-item">
                    <div class="blog-852-details-img">
                        <img src="https://picsum.photos/600/250" alt="Blog-852">
                        <h2>More than 80 clinical trials launch to test of the coronavirus</h2>
                        <ul>
                            <li>
                                <a href="/Blog-852-Details">
                                    <i class="icofont-folder-open"></i>
                                    Health Awareness
                                </a>
                            </li>
                            <li>
                                <i class="icofont-calendar"></i>
                                Jan 03, 2024
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
                        <p>Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    </div>
                    <div class="blog-details-previous">
                        <h3>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>
                        <ul>
                            <li>1. Donec a purus at tellus rhoncus semper non sed tortor.</li>
                            <li>2. Etiam ut est laoreet, accumsan erat sed, ullamcorper magna.</li>
                            <li>3. Nullam sit amet magna cursus, consectetur magna in, faucibus erat.</li>
                            <li>4. Aenean vitae tortor pretium, sollicitudin urna at, sollicitudin dui.</li>
                            <li>5. Phasellus tempor velit sed leo viverra lacinia.</li>
                            <li>6. Suspendisse quis sapien dapibus, sagittis ligula a, rhoncus justo.</li>
                        </ul>
                        <div class="prev-next">
                            <ul>
                                <li>
                                    <a href="/Blog-Details">Previous</a>
                                </li>
                                <li>
                                    <a href="/Blog-Details">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-852-details-item">
                    <div class="blog-852-details-recent">
                        <h3>Related Blog</h3>
                        <ul>
                            <li>
                                <img src="{{asset('img/blogs/3.jpg')}}" alt="Recent">
                                <a href="/Blog-852-Details">World AIDS Day, designated on 1 December.</a>
                                <ul>

                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2024
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <img src="{{asset('img/blogs/4.jpg')}}" alt="Recent">
                                <a href="/Blog-852-Details">World AIDS Day, designated on 1 December.</a>
                                <ul>

                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2024
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <img src="{{asset('img/blogs/2.jpg')}}" alt="Recent">
                                <a href="/Blog-852-Details">World AIDS Day, designated on 1 December.</a>
                                <ul>

                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2024
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-852-details-category">
                        <h3>Category</h3>
                        <ul>
                            <li>
                                <a href="/Blog-852-Details">Health Care</a>
                            </li>
                            <li>
                                <a href="/Blog-852-Details">Medical science</a>
                            </li>
                            <li>
                                <a href="/Blog-852-Details">Daily lifestyle</a>
                            </li>
                            <li>
                                <a href="service-details.html">Medicine</a>
                            </li>
                            <li>
                                <a href="/Blog-852-Details">Mordern Technology</a>
                            </li>
                            <li>
                                <a href="/Blog-852-Details">Cancer Research</a>
                            </li>
                            <li>
                                <a href="/Blog-852-Details">BioInformatics</a>
                            </li>
                            <li>
                                <a href="/Blog-852-Details">Hospital Events</a>
                            </li>
                            <li>
                                <a href="/Blog-852-Details">Student Succses</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog-852 Details -->

<!-- Blog-852 Details Form -->
<div class="blog-details-form mt-5 pb-2 blog-852-details-category  mb-0">
    <h3 class="ps-5 pb-2 ms-4" >Recent Blogs</h3>
    <div class="container pb-2">
        <div class="row ">
            <div class="col-lg-8">
                <div class="row g-4 d-none d-md-flex">
                    <!-- Blog Post 1 -->
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <a href="#" class="text-decoration-none">
                            <div class="card h-100" style="background: transparent; box-shadow: none; border: none; overflow: hidden; border-radius: 7px;">
                                <!-- Blog Image -->
                                <div class="position-relative">
                                    <img src="https://picsum.photos/400/250" class="card-img-top" alt="Blog Image"
                                        style="width: 100%; height: auto; object-fit: cover; border-radius: 7px;">
                                </div>

                                <!-- Blog Content -->
                                <div class="card-body text-center">
                                    <!-- Post Date and Category -->
                                    <small class="text-muted d-block mb-1">
                                        Jan 15 | Technology
                                    </small>

                                    <!-- Post Title -->
                                    <h6 class="card-title mb-0" style="font-size: 1rem;">
                                        Exploring the Future of Artificial Intelligence
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Blog Post 2 -->
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <a href="#" class="text-decoration-none">
                            <div class="card h-100" style="background: transparent; box-shadow: none; border: none; overflow: hidden; border-radius: 7px;">
                                <!-- Blog Image -->
                                <div class="position-relative">
                                    <img src="https://picsum.photos/400/250" class="card-img-top" alt="Blog Image"
                                        style="width: 100%; height: auto; object-fit: cover; border-radius: 7px;">
                                </div>

                                <!-- Blog Content -->
                                <div class="card-body text-center">
                                    <!-- Post Date and Category -->
                                    <small class="text-muted d-block mb-1">
                                        Jan 10 | Health
                                    </small>

                                    <!-- Post Title -->
                                    <h6 class="card-title mb-0" style="font-size: 1rem;">
                                        10 Tips for a Healthier Lifestyle in 2025
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Blog Post 3 -->
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <a href="#" class="text-decoration-none">
                            <div class="card h-100" style="background: transparent; box-shadow: none; border: none; overflow: hidden; border-radius: 7px;">
                                <!-- Blog Image -->
                                <div class="position-relative">
                                    <img src="https://picsum.photos/400/250" class="card-img-top" alt="Blog Image"
                                        style="width: 100%; height: auto; object-fit: cover; border-radius: 7px;">
                                </div>

                                <!-- Blog Content -->
                                <div class="card-body text-center">
                                    <!-- Post Date and Category -->
                                    <small class="text-muted d-block mb-1">
                                        Jan 5 | Travel
                                    </small>

                                    <!-- Post Title -->
                                    <h6 class="card-title mb-0" style="font-size: 1rem;">
                                        Discovering Hidden Gems: Top Travel Destinations
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Blog-852 Details Form -->

<!-- Blog-852 -->

<!-- End Blog-852 -->

@endsection