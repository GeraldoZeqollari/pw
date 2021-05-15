<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Role;
use App\Models\Feedback;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $timestamps = false;

    protected $fillable = [

        'email',
        'password',
        'username',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }

    // public function roles()
    // {
    //     return $this->belongsToMany(Role::class, 'user_role');
    // }

    // public function isAdministrator()
    // {
    //     return $this->roles()->where('name', 'Administrator')->exists();
    // }

    // public function likes()
    // {
    //     return $this->hasMany(Like::class);
    // }

    // public function receivedLikes()
    // {
    //     return $this->hasManyThrough(Like::class, Feedback::class);
    // }
}
