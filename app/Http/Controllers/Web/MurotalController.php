<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Murotal;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Collection;
use App\File;
use App\Models\Playlist;
use Illuminate\Support\Facades\Storage;

class MurotalController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $murotals = Murotal::with(['reciter_riwayats', 'reciter_riwayats.surah'])->orderBy('name', 'asc')->get();
        // dd($murotals);
        return view('murotals.index',compact('murotals', ['murotals' => $murotals]))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('murotals.create');
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
            'name'   => 'required',
            'file' =>'required|mimes:mp3'
        ]);

        $file = $request->file('file');
        $fileName = time() . '.' . $file->getClientOriginalName();
        $file->move(public_path('file'), $fileName);
        $request->merge(['slug' => Str::slug($request->name)]);
        $data = $request->all();
        $data['file'] = 'file/' . $fileName;
        Murotal::create($data);

        return redirect()->route('murotals.index')->with('success','Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $murotal = Murotal::where('slug', $slug)->first();
        // dd($reciter);    
        if (!$murotal) {
            return abort(404);
        }

        return view('murotals.show',compact('murotal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Murotal $murotal)
    {
        return view('murotals.edit', compact('murotal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Murotal $murotal)
    {
        $request->validate([
            'name' => 'required',
            'file' => 'required',
        ]);

        $murotal->update($request->all());
        return redirect()->route('murotals.index')->with('success','Updated Berhasil.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Murotal $murotal)
    {
        $murotal->delete();
        return redirect()->route('murotals.index')->with('success', 'Berhasil di hapus.');
    }
}
