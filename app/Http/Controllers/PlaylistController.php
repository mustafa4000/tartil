<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playlists = Playlist::with(['murotal_reciter_surah_playlists' , 'murotal_reciter_surah'])->orderBy('name', 'asc')->get();
        return view('playlists.index',compact('playlists'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('playlists.create');
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
            'name' => 'required',
        ]);

        $request->merge(['slug' => Str::slug($request->name)]);
        Playlist::create($request->all());
        return redirect()->route('playlists.index')->with('success','Berhasil.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $playlist = Playlist::with(['murotal_reciter_surah_playlists'])->where('slug', $slug)->first();
        // dd($playlist);    
        if (!$playlist) {
            return abort(404);
        }

        return view('playlists.show',compact('playlist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Playlist $playlist)
    {
        return view('playlists.edit',compact('playlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playlist $playlist)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        $playlist->update($request->all());
        return redirect()->route('playlists.index')->with('success','Updated Berhasil.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playlist $playlist)
    {
        $playlist->delete();
        return redirect()->route('playlists.index')->with('success','Berhasil di hapus.');
    }
}
