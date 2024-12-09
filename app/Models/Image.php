<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['file', 'model_id', 'model_type', 'category'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
