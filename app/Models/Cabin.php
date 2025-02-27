<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Boat;

class Cabin extends Model
{
    use HasFactory;

    protected $fillable = [
        'boat_id',
        'type',
        'image',
        'max_guests',
        'price_per_guest',
    ];

    public function boat()
    {
        return $this->belongsTo(Boat::class);
    }
}
