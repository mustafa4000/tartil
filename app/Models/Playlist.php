<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $table = "playlists";
    protected $fillable = [
        'name' , 'item_id'
    ];


    public function murotals()
    {
        return $this->belongsToMany(User::class);
    }
}
