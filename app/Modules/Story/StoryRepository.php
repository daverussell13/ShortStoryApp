<?php

declare(strict_types=1);

namespace App\Modules\Story;

use App\Models\Story;
use Illuminate\Database\Eloquent\Collection;

class StoryRepository {

    public function getStories(): Collection
    {
        return Story::all();
    }

    public function getStoriesSortedByDate(string $order): Collection
    {
        return Story::orderBy('created_at', $order)->get();
    }

    public function insertStory(array $data): Story
    {
        return Story::create($data);
    }

    public function updateStoryByUlid(string $ulid, array $data): int
    {
        return Story::where('uuid', $ulid)->update($data);
    }

    public function deleteStoryByUlid(string $ulid): int
    {
        return Story::destroy($ulid);
    }
}
