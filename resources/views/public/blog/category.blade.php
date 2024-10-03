@extends('public.layouts.app')

@section('content')
    <section class="section-frame overflow-hidden">
        <div class="wrapper bg-soft-primary">
            <div class="container py-12 py-md-16 text-center">
                <div class="row">
                    <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                        <h1 class="display-1 mb-3">Actualités InnoTech</h1>
                        <p class="lead px-lg-5 px-xxl-8 mb-1">Bienvenue sur notre blog ! Découvrez les derniers articles et
                            actualités de TechFacile, où nous partageons des conseils pratiques et des astuces pour vous
                            aider à naviguer dans le monde de la technologie.</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.wrapper -->
    </section>

    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12">
                <div class="col-lg-8">
                    <!-- Posts List -->
                    <div class="blog grid grid-view">
                        <div class="row isotope gx-md-8 gy-8 mb-8">
                            <article class="item post col-md-6">
                                <div class="card">
                                    <figure class="card-img-top overlay overlay-1 hover-scale">
                                        <a href="post-show.html">
                                            <img src="{{ asset('assets/customer/img/photos/b4.jpg') }}" alt="" />
                                        </a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="category-posts.html" class="hover" rel="category">Category
                                                    Name</a>
                                            </div>
                                            <h2 class="post-title h3 mt-1 mb-3">
                                                <a class="link-dark" href="post-show.html">Post Title</a>
                                            </h2>
                                        </div>
                                        <div class="post-content">
                                            <p>Post Description</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <ul class="post-meta d-flex mb-0">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Published
                                                    Date</span></li>
                                            <li class="post-comments"><a href="post-show.html#comments"><i
                                                        class="uil uil-comment"></i>Comments
                                                    Count</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <article class="item post col-md-6">
                                <div class="card">
                                    <figure class="card-img-top overlay overlay-1 hover-scale">
                                        <a href="post-show.html">
                                            <img src="{{ asset('assets/customer/img/photos/b3.jpg') }}" alt="" />
                                        </a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="category-posts.html" class="hover" rel="category">Category
                                                    Name</a>
                                            </div>
                                            <h2 class="post-title h3 mt-1 mb-3">
                                                <a class="link-dark" href="post-show.html">Post Title</a>
                                            </h2>
                                        </div>
                                        <div class="post-content">
                                            <p>Post Description</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <ul class="post-meta d-flex mb-0">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Published
                                                    Date</span></li>
                                            <li class="post-comments"><a href="post-show.html#comments"><i
                                                        class="uil uil-comment"></i>Comments
                                                    Count</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <article class="item post col-md-6">
                                <article class="item post col-md-6"></article>
                                <div class="card">
                                    <figure class="card-img-top overlay overlay-1 hover-scale">
                                        <a href="post-show.html">
                                            <img src="{{ asset('assets/customer/img/photos/b2.jpg') }}" alt="" />
                                        </a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="category-posts.html" class="hover" rel="category">Category
                                                    Name</a>
                                            </div>
                                            <h2 class="post-title h3 mt-1 mb-3">
                                                <a class="link-dark" href="post-show.html">Post Title</a>
                                            </h2>
                                        </div>
                                        <div class="post-content">
                                            <p>Post Description</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <ul class="post-meta d-flex mb-0">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Published
                                                    Date</span></li>
                                            <li class="post-comments"><a href="post-show.html#comments"><i
                                                        class="uil uil-comment"></i>Comments
                                                    Count</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <article class="item post col-md-6">
                                <article class="item post col-md-6"></article>
                                <div class="card">
                                    <figure class="card-img-top overlay overlay-1 hover-scale">
                                        <a href="post-show.html">
                                            <img src="{{ asset('assets/customer/img/photos/b1.jpg') }}" alt="" />
                                        </a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                                <a href="category-posts.html" class="hover" rel="category">Category
                                                    Name</a>
                                            </div>
                                            <h2 class="post-title h3 mt-1 mb-3">
                                                <a class="link-dark" href="post-show.html">Post Title</a>
                                            </h2>
                                        </div>
                                        <div class="post-content">
                                            <p>Post Description</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <ul class="post-meta d-flex mb-0">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>Published
                                                    Date</span></li>
                                            <li class="post-comments"><a href="post-show.html#comments"><i
                                                        class="uil uil-comment"></i>Comments
                                                    Count</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Pagination -->
                        <nav class="d-flex" aria-label="pagination">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <!-- No Posts Message -->
                        <!-- <section class="py-5 text-center">
                                  <div class="container px-5">
                                    <div class="row gx-5 justify-content-center">
                                      <div class="col-lg-8 col-xl-6">
                                        <p class="display-6 fw-bold mb-2">Aucun article pour l'instant !</p>
                                      </div>
                                    </div>
                                  </div>
                                </section> -->
                    </div>

                </div>
                <!-- Sidebar -->
                @include('public.blog.sidebar')
            </div>
    </section>
@endsection
