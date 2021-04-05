<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;
    
    public function tags()
    {
        return $this->hasMany(BlogTag::class, 'tag_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'post_id');
    }
}
