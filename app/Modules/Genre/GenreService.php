<?php

declare(strict_types=1);

namespace App\Modules\Genre;

use Illuminate\Database\Eloquent\Collection;

class GenreService {

    public GenreRepository $genreRepository;

    public function __construct(GenreRepository $genreRepository)
    {
        $this->genreRepository = $genreRepository;
    }

    public function getAllData(): Collection
    {
        return $this->genreRepository->getGenres();
    }
}


