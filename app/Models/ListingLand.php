<?php

namespace App\Models;

use App\Realtor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingLand extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'title',
        'price',
        'plot_size',
        'area',
        'city',
        'country',
        'media',
        'description',
        'realtor_id',
        'is_published',
    ];
    public function realtor(){

        return $this->belongsTo(Realtor::class);
    }

}
