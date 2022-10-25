<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function velo()
    {
        return $this->belongsTo(Velo::class);
    }
    public function Facture(){
        return $this->belongsTo(Facture::class);
    }
}
