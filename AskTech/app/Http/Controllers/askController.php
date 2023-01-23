<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Ask;
use File;

class askController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ask = Ask::get();
        return view('page.dummy', ['ask' => $ask]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.dummy');
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
            'isi_pertanyaan' =>'required',
            'foto' =>'required|image|mimes:png,jpg,jpeg',
            'kategori'  =>'required'
        ]);

        $fileName = time().'.'.$request->foto->extension();  
        $request->foto->move(public_path('gambar'), $fileName);
 
        $ask = new Ask;
        $ask->isi_pertanyaan = $request->isi_pertanyaan;
        // bagian foto beda             
        $ask->foto = $fileName;
        $ask->kategori = $request->kategori;
 
        $ask->save();

        Alert::success('Berhasil', 'Berhasil Menambahkan Pertanyaan');


        return redirect('/dummy');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ask = Ask::find($id);

        return view('page.discuss',['ask'=>$ask]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ask = Ask::find($id);
        
        return view('page.update', ['ask'=>$ask]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'isi_pertanyaan' =>'required',
            'foto' =>'image|mimes:png,jpg,jpeg',
            'kategori'  =>'required'
        ]);

        $ask = Ask::find($id);
        
        if($request->has('foto')){
            $path='gambar/';
            File::delete($path.$ask->foto);

            $fileName = time().'.'.$request->foto->extension();  
            $request->foto->move(public_path('gambar'), $fileName);

            $ask->foto = $fileName;

            $ask->save();
        }

        $ask->isi_pertanyaan = $request['isi_pertanyaan'];
        $ask->kategori = $request['kategori'];
        $ask->save();

        Alert::success('Berhasil', 'Berhasil Update Pertanyaan');


        return redirect('/dummy');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ask = Ask::find($id);

        $path='gambar/';
        File::delete($path.$ask->foto);

        $ask->delete();

        Alert::error('Delete', 'Gambar Dihapus');

        return redirect('/dummy');
    }

    public function pdf(){
        $data = 'Print Jawaban';
        $pdf = Pdf::loadView('page.dummy', compact('$data'));
        return $pdf->download('dummy.pdf');
    }
}
