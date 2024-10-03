@extends('public.layouts.app')

@section('content')
    <main>
        <section class="wrapper bg-light">
            <div class="container-card">
                <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-light-500 mt-2 mb-5"
                    data-image-src="{{ asset('assets/customer/img/photos/bg22.png') }}">
                    <div class="card-body py-14 px-0">
                        <div class="container">
                            <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center text-center text-lg-start">
                                <div class="col-lg-6">
                                    <h1 class="display-2 mb-4 me-xl-5 me-xxl-0">Bienvenue sur <span
                                            class="text-gradient gradient-7">InnoTech</span></h1>
                                    <p class="lead fs-23 lh-sm mb-7 pe-xxl-15">Nous rendons la technologie accessible à
                                        tous, débutants
                                        comme
                                        experts. Découvrez les outils et connaissances pour exceller dans le numérique.</p>
                                    <a href="blog-index.html" class="btn btn-lg btn-gradient gradient-7 rounded">Explorez
                                        maintenant</a>
                                </div>
                                <div class="col-lg-6">
                                    <img class="img-fluid mb-n18"
                                        src="{{ asset('assets/customer/img/illustrations/3d6.png') }}"
                                        srcset="{{ asset('assets/customer/img/illustrations/3d6@2x.png') }} 2x"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="row gx-lg-8 gx-xl-12">
                    <div class="col-lg-8">
                        <div class="container">
                            <!-- Trending Posts Section -->
                            <section id="trending-post">
                                <section class="wrapper bg-soft-primary mb-5">
                                    <div class="container py-5 py-md-7">
                                        <h2 class="h6 text-center mb-0">Tendances</h2>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div class="divider text-white mx-n2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70">
                                                <path fill="currentColor"
                                                    d="M1440,70H0V45.16a5762.49,5762.49,0,0,1,1440,0Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </section>
                                <div class="row row-cols-sm-2 row-cols-1 g-3">
                                    <div class="col">
                                        <figure class="overlay overlay-2 hover-scale color rounded">
                                            <a href="post-show.html">
                                                <img src="{{ asset('assets/customer/img/photos/b4.jpg') }}"
                                                    alt="Post Title" />
                                            </a>
                                            <figcaption>
                                                <h5 class="from-top mb-1">Post Title</h5>
                                                <p class="from-bottom text-start">Post description</p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="overlay overlay-2 hover-scale color rounded">
                                            <a href="post-show.html">
                                                <img src="{{ asset('assets/customer/img/photos/b3.jpg') }}"
                                                    alt="Post Title" />
                                            </a>
                                            <figcaption>
                                                <h5 class="from-top mb-1">Post Title</h5>
                                                <p class="from-bottom text-start">Post description</p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="overlay overlay-2 hover-scale color rounded">
                                            <a href="post-show.html">
                                                <img src="{{ asset('assets/customer/img/photos/b2.jpg') }}"
                                                    alt="Post Title" />
                                            </a>
                                            <figcaption>
                                                <h5 class="from-top mb-1">Post Title</h5>
                                                <p class="from-bottom text-start">Post description</p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="overlay overlay-2 hover-scale color rounded">
                                            <a href="post-show.html">
                                                <img src="{{ asset('assets/customer/img/photos/b1.jpg') }}"
                                                    alt="Post Title" />
                                            </a>
                                            <figcaption>
                                                <h5 class="from-top mb-1">Post Title</h5>
                                                <p class="from-bottom text-start">Post description</p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </section>

                            <!-- Top Categories Section -->
                            <section id="top-categories" class="pt-5">
                                <section class="wrapper bg-soft-primary mb-5">
                                    <div class="container py-5 py-md-7">
                                        <h2 class="h6 text-center mb-0">Top des categories</h2>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div class="divider text-white mx-n2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70">
                                                <path fill="currentColor"
                                                    d="M1440,70H0V45.16a5762.49,5762.49,0,0,1,1440,0Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </section>
                                <div class="swiper-container mb-10" data-margin="30" data-nav="true" data-dots="true"
                                    data-items-xl="3" data-items-md="2" data-items-xs="1">
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <figure class="overlay overlay-1 hover-scale rounded mb-0">
                                                    <a href="category-posts.html">
                                                        <img src="{{ asset('assets/global/img/categories_placehoder.jpeg') }}"
                                                            alt="Category Name" />
                                                        <span class="bg"></span>
                                                    </a>
                                                    <figcaption>
                                                        <h5 class="from-top mb-1">Category Name</h5>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="overlay overlay-1 hover-scale rounded mb-0">
                                                    <a href="category-posts.html">
                                                        <img src="{{ asset('assets/global/img/categories_placehoder.jpeg') }}"
                                                            alt="Category Name" />
                                                        <span class="bg"></span>
                                                    </a>
                                                    <figcaption>
                                                        <h5 class="from-top mb-1">Category Name</h5>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="overlay overlay-1 hover-scale rounded mb-0">
                                                    <a href="category-posts.html">
                                                        <img src="{{ asset('assets/global/img/categories_placehoder.jpeg') }}"
                                                            alt="Category Name" />
                                                        <span class="bg"></span>
                                                    </a>
                                                    <figcaption>
                                                        <h5 class="from-top mb-1">Category Name</h5>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="overlay overlay-1 hover-scale rounded mb-0">
                                                    <a href="category-posts.html">
                                                        <img src="{{ asset('assets/global/img/categories_placehoder.jpeg') }}"
                                                            alt="Category Name" />
                                                        <span class="bg"></span>
                                                    </a>
                                                    <figcaption>
                                                        <h5 class="from-top mb-1">Category Name</h5>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Recent Posts Section -->
                            <section id="last-posts" class="pt-5">
                                <section class="wrapper bg-soft-primary mb-5">
                                    <div class="container py-5 py-md-7">
                                        <h2 class="h6 text-center mb-0">Articles Récents</h2>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div class="divider text-white mx-n2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70">
                                                <path fill="currentColor"
                                                    d="M1440,70H0V45.16a5762.49,5762.49,0,0,1,1440,0Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </section>
                                <div class="blog grid grid-view">
                                    <div class="row isotope gx-md-8 gy-8 mb-8">
                                        <article class="item post col-md-6">
                                            <div class="card">
                                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                                    <a href="post-show.html">
                                                        <img src="{{ asset('assets/customer/img/photos/bs1.jpg') }}"
                                                            alt="Post Title" />
                                                    </a>
                                                    <figcaption>
                                                        <h5 class="from-top mb-0">Read More</h5>
                                                    </figcaption>
                                                </figure>
                                                <div class="card-body">
                                                    <div class="post-header">
                                                        <div class="post-show text-line">
                                                            <a href="category-posts.html" class="hover"
                                                                rel="category">Category Name</a>
                                                        </div>
                                                        <h2 class="post-title h3 mt-1 mb-3">
                                                            <a class="link-dark" href="post-show.html">Post Title</a>
                                                        </h2>
                                                    </div>
                                                    <div class="post-content">
                                                        <p>Post description</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <ul class="post-meta d-flex mb-0">
                                                        <li class="post-date"><i
                                                                class="uil uil-calendar-alt"></i><span>Published
                                                                Date</span></li>
                                                        <li class="post-comments"><a href="post-show.html#comments"><i
                                                                    class="uil uil-comment"></i>
                                                                Comments Count</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="item post col-md-6">
                                            <div class="card">
                                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                                    <a href="post-show.html">
                                                        <img src="{{ asset('assets/customer/img/photos/bs2.jpg') }}"
                                                            alt="Post Title" />
                                                    </a>
                                                    <figcaption>
                                                        <h5 class="from-top mb-0">Read More</h5>
                                                    </figcaption>
                                                </figure>
                                                <div class="card-body">
                                                    <div class="post-header">
                                                        <div class="post-show text-line">
                                                            <a href="category-posts.html" class="hover"
                                                                rel="category">Category Name</a>
                                                        </div>
                                                        <h2 class="post-title h3 mt-1 mb-3">
                                                            <a class="link-dark" href="post-show.html">Post Title</a>
                                                        </h2>
                                                    </div>
                                                    <div class="post-content">
                                                        <p>Post description</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <ul class="post-meta d-flex mb-0">
                                                        <li class="post-date"><i
                                                                class="uil uil-calendar-alt"></i><span>Published
                                                                Date</span></li>
                                                        <li class="post-comments"><a href="post-show.html#comments"><i
                                                                    class="uil uil-comment"></i>
                                                                Comments Count</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="item post col-md-6">
                                            <div class="card">
                                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                                    <a href="post-show.html">
                                                        <img src="{{ asset('assets/customer/img/photos/bs3.jpg') }}"
                                                            alt="Post Title" />
                                                    </a>
                                                    <figcaption>
                                                        <h5 class="from-top mb-0">Read More</h5>
                                                    </figcaption>
                                                </figure>
                                                <div class="card-body">
                                                    <div class="post-header">
                                                        <div class="post-show text-line">
                                                            <a href="category-posts.html" class="hover"
                                                                rel="category">Category Name</a>
                                                        </div>
                                                        <h2 class="post-title h3 mt-1 mb-3">
                                                            <a class="link-dark" href="post-show.html">Post Title</a>
                                                        </h2>
                                                    </div>
                                                    <div class="post-content">
                                                        <p>Post description</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <ul class="post-meta d-flex mb-0">
                                                        <li class="post-date"><i
                                                                class="uil uil-calendar-alt"></i><span>Published
                                                                Date</span></li>
                                                        <li class="post-comments"><a href="post-show.html#comments"><i
                                                                    class="uil uil-comment"></i>
                                                                Comments Count</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="item post col-md-6">
                                            <div class="card">
                                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                                    <a href="post-show.html">
                                                        <img src="{{ asset('assets/customer/img/photos/b1.jpg') }}"
                                                            alt="Post Title" />
                                                    </a>
                                                    <figcaption>
                                                        <h5 class="from-top mb-0">Read More</h5>
                                                    </figcaption>
                                                </figure>
                                                <div class="card-body">
                                                    <div class="post-header">
                                                        <div class="post-show text-line">
                                                            <a href="category-posts.html" class="hover"
                                                                rel="category">Category Name</a>
                                                        </div>
                                                        <h2 class="post-title h3 mt-1 mb-3">
                                                            <a class="link-dark" href="post-show.html">Post Title</a>
                                                        </h2>
                                                    </div>
                                                    <div class="post-content">
                                                        <p>Post description</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <ul class="post-meta d-flex mb-0">
                                                        <li class="post-date"><i
                                                                class="uil uil-calendar-alt"></i><span>Published
                                                                Date</span></li>
                                                        <li class="post-comments"><a href="post-show.html#comments"><i
                                                                    class="uil uil-comment"></i>
                                                                Comments Count</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <aside class="col-lg-4 sidebar mt-8 mt-lg-6">
                        <div class="widget">
                            <h4 class="widget-title mb-3">À Propos de Nous</h4>
                            <p>Chez InnoTech, nous simplifions la technologie pour la rendre accessible à tous. Que vous
                                soyez
                                débutant
                                ou expert, nous vous offrons les outils et les connaissances pour réussir dans le monde
                                numérique.</p>
                            <nav class="nav social">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </nav>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title mb-3">Articles</h4>
                            <ul class="image-list">
                                <li>
                                    <figure class="rounded">
                                        <a href="post-show.html">
                                            <img src="{{ asset('assets/customer/img/photos/b3.jpg') }}"
                                                alt="Post Title" />
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h6 class="mb-2">
                                            <a class="link-dark" href="post-show.html">Post Title</a>
                                        </h6>
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i> <span>Published
                                                    Date</span></li>
                                            <li class="post-comments"><a href="post-show.html#comments"><i
                                                        class="uil uil-comment"></i>
                                                    Comments
                                                    Count</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <figure class="rounded">
                                        <a href="post-show.html">
                                            <img src="{{ asset('assets/customer/img/photos/b1.jpg') }}"
                                                alt="Post Title" />
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h6 class="mb-2">
                                            <a class="link-dark" href="post-show.html">Post Title</a>
                                        </h6>
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i> <span>Published
                                                    Date</span></li>
                                            <li class="post-comments"><a href="post-show.html#comments"><i
                                                        class="uil uil-comment"></i>
                                                    Comments
                                                    Count</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <figure class="rounded">
                                        <a href="post-show.html">
                                            <img src="{{ asset('assets/customer/img/photos/b2.jpg') }}"
                                                alt="Post Title" />
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h6 class="mb-2">
                                            <a class="link-dark" href="post-show.html">Post Title</a>
                                        </h6>
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i> <span>Published
                                                    Date</span></li>
                                            <li class="post-comments"><a href="post-show.html#comments"><i
                                                        class="uil uil-comment"></i>
                                                    Comments
                                                    Count</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <figure class="rounded">
                                        <a href="post-show.html">
                                            <img src="{{ asset('assets/customer/img/photos/b2.jpg') }}"
                                                alt="Post Title" />
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h6 class="mb-2">
                                            <a class="link-dark" href="post-show.html">Post Title</a>
                                        </h6>
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i> <span>Published
                                                    Date</span></li>
                                            <li class="post-comments"><a href="post-show.html#comments"><i
                                                        class="uil uil-comment"></i>
                                                    Comments
                                                    Count</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title mb-3">Categories</h4>
                            <ul class="unordered-list bullet-primary text-reset">
                                <li><a href="category-posts.html">Category Name (Count)</a></li>
                                <li><a href="category-posts.html">Category Name (Count)</a></li>
                                <li><a href="category-posts.html">Category Name (Count)</a></li>
                                <li><a href="category-posts.html">Category Name (Count)</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

    </main>
@endsection
