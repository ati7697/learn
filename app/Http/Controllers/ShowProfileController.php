<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ShowProfileController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        return view('profile.profile')->with('user', $user);
    }
}
