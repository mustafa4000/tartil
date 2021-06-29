<?php

namespace App\Http\Controllers;

use App\Models\Murotal;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Collection;
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
        $murotals = Murotal::all();
        return view('murotals.index', compact('murotals'));
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
            'file' => 'required|file|mimes:pdf,xlx,csv|max:2048',
        ]);

        $path = $request->file('file')->store('public/files');
        $murotals = new Murotal();
     
        $murotals->name = $request->name;
        $murotals->image = $path;
        $murotals->save();

        return redirect()->route('murotals.index')->with('success', 'Post has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Murotal $murotal)
    {
        // return view('reciters.reciter',compact('reciters'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Murotal $murotals)
    {
        return view('murotals.edit', compact('murotals'));
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
        ]);

        $murotals = Murotal::find($murotal);
        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|file|mimes:pdf,xlx,csv|max:2048',
            ]);
            $path = $request->file('file')->store('public/images');
            $murotal->file = $path;
        }
        $murotals->name = $request->name;
        $murotals->save;

        return redirect()->route('murotals.index')->with('success', 'Post updated successfully');
        
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Murotal $murotals)
    {
        $murotals->delete();

        return redirect()->route('murotals.index')->with('success', 'Post deleted successfully');
    }
}
