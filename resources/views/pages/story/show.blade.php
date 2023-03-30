@extends('layouts.app')

@section('title', 'Story')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/story/show.css') }}">
@endsection

@section('content')
    <main>
        <div class="container bg-white p-3 py-md-4 px-md-5">
            <div
                class="d-flex justify-content-between flex-column flex-md-row
                  align-items-center py-3 border-bottom">
                <h2 class="fw-bold">{{ $story->title }}</h2>
                <a class="back-to-home" href="{{ route('app.home') }}">&larr; Back to Home</a>
            </div>
            <div class="row border-bottom py-4">
                <div class="col-lg-6">
                    <img src="{{ asset($story->cover) }}" alt="cover">
                </div>
                <div class="col-lg-6">
                    <div class="my-3">
                        <a href="{{ route('story.edit', $story->uuid) }}" class="btn btn-light">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <form class="d-inline" action="{{ route('story.destroy', $story->uuid) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-light">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </form>
                    </div>
                    <div class="my-3">
                        <h5 class="fw-bold">Story Details : </h5>
                        <p>
                            Genre : {{ $story->genre->name }} <br>
                            Release date : {{ $story->created_at }} <br>
                        </p>
                    </div>
                    <div class="my-3">
                        <h5 class="fw-bold">Synopsis : </h5>
                        <p class="story-synopsis fs-6">
                            {{ $story->synopsis }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row my-4 story-content">
                {!! $story->content !!}
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script src="{{ asset('js/story/script.js') }}"></script>
@endsection
