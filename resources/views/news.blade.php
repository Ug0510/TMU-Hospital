@extends('layout.app')

@section('title', 'News')

@section('content')
<!-- Content ============================================= -->
<style>
    .entry-title h3 {
        font-size: 24px !important;
        padding: 0;

    }

    .entry.event {
        margin-bottom: 1.5rem;
        /* Add margin between entries */
    }

    @media (min-width: 992px) {

        /* Bootstrap lg breakpoint */
        .entry.event {
            display: flex;
            /* Use flexbox for side-by-side layout */
        }

        .entry-image {
            flex: 0 0 30%;
            /* Adjust width for image section */
        }

        .entry-image img {
            width: 100%;
            /* Ensure the image takes full width of the container */
            height: auto;
            /* Maintain aspect ratio */
        }

        .entry-content {
            flex: 1;
            /* Allow the content to take the remaining space */
            padding-left: 20px;
            /* Optional: spacing between image and content */
        }
    }

    .entry-image {
        display: block;
        /* Ensure anchor takes up the full width */
        height: 100%;
        /* Ensure anchor takes up the full height */
    }

    .entry-image img {
        width: 100%;
        /* Image should fill the anchor */
        height: auto;
        /* Maintain aspect ratio */
    }

    .bg-overlay {
        position: absolute;
        /* Positioning for overlay */
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        /* Use flexbox for centering content */
        align-items: center;
        justify-content: center;
    }

    .bg-overlay-content {
        position: relative;
        /* Ensure it stays within overlay */
        z-index: 1;
        /* Position above overlay */
    }

    @media (min-width: 768px) and (max-width: 992px) {

        /* Only apply this style for screens between 768px and 992px */
        .entry-title h3 {
            overflow: hidden;
            /* Hide overflow content */
            display: -webkit-box;
            /* Use flexbox */
            -webkit-box-orient: vertical;
            /* Vertical orientation for box */
            -webkit-line-clamp: 3;
            /* Limit to 3 lines */
            line-clamp: 3;
            /* Limit to 3 lines (for non-webkit browsers) */
            height: 4em;
            /* Adjust according to your font-size */
        }

        .entry-content p {
            overflow: hidden;
            /* Hide overflow content */
            display: -webkit-box;
            /* Use flexbox */
            -webkit-box-orient: vertical;
            /* Vertical orientation for box */
            -webkit-line-clamp: 6;
            /* Limit to 3 lines */
            line-clamp: 3;
            /* Limit to 3 lines (for non-webkit browsers) */
            height: 8em;
            /* Adjust according to your font-size */
        }
    }

    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .card img {
        border-radius: 10px;
        padding: 5px;
        background-color: #fff;
    }

    .card .badge {
        font-size: 0.75rem;
        font-weight: bold;
    }

    .card .btn {
        font-weight: bold;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        font-size: 1.25rem;
    }

    .news-card {
        cursor: pointer;
    }

    /* Styling for the news card container */
    .news-card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    /* Badge Styling */
    .news-card .badge {
        font-size: 0.75rem;
        font-weight: bold;
        background-color: #ffc107;
        /* Vibrant warning color */
        color: #333;
    }

    /* Image Styling */
    .news-card img {
        border-radius: 10px;
        padding: 5px;
        background-color: #fff;
        object-fit: cover;
    }

    /* Headings */
    .news-card a h5 {
        font-size: 1.25rem;
        font-weight: 700;
        color: #000f54;
        /* Primary text color */
    }

    .news-card a h5:hover {
        color: #ff7700;
    }

    .news-card h5 a {
        text-decoration: none;
        color: inherit;
        transition: color 0.2s ease;
    }

    .news-card h5 a:hover {
        color: #ff7700;
    }

    /* Unordered List (ul) and List Items (li) */
    .news-card ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .news-card ul li {
        display: inline-block;
        margin-right: 15px;
        font-size: 0.875rem;
        color: #6c757d;
        /* Muted text color */
    }

    .news-card ul li i {
        margin-right: 5px;
        color: #6c757d;
        /* Icon color matches badge */
    }

    /* Paragraph (p) Styling */
    .news-card p {
        font-size: 1rem;
        line-height: 1.6;
        color: #495057;
        /* Neutral text color */
        text-align: justify;
        margin-bottom: 1.5rem;
    }

    /* Button Styling */
    .news-card .btn {
        font-weight: bold;
        background-color: #ff7700;
        border: none;
        color: #fff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.2s ease, box-shadow 0.2s ease;
    }

    .news-card .btn:hover {
        background-color: #001055;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .tmu-btn {
        border: none;
        padding: 12px 24px;
        border-radius: 5px;
        font-size: 16px;
        text-align: center;
    }

    .tmu-btn.btn-2 {
        border: 1px solid #001055;
        background-color: transparent;
        color: #001055;
    }

    .tmu-btn.btn-2:hover {
        background-color: #0010551e;
        background-color: #001055;
        color: #fff;
    }
</style>



<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12 m-4">
            <h1 class="text-center m-0">
                <span style="font-size:2.5rem; color:#ff7700; font-weight:600;">TMU</span> <span style="font-size:2.5rem; color:#000f54; font-weight:600;">News</span>
            </h1>
        </div>
    </div>
</div>


