<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use HasFactory;

    protected $fillable = [
        'continent_name', 'description',
    ];

    /* Relationships */
    public function country()
    {
        return $this->hasMany(Country::class);
    }

    /* Pholimorphyc relationship */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
