<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    // Custom primary key
    protected $primaryKey = 'user_id';

    // If primary key is not incrementing or not int, you may need:
    // public $incrementing = true;
    // protected $keyType = 'int';

    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'address',
        'avatar',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
