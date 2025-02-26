<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $table = 'trips'; // Nama tabel dalam database

    protected $fillable = [
        'name',
        'category',
        'location',
        'duration',
        'language',
        'price',
        'description',
        'images',
        'itinerary'
    ];

    protected $casts = [
        'images' => 'array',
        'itinerary' => 'array',
    ];
}
