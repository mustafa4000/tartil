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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Qori  $qori
     * @return \Illuminate\Http\Response
     */
    public function show(Qori $qori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Qori  $qori
     * @return \Illuminate\Http\Response
     */
    public function edit(Qori $qori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Qori  $qori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Qori $qori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Qori  $qori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qori $qori)
    {
        //
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
