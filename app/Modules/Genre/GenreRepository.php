<?php

declare(strict_types=1);

namespace App\Modules\Genre;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Collection;

class GenreRepository {

    public function getGenres(): Collection
    {
        return Genre::all();
    }

    public function getGenreById(int $id): Genre
    {
        return Genre::find($id);
    }

    public function getGenreByName(string $name): Genre
    {
        return Genre::where('name', $name)->first();
    }

    public function insertGenre(string $genreName): Genre
    {
        return Genre::create([
            'name' => $genreName
        ]);
    }
}
