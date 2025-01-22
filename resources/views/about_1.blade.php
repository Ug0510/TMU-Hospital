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
            <div class="col-lg-6  hospital-item p-0 m-0">

                <div class="row m-0">
                    <div class="p-0">
                        <div class="p-3 ps-lg-3">
                            <div id="hospitalCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item  active">
                                        <img src="{{asset('img/home/about/new/1.webp')}}" class="d-block w-100 custom235-carousel-img" alt="About">
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="{{asset('img/home/about/new/2.webp')}}" class="d-block w-100 custom235-carousel-img" alt="About">
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="{{asset('img/home/about/new/3.webp')}}" class="d-block w-100 custom235-carousel-img" alt="About">
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="{{asset('img/home/about/new/4.webp')}}" class="d-block w-100 custom235-carousel-img" alt="About">
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="{{asset('img/home/about/new/5.webp')}}" class="d-block w-100 custom235-carousel-img" alt="About">
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="{{asset('img/home/about/new/6.webp')}}" class="d-block w-100 custom235-carousel-img" alt="About">
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="{{asset('img/home/about/new/7.webp')}}" class="d-block w-100 custom235-carousel-img" alt="About">
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="{{asset('img/home/about/new/8.webp')}}" class="d-block w-100 custom235-carousel-img" alt="About">
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="hospital-item hospital-right mx-4">
                    <div class="section-title pb-0 mb-0">
                        <h2 class="tmu-primary">About Our Hospital</h2>
                    </div>
                    <p class="pb-0 mb-3 " style="text-align:justify!important;">
                        TMU hospital is a hub of safety and advanced care, offering an extensive range of super-specialty services. It provides advanced and comprehensive primary, secondary, and tertiary care, serving as a vital resource for the community.
                        <br /><br /><b>It provides-</b>
                        24/7 medical facility with an 800+ bed super-specialty hospital on campus Hands-on practical experience opportunities for medical, nursing, and allied health students Comprehensive critical and emergency healthcare services.
                    </p>
                    <div class="carousel-buttons d-none d-sm-block">
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
                                <img src="{{asset('img/about/testimonial/Testi-01.jpg')}}"
                                    width="514" height="400" alt="Aortic valve replacement">
                                <a href="javascript:void(0);" class="play-video" onclick="openVideoPopup('https://www.youtube.com/embed/jPnHbhhBz9U')">
                                    <img src="{{asset('img/about/play.png')}}"
                                        alt="Coronary Artery Disease" width="48" height="48">
                                </a>
                            </div>
                            <div class="video-caption">
                                <div class="video-title">Aortic valve replacement</div>
                                <p>Saida Begum</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="video-wrap">
                        <div class="video">
                            <div class="video-thumb ratio2">
                                <img src="{{asset('img/about/testimonial/Testi-02.jpg')}}"
                                    width="514" height="400" alt="Knee Replacement">
                                <a href="javascript:void(0);" class="play-video" onclick="openVideoPopup('https://www.youtube.com/embed/h_Fo7SjT9vw?si=Iy4ei-TjJ_zIJVO_')">
                                    <img src="{{asset('img/about/play.png')}}" width="48"
                                        height="48" alt="Coronary Artery Disease">
                                </a>
                            </div>
                            <div class="video-caption">
                                <div class="video-title">Knee Replacement</div>
                                <p>Arun Kumar </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="video-wrap">
                        <div class="video">
                            <div class="video-thumb ratio2">
                                <img src="{{asset('img/about/testimonial/Testi-03.jpg')}}"
                                    width="514" height="400" alt="Bone Replacement">
                                <a href="javascript:void(0);" class="play-video" onclick="openVideoPopup('https://www.youtube.com/embed/Qx_FKOSMgwE?si=2pcd3Eid4fhf9cuE')">
                                    <img src="{{asset('img/about/play.png')}}"
                                        alt="Coronary Artery Disease" width="48" height="48">
                                </a>
                            </div>
                            <div class="video-caption">
                                <div class="video-title">Bone Replacement</div>
                                <p>Master Haider</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="video-wrap">
                        <div class="video">
                            <div class="video-thumb ratio2">
                                <img src="{{asset('img/about/testimonial/Testi-04.jpg')}}"
                                    width="514" height="400" alt="Ear Operation">
                                <a href="javascript:void(0);" class="play-video" onclick="openVideoPopup('https://www.youtube.com/embed/vcguWA0oVmQ?si=DxvGu3KapIaSm4GK')">
                                    <img src="{{asset('img/about/play.png')}}" width="48"
                                        height="48" alt="Coronary Artery Disease">
                                </a>
                            </div>
                            <div class="video-caption">
                                <div class="video-title">Ear Operation</div>
                                <p>Aansh</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="item">
                    <div class="video-wrap">
                        <div class="video">
                            <div class="video-thumb ratio2">
                                <img src="{{asset('img/about/testimonial/Testi-07.jpg')}}"
                                    width="514" height="400" alt="Ear Operation">
                                <a href="javascript:void(0);" class="play-video" onclick="openVideoPopup('https://www.youtube.com/embed/Ql2difGF3n0?si=ZW70BRK_rylhI60a')">
                                    <img src="{{asset('img/about/play.png')}}" width="48"
                                        height="48" alt="Coronary Artery Disease">
                                </a>
                            </div>
                            <div class="video-caption">
                                <div class="video-title">Emergency Perineal Repair</div>
                                <p>Murtaza</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="video-wrap">
                        <div class="video">
                            <div class="video-thumb ratio2">
                                <img src="{{asset('img/about/testimonial/Testi-08.jpg')}}"
                                    width="514" height="400" alt="Emergency Bone Realignment ">
                                <a href="javascript:void(0);" class="play-video" onclick="openVideoPopup('https://www.youtube.com/embed/b3SR90aHFBA?si=SNt8bbiYl4ChinSI')">
                                    <img src="{{asset('img/about/play.png')}}" width="48"
                                        height="48" alt="Coronary Artery Disease">
                                </a>
                            </div>
                            <div class="video-caption">
                                <div class="video-title">Emergency Bone Realignment</div>
                                <p>Mahesh Ram</p>
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
                            <img src="{{asset('img/about/testimonial/Testi-01-desk.jpg')}}"
                                width="514" height="400" alt="liver failure">
                            <a href="javascript:void(0);" class="play-video" onclick="openVideoPopup('https://www.youtube.com/embed/jPnHbhhBz9U')">
                                <img src="{{asset('img/about/play.png')}}"
                                    alt="Coronary Artery Disease" width="48" height="48">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="video-title">Aortic valve replacement</div>
                            <p>Saida Begum</p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="video-col video-col-2">

                <div class="video-wrap">
                    <div class="video">
                        <div class="video-thumb ratio2">
                            <img src="{{asset('img/about/testimonial/Testi-02.jpg')}}"
                                width="514" height="400" alt="pre-term babies">
                            <a href="javascript:void(0);" class="play-video" onclick="openVideoPopup('https://www.youtube.com/embed/h_Fo7SjT9vw?si=Iy4ei-TjJ_zIJVO_')">
                                <img src="{{asset('img/about/play.png')}}" width="48"
                                    height="48" alt="Coronary Artery Disease">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="video-title">Knee Replacement</div>
                            <p>Arun Kumar</p>
                        </div>
                    </div>
                </div>

                <div class="video-wrap">
                    <div class="video">
                        <div class="video-thumb ratio2">
                            <img src="{{asset('img/about/testimonial/Testi-04.jpg')}}"
                                width="514" height="400" alt="Ear Operation">
                            <a href="javascript:void(0);" class="play-video" onclick="openVideoPopup('https://www.youtube.com/embed/vcguWA0oVmQ?si=R4IAyeQRY29iKZVH')">
                                <img src="{{asset('img/about/play.png')}}" width="48"
                                    height="48" alt="Coronary Artery Disease">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="video-title">Ear Operation</div>
                            <p>Aansh</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-col video-col-2">
                <div class="video-wrap">
                    <div class="video">
                        <div class="video-thumb ratio4">
                            <img src="{{asset('img/about/testimonial/Testi-03-desk.jpg')}}"
                                width="514" height="400" alt="Bone Replacement">
                            <a href="javascript:void(0);" class="play-video" onclick="openVideoPopup('https://www.youtube.com/embed/Qx_FKOSMgwE?si=SgQ5iz7F_2KxHDmR')">
                                <img src="{{asset('img/about/play.png')}}"
                                    alt="Coronary Artery Disease" width="48" height="48">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="video-title">Bone Replacement</div>
                            <p>Master Haider</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="video-col video-col-2">
                <div class="video-wrap">
                    <div class="video">
                        <div class="video-thumb ratio2">
                            <img src="{{asset('img/about/testimonial/Testi-06.jpg')}}"
                                width="514" height="400" alt="neurosurgical treatment">
                            <a href="javascript:void(0);" class="play-video" onclick="openVideoPopup('https://www.youtube.com/embed/-GYXlKd07do?si=QdWoT5oD0e-jZV6y')">
                                <img width="48" height="48"
                                    src="{{asset('img/about/play.png')}}"
                                    alt="Coronary Artery Disease">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="video-title">Emergrncy Operation</div>
                            <p>Rustum </p>
                        </div>
                    </div>
                </div>
                <div class="video-wrap">
                    <div class="video">
                        <div class="video-thumb ratio2">
                            <img src="{{asset('img/about/testimonial/Testi-07.jpg')}}"
                                width="514" height="400" alt="Emergency Perineal Repair">
                            <a href="javascript:void(0);" class="play-video" onclick="openVideoPopup('https://www.youtube.com/embed/Ql2difGF3n0?si=ht8H6UUexv9L6sn5')">
                                <img width="48" height="48"
                                    src="{{asset('img/about/play.png')}}"
                                    alt="Coronary Artery Disease">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="video-title">Emergency Perineal Repair</div>
                            <p>Murtaza</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-col video-col-2">
                <div class="video-wrap">
                    <div class="video">
                        <div class="video-thumb ratio4">
                            <img src="{{asset('img/about/testimonial/Testi-08-desk.jpg')}}"
                                width="514" height="400" alt="Emergency Bone realignment ">
                            <a href="javascript:void(0);" class="play-video" onclick="openVideoPopup('https://www.youtube.com/embed/b3SR90aHFBA?si=JbXnY06ijGzsBXKa')">
                                <img width="48" height="48"
                                    src="{{asset('img/about/play.png')}}"
                                    alt="Coronary Artery Disease">
                            </a>
                        </div>
                        <div class="video-caption">
                            <div class="video-title">Emergency Bone realignment </div>
                            <p>Mahesh Ram</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials -->

