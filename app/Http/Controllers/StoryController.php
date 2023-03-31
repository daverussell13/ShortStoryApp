<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStoryRequest;
use App\Models\Story;
use App\Modules\Genre\GenreService;
use App\Modules\Story\StoryService;

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
        return view('pages.story.create', [
            "genres" => $this->genreService->getAllGenres()
        ]);
    }

    public function store(StoreStoryRequest $request)
    {
        $validated = $request->validated();

        if($request->hasFile('cover')) {
            $validated['cover'] = $this->storyService->storeImageCover($request->file('cover'));
        } else {
            $validated['cover'] = config('story.cover_default');
        }

        $created = $this->storyService->createNewStory($validated);

        return $created
            ? redirect()->back()->with('success', 'Succesfully Created Story')
            : redirect()->back()->with('error', 'Oops! Something Went Wrong');
    }

    public function show(Story $story)
    {
        return view('pages.story.show', compact('story'));
    }

    public function edit(Story $story)
    {
        $genres = $this->genreService->getAllGenres();
        return view('pages.story.edit', compact([
            'story',
            'genres'
        ]));
    }

    public function update(StoreStoryRequest $request, Story $story)
    {
        $validated = $request->validated();

        if($request->hasFile('cover')) {
            $validated['cover'] = $this->storyService->storeImageCover($request->file('cover'));
            $this->storyService->removeIfNotDefaultCover($story);
        }

        $changed = $this->storyService->updateStoryById($story, $validated);

        return $changed
            ? redirect()->back()->with('success', 'Succesfully Update Story')
            : redirect()->back()->with('error', 'Oops! Something Went Wrong');
    }

    public function destroy(Story $story)
    {
        $deleted = $this->storyService->deleteStoryById($story);

        $this->storyService->removeIfNotDefaultCover($story);

        return $deleted
            ? redirect(route('app.home'))->with('success', 'Successfully Delete Story')
            : redirect()->back()->with('error', 'Oops! Something Went Wrong');
    }
}

