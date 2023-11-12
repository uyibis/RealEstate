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
        'area',
        'city',
        'country',
        'description',
        'realtor_id',
        'is_published',
    ];

    public function realtor(){

        return $this->belongsTo(Realtor::class);
    }
}
