<?php

declare(strict_types=1);

namespace App\Modules\Story;

use App\Models\Story;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\UploadedFile;

class StoryService {

    private StoryRepository $storyRepository;

    public function __construct(StoryRepository $storyRepository)
    {
        $this->storyRepository = $storyRepository;
    }

    public function createNewStory(array $validated): Story
    {
        return $this->storyRepository->insertStory($validated);
    }

    public function getAllData(): Collection
    {
        return $this->storyRepository->getStories();
    }

    public function storeImageCover(UploadedFile $file): string
    {
        $filepath = $file->getClientOriginalName();

        $originName = pathinfo($filepath, PATHINFO_FILENAME);
        $extension = pathinfo($filepath, PATHINFO_EXTENSION);

        $filename = $originName . '_' . time() . '.' . $extension;
        $file->move(public_path(config('story.cover_dir')), $filename);

        return $filename;
    }
}

