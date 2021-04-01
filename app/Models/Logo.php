<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    public function aboutCards()
    {
        return $this->hasMany(HomeAboutCard::class, 'icon_id');
    }

    public function servicesCards()
    {
        return $this->hasMany(ServicesCard::class, 'icon_id');
    }
}
