<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Studio;
use App\Room;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        // $this->middleware('adminOnly', ['except' => ['edit', 'update']]);
    }

    public function index()
    {   
        $halaman = 'Data Booking';
        $opr = Studio::where('id_users', Auth::user()->id)->pluck('id')->first();
        if(Auth::user()->level == 'admin'){
            $booking = Booking::all();
        }else if (Auth::user()->level == 'operator') {
            $booking = Booking::all()->where('id_studio', $opr);
        }else{
            $booking = Booking::all()->where('id_users', Auth::user()->id);
        }
        return view('booking.index', compact('booking', 'halaman'));
    }

    public function create()
    {
        $halaman = 'Tambah Data Booking';
        return view('booking.create', compact('halaman'));
    }

    public function store(Request $request, Booking $booking)
    {
        $id_studio = $request->id_studio;
        $ruangan   = $request->ruangan;
        $tanggal   = $request->tanggal;
        $start     = $request->start;
        $durasi    = $request->durasi;
        $end       = date("H:i", strtotime($start. '+'.$durasi.'hours'));
        $endHour   = date("H:i", strtotime($start. '+1 hours'));
        
        $query = room::
                        where('id_studio', $id_studio)
                        ->where('ruangan', $ruangan)
                        ->where('tanggal', $tanggal)
                        ->whereBetween('start', [$start, $end])
                        ->WhereBetween('end', [$start, $end])
                        ->exists();

        if ($query == true) {
            return back()->withInput()->with('failBook', 'Silahkan pilih tanggal/ruangan/jam lainnya!');
        }else {
            $booking->id_studio = $id_studio;
            $booking->id_users  = Auth::user()->id;
            $booking->ruangan   = $ruangan;
            $booking->tanggal   = $tanggal;
            $booking->start     = $start;
            $booking->durasi    = $durasi;
            $booking->end       = $end;
            $booking->harga     = $request->harga;
            $booking->save();
            
            for ($i=0; $i < $durasi ; $i++) { 
                //save room
                $room = new Room;
                $room->id_studio = $id_studio;
                $room->ruangan   = $ruangan;
                $room->tanggal   = $tanggal;
                $room->start     = date("H:i", strtotime($start. '+'.$i.'hours'));
                $room->end       = date("H:i", strtotime($endHour. '+'.$i.'hours'));
                $booking->room()->save($room);
            }

            // $lra->id_users      = Auth::user()->id; 
            // $exists = Booking::whereBetween('start', [$start, $end])->whereBetween('end', [$start, $end])->exists();
            // dd($query);
            return redirect('booking')->with('sukses', 'Booking berhasil');
        }
    }

    public function show(Booking $booking)
    {
        //
    }

    public function edit(Booking $booking)
    {
        // $halaman = 'Tambah Data Booking';
        // return view('booking.edit', compact('halaman', 'booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        // return redirect('booking')->with('sukses', 'Data booking berhasil diubah');
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