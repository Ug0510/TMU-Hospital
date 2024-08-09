@extends('layout.app')

@section('title', ($department->name ?? 'Default Department') . ' Department')

@section('content')
    <!-- Page Title -->
    <div class="page-title-area page-title-three department" @if($department->bg_image) style="background-image: url('{{ $department->bg_image}}');" @endif >
        <div class="d-table">
            <div class="d-table-cell">
                <div class="page-title-item-two text-center w-100">
                    <h2>{{ $department->name ?? 'Default Department' }} Department</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Doctor Details -->
    <div class="doctor-details-area pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col-lg-5">
                    <div class="doctor-details-item doctor-details-left pb-3">
                        <img src="{{ str_replace('assets/', '', $department->banner_image ?? 'default-banner.jpg') }}" alt="{{ $department->name ?? 'Default Department' }}">
                        <div class="doctor-details-contact">
                            <p class="pe-5">For more information or to schedule an appointment, please contact our {{ $department->name ?? 'Default Department' }}</p>
                            <h3>Contact info</h3>
                            <ul>
                                <li>
                                    <i class="icofont-ui-call"></i>
                                    Call : <a href="tel:+919837775170">9837775170</a>
                                </li>
                                <li>
                                    <i class="icofont-ui-message"></i>
                                    <a href="mailto:tmuhospital@tmu.ac.in">tmuhospital@tmu.ac.in</a>
                                </li>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    TMU hospital, NH-09,<br> <span class="ms-3 ps-4"> Delhi Road Moradabad</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12">
                    <div class="doctor-details-item">
                        <div class="doctor-details-right">
                            <div class="doctor-details-biography">
                                <h3>Welcome to TMU Hospital {{ $department->name ?? 'Default Department' }}</h3>
                                @php
                                    $description = $department->description ?: 'No description available';
                                @endphp
                                @foreach(explode("\n", $description) as $paragraph)
                                    <p>{{ $paragraph }}</p>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Doctor Details -->

    <!-- Services -->
    <section class="expertise-area pb-70">
        <div class="container">
            <div class="row m-0">
                <div class="col-lg-12">
                    <div class="px-5">
                        <div class="section-title text-center">
                            <h2 class="tmu-primary w-fit-content d-block mx-auto">Our Services</h2>
                        </div>
                        <div class="speciality-item">
                            <div class="row m-0">
                                @if($department->services)
                                    @foreach($department->services as $service)
                                        <div class="col-sm-6 col-md-4 wow fadeInUp pb-4" data-wow-delay=".3s">
                                            <div class="speciality-inner department">
                                                <i class="icofont-check-circled"></i>
                                                <h3>{{ $service->title ?? 'Default Service Title' }}</h3>
                                                <div class="privacy-item department mt-4 mb-0">
                                                    <ul>
                                                        @foreach(explode("\n", $service->description ?? 'No description available') as $item)
                                                            <li><i class="icofont-simple-right"></i>{{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <p>No services available.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

    <!-- Message from our HOD -->
    @if($department->hod)
        <section class="expertise-area pb-70">
            <div class="row m-0">
                <div class="col-lg-12">
                    <div class="px-5">
                        <div class="section-title text-center">
                            <h2 class="tmu-primary w-fit-content d-block mx-auto text-capitalize">Message from our HOD</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 wow fadeInUp mx-auto" data-wow-delay=".3s">
                    <div class="quote-box mx-auto">
                        <div class="profile-image">
                        <img src="{{ file_exists(public_path($department->hod->image_url)) ? asset($department->hod->image_url) : asset('img/departments/hod_placeholder.jpg') }}" alt="HOD Image">
                        </div>
                        <div class="quote-text mt-4 mt-md-0 ">
                            <h4><i class="bi bi-quote" style="font-size:50px; color: #737373;"></i>{{ $department->hod->quote ?? 'No quote available' }}</h4>
                            <p class="mt-3 mt-md-4 mb-1">- {{ $department->hod->name ?? 'HOD Name' }}</p>
                            <span class="fw-bold mb-1 fs-12">{{ $department->hod->title ?? 'HOD Title' }}</span><br>
                            <span class="fs-12">{{ $department->hod->qualifications ?? 'HOD Qualifications' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- END Message from our HOD  -->

    <!-- Symptoms -->
    <section class="symptoms-area pb-70">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="symptoms-img">
                        <img src="{{ asset('img/departments/patient_education.jpg') }}" alt="Symptoms">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="symptoms-content">
                        <div class="section-title">
                            <h2>Patient Education</h2>
                        </div>
                        <p>We believe that informed patients are empowered to make the best decisions about their health. Our education resources include:</p>
                        <ul>
                            <li>
                                <span>
                                    <i class="icofont-caret-right"></i>
                                    Heart Health Seminars
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="icofont-caret-right"></i>
                                    Online Resources and Articles
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="icofont-caret-right"></i>
                                    Support Groups and Counseling Services
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Symptoms -->

    <!-- Appointment -->
    <div class="appointment-area-three pb-5">
        <div class="container p-0">
            <div class="row m-0">
                <div class="col-lg-6 d-flex align-items-center" style="height: 60vh;">
                    <div class="symptoms-content">
                        <div class="section-title">
                            <h2>Research and Innovation</h2>
                        </div>
                        <p>{{ !empty($department->research_description) ? $department->research_description : 'No research description available' }}</p>
                    </div>
                </div>
                <div class="col-lg-6 pr-0">
                    <div class="speciality-item speciality-right speciality-right-two speciality-right-three">
                        <img src="{{ asset('img/departments/4.jpg') }}" alt="Doctor">
                        <!-- <div class="speciality-emergency">
                            <div class="speciality-icon">
                                <i class="icofont-ui-call"></i>
                            </div>
                            <h3>Emergency Call</h3>
                            <a href="tel:+07554332322">095688 65444</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Appointment -->

@endsection
