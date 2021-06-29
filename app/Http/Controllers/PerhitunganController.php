<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('adminOnly');
    }

    public function index()
    {
        $halaman = 'Perhitungan AHP';
        return view('perhitungan.index', compact('halaman'));
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
