<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reciter extends Model
{
    use HasFactory;
    protected $table = "reciters";
    protected $fillable = [
        'name', 'slug', 'image', 'country', 'description'
    ];

    // many to many reciter_riwayat
    public function reciter_riwayats()
    {
        return $this->hasMany(ReciterRiwayat::class, 'id', 'reciter_id');
    }

    public function riwayats()
    {
        return $this->belongsToMany(Riwayat::class, 'reciter_riwayats');
    }

    // many to many MRS
    public function surahs()
    {
        return $this->belongsToMany(Surah::class, 'murotal_reciter_surah');
    }

    public function murotals()
    {
        return $this->belongsToMany(Murotal::class, 'murotal_reciter_surah');
    }

    public function playlists()
    {
        return $this->belongsToMany(Playlist::class, 'murotal_reciter_surah_playlists');
    }

    // many to many murotal_reciter_surah
    public function murotal_reciter_surah()
    {
        return $this->hasMany(MRS::class, 'id' , 'reciter_id');
    }

    

    // menggabungkan domain dan image pathnya
    public function getImageUrlAttribute()
    {
        return url("/{$this->image}");
    }
}
