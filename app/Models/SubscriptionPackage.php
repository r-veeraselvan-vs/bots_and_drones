<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPackage extends Model
{
    use HasFactory;
    protected $table = 'subscription_package';
    protected $fillable = [
        'type', 'status', 'products'
    ];
}
