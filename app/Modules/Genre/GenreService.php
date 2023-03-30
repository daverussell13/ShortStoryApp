<?php

declare(strict_types=1);

namespace App\Modules\Genre;


use App\Models\Genre;
use Illuminate\Database\Eloquent\Collection;

class GenreService {

    private GenreRepository $repository;

    public function __construct(GenreRepository $repository){
        $this->repository = $repository;
    }

    public function getAllGenres(): Collection
    {
        return $this->repository->getGenres();
    }

    public function getSingleGenre(int|string $nameOrId): Genre
    {
        $genre = null;
        if (gettype($nameOrId) == "integer") $genre = $this->repository->getGenreById($nameOrId);
        else $genre = $this->repository->getGenreByName($nameOrId);
        return $genre;
    }

    public function createNewStory(string $genreName): Genre
    {
        return $this->repository->insertGenre($genreName);
    }
}

