@extends('layouts.app')

@section('content')
    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Album example</h1>
                    <p class="lead text-muted">
                        Something short and leading about the collection below—its
                        contents, the creator, etc. Make it short and sweet, but not too
                        short so folks don’t simply skip over it entirely.
                    </p>
                    <p>
                        <a href="{{ route('story.create') }}" class="btn btn-primary my-2">Create New Story</a>
                        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($stories as $story)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{ asset($story->cover) }}" alt="cover" width="100%">
                                <div class="card-body">
                                    <div class="card-title-wrapper d-flex justify-content-between align-items-center">
                                        <p class="card-title fw-bold">{{ $story->title }}</p>
                                        <span class="badge text-bg-secondary">{{ $story->genre->name }}</span>
                                    </div>
                                    <p class="card-text">{{ $story->synopsis }}</p>
                                    <div class="d-flex">
                                        <small class="text-muted ms-auto">{{ $story->created_at }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
