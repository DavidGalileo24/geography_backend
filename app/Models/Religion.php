<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    use HasFactory;

    protected $fillable = [
        'religion_name', 'description',
    ];

    /* Relationships */
    public function countries()
    {
        return $this->belongsToMany(Country::class);
    }
}
