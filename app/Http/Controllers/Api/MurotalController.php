<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Murotal;
use Illuminate\Http\Request;

class MurotalController extends Controller
{
    public function index()
    {
        //get data categories
        // $murotals = Murotal::latest()->paginate(12);

         //get data campaigns
         $murotals = Murotal::when(request()->q, function($murotals) {
            $murotals = $murotals->where('title', 'like', '%'. request()->q . '%');
        })->latest()->paginate(5);

        //return with response JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data murotals',
            'data'    => $murotals,
        ], 200);
    }

}
