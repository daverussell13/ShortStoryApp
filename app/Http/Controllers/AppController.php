<?php

namespace App\Http\Controllers;

use App\Modules\Story\StoryService;

class AppController extends Controller
{
    public StoryService $storyService;

    public function __construct(StoryService $storyService) {
        $this->storyService = $storyService;
    }

    public function home()
    {
        $stories = $this->storyService->getAllStories('date_desc');
        return view('pages.home', compact('stories'));
    }
}

