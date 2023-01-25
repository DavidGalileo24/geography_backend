<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\SelectImageEnum;

class Image extends Model{
    use HasFactory;


    protected $fillable = [
        'model_id', 'model_type', 'file', 'title', 'description', 'select_image'
    ];


    protected $cast = [
        'select_image' => SelectImageEnum::class
    ];


    public function imageable(){
        return $this->morphTo();
    }


}
