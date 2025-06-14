<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'price_request',
    ];
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }

}
