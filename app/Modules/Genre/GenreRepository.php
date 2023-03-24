<?php

declare(strict_types=1);

namespace App\Modules\Genre;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Genre;

class GenreRepository {

    public function getGenres(): Collection
    {
        return Genre::all();
    }

}
