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
        'is_published',
    ];

    public function land_listing()
    {
        return $this->belongsTo(ListingLand::class, 'property_id', 'id');
    }

    public function building_listing()
    {
        return $this->belongsTo(ListingBuilding::class, 'property_id', 'id');
    }

    public function apartment_listing()
    {
        return $this->belongsTo(ListingApartment::class, 'property_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
