<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Playlist;
use Illuminate\Http\Request;

class PLaylistController extends Controller
{
    public function index()
    {
        //get data categories
        $playlists = Playlist::latest()->paginate(12);

        //return with response JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data playlists',
            'data'    => $playlists,
        ], 200);
    }

    public function show($slug)
    {
        //get detail data category with campaign
        $playlists = Playlist::with('campaigns.user', 'campaigns.sumDonation')->where('slug', $slug)->first();

        if($playlists) {

            //return with response JSON
            return response()->json([
                'success' => true,
                'message' => 'List Data Campaign Berdasarkan playlists : '. $playlists->name,
                'data'    => $playlists,
            ], 200);
        }

        //return with response JSON
        return response()->json([
            'success' => false,
            'message' => 'Data playlists Tidak Ditemukan!',
        ], 404);
    }
}
