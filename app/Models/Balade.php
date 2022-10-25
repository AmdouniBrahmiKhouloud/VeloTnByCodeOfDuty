<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balade extends Model
{
    use HasFactory;
    protected $guarded = [];  

    public function programmes()
    {
        return $this->hasMany(Programme::class);
    }
}
