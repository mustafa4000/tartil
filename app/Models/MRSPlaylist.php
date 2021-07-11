<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MRSPlaylist extends Model
{
    use HasFactory;

    protected $table = "murotal_reciter_surah_playlists";
    protected $fillable = [
        'murotal_reciter_surah_id' , 'playlist_id'
    ];

    // many to many ke MRS
    public function murotal_reciter_surah()
    {   
        return $this->belongsToMany(MRS::class);
    }
    
    //  many ke many ke playlists
    public function playlists()
    {   
        return $this->belongsToMany(Playlist::class);
    }
}
