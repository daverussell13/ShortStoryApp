<?php

namespace App\Http\Controllers;

use App\Modules\Story\StoryService;
use Illuminate\Http\Request;

class AppController extends Controller
{
    private StoryService $storyService;

    public function __construct(StoryService $storyService)
    {
        $this->storyService = $storyService;
    }

    public function home()
    {
        $stories = $this->storyService->getAllData();
        return view('pages.home', compact('stories'));
    }
}
