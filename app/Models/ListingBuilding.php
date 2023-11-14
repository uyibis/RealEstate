<?php

namespace App\Models;

use App\Realtor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingBuilding extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'price',
        'plot_size',
        'media',
        'garage',
        'area',
        'city',
        'country',
        'description',
        'realtor_id',
        'is_published',
    ];

    public function realtor(){

        return $this->belongsTo(Realtor::class,'realtor_id');
    }

    public function images(){
        return $this->hasMany(ListingImage::class,'listing_id','id');
    }
}
