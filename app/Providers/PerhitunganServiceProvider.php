<?php

namespace App\Providers;

use App\Bobot;
use App\Konversi;
use Illuminate\Support\ServiceProvider;

class PerhitunganServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot(Konversi $konversi, Bobot $bobot)
    {
        view()->share('konversiAlternatif', Konversi::all());
        view()->share('konversiPerbandingan', Konversi::all());
        view()->share('konversiHasil', Konversi::all());

        //bobot
        $bobot = Bobot::all();
        foreach ($bobot as $bobot) {
            $bpelayanan         = $bobot->pelayanan;
            $bharga             = $bobot->harga;
            $bfasilitas_alat    = $bobot->fasilitas_alat;
            $bwaktu_operasional = $bobot->waktu_operasional;  
            $bfasilitas_rekaman    = $bobot->fasilitas_rekaman;   
        }
        view()->share('bpelayanan',         $bpelayanan);
        view()->share('bharga',             $bharga);
        view()->share('bfasilitas_alat',    $bfasilitas_alat);
        view()->share('bwaktu_operasional', $bwaktu_operasional);
        view()->share('bfasilitas_rekaman', $bfasilitas_rekaman);

        //Matriks perbandingan antar alternatif terhadap masing-masing kriteria
        $sumPelayanan         = $konversi->sum('pelayanan');
        $sumHarga             = $konversi->sum('harga');
        $sumFasilitas_alat    = $konversi->sum('fasilitas_alat');
        $sumWaktu_operasional = $konversi->sum('waktu_operasional');  
        $sumFasilitas_rekaman = $konversi->sum('fasilitas_rekaman');

        view()->share('sumPelayanan',         $sumPelayanan);
        view()->share('sumHarga',             $sumHarga);
        view()->share('sumFasilitas_alat',    $sumFasilitas_alat);
        view()->share('sumWaktu_operasional', $sumWaktu_operasional);
        view()->share('sumFasilitas_rekaman', $sumFasilitas_rekaman);        

        // perbandingan antar alternatif
        
        $konversi = Konversi::all();
        foreach ($konversi as $konversi) {
            $aNama_studio       = $konversi->studio->nama_studio;
            $aPelayanan         = ($konversi->pelayanan)/$sumPelayanan;
            $aHarga             = ($konversi->harga)/$sumHarga;
            $aFasilitas_alat    = ($konversi->fasilitas_alat)/$sumFasilitas_alat;
            $aWaktu_operasional = ($konversi->waktu_operasional)/$sumWaktu_operasional;
            $aFasilitas_rekaman = ($konversi->fasilitas_rekaman)/$sumFasilitas_rekaman;
        }


        view()->share('nama_studio',       $aNama_studio);
        // view()->share('aNama_studio',       $aNama_studio);
        // view()->share('aKelengkapan_alat',  $aKelengkapan_alat);
        // view()->share('aKualitas_alat',     $aKualitas_alat);
        // view()->share('aKualitas_ruangan',  $aKualitas_ruangan);
        // view()->share('aHarga',             $aHarga);
        // view()->share('aPelayanan',         $aPelayanan);
        // view()->share('aFasilitas',         $aFasilitas);
        // view()->share('aWaktu_operasional', $aWaktu_operasional);
        // view()->share('aSuasana_studio',    $aSuasana_studio);
        
    }
}
