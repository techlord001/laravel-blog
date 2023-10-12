<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'img_path',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
