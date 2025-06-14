<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
        protected $table = 'products';

     public function specifications()
    {
        return $this->hasMany(ProductSpecifications::class, 'product_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ProductImages::class, 'product_id', 'id')->orderBy('display_order', 'asc');
    }

    public function packages()
    {
        return $this->hasMany(ProductPackages::class, 'product_id', 'id');
    }
}
