
<!-- resources/views/pages/home.blade.php -->
@extends('layout.app')

@section('content')
<!-- Main content for the home page goes here -->
<div class="main-content">
    <!-- Home Slider -->
    <div class="home-slider owl-theme owl-carousel">
        <div class="slider-item slider-item-img">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <!-- <div class="slider-shape">
                                    <img src="img/doc-banner.png" alt="Shape" style="width: 40%; margin-right: 5.5rem; margin-top: 3rem;">
                                </div> -->
                            <h1>Welcome to <span class="tmu-primary-orange">TMU Hospital</span></h1>
                            <p>
                                At TMU Hospital, we provide top-quality healthcare with a personal touch. Our
                                state-of-the-art facilities and experienced medical professionals ensure you receive the
                                best treatment available. Trust us to be your partner in achieving optimal health and a
                                brighter future. </p>
                            <div class="common-btn">
                                <a href="appointment.html">Get Appointment</a>
                                <a class="cmn-btn-right" href="about.html">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item two slider-item-img">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <!-- <div class="slider-shape-two">
                                    <img src="img/home-one/home-slider/2.png" alt="Shape">
                                </div>
                                <h1>Caring Health is Important Than All</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                                <div class="common-btn">
                                    <a href="appointment.html">Get Appointment</a>
                                    <a class="cmn-btn-right" href="about.html">Learn More</a>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item slider-item-img three">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="slider-text">
                            <!-- <div class="slider-shape-three">
                                    <img src="img/home-one/home-slider/3.png" alt="Shape">
                                </div>
                                <h1>We Offer Highly Treatments</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                                <div class="common-btn">
                                    <a href="appointment.html">Get Appointment</a>
                                    <a class="cmn-btn-right" href="about.html">Learn More</a>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Home Slider -->

    <!-- Counter -->
    <div class="counter-area">
        <div class="container">
            <div class="row counter-bg second">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="counter-item">
                        <i class="icofont-patient-bed"></i>
                        <h3>
                            <span class="odometer" data-count="900">00</span>
                        </h3>
                        <p>Bed Capacity</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="counter-item">
                        <i class="icofont-people"></i>
                        <h3>
                            <span class="odometer" data-count="1200">00</span>
                            <!-- <span class="target">+</span> -->
                        </h3>
                        <p>Employees Including Doctors</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="counter-item">
                        <i class="icofont-doctor-alt"></i>
                        <h3>
                            <span class="odometer" data-count="20">00</span>
                        </h3>
                        <p>Daily Average Surgeries</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="counter-item">
                        <i class="icofont-badge"></i>
                        <h3>
                            <span class="odometer" data-count="20">00</span>
                        </h3>
                        <p>Specialities</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Counter -->


    <!-- Outer links options section Start -->
    <section>
        <div class="container mt-3 mb-5">
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
                            <a href="/hospitals?location=all" class="link-over location-pages-link"></a>
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
                            <a href="/specialities?location=all" class="link-over location-pages-link"></a>
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
                            <a href="/doctors?location=all" class="link-over location-pages-link"></a>
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
                        <!-- <a class="hospital-play-btn popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                <i class="icofont-ui-play"></i>
                            </a> -->
                        <div class="row m-0">
                            <div class="col-lg-6 p-0 w-50">
                                <div class="hospital-left-one">
                                    <img src="{{asset('img/home/about2.jpg')}}" alt="About">
                                </div>
                            </div>
                            <div class="col-6 p-0 m-auto">
                                <div class="hospital-left-two">
                                    <img src="{{asset('img/home/about3.jpg')}}" alt="About">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hospital-item hospital-right">
                        <h2 class="tmu-primary">About Our Hospital</h2>
                        <p>
                            Teerthanker Mahaveer Medical College Hospital has widely expanded various clinical
                            departments with a provision of super specialty care with growing spectrum of disease and
                            increasing demand of such facilities. The Hospital is the apex health institution and
                            provides tertiary care to the entire population of Moradabad and adjoining districts besides
                            imparting clinical training to the students.
                        </p>
                        <ul>
                            <li>
                                <i class="icofont-check-circled"></i>
                                Explore Our Departments
                            </li>
                            <li>
                                <i class="icofont-check-circled"></i>
                                Meet Our Specialists
                            </li>
                            <li>
                                <i class="icofont-check-circled"></i>
                                Contact Us for More Information
                            </li>
                        </ul>
                        <a class="hospital-btn px-4 py-3" href="about.html">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Services -->
    <section class="services-area pb-70">
        <div class="container">
            <div class="section-title">
                <h2 class="tmu-primary">Our Departments</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item ">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-doctor"></i>
                                    <h3>Expert Doctor</h3>
                                    <!-- <a href="service-details.html">Read More</a> -->
                                    <!-- <p>Compassionate care, advanced treatments, experienced specialists, modern facilities</p> -->
                                </div>
                                <div class="service-end">
                                    <i class="icofont-doctor"></i>
                                    <h3>Expert Doctor</h3>
                                    <p>Compassionate care, advanced treatments, experienced specialists, modern
                                        facilities</p>
                                    <a href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-item two">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-prescription"></i>
                                    <h3>Diagnosis</h3>
                                    <!-- <p>High-tech diagnostics, accurate results, comprehensive tests, expert analysis</p> -->
                                </div>
                                <div class="service-end">
                                    <i class="icofont-prescription"></i>
                                    <h3>Diagnosis</h3>
                                    <p>High-tech diagnostics, accurate results, comprehensive tests, expert analysis</p>
                                    <a href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-item three">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-patient-file"></i>
                                    <h3>Pathology</h3>
                                    <!-- <p>Comprehensive tests, precise results, advanced technology, expert team, reliable care</p> -->
                                </div>
                                <div class="service-end">
                                    <i class="icofont-patient-file"></i>
                                    <h3>Pathology</h3>
                                    <p>Comprehensive tests, precise results, advanced technology, expert team, reliable
                                        care</p>
                                    <a href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".9s">
                    <div class="service-item four">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-tooth"></i>
                                    <h3>Dental Care</h3>
                                    <!-- <p>Quality dental treatments, experienced dentists, modern equipment, gentle care</p> -->
                                </div>
                                <div class="service-end">
                                    <i class="icofont-tooth"></i>
                                    <h3>Dental Care</h3>
                                    <p>Quality dental treatments, experienced dentists, modern equipment, gentle care
                                    </p>
                                    <a href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-heart-beat-alt"></i>
                                    <h3>Cardiology</h3>
                                    <!-- <p>Cardiac care, advanced treatments, experienced cardiologists, comprehensive services</p> -->
                                </div>
                                <div class="service-end">
                                    <i class="icofont-heart-beat-alt"></i>
                                    <h3>Cardiology</h3>
                                    <p>Cardiac care, advanced treatments, experienced cardiologists, comprehensive
                                        services</p>
                                    <a href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-item two">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-drug"></i>
                                    <h3>Medicine</h3>
                                    <!-- <p>Comprehensive medical care, expert physicians, advanced treatments, compassionate care</p> -->
                                </div>
                                <div class="service-end">
                                    <i class="icofont-drug"></i>
                                    <h3>Medicine</h3>
                                    <p>Comprehensive medical care, expert physicians, advanced treatments, compassionate
                                        care</p>
                                    <a href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-item three">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-dna-alt-1"></i>
                                    <h3>Neurology</h3>
                                    <!-- <p>Expert neurologists, advanced treatments, comprehensive care, modern technology</p> -->
                                </div>
                                <div class="service-end">
                                    <i class="icofont-dna-alt-1"></i>
                                    <h3>Neurology</h3>
                                    <br>
                                    <!-- <p>Expert neurologists, advanced treatments, comprehensive care, modern technology</p> -->
                                    <a href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp">
                    <div class="service-item four">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-ambulance-cross"></i>
                                    <h3>Ambulance</h3>
                                    <!-- <p>24/7 emergency services, rapid response, well-equipped, professional care</p> -->
                                </div>
                                <!-- <div class="service-end">
                                        <i class="icofont-ambulance-cross"></i>
                                        <h3>Ambulance</h3>
                                        <br>
                                        <p>24/7 emergency services, rapid response, well-equipped, professional care</p>
                                        <a href="service-details.html">Read More</a>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item ">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-doctor"></i>
                                    <h3>Expert Doctor</h3>
                                    <!-- <a href="service-details.html">Read More</a> -->
                                    <!-- <p>Compassionate care, advanced treatments, experienced specialists, modern facilities</p> -->
                                </div>
                                <div class="service-end">
                                    <i class="icofont-doctor"></i>
                                    <h3>Expert Doctor</h3>
                                    <p>Compassionate care, advanced treatments, experienced specialists, modern
                                        facilities</p>
                                    <a href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-item two">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-prescription"></i>
                                    <h3>Diagnosis</h3>
                                    <!-- <p>High-tech diagnostics, accurate results, comprehensive tests, expert analysis</p> -->
                                </div>
                                <div class="service-end">
                                    <i class="icofont-prescription"></i>
                                    <h3>Diagnosis</h3>
                                    <p>High-tech diagnostics, accurate results, comprehensive tests, expert analysis</p>
                                    <a href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-item three">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-patient-file"></i>
                                    <h3>Pathology</h3>
                                    <!-- <p>Comprehensive tests, precise results, advanced technology, expert team, reliable care</p> -->
                                </div>
                                <div class="service-end">
                                    <i class="icofont-patient-file"></i>
                                    <h3>Pathology</h3>
                                    <p>Comprehensive tests, precise results, advanced technology, expert team, reliable
                                        care</p>
                                    <a href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".9s">
                    <div class="service-item four">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-tooth"></i>
                                    <h3>Dental Care</h3>
                                    <!-- <p>Quality dental treatments, experienced dentists, modern equipment, gentle care</p> -->
                                </div>
                                <div class="service-end">
                                    <i class="icofont-tooth"></i>
                                    <h3>Dental Care</h3>
                                    <p>Quality dental treatments, experienced dentists, modern equipment, gentle care
                                    </p>
                                    <a href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- divs after this will be eliminated from page on tablet and phone view -->
                 <div class="d-none d-lg-flex row">
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-heart-beat-alt"></i>
                                    <h3>Cardiology</h3>
                                    <!-- <p>Cardiac care, advanced treatments, experienced cardiologists, comprehensive services</p> -->
                                </div>
                                <div class="service-end">
                                    <i class="icofont-heart-beat-alt"></i>
                                    <h3>Cardiology</h3>
                                    <p>Cardiac care, advanced treatments, experienced cardiologists, comprehensive
                                        services</p>
                                    <a href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-item two">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-drug"></i>
                                    <h3>Medicine</h3>
                                    <!-- <p>Comprehensive medical care, expert physicians, advanced treatments, compassionate care</p> -->
                                </div>
                                <div class="service-end">
                                    <i class="icofont-drug"></i>
                                    <h3>Medicine</h3>
                                    <p>Comprehensive medical care, expert physicians, advanced treatments, compassionate
                                        care</p>
                                    <a href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-item three">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-dna-alt-1"></i>
                                    <h3>Neurology</h3>
                                    <!-- <p>Expert neurologists, advanced treatments, comprehensive care, modern technology</p> -->
                                </div>
                                <div class="service-end">
                                    <i class="icofont-dna-alt-1"></i>
                                    <h3>Neurology</h3>
                                    <br>
                                    <!-- <p>Expert neurologists, advanced treatments, comprehensive care, modern technology</p> -->
                                    <a href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp">
                    <div class="service-item four">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-ambulance-cross"></i>
                                    <h3>Ambulance</h3>
                                    <!-- <p>24/7 emergency services, rapid response, well-equipped, professional care</p> -->
                                </div>
                                <!-- <div class="service-end">
                                        <i class="icofont-ambulance-cross"></i>
                                        <h3>Ambulance</h3>
                                        <br>
                                        <p>24/7 emergency services, rapid response, well-equipped, professional care</p>
                                        <a href="service-details.html">Read More</a>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-item ">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-doctor"></i>
                                    <h3>Expert Doctor</h3>
                                    <!-- <a href="service-details.html">Read More</a> -->
                                    <!-- <p>Compassionate care, advanced treatments, experienced specialists, modern facilities</p> -->
                                </div>
                                <div class="service-end">
                                    <i class="icofont-doctor"></i>
                                    <h3>Expert Doctor</h3>
                                    <p>Compassionate care, advanced treatments, experienced specialists, modern
                                        facilities</p>
                                    <a href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-item two">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="service-front">
                                    <i class="icofont-prescription"></i>
                                    <h3>Diagnosis</h3>
                                    <!-- <p>High-tech diagnostics, accurate results, comprehensive tests, expert analysis</p> -->
                                </div>
                                <div class="service-end">
                                    <i class="icofont-prescription"></i>
                                    <h3>Diagnosis</h3>
                                    <p>High-tech diagnostics, accurate results, comprehensive tests, expert analysis</p>
                                    <a href="service-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>

            <a href="" class="text-center w-100 d-block d-lg-none tmu-primary-orange link-after-effect">View all.....</a>

        </div>
    </section>
    <!-- End Services -->


    <!-- Interactive body map-->

    <section class="services-area pb-70" style="display: flex; justify-content: center; align-items: center;">
        <div class="container">
            <div class="section-title">
                <h2 class="tmu-primary">Various Specialities</h2>
            </div>
            <div class="row justify-content-center" style="max-width: 340px">
                <img src="{{asset('img/home/human_body_map.png')}}" usemap="#image-map" alt="Man Body">
                 
                <map name="image-map">
                    <area target="_self" alt="Brain" title="Brain" href="/neuro_surgery" coords="67,32,20,10" shape="rect">
                    <area target="_self" alt="Eye" title="Eye" href="/ophthalomology" coords="252,24,298,44" shape="rect">
                    <area target="_self" alt="Vocal-Cord" title="Vocal-Cord" href="/ent" coords="258,60,308,99" shape="rect">
                    <area target="_self" alt="Heart" title="Heart" href="/cardiology" coords="248,121,297,144" shape="rect">
                    <area target="_self" alt="Liver" title="Liver" href="/gastroenterology" coords="18,145,68,166" shape="rect">
                    <area target="_self" alt="Stomach" title="Stomach" href="/general_surgery" coords="8,199,74,220" shape="rect">
                    <area target="_self" alt="Arm" title="Arm" href="/orthopaedics" coords="266,191,309,214" shape="rect">
                    <area target="_self" alt="Hip" title="Hip" href="/orthopaedics" coords="266,272,304,298" shape="rect">
                    <area target="_self" alt="Knee" title="Knee" href="/orthopaedics" coords="264,405,309,429" shape="rect">
                    <area target="_self" alt="Kindney" title="Kindney" href="/ephrology" coords="5,236,60,263" shape="rect">
                    <area target="_self" alt="Reproductive-System" title="Reproductive-System" href="/urology" coords="218,338,319,375" shape="rect">
                    <area target="_self" alt="Lower-Back" title="Lower-Back" href="/spine" coords="264,228,318,263" shape="rect">
                    <area target="_self" alt="Thigh" title="Thigh" href="/orthopedics" coords="30,352,77,374" shape="rect">
                    <area target="_self" alt="Varicose-Vain" title="Varicose-Vain" href="/varicose" coords="10,453,73,492" shape="rect">
                </map>
            </div>
        </div>
    </section>

    <!--End Interactive body map -->

    <!-- Expertise -->
    <section class="expertise-area pb-70">

        <div class="row m-0">
            <div class="col-lg-7">
                <div class="speciality-left">
                    <div class="section-title">
                        <h2 class="tmu-primary">Our Expertise</h2>
                    </div>
                    <div class="speciality-item">
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

    <section class="mb-5 pb-3">
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
                    <div class="align-self-end mb-5" >
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
                                    <div class="card-text">
                                        <p>Confirm diagnosis and take informed decision of treatment plan with some of experts</p>
                                    </div>
                                    <div class="card-button d-flex justify-content-between centered-items">
                                        <div class="common-button">
                                            <a href="#" class="anchor-button"
                                                tabindex="0">Know More
                                                <span></span> </a>
                                        </div>
                                        <div class="services-logo">
                                            <img src="https://www.medanta.org/storage/services/October2023//7MJ6W47Iqi1ah2952atrbVsa3QXLXN-metaU2Vjb25kIG9waW5pb24ucG5n-.png"
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
                                    <div class="heading-md font600 card-title hidden-xs mb-2">Homecare Services</div>
                                    <div class="card-text">
                                        <p>We continue to give you the best care possible with all the comforts, even after you reach home</p>
                                    </div>
                                    <div class="card-button d-flex justify-content-between centered-items">
                                        <div class="common-button">
                                            <a href="#" class="anchor-button"
                                                tabindex="0">Know More
                                                <span></span> </a>
                                        </div>
                                        <div class="services-logo">
                                            <img src="https://www.medanta.org/storage/services/October2023//KJEeZyVS5OsLg64qTmc8FTsRzhTm6f-metaSG9tZSBjYXJlLnBuZw==-.png"
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
                                            <img src="https://www.medanta.org/storage/services/October2023//YAZ7Jln5Ee18KwZelKRiSmxIUuL8NJ-metaZUlDVS5wbmc=-.png"
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

    <!-- Video -->
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
    </div>
    <!-- End Video -->

    <!-- Doctors -->
    <section class="doctors-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2 class="tmu-primary">Meet Our Doctors</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="doctor-item">
                        <div class="doctor-top">
                            <img src="{{asset('img/home/doctor/1.jpg')}}" alt="Doctor">
                            <a href="appointment.html">Get Appointment</a>
                        </div>
                        <div class="doctor-bottom">
                            <h3>
                                <a href="doctor-details.html">Dr. Babatunde</a>
                            </h3>
                            <span>Neurosurgeon</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                    <div class="doctor-item">
                        <div class="doctor-top">
                            <img src="{{asset('img/home/doctor/2.jpg')}}" alt="Doctor">
                            <a href="appointment.html">Get Appointment</a>
                        </div>
                        <div class="doctor-bottom">
                            <h3>
                                <a href="doctor-details.html">Dr. Pooja Soni</a>
                            </h3>
                            <span>Neurosurgeon</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6   col-lg-4 wow fadeInUp" data-wow-delay=".7s">
                    <div class="doctor-item">
                        <div class="doctor-top">
                            <img src="{{asset('img/home/doctor/3.jpg')}}" alt="Doctor">
                            <a href="appointment.html">Get Appointment</a>
                        </div>
                        <div class="doctor-bottom">
                            <h3>
                                <a href="doctor-details.html">Dr. Sampark Jain</a>
                            </h3>
                            <span>Dental Surgeon</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="doctor-btn">
                <a href="doctor.html">See All</a>
            </div>
        </div>
    </section>
    <!-- End Doctors -->




    <!-- Blog -->
    <section class="blog-area pt-100 pb-70">
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
    </section>
    <!-- End Blog -->
</div>

<script src="{{asset('js/imageMapResizer.js')}}"></script>

<script>
    imageMapResize();
</script>
@endsection