<?php

namespace App\Http\Controllers;

use App\Studio;
use App\Konversi;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    public function __construct() {
        // $this->middleware('auth');
        // $this->middleware('adminOnly', ['except' => ['edit', 'update']]);
    }

    public function index()
    {   
        $halaman = 'Data Studio';
        $studio = Studio::all();
        return view('studio.index', compact('studio', 'halaman'));
    }

    public function create()
    {
        $halaman = 'Tambah Data Studio';
        return view('studio.create', compact('halaman'));
    }

    public function store(Request $request, Studio $studio)
    {
        $input = $request->all();
        $studio = Studio::create($input);
        
        //save konversi
        $konversi = new Konversi;
        $konversi->kelengkapan_alat  = $request->input('kelengkapan_alat');
        $konversi->kualitas_alat     = $request->input('kualitas_alat');
        $konversi->kualitas_ruangan  = $request->input('kualitas_ruangan');
        $konversi->harga             = $request->input('konversi_harga');
        $konversi->pelayanan         = $request->input('pelayanan');
        $konversi->fasilitas         = $request->input('konversi_fasilitas');
        $konversi->waktu_operasional = $request->input('waktu_operasional');
        $konversi->suasana_studio    = $request->input('suasana_studio');     
        $studio->konversi()->save($konversi);

        return redirect('studio')->with('sukses', 'Data studio berhasil ditambah');
    }

    public function show(Studio $studio)
    {
        //
    }

    public function edit(Studio $studio)
    {
        $halaman = 'Ubah Data Studio';
        
        // get konversi
        $studio->kelengkapan_alat   = $studio->konversi->kelengkapan_alat;
        $studio->kualitas_alat      = $studio->konversi->kualitas_alat;
        $studio->kualitas_ruangan   = $studio->konversi->kualitas_ruangan;
        $studio->konversi_harga     = $studio->konversi->harga;
        $studio->pelayanan          = $studio->konversi->pelayanan;
        $studio->konversi_fasilitas = $studio->konversi->fasilitas;
        $studio->waktu_operasional  = $studio->konversi->waktu_operasional;
        $studio->suasana_studio     = $studio->konversi->suasana_studio;
        
        return view('studio.edit', compact('studio', 'halaman'));
    }

    public function update(Request $request, Studio $studio)
    {
        $input = $request->all();

        // Update studio
        $studio->update($input);

        // Update konversi
        $konversi = $studio->konversi;
        $konversi->kelengkapan_alat  = $request->input('kelengkapan_alat');
        $konversi->kualitas_alat     = $request->input('kualitas_alat');
        $konversi->kualitas_ruangan  = $request->input('kualitas_ruangan');
        $konversi->harga             = $request->input('konversi_harga');
        $konversi->pelayanan         = $request->input('pelayanan');
        $konversi->fasilitas         = $request->input('konversi_fasilitas');
        $konversi->waktu_operasional = $request->input('waktu_operasional');
        $konversi->suasana_studio    = $request->input('suasana_studio');     
        $studio->konversi()->save($konversi);

        return redirect('studio')->with('sukses', 'Data studio berhasil diubah');
    }

    public function destroy(Studio $studio)
    {
        $studio->delete();
        return redirect('studio')->with('sukses', 'Data studio berhasil dihapus');
    }

    
}
