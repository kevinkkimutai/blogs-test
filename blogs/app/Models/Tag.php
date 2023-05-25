<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    // Belongs to many relationship with Post model
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
