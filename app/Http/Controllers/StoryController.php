<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function create()
    {
        $genres = Genre::all();
        return view('pages.story.create', compact('genres'));
    }

    public function store()
    {

    }
}
