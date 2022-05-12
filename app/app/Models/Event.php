<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'name',
        'description',
        'image_url',
        'date',
        'price',
        'is_repeating',
        'is_published',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function votes()
    {
        return $this->belongsToMany(User::class, 'votes');
    }

    public function comments()
    {
        return $this->belongsToMany(User::class, 'comments')->withPivot('text', 'created_at');
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes');
    }

    public function subscriptions()
    {
        return $this->belongsToMany(User::class, 'subscriptions');
    }
}
