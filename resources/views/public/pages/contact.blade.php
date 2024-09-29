@extends('public.layouts.app')

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
                    <h1 class="display-1 mb-3">Nous Contacter</h1>
                    <nav class="d-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('public.pages.home') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                    <!-- /nav -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end">
        <div class="container py-14 py-md-16">
            <div class="row gy-10 gx-lg-8 gx-xl-12 mb-16 align-items-center">
                <div class="col-lg-7 position-relative">
                    <div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1"
                        style="top: 0; left: -1.4rem; z-index: 0;"></div>
                    <div class="row gx-md-5 gy-5">
                        <div class="col-md-6">
                            <figure class="rounded mt-md-10 position-relative"><img
                                    src="{{ asset('assets/custom/img/photos/g5.jpg') }}"
                                    srcset="{{ asset('assets/custom/img/photos/g5@2x.jpg') }} 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                            <div class="row gx-md-5 gy-5">
                                <div class="col-md-12 order-md-2">
                                    <figure class="rounded"><img src="{{ asset('assets/custom/img/photos/g6.jpg') }}"
                                            srcset="{{ asset('assets/custom/img/photos/g6@2x.jpg') }} 2x" alt="">
                                    </figure>
                                </div>
                                <!--/column -->
                                <div class="col-md-10">
                                    <div class="card bg-pale-primary text-center counter-wrapper">
                                        <div class="card-body py-11">
                                            <h3 class="counter text-nowrap">5000+</h3>
                                            <p class="mb-0">Clients Satisfaits</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.card -->
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
                <div class="col-lg-5">
                    <h2 class="display-4 mb-8">Convaincu? Créons quelque chose de formidable ensemble.</h2>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Téléphone</h5>
                            <p>xx xx xx xx</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">E-mail</h5>
                            <p class="mb-0"><a href="mailto:example@ex.com" class="link-body">example@ex.com</a></p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    <h2 class="display-4 mb-3 text-center">Écrivez-nous un message</h2>
                    <p class="lead text-center mb-10">Remplissez le formulaire de contact et nous vous répondrons
                        rapidement.</p>
                    <form class="contact-form needs-validation" method="post" action="" novalidate>
                        <div class="messages"></div>
                        <div class="row gx-4">
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_name" type="text" name="name" class="form-control"
                                        placeholder="Prénom" required>
                                    <label for="form_name">Prénom *</label>
                                    <div class="valid-feedback"> C'est bon ! </div>
                                    <div class="invalid-feedback"> Veuillez entrer votre prénom. </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_lastname" type="text" name="surname" class="form-control"
                                        placeholder="Nom" required>
                                    <label for="form_lastname">Nom *</label>
                                    <div class="valid-feedback"> C'est bon ! </div>
                                    <div class="invalid-feedback"> Veuillez entrer votre nom. </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_email" type="email" name="email" class="form-control"
                                        placeholder="votre.email@exemple.com" required>
                                    <label for="form_email">E-mail *</label>
                                    <div class="valid-feedback"> C'est bon ! </div>
                                    <div class="invalid-feedback"> Veuillez fournir une adresse e-mail valide. </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-select-wrapper mb-4">
                                    <select class="form-select" id="form-select" name="department" required>
                                        <option selected disabled value="">Sélectionnez un département</option>
                                        <option value="Ventes">Ventes</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Support Client">Support Client</option>
                                    </select>
                                    <div class="valid-feedback"> C'est bon ! </div>
                                    <div class="invalid-feedback"> Veuillez sélectionner un département. </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-12">
                                <div class="form-floating mb-4">
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Votre message" style="height: 150px"
                                        required></textarea>
                                    <label for="form_message">Message *</label>
                                    <div class="valid-feedback"> C'est bon ! </div>
                                    <div class="invalid-feedback"> Veuillez entrer votre message. </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-12 text-center">
                                <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3"
                                    value="Envoyer le message">
                                <p class="text-muted"><strong>*</strong> Ces champs sont obligatoires.</p>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                    </form>
                    <!-- /form -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
