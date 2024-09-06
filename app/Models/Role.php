<?php

namespace App\Models;

use App\Http\Controllers\Permission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function users(){
        $this->belongsToMany(User::class);
    }

    public function permissions(){
        $this->belongsToMany(Permission::class);
    }
}
