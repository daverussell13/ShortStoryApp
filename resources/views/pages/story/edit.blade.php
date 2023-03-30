@extends('layouts.app')

@section('title', 'Edit Story')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/story/create.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.8/holder.min.js"
        integrity="sha512-O6R6IBONpEcZVYJAmSC+20vdsM07uFuGjFf0n/Zthm8sOFW+lAq/OK1WOL8vk93GBDxtMIy6ocbj6lduyeLuqQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')
    <main>
        <div class="container bg-white p-3 py-md-4 px-md-5">
            <div
                class="d-flex justify-content-between flex-column flex-md-row
                  align-items-center py-3 mb-3 border-bottom">
                <h2 class="fw-bold">Edit Story</h2>
                <a class="back-to-home" href="{{ route('story.show', $story->uuid) }}">&larr; Back to Story</a>
            </div>
            <form class="py-3 px-2 px-lg-0" action="{{ route('story.update', $story->uuid) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="storyImgCover" class="form-label">Story Image Cover</label>
                    <img class="d-block mb-3" id="storyImgCoverPreview" src="{{ asset($story->cover) }}">
                    <input class="form-control @error('cover') is-invalid @enderror" type="file" id="storyImgCover"
                        accept="image/png, image/jpeg" onchange="loadFile(event)" name="cover">
                    @error('cover')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="storyTitle" class="form-label">Story Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="storyTitle"
                        name="title" value="{{ old('title', $story->title) }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="storyGenre" class="form-label">Story Genre</label>
                    <select class="form-select @error('genre_id') is-invalid @enderror" id="storyGenre" name="genre_id">
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                    </select>
                    @error('genre_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="storySynopsis" class="form-label">Story Synopsis</label>
                    <textarea class="form-control @error('synopsis') is-invalid @enderror" id="storySynopsis" rows="3"
                        name="synopsis">{{ old('synopsis', $story->synopsis) }}</textarea>
                    @error('synopsis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="storyContent" class="form-label">Story Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="storyContent" rows="3" name="content">{{ old('content', $story->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn btn-secondary ms-auto">Save</button>
                </div>
            </form>
        </div>
    </main>
@endsection

@section('scripts')
    <script src="{{ asset('js/story/script.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#storyContent'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'undo', 'redo',
                    'blockQuote'
                ]
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    @include('partials.sweet-alert')
@endsection
