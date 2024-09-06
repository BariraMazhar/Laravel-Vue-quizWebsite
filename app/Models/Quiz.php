<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function results(){
        return $this->hasMany(Result::class);
    }

    public function questions() {
        return $this->hasMany(Question::class);
    }
    
}
