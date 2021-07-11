<?php

namespace App\Http\Controllers;

use App\Models\Murotal;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Models\Reciter;
use App\Models\Riwayat;
use App\Models\Surah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $murotals = Murotal::all();
        $playlists = Playlist::get();
        // dd($murotals);
        $riwayats = Riwayat::all();
        $reciters = Reciter::all();
        $surahs = Surah::with(['reciters'])->get();        

        return view('dashboard', compact('reciters', 'surahs', 'riwayats', 'playlists', 'murotals'));
    }

    // sidebar
    public function dashboard()
    {
        return view('pages.index');
    }

    public function donate()
    {
        return view('pages.donate.index');
    }

    public function alquran()
    {
        return view('pages.alquran');
    }

    public function favorite()
    {
        return view('pages.favorite');
    }

    public function playlist()
    {
        // $playlists = Playlist::with(['murotal_reciter_surah_playlists'])->get();
        return view('pages.playlist');
        // , compact(['playlists'])
    }

    public function receiter()
    {
        $reciters = Reciter::with(['reciter_riwayats', 'reciter_riwayats.reciter', 'riwayats'])->orderBy('name', 'asc')->get();
        return view('pages.receiter', compact(['reciters']));
    }
}
