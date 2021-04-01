<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAboutCard extends Model
{
    use HasFactory;
    public function icons()
    {
        return $this->belongsTo(Icon::class, 'icon_id');
    }
}
