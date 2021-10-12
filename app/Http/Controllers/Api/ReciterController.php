<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reciter;
use Illuminate\Http\Request;

class ReciterController extends Controller
{
    public function index()
    {
        //get data campaigns
        $reciters = Reciter::with('user')->with('sumDonation')->when(request()->q, function($reciters) {
            $reciters = $reciters->where('title', 'like', '%'. request()->q . '%');
        })->latest()->paginate(5);

        //return with response JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data reciters',
            'data'    => $reciters,
        ], 200);
    }
    
    /**
     * show
     *
     * @param  mixed $slug
     * @return void
     */
    public function show($slug)
    {
        //get detail data campaign
        $reciters = Reciter::with('user')->with('sumDonation')->where('slug', $slug)->first();

        //get data donation by campaign
        // $donations = Donation::with('donatur')->where('campaign_id', $reciters->id)->where('status', 'success')->latest()->get();

        if($reciters) {

            //return with response JSON
            return response()->json([
                'success'   => true,
                'message'   => 'Detail Data Campaign : '. $reciters->title,
                'data'      => $reciters,
                // 'donations' => $donations
            ], 200);
        }

        //return with response JSON
        return response()->json([
            'success' => false,
            'message' => 'Data Campaign Tidak Ditemukan!',
        ], 404);
    }
}
