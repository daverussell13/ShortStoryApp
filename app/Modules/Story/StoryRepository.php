<?php

declare(strict_types=1);

namespace App\Modules\Story;

use App\Models\Story;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\CursorPaginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class StoryRepository {

    public function getStories(): Collection
    {
        return Story::all();
    }

    public function getStoriesPaginated(int $page, string $column): LengthAwarePaginator
    {
        return Story::orderBy($column, 'desc')->paginate($page);
    }

    public function getStoriesCursorPaginated(int $page, string $column): CursorPaginator
    {
        return DB::table('stories')->orderBy($column)->cursorPaginate($page);
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

