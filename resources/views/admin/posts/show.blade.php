@extends('admin.layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('dist/global/css/prism2.css') }}">
@endsection

@section('content')
    <div class="pagetitle">
        <h1>{{ $post->title }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Admin</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Articles</a></li>
                <li class="breadcrumb-item active">{{ $post->title }}</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    {{-- @dump($errors) --}}
    <section class="section card">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content -->
                    <article>
                        <!-- Post header -->
                        <header class="mb-4">
                            <!-- Post title -->
                            <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                            <ul class="list-unstyled mb-2 row row-cols-1 row-cols-sm-2">
                                <li>
                                    <a href="#!" class="col badge bg-secondary text-decoration-none link-light">
                                        {{ $post->category->name }}
                                    </a>
                                </li>
                            </ul>
                            <!-- Post meta content -->
                            <p class="text-muted fst-italic">Publié le {{ $post->getPublishedAt() }}</p>
                        </header>

                        <!-- Post image -->
                        <figure class="mb-4">
                            <img class="img-flui w-100 rounded"
                                src="{{ $post->getImageUrl() ?? 'https://dummyimage.com/900x400/ced4da/6c757d.jpg' }}"
                                alt="{{ $post->slug }}" />
                        </figure>

                        <!-- Post content -->
                        <section class="mb-5">
                            {!! $post->content !!}
                        </section>
                    </article>
                </div>

                <!-- Sidebar widgets -->
                <div class="col-lg-4">
                    <div class="position-sticky" style="top: 6rem;">
                        <!-- Post Status widget -->
                        <div class="card mb-3">
                            <div class="card-header mb-3">Statut</div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <span>Statut actuel :</span>
                                    <button class="fs-6 badge bg-info btn">{{ $post->getFrStatus() }}</button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Changer le statut
                                    </button>
                                    <ul class="dropdown-menu">
                                        @forelse ($statuses as $status)
                                            <li><a class="dropdown-item" href="#">{{ $status }}</a></li>
                                        @empty
                                            <li><a class="dropdown-item" href="#">Aucun statut</a></li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Actions widget -->
                        <div class="card mb-3">
                            <div class="card-header mb-3">Actions</div>
                            <div class="card-body text-center">
                                <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-warning">Modifier</a>
                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!-- Description widget -->
                        <div class="card mb-3">
                            <div class="card-header mb-3">Description</div>
                            <div class="card-body">
                                <p class="lead fs-6">{{ $post->description }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('dist/global/js/prism.js') }}"></script>
@endsection
