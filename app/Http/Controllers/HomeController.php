<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Studio;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
        $this->middleware('adminOnly', ['except' => ['index']]);
    }

    public function index()
    {
        $halaman = 'Studio AHP';
        return view('websites.index', compact('halaman'));
    }

    public function dashboard()
    {
        $halaman = 'Dashboard';
        $studio = Studio::all()->count();
        $users = User::where('level', 'customer')->count();
        $booking = Booking::all()->count();
        return view('home', compact('halaman', 'studio', 'users', 'booking'));
    }
}
