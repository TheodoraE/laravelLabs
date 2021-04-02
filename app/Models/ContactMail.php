<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMail extends Model
{
    use HasFactory;
    public function subjects()
    {
        return $this->belongsTo(ContactFormSubject::class, 'subject_id');
    }
}
