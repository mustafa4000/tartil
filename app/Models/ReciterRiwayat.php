<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReciterRiwayat extends Model
{
    use HasFactory;

    protected $table = "reciter_riwayats";
    protected $fillable = [
        'reciter_id', 'riwayat_id'
    ];

    public function reciters()
    {
        return $this->belongsToMany(Reciter::class);
    }

    public function riwayats()
    {
        return $this->belongsToMany(Riwayat::class);
    }
}
