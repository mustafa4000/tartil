<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surah extends Model
{
    use HasFactory;

    protected $table = "surahs";
    protected $fillable = [
        'no' , 'name', 'slug' , 'translate', 'arab'  
    ];

    public function reciter_riwayats()
    {
        return $this->hasMany(ReciterRiwayat::class, 'id' , 'surah_id');
    }

    public function murotal_reciter_surah()
    {
        return $this->hasMany(MRS::class, 'id' , 'surah_id');
    }

    public function reciters()
    {
        return $this->hasMany(Reciter::class, 'reciter_id' , 'id');
    }

    public function murotals()
    {
        return $this->belongsToMany(Murotal::class, 'reciter_riwayats');
    }

}
