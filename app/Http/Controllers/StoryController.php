<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStoryRequest;
use App\Modules\Genre\GenreService;
use App\Modules\Story\StoryService;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    private GenreService $genreService;
    private StoryService $storyService;

    public function __construct(
        GenreService $genreService,
        StoryService $storyService
    ) {
        $this->genreService = $genreService;
        $this->storyService = $storyService;
    }

    public function create()
    {
        $genres = $this->genreService->getAllData();
        return view('pages.story.create', compact('genres'));
    }

    public function store(StoreStoryRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('cover')) {
            $validated['cover'] = $this->storyService->storeImageCover($request->file('cover'));
        } else {
            $validated['cover'] = config('story.cover_default');
        }

        $created = $this->storyService->createNewStory($validated);

        return $created
            ? redirect()->back()->with('success', 'Successfuly Created Story')
            : redirect()->back()->with('error', 'Oops! Something went wrong');

    }
}
