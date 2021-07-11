<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $table = "playlists";
    protected $fillable = [
        'name', 'slug'
    ];

    // one to many ke user
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // many to many 
    public function murotal_reciter_surah_playlists()
    {
        return $this->hasMany(MRSPlaylist::class, 'playlist_id', 'id');
    }

    public function murotal_reciter_surah()
    {
        return $this->belongsToMany(MRS::class, 'murotal_id', 'reciter_id', 'surah_id');
    }
}
