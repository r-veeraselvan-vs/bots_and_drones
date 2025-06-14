<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    public function products()
    {
        return $this->hasMany(Products::class);
    }
    public function countries()
    {
        return $this->belongsTo(Countries::class, 'country_id');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'country_id',
        'trading_name',
        'website_link',
        'mobile_no',
        'password',
        'otp',
        'company_name',
        'registered_address',
        'country',
        'registered_number',
        'company_email',
        'company_phone','otp_verified_at',
        'seller',
        'is_deleted',
        'address1',
        'address2',
        'city',
        'state',
        'pincode',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
