<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin', // Misalnya, untuk menentukan apakah pengguna adalah admin
    ];

    // Relasi ke resep
    public function recipes()
    {
        return $this->hasMany(::class);
    }
}