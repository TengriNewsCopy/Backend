<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'author',
        'views',
        'comments',
        'tags',
        'published_at',
    ];

    protected $casts = [
        'author' => 'array',
        'comments' => 'array',
        'tags' => 'array',
        'published_at' => 'datetime',
    ];

    public function scopeFilters($query, array $filters)
    {
        if (isset($filters['search'])) {
            $query->where(function ($query) use ($filters) {
                $query->where('title', 'like', '%'.$filters['search'].'%')
                    ->orWhere('content', 'like', '%'.$filters['search'].'%');
            });
        }

        if (isset($filters['tags'])) {
            $query->whereJsonContains('tags', $filters['tags']);
        }

        if (isset($filters['sort'], $filters['order'])){
            $query->orderBy($filters['sort'], $filters['order']);
        }

        return $query;
    }
}
