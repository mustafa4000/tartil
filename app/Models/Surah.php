<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surah extends Model
{
    use HasFactory;

    protected $table = "surahs";
    protected $fillable = [
        'name', 'translate', 'arab', 'no', 'slug'
    ];

    public function reciters()
    {
        return $this->belongsToMany(Reciter::class);
    }

    public function murotals()
    {
        return $this->belongsToMany(Murotal::class);
    }
}
