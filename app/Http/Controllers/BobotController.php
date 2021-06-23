<?php

namespace App\Http\Controllers;

use App\Bobot;
use Illuminate\Http\Request;

class BobotController extends Controller
{
    public function __construct() {
        // $this->middleware('auth');
        // $this->middleware('adminOnly', ['except' => ['edit', 'update']]);
    }
    
    public function index()
    {
        $halaman = 'Bobot Kriteria';
        $bobot = Bobot::all();
        return view('bobot.index', compact('bobot', 'halaman'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Bobot $bobot)
    {
        //
    }

    public function edit(Bobot $bobot)
    {
        //
    }

    public function update(Request $request, Bobot $bobot)
    {
        //
    }

    public function destroy(Bobot $bobot)
    {
        //
    }
}
