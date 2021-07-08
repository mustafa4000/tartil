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

    public function reciter_riwayats()
    {
        return $this->hasMany(ReciterRiwayat::class, 'id', 'reciter_id');
    }

    public function murotal_reciter_surah()
    {
        return $this->hasMany(MRS::class, 'id' , 'reciter_id');
    }

    public function riwayats()
    {
        return $this->belongsToMany(Riwayat::class, 'reciter_riwayats');
    }

    // menggabungkan domain dan image pathnya
    public function getImageUrlAttribute()
    {
        return url("/{$this->image}");
    }
}
