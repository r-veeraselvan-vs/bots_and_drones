<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductImages extends Model
{
    use HasFactory;

    protected $appends = ['ImageUrl'];

    public function getImageUrlAttribute()
    {
       return url('/').Storage::url('app/public/product/image/').$this->image;

    }
}
