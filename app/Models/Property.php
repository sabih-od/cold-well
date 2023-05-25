<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

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
        'property_image',
        'property_description',
    ];
}
