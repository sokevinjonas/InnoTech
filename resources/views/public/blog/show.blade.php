@extends('public.layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('assets/global/css/prism2.css') }}">
@endsection

@section('content')
    <!-- /header -->
    <section class="wrapper image-wrapper bg-image bg-overlay text-white"
        data-image-src="{{ $post->getImageUrl() ?? asset('assets/customer/img/photos/b1.jpg') }}">
        <div class="container pt-18 pb-15 pt-md-20 pb-md-19 text-center">
            <div class="row">
                <div class="col-md-10 col-xl-8 mx-auto">
                    <div class="post-header">
                        <div class="post-category text-line text-white">
                            <a href="category-posts.html" class="text-reset" rel="category">{{ $post->category->name }}</a>
                        </div>
                        <!-- /.post-category -->
                        <h1 class="display-1 mb-4 text-white">{{ $post->title }}</h1>
                        <ul class="post-meta text-white">
                            <li class="post-date"><i
                                    class="uil uil-calendar-alt"></i><span>{{ $post->getPublishedAt() }}</span></li>
                            <li class="post-comments"><i class="uil uil-comment"></i><a href="#comments"
                                    class="text-reset">Comments
                                    Count<span> Comments</span></a></li>
                        </ul>
                        <!-- /.post-meta -->
                    </div>
                    <!-- /.post-header -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12">
                <div class="col-lg-8">
                    <div class="blog single">
                        <div class="card">
                            <figure class="card-img-top">
                                <img src="{{ $post->getImageUrl() ?? asset('assets/customer/img/photos/b1.jpg') }}"
                                    alt="{{ $post->slug }}" />
                            </figure>
                            <div class="card-body">
                                <div class="classic-view">
                                    <article class="post">
                                        <div class="post-content mb-5">
                                            {{ $post->content }}
                                        </div>
                                        <!-- /.post-content -->
                                    </article>
                                    <!-- /.post -->
                                </div>
                                <!-- /.classic-view -->
                                <hr />
                                @if ($post->comments_enabled)
                                    <div id="comments">
                                        <h3 class="mb-6">{{ $comments->count() }} Comments</h3>
                                        <ol id="singlecomments" class="commentlist">
                                            @forelse ($comments as $comment)
                                                <li class="comment" id="{{ $comment->id }}">
                                                    <div class="comment-header d-md-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <figure class="user-avatar"><img class="rounded-circle"
                                                                    alt=""
                                                                    src="{{ 'https://dummyimage.com/50x50/ced4da/6c757d.jpg' }}" />
                                                            </figure>
                                                            <div>
                                                                <h6 class="comment-author"><a href="#"
                                                                        class="link-dark">{{ $comment->user->username }}</a>
                                                                </h6>
                                                                <ul class="post-meta">
                                                                    <li><i class="uil uil-calendar-alt"></i>
                                                                        {{ $comment->getCreatedAt() }}
                                                                    </li>
                                                                </ul>
                                                                <!-- /.post-meta -->
                                                            </div>
                                                            <!-- /div -->
                                                        </div>
                                                        <!-- /div -->
                                                        <div class="mt-3 mt-md-0 ms-auto">
                                                            <button type="button"
                                                                class="btn btn-soft-ash btn-sm rounded-pill btn-icon btn-icon-start mb-0 comment-reply"
                                                                data-comment='@json($comment->showViewJson())'>
                                                                <i class="uil uil-comments "></i>
                                                                Reply
                                                            </button>
                                                        </div>
                                                        <!-- /div -->
                                                    </div>
                                                    <!-- /.comment-header -->
                                                    <p>{{ $comment->content }}</p>
                                                    @foreach ($comment->responses as $response1)
                                                        <ul class="children">
                                                            <li class="comment" id="comment-{{ $response1->id }}">
                                                                <div class="comment-header d-md-flex align-items-center">
                                                                    <div class="d-flex align-items-center">
                                                                        <figure class="user-avatar"><img
                                                                                class="rounded-circle" alt=""
                                                                                src="{{ 'https://dummyimage.com/50x50/ced4da/6c757d.jpg' }}" />
                                                                        </figure>
                                                                        <div>
                                                                            <h6 class="comment-author"><a href="#"
                                                                                    class="link-dark">{{ $response1->user->username }}</a>
                                                                            </h6>
                                                                            <ul class="post-meta">
                                                                                <li>
                                                                                    <i class="uil uil-calendar-alt"></i>
                                                                                    {{ $response1->getCreatedAt() }}
                                                                                </li>
                                                                            </ul>
                                                                            <!-- /.post-meta -->
                                                                        </div>
                                                                        <!-- /div -->
                                                                    </div>
                                                                    <!-- /div -->
                                                                    <div class="mt-3 mt-md-0 ms-auto">
                                                                        <button type="button"
                                                                            class="btn btn-soft-ash btn-sm rounded-pill btn-icon btn-icon-start mb-0 comment-reply"
                                                                            data-comment='@json($response1->showViewJson())'>
                                                                            <i class="uil uil-comments "></i>
                                                                            Reply</button>
                                                                    </div>
                                                                    <!-- /div -->
                                                                </div>
                                                                <!-- /.comment-header -->
                                                                <p>{{ $response1->content }}</p>
                                                                @foreach ($response1->responses as $response2)
                                                                    <ul class="children">
                                                                        <li class="comment" id="{{ $response2->id }}">
                                                                            <div
                                                                                class="comment-header d-md-flex align-items-center">
                                                                                <div class="d-flex align-items-center">
                                                                                    <figure class="user-avatar"><img
                                                                                            class="rounded-circle"
                                                                                            alt=""
                                                                                            src="{{ 'https://dummyimage.com/50x50/ced4da/6c757d.jpg' }}" />
                                                                                    </figure>
                                                                                    <div>
                                                                                        <h6 class="comment-author"><a
                                                                                                href="#"
                                                                                                class="link-dark">{{ $response2->user->username }}</a>
                                                                                        </h6>
                                                                                        <ul class="post-meta">
                                                                                            <li><i
                                                                                                    class="uil uil-calendar-alt"></i>{{ $response2->getCreatedAt() }}
                                                                                            </li>
                                                                                        </ul>
                                                                                        <!-- /.post-meta -->
                                                                                    </div>
                                                                                    <!-- /div -->
                                                                                </div>
                                                                                <!-- /div -->
                                                                            </div>
                                                                            <!-- /.comment-header -->
                                                                            <p>{{ $response2->content }}</p>
                                                                        </li>
                                                                    </ul>
                                                                @endforeach
                                                            </li>
                                                        </ul>
                                                    @endforeach
                                                </li>
                                            @empty
                                                <p>Pas de commentaire pour l'instant.</p>
                                            @endforelse
                                        </ol>
                                    </div>
                                @endif
                                <!-- /#comments -->
                                <hr />
                                <h3 class="mb-3">Would you like to share your thoughts?</h3>
                                <p class="mb-7">Your email address will not be published. Required fields are marked *
                                </p>
                                <div id="replyPlaceholder" class="d-none">
                                    <button type="button" class="btn-close float-end" aria-label="Close"></button>
                                    <a href="" id="commentAnchor" class="text-decoration-none link-dark">
                                        <ul class="commentlist">
                                            <li class="comment">
                                                <div class="comment-header d-md-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <figure class="user-avatar">
                                                            <img class="rounded-circle" alt="" src="" />
                                                        </figure>
                                                        <div>
                                                            <h6 class="comment-author link-dark">Name</h6>
                                                            <ul class="post-meta">
                                                                <li>
                                                                    <i class="uil uil-calendar-alt"></i>
                                                                    Publication Date
                                                                </li>
                                                            </ul>
                                                            <!-- /.post-meta -->
                                                        </div>
                                                        <!-- /div -->
                                                    </div>
                                                    <!-- /div -->
                                                </div>
                                                <!-- /.comment-header -->
                                                <p>Content</p>
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                                <form class="comment-form" action="{{ route('public.blog.comments.store') }}"
                                    method="POST">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <input type="hidden" name="comment_id" value="{{ $post->comment_id }}">

                                    <div class="form-floating mb-4">
                                        <textarea name="content" class="form-control @error('content') is-invalid @enderror" placeholder="Commentaire"
                                            style="height: 150px">{{ old('content') }}</textarea>
                                        <label>Commentaire *</label>

                                        @error('content')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary rounded-pill mb-0">Envoyer</button>
                                </form>
                                <!-- /.comment-form -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.blog -->
                </div>
                <!-- /column -->
                @include('public.blog.sidebar')
                <!-- /column .sidebar -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('dist/global/js/prism.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const replyButtons = document.querySelectorAll('.comment-reply');
            const replyPlaceholder = document.getElementById('replyPlaceholder');
            const commentAnchor = document.getElementById('commentAnchor');
            const closeBtn = replyPlaceholder.querySelector('.btn-close');
            const responeInput = document.querySelector("input[name=\"comment_id\"]");

            replyButtons.forEach(replyButton => {
                replyButton.addEventListener('click', function(event) {
                    event.preventDefault();
                    // console.log(this.getAttribute('data-comment'));

                    const commentData = JSON.parse(this.getAttribute('data-comment'));
                    // const commentData = this.getAttribute('data-comment');
                    // console.log(commentData);

                    responeInput.value = commentData.id;
                    // Mettre à jour les informations dans le conteneur de réponse
                    replyPlaceholder.querySelector('.user-avatar img').src = commentData
                        ?.avatar || @json('https://dummyimage.com/50x50/ced4da/6c757d.jpg');
                    replyPlaceholder.querySelector('.comment-author').textContent = commentData
                        ?.username || @json('az');
                    replyPlaceholder.querySelector('.post-meta li').textContent = commentData
                        .created_at;
                    replyPlaceholder.querySelector('p').textContent = commentData.content;

                    // Mettre à jour le lien d'ancre
                    commentAnchor.href = `#comment-${commentData.id}`;

                    // Afficher le conteneur de réponse
                    replyPlaceholder.classList.remove('d-none');

                    // Faire défiler jusqu'au conteneur de réponse
                    replyPlaceholder.scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Fermer le conteneur de réponse lorsqu'on clique sur le bouton "Close"
            closeBtn.addEventListener('click', function() {
                replyPlaceholder.classList.add('d-none');
                responeInput.value = null;
            });
        });
    </script>
@endsection
