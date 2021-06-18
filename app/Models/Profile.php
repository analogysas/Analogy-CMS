<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // One-To-One inverse relationship - A Profile belongs to a User
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

}
