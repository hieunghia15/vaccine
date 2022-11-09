<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'content',
        'thumbnail',
        'is_actived',
        'post_slug',
        'category_id',
        'user_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function postBy()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
