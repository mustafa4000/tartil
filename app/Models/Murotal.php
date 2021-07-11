<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use wapmorgan\Mp3Info\Mp3Info;

class Murotal extends Model
{
    use HasFactory;

    protected $table = "murotals";
    protected $fillable = [
        'name', 'file', 'slug'
    ];

    // many to many reciter_riwayat
    public function reciter_riwayats()
    {
        return $this->hasMany(ReciterRiwayat::class, 'id', 'murotal_id');
    }

    // many to many murotal_reciter_surah
    public function murotal_reciter_surah()
    {
        return $this->hasMany(MRS::class, 'murotal_id', 'id');
    }

    public function surahs()
    {
        return $this->hasOne(Surah::class, 'surah_id', 'id');
    }

    public function getDurationAttribute()
    {
        $murotal = new Mp3Info(public_path($this->file), true);
        

        return gmdate("H:i:s", $murotal->duration);
    }

    private function hoursandmins($time, $format = '%02d:%02d')
    {
        if ($time < 1) {
            return;
        }
        $hours = floor($time / 60);
        $minutes = ($time % 60);
        return sprintf($format, $hours, $minutes);
    }
}
