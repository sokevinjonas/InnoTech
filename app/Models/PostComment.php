<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;

    protected $table = 'post_comments';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function responses()
    {
        return $this->hasMany(PostComment::class, 'comment_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getCreatedAt()
    {
        return date_format($this->created_at, "d M Y");
    }

    public function showViewJson()
    {
        // dd($this->getCreatedAt());
        $data =  [
            'id' => $this->id,
            'content' => $this->content,
            'created_at' => $this->getCreatedAt(),
            'username' => $this->user->username,
        ];
        return $data;
    }
}
