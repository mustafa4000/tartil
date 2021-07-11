<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surah extends Model
{
    use HasFactory;

    protected $table = "surahs";
    protected $fillable = [
        'no', 'name', 'slug', 'translate', 'arab'
    ];

    // many to many reciter_riwayat
    public function reciter_riwayats()
    {
        return $this->hasMany(ReciterRiwayat::class, 'id', 'surah_id');
    }

    public function reciters()
    {
        return $this->belongsToMany(Reciter::class, 'murotal_reciter_surah');
    }
    
    public function murotals()
    {
        return $this->belongsToMany(Murotal::class, 'murotal_reciter_surah');
    }

    // many to many murotal_reciter_surah
    public function murotal_reciter_surah()
    {
        return $this->hasMany(MRS::class, 'id', 'surah_id');
    }
}
