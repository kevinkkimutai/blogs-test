<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    // protected $fillable = ['title', 'content'];

    // Belongs to relationship with Author model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Belongs to many relationship with Tag model
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
