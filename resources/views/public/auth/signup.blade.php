@extends('public.layouts.app')

@section('content')
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-light-600 text-white"
        data-image-src="{{ asset('assets/customer/img/photos/bg18.png') }}">
        <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-1 mb-3">Inscription</h1>
                    <nav class="d-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('public.pages.home') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Inscription</li>
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
                            <h2 class="mb-3 text-start">Inscrivez-vous à {{ config('app.name') }}</h2>
                            <p class="lead mb-6 text-start">L'inscription prend moins d'une minute.</p>
                            <form class="text-start mb-3" action="{{ route('public.register') }}" method="POST">
                                @csrf
                                {{--
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif --}}

                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Nom" id="name" name="name" value="{{ old('name') }}">
                                    <label for="name">Nom</label>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Email" id="email" name="email" value="{{ old('email') }}">
                                    <label for="email">Email</label>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-floating password-field mb-4">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Mot de passe" id="loginPassword" name="password">
                                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                    <label for="loginPassword">Mot de passe</label>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-floating password-field mb-4">
                                    <input type="password"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        placeholder="Confirmer le mot de passe" id="loginPasswordConfirm"
                                        name="password_confirmation">
                                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                    <label for="loginPasswordConfirm">Confirmer le mot de passe</label>
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit"
                                    class="btn btn-primary rounded-pill btn-login w-100 mb-2">S'inscrire</button>
                            </form>
                            <!-- /form -->
                            <p class="mb-0">Vous avez déjà un compte ? <a href="{{ route('public.login') }}"
                                    class="hover">Se connecter</a></p>
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
@endsection
