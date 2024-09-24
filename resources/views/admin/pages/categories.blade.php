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

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Cette condition verifie si il ya un message de success stocké dans la session 'success'  --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

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
                <h5 class="card-title">
                    Liste des articles
                </h5>

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
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        title="{{ $category->description ?? 'Pas de description' }}">
                                        Description
                                    </button>
                                </td>
                                <td>
                                    {{-- <a href="{{ route('admin.post_categories.show', $category) }}"
                                        class="btn btn-info btn-sm">Voir</a> --}}
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#CreatePostCategoryModal"
                                        data-bs-action="{{ route('admin.post_categories.update', $category) }}"
                                        data-bs-name="{{ $category->name }}"
                                        data-bs-description="{{ $category->description }}">
                                        Éditer
                                    </button>
                                    <form action="{{ route('admin.post_categories.destroy', $category) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
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
                <form id="postCategoryForm" action="{{ route('admin.post_categories.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="modal-body">
                        <!-- Nom de la Catégorie -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom de la Catégorie</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Nom de la catégorie" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Description de la Catégorie -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                rows="3" placeholder="Description de la catégorie (facultatif)">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // fornie pas boostrap
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            tooltipTriggerList.forEach(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

            showModal('#CreatePostCategoryModal', @json($errors->any() || request()->has('create')));


            initializeModalForm('#CreatePostCategoryModal', '#postCategoryForm', (button, form) => {
                form.action = button.getAttribute('data-bs-action') ||
                    '{{ route('admin.post_categories.store') }}';
                form.querySelector('[name="_method"]').value = button.getAttribute('data-bs-action') ?
                    'PUT' : 'POST';
                form.querySelector('#name').value = button.getAttribute('data-bs-name') || '';
                form.querySelector('#description').value = button.getAttribute('data-bs-description') || '';
            });
        });
    </script>
@endsection
