<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    
    protected $table = 'notification';

     protected $fillable = ['title', 'description', 'publish_option', 'start_date', 'start_time', 'end_date', 'end_time']; // Added the missing fields
}
