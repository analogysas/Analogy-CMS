<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    // Many-To-Many relationship - A Permission belongs to many Roles
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

}
