<?php

namespace App\Http\Controllers;

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
        $riwayats = Riwayat::all();
        $reciters = Reciter::all();
        $surahs = Surah::with(['reciter_riwayats', 'reciter_riwayats.reciters'])->get();
        
        return view('dashboard', compact('reciters', 'surahs'));
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
        return view('pages.playlist');
    }

    public function tambahan()
    {
        return view('pages.tambahan');
    }

    public function receiter()
    {
        $reciters = Reciter::with(['reciter_riwayats', 'reciter_riwayats.reciter', 'riwayats'])->orderBy('name', 'asc')->get();
        return view('pages.receiter', compact(['reciters']));
    }
}
