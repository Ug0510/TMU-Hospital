@extends('layout.app')

@section('title', 'News')

@section('content')
<!-- Page Title -->
<div class="page-title-area page-title-four">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="page-title-item">
                <h2>Our Latest News</h2>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <i class="icofont-simple-right"></i>
                    </li>
                    <li>News</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title -->

<!-- Blog -->
<style>
    .news-item {
        display: flex;
        align-items: center;
        /* Center content vertically */
        justify-content: space-between;
        padding: 1rem;
        margin-bottom: 1.5rem;
        background-color: #fff;
        border-radius: 8px;
        transition: background-color 0.3s, box-shadow 0.3s;
        cursor: pointer;
    }

    .news-item:hover {
        background-color: #f0f0f0;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .news-date {
        font-size: 0.85rem;
        color: #666;
        margin-bottom: 0.5rem;
    }

    .news-image {
        width: 100%;
        height: auto;
        border-radius: 8px;
        object-fit: cover;
    }

    .news-title {
        font-size: 1.2rem;
        color: #333;
        margin: 0 0 0.5rem;
    }

    .news-description {
        font-size: 0.9rem;
        color: #666;
    }

    .news-arrow {
        display: flex;
        justify-content: center;
        align-items: center;
        /* Vertically and horizontally center the arrow */
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background-color: #fff;
        border: 2px solid #007BFF;
        position: relative;
        overflow: hidden;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .news-arrow i {
        color: #007BFF;
        font-size: 1.2rem;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        transition: opacity 0.3s ease, transform 0.3s ease;
        z-index: 1;
    }

    .news-item:hover .news-arrow {
        background-color: #007BFF;
        border-color: #007BFF;
    }

    .news-item:hover .news-arrow i {
        transform: translateX(-150%);
        opacity: 0;
    }

    .news-item:hover .news-arrow::after {
        content: '\2192';
        /* Unicode for → */
        color: #fff;
        font-size: 1.2rem;
        position: absolute;
        left: -50%;
        transform: translateX(-150%);
        animation: slide-in 0.3s forwards;
        z-index: 2;
    }

    @keyframes slide-in {
        to {
            transform: translateX(110%);
        }
    }

    .container p {
        padding: 0px;
        font-size: 16px;
        text-align: justify;
    }
</style>

<div class="container news-container">
    <div class="row gy-4">
        <!-- Blog Item 1 -->
        <div class="col-12">
            <div class="news-item d-flex flex-column flex-md-row align-items-md-center">
                <div class=" col-lg-2 news-date-image d-flex align-items-center mb-3 mb-md-0 me-md-3">
                    <img src="https://picsum.photos/250/200?random=6" alt="Blog Image" class="news-image">
                </div>
                <div class="col-lg-7 news-content flex-grow-1">
                    <p class="news-date">18. September 2024</p>
                    <p class="news-title">USZ und Varian unterschreiben Innovationsvertrag</p>
                    <p class="news-description">Details about the innovation agreement signed by USZ and Varian.</p>
                </div>
                <div class="col-lg-3 news-arrow">
                    <i>&#8594;</i>
                </div>
            </div>
        </div>
        <!-- Blog Item 2 -->
        <div class="col-12">
            <div class="news-item d-flex flex-column flex-md-row align-items-md-center">
                <div class="news-date-image d-flex align-items-center mb-3 mb-md-0 me-md-3">
                    <img src="https://picsum.photos/100/100?random=6" alt="Blog Image" class="news-image">
                </div>
                <div class="news-content flex-grow-1">
                    <p class="news-date">11. September 2024</p>
                    <p class="news-title">USZ: Qualitätsbericht 2023 jetzt online</p>
                    <p class="news-description">The 2023 quality report from USZ is now available online.</p>
                </div>
                <div class="news-arrow">
                    <i>&#8594;</i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->

@endsection