@extends('layout.app')

@section('title', $department->name 'Department')

@section('content')

        <!-- Page Title -->
        <div class="page-title-area page-title-three department">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="page-title-item-two text-center w-100">
                        <h2 class="mb-5">Cardiology Department</h2>
                        <!-- <h3>Neurosurgeon.</h3>
                        <p>MBBS in Neurology, PHD in Neurosurgeon.</p> -->
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
                        <div class="doctor-details-item doctor-details-left pb-3">\\
                            <img src="img/department/cardiology/cardiology-side-banner.jpg" alt="Doctor">
                            <div class="doctor-details-contact">
                                <p class="pe-5">For more information or to schedule an appointment, please contact our Cardiology </p>
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
                                    <h3>Welcome to TMU hospital Cardiac Centre</h3>
                                    <p>TMU Cardiac Centre is a Unit of 900 bedded Tertiary care Hospital “TMU Hospital”, with Multi Super Speciality Services having all medical and surgical modalities under one roof. TMU Cardiac Centre boasts of state-of-the-art medical and paramedical facilities under a single roof. We are steadfast on providing all our patients with the best of medical diagnosis and treatment at economical costs.</p><br>
                                    <p>Our Cardiac Centre is serving first class facilities staffed by a team of consultants & specialists from different areas of Cardiology & Cardiac Surgery. This unit provides innovative services involving the latest diagnostic and therapeutic tools and high-quality service for patients with suspected Cardiac disease. We provide a wide range of diagnostic, invasive and non-invasive procedures under the meticulous supervision of qualified and experienced Cardiac Team. The facilities available are a state-of-the-art invasive cathlab (Artis Zee) for coronary and other interventions as well as high end equipments for holistic non-invasive cardiac assessment. Also, cardiology department provides cardiology checkup program. Our Cardiology services are also available 24X7, all emergency and elective cardiac procedures are done by dedicated team of doctors.</p>
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

        <div class="row m-0">
            <div class="col-lg-12">
                <div class="px-5">
                    <div class="section-title text-center">
                        <h2 class="tmu-primary w-fit-content d-block mx-auto">Our Services</h2>
                    </div>
                    <div class="speciality-item">
                        <div class="row m-0">
                            <div class="col-sm-6 col-md-4 wow fadeInUp pb-4" data-wow-delay=".3s">
                                <div class="speciality-inner department">
                                    <i class="icofont-check-circled"></i>
                                    <h3>Diagnostic Testing</h3>
                                    <div class="privacy-item department mt-4 mb-0">
                                        <ul>
                                            <li><i class="icofont-simple-right"></i>Electrocardiograms (EKG/ECG)</li>
                                            <li><i class="icofont-simple-right"></i>Echocardiography (Trans-thoracic & Trans-esophageal).</li>
                                            <li><i class="icofont-simple-right"></i>Neonatal & pediatric Echocardiography</li>
                                            <li><i class="icofont-simple-right"></i>Stress Testing </li>
                                            <li><i class="icofont-simple-right"></i>Holter Monitoring & ambulatory BP monitoring</li>
                                            <li><i class="icofont-simple-right"></i>Cardiac MRI and CT</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 wow fadeInUp pb-4" data-wow-delay=".3s">
                                <div class="speciality-inner department">
                                    <i class="icofont-check-circled"></i>
                                    <h3>Electrophysiology</h3>
                                    <div class="privacy-item department mt-4 mb-0">
                                        <ul>
                                            <li><i class="icofont-simple-right"></i>Temporary and permanent pacemaker Implantation</li>
                                            <li><i class="icofont-simple-right"></i>Implantable Cardioverter Defibrillator (ICD) implantation</li>
                                            <li><i class="icofont-simple-right"></i>CRT and Combo device implantation.</li>
                                            <li><i class="icofont-simple-right"></i>Ablation Procedures</li>
                                            <li><i class="icofont-simple-right"></i>EP Study & RF ablation (monthly camp)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 wow fadeInUp pb-4" data-wow-delay=".3s">
                                <div class="speciality-inner department">
                                    <i class="icofont-check-circled"></i>
                                    <h3>Cardiac Surgery </h3>
                                    <div class="privacy-item department mt-4 mb-0">
                                        <ul>
                                            <li><i class="icofont-simple-right"></i>Coronary artery bypass surgery (CABG including minimal invasive surgery)</li>
                                            <li><i class="icofont-simple-right"></i>Valve replacements</li>
                                            <li><i class="icofont-simple-right"></i>Adult congenital heart disease surgeries</li>
                                            <li><i class="icofont-simple-right"></i>Thoracic & Vascular surgeries</li>
                                            <li><i class="icofont-simple-right"></i>Pericardial procedures</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 wow fadeInUp pb-4" data-wow-delay=".3s">
                                <div class="speciality-inner department">
                                    <i class="icofont-check-circled"></i>
                                    <h3>Preventive Cardiology
                                        </h3>
                                    <div class="privacy-item department mt-4 mb-0">
                                        <ul>
                                            <li><i class="icofont-simple-right"></i>Risk Factor Assessment</li>
                                            <li><i class="icofont-simple-right"></i>Lifestyle Modification Programs</li>
                                            <li><i class="icofont-simple-right"></i>Nutritional Counseling</li>
                                            <li><i class="icofont-simple-right"></i>Cardiac Rehabilitation</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 wow fadeInUp pb-4" data-wow-delay=".3s">
                                <div class="speciality-inner department">
                                    <i class="icofont-check-circled"></i>
                                    <h3>Hypertension Management
                                        </h3>
                                    <div class="privacy-item department mt-4 mb-0">
                                        <ul>
                                            <li><i class="icofont-simple-right"></i>Blood Pressure Monitoring</li>
                                            <li><i class="icofont-simple-right"></i>ABPM</li>
                                            <li><i class="icofont-simple-right"></i>Medication and Lifestyle Modifications</li>
                                            <li><i class="icofont-simple-right"></i>Advanced Hypertension Treatment</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->


   


    <!-- Message from our HOD -->
    <section class="expertise-area pb-70">

        <div class="row m-0">
            <div class="col-lg-12">
                <div class="px-5">
                    <div class="section-title text-center">
                        <h2 class="tmu-primary w-fit-content d-block mx-auto text-capitalize">Message from our HOD</h2>
                        <!-- <p class="mt-4">Our specialists are leaders in their field, bringing a wealth of experience and expertise to our patients.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-10 wow fadeInUp mx-auto" data-wow-delay=".3s">

                <div class="quote-box mx-auto">
                    <div class="profile-image">
                      <img src="img/home-one/doctor/1.jpg" alt="Profile Image">
                    </div>
                    <div class="quote-text mt-4 mt-md-0 ">
      
                      <h4> <i class="bi bi-quote" style="font-size:50px; color: #737373;"></i>It is my firm belief that harmonious development of the society can be achieved by enlightenment of the individual heart, mind and soul. This has become a prerequisite in today’s fast changing world where material gains have out-placed basic human values.</h4>
      
                      <p class="mt-3 mt-md-4 mb-1">- Dr Shalabh Agarwal</p>
                      <span class="fw-bold mb-1 fs-12">Senior Interventional Cardio Surgeon</span>
                      <br>
                      <span class="fs-12">MBBS, MD, DM(Cardiology), FSCAI(USA), FESC(Europe)</span>
                    </div>
                  </div>

            </div>
        </div>
    </section>
     <!-- END Message from our HOD  -->

     <!-- Symptoms -->
     <section class="symptoms-area pb-70">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="symptoms-img">
                        <img src="img/home-four/symptoms.jpg" alt="Symptoms">
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
                            <div class="section-title" >
                                <h2>Research and Innovation</h2>
                            </div>
                            <p>Our Cardiology Department is at the forefront of cardiovascular research. We participate in numerous clinical trials and studies to advance the field of cardiology and bring cutting-edge treatments to our patients.</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 pr-0">
                        <div class="speciality-item speciality-right speciality-right-two speciality-right-three">
                            <img src="img/doctor/4.jpg" alt="Doctor">
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