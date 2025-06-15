<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Image extends Model
{
    use HasFactory;
    

    public function imageable()
    {
        return $this->morphTo();
    }


    public function getImageAttribute()
    {
        return Str::startsWith($this->attributes['image'], ['http', 'https'])
            ? $this->attributes['image']
            : Storage::url($this->attributes['image']);
    }
}
