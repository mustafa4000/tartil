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

    // public function play()
    // {
    //     return view('pages.receiter.play');
    // }

    // public function play()
    // {
    //     return view('pages.receiter.play');
    // }

    // public function play()
    // {
    //     return view('pages.receiter.play');
    // }

    // public function play()
    // {
    //     return view('pages.receiter.play');
    // }

    // public function play()
    // {
    //     return view('pages.receiter.play');
    // }

    // public function play()
    // {
    //     return view('pages.receiter.play');
    // }

    // public function play()
    // {
    //     return view('pages.receiter.play');
    // }

    // public function play()
    // {
    //     return view('pages.receiter.play');
    // }

    // public function play()
    // {
    //     return view('pages.receiter.play');
    // }

    // public function play()
    // {
    //     return view('pages.receiter.play');
    // }

    // public function play()
    // {
    //     return view('pages.receiter.play');
    // }

    // public function play()
    // {
    //     return view('pages.receiter.play');
    // }

    // public function play()
    // {
    //     return view('pages.receiter.play');
    // }
}
