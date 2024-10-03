        <header class="wrapper bg-soft-primary">
            <nav class="navbar navbar-expand-lg center-nav navbar-light navbar-bg-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="index.html" class="link-dark fw-bold display-6">InnoTech</a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <h3 class="text-white fs-30 mb-0">InnoTech</h3>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Fermer"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a @class([
                                        'nav-link',
                                        'active' => Route::currentRouteNamed('public.pages.home'),
                                    ]) href="{{ route('public.pages.home') }}">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a @class([
                                        'nav-link',
                                        'active' => Route::currentRouteNamed('public.pages.about'),
                                    ]) href="{{ route('public.pages.about') }}">À
                                        propos</a>
                                </li>
                                <li class="nav-item">
                                    <a @class([
                                        'nav-link',
                                        'active' => Route::currentRouteNamed('public.blog.index'),
                                    ]) href="{{ route('public.blog.index') }}">Articles</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown">Catégories</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="category-posts.html">Catégorie 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="category-posts.html">Catégorie 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a @class([
                                        'nav-link',
                                        'active' => Route::currentRouteNamed('public.pages.contact'),
                                    ])
                                        href="{{ route('public.pages.contact') }}">Contact</a>
                                </li>
                                <!-- User authentication example -->
                                @if (auth()->check())
                                    <li class="nav-item dropdown d-block d-md-none">
                                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                            href="#">Compte</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="#">
                                                    <i class="uil uil-user"></i>
                                                    Profil
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item" href="#"
                                                    onclick="logout(event, '{{ route('public.logout') }}', '{{ csrf_token() }}')">
                                                    <i class="uil uil-power"></i>
                                                    Déconnexion
                                                </a>

                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    <li class="nav-item d-block d-md-none d-flex mt-5">
                                        <a href="{{ route('public.register') }}"
                                            class="btn btn-sm btn-primary rounded-pill display-6">
                                            S'inscrire
                                        </a>
                                        <a href="{{ route('public.login') }}"
                                            class="btn btn-sm btn-outline-primary rounded-pill display-6 ms-2">Connexion</a>
                                    </li>
                                @endif
                            </ul>
                            <div class="offcanvas-footer d-lg-none">
                                <div>
                                    <a href="mailto:example@example.com"
                                        class="link-inverse">example@example.com</a><br />
                                    +33 123 456 789<br />
                                    <nav class="nav social social-white mt-4">
                                        <a href="#"><i class="uil uil-twitter"></i></a>
                                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                                        <a href="#"><i class="uil uil-instagram"></i></a>
                                        <a href="#"><i class="uil uil-youtube"></i></a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            @if (auth()->check())
                                <li class="nav-item d-none d-md-block dropdown">
                                    <img class="avatar w-10 dropdown-toggle" data-bs-toggle="dropdown"
                                        src="{{ 'https://dummyimage.com/50x50/ced4da/6c757d.jpg' }}" alt="Avatar" />
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="">
                                                <i class="uil uil-user"></i>
                                                Profil
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="dropdown-item" href="#"
                                                onclick="logout(event, '{{ route('public.logout') }}', '{{ csrf_token() }}')">
                                                <i class="uil uil-power"></i>
                                                Déconnexion
                                            </a>

                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item d-none d-md-block">
                                    <a href="{{ route('public.register') }}"
                                        class="btn btn-sm btn-primary rounded-pill">
                                        S'inscrire
                                    </a>
                                </li>
                                <li class="nav-item d-none d-md-block">
                                    <a href="{{ route('public.login') }}"
                                        class="btn btn-sm btn-outline-primary rounded-pill">Connexion</a>
                                </li>
                            @endif
                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
