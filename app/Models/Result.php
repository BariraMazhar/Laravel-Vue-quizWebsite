<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    public function users(){
     return $this->belongsTo(User::class);   
    }

    public function quizzes(){
        return $this->belongsToMany(Quiz::class);
    }
}
