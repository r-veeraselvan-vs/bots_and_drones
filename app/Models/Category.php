<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory;

     public function getImageUrlAttribute()
    {
        return url('/').Storage::url('app/public/category/').$this->image;
    }

    public function getBannerImageUrlAttribute()
    {
        return url('/').Storage::url('app/public/category/banner/').$this->banner_image;
    }

    public function getSideBannerImageUrlAttribute()
    {
        return url('/').Storage::url('app/public/category/sidebanner/').$this->side_banner_image;
    }
}
