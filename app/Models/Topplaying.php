<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topplaying extends Model
{
    use HasFactory;
    protected $table = "topplayings";
    protected $fillable = [
        'name' , 'qori' , 'rewayat' , 'path' , 'favorite_id' , 'playlist_id'
    ];

}
