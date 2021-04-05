<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id');
    }

    public function postsTag()
    {
        return $this->hasMany(PostTag::class, 'tag_id');
    }
}
