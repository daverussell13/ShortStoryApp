<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Story extends Model
{
    use HasUlids, SoftDeletes;

    protected $primaryKey = "uuid";

    protected $with = ['genre'];

    protected $guarded = [
        'uuid'
    ];

    protected $cast = [
        'created_at' => 'datetime'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function cover(): Attribute
    {
        return Attribute::make(
            get: fn($cover) => config('story.cover_dir') . '/' . $cover
        );
    }

    public function title(): Attribute
    {
        return Attribute::make(
            set: fn($title) => ucfirst($title)
        );
    }

    public function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn($date) => Carbon::parse($date)->format(config('story.created_at_format'))
        );
    }
}
