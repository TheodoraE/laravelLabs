<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeCarousel extends Model
{
    use HasFactory;
    public function carouseldescriptions()
    {
        return $this->belongsTo(HomeCarouselDescription::class, 'description_id');
    }
}
