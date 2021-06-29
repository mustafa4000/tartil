<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Home::orderBy('id','desc')->paginate(5);
        return view('homes.index', compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'surat'   => 'required',
            'qori'    => 'required',
            'rewayat' => 'required',
        ]);

        $path = $request->file('image')->store('public/images');
        $home = new Home;

        $home->image = $path;
        $home->surat = $request->surat;
        $home->qori = $request->qori;
        $home->rewayat = $request->rewayat;

        $home->save();

        return redirect()->route('homes.index')->with('success','Post has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        return view('homes.favorite',compact('home'));
    }

    // public function play(Home $home)
    // {
    //     return view('homes.playlist',compact('home'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        return view('homes.edit',compact('home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        $request->validate([
            // 'image' => 'required',
            'surat' => 'required',
            'qori' => 'required',
            'rewayat' => 'required',
        ]);

        $home = Home::find($home);
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/images');
            $home->image = $path;
        }
        $home->surat = $request->surat;
        $home->qori = $request->qori;
        $home->rewayat = $request->rewayat;
        $home->save();

        return redirect()->route('homes.index')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        $home->delete();

        return redirect()->route('homes.index')->with('success','Post deleted successfully');
    }

    public function player(Home $home)
    {
        return view('homes.player',compact('home'));
    }
}
