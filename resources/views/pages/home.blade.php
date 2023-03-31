@extends('layouts.app')

@section('title', 'Home')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/app/home.css') }}">
@endsection

@section('content')
    <main>
        <section class="py-5 text-center container-fluid hero">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-bold">Create Your Own Stories</h1>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci corrupti nisi optio mollitia
                        ratione, officia consequatur quod dolorum rerum nesciunt!
                    </p>
                    <a href="{{ route('story.create') }}" class="btn btn-primary my-2">Create Story</a>
                </div>
            </div>
        </section>
        <div class="album pt-5 bg-light">
            <div class="container-xl">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mb-3">
                    @foreach ($stories as $story)
                        <div class="col">
                            <div class="card shadow-sm" data-key="{{ $story->uuid }}"
                                onclick="storyCardClickHandler(event)">
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
                <div class="row p-3">
                    <div class="col">
                        {{ $stories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    @include('partials.sweet-alert')
@endsection
