<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;
    protected $table = 'country';
    protected $fillable = ['name', 'status', 'currency_symbol'];
    public $timestamps = false;
}
