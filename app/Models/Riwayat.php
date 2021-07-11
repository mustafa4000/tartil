<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    protected $table = "riwayats";
    protected $fillable = [
        'name' , 'slug'
    ];

    // many to many reciter_riwayat
    public function reciters()
    {
        return $this->hasMany(Reciter::class,'reciter_id', 'id');
    }

    public function reciter_riwayats()
    {   
        return $this->hasMany(ReciterRiwayat::class, 'riwayat_id' , 'id');
    }
}
