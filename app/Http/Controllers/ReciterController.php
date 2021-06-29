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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reciters = Reciter::orderBy('name', 'asc')->get();
        return view('reciters.index', compact('reciters'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reciters.create');
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
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        // $path = $request->file('image')->store('public/images');
        // $reciters = new Reciter;
     
        $request->merge(['slug' => Str::slug($request->name , $request->image)]);
        Reciter::create($request->all());
        
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('images'), $imageName);
        // $reciters->name = $request->name;
        // $reciters->image = $path;
        // $reciters->save();
        // dd(Str::slug($request->name));

        return redirect()->route('reciters.index')->with('success', 'Post has been created successfully.')->with('image',$imageName);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $reciter = Reciter::where('slug', $slug)->first();

        if (!$reciter) {
            return abort(404);
        }

        return view('reciters.show', compact('reciter'));
        // return view('reciters.reciter',compact('reciters'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reciter $reciter)
    {
        return view('reciters.edit', compact('reciter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reciter $reciter)
    {
        $request->validate([
            'name' => 'required',
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

        return redirect()->route('reciters.index')->with('success', 'Post updated successfully');
        
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reciter $reciter)
    {
        $reciter->delete();

        return redirect()->route('reciters.index')->with('success', 'Post deleted successfully');
    }
}
