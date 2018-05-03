<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $fillable = [
        'name',
        'url',
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
