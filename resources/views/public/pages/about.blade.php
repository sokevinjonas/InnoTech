@extends('public.layouts.app')

@section('content')
    <section class="wrapper bg-gray">
        <div class="container pt-10 pt-md-14 text-center">
            <div class="row">
                <div class="col-xl-6 mx-auto">
                    <h1 class="display-1 mb-4">Bienvenue sur TechFacile</h1>
                    <p class="lead fs-lg mb-0">Un blog dédié aux passionnés de technologie.</p>
                </div>
            </div>
        </div>
        <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img
                src="{{ asset('assets/customer/img/photos/bg12.jpg') }}" alt="" /></figure>
    </section>

    <section class="wrapper bg-light angled upper-end lower-end">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                <div class="col-lg-6 position-relative order-lg-2">
                    <div class="overlap-grid overlap-grid-2">
                        <div class="item">
                            <figure class="rounded shadow"><img src="{{ asset('assets/customer/img/photos/about2.jpg') }}"
                                    srcset="{{ asset('assets/customer/img/photos/about2@2x.jpg') }} 2x" alt="">
                            </figure>
                        </div>
                        <div class="item">
                            <figure class="rounded shadow"><img src="{{ asset('assets/customer/img/photos/about3.jpg') }}"
                                    srcset="{{ asset('assets/customer/img/photos/about3@2x.jpg') }} 2x" alt="">
                            </figure>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('assets/customer/img/icons/lineal/megaphone.svg') }}"
                        class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                    <h2 class="display-4 mb-3">Qui sommes-nous ?</h2>
                    <p class="lead fs-lg">TechFacile est un blog qui explore les dernières tendances en matière de
                        technologie et d'innovation numérique.</p>
                    <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                        <li><span><i class="uil uil-check"></i></span><span>Des articles approfondis sur les sujets
                                IT.</span></li>
                        <li><span><i class="uil uil-check"></i></span><span>Conseils et tutoriels pour les passionnés de
                                tech.</span></li>
                        <li><span><i class="uil uil-check"></i></span><span>Analyse des dernières innovations
                                technologiques.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper bg-soft-primary">
        <div class="container pt-16 pb-14 pb-md-0">
            <div class="row gx-lg-8 gx-xl-0 align-items-center">
                <div class="col-md-7 col-lg-6 col-xl-6 col-xxl-5 offset-xl-1">
                    <h2 class="display-4 mb-4 px-lg-14">Notre approche en trois étapes</h2>
                    <div class="card me-lg-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                                            class="number">01</span></span>
                                </div>
                                <div>
                                    <h4 class="mb-1">Collecte d'idées</h4>
                                    <p class="mb-0">Nous commençons par rassembler des idées innovantes pour chaque
                                        projet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card ms-lg-13 mt-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                                            class="number">02</span></span>
                                </div>
                                <div>
                                    <h4 class="mb-1">Analyse des données</h4>
                                    <p class="mb-0">Nous analysons les données pour une compréhension approfondie.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mx-lg-6 mt-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                                            class="number">03</span></span>
                                </div>
                                <div>
                                    <h4 class="mb-1">Finalisation du produit</h4>
                                    <p class="mb-0">Nous finalisons nos produits avec soin et attention aux détails.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-lg-5 col-xl-4 offset-xl-1 d-none d-md-flex position-relative align-self-end">
                    <figure><img src="{{ asset('assets/customer/img/photos/co1.png') }}"
                            srcset="{{ asset('assets/customer/img/photos/co1@2x.png') }} 2x" alt=""></figure>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row mb-3">
                <div class="col-md-10 col-xl-9 col-xxl-7 mx-auto text-center">
                    <h2 class="display-4 mb-3 px-lg-14">Optez pour notre équipe professionnelle et gagnez du temps et de
                        l'argent.</h2>
                </div>
            </div>
        </div>
    </section>
@endsection
