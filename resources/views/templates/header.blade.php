<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TMU Hospital')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
    <!-- Icofonts CSS -->
    <link rel="stylesheet" href="{{ asset('css/icofont.min.css') }}">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="{{ asset('css/odometer.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme-dark.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Testimonial CSS -->
    <link rel="stylesheet" href="{{ asset('css/testimonial.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>TMU Hospital</title>

    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">

</head>

<body>

    <!-- Preloader -->
    <div class="loader" style="display: none;">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header Top -->
    <div class="header-top d-none d-md-block">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-sm-9 col-lg-9">
                    <div class="header-top-item">
                        <div class="header-top-left">
                            <ul>
                                <li>
                                    <a href="tel:+07554332322">
                                        <i class="icofont-ui-call"></i>
                                        Call : 095688 65444
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:hospital@tmu.ac.in">
                                        <i class="icofont-ui-message"></i>
                                       tmuhospital@tmu.ac.in
                                    </a>
                                </li>
                                <li class="d-none d-lg-inline-block">
                                    <i class="icofont-location-pin"></i>
                                    Bagadpur, Uttar Pradesh 244001
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="header-top-item">
                        <div class="header-top-right">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/tmumbd/" target="_blank">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://x.com/Tmumbd" target="_blank">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/tmu.updates/" target="_blank">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Start Navbar Area -->
    <div class="navbar-area sticky-top">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
                <a href="/" class="logo">
                    <img src="{{asset('img/logo.png')}}" alt="Logo" style="max-width: 150%;">
                </a>
            </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{asset('img/logo.png')}}" alt="Logo" style="max-width: 200%;">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">

                            <li class="nav-item active">
                                <a href="{{route('home')}}" class="nav-link" data-path="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('about.us')}}" class="nav-link" data-path="/About-Us">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('our.doctors')}}" class="nav-link" data-path="/our-doctors">Our Doctors</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Speciality</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('general.medicine') }}" class="nav-link">GENERAL MEDICINE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('general.surgery') }}" class="nav-link">GENERAL SURGERY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('orthopaedics') }}" class="nav-link">ORTHOPAEDICS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('ent') }}" class="nav-link">ENT (EYE, NOSE & THROAT)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('psychitary') }}" class="nav-link">PSYCHIATRY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('ophthalmology') }}" class="nav-link">OPHTHALMOLOGY (EYE)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('dermatology') }}" class="nav-link">DERMATOLOGY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('obg') }}" class="nav-link">OBSTETRICS & GYNAECOLOGY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('pediatrics') }}" class="nav-link">PEDIATRICS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('respiratory.medicine') }}" class="nav-link">RESPIRATORY MEDICINE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('radiology') }}" class="nav-link">RADIOLOGY</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Super Speciality</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{route('cardiology')}}" class="nav-link">CARDIOLOGY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('nephrology')}}" class="nav-link">NEPHROLOGY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('neurology')}}" class="nav-link">NEUROLOGY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('neuro.surgery')}}" class="nav-link">NEURO SURGERY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('ctvs')}}" class="nav-link">CTVS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('plastic.surgery')}}" class="nav-link">PLASTIC SURGERY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('gastroenterology')}}" class="nav-link">GASTROENTEROLOGY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('urology')}}" class="nav-link">UROLOGY</a>
                                    </li>


                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('blog')}}" class="nav-link" data-path="/Blog">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('contact.us')}}" class="nav-link" data-path="/Contact-Us">Contact Us</a>
                            </li>                                                        
                        </ul>
                        <div class="nav-srh">
                            <div class="search-toggle closed">
                                <button class="search-icon icon-search"><i class="icofont-search-1"></i></button>
                                <button class="search-icon icon-close"><i class="icofont-close"></i></button>
                            </div>
                            <div class="search-area">
                                <form id="search-form">
                                    <input type="text" class="src-input" id="search-terms" placeholder="Search here..." autocomplete="off" />
                                    <button type="submit" class="search-icon">
                                        <i class="icofont-search-1"></i>
                                    </button>
                                </form>
                                <ul id="search-results" class="search-results"></ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
