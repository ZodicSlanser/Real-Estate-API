<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'house_type',
        'availability',
        'total_area',
        'number_of_bedrooms',
        'number_of_bathrooms',
        'main_picture'
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function images()
    {
        return $this->hasMany(HouseImage::class);
    }
}
