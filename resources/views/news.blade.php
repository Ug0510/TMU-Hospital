@extends('layout.app')

@section('title', 'News')

@section('content')
<!-- Content ============================================= -->
<style>
    .tmu-btn.btn-2 {
        border: 1px solid #001055;
        background-color: transparent;
        color: #001055;
    }

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


</style>

<section id="content">
    <div class="content-wrap pb-0">
        <div class="container-fluid my-0 px-1 px-md-5">
            <div class="col-md-12 col-lg-12 mt-3 mt-sm-0">
                <h1 class="text-uppercase tmu-text-primary tmu-page-heading text-center mb-1 mb-md-3">
                    <span>TMU</span> <span>News</span>
                </h1>

                <!-- Filter Form Section ============================================= -->
                <section id="content pb-3 mb-3">
                    <div class="content-wrap">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="filterForm" method="POST" action="#">
                                                <div class="row">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="news_category" class="form-label fw-bold fs-16">News Category</label>
                                                        <select class="form-select" name="news_category" id="news_category">
                                                            <option value="">Select Category</option>
                                                            <option value="1">General News</option>
                                                            <option value="2">Events</option>
                                                            <option value="3">Announcements</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3 mb-3">
                                                        <label for="college_name" class="form-label fw-bold fs-16">University / College / Department</label>
                                                        <select class="form-select" name="college_name" id="college_name">
                                                            <option value="">Select College</option>
                                                            <option value="1">College of Engineering</option>
                                                            <option value="2">School of Management</option>
                                                            <option value="3">School of Arts</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3 mb-3">
                                                        <label for="from_date" class="form-label fw-bold fs-16">From</label>
                                                        <input type="date" name="from_date" id="from_date" class="form-control">
                                                    </div>

                                                    <div class="col-md-3 mb-3">
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
                        </div>
                    </div>
                </section>

                <!-- News Content Section ============================================= -->
                <section id="content" style="background: #f5f5f5;">
                    <div class="container">
                        <div class="content-wrap" id="newsContent">
                            <div class="row g-4 mb-5" id="news_results">
                                <!-- Sample News Article -->
                                <article class="entry event col-12 col-md-6 col-lg-12 mb-4">
                                    <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                                        <div class="col-12 col-lg-4 col-xl-3 mb-md-0">
                                            <a href="#" class="entry-image mb-0 w-100 h-100">
                                                <img src="https://via.placeholder.com/300x200" alt="News Image" class="rounded-2 object-cover align-items-center">
                                                <div class="bg-overlay">
                                                    <div class="bg-overlay-content justify-content-start align-items-start w-100">
                                                        <div class="badge px-3 py-2 fs-12 rounded-pill">General News</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-lg-8 col-xl-9 ps-4 pt-1">
                                            <div class="entry-title nott">
                                                <h3><a href="#">Exciting Updates from TMU</a></h3>
                                            </div>
                                            <div class="entry-meta mt-3">
                                                <ul>
                                                    <li><i class="uil uil-schedule"></i> January 15, 2025</li>
                                                    <li><a href="#"><i class="uil uil-user"></i> Admin</a></li>
                                                    <li><i class="uil uil-folder-open"></i> <a href="#">General News</a></li>
                                                </ul>
                                            </div>
                                            <div class="entry-content my-3">
                                                <p class="mb-0 text-justify">TMU hosted a series of exciting events last week, including workshops, cultural programs, and guest lectures. Stay tuned for more updates!</p>
                                            </div>
                                            <a href="#" class="tmu-btn btn-1 m-0 py-1 px-2">Read More</a>
                                        </div>
                                    </div>
                                </article>

                                <!-- Additional Filler Content -->
                                <article class="entry event col-12 col-md-6 col-lg-12 mb-4">
                                    <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                                        <div class="col-12 col-lg-4 col-xl-3 mb-md-0">
                                            <a href="#" class="entry-image mb-0 w-100 h-100">
                                                <img src="https://via.placeholder.com/300x200" alt="News Image" class="rounded-2 object-cover align-items-center">
                                                <div class="bg-overlay">
                                                    <div class="bg-overlay-content justify-content-start align-items-start w-100">
                                                        <div class="badge px-3 py-2 fs-12 rounded-pill">Events</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-12 col-lg-8 col-xl-9 ps-4 pt-1">
                                            <div class="entry-title nott">
                                                <h3><a href="#">Upcoming Seminar: Innovations in AI</a></h3>
                                            </div>
                                            <div class="entry-meta mt-3">
                                                <ul>
                                                    <li><i class="uil uil-schedule"></i> February 5, 2025</li>
                                                    <li><a href="#"><i class="uil uil-user"></i> Admin</a></li>
                                                    <li><i class="uil uil-folder-open"></i> <a href="#">Events</a></li>
                                                </ul>
                                            </div>
                                            <div class="entry-content my-3">
                                                <p class="mb-0 text-justify">Join us for a seminar on AI innovations, featuring top speakers from the tech industry. Reserve your spot now!</p>
                                            </div>
                                            <a href="#" class="tmu-btn btn-1 m-0 py-1 px-2">Read More</a>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <!-- Pagination -->
                            <div class="pagination">
                                <ul>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>


@endsection