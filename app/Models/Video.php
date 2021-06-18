<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

     // One-To-Many inverse relationship - A Video belongs to a User
     public function user()
     {
         return $this->belongsTo(User::class);
     }
 
}
