@extends('public.layouts.app')

@section('content')
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-light-600 text-white"
        data-image-src="{{ asset('assets/customer/img/photos/bg18.png') }}">
        <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-1 mb-3">Connexion</h1>
                    <nav class="d-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Connexion</li>
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
    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col-lg-7 col-xl-6 col-xxl-5 mx-auto mt-n20">
                    <div class="card">
                        <div class="card-body p-11 text-center">
                            <h2 class="mb-3 text-start">Bienvenue</h2>
                            <p class="lead mb-6 text-start">
                                Veuillez entrer votre login (email ou pseudo) et
                                votre mot de passe pour vous connecter.
                            </p>
                            <form class="text-start mb-3" action="{{ route('public.login') }}" method="POST">
                                @csrf
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control @error('login') is-invalid @enderror"
                                        placeholder="Nom d'utilisateur ou Email" id="login" name="login"
                                        value="{{ old('login') }}">
                                    <label for="login">Email</label>
                                    @error('login')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-floating password-field mb-4">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Mot de passe" id="loginPassword" name="password">
                                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                    <label for="loginPassword">Mot de passe</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2">Se
                                    connecter</button>
                            </form>
                            <!-- /form -->
                            <p class="mb-1"><a href="#" class="hover">Mot de passe oublié ?</a></p>
                            <p class="mb-0">Vous n'avez pas de compte ? <a href="{{ route('public.register') }}"
                                    class="hover">Inscrivez-vous</a></p>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
