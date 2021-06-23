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
        $studio = Studio::all();
        $halaman = 'Tambah Data Booking';
        return view('booking.create', compact('halaman', 'studio'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Booking $booking)
    {
        //
    }

    public function edit(Booking $booking)
    {
        //
    }

    public function update(Request $request, Booking $booking)
    {
        //
    }

    public function destroy(Booking $booking)
    {
        //
    }

    public function getData($id)
    {
      $studio = Studio::all();
      $result = $studio->where('id', $id);
      return response()->json($result);
    }
}
