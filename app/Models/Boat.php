<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boat extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'category', 'price', 'max_people', 'image', 'departure'];

    protected $casts = [
        'departure' => 'array', // Pastikan Laravel mengubah JSON ke array otomatis
    ];
}