<!-- Filter Form Section ============================================= -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 card">

            <div class="card-body">
                <form id="filterForm" method="POST" action="#">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="news_category" class="form-label fw-bold fs-16">News Category</label>
                            <select class="form-select" name="news_category" id="news_category">
                                <option value="">Select Category</option>
                                <option value="1">General News</option>
                                <option value="2">Events</option>
                                <option value="3">Announcements</option>
                            </select>
                        </div>


                        <div class="col-md-4 mb-3">
                            <label for="from_date" class="form-label fw-bold fs-16">From</label>
                            <input type="date" name="from_date" id="from_date" class="form-control">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="to_date" class="form-label fw-bold fs-16">To</label>
                            <input type="date" name="to_date" id="to_date" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <button type="submit" class="tmu-btn btn-2 m-0 py-1 px-2 fs-12">Apply Filters</button>
                            <button type="button" class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" onclick="clearFilters();">Clear Filters</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>

<div class="container">
    <div class="row mt-2 g-4 mb-5" id="news_results">
        <!-- Card 1 -->
        <div class="col-12 mb-4 news-card">
            <div class=" border-0 rounded-5  all-ts">
                <div class="row g-0 align-items-center">
                    <!-- Image Section -->
                    <div class="col-12 col-lg-4  col-xl-3 position-relative">
                        <img src="https://picsum.photos/300/200" alt="News Image" class="rounded-4 w-100 h-100 p-2" style="object-fit: cover;">
                    </div>
                    <!-- Content Section -->
                    <div class="col-12 col-lg-8 col-xl-9 p-1">
                        <div class="card-body px-3">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title fw-bold mb-2 ">
                                    Teerthanker Mahaveer University celebrated World IP Day
                                </h5>
                            </a>

                            <ul class="list-inline small text-muted mb-1">
                                <li class="list-inline-item"><i class="icofont-calendar"></i> April 30, 2024</li>
                                <li class="list-inline-item"><i class="icofont-folder-open"></i> Conference-Seminar</li>
                            </ul>
                            <p class="card-text">On April 30, 2024, Teerthanker Mahaveer University, one of the best private universities in India, hosted two pivotal sessions ...</p>
                            <a href="#" class="btn btn-warning text-white rounded-pill px-4 py-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 1 -->
        <div class="col-12 mb-4 news-card">
            <div class="border-0 rounded-5 all-ts">
                <div class="row g-0 align-items-center">
                    <!-- Image Section -->
                    <div class="col-12 col-lg-4 col-xl-3 position-relative">
                        <img src="https://picsum.photos/300/200" alt="News Image" class="rounded-4 w-100 h-100 p-2" style="object-fit: cover;">
                    </div>
                    <!-- Content Section -->
                    <div class="col-12 col-lg-8 col-xl-9 p-1">
                        <div class="card-body px-3">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title fw-bold mb-2">
                                    Teerthanker Mahaveer University celebrated World IP Day
                                </h5>
                            </a>
                            <ul class="list-inline small text-muted mb-1">
                                <li class="list-inline-item"><i class="icofont-calendar"></i> April 30, 2024</li>
                                <li class="list-inline-item"><i class="icofont-folder-open"></i> Conference-Seminar</li>
                            </ul>
                            <p class="card-text">On April 30, 2024, Teerthanker Mahaveer University, one of the best private universities in India, hosted two pivotal sessions ...</p>
                            <a href="#" class="btn btn-warning text-white rounded-pill px-4 py-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-12 mb-4 news-card">
            <div class="border-0 rounded-5 all-ts">
                <div class="row g-0 align-items-center">
                    <!-- Image Section -->
                    <div class="col-12 col-lg-4 col-xl-3 position-relative">
                        <img src="https://picsum.photos/300/200" alt="News Image" class="rounded-4 w-100 h-100 p-2" style="object-fit: cover;">
                    </div>
                    <!-- Content Section -->
                    <div class="col-12 col-lg-8 col-xl-9 p-1">
                        <div class="card-body px-3">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title fw-bold mb-2">
                                    International Collaboration for Research & Innovation at TMU
                                </h5>
                            </a>
                            <ul class="list-inline small text-muted mb-1">
                                <li class="list-inline-item"><i class="icofont-calendar"></i> May 15, 2024</li>
                                <li class="list-inline-item"><i class="icofont-folder-open"></i> Research & Development</li>
                            </ul>
                            <p class="card-text">Teerthanker Mahaveer University has partnered with top international institutions to enhance research and innovation, leading to new breakthroughs in technology...</p>
                            <a href="#" class="btn btn-warning text-white rounded-pill px-4 py-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-12 mb-4 news-card">
            <div class="border-0 rounded-5 all-ts">
                <div class="row g-0 align-items-center">
                    <!-- Image Section -->
                    <div class="col-12 col-lg-4 col-xl-3 position-relative">
                        <img src="https://picsum.photos/300/200" alt="News Image" class="rounded-4 w-100 h-100 p-2" style="object-fit: cover;">
                    </div>
                    <!-- Content Section -->
                    <div class="col-12 col-lg-8 col-xl-9 p-1">
                        <div class="card-body px-3">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title fw-bold mb-2">
                                    TMU Hosts National Sports Meet 2024
                                </h5>
                            </a>
                            <ul class="list-inline small text-muted mb-1">
                                <li class="list-inline-item"><i class="icofont-calendar"></i> June 20, 2024</li>
                                <li class="list-inline-item"><i class="icofont-folder-open"></i> Sports</li>
                            </ul>
                            <p class="card-text">The National Sports Meet 2024 at Teerthanker Mahaveer University brought together athletes from across the country to compete and celebrate the spirit of sportsmanship...</p>
                            <a href="#" class="btn btn-warning text-white rounded-pill px-4 py-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



@endsection