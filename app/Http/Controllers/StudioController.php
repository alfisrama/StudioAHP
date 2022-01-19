<?php

namespace App\Http\Controllers;

use App\Studio;
use App\Konversi;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('adminOnly');
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
        $konversi->pelayanan         = $request->input('pelayanan');
        $konversi->harga             = $request->input('konversi_harga');
        $konversi->fasilitas_alat    = $request->input('konversi_fasilitas_alat');
        $konversi->waktu_operasional = $request->input('waktu_operasional');
        $konversi->fasilitas_rekaman = $request->input('konversi_fasilitas_rekaman');
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
        
        $studio->pelayanan                  = $studio->konversi->pelayanan;
        $studio->konversi_pelayanan         = $studio->konversi->pelayanan;
        $studio->konversi_harga             = $studio->konversi->harga;
        $studio->konversi_fasilitas_alat    = $studio->konversi->fasilitas_alat;
        $studio->waktu_operasional          = $studio->konversi->waktu_operasional;
        $studio->konversi_fasilitas_rekaman = $studio->konversi->fasilitas_rekaman;
        
        return view('studio.edit', compact('studio', 'halaman'));
    }

    public function update(Request $request, Studio $studio)
    {
        $input = $request->all();

        // Update studio
        $studio->update($input);

        // Update konversi
        $konversi = $studio->konversi;
        $konversi->harga             = $request->input('konversi_harga');
        $konversi->pelayanan         = $request->input('pelayanan');
        $konversi->fasilitas_alat    = $request->input('konversi_fasilitas_alat');
        $konversi->waktu_operasional = $request->input('waktu_operasional');
        $konversi->fasilitas_rekaman = $request->input('konversi_fasilitas_rekaman');
        $studio->konversi()->save($konversi);

        return redirect('studio')->with('sukses', 'Data studio berhasil diubah');
    }

    public function destroy(Studio $studio)
    {
        $studio->delete();
        return redirect('studio')->with('sukses', 'Data studio berhasil dihapus');
    }

    
}
