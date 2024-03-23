<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // publishedスコープ
    public function scopePublished($query)
    {
        $query->where('published', '<=', now());
    }

    // publisherスコープ
    public function scopePublisher($query, $name)
    {
        $query->where('publisher', $name);
    }
}
