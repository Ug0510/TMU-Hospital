<!-- resources/views/pages/home.blade.php -->
@extends('layout.app')

@section('title', 'TMH')

@section('content')

<!-- Main content for the home page goes here -->
<div class="main-content">

    
    <style>
        /* Custom carousel styling */
        .carousel-control-prev,
        .carousel-control-next {
            width: 40px;
            height: 40px;
            background-color: white;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 1;
            transition: all 0.3s ease;
        }

        .carousel-control-prev {
            left: 20px;
        }

        .carousel-control-next {
            right: 20px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #FF7900;
            padding: 15px;
            border-radius: 50%;
            background-size: 50%;
            color: #FF7900!important;
            transition: all 0.3s ease;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background-color: #FF7900;
            color: white !important;
        }
        
        .carousel-control-prev:hover .carousel-control-prev-icon{
        
            background-color: white;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23FF7900'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
        }
        .carousel-control-next:hover .carousel-control-next-icon {
            background-color: white;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23FF7900'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }


        .carousel-indicators {
            margin-bottom: 1rem;
        }

        .carousel-indicators [data-bs-target] {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #001055;
            opacity: 1;
        }

        .carousel-indicators .active {
            background-color: #FF7900;
        }

       
    </style>
    
    <!--Home Slider-->
    <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Carousel indicators -->
    <!-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"></button>
    </div> -->

    <!-- Carousel items -->
    <div class="carousel-inner">
        <!-- First slide -->
        <div class="carousel-item active">
            <img src="{{ asset('img/home/banner1.jpg') }}" class="d-none d-md-block w-100" alt="Desktop Slide 1">
            <img src="https://placehold.co/768x500" class="d-block d-md-none w-100" alt="Mobile Slide 1">
        </div>
        <!-- Second slide -->
        <div class="carousel-item">
            <img src="{{ asset('img/home/banner2.jpg') }}" class="d-none d-md-block w-100" alt="Desktop Slide 2">
            <img src="https://placehold.co/768x500" class="d-block d-md-none w-100" alt="Mobile Slide 2">
        </div>
        <!-- Third slide -->
        {{-- <div class="carousel-item">
            <img src="https://placehold.co/1920x800" class="d-none d-md-block w-100" alt="Desktop Slide 3">
            <img src="https://placehold.co/768x500" class="d-block d-md-none w-100" alt="Mobile Slide 3">
        </div> --}}
    </div>

    <!-- Carousel controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
    <!--Home Slider End-->

    <!-- Counter -->
    <div class="counter-area">
        <div class="container d-none d-md-block">
            <div class="row counter-bg second">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="counter-item">
                        <i class="icofont-patient-bed"></i>
                        <h3>
                            <span class="odometer" data-count="900">00</span>
                        </h3>
                        <p class="text-center">Bed Capacity</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="counter-item">
                        <i class="icofont-people"></i>
                        <h3>
                            <span class="odometer" data-count="1200">00</span>
                            <!-- <span class="target">+</span> -->
                        </h3>
                        <p class="text-center">Employees Including Doctors</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="counter-item">
                        <i class="icofont-doctor-alt"></i>
                        <h3>
                            <span class="odometer" data-count="20">00</span>
                        </h3>
                        <p class="text-center">Daily Average Surgeries</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="counter-item">
                        <i class="icofont-badge"></i>
                        <h3>
                            <span class="odometer" data-count="20">00</span>
                        </h3>
                        <p class="text-center">Specialities</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="counter-area-carousel owl-carousel d-block d-md-none ">
            <div class="container pb-4">
                <div class="row counter-bg second">
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="counter-item">
                            <i class="icofont-patient-bed"></i>
                            <h3>
                                <span class="odometer" data-count="900">00</span>
                            </h3>
                            <p class="text-center">Bed Capacity</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container  pb-4">
                <div class="row counter-bg second">
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="counter-item">
                            <i class="icofont-people"></i>
                            <h3>
                                <span class="odometer" data-count="1200">00</span>
                                <!-- <span class="target">+</span> -->
                            </h3>
                            <p class="text-center">Employees Including Doctors</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container  pb-4">
                <div class="row counter-bg second">
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="counter-item">
                            <i class="icofont-doctor-alt"></i>
                            <h3>
                                <span class="odometer" data-count="20">00</span>
                            </h3>
                            <p class="text-center">Daily Average Surgeries</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container  pb-4">
                <div class="row counter-bg second">
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="counter-item">
                            <i class="icofont-badge"></i>
                            <h3>
                                <span class="odometer" data-count="20">00</span>
                            </h3>
                            <p class="text-center">Specialities</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- End Counter -->

    <!-- Outer links options section Start -->
    <section>
        <div class="container mt-0 mt-md-3 mb-5">
            <div class="overview-booking snipcss-t88io">
                <div class="overview-section">
                    <div class="overview-box-outer">
                        <div class="overview-box">
                            <div class="overview-text">
                                <h4> Book an Appointment </h4>
                                <p> With country's leading experts </p>
                            </div>
                            <div class="overview-icon">
                                <img src="https://www.fortishealthcare.com/drupal-data/2023-03/Group%209012.svg"
                                    alt="image">
                            </div>
                            <a href="/doctors?location=all" class="link-over location-pages-link"></a>
                        </div>
                        <div class="overview-box">
                            <div class="overview-text">
                                <h4> Departments </h4>
                                <p> Health needs under one roof </p>
                            </div>
                            <div class="overview-icon">
                                <img src="https://www.fortishealthcare.com/drupal-data/2023-03/Group%2022247.svg"
                                    alt="image">
                            </div>
                            <a href="#departments" class="link-over location-pages-link" onclick="scrollToDepartment(event)"></a>
                        </div>
                        <div class="overview-box">
                            <div class="overview-text">
                                <h4> Specialities </h4>
                                <p> Our expertise in Healthcare </p>
                            </div>
                            <div class="overview-icon">
                                <img src="https://www.fortishealthcare.com/drupal-data/2023-03/specialityicon%20%281%29.png"
                                    alt="image">
                            </div>
                            <a href="#departments" class="link-over location-pages-link" onclick="scrollToDepartment(event)"></a>
                        </div>
                        <div class="overview-box">
                            <div class="overview-text">
                                <h4> Doctors </h4>
                                <p> Top experts for your health </p>
                            </div>
                            <div class="overview-icon">
                                <img src="https://www.fortishealthcare.com/drupal-data/2023-03/Group%2021927.svg"
                                    alt="image">
                            </div>
                            <a href="{{route('our.doctors')}}" class="link-over location-pages-link"></a>
                        </div>
                    </div>
                </div>
                <div class="booking-section">
                    <h3 class="heading2"> We can help you book </h3>
                    <div class="booking-box-outer">
                        <div class="booking-box booking-two">
                            <div>
                                <h4> Health Checkups </h4>
                                <p>
                                </p>
                            </div>
                            <div class="face-img">
                                <img src="https://www.fortishealthcare.com/drupal-data/2023-02/health-checkups161_0.svg"
                                    alt="image">
                            </div>
                            <a href="/health-check-pachages?location=all" class="link-over location-pages-link"></a>
                        </div>
                        <div class="booking-box booking-two">
                            <div>
                                <h4> Tests &amp; Services </h4>
                                <p>
                                </p>
                            </div>
                            <div class="face-img">
                                <img src="https://www.fortishealthcare.com/drupal-data/2024-06/Book%20Test%20%26%20Services.svg"
                                    alt="image">
                            </div>
                            <a href="#" class="link-over"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Outer links options section End -->


    <!-- About -->
    <section class="hospital-area pb-70">
        <div class="container-fluid p-0">
            <div class="hospital-shape">
                <img src="{{asset('img/home/about1.png')}}" alt="Shape">
            </div>
            <div class="row m-0 align-items-center">
                <div class="col-lg-6 p-0">
                    <div class="hospital-item">
                        <div class="row m-0">
                            <div class="p-0">
                                <div style="padding-left: 10%;">
                                    <div id="hospitalCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item p-2 active">
                                                <img src="{{asset('img/home/about/new/1.webp')}}" class="d-block w-100" alt="About" style="width: 90%;border-radius:15px;">
                                            </div>
                                            <div class="carousel-item p-2">
                                                <img src="{{asset('img/home/about/new/2.webp')}}" class="d-block w-100" alt="About" style="width: 90%;border-radius:15px;">
                                            </div>
                                            <div class="carousel-item p-2">
                                                <img src="{{asset('img/home/about/new/3.webp')}}" class="d-block w-100" alt="About" style="width: 90%;border-radius:15px;">
                                            </div>
                                            <div class="carousel-item p-2">
                                                <img src="{{asset('img/home/about/new/4.webp')}}" class="d-block w-100" alt="About" style="width: 90%;border-radius:15px;">
                                            </div>
                                            <div class="carousel-item p-2">
                                                <img src="{{asset('img/home/about/new/5.webp')}}" class="d-block w-100" alt="About" style="width: 90%;border-radius:15px;">
                                            </div>
                                            <div class="carousel-item p-2">
                                                <img src="{{asset('img/home/about/new/6.webp')}}" class="d-block w-100" alt="About" style="width: 90%;border-radius:15px;">
                                            </div>
                                            <div class="carousel-item p-2">
                                                <img src="{{asset('img/home/about/new/7.webp')}}" class="d-block w-100" alt="About" style="width: 90%;border-radius:15px;">
                                            </div>
                                            <div class="carousel-item p-2">
                                                <img src="{{asset('img/home/about/new/8.webp')}}" class="d-block w-100" alt="About" style="width: 90%;border-radius:15px;">
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hospital-item hospital-right" style="margin-left: 30px;">
                        <div class="section-title pb-0 mb-0">
                            <h2 class="tmu-primary">About Our Hospital</h2>
                        </div>
                        <p class="pb-0 mb-3 " style="text-align:justify!important;">
                            TMU hospital is a hub of safety and advanced care, offering an extensive range of super-specialty services. It provides advanced and comprehensive primary, secondary, and tertiary care, serving as a vital resource for the community.
                            <br /><br /><b>It provides-</b>
                            24/7 medical facility with an 800+ bed super-specialty hospital on campus Hands-on practical experience opportunities for medical, nursing, and allied health students Comprehensive critical and emergency healthcare services.
                        </p>
                        <div class="carousel-buttons">
                            <button class="owl-prev col about-carousel-btn my-3 " data-bs-target="#hospitalCarousel" data-bs-slide="prev">
                                <i class="icofont-simple-left"></i>
                            </button>
                            <button class="owl-next col about-carousel-btn my-3 " data-bs-target="#hospitalCarousel" data-bs-slide="next">
                                <i class="icofont-simple-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->


    <section class="services-area pb-70" id="departments">
        <div class="container">
            <div class="section-title">
                <h2 class="tmu-primary">Our Departments</h2>
            </div>
            <div class="row justify-content-center">
                <!-- Visible Departments -->
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="{{ route('speciality', ['slug' => 'cardiology']) }}">
                                    <div class="service-front">
                                        <i class="icofont-heart-beat-alt"></i>
                                        <h3>Cardiology</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item two service-icon-2345">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="{{ route('speciality', ['slug' => 'neurology']) }}">
                                    <div class="service-icon-front service-front">
                                        <img src="{{asset('/img/home/department/neurology.svg')}}" alt="Neurology" class="service-icon-custom-b" />
                                        <h3>Neurology</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item three service-icon-2345">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="{{ route('speciality', ['slug' => 'plastic-surgery']) }}">
                                    <div class="service-icon-front service-front">
                                        <img src="{{asset('/img/home/department/plastic-surgery.svg')}}" alt="Plastic Surgery" class="service-icon-custom-b" />
                                        <h3>Plastic Surgery</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item service-icon-2345">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="{{ route('speciality', ['slug' => 'nephrology']) }}">
                                    <div class="service-icon-front service-front">
                                        <img src="{{asset('/img/home/department/nephrology.svg')}}" alt="Nephrology" class="service-icon-custom-b" />
                                        <h3>Nephrology</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item two service-icon-2345">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="{{ route('speciality', ['slug' => 'ctvs']) }}">
                                    <div class="service-icon-front service-front">
                                        <img src="{{asset('/img/home/department/ctvs.svg')}}" alt="CTVS" class="service-icon-custom-b" />
                                        <h3>CTVS</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item three service-icon-2345">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="{{ route('speciality', ['slug' => 'neuro-surgery']) }}">
                                    <div class="service-icon-front service-front">
                                        <img src="{{asset('/img/home/department/neuro-surgery.svg')}}" alt="Neuro Surgery" class="service-icon-custom-b" />
                                        <h3>Neuro Surgery</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item service-icon-2345">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="{{ route('speciality', ['slug' => 'urology']) }}">
                                    <div class="service-icon-front service-front">
                                        <img src="{{asset('/img/home/department/urology.svg')}}" alt="Urology" class="service-icon-custom-b" />
                                        <h3>Urology</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item two service-icon-2345">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="{{ route('speciality', ['slug' => 'gastroenterology']) }}">
                                    <div class="service-icon-front service-front">
                                        <img src="{{asset('/img/home/department/gastroenterology.svg')}}" alt="Gastro" class="service-icon-custom-b" />
                                        <h3>Gastro</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item three service-icon-2345">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="{{ route('department', ['slug' => 'general-surgery']) }}">
                                    <div class="service-icon-front service-front">
                                        <img src="{{asset('/img/home/department/surgery.svg')}}" alt="Surgery" class="service-icon-custom-b" />
                                        <h3>Surgery</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item service-icon-2345">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="{{ route('department', ['slug' => 'orthopedic']) }}">
                                    <div class="service-icon-front service-front">
                                        <img src="{{asset('/img/home/department/orthopedic.svg')}}" alt="Orthopedic" class="service-icon-custom-b" />
                                        <h3>Orthopedic</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-item two">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="{{ route('department', ['slug' => 'general-medicine']) }}">
                                    <div class="service-front">
                                        <i class="icofont-drug"></i>
                                        <h3>Medicine</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item three service-icon-2345">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="{{ route('department', ['slug' => 'ent']) }}">
                                    <div class="service-icon-front service-front">
                                        <img src="{{asset('/img/home/department/ent.svg')}}" alt="ENT" class="service-icon-custom-b" />
                                        <h3>ENT</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more visible departments here as needed -->

                <!-- Hidden Departments -->
                <div class="d-none d-md-flex row" id="more-content" style="margin-right:0!important; margin-left:0!important; padding:0!important;">
                    <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-item service-icon-2345">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="{{ route('department', ['slug' => 'psychiatry']) }}">
                                        <div class="service-icon-front service-front">
                                            <img src="{{asset('/img/home/department/psychiatary.svg')}}" alt="Psychiatry" class="service-icon-custom-b" />
                                            <h3>Psychiatry</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-item two service-icon-2345">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="{{ route('department', ['slug' => 'ophthalmology']) }}">
                                        <div class="service-icon-front service-front">
                                            <img src="{{asset('/img/home/department/eye.svg')}}" alt="Ophthalmology" class="service-icon-custom-b" />
                                            <h3>Ophthalmology</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-item three service-icon-2345">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="{{ route('department', ['slug' => 'dermatology']) }}">
                                        <div class="service-icon-front service-front">
                                            <img src="{{asset('/img/home/department/derma.svg')}}" alt="Dermatology" class="service-icon-custom-b" />
                                            <h3>Dermatology</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-item service-icon-2345">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="{{ route('department', ['slug' => 'obg']) }}">
                                        <div class="service-icon-front service-front">
                                            <img src="{{asset('/img/home/department/obg.svg')}}" alt="OBG" class="service-icon-custom-b" />
                                            <h3>Gynecology</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-item two service-icon-2345">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="{{ route('department', ['slug' => 'pediatrics']) }}">
                                        <div class="service-icon-front service-front">
                                            <img src="{{asset('/img/home/department/pediatrics.svg')}}" alt="Pediatrics" class="service-icon-custom-b" />
                                            <h3>Pediatrics</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-item three service-icon-2345">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <a href="{{ route('department', ['slug' => 'respiratory-medicine']) }}">
                                        <div class="service-icon-front service-front">
                                            <img src="{{asset('/img/home/department/respiratory.svg')}}" alt="Respiratory" class="service-icon-custom-b" />
                                            <h3>Respiratory</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add other hidden departments here as needed -->
                </div>
            </div>

            <!-- View More Button -->
            <a href="javascript:void(0)" onclick="showMoreContent()" class="text-center w-100 d-block d-lg-none tmu-primary-orange link-after-effect view-more-btn">View More</a>
        </div>
    </section>

    <script>
        function showMoreContent() {
            const moreContent = document.getElementById('more-content');
            const viewMoreButton = document.querySelector('.view-more-btn');

            if (moreContent.classList.contains('d-none')) {
                moreContent.classList.remove('d-none'); // Show the hidden content
                viewMoreButton.innerHTML = 'View Less'; // Update button text
            } else {
                moreContent.classList.add('d-none'); // Hide the content
                viewMoreButton.innerHTML = 'View More'; // Reset button text
            }
        }
    </script>


    <!-- Interactive body map Mobile-->

    <section class="services-area services-area-mob pb-70" style=" justify-content: center; align-items: center;">
        <div class="container">
            <div class="section-title">
                <h2 class="tmu-primary">Various Specialities</h2>
            </div>
            <div class="row justify-content-center flex w-100" style=" align-items: center; justify-content: center; position: relative;">
                <img src="{{asset('img/home/human_body_map1.png')}}" usemap="#image-map" alt="Man Body" class="map-image">



                <map name="image-map">
                    <area target="_self" id="Brain" alt="Brain" title="Brain" href="{{ route('speciality', ['slug' => 'neurology']) }}" coords="25,12,91,45" shape="rect">
                    <area target="_self" id="Eye" alt="Eye" title="Eye" href="{{ route('department', ['slug' => 'ophthalmology']) }}" coords="336,30,397,63" shape="rect">
                    <area target="_self" id="Vocal-Cord" alt="Vocal-Cord" title="Vocal-Cord" href="{{ route('department', ['slug' => 'ent']) }}" coords="345,77,411,137" shape="rect">
                    <area target="_self" id="Heart" alt="Heart" title="Heart" href="{{ route('speciality', ['slug' => 'cardiology']) }}" coords="330,160,396,193" shape="rect">
                    <area target="_self" id="Liver" alt="Liver" title="Liver" href="{{ route('speciality', ['slug' => 'gastroenterology']) }}" coords="24,192,91,225" shape="rect">
                    <area target="_self" id="Stomach" alt="Stomach" title="Stomach" href="{{ route('speciality', ['slug' => 'gastroenterology']) }}" coords="6,263,99,297" shape="rect">
                    <area target="_self" id="Arm" alt="Arm" title="Arm" href="{{ route('department', ['slug' => 'orthopedic']) }}" coords="357,253,412,287" shape="rect">
                    <area target="_self" id="Hip" alt="Hip" title="Hip" href="{{ route('department', ['slug' => 'orthopedic']) }}" coords="354,363,405,397" shape="rect">
                    <area target="_self" id="Knee" alt="Knee" title="Knee" href="{{ route('department', ['slug' => 'orthopedic']) }}" coords="352,540,412,573" shape="rect">
                    <area target="_self" id="Kidney" alt="Kindney" title="Kindney" href="{{ route('speciality', ['slug' => 'nephrology']) }}" coords="3,317,83,350" shape="rect">
                    <area target="_self" id="Reproductive-System" alt="Reproductive-System" title="Reproductive-System" href="{{ route('speciality', ['slug' => 'urology']) }}" coords="290,447,425,507" shape="rect">
                    <area target="_self" id="Lower-Back" alt="Lower-Back" title="Lower-Back" href="{{ route('speciality', ['slug' => 'neuro-surgery']) }}" coords="353,300,426,357" shape="rect">
                    <area target="_self" id="Thigh" alt="Thigh" title="Thigh" href="{{ route('department', ['slug' => 'orthopedic']) }}" coords="37,467,107,500" shape="rect">
                    <area target="_self" id="Varicose-Vain" alt="Varicose-Vain" title="Varicose-Vein" href="{{ route('department', ['slug' => 'general-surgery']) }}" coords="10,600,100,660" shape="rect">
                </map>




            </div>
        </div>
    </section>

    <!--End Interactive body map mobile -->

    <!-- Interactive body map Large screen  -->

    <section class="services-area services-area-pointer pb-70" style=" justify-content: center; align-items: center;">
        <div class="container">
            <div class="section-title">
                <h2 class="tmu-primary">Various Specialities</h2>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">


                <div class="tabs-content">




                    <div class="structure male">
                        <img src="{{asset('img/home/human_body_manmap.png')}}" alt="Man Body">

                        <ul class="service-speciality-left body_list left">
                            <li class="eyeMpointer">
                                <a href="{{ route('department', ['slug' => 'ophthalmology']) }}"><span class="txt">Eye</span></a>
                            </li>

                            <li class="earMPointer">
                                <a href="{{ route('department', ['slug' => 'ent']) }}"><span class="txt">Ear</span></a>
                            </li>

                            <li class="earMPointer vocalcordMPointer">
                                <a href="{{ route('department', ['slug' => 'ent']) }}"><span class="txt">Throat</span></a>
                            </li>

                            <li class="liverMpointer">
                                <a href="{{ route('speciality', ['slug' => 'gastroenterology']) }}"><span class="txt">Liver</span></a>
                            </li>

                            <li class="handMpointer">
                                <a href="{{ route('department', ['slug' => 'orthopedic']) }}"><span class="txt">Arm</span></a>
                            </li>

                            <li class="kidneysMpointer">
                                <a href="{{ route('speciality', ['slug' => 'nephrology']) }}"><span class="txt">Kidney</span></a>
                            </li>

                            <li class="lowerBackMpointer">
                                <a href="{{ route('speciality', ['slug' => 'neuro-surgery']) }}"><span class="txt">Lower Back</span></a>
                            </li>

                            <li class="reproductiveMpointer">
                                <a href="{{ route('speciality', ['slug' => 'urology']) }}"><span class="txt">Reproductive System</span></a>
                            </li>

                            <li class="thighMpointer">
                                <a href="{{ route('department', ['slug' => 'orthopedic']) }}"><span class="txt">Thigh</span></a>
                            </li>

                            <li class="thighMpointer vericoseMpointer">
                                <a href="{{ route('department', ['slug' => 'general-surgery']) }}"><span class="txt">Varicose Vein</span></a>
                            </li>

                            <li class="footMpointer">
                                <a href="{{ route('department', ['slug' => 'orthopedic']) }}"><span class="txt">Foot</span></a>
                            </li>
                        </ul>


                        <ul class="service-speciality-right body_list right">
                            <li class="brainMpointer">
                                <a href="{{ route('speciality', ['slug' => 'neurology']) }}"><span class="txt">Brain</span></a>
                            </li>

                            <li class="noseMpointer">
                                <a href="{{ route('department', ['slug' => 'ent']) }}"><span class="txt">Nose</span></a>
                            </li>

                            <li class="heartMpointer">
                                <a href="{{ route('speciality', ['slug' => 'cardiology']) }}"><span class="txt">Heart</span></a>
                            </li>

                            <li class="lungMpointer">
                                <a href="{{ route('department', ['slug' => 'respiratory-medicine']) }}"><span class="txt">Chest</span></a>
                            </li>

                            <li class="elbowMpointer">
                                <a href="{{ route('department', ['slug' => 'orthopedic']) }}"><span class="txt">Elbow</span></a>
                            </li>

                            <li class="spineMpointer">
                                <a href="{{ route('speciality', ['slug' => 'gastroenterology']) }}"><span class="txt">Stomach</span></a>
                            </li>

                            <li class="hipMpointer">
                                <a href="{{ route('department', ['slug' => 'orthopedic']) }}"><span class="txt">Hip</span></a>
                            </li>

                            <li class="kneeMpointer">
                                <a href="{{ route('department', ['slug' => 'orthopedic']) }}"><span class="txt">Knee</span></a>
                            </li>

                            <li class="ankleMpointer">
                                <a href="{{ route('department', ['slug' => 'orthopedic']) }}"><span class="txt">Ankle</span></a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Interactive body map Large screen  -->

    <!-- Expertise -->
    <section class="expertise-area pb-70">

        <div class="row m-0">
            <div class="col-lg-7">
                <div class="speciality-left">
                    <div class="section-title">
                        <h2 class="tmu-primary">Our Expertise</h2>
                    </div>
                    <div class="speciality-item d-none d-md-block">
                        <div class="row m-0">
                            <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="speciality-inner">
                                    <i class="icofont-check-circled"></i>
                                    <h3>Cardiac Care</h3>
                                    <p>Angiography, angioplasty, bypass surgery, and pacemaker implantation.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="speciality-inner">
                                    <i class="icofont-check-circled"></i>
                                    <h3>Advanced Tests</h3>
                                    <p>MRI, Spiral CT, Color Doppler, Neurology Lab, and Endoscopy services.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="speciality-inner">
                                    <i class="icofont-check-circled"></i>
                                    <h3>Emergency Services</h3>
                                    <p>24/7 comprehensive trauma, surgical, and medical emergency care.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="speciality-inner">
                                    <i class="icofont-check-circled"></i>
                                    <h3>Specialty Surgery</h3>
                                    <p>Arthroscopy, neurosurgery, IVF, and advanced orthopedic procedures.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="speciality-item-carousel speciality-item d-block d-md-none owl-carousel pt-1 pb-4">
                        <div class="row m-0 pt-3">
                            <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="speciality-inner">
                                    <i class="icofont-check-circled"></i>
                                    <h3>Cardiac Care</h3>
                                    <p>Angiography, angioplasty, bypass surgery, and pacemaker implantation.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="speciality-inner">
                                    <i class="icofont-check-circled"></i>
                                    <h3>Advanced Tests</h3>
                                    <p>MRI, Spiral CT, Color Doppler, Neurology Lab, and Endoscopy services.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 pt-3">
                            <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="speciality-inner">
                                    <i class="icofont-check-circled"></i>
                                    <h3>Emergency Services</h3>
                                    <p>24/7 comprehensive trauma, surgical, and medical emergency care.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="speciality-inner">
                                    <i class="icofont-check-circled"></i>
                                    <h3>Specialty Surgery</h3>
                                    <p>Arthroscopy, neurosurgery, IVF, and advanced orthopedic procedures.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pr-0">
                <div class="speciality-item speciality-right speciality-right-two d-flex justify-content-center">
                    <img src="{{asset('img/home/expertise1.jpg')}}" alt="Speciality">
                    <div class="speciality-emergency">
                        <div class="speciality-icon">
                            <i class="icofont-ui-call"></i>
                        </div>
                        <h3>Emergency Call</h3>
                        <a href="tel:+07554332322">095688 65444</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Expertise -->

    <!--Our Services-->

    <section class="mb-5 pb-3 services-section">
        <div class="container-fluid m-0">
            <div class="row">
                <div class="section-title d-block d-md-none mt-4 mb-2">
                    <h2 class="tmu-primary">Our Service</h2>
                </div>
                <div class="col-sm-3 text-center text-sm-start d-sm-flex justify-content-center align-items-center side-carousel">
                    <h2 class="d-none d-sm-block">
                        <b style="font-weight: 700; color:#fff">Our </b> <br />
                        <span class="tmu-primary-orange underline-white">Services</span>
                    </h2>
                    <div class="align-self-end mb-5">
                        <div class="custom-nav row d-none d-md-block">
                            <button class="owl-prev col service-carousel-btn my-1 my-lg-0"><i class="icofont-simple-left"></i></button>
                            <button class="owl-next col service-carousel-btn my-1 my-lg-0"><i class="icofont-simple-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-9 position-relative ps-0">
                    <div class="side-overlay-carousel-design d-none d-sm-block"></div>
                    <div class="owl-carousel owl-theme mx-0 my-1 ps-4 ps-md-0">
                        <div class="item my-0 py-0">
                            <div class="technology-card">
                                <div class="thumb thumb-ratio thumb-ratio1">
                                    <img width="540" height="300" src="https://www.medanta.org/storage/services/January2024//DoJgySPIxF4OxUTxiwbPAqvA7IuFz6-metaMTEucG5n-.png" alt="homecare">
                                </div>
                                <div class="card-desk">
                                    <div class="heading-md font600 card-title hidden-xs mb-2 active">Second Opinion</div>
                                    <div class="card-text truncate">
                                        <p>Confirm diagnosis and take informed decision of treatment plan with some of experts</p>
                                    </div>
                                    <div class="card-button d-flex justify-content-between centered-items">
                                        <div class="common-button">
                                            <a href="#" class="anchor-button"
                                                tabindex="0">Know More
                                                <span></span> </a>
                                        </div>
                                        <div class="services-logo">
                                            <img src="{{asset('img/home/doctor.png')}}"
                                                alt="homecare-logo" width="100" height="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="technology-card">
                                <div class="thumb thumb-ratio thumb-ratio1">
                                    <img width="514" height="400" src="https://www.medanta.org/storage/services/January2024//bqt2PdNyaR2Ut6TdYi8hHNXjtz5cib-metaMTIucG5n-.png" alt="homecare">
                                </div>
                                <div class="card-desk">
                                    <div class="heading-md font600 card-title-1 hidden-xs mb-2">Home Nursing</div>
                                    <div class="card-text truncate">
                                        <p>We continue to give you the best care possible with all the comforts, even after you reach home</p>
                                    </div>
                                    <div class="card-button d-flex justify-content-between centered-items">
                                        <div class="common-button">
                                            <a href="#" class="anchor-button"
                                                tabindex="0">Know More
                                                <span></span> </a>
                                        </div>
                                        <div class="services-logo">
                                            <img src="{{asset('img/home/homecare.png')}}"
                                                alt="homecare-logo" width="100" height="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="technology-card snipcss-741cz">
                                <div class="thumb thumb-ratio thumb-ratio1">
                                    <img src="https://media.licdn.com/dms/image/C4D12AQGQLXeAk_n6pA/article-cover_image-shrink_600_2000/0/1588256572030?e=2147483647&v=beta&t=qKpZ8cQp_QLV9j5WccB3RcGG1HKDKtXYDEhUmgubb60"
                                        alt="Health Check" width="540" height="300">
                                </div>
                                <div class="card-desk">
                                    <div class="heading-md font600 card-title hidden-xs mb-2">e-ICU</div>
                                    <div class="card-text truncate">
                                        <p>Take charge of your well-being with a health experience customised for you
                                        </p>
                                    </div>
                                    <div class="card-button d-flex justify-content-between centered-items">
                                        <div class="common-button">
                                            <a href="#" class="anchor-button"
                                                tabindex="0">Know More
                                                <span></span> </a>
                                        </div>
                                        <div class="services-logo">
                                            <img src="{{asset('img/home/strecher.png')}}"
                                                alt="homecare-logo" width="100" height="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="technology-card snipcss-741cz">
                                <div class="thumb thumb-ratio thumb-ratio1">
                                    <img src="https://www.medanta.org/storage/services/February2024//jpSjMUeXnHaNFaVyhcLcdLaFVLe1p6-metaaW1nZ2dnLmpwZw==-.jpg"
                                        alt="Health Check" width="540" height="300">
                                </div>
                                <div class="card-desk">
                                    <div class="heading-md font600 card-title hidden-xs mb-2">Health Check</div>
                                    <div class="card-text truncate">
                                        <p>Take charge of your well-being with a health experience customised for you
                                        </p>
                                    </div>
                                    <div class="card-button d-flex justify-content-between centered-items">
                                        <div class="common-button">
                                            <a href="#" class="anchor-button"
                                                tabindex="0">Know More
                                                <span></span> </a>
                                        </div>
                                        <div class="services-logo">
                                            <img src="{{asset('img/home/report.png')}}"
                                                alt="homecare-logo" width="100" height="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="item">
                            <div class="technology-card snipcss-741cz">
                                <div class="thumb thumb-ratio thumb-ratio1">
                                    <img src="https://www.medanta.org/storage/services/February2024//jpSjMUeXnHaNFaVyhcLcdLaFVLe1p6-metaaW1nZ2dnLmpwZw==-.jpg"
                                        alt="Health Check" width="540" height="300">
                                </div>
                                <div class="card-desk">
                                    <div class="heading-md font600 card-title hidden-xs mb-2">Health Check</div>
                                    <div class="card-text">
                                        <p>Take charge of your well-being with a health experience customised for you
                                        </p>
                                    </div>
                                    <div class="card-button d-flex justify-content-between centered-items">
                                        <div class="common-button">
                                            <a href="#" class="anchor-button"
                                                tabindex="0">Know More
                                                <span></span> </a>
                                        </div>
                                        <div class="services-logo">
                                            <img src="https://www.medanta.org/storage/services/October2023//TYB5hFVu3sj0Jhd5N0bfslJ5Ie1eQe-metaSGVhbHRoIGNoZWNrdXAucG5n-.png"
                                                alt="homecare-logo" width="100" height="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="technology-card snipcss-741cz">
                                <div class="thumb thumb-ratio thumb-ratio1">
                                    <img src="https://www.medanta.org/storage/services/February2024//jpSjMUeXnHaNFaVyhcLcdLaFVLe1p6-metaaW1nZ2dnLmpwZw==-.jpg"
                                        alt="Health Check" width="540" height="300">
                                </div>
                                <div class="card-desk">
                                    <div class="heading-md font600 card-title hidden-xs mb-2">Health Check</div>
                                    <div class="card-text">
                                        <p>Take charge of your well-being with a health experience customised for you
                                        </p>
                                    </div>
                                    <div class="card-button d-flex justify-content-between centered-items">
                                        <div class="common-button">
                                            <a href="#" class="anchor-button"
                                                tabindex="0">Know More
                                                <span></span> </a>
                                        </div>
                                        <div class="services-logo">
                                            <img src="https://www.medanta.org/storage/services/October2023//TYB5hFVu3sj0Jhd5N0bfslJ5Ie1eQe-metaSGVhbHRoIGNoZWNrdXAucG5n-.png"
                                                alt="homecare-logo" width="100" height="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Our Services End-->

    <!-- Video
    <div class="video-wrap">
        <div class="container-fluid p-0">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="video-area">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="container">
                                    <div class="video-item">
                                        <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube">
                                            <i class="icofont-ui-play"></i>
                                        </a>
                                        <div class="video-content">
                                            <h3>Hospital Introduction</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                                lacus vel facilisis. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="video-area">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="container">
                                    <div class="video-item">
                                        <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube">
                                            <i class="icofont-ui-play"></i>
                                        </a>
                                        <div class="video-content">
                                            <h3>About Our Pharmacy</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                                lacus vel facilisis. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="video-area">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="container">
                                    <div class="video-item">
                                        <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube">
                                            <i class="icofont-ui-play"></i>
                                        </a>
                                        <div class="video-content">
                                            <h3>Our reasearch center and lab </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                                lacus vel facilisis. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-icu" role="tabpanel" aria-labelledby="pills-icu-tab">
                    <div class="video-area">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="container">
                                    <div class="video-item">
                                        <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube">
                                            <i class="icofont-ui-play"></i>
                                        </a>
                                        <div class="video-content">
                                            <h3>CCU & ICU</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                                lacus vel facilisis. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-doctor" role="tabpanel" aria-labelledby="pills-doctor-tab">
                    <div class="video-area">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="container">
                                    <div class="video-item">
                                        <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube">
                                            <i class="icofont-ui-play"></i>
                                        </a>
                                        <div class="video-content">
                                            <h3>Our Doctors</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                                lacus vel facilisis. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <ul class="video-nav nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item video-nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true">Hospital Introduction</a>
                </li>
                <li class="nav-item video-nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Pharmacy</a>
                </li>
                <li class="nav-item video-nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab"
                        aria-controls="pills-contact" aria-selected="false">Reasearch & Lab</a>
                </li>

                <li class="nav-item video-nav-item">
                    <a class="nav-link" id="pills-icu-tab" data-bs-toggle="pill" href="#pills-icu" role="tab"
                        aria-controls="pills-icu" aria-selected="false">CCU & ICU</a>
                </li>
                <li class="nav-item video-nav-item">
                    <a class="nav-link" id="pills-doctor-tab" data-bs-toggle="pill" href="#pills-doctor" role="tab"
                        aria-controls="pills-doctor" aria-selected="false">Doctors</a>
                </li>
            </ul>
        </div>
    </div> -->
    <!-- End Video -->


    </section>





    <!-- Blog -->
    <!-- <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Our Latest Blogs</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="blog-item">
                        <div class="blog-top">
                            <a href="/Blog-Details">
                                <img src="{{asset('img/home/blog/1.jpg')}}" alt="Blog">
                            </a>
                        </div>
                        <div class="blog-bottom">
                            <h3>
                                <a href="/Blog-Details">In this hospital there are special surgeon.</a>
                            </h3>
                            <p>Lorem ipsum is dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt
                                ut labore et....</p>
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
                                <img src="{{asset('img/home/blog/2.jpg')}}" alt="Blog">
                            </a>
                        </div>
                        <div class="blog-bottom">
                            <h3>
                                <a href="/Blog-Details">World AIDS Day, designated on 1 December.</a>
                            </h3>
                            <p>Lorem ipsum is dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt
                                ut labore et....</p>
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
                                <img src="{{asset('img/home/blog/3.jpg')}}" alt="Blog">
                            </a>
                        </div>
                        <div class="blog-bottom">
                            <h3>
                                <a href="/Blog-Details">More than 80 clinical trials launch to test coronavirus.</a>
                            </h3>
                            <p>Lorem ipsum is dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt
                                ut labore et....</p>
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
    </section> -->
    <!-- End Blog -->
</div>






<!-- <div class="container m-0 p-5 pe-0 nw2345 my-5 side-overlay-carousel-design-c" style="max-width: 100%;">
    <div class="section-title">
        <h2 class="tmu-primary">News & Events</h2>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="row g-4">
                 Blogs Section 
                <div class="col-lg-6 col-md-6">
                    <div class="section-card-unique-1">
                        <div class="owl-carousel owl-theme blogs-carousel-unique-1 pb-3">
                            <div class="item p-0">
                                <div class="blog-card">
                                     Image Section 
                                    <div class="blog-card-image">
                                        <img src="https://picsum.photos/300/180?random=1" class="img-fluid mb-0" alt="Blog 1">
                                    </div>
                                     Text Section 
                                    <div class="blog-card-text p-2">
                                        <p class="blog-date text-muted">January 3, 2025</p>
                                        <h5 class="blog-title">Blog 1</h5>
                                        <p class="blog-description">Learn about the latest advancements in health care...</p>
                                        <a href="#" class="view-details-unique-1 mt-2">Read Post</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item p-0">
                                <div class="blog-card">
                                     Image Section 
                                    <div class="blog-card-image">
                                        <img src="https://picsum.photos/300/180?random=2" class="img-fluid mb-0" alt="Blog 2">
                                    </div>
                                     Text Section 
                                    <div class="blog-card-text p-2">
                                        <p class="blog-date text-muted">January 2, 2025</p>
                                        <h5 class="blog-title">Blog 2</h5>
                                        <p class="blog-description">Explore how technology is transforming patient care...</p>
                                        <a href="#" class="view-details-unique-1 mt-2">Read Post</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item p-0">
                                <div class="blog-card">
                                     Image Section
                                    <div class="blog-card-image">
                                        <img src="https://picsum.photos/300/180?random=3" class="img-fluid mb-0" alt="Blog 3">
                                    </div>
                                     Text Section 
                                    <div class="blog-card-text p-2">
                                        <p class="blog-date text-muted">January 1, 2025</p>
                                        <h5 class="blog-title">Blog 3</h5>
                                        <p class="blog-description">Expert tips for maintaining a healthy lifestyle...</p>
                                        <a href="#" class="view-details-unique-1 mt-2">Read Post</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                News Section 
                <div class="col-lg-6 col-md-6">
                    <div class="section-card-unique-2">
                        <div class="news-card">
                            Card 1 
                            <div class="news-card-item">
                                <div class="news-card-left">
                                    <img src="https://picsum.photos/120/80?random=4" class="img-fluid rounded" alt="News 1">
                                </div>
                                <div class="news-card-right">
                                    <p class="news-date text-muted">January 3, 2025</p>
                                    <h5 class="news-title text-break">Medanta raises awareness on pediatric blood cancer...</h5>
                                    <a href="#" class="view-news">Read News</a>
                                </div>
                            </div>
                            Card 2
                            <div class="news-card-item">
                                <div class="news-card-left">
                                    <img src="https://picsum.photos/120/80?random=5" class="img-fluid rounded" alt="News 2">
                                </div>
                                <div class="news-card-right">
                                    <p class="news-date text-muted">January 2, 2025</p>
                                    <h5 class="news-title text-break">Discover how deep brain stimulation saved lives...</h5>
                                    <a href="#" class="view-news">Read News</a>
                                </div>
                            </div>
                            Card 
                            <div class="news-card-item">
                                <div class="news-card-left">
                                    <img src="https://picsum.photos/120/80?random=6" class="img-fluid rounded" alt="News 3">
                                </div>
                                <div class="news-card-right">
                                    <p class="news-date text-muted">January 1, 2025</p>
                                    <h5 class="news-title text-break">Advanced treatments for thalassemia unveiled...</h5>
                                    <a href="#" class="view-news">Read News</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 ">
            <div class="section-card-unique-1" style="border: none;">
                <div class="blog-card" style="background-color: transparent;">
                     Heading Section
                    <div class="blog-card-text-h p-3" style="background-color: transparent;">
                        <h4 style="color: #ffffff; font-size: 1.8rem; font-weight: bold; text-align: center;">Free Services and Camps</h4>
                    </div>
                    Image Section 
                    <div class="event-card-image" style="padding: 20px 0; text-align: center;">
                        <img src="{{asset('img/home/poster1.png')}}" class="img-fluid" alt="Event Image" style="border-radius: 8px; max-width: 100%; height: auto;">
                    </div>
                    Button Section
                    <div style="text-align: center; margin-top: 20px;">
                        <a href="#" class="btn btn-light btn-lg" style="color: #001055; font-weight: bold; padding: 10px 30px; border-radius: 25px;">Know More</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div> -->


<div class="container-fluid m-0 p-5 pe-0 nw2345 my-5" style="position: relative; max-width: 100%;">
    <div class="section-title ">
        <h2 class="tmu-primary ms-3">News & Events</h2>
    </div>
    <div class="row me-0">
        <div class="col-lg-8 col-md-12">
            <div class="row g-4">
                <!-- Blogs Section -->
                <div class="col-lg-6 col-md-6">
                    <div class="section-card-unique-1">
                        <div class="owl-carousel owl-theme blogs-carousel-unique-1 pb-3">
                            <div class="item p-0">
                                <div class="blog-card">
                                    <!-- Image Section -->
                                    <div class="blog-card-image">
                                        <img src="https://picsum.photos/300/180?random=1" class="img-fluid mb-0" alt="Blog 1">
                                    </div>
                                    <!-- Text Section -->
                                    <div class="blog-card-text p-2">
                                        <p class="blog-date text-muted">January 3, 2025</p>
                                        <h5 class="blog-title">Blog 1</h5>
                                        <p class="blog-description">Learn about the latest advancements in health care...</p>
                                        <a href="{{route('blog.details')}}" class="view-details-unique-1 mt-2">Read Post</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item p-0">
                                <div class="blog-card">
                                    <!-- Image Section -->
                                    <div class="blog-card-image">
                                        <img src="https://picsum.photos/300/180?random=2" class="img-fluid mb-0" alt="Blog 2">
                                    </div>
                                    <!-- Text Section -->
                                    <div class="blog-card-text p-2">
                                        <p class="blog-date text-muted">January 2, 2025</p>
                                        <h5 class="blog-title">Blog 2</h5>
                                        <p class="blog-description">Explore how technology is transforming patient care...</p>
                                        <a href="{{route('blog.details')}}" class="view-details-unique-1 mt-2">Read Post</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item p-0">
                                <div class="blog-card">
                                    <!-- Image Section -->
                                    <div class="blog-card-image">
                                        <img src="https://picsum.photos/300/180?random=3" class="img-fluid mb-0" alt="Blog 3">
                                    </div>
                                    <!-- Text Section -->
                                    <div class="blog-card-text p-2">
                                        <p class="blog-date text-muted">January 1, 2025</p>
                                        <h5 class="blog-title">Blog 3</h5>
                                        <p class="blog-description">Expert tips for maintaining a healthy lifestyle...</p>
                                        <a href="{{route('blog.details')}}" class="view-details-unique-1 mt-2">Read Post</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Section -->
                <div class="col-lg-6 col-md-6">
                    <div class="section-card-unique-2">
                        <div class="news-card">
                            <!-- Card 1 -->
                            <div class="news-card-item">
                                <div class="news-card-left">
                                    <img src="https://picsum.photos/120/80?random=4" class="img-fluid rounded" alt="News 1">
                                </div>
                                <div class="news-card-right">
                                    <p class="news-date text-muted">January 3, 2025</p>
                                    <h5 class="news-title text-break">Medanta raises awareness on pediatric blood cancer...</h5>
                                    <a href="{{route('news.page')}}" class="view-news">Read News</a>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="news-card-item">
                                <div class="news-card-left">
                                    <img src="https://picsum.photos/120/80?random=5" class="img-fluid rounded" alt="News 2">
                                </div>
                                <div class="news-card-right">
                                    <p class="news-date text-muted">January 2, 2025</p>
                                    <h5 class="news-title text-break">Discover how deep brain stimulation saved lives...</h5>
                                    <a href="{{route('news.page')}}" class="view-news">Read News</a>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="news-card-item">
                                <div class="news-card-left">
                                    <img src="https://picsum.photos/120/80?random=6" class="img-fluid rounded" alt="News 3">
                                </div>
                                <div class="news-card-right">
                                    <p class="news-date text-muted">January 1, 2025</p>
                                    <h5 class="news-title text-break">Advanced treatments for thalassemia unveiled...</h5>
                                    <a href="{{route('news.page')}}" class="view-news">Read News</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-0">
            <div class="section-card-unique-1 p-0" style="border: none;">
                <div class="blog-card px-0" style="background-color: transparent;">
    
                    <!-- Image Section -->
                    <div class="event-card-image" style="padding: 20px 0; text-align: center;">
                        <img src="{{asset('img/home/camp.jpeg')}}" class="img-fluid" alt="Event Image" style="object-fit:contain">
                    </div>
                    <!-- Button Section -->
                    <div style="text-align: center; margin-top: 20px;">
                        <a href="#" class="btn  btn-custom" style="color: white; font-weight: bold; padding: 10px 30px; border-radius: 25px;">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
</div>

<style>
    .btn-custom{
        background-color: #FF7900;
        color:white;
        border:1px solid #FF7900;
    }
    .btn-custom:hover{
        background-color: white !important;
        color:#FF7900 !important;
        border:1px solid #FF7900 !important;
    }
</style>











<!-- Owl Carousel Styles -->
<style>
    .nw2345 {
        background-color: #f8fbff;
    }

    .section-card-unique-1,
    .section-card-unique-2,
    .section-card-unique-3 {
        /* box-shadow: 0 8px 12px rgba(0, 0, 0, 1); */
        border-radius: 8px;
        height: 100%;
    }

    .section-card-unique-2 {
        box-shadow: none !important;

    }

    .section-header-unique-1,
    .section-header-unique-2,
    .section-header-unique-3 {
        background-color: #e74c3c;
        color: #ffffff;
        text-align: center;
        padding: 10px;
        font-weight: bold;
        font-size: 1.2rem;
        border-radius: 8px 8px 0 0;
    }

    .view-details-unique-1,
    .view-details-unique-2,
    .view-details-unique-3 {
        color: #e74c3c;
        text-decoration: none;
        font-weight: bold;
    }


    .view-details-unique-1:hover,
    .view-details-unique-2:hover,
    .view-details-unique-3:hover {
        text-decoration: underline;
    }

    .owl-carousel .item {
        text-align: center;
        padding: 10px;
    }

    .owl-carousel .item img {
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .section-card-unique-1 {
        background-color: transparent;
        /* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4); */
        border-radius: 8px;
    }

    .blog-card {
        display: flex;
        flex-direction: column;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 3px 17px rgba(0, 0, 0, 0.14);
        margin:0 1rem;
        padding:1rem 1.5rem;
    }


    .blog-card-image {
        position: relative;
        overflow: hidden;
        border-radius: 8px 8px 0 0;
    }

    .blog-card-image img {
        width: 100%;
        height: auto;
        aspect-ratio: 3 / 1.8;
        /* 3:2 ratio */
        border-radius: 8px 8px 0 0;
    }

    .blog-card-text {
        padding: 15px;
        background-color: #f9f9f9;
    }

    .blog-card-text p {
        padding: 0px !important;
        margin: 0px !important;
    }

    .blog-date {
        font-size: 0.9rem;
        color: #888;
    }

    .blog-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin: 10px 0;
    }

    .blog-description {
        font-size: 1rem;
        color: #555;
        margin-bottom: 10px;
    }

    .view-details-unique-1 {
        color: #e74c3c;
        text-decoration: none;
        font-weight: bold;
    }

    .view-details-unique-1:hover {
        text-decoration: underline;
    }

    .section-card-unique-2 {
        background-color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .news-card {
        display: flex;
        flex-direction: column;
        padding: 0px 15px;
    }

    .news-card-item {
        display: flex;
        border-bottom: 1px solid #f1f1f1;
        padding-bottom: 15px;
    }

    .news-card-left {
        width: 40%;
        display: flex;
        align-items: center;
        /* Center the image vertically */
        justify-content: center;
        /* Center the image horizontally */
    }

    .news-card-left img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .news-card-right {
        width: 60%;
        padding: 10px 0px 10px 10px;
    }

    .news-card-right p {
        padding: 0px !important;
        margin: 0px !important;
    }

    .news-date {
        font-size: 0.9rem;
        color: #888;
    }

    .news-title {
        font-size: 0.9rem;
        font-weight: bold;
        margin: 10px 0;
    }

    .view-news {
        color: #e74c3c;
        text-decoration: none;
        font-weight: bold;
    }

    .view-news:hover {
        text-decoration: underline;
    }

    .section-card-unique-3 {
        /* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4); */
        border-radius: 8px;
    }

    .section-header-unique-3 {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 15px;
        text-align: left;
        color: #333;
    }

    /* Tab Navigation */
    .event-tabs {
        display: flex;
        gap: 10px;
        padding: 0px 10px;
        margin-bottom: 15px;
    }

    .event-tab {
        flex: 1;
        padding: 8px 12px;
        font-size: 0.9rem;
        font-weight: bold;
        text-align: center;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: #f8f8f8;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .event-tab.active {
        background-color: #e74c3c;
        color: #ffffff;
    }

    .event-tab:hover {
        background-color: #e74c3c;
        color: #ffffff;
    }

    /* Event List */
    .event-content {
        display: flex;
        flex-direction: column;
    }

    .event-list {
        display: none;
    }

    .event-list.active {
        display: block;
    }

    .event-card {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        padding: 0px 10px;
    }

    .event-card p {
        padding: 0px !important;
        margin: 0px !important;
    }

    .event-date-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #f8f8f8;
        width: 60px;
        height: 60px;
        border-radius: 8px;
        margin-right: 15px;
    }

    .event-card-image {
        position: relative;
        overflow: hidden;
        border-radius: 8px 8px 0 0;
    }

    .event-card-image img {
        width: 100%;
        height: auto;
        aspect-ratio: 3 / 2.3;
        /* 3:2 ratio */
        border-radius: 8px 8px 0 0;
    }

    .event-day {
        font-size: 1.2rem;
        font-weight: bold;
        color: #333;
        margin: 0;
    }

    .event-month {
        font-size: 0.9rem;
        color: #888;
        margin: 0;
    }

    .event-details {
        flex: 1;
    }

    .event-title {
        font-size: 1rem;
        font-weight: bold;
        margin: 0 0 5px;
    }

    .event-location {
        font-size: 0.9rem;
        color: #888;
        margin: 0 0 10px;
    }

    .view-details-unique-3 {
        color: #e74c3c;
        font-weight: bold;
        text-decoration: none;
    }

    .view-details-unique-3:hover {
        text-decoration: underline;
    }

    hr {
        margin: 15px 0;
        border: 0;
        border-top: 1px solid #eee;
    }

    /* styles.css */
    .blog-card-text-h {
        /* background: linear-gradient(45deg, #e74c3c, #f39c12); */
        /* Stylish gradient background */
        border-radius: 8px 8px 0px 0px;
        /* Rounded corners */
        padding: 16px;
        /* Inner padding for spacing */
        color: #ffffff;
        /* Text color */
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        /* Subtle shadow for text */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Box shadow for depth */
        font-family: 'Poppins', sans-serif;
        /* Modern font */
    }

    .blog-card-text-h h4 {
        font-size: 1.5rem;
        /* Adjust the heading size */
        margin: 0;
        /* Remove default margin */
        font-weight: bold;
        /* Bold text for emphasis */
        text-align: center;
        /* Center-align the heading */
    }

    .side-overlay-carousel-design-c {
        background-color: #001055;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
    }
</style>

<style>
    /* Adjusted Styles for Blue Backdrop */
    .side-overlay-carousel-design-c {
        background-color: #001055;
        border-radius: 20px 0 0 20px;
        width: 33.3333%;
        /* Width for col-5 in Bootstrap (5/12 = 41.67%) */
        position: absolute;
        /* Ensures it stays on the right side */
        right: 0;
        /* Aligns it to the right of the screen */
        top: 0;
        height: 100%;
        /* Full height */
        padding: 20px;
    }


    .blog-card-text-h {
        font-family: 'Poppins', sans-serif;
        text-align: center;
        margin-bottom: 20px;
    }

    .blog-card-text-h h4 {
        font-size: 1.8rem;
        font-weight: bold;
    }

    .event-card-image img {
        border-radius: 8px;
        max-width: 100%;
        height: auto;
    }

    .btn {
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
        font-weight: bold;
        padding: 10px 30px;
        border-radius: 25px;
        text-decoration: none;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn:hover {
        background-color: #ffffff;
        color: #001055;
    }
</style>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize Blogs Carousel
        $(".blogs-carousel-unique-1").owlCarousel({
            items: 1,
            margin: 10,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: false,
            dots: true,
        });

        // Initialize News Carousel
        // $(".news-carousel-unique-2").owlCarousel({
        //     items: 1,
        //     margin: 10,
        //     loop: true,
        //     autoplay: true,
        //     autoplayTimeout: 3000,
        //     autoplayHoverPause: true,
        //     nav: true,
        //     dots: true,
        // });

        // Initialize Events Carousel
        $(".events-carousel-unique-3").owlCarousel({
            items: 1,
            margin: 10,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: false,
            dots: true,
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.event-tab');
        const lists = document.querySelectorAll('.event-list');

        tabs.forEach((tab) => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                tabs.forEach((t) => t.classList.remove('active'));
                // Add active class to the clicked tab
                this.classList.add('active');

                // Hide all lists and show the targeted list
                const target = this.getAttribute('data-target');
                lists.forEach((list) => {
                    if (list.id === target) {
                        list.classList.add('active');
                    } else {
                        list.classList.remove('active');
                    }
                });
            });
        });
    });
