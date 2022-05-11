<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'name',
        'description',
        'image_url',
        'price',
        'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
