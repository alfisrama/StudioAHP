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
            $bkelengkapan_alat  = $bobot->kelengkapan_alat;
            $bkualitas_alat     = $bobot->kualitas_alat;
            $bkualitas_ruangan  = $bobot->kualitas_ruangan;
            $bharga             = $bobot->harga;
            $bpelayanan         = $bobot->pelayanan;
            $bfasilitas         = $bobot->fasilitas;
            $bwaktu_operasional = $bobot->waktu_operasional;  
            $bsuasana_studio    = $bobot->suasana_studio;   
        }
        view()->share('bkelengkapan_alat',  $bkelengkapan_alat);
        view()->share('bkualitas_alat',     $bkualitas_alat);
        view()->share('bkualitas_ruangan',  $bkualitas_ruangan);
        view()->share('bharga',             $bharga);
        view()->share('bpelayanan',         $bpelayanan);
        view()->share('bfasilitas',         $bfasilitas);
        view()->share('bwaktu_operasional', $bwaktu_operasional);
        view()->share('bsuasana_studio',    $bsuasana_studio);    

        //Matriks perbandingan antar alternatif terhadap masing-masing kriteria
        $sumKelengkapan_alat  = $konversi->sum('kelengkapan_alat');
        $sumKualitas_alat     = $konversi->sum('kualitas_alat');
        $sumKualitas_ruangan  = $konversi->sum('kualitas_ruangan');
        $sumHarga             = $konversi->sum('harga');
        $sumPelayanan         = $konversi->sum('pelayanan');
        $sumFasilitas         = $konversi->sum('fasilitas');
        $sumWaktu_operasional = $konversi->sum('waktu_operasional');  
        $sumSuasana_studio    = $konversi->sum('suasana_studio');

        view()->share('sumKelengkapan_alat',  $sumKelengkapan_alat);
        view()->share('sumKualitas_alat',     $sumKualitas_alat);
        view()->share('sumKualitas_ruangan',  $sumKualitas_ruangan);
        view()->share('sumHarga',             $sumHarga);
        view()->share('sumPelayanan',         $sumPelayanan);
        view()->share('sumFasilitas',         $sumFasilitas);
        view()->share('sumWaktu_operasional', $sumWaktu_operasional);
        view()->share('sumSuasana_studio',    $sumSuasana_studio);        

        // perbandingan antar alternatif
        
        $konversi = Konversi::all();
        foreach ($konversi as $konversi) {
            $aNama_studio       = $konversi->studio->nama_studio;
            $aKelengkapan_alat  = ($konversi->kelengkapan_alat)/$sumKelengkapan_alat;
            $aKualitas_alat     = ($konversi->kualitas_alat)/$sumKualitas_alat;
            $aKualitas_ruangan  = ($konversi->kualitas_ruangan)/$sumKualitas_ruangan;
            $aHarga             = ($konversi->harga)/$sumHarga;
            $aPelayanan         = ($konversi->pelayanan)/$sumPelayanan;
            $aFasilitas         = ($konversi->fasilitas)/$sumFasilitas;
            $aWaktu_operasional = ($konversi->waktu_operasional)/$sumWaktu_operasional;
            $aSuasana_studio    = ($konversi->suasana_studio)/$sumSuasana_studio;
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
