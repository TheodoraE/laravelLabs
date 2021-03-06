<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactFormSubject extends Model
{
    use HasFactory;
    public function contactMails()
    {
        return $this->hasMany(ContactMail::class, 'subject_id');
    }
}
