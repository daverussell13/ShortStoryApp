<?php

declare(strict_types=1);

namespace App\Modules\Story;

use App\Models\Story;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\UploadedFile;
use File;

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

    public function getPaginatedStories(int $page, string $column): LengthAwarePaginator
    {
        return $this->repository->getStoriesPaginated($page, $column);
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

    public function hasDefaultCover(Story $story): bool
    {
        return $story->cover == config('story.cover_dir') . '/' . config('story.cover_default');
    }

    public function removeImageCover(string $filePath): bool
    {
        if (File::exists(public_path($filePath))) {
            File::delete(public_path($filePath));
            return true;
        } else {
            return false;
        }
    }

    public function removeIfNotDefaultCover(Story $story)
    {
        if (!$this->hasDefaultCover($story)) {
            $this->removeImageCover($story->cover);
        }
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



