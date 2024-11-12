<?php

namespace App\Http\Controllers;
use App\Models\Profile;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getAllProfile()
    {
        $profiles = Profile::all();
        return view( 'profiles', ['profiles' => $profiles]);
    }

    public function output($id)
    {
        $profile = Profile::find(id: $id);
        if (!$profile)
        {
            return abort(code:404);
        }
        return view('output', compact('profile'));
    }
}
