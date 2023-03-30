<?php

declare(strict_types=1);
namespace App\Modules\Story;


use App\Models\Story;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\UploadedFile;

class StoryService {

    private StoryRepository $repository;

    public function __construct(StoryRepository $repository){
        $this->repository = $repository;
    }

    public function getAllStories(?string $sorted): Collection
    {
        switch ($sorted) {
            case 'date_asc':
                return $this->repository->getStoriesSortedByDate('asc');
            case 'date_desc':
                return $this->repository->getStoriesSortedByDate('desc');
            default:
                return $this->repository->getStories();
        }
    }

    public function createNewStory(array $validated): Story
    {
        return $this->repository->insertStory($validated);
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

    public function updateStoryById(Story $story, array $data): bool
    {
        $affectedRows = $this->repository->updateStoryByUlid($story->uuid, $data);
        return $affectedRows != 0;
    }

    public function deleteStoryById(Story $story): bool
    {
        $affectedRows = $this->repository->deleteStoryByUlid($story->uuid);
        return $affectedRows != 0;
    }
}
