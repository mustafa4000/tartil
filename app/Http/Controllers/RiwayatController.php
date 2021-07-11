<?php

namespace App\Http\Controllers;

use App\Models\Reciter;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riwayats = Riwayat::with(['reciter_riwayats'])->paginate(5);
        return view('riwayats.index',compact('riwayats'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('riwayats.create');
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
        Riwayat::create($request->all());
        return redirect()->route('riwayats.index')->with('success','Berhasil.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $riwayat = Riwayat::where('slug', $slug)->first();
        // dd($reciter);    
        if (!$riwayat) {
            return abort(404);
        }

        return view('riwayats.show',compact('riwayat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Riwayat $riwayat)
    {
        return view('riwayats.edit',compact('riwayat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Riwayat $riwayat)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $riwayat->update($request->all());
        return redirect()->route('riwayats.index')->with('success','Updated Berhasil.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Riwayat $riwayat)
    {
        $riwayat->delete();
        return redirect()->route('riwayats.index')->with('success','Berhasil di hapus.');
    }
}