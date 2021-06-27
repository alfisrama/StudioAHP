<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Studio;
use DB;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct() {
        // $this->middleware('auth');
        // $this->middleware('adminOnly', ['except' => ['edit', 'update']]);
    }

    public function index()
    {   
        $halaman = 'Data Booking';
        $booking = Booking::all();
        return view('booking.index', compact('booking', 'halaman'));
    }

    public function create()
    {
        $halaman = 'Tambah Data Booking';
        return view('booking.create', compact('halaman'));
    }

    public function store(Request $request, Booking $booking)
    {
        // $lra->id_users      = Auth::user()->id;
        $id_studio = $request->id_studio;
        $ruangan   = $request->ruangan;
        $tanggal   = $request->tanggal;
        $start     = $request->start;
        $durasi    = $request->durasi;
        $end       = date("H:i", strtotime($start. '+'.$durasi.'hours'));
        
        // $query = Lra::where('tanggal', $tanggal);
        $query = Booking::where('id_studio', $id_studio)
                    ->where('ruangan', $ruangan)
                    ->where('tanggal', $tanggal)
                    ->whereBetween('start', [$start, $end])
                    ->whereBetween('end', [$start, $end])
                    ->exists();
        
        // $exists = Booking::whereBetween('start', [$start, $end])->whereBetween('end', [$start, $end])->exists();

        
        // $booking->id_studio = $id_studio;
        // $booking->id_users  = $request->id_users;
        // $booking->ruangan   = $ruangan;
        // $booking->tanggal   = $tanggal;
        // $booking->start     = $start;
        // $booking->durasi    = $durasi;
        // $booking->end       = $end;
        // $booking->harga     = $request->harga;
        // $booking->save();
        
        dd($query);
        // return redirect('booking')->with('sukses', 'Data booking berhasil ditambah');
    }

    public function show(Booking $booking)
    {
        //
    }

    public function edit(Booking $booking)
    {
        $halaman = 'Tambah Data Booking';
        return view('booking.edit', compact('halaman', 'booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        return redirect('booking')->with('sukses', 'Data booking berhasil diubah');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect('booking')->with('sukses', 'Booking berhasil dibatalkan');
    }

    public function getData($id)
    {
        $studio = Studio::all();
        $result = $studio->where('id', $id);

        $harga   = $result->pluck('harga', $id);
        $ruangan = $result->pluck('jumlah_ruangan', $id);
        $buka    = $result->pluck('buka', $id);
        $tutup   = $result->pluck('tutup', $id);
        return response()->json([
            'harga'   => $harga,
            'ruangan' => $ruangan,
            'buka'    => $buka,
            'tutup'   => $tutup,
        ]);
    }
}