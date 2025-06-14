<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SupportingPartner extends Model
{
    use HasFactory;

    public function getImageUrlAttribute()
    {
        return url('/').Storage::url('/app/public/supporting_partners/').$this->image;
    }
}
