<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    use HasFactory;

    public function fileable(): MorphTo
    {
        return $this->morphTo();
    }

    public function getFile(): ?string
    {
        return Storage::exists($this->url)
            ? asset(Storage::url($this->url))
            : '';
    }
}
