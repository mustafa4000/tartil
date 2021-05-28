<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
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
        return view('pages.index');
        
    }

    public function alquran()
    {
        return view('pages.alquran');

        // $alquran = alquran::all();

        // return view('pages.alquran' , ['alquran' => $alquran]);
    }

    public function favorite()
    {
        return view('pages.favorite');
    }

    public function playlist()
    {
        return view('pages.playlist');
    }

    public function receiter()
    {
        return view('pages.receiter');
    }



}
