<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'location',
        'password',
        'avatar_url',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function votes()
    {
        return $this->belongsToMany(Event::class, 'votes');
    }

    public function comments()
    {
        return $this->belongsToMany(Event::class, 'comments')->withPivot('text', 'created_at');
    }

    public function likes()
    {
        return $this->belongsToMany(Event::class, 'likes');
    }

    public function subscriptions()
    {
        return $this->belongsToMany(Event::class, 'subscriptions');
    }
}
