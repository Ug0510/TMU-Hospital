@extends('layout.app')

@section('title', 'Blog')

@section('content')
        <!-- Page Title -->
        <div class="page-title-area page-title-four">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="page-title-item">
                        <h2>Our Latest Blogs</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                            </li>
                            <li>Blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Blog -->
        <section class="blog-area-two pt-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-item">
                            <div class="blog-top">
                                <a href="/Blog-Details">
                                    <img src="{{asset('img/blog/1.jpg')}}" alt="Blog">
                                </a>
                            </div>
                            <div class="blog-bottom">
                                <h3>
                                    <a href="/Blog-Details">
                                        In this hospital there are special surgeon.
                                    </a>
                                </h3>
                                <p>Lorem ipsum is  dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt ut labore et....</p>
                                <ul>
                                    <li>
                                        <a href="/Blog-Details">
                                            Read More
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2024
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                        <div class="blog-item">
                            <div class="blog-top">
                                <a href="/Blog-Details">
                                    <img src="{{asset('img/blog/2.jpg')}}" alt="Blog">
                                </a>
                            </div>
                            <div class="blog-bottom">
                                <h3>
                                    <a href="/Blog-Details">World AIDS Day, designated on 1 December.</a>
                                </h3>
                                <p>Lorem ipsum is  dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt ut labore et....</p>
                                <ul>
                                    <li>
                                        <a href="/Blog-Details">
                                            Read More
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2024
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".7s">
                        <div class="blog-item">
                            <div class="blog-top">
                                <a href="/Blog-Details">
                                    <img src="{{asset('img/blog/3.jpg')}}" alt="Blog">
                                </a>
                            </div>
                            <div class="blog-bottom">
                                <h3>
                                    <a href="/Blog-Details">More than 80 clinical trials launch to test coronavirus.</a>
                                </h3>
                                <p>Lorem ipsum is  dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt ut labore et....</p>
                                <ul>
                                    <li>
                                        <a href="/Blog-Details">
                                            Read More
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2024
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-item">
                            <div class="blog-top">
                                <a href="/Blog-Details">
                                    <img src="{{asset('img/blog/2.jpg')}}" alt="Blog">
                                </a>
                            </div>
                            <div class="blog-bottom">
                                <h3>
                                    <a href="/Blog-Details">We always give the best from us.</a>
                                </h3>
                                <p>Lorem ipsum is  dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt ut labore et....</p>
                                <ul>
                                    <li>
                                        <a href="/Blog-Details">
                                            Read More
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2024
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                        <div class="blog-item">
                            <div class="blog-top">
                                <a href="/Blog-Details">
                                    <img src="{{asset('img/blog/2.jpg')}}" alt="Blog">
                                </a>
                            </div>
                            <div class="blog-bottom">
                                <h3>
                                    <a href="/Blog-Details">Be aware about the coronavirus</a>
                                </h3>
                                <p>Lorem ipsum is  dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt ut labore et....</p>
                                <ul>
                                    <li>
                                        <a href="/Blog-Details">
                                            Read More
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2024
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".7s">
                        <div class="blog-item">
                            <div class="blog-top">
                                <a href="/Blog-Details">
                                    <img src="{{asset('img/blog/1.jpg')}}" alt="Blog">
                                </a>
                            </div>
                            <div class="blog-bottom">
                                <h3>
                                    <a href="/Blog-Details">No one find any medicines to prevent evolovirus</a>
                                </h3>
                                <p>Lorem ipsum is  dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt ut labore et....</p>
                                <ul>
                                    <li>
                                        <a href="/Blog-Details">
                                            Read More
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2024
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-item">
                            <div class="blog-top">
                                <a href="/Blog-Details">
                                    <img src="{{asset('img/blog/3.jpg')}}" alt="Blog">
                                </a>
                            </div>
                            <div class="blog-bottom">
                                <h3>
                                    <a href="/Blog-Details">Thailand is trying to make vaccine of coronavirus</a>
                                </h3>
                                <p>Lorem ipsum is  dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt ut labore et....</p>
                                <ul>
                                    <li>
                                        <a href="/Blog-Details">
                                            Read More
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2024
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                        <div class="blog-item">
                            <div class="blog-top">
                                <a href="/Blog-Details">
                                    <img src="{{asset('img/blog/2.jpg')}}" alt="Blog">
                                </a>
                            </div>
                            <div class="blog-bottom">
                                <h3>
                                    <a href="/Blog-Details">Already 1932 people have died in China</a>
                                </h3>
                                <p>Lorem ipsum is  dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt ut labore et....</p>
                                <ul>
                                    <li>
                                        <a href="/Blog-Details">
                                            Read More
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2024
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6   col-lg-4 wow fadeInUp" data-wow-delay=".7s">
                        <div class="blog-item">
                            <div class="blog-top">
                                <a href="/Blog-Details">
                                    <img src="{{asset('img/blog/1.jpg')}}" alt="Blog">
                                </a>
                            </div>
                            <div class="blog-bottom">
                                <h3>
                                    <a href="/Blog-Details">30+ countries have affected by coronavirus</a>
                                </h3>
                                <p>Lorem ipsum is  dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt ut labore et....</p>
                                <ul>
                                    <li>
                                        <a href="/Blog-Details">
                                            Read More
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="icofont-calendar"></i>
                                        Jan 03, 2024
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog -->

@endsection