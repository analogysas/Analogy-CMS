<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Many-To-Many inverse relationship - A Role belongs to many Users
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // Many-To-Many relationship - A Role has many Permissions
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
