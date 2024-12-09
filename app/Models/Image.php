<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['file', 'model_id', 'model_type', 'category'];

<<<<<<< Updated upstream
    public function imageable()
    {
=======
    protected $fillable = [
        'file', 'imageable_id', 'imageable_type', 'select_image'
    ];


    protected $cast = [
        'select_image' => SelectImageEnum::class
    ];


    public function imageable(){
>>>>>>> Stashed changes
        return $this->morphTo();
    }
}
