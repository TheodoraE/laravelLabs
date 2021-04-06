<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategories extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasOne(Post::class, 'category_id');
    }
}