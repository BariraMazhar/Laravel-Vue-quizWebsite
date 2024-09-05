<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Http\Controllers\Notification;
use App\Http\Controllers\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function roles(){
        $this->belongsToMany(Role::class);
    }

    public function quizes(){
        $this->hasMany(Quiz::class);
    }

    public function quizAttempts(){
        $this->hasMany(QuizAttempt::class);
    }

    public function result(){
        $this->hasMany(Result::class);
    }

    public function subscription(){
        $this->hasOne(Subscription::class);
    }

    public function notifications()
    {
     $this->belongsToMany(Notification::class);   
    }
}
