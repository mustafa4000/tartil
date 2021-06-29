<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reciter extends Model
{
    use HasFactory;
    protected $table = "reciters";
    protected $fillable = [
        'name', 'image', 'riwayat_id' , 'slug'
    ];

    public function riwayats()
    {
        return $this->belongsTo(Riwayat::class,'riwayat_id');
    }

    public function surahs()
    {
        return $this->belongsToMany(Surah::class);
    }
}