<div id="videoModal" class="video-modal">
    <div class="video-modal-content">
        <span class="close-btn" onclick="closeVideoPopup()">&times;</span>
        <iframe id="videoFrame" width="560" height="315" frameborder="0" allowfullscreen></iframe>
    </div>
</div>


<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
<style>
    .custom235-carousel-img {
        margin: 10px auto;
        /* Add spacing around the images */
        width: 90%;
        /* Retain the width and border-radius from inline styles */
        border-radius: 15px;
    }
</style>

<style>
    /* General Modal Styles */
    .video-modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
    }

    .video-modal-content {
        position: relative;
        width: 90%;
        max-width: 700px;
        background: #000;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .video-modal iframe {
        width: 100%;
        height: 56.25vw;
        /* Maintain 16:9 aspect ratio */
        max-height: 400px;
        border: none;
    }

    .close-btn {
        position: absolute;
        top: 5px;
        right: 10px;
        font-size: 18px;
        font-weight: bold;
        color: #fff;
        cursor: pointer;
        background: rgba(0, 0, 0, 0.6);
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1001;
    }

    

    /* Responsive Design */
    @media (max-width: 768px) {
        .video-modal-content {
            width: 95%;
        }

        .video-modal iframe {
            height: 50vw;
        }

        .close-btn {
            width: 25px;
            height: 25px;
            font-size: 16px;
        }
    }

    @media (max-width: 480px) {
        .video-modal-content {
            width: 100%;
        }

        .video-modal iframe {
            height: 82vw;
            border: none;

        }

        .close-btn {
            width: 20px;
            height: 20px;
            font-size: 14px;
        }
    }

    /* Owl Carousel Styling */
    .owl-carousel .item {
        padding: 10px;
        text-align: center;
    }

    .owl-carousel .video-wrap {
        max-width: 100%;
        margin: auto;
    }
</style>


<script>
    function openVideoPopup(videoUrl) {
        const videoModal = document.getElementById('videoModal');
        const videoFrame = document.getElementById('videoFrame');
        videoFrame.src = `${videoUrl}?autoplay=1`;
        videoModal.style.display = 'flex';
    }

    function closeVideoPopup() {
        const videoModal = document.getElementById('videoModal');
        const videoFrame = document.getElementById('videoFrame');
        videoModal.style.display = 'none';
        videoFrame.src = ''; // Stop the video
    }
</script>
@endsection