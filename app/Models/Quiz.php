<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    public function users(){
        $this->belongsTo(User::class);
    }

    public function results(){
        $this->hasMany(Result::class);
    }
}
