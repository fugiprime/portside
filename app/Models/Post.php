<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'type', // 'text' or 'video'
        'video_url' // optional for video type posts
    ];

    public function isVideo()
    {
        return $this->type === 'video';
    }
}
