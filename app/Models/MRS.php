<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MRS extends Model
{
    use HasFactory;

    protected $table = "murotal_reciter_surah";
    protected $fillable = [
        'murotal_id' , 'reciter_id' , 'surah_id'
    ];

    public function murotals()
    {   
        return $this->belongsToMany(Murotal::class);
    }

    public function reciters()
    {   
        return $this->belongsToMany(Reciter::class);
    }

    public function surahs()
    {   
        return $this->belongsToMany(Surah::class);
    }

    public function murotal_reciter_surah_playlists()
    {
        return $this->hasMany(MRSPlaylist::class, 'MRS_id' , 'id');
    }

}
