@extends('layout.app')

@section('title', 'Our Doctors')

@section('content')
<!-- About -->
<div class="about-area pt-100 pb-0">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12">
                    <div class="section-title w-fit-content mx-auto">
                        <h2 class="tmu-primary">Our Doctors</h2>
                    </div>

                    <!-- Doctors Cards -->
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 mb-3">
                        @foreach($doctors as $doctor)
                            <div class="col">
                                <div class="card h-100 text-center shadow-sm rounded-3">
                                    <img src="{{ asset( '/img/profiler.jpg') }}" class="card-img-top" alt="{{ $doctor->name }}">

                                    <!-- Text Content -->
                                    <div class="card-body justify-content-center text-center">
                                        <!-- Doctor's Name -->
                                        <h5 class="card-title fw-bold text-center" style="color: #ff7900; font-size: 16px;">
                                            {{ $doctor->name }}
                                        </h5>

                                        <!-- Designation -->
                                        <p class="card-text text-center mt-0 pt-0 pb-0 mb-0" style="color: #333; font-size: 14px;">
                                            {{ $doctor->designation }}
                                        </p>

                                        <!-- Qualifications -->
                                        @if($doctor->qualifications)
                                            <p class="card-text text-center mt-0 pt-0 pb-0 mb-0" style="font-size: 14px; color: #555;">
                                                {{ $doctor->qualifications }}
                                            </p>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            
        </div>
    </div>
</div>
@endsection
