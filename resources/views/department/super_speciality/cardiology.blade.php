@extends('layout.app')

@section('title', 'Cardiology Department, TMu')

@section('content')

<style>
    
    .row234{
        padding-right: 0!important;
        padding-left: 0!important;
    }
</style>
<div class="container-fluid  my-0">
    <div class="row ">
        <div class="col-md-6 pt-0 pt-md-5 pt-lg-3 ">
            <h1 class=" ps-md-5 ps-0 mt-5 mb-2 banner-main-heading"><span class="heading1234">Welcome to
            Department of  </span> <span style="font-weight:700!important;color:#ff7900!important">Cardiology</span>
            </h1>
            <div class="d-none d-md-flex gap-3 mt-3 ps-sm-5 ps-0 pt-md-3 pt-lg-5 pt-0 justify-content-left">
                <a href="{{ url('/contact-us') }}" class="hospital-btn-23456 tmu-btn  px-4 py-2">
                    Contact Us
                </a>
                <a href="{{ url('/book-appointment') }}" class="hospital-btn-34567 tmu-btn btn-outline-primary px-4 py-2">
                    Book Appointment
                </a>
            </div>
        </div>
        <div class="col-12 col-md-6 pt-0 pt-md-5 pt-lg-1 row234 mb-2">
            <div class="position-relative p-0 pt-3">
                <div style="z-index: 2;">
                    <img src="{{asset('/img/departments/cardiology/banner.png')}}" alt="" class="p-0 m-0">
                </div>
            </div>
        </div>
        <div class="d-flex gap-3 mt-3 mb-3 pt-md-3 pt-lg-5 pt-0 mt-sm-5 d-block d-md-none justify-content-center">
                <a href="{{ url('/contact-us') }}" class="hospital-btn-23456 tmu-btn  px-4 py-2">
                    Contact Us
                </a>
                <a href="{{ url('/book-appointment') }}" class="hospital-btn-34567 btn-outline-primary px-4 py-2">
                    Book Appointment
                </a>
        </div>
    </div>
</div>

<!-- Doctor Details -->
<div class="doctor-details-area pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="doctor-details-item">
                    <div class="doctor-details-right">
                            @php
                            $description = $department->description ?: 'No description available';
                            @endphp
                            @foreach(explode("\n", $description) as $paragraph)
                            <p class="mb-2">{{ $paragraph }} </p>
                            @endforeach

                        
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
                <div class="px-0 px-md-5">
                    <div class="section-title text-center">
                        <h2 class="tmu-primary w-fit-content d-block mx-auto mb-3">Our Services</h2>
                    </div>
                    <div class="speciality-item">
                        <div class="row m-0">
                            @if($department->services && count($department->services) > 0)
                            @foreach($department->services as $service)
                            <div class="col-sm-6 col-md-6 col-lg-4 wow fadeInUp pb-4" data-wow-delay=".3s">
                                <div class="speciality-inner department pb-2 mb-2">
                                    <i class="icofont-check-circled"></i>
                                    <h3>{{ $service->title ?? 'Default Service Title' }}</h3>
                                    <div class="privacy-item department mt-4 mb-0 ">
                                        <ul class="description-container" data-max-lines="10">
                                            @foreach(explode("\n", $service->description ?? 'No description available') as $item)
                                            <li><i class="icofont-simple-right text-break"></i>{!! $item !!}</li>
                                            @endforeach
                                        </ul>
                                        <div class="text-center">
                                            <button class="read-more-btn mt-3 d-none">Read More</button>
                                        </div>
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
                    <h2 class="tmu-primary w-fit-content d-block mx-auto text-capitalize mt-5 mb-3">Message from our HOD</h2>
                </div>
            </div>
        </div>
        <div class="col-md-10 wow fadeInUp mx-auto" data-wow-delay=".3s">
            <div class="quote-box mx-auto">
                <div class="profile-image">
                    <img src="{{ file_exists(public_path($department->hod->image_url)) ? asset($department->hod->image_url) : asset('img/departments/hod_placeholder.jpg') }}" alt="HOD Image">
                </div>
                <div class="quote-text mt-4 mt-md-0 ">
                    <h4><i class="bi bi-quote" style="font-size:50px; color: #737373;"></i>{!! $department->hod->quote ?? 'No quote available' !!}</h4>
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

<!-- Patient Education -->
@if($department->edutips->isNotEmpty())
<section class="symptoms-area pb-70 mt-5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="symptoms-img">
                    <img src="{{ asset('img/departments/patient_education.jpg') }}" alt="Symptoms">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="symptoms-content">
                    <div class="section-title mb-3">
                        <h2>Patient Education</h2>
                    </div>
                    <p>At TMU Hospital, empowering patients with knowledge is a priority. We offer a
                        range of educational resources, including:</p>
                    <ul>
                        @foreach($department->edutips as $edutip)
                        <li>
                            <span>
                                <i class="icofont-caret-right"></i>
                                {{ $edutip->title ?? 'Default Title' }}
                            </span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- End Patient Education -->



<!-- Appointment -->
<div class="appointment-area-three pb-5">
    <div class="container p-0">
        <div class="row m-0">
            <div class="col-lg-6 d-flex align-items-center" >
                <div class="symptoms-content">
                    <div class="section-title mt-5">
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



<script>
    document.addEventListener("DOMContentLoaded", () => {
    const descriptionContainers = document.querySelectorAll(".description-container");

    descriptionContainers.forEach(container => {
        // Locate the button inside the parent container
        const button = container.parentElement.querySelector(".read-more-btn");
        const originalHeight = container.scrollHeight;

        // Check if the content height exceeds the visible height
        if (originalHeight > container.offsetHeight) {
            button.classList.remove("d-none"); // Show the button

            button.addEventListener("click", () => {
                container.classList.toggle("expanded");
                button.textContent = container.classList.contains("expanded") ? "Read Less" : "Read More";
            });
        }
    });
});

</script>

@endsection