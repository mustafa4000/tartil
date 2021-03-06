<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reciter;
use App\Models\Riwayat;
use App\Models\Surah;
use Illuminate\Support\Str;

class SurahController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surahs = Surah::with(['reciter_riwayats', 'reciter_riwayats.reciter'])->orderBy('no', 'asc')->get();
        return view('surahs.index', compact('surahs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surahs.create');
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
            'translate' => 'required',
            'arab' => 'required',
        ]);
        // dd(Str::slug($request->name));
        $request->merge(['slug' => Str::slug($request->name)]);
        // dd($request->all());
        Surah::create($request->all());

        return redirect()->route('surahs.index')->with('success', 'Berhasil.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $surah = Surah::with(['reciters', 'murotals', 'reciters.riwayats'])->where('slug', $slug)->first();
        $riwayat = Riwayat::where('slug', $slug)->get();
        // dd($surahs);
        if (!$surah) {
            return abort(404);
        }

        return view('surahs.show', compact('surah', 'riwayat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Surah $surah)
    {
        return view('surahs.edit', compact('surah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surah $surah)
    {
        $request->validate([
            'name' => 'required',
            'translate' => 'required',
            'arab' => 'required',
        ]);

        $surah->update($request->all());

        return redirect()->route('surahs.index')->with('success', 'Update Berhasil.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surah $surah)
    {
        $surah->delete();

        return redirect()->route('surahs.index')->with('success', 'Berhasil di hapus.');
    }
}
