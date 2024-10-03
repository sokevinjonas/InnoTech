@extends('public.layouts.app')

@section('content')
    <section class="wrapper bg-gray">
        <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
            <div class="row">
                <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                    <h1 class="display-1 mb-3">Profil Utilisateur</h1>
                    <p class="lead px-lg-5 px-xxl-8">Gérez vos informations personnelles et vos préférences.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12">
                <!-- Sidebar -->
                @include('public.profile.sidebar')
                <!-- Contenu principal -->
                <div class="col-lg-8">
                    @yield('profile-content')
                </div>
            </div>
        </div>
    </section>
@endsection
