@extends('layout.app')

@section('title', 'News_Details')

@section('content')


<style>
    .page-title-area-news {
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 80px;
        text-align: left;
        position: relative;
    }

    .page-title-area-news:before {
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

    .news-details-area {
        padding-bottom: 20px;
    }

    .news-details-category {
        margin-bottom: 40px;
    }

    .news-details-category h3 {
        font-weight: 600;
        font-size: 26px;
        margin-bottom: 30px;
    }

    .news-details-category ul {
        margin: 0;
        padding: 0;
    }

    .news-details-category ul li {
        list-style-type: none;
        display: block;
        border-bottom: 1px solid #dee8f5;
        position: relative;
        padding-left: 20px;
        padding-bottom: 10px;
        margin-bottom: 5px;
    }

    .news-details-category ul li:hover a {
        color: #fff;
    }

    .news-details-category ul li:hover:before {
        width: 100%;
    }

    .news-details-category ul li:before {
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

    .news-details-category ul li:last-child {
        margin-bottom: 0;
    }

    .news-details-category ul li a {
        display: block;
        z-index: 1;
        color: #4a6f8a;
        font-weight: 500;
        font-size: 14px;
    }

    .blog-details-item .blog-details-img img {
        width: 100%;
        margin-bottom: 30px;
    }

    .blog-details-item .blog-details-img h2 {
        color: #232323;
        font-weight: 600;
        font-size: 28px;
        margin-bottom: 16px;
    }

    .blog-details-item .blog-details-img ul {
        margin: 0;
        padding: 0;
        margin-bottom: 20px;
    }

    .blog-details-item .blog-details-img ul li {
        list-style-type: none;
        display: inline-block;
        color: #3a5ed3;
        font-size: 12px;
        margin-right: 15px;
    }

    .blog-details-item .blog-details-img ul li a {
        font-weight: 400;
        color: #001055;
        display: inline-block;
    }

    .blog-details-item .blog-details-img ul li a:hover {
        color: #111;
    }

    .blog-details-item .blog-details-img ul li:last-child {
        margin-right: 0;
    }

    .blog-details-item .blog-details-img ul li i {
        display: inline-block;
        font-size: 20px;
        margin-right: 5px;
    }

    .blog-details-item .blog-details-img p {
        font-size: 15px;
        margin-bottom: 22px;
    }

    .blog-details-item .news-details-recent {
        margin-bottom: 40px;
    }

    .blog-details-item .news-details-recent h3 {
        font-weight: 600;
        font-size: 26px;
        margin-bottom: 30px;
    }

    .blog-details-item .news-details-recent ul {
        margin: 0;
        padding: 0;
    }

    .blog-details-item .news-details-recent ul li {
        list-style-type: none;
        display: block;
        position: relative;
        padding-left: 90px;
        padding-bottom: 25px;
    }

    .blog-details-item .news-details-recent ul li:last-child {
        padding-bottom: 0;
    }

    .blog-details-item .news-details-recent ul li img {
        position: absolute;
        top: 0;
        left: 0;
        width: 80px;
        height: auto;
        border-radius: 7px;
    }

    .blog-details-item .news-details-recent ul li a {
        display: block;
        font-weight: 600;
        font-size: 12px;
        color: #232323;
        margin-bottom: 8px;
        padding-top: 4px;
    }

    .blog-details-item .news-details-recent ul li a:hover {
        color: #001055;
    }

    .blog-details-item .news-details-recent ul li ul li {
        display: inline-block;
        padding-left: 0;
        color: #3a5ed3;
        font-size: 12px;
        margin-right: 25px;
        padding-bottom: 0;
    }

    .blog-details-item .news-details-recent ul li ul li a {
        font-weight: 400;
        color: #001055;
        display: inline-block;
    }

    .blog-details-item .news-details-recent ul li ul li a:hover {
        color: #111;
    }

    .blog-details-item .news-details-recent ul li ul li i {
        font-size: 15px;
        margin-right: 2px;
        display: inline-block;
    }

    .blog-details-item .news-details-recent ul li ul li:last-child {
        margin-right: 0;
    }

    .page-title-four {
        background-image: url(../img/blog/blog.jpg);
    }

    .page-title-four-n .page-title-item {
        margin-top: 0;
    }


    @media (max-width: 991.98px) {

        /* Tablet View */
        .main-news {
            order: 1;
        }

        .categories-section {
            order: 2;
        }

        .related-news {
            order: 3;
        }
    }

    @media (max-width: 767.98px) {

        /* Mobile View */
        .main-news {
            order: 1;
        }

        .categories-section {
            order: 2;
        }

        .related-news {
            order: 3;
        }

        .categories-section,
        .related-news {
            display: block;
            width: 100%;
        }
    }
</style>
<div class="row">
    <div class="col-12 mb-1">
        <h1 class="fw-bolder tmu-text-primary text-center mt-3"><span style="font-size:2.5rem; color:#ff7700">TMU</span><span style="font-size:2.5rem; color:#000f54"> News</span></h1>
    </div>
</div>
<div class="news-details-area pt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 categories-section">
                <div class="news-details-category">
                    <h3>Category</h3>
                    <ul>
                        <li>
                            <a href="/Blog-Details">Health Care</a>
                        </li>
                        <li>
                            <a href="/Blog-Details">Medical science</a>
                        </li>
                        <li>
                            <a href="/Blog-Details">Daily lifestyle</a>
                        </li>
                        <li>
                            <a href="service-details.html">Medicine</a>
                        </li>
                        <li>
                            <a href="/Blog-Details">Mordern Technology</a>
                        </li>
                        <li>
                            <a href="/Blog-Details">Cancer Research</a>
                        </li>
                        <li>
                            <a href="/Blog-Details">BioInformatics</a>
                        </li>
                        <li>
                            <a href="/Blog-Details">Hospital Events</a>
                        </li>
                        <li>
                            <a href="/Blog-Details">Student Succses</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-6 main-news">
                <div class="blog-details-item">
                    <div class="blog-details-img">
                        <img src="https://picsum.photos/600/360" alt="Blog">
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                Jan 03, 2024
                            </li>
                            <li>
                                <i class="icofont-folder-open"></i>
                                Seminar
                            </li>
                        </ul>
                        <h2>More than 80 clinical trials launch to test of the coronavirus</h2>

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
                <div class="lightbox-gallery">
                    <h3>Image Gallery</h3>
                    <div class="gallery-grid">
                        <a href="https://picsum.photos/800/600" data-lightbox="gallery" data-title="Image 1">
                            <img src="https://picsum.photos/200/200?random=1" alt="Gallery Image 1">
                        </a>
                        <a href="https://picsum.photos/800/600" data-lightbox="gallery" data-title="Image 2">
                            <img src="https://picsum.photos/200/200?random=2" alt="Gallery Image 2">
                        </a>
                        <a href="https://picsum.photos/800/600" data-lightbox="gallery" data-title="Image 3">
                            <img src="https://picsum.photos/200/200?random=3" alt="Gallery Image 3">
                        </a>
                        <a href="https://picsum.photos/800/600" data-lightbox="gallery" data-title="Image 4">
                            <img src="https://picsum.photos/200/200?random=4" alt="Gallery Image 4">
                        </a>
                        <a href="https://picsum.photos/800/600" data-lightbox="gallery" data-title="Image 5">
                            <img src="https://picsum.photos/200/200?random=5" alt="Gallery Image 5">
                        </a>
                        <a href="https://picsum.photos/800/600" data-lightbox="gallery" data-title="Image 6">
                            <img src="https://picsum.photos/200/200?random=6" alt="Gallery Image 6">
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 related-news">
                <div class="blog-details-item">
                    <div class="news-details-recent">
                        <h3>Recent News</h3>
                        <ul>
                            <li>
                                <img src="{{asset('img/blogs/3.jpg')}}" alt="Recent">
                                <a href="/Blog-Details">World AIDS Day, designated on 1 December.</a>
                                <ul>

                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2024
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <img src="{{asset('img/blogs/4.jpg')}}" alt="Recent">
                                <a href="/Blog-Details">World AIDS Day, designated on 1 December.</a>
                                <ul>

                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2024
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <img src="{{asset('img/blogs/2.jpg')}}" alt="Recent">
                                <a href="/Blog-Details">World AIDS Day, designated on 1 December.</a>
                                <ul>

                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2024
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Details -->

<!-- Blog Details Form -->
<!-- <div class="blog-details-form pb-100">
    <div class="blog-details-shape">
        <img src="{{asset('img/blogs/heart.png')}}" alt="Shape">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3"></div>

            <div class="col-lg-6 blog-details-form-wrap">
                <h2>Drop your comment</h2>
                <form>
                    <div class="form-group">
                        <textarea class="form-control" id="your_comments" rows="8" placeholder="Your Comments"></textarea>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                    </div>
                    <div class="text-left">
                        <button type="submit" class="btn blog-details-form-btn">Post A Comment</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-3"></div>
        </div>
    </div>
</div> -->
<!-- End Blog Details Form -->

<!-- End Blog -->

<!-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        if (typeof lightbox !== "undefined") {
            lightbox.option({
                resizeDuration: 200,
                wrapAround: true,
            });
            console.log("Lightbox initialized successfully.");
        } else {
            console.error("Lightbox2 is not defined. Check the script inclusion.");
        }
    });
</script> -->


<style>
    .lightbox-gallery {
        margin-top: 20px;
    }

    .lightbox-gallery h3 {
        margin-bottom: 15px;
        text-align: center;
        font-size: 1.5rem;
        font-weight: bold;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
        justify-content: center;
    }

    .gallery-grid img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .gallery-grid img:hover {
        transform: scale(1.05);
    }
</style>
@endsection