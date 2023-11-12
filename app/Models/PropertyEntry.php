<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyEntry extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'property_type',

    ];

    public function land_listing()
    {
        return $this->belongsTo(Listing::class, 'property_id', 'id')
            ->where('property_type', 'land');
    }

    public function building_listing()
    {
        return $this->belongsTo(Building::class, 'property_id', 'id')
            ->where('property_type', 'building');
    }

    public function apartment_listing()
    {
        return $this->belongsTo(Apartment::class, 'property_id', 'id')
            ->where('property_type', 'apartment');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
