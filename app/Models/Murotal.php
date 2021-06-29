<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murotal extends Model
{
    use HasFactory;

    protected $table = "murotals";
    protected $fillable = [
        'name', 'path'
    ];

    public function surahs()
    {
        return $this->belongsToMany(Surah::class);
    }

    public function reciters()
    {
        return $this->belongsToMany(Reciter::class);
    }
}
