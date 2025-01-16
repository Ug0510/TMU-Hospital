@extends('layout.app')

@section('title', 'About Us')

@section('content')
<!-- ------------------------------------------------------------------- -->

<!-- About -->
<section class="hospital-area pb-5 pt-5">
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





<!-- Speciality -->
<section class="speciality-area pb-100">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-7">
                <div class="speciality-left">
                    <div class="section-title-two">
                        <div class="section-title">
                            <h2 class="tmu-primary">Our Expertise</h2>
                        </div>
                    </div>
                    <div class="speciality-item">
                        <div class="row m-0">
                            <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="speciality-inner">
                                    <i class="icofont-check-circled"></i>
                                    <h3>Child Care</h3>
                                    <p>Lorem ipsum dolor sit amet, is consectetur adipiscing</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="speciality-inner">
                                    <i class="icofont-check-circled"></i>
                                    <h3>More Stuff</h3>
                                    <p>Lorem ipsum dolor sit amet, is consectetur adipiscing</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="speciality-inner">
                                    <i class="icofont-check-circled"></i>
                                    <h3>Enough Lab</h3>
                                    <p>Lorem ipsum dolor sit amet, is consectetur adipiscing</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="speciality-inner">
                                    <i class="icofont-check-circled"></i>
                                    <h3>24 Hour Doctor</h3>
                                    <p>Lorem ipsum dolor sit amet, is consectetur adipiscing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pr-0">
                <div class="speciality-item speciality-right">
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
    </div>
</section>
<!-- End Speciality -->

