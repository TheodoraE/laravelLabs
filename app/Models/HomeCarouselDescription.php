<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeCarouselDescription extends Model
{
    use HasFactory;
    public function carousels()
    {
        return $this->belongsTo(HomeCarousel::class, "description_id");
    }
}
