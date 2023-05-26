<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Property extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'user_id',
        'property_name',
        'contact_email',
        'contact_phone_number',
        'property_address',
        'zip_code',
        'total_bedrooms',
        'total_bathrooms',
        'total_sq_feet',
        'price',
        'property_image',
        'property_description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
