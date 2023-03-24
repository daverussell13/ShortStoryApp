@extends('layouts.app')

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
                <h2 class="fw-bold">Create New Story</h2>
                <a class="back-to-home" href="{{ route('app.home') }}">&larr; Back to Home</a>
            </div>
            <form class="py-3 px-2 px-lg-0" action="{{ route('story.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="storyImgCover" class="form-label">Story Image Cover</label>
                    <img class="d-block mb-3" id="storyImgCoverPreview" src="holder.js/300x225?text=Image" alt="cover">
                    <input class="form-control" type="file" id="storyImgCover" name="cover"
                        accept="image/png, image/jpeg" onchange="loadFile(event)">
                </div>
                <div class="mb-3">
                    <label for="storyTitle" class="form-label">Story Title</label>
                    <input type="text" class="form-control" id="storyTitle" name="title">
                </div>
                <div class="mb-3">
                    <label for="storyGenre" class="form-label">Story Genre</label>
                    <select class="form-select" name="genre_id" id="storyGenre">
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="storySynopsis" class="form-label">Story Synopsis</label>
                    <textarea class="form-control" id="storySynopsis" rows="3" name="synopsis"></textarea>
                </div>
                <div class="mb-3">
                    <label for="storyContent" class="form-label">Story Content</label>
                    <textarea class="form-control" id="storyContent" name="content"></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </form>
        </div>
    </main>
@endsection

@section('scripts')
    @include('partials.sweet-alert')
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
    <script src="{{ asset('js/story/script.js') }}"></script>
@endsection