</script>

<script>
    function scrollToDepartment(event) {
        event.preventDefault(); // Prevent default anchor behavior
        const departmentSection = document.querySelector('#departments');
        if (departmentSection) {
            const offset = 150; // Adjust this value to set the desired top spacing
            const topPosition = departmentSection.offsetTop - offset;

            window.scrollTo({
                top: topPosition,
                behavior: 'smooth'
            });
        }
    }
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


<style>
    /* General Styles */
    body {
        background-color: #f8fbff;
    }

    .section-title {
        margin-bottom: 30px;
    }

    .section-title h2 {
        font-size: 2rem;
        font-weight: bold;
        color: #001055;
        /* text-align: right; */
    }

    /* Blogs Section Styles */
    .blogs-section .blog-card {
        background-color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
        padding: 15px;
    }

    .blogs-section .blog-card img {
        width: 100%;
        border-radius: 8px 8px 0 0;
        height: auto;
    }

    .blogs-section .blog-card h5 {
        font-size: 1.2rem;
        font-weight: bold;
        margin: 10px 0;
    }

    .blogs-section .view-details-unique-1 {
        color: #e74c3c;
        text-decoration: none;
        font-weight: bold;
        transition: 0.3s;
    }

    .blogs-section .view-details-unique-1:hover {
        color: #001055;
    }

    /* News Section Styles */
    .news-section .news-card-item {
        background-color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        display: flex;
        overflow: hidden;
        margin-bottom: 15px;
        padding: 10px;
    }

    .news-section .news-card-item img {
        width: 40%;
        border-radius: 8px;
        height: auto;
        object-fit: cover;
    }

    .news-section .news-card-item h5 {
        font-size: 1.2rem;
        font-weight: bold;
        margin: 10px 0;
        color: #333;
    }

    .news-section .view-news {
        color: #e74c3c;
        text-decoration: none;
        font-weight: bold;
        transition: 0.3s;
    }

    .news-section .view-news:hover {
        color: #001055;
    }

    /* Events Section Styles */
    .events-section {
        background-color: #001055;
        border-radius: 20px;
        color: #ffffff;
        padding: 20px;
    }

    .events-section .event-card {
        background-color: transparent;
        box-shadow: none;
        border-radius: 8px;
        overflow: hidden;
        padding: 0;
        text-align: center;
    }

    .events-section .event-card img {
        width: 100%;
        border-radius: 8px;
        height: auto;
    }

    .events-section .event-card h5 {
        font-size: 1.2rem;
        font-weight: bold;
        margin: 10px 0;
        color: #ffffff;
    }

    .events-section .btn {
        color: #001055;
        background-color: #ffffff;
        font-size: 1rem;
        font-weight: bold;
        padding: 10px 30px;
        border-radius: 25px;
        text-decoration: none;
        transition: 0.3s;
    }

    .events-section .btn:hover {
        background-color: #001055;
        color: #ffffff;
    }

    /* Owl Carousel Styles */
    .owl-carousel .item {
        text-align: center;
        padding: 10px;
    }

    .owl-carousel .item img {
        border-radius: 8px;
    }

    .card-equal-height {
        display: flex;
        flex-direction: column;
        height: 100%;
    }
</style>


@endsection