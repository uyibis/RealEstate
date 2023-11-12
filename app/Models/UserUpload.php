<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserUpload extends Model
{
    use HasFactory;

    protected $table = 'user_uploads'; // Specify the table name if different from the model name
    protected $fillable = ['user_id', 'file_name', 'file_path', 'file_type', 'file_size'];

    // Define a relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
