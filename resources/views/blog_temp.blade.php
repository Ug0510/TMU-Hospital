@if ($allBlogs->count() > 0)
    <div class="container container-56789 my-4">
        <div class="row p-2 mb-3 snipcss0-0-0-1 snipcss-o1qON style-pe7mR" id="style-pe7mR">
            <div class="fw-bolder fs-5 snipcss0-1-1-2 pt-2 text-center text-sm-start ">All Blogs</div>
            <div class="row justify-content-center">
                @foreach ($allBlogs->take(4) as $item)
                <div class="col-sm-6 col-md-4 col-lg-3 col-xs-12 my-3 px-2 text-justify-centre mx-auto ">
                    <div id="blog_box" class="shadow bg-white overflow-hidden rounded-box p-0 snipcss0-3-4-5">
                        <a href="{{ url('blog/' . $item->n_slug) }}" class="text-decoration-none text-reset">
                            <div class="text-justify-centre">
                                @if($item->monaco_image_path != 0 && $item->monaco_image_path != null)
                                <!-- Image fills the container when using monaco_image_path -->
                                <img src="{{ asset($item->monaco_image_path) }}" alt="{{ $item->post_title }}" />
                                @else
                                <!-- Background blur effect for post_path -->
                                <div class="image-container889">
                                    <div class="blurred-background" style="background-image: url('{{ asset($item->post_path) }}');"></div>
                                    <img src="{{ asset($item->post_path) }}" alt="{{ $item->post_title }}" />
                                </div>
                                @endif

                                <div class="blog-content">
                                    <div class="blog-title">{{ $item->post_title }}</div>
                                    <div class="blog-description">{{ Str::limit($item->post_description, 40) }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            @if ($allBlogs->count() > 4)
            <div class="text-center col-12 col-md-12 snipcss0-1-1-36 my-4">
                <a href="{{ route('blogs.active') }}" class="tmu-btn btn-1 px-3 py-2 fs-12"> View All </a>
            </div>
            @endif
        </div>
    </div>
    @endif



    {{-- Loop for each category in groupedBlogs --}}
    @php
    $category_slug = '';
    @endphp

    @foreach ($groupedBlogs as $category => $blogs)
    @if ($blogs->isNotEmpty())
    @php
    // Retrieve the category slug from the first blog in the category group
    $category_slug = $blogs->first()->category_name->category_slug ?? '#';
    @endphp

    <div class="container container-56789 my-4">
        <div class="row p-2 mb-3 snipcss0-0-0-1 snipcss-o1qON style-pe7mR" id="style-pe7mR">
            <div class="fw-bolder fs-4 snipcss0-1-1-2 pt-2 text-center text-sm-start">{{ $category }}</div>
            <div class="row ">
                @foreach ($blogs->take(4) as $item)
                <div class="col-sm-6 col-md-4 col-lg-3 col-xs-12 my-3 px-2 text-justify-centre mx-auto ">
                    <div id="blog_box" class="shadow bg-white overflow-hidden rounded-box p-0 snipcss0-3-4-5">
                        <a href="{{ url('blog/' . $item->n_slug) }}" class="text-decoration-none text-reset">
                            <div class="blog-card text-justify-centre">

                                @if($item->monaco_image_path != 0 && $item->monaco_image_path != null)
                                <!-- Display image if monaco_image_path is available -->
                                <img src="{{ asset($item->monaco_image_path) }}" alt="{{ $item->post_title }}" />
                                @else
                                <!-- Display background blur effect if monaco_image_path is not available -->
                                <div class="image-container889">
                                    <div class="blurred-background" style="background-image: url('{{ asset($item->post_path) }}');"></div>
                                    <img src="{{ asset($item->post_path) }}" alt="{{ $item->post_title }}" />
                                </div>
                                @endif

                                <div class="blog-content">
                                    <div class="blog-title">{{ Str::limit($item->post_title, 38) }}</div>
                                    <div class="blog-description">{{ Str::limit($item->post_description, 40) }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            @if ($blogs->count() > 4)
            <div class="text-center col-12 col-md-12 snipcss0-1-1-36 my-4">
                <a href="{{ url($category_slug) }}" class="tmu-btn btn-1 px-3 py-2 fs-12"> View All </a>
            </div>
            @endif
        </div>
    </div>
    @endif
    @endforeach







    <div class="row g-4 d-none d-md-flex">
        @foreach($recentPosts as $post)
        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
            <a href="{{ url('blog/'.$post->n_slug) }}" class="text-decoration-none">
                <div class="card h-100" style="background: transparent; box-shadow: none; border: none; overflow: hidden; border-radius: 20px;">
                    <!-- Blog Image -->
                    <div class="position-relative ">
                        <img src="{{ asset($post->monaco_image_path) }}" class="card-img-top" alt="Blog Image"
                            style="width: 100%; height: auto; object-fit: cover; border-radius: 20px;">
                    </div>

                    <!-- Blog Content -->
                    <div class="card-body text-center">
                        <!-- Post Date and Category -->
                        <small class="text-muted d-block mb-1">
                            {{ $post->posted_at->format('M j') }} | {{ $post->category ?? 'Uncategorized' }}
                        </small>

                        <!-- Post Title -->
                        <h6 class="card-title mb-0" style="font-size: 1rem;">
                            {{ Str::limit($post->post_title, 50) }}
                        </h6>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>