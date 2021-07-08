<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $table = "playlists";
    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id' , 'id');
    }

    public function playlist_users()
    {
        return $this->hasMany(PlaylistUser::class, 'playlist_id', 'id');
    }

    public function murotal_reciter_surah_playlists()
    {
        return $this->hasMany(MRSPlaylist::class, 'playlist_id' , 'id');
    }
}
