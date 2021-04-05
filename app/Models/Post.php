<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    // use SoftDeletes;
    
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function categories()
    {
        return $this->belongsTo(BlogCategories::class, 'category_id');
    }

    public function postsPost()
    {
        return $this->hasMany(PostTag::class, 'post_id');
    }
}
