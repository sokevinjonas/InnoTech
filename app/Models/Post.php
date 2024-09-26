<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\PostCategory;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    const PUBLISHED = 'published';
    const NOT_PUBLISHED = 'not_published';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'category_id');
    }

    // public function comments()
    // {
    //     return $this->hasMany(PostComment::class, 'post_id', 'id');
    // }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    static public function getFrStatuses()
    {
        return [
            'not_published' => 'Non publié',
            'published' => 'Publié'
        ];
    }

    public function getFrStatus()
    {
        return $this->status === 'published' ? 'Publier' : 'Non Publier';
    }

    public function getImageUrl()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }

    public function getPublishedAt()
    {
        $format = 'd M Y';

        // Utiliser Carbon pour gérer les dates
        $publishedAt = $this->published_at ? Carbon::parse($this->published_at) : Carbon::parse($this->created_at);

        // Formater la date selon le format désiré
        return $publishedAt->format($format);
    }

    public function isPublished()
    {
        return $this->status === 'published';
    }

    public function isNotPublished()
    {
        return $this->status === 'not_published';
    }

    public function getDescription($limit = 100)
    {
        return Str::limit($this->description, $limit);
    }

    static public function POPULAR_POSTS($take = 4)
    {
        return  Post::withCount('comments')
            ->orderBy('comments_count', 'desc')
            ->where('status', POST::PUBLISHED)
            ->take($take)
            ->get();
    }

    static public function LAST_POSTS($take = 4)
    {
        return Post::latest()
            ->where('status', POST::PUBLISHED)
            ->take($take)
            ->get();
    }
}
