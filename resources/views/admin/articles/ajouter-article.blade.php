@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Ajouter un nouvel article</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                <li class="breadcrumb-item">Articles</li>
                <li class="breadcrumb-item active">Créer</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Créer un article</h5>

                        <!-- Affichage des messages d'erreur globaux -->
                        <div class="alert alert-danger" style="display: none;">
                            <ul>
                                <li>Example error message</li>
                            </ul>
                        </div>

                        <form action="/admin/posts/store" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="title" class="form-label">Titre</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label">Catégories</label>
                                <select class="form-control" id="category" name="category">
                                    <option disabled selected>Choissisez une categorie</option>
                                    <option value="1">Catégorie 1</option>
                                    <option value="2">Catégorie 2</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Statut après enregistrement</label>
                                <select class="form-control" id="status" name="status">
                                    <option disabled selected>Choissisez un statut</option>
                                    <option value="draft">Brouillon</option>
                                    <option value="published">Publié</option>
                                </select>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="comments_enabled"
                                    name="comments_enabled" checked>
                                <label class="form-check-label" for="comments_enabled">Autoriser les commentaires</label>
                            </div>

                            <div class="mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Contenu</h5>
                                        <textarea class="form-control" id="content" name="content" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Créer l'article</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
