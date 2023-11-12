<?php

namespace App\Models;

use App\Realtor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingNew extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','description', 'price', 'square_feet','lot_size',
        'bedroom','bathroom','garage','city','country', 'media','realtor_id','is_published'
    ];


    public function realtor(){

        return $this->belongsTo(Realtor::class);
    }

}
