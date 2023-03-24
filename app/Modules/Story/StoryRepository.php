<?php

declare(strict_types=1);

namespace App\Modules\Story;

use App\Models\Story;
use Illuminate\Database\Eloquent\Collection;

class StoryRepository {

    public function insertStory(array $data): Story
    {
        return Story::create($data);
    }

    public function getStories(): Collection
    {
        return Story::all();
    }
}
