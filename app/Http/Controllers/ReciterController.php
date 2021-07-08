<?php

namespace App\Http\Controllers;

use App\Models\Reciter;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class ReciterController extends Controller
{
    public function index()
    {
        $reciters = Reciter::with(['reciter_riwayats', 'reciter_riwayats.reciter'])->orderBy('name', 'asc')->get();
        return view('reciters.index', compact('reciters'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('reciters.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'country' => 'required',
            'description' => 'required',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        $request->merge(['slug' => Str::slug($request->name)]);
        $data = $request->all();
        $data['image'] = 'images/' . $imageName;
        Reciter::create($data);

        return redirect()->route('reciters.index')->with('success', 'Berhasil.')->with('image', $imageName);
    }

    public function show($slug)
    {
        $reciter = Reciter::with(['reciter_riwayats.riwayats'])->where('slug', $slug)->first();
        
        if (!$reciter) {
            return abort(404);
        }

        return view('reciters.show', compact('reciter'));
    }

    public function edit(Reciter $reciter)
    {
        return view('reciters.edit', compact('reciter'));
    }

    public function update(Request $request, Reciter $reciter)
    {
        $request->validate([
            'name' => 'required',
            'country' => 'required',
            'description' => 'required',
        ]);

        $reciter = Reciter::find($reciter);
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/images');
            $reciter->image = $path;
        }
        $reciter->name = $request->name;
        $reciter->save;

        return redirect()->route('reciters.index')->with('success', 'Berhasil.');
    }

    public function destroy(Reciter $reciter)
    {
        $reciter->delete();
        return redirect()->route('reciters.index')->with('success', 'Berhasil di hapus.');
    }
}
