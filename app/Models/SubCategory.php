<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SubCategory extends Model
{
    use HasFactory;

    public function getImageUrlAttribute()
    {
        return url('/').Storage::url('app/public/subcategory/').$this->image;
    }
    
    public function getBannerImageUrlAttribute()
    {
        return url('/').Storage::url('app/public/subcategory/banner/').$this->banner_image;
    }
    public function getSideBannerImageUrlAttribute()
    {
        return url('/').Storage::url('app/public/subcategory/sidebanner/').$this->side_banner_image;
    }
}
