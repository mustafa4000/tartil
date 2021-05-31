<?php

namespace App\Http\Controllers;

use App\Models\Qori;
use Illuminate\Http\Request;

class NamaqoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function play()
    {
        return view('pages.receiter.play');
    }

    public function AlAhmed()
    {
        return view('pages.receiter.AlAhmed');
    }

    public function Warsh()
    {
        return view('pages.receiter.Warsh');
    }

    public function Brown()
    {
        return view('pages.receiter.Brown');
    }

    public function Basit()
    {
        return view('pages.receiter.Basit');
    }

    public function Obeikan()
    {
        return view('pages.receiter.Obeikan');
    }

    public function Albudair()
    {
        return view('pages.receiter.Albudair');
    }

    public function Alqasim()
    {
        return view('pages.receiter.Alqasim');
    }

    public function AlYusuf()
    {
        return view('pages.receiter.AlYusuf');
    }

    public function Aloosi()
    {
        return view('pages.receiter.Aloosi');
    }

    public function Haneef()
    {
        return view('pages.receiter.Haneef');
    }

    public function Alarkani()
    {
        return view('pages.receiter.Alarkani');
    }

    public function Alhadidi()
    {
        return view('pages.receiter.Alhadidi');
    }

    public function Arrifai()
    {
        return view('pages.receiter.Arrifai');
    }

    public function Alburaimi()
    {
        return view('pages.receiter.Alburaimi');
    }

    public function Thubaity()
    {
        return view('pages.receiter.Thubaity');
    }

    public function Sudais()
    {
        return view('pages.receiter.Sudais');
    }

    public function Shatri()
    {
        return view('pages.receiter.Shatri');
    }

    public function Alajmi()
    {
        return view('pages.receiter.Alajmi');
    }

    public function Jibreen()
    {
        return view('pages.receiter.Jibreen');
    }

    public function Dossari()
    {
        return view('pages.receiter.Dossari');
    }

    public function Ghamdi()
    {
        return view('pages.receiter.Ghamdi');
    }
}
