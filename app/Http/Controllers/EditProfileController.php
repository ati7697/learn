<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EditProfileController extends Controller
{
    public function edit($id)
    {
        $user = User::find($id);
        return view('profile/editProfile')->with('user', $user);
    }

//    public function update(Request $request, $id)
//    {
//        $this->validate($request,[
//            'name'=> 'required|'
//        ]);
//    }
}