<section class="mb-md-5 pb-5 hospital-awards">
    <div class="container-fluid m-0">
        <div class="row">
            <div class="section-title d-block d-md-none mt-4 mb-2">
                <h2 class="tmu-primary">Our Awards & Achievements</h2>
            </div>
            <div
                class="col-sm-3 text-center text-sm-start d-sm-flex justify-content-center align-items-center side-carousel ">
                <h2 class="d-none d-sm-block">
                    <b style="font-weight: 700; color:#fff">Our Awards </b> <br />
                    <b class="text-light">& </b>
                    <br>
                    <span class="tmu-primary-orange "> Achievements</span>
                </h2>
                <div class="align-self-end mb-5">
                    <div class="custom-nav row d-none d-md-block">
                        <button class="owl-prev col service-carousel-btn my-1 my-lg-0"><i
                                class="icofont-simple-left"></i></button>
                        <button class="owl-next col service-carousel-btn my-1 my-lg-0"><i
                                class="icofont-simple-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-9 position-relative ps-0">
                <div class="side-overlay-carousel-design d-none d-sm-block"></div>
                <div class="owl-carousel owl-theme mx-0 my-1 ps-4 ps-md-0 py-md-5 my-md-5">

                    <div class="wow fadeInUp" data-wow-delay=".3s">
                        <div class="doctor-item">
                            <div class="doctor-top">
                                <img src="{{asset('img/about/awards/7.jpg')}}" alt="Doctor">

                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay=".3s">
                        <div class="doctor-item">
                            <div class="doctor-top">
                                <img src="https://www.tmu.ac.in/monaco/assets/image/award/4.webp" alt="Doctor">
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay=".3s">
                        <div class="doctor-item">
                            <div class="doctor-top">
                                <img src="https://www.tmu.ac.in/monaco/assets/image/award/6.webp" alt="Doctor">

                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay=".3s">
                        <div class="doctor-item">
                            <div class="doctor-top">
                                <img src="https://www.tmu.ac.in/monaco/assets/image/award/3.webp" alt="Doctor">

                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay=".3s">
                        <div class="doctor-item">
                            <div class="doctor-top">
                                <img src="https://www.tmu.ac.in/monaco/assets/image/award/2.webp" alt="Doctor">

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="mb-5">
    <div class="container snipcss-rSb7J ">
        <div class="section-title-two">
            <div class="section-title">
                <h2 class="tmu-primary">Patient Testimonials</h2>
            </div>
        </div>

        <!-- Mobile View -->

        <div class="container d-lg-none">
            <div class="patient-testimonial owl-carousel ">
                <div class="item">
                    <div class="video-wrap">
                        <div class="video">
                            <div class="video-thumb ratio2">
                                <img src="{{asset('img/about/testimonial/1.jpg')}}"
                                    width="514" height="400" alt="liver failure">
                                <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0" class="play-video">
                                    <img src="{{asset('img/about/play.png')}}"
                                        alt="Coronary Artery Disease" width="48" height="48">
                                </a>
                            </div>
                            <div class="video-caption">
                                <div class="video-title">Liver Failure</div>
                                <p>Baby Bhavika</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="video-wrap">
                        <div class="video">
                            <div class="video-thumb ratio3">
                                <img src="{{asset('img/about/testimonial/3.jpg')}}"
                                    width="514" height="400" alt="jaw cancer">
                                <a href="https://www.youtube.com/watch?v=tnlEB7AfJQU" class="play-video">
                                    <img src="{{asset('img/about/play.png')}}" width="48"
                                        height="48" alt="Coronary Artery Disease">
                                </a>
                            </div>
                            <div class="video-caption">
                                <div class="video-title">Jaw Cancer</div>
                                <p>Dr. Abhilasha Agarwal </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="video-wrap">
                        <div class="video">
                            <div class="video-thumb ratio2">
                                <img src="{{asset('img/about/testimonial/1.jpg')}}"
                                    width="514" height="400" alt="liver failure">
                                <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0" class="play-video">
                                    <img src="{{asset('img/about/play.png')}}"
                                        alt="Coronary Artery Disease" width="48" height="48">
                                </a>
                            </div>
                            <div class="video-caption">
                                <div class="video-title">Liver Failure</div>
                                <p>Baby Bhavika</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="video-wrap">
                        <div class="video">
                            <div class="video-thumb ratio3">
                                <img src="{{asset('img/about/testimonial/3.jpg')}}"
                                    width="514" height="400" alt="jaw cancer">
                                <a href="https://www.youtube.com/watch?v=tnlEB7AfJQU" class="play-video">
                                    <img src="{{asset('img/about/play.png')}}" width="48"
                                        height="48" alt="Coronary Artery Disease">
                                </a>
                            </div>
                            <div class="video-caption">
                                <div class="video-title">Jaw Cancer</div>
                                <p>Dr. Abhilasha Agarwal </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Desktop View -->
        <div class="story-video-container wow fadeInUp style-lwSRM d-none d-lg-flex" data-wow-delay="0.5s"
            id="style-lwSRM">

            <div class="video-col video-col-2">
                <div class="video-wrap">
                    <div class="video">
                        <div class="video-thumb ratio4">
                            <img src="{{asset('img/about/testimonial/2.jpg')}}"
                                width="514" height="400" alt="pre-term babies">
                            <a href="https://www.youtube.com/watch?v=Izcsx6gtGsI" class="play-video">
                                <img src="{{asset('img/about/play.png')}}" width="48"
                                    height="48" alt="Coronary Artery Disease">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="video-title">Pre-term Babies</div>
                            <p>Ms Sakshi</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-col video-col-2">
                <div class="video-wrap">
                    <div class="video">
                        <div class="video-thumb ratio2">
                            <img src="{{asset('img/about/testimonial/1.jpg')}}"
                                width="514" height="400" alt="liver failure">
                            <a href="https://www.youtube.com/watch?v=cOfR9N-mcY0" class="play-video">
                                <img src="{{asset('img/about/play.png')}}"
                                    alt="Coronary Artery Disease" width="48" height="48">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="video-title">Liver Failure</div>
                            <p>Baby Bhavika</p>
                        </div>
                    </div>
                </div>
                <div class="video-wrap">
                    <div class="video">
                        <div class="video-thumb ratio3">
                            <img src="{{asset('img/about/testimonial/3.jpg')}}"
                                width="514" height="400" alt="jaw cancer">
                            <a href="https://www.youtube.com/watch?v=tnlEB7AfJQU" class="play-video">
                                <img src="{{asset('img/about/play.png')}}" width="48"
                                    height="48" alt="Coronary Artery Disease">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="video-title">Jaw Cancer</div>
                            <p>Dr. Abhilasha Agarwal </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-col video-col-2">
                <div class="video-wrap">
                    <div class="video">
                        <div class="video-thumb ratio4">
                            <img src="{{asset('img/about/testimonial/4.jpg')}}"
                                width="514" height="400" alt="mauritian patient treated for esophageal cancer">
                            <a href="https://www.youtube.com/watch?v=arFxSlbt9V8" class="play-video">
                                <img src="{{asset('img/about/play.png')}}"
                                    alt="Coronary Artery Disease" width="48" height="48">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="video-title">Mauritian Patient Treated For Esophageal Cancer</div>
                            <p>Mr Fazl Hosany</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-col video-col-2">
                <div class="video-wrap">
                    <div class="video">
                        <div class="video-thumb ratio3">
                            <img src="{{asset('img/about/testimonial/5.jpg')}}"
                                width="514" height="400" alt="neurosurgical treatment">
                            <a href="https://www.youtube.com/watch?v=Q4KOz-Zmh7g" class="play-video">
                                <img width="48" height="48"
                                    src="{{asset('img/about/play.png')}}"
                                    alt="Coronary Artery Disease">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="video-title">Neurosurgical Treatment</div>
                            <p>Mr. Devender Jeet Singh</p>
                        </div>
                    </div>
                </div>
                <div class="video-wrap">
                    <div class="video">
                        <div class="video-thumb ratio2">
                            <img src="{{asset('img/about/testimonial/6.jpg')}}"
                                width="514" height="400" alt="bone marrow transplant">
                            <a href="https://www.youtube.com/watch?v=zDxSL37jy0U" class="play-video">
                                <img width="48" height="48"
                                    src="{{asset('img/about/play.png')}}"
                                    alt="Coronary Artery Disease">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="video-title">Bone Marrow Transplant</div>
                            <p>Patient Father Mr Haider</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-col video-col-2">
                <div class="video-wrap">
                    <div class="video">
                        <div class="video-thumb ratio4">
                            <img src="{{asset('img/about/testimonial/7.jpg')}}"
                                width="514" height="400" alt="mother saves daughter by donating a kidney">
                            <a href="https://www.youtube.com/watch?v=M0jn57I0bwo" class="play-video">
                                <img width="48" height="48"
                                    src="{{asset('img/about/play.png')}}"
                                    alt="Coronary Artery Disease">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="video-title">Mother Saves Daughter By Donating A Kidney</div>
                            <p>Ms Paluk Sunger</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials -->


<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->

@endsection