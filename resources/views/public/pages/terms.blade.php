@extends('public.layouts.app')

@section('content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                    <h1 class="display-1 mb-3">Conditions Générales</h1>
                    <nav class="d-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('public.pages.home') }}">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Conditions Générales</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row gx-0">
            <aside class="col-xl-3 sidebar sticky-sidebar mt-md-0 py-16 d-none d-xl-block">
                <div class="widget">
                    <nav id="sidebar-nav">
                        <ul class="list-unstyled text-reset">
                            <li><a class="nav-link scroll active" href="#conditions-generales">1. Conditions Générales</a>
                            </li>
                            <li><a class="nav-link scroll" href="#politique-de-confidentialite">2. Politique de
                                    Confidentialité</a></li>
                            <li><a class="nav-link scroll" href="#politique-utilisateur">3. Politique Utilisateur</a></li>
                            <li><a class="nav-link scroll" href="#droits-d-auteur">4. Droits d'Auteur</a></li>
                            <li><a class="nav-link scroll" href="#cookies">5. Cookies</a></li>
                            <li><a class="nav-link scroll" href="#compte-et-facturation">6. Compte et Facturation</a></li>
                        </ul>
                    </nav>
                </div>
            </aside>

            <div class="col-xl-8">
                <section id="conditions-generales" class="wrapper pt-16">
                    <div class="card">
                        <div class="card-body p-10">
                            <h2 class="mb-3">1. Conditions Générales</h2>
                            <p>Bienvenue sur TechFacile. En accédant à ce site, vous acceptez les termes et conditions
                                suivants. Veuillez les lire attentivement.</p>
                            <p>Les informations fournies sur notre site sont à titre informatif seulement. Nous nous
                                réservons le droit de modifier ou de mettre à jour ces informations à tout moment sans
                                préavis.</p>
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Utilisation du site est soumise à
                                        l'acceptation des conditions générales.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Nous nous réservons le droit de
                                        suspendre ou de résilier votre accès au site pour non-respect des conditions.</span>
                                </li>
                                <li><span><i class="uil uil-check"></i></span><span>Pour toute question concernant nos
                                        conditions, veuillez nous contacter.</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="politique-de-confidentialite" class="wrapper pt-16">
                    <div class="card">
                        <div class="card-body p-10">
                            <h2 class="mb-3">2. Politique de Confidentialité</h2>
                            <p>Nous nous engageons à protéger votre vie privée. Cette politique de confidentialité explique
                                comment nous collectons, utilisons et protégeons vos informations personnelles.</p>
                            <p>Nous collectons des informations telles que vos coordonnées et vos préférences de
                                communication. Ces informations sont utilisées pour améliorer nos services et vous fournir
                                des informations pertinentes.</p>
                            <ul class="icon-list bullet-bg bullet-soft-primary">
                                <li><span><i class="uil uil-check"></i></span><span>Nous utilisons des mesures de sécurité
                                        pour protéger vos informations.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Nous ne partageons pas vos informations
                                        avec des tiers sans votre consentement.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Vous avez le droit d'accéder, de
                                        corriger ou de supprimer vos informations personnelles.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Pour plus d'informations, veuillez
                                        consulter notre politique de confidentialité complète.</span></li>
                            </ul>
                            <p class="mb-0">Pour toute question concernant notre politique de confidentialité, veuillez
                                nous contacter.</p>
                        </div>
                    </div>
                </section>

                <section id="politique-utilisateur" class="wrapper pt-16">
                    <div class="card">
                        <div class="card-body p-10">
                            <h2 class="mb-3">3. Politique Utilisateur</h2>
                            <p>La politique utilisateur définit les règles et les responsabilités des utilisateurs de notre
                                site. Veuillez lire cette section attentivement pour comprendre vos obligations.</p>
                            <p>Vous êtes responsable de la confidentialité de vos informations de compte et de toutes les
                                activités qui se produisent sous votre compte.</p>
                            <p>Nous nous réservons le droit de suspendre ou de supprimer votre compte si nous jugeons que
                                vous avez violé nos politiques.</p>
                            <ul class="icon-list bullet-bg bullet-soft-primary">
                                <li><span><i class="uil uil-check"></i></span><span>Utilisez le site de manière responsable
                                        et respectueuse.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Ne partagez pas vos informations de
                                        connexion avec d'autres personnes.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Signalez toute utilisation non autorisée
                                        de votre compte.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Respectez les lois en vigueur lors de
                                        l'utilisation de notre site.</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="droits-d-auteur" class="wrapper pt-16">
                    <div class="card">
                        <div class="card-body p-10">
                            <h2 class="mb-3">4. Droits d'Auteur</h2>
                            <p>Tous les contenus présents sur ce site, y compris les textes, images, logos, et autres
                                matériaux sont protégés par des droits d'auteur. Vous ne pouvez pas utiliser ces contenus
                                sans notre permission.</p>
                            <p>Vous pouvez consulter les contenus de notre site pour un usage personnel et non commercial
                                uniquement. Toute autre utilisation nécessite une autorisation préalable de notre part.</p>
                            <ul class="icon-list bullet-bg bullet-soft-primary">
                                <li><span><i class="uil uil-check"></i></span><span>Les droits d'auteur appartiennent
                                        exclusivement à TechFacile.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Vous ne pouvez pas reproduire,
                                        distribuer ou afficher publiquement nos contenus sans autorisation.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Pour obtenir une autorisation, veuillez
                                        nous contacter directement.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>En cas de violation des droits d'auteur,
                                        nous nous réservons le droit de prendre des mesures légales.</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="cookies" class="wrapper pt-16">
                    <div class="card">
                        <div class="card-body p-10">
                            <h2 class="mb-3">5. Cookies</h2>
                            <p>Nous utilisons des cookies pour améliorer votre expérience sur notre site. Les cookies sont
                                des fichiers texte qui sont stockés sur votre appareil lorsque vous visitez notre site.</p>
                            <p>Les cookies nous aident à comprendre comment vous utilisez notre site, à personnaliser votre
                                expérience et à vous offrir des fonctionnalités pertinentes.</p>
                            <ul class="icon-list bullet-bg bullet-soft-primary">
                                <li><span><i class="uil uil-check"></i></span><span>Les cookies nous aident à analyser le
                                        trafic du site.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Vous pouvez désactiver les cookies dans
                                        les paramètres de votre navigateur.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>La désactivation des cookies peut
                                        affecter certaines fonctionnalités du site.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Pour plus d'informations sur les
                                        cookies, veuillez consulter notre politique sur les cookies.</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="compte-et-facturation" class="wrapper pt-16">
                    <div class="card">
                        <div class="card-body p-10">
                            <h2 class="mb-3">6. Compte et Facturation</h2>
                            <p>Vous êtes responsable de fournir des informations de facturation exactes et de maintenir la
                                confidentialité de vos informations de compte.</p>
                            <p>Les paiements pour nos services sont effectués sur une base mensuelle ou annuelle, selon le
                                plan que vous choisissez.</p>
                            <ul class="icon-list bullet-bg bullet-soft-primary">
                                <li><span><i class="uil uil-check"></i></span><span>Les informations de facturation doivent
                                        être mises à jour en cas de changement.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Nous ne garantissons pas de
                                        remboursement pour les périodes déjà utilisées.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Pour toute question de facturation,
                                        veuillez nous contacter.</span></li>
                                <li><span><i class="uil uil-check"></i></span><span>Nous nous réservons le droit de
                                        suspendre votre accès en cas de paiement non effectué.</span></li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
