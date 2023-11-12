<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingImage extends Model
{
    use HasFactory;

    protected $fillable=['listing_id','user_upload_id'];

    public function user_upload(){
        return $this->belongsTo(UserUpload::class,'user_upload_id','id');
    }
}
