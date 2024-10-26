<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'ingredients',
        'instructions',
        'category_id',
        'user_id',
        'image', 
        'video'
    ];

    // Relationship with Category
    public function category()
    {
        return $this->belongsTo(memasak::class);
    }

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}