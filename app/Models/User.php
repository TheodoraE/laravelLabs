<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'firstname',
        'function_id',
        'role_id',
        'description',
        'email',
        'password',
        'url',
        'check'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function positions()
    {
        return $this->belongsTo(Position::class, "function_id");
    }
    public function roles()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
    public function testimonials()
    {
        return $this->hasMany(HomeTestimonialsCard::class, 'user_id');
    }
    
}
