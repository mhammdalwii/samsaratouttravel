<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Boat extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'category',
        'price',
        'max_people',
        'image', // Gambar utama
        'images', // Banyak gambar (JSON)
        'itinerary', // Itinerary (JSON)
        'includes', // Includes (JSON)
        'excludes', // Excludes (JSON)
        'departure', // Jadwal keberangkatan
        'description', // Deskripsi
        'location', // Lokasi
        'year',
        'speed',
        'width',
        'length',


    ];

    protected $casts = [
        'images' => 'array',
        'itinerary' => 'array',
        'includes' => 'array',
        'excludes' => 'array',

    ];

    public function cabins()
    {
        return $this->hasMany(Cabin::class);
    }
}
