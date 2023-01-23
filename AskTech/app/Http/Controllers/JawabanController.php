<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\jawaban;


class JawabanController extends Controller
{
    public function simpan(Request $request, $id){
        $request->validate([
            'isi_jawaban' => 'required',
            'foto' =>'image|mimes:png,jpg,jpeg'
        ]);

        $idUser = Auth::id();
        
        $fileName = time().'.'.$request->foto->extension();  
        $request->foto->move(public_path('gambar'), $fileName);
 
        $jawaban = new jawaban;
        $jawaban->isi_jawaban = $request['isi_jawaban'];
        // bagian foto beda             
        $jawaban->foto = $fileName;

        $jawaban->pertanyaan_id = $id;
        $jawaban->user_id = $idUser;
 
        $jawaban->save();

        return redirect('/dummy/'.$id);

    }
}
