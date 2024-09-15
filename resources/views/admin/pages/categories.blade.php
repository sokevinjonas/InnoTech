@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Ajouter une nouvelle catégorie d'article</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.html">Accueil</a></li>
                <li class="breadcrumb-item">Categories Article</li>
                <li class="breadcrumb-item active">Liste</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">

        <div class="row mb-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-3">
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                            data-bs-target="#CreatePostCategoryModal">
                            Créer une Catégorie d'Article
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Liste des articles</h5>

                <!-- Table pour afficher les articles -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Catégorie 1</td>
                            <td>
                                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Description de la catégorie">Description</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#CreatePostCategoryModal"
                                    data-bs-action="/admin/post_categories/update/1" data-bs-name="Catégorie 1"
                                    data-bs-description="Description de la catégorie">Éditer</button>
                                <form action="/admin/post_categories/destroy/1" method="POST" style="display:inline;">
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- Fin de la table des articles -->
            </div>
        </div>
    </section>

    <!-- Modal Structure -->
    <div class="modal fade" id="CreatePostCategoryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="CreatePostCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="CreatePostCategoryModalLabel">Catégorie d'Article</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <form id="postCategoryForm" action="" method="POST">
                    <div class="modal-body">
                        <!-- Nom de la Catégorie -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom de la Catégorie</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Nom de la catégorie" required>
                        </div>

                        <!-- Description de la Catégorie -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"
                                placeholder="Description de la catégorie (facultatif)"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
