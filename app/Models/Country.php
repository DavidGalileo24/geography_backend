<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'total_population', 'capital', 'continent_id', 'languaje_id', 'religion_id', 'currency_id',
    ];

    /*Inverse Relationships */

    public function continent()
    {
        return $this->belongsTo(Continent::class);
    }

    public function languajes()
    {
        return $this->belongsToMany(Languaje::class, 'country_languaje');
    }

    public function religions()
    {
        return $this->belongsToMany(Religion::class, 'country_religion');
    }

    public function currencies()
    {
        return $this->belongsToMany(Currency::class, 'country_currency');
    }

    /*Pholimorphyc relationship */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
