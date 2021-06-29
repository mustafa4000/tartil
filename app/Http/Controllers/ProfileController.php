<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit(UpdateProfileRequest $request)
    {
        return view('profile.edit', [
            'user' => $request->user()
        ]);
    }

    public function update(Request $request)
    {
        $request->user()->update(
            $request->all()
        );

        return redirect()->route('profile.edit');
    }

}
