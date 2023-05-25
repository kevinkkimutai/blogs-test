<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = ['name', 'email'];

    // Has many relationship with Post model
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
