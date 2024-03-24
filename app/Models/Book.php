<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // fillメソッドによる割り当てを許可する項目
    protected $fillable = ['isbn', 'title', 'price', 'publisher', 'published'];

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

    // reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
