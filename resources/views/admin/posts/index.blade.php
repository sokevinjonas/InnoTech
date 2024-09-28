@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Articles</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item">Articles</li>
                <li class="breadcrumb-item active">liste</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-3">
                        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary float-end">Ajouter
                            un article</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Liste des articles</h5>
                <!-- Table pour afficher les articles -->
                <table class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th scope="col">Titre</th>
                            <th scope="col">Statut</th>
                            <th scope="col">Créé le</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->getFrStatus() }}</td>
                                <td>{{ $post->created_at->format('d / M / Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-info btn-sm">Voir</a>
                                    <a href="{{ route('admin.posts.edit', $post) }}"
                                        class="btn btn-warning btn-sm">Éditer</a>
                                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">
                                            Supprimer
                                        </button>
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
@endsection
