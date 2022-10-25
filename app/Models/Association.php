<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * get users of association.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * get users of association.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
