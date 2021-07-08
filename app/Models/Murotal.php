<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murotal extends Model
{
    use HasFactory;

    protected $table = "murotals";
    protected $fillable = [
        'name', 'file'
    ];

    public function reciter_riwayats()
    {
        return $this->hasMany(ReciterRiwayat::class, 'id' , 'murotal_id');
    }

    public function murotal_reciter_surah()
    {
        return $this->hasOne(MRS::class, 'murotal_id' , 'id');
    }

    public function surahs()
    {
        return $this->hasMany(Surah::class,'surah_id', 'id');
    }
}
