@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Ajouter un nouvel article</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
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
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">Titre</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                    rows="3" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    id="image" name="image">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label">Catégories</label>
                                <select class="form-control @error('category') is-invalid @enderror" id="category"
                                    name="category">
                                    <option disabled selected>Choissisez une categorie</option>
                                    @forelse ($categories as $category)
                                        <option value="{{ $category->id }}" @selected(old('category') == $category->id)>
                                            {{ $category->name }}
                                        </option>
                                    @empty
                                        <option value="">Aucune catégorie</option>
                                    @endforelse
                                </select>
                                @error('category')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Statut après enregistrement</label>
                                <select class="form-control @error('status') is-invalid @enderror" id="status"
                                    name="status">
                                    <option disabled selected>Choissisez un statut</option>
                                    @forelse ($statuses as $key => $status)
                                        <option value="{{ $key }}" @selected(old('status') == $key)>
                                            {{ $status }}
                                        </option>
                                    @empty
                                        <option value="">Aucun statut</option>
                                    @endforelse
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input @error('comments_enabled') is-invalid @enderror"
                                    type="checkbox" id="comments_enabled" name="comments_enabled"
                                    @if (old('comments_enabled') ?? true) checked @endif>
                                <label class="form-check-label" for="comments_enabled">Autoriser les
                                    commentaires</label>
                                @error('comments_enabled')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Contenu</h5>
                                        <textarea class="form-control  @error('content') is-invalid @enderror" id="content" name="content" rows="10">{{ old('content') }}</textarea>
                                        @error('content')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary ">Créer l'article</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
