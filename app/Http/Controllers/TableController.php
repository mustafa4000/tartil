<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class TableController extends Controller
{
    public function index()
    {
        $homes = Home::orderBy('qori', 'asc')->get();
        return view('homes.index', compact('homes'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('homes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'   => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'surat'   => 'required',
            'qori'    => 'required',
            'rewayat' => 'required',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        $request->merge(['slug' => Str::slug($request->qori)]);
        $data = $request->all();
        $data['image'] = 'images/' . $imageName;
        Home::create($data);
        return redirect()->route('homes.index')->with('success','Berhasil.')->with('image', $imageName);
    }

    public function show($slug)
    {
        $home = Home::where('slug', $slug)->first();

        if (!$home) {
            return abort(404);
        }

        return view('homes.show',compact('home'));
    }

    public function edit(Home $home)
    {
        return view('homes.edit',compact('home'));
    }

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

        return redirect()->route('homes.index')->with('success','Berhasil');
    }

    public function destroy(Home $home)
    {
        $home->delete();

        return redirect()->route('homes.index')->with('success','Berhasil di hapus.');
    }

    // public function player(Home $home)
    // {
    //     return view('homes.player',compact('home'));
    // }
}
