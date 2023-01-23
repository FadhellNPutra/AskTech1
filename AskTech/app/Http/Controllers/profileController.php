<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
use Illuminate\Support\Facades\Auth;


class profileController extends Controller
{
    public function index(){
        $iduser = Auth::id();

        $detailProfile = Profile::where('user_id',$iduser)->first();

        return view('profile.index', ['detailProfile' => $detailProfile]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'bio' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $profile = Profile::find($id);

        $profile->nama = $request->name;
        $profile->bio = $request->bio;
        $profile->tanggal_lahir = $request->tanggal_lahir;
        $profile->alamat = $request->alamat;

        $profile->save();

        return redirect('/profile');

    }
}
