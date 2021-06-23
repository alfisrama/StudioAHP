<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct() {
        // $this->middleware('auth');
        // $this->middleware('adminOnly', ['except' => ['edit', 'update']]);
    }

    public function index()
    {
        $halaman = 'Data User';
        $user = User::all();
        return view('user.index', compact('user', 'halaman'));
    }

    public function create()
    {
        $halaman = 'Tambah Data User';
        return view('user.create', compact('halaman'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validasi = Validator::make($data, [
            'name'         => 'required|max:255',
            'no_identitas' => 'required|string|max:17|unique:users',
            'telefon'      => 'required|string|unique:users',
            'email'        => 'required|email|max:100|unique:users',
            'password'     => 'required|confirmed|min:6',
            'level'        => 'required|in:admin,operator,customer',
            'izin'         => 'sometimes',
        ]);

        if ($validasi->fails()) {
            return redirect('user/create')
                    ->withInput()
                    ->withErrors($validasi);
        }

        // Hash password.
        $data['password'] = bcrypt($data['password']);

        User::create($data);
        
        return redirect('user')->with('sukses','Data user berhasil ditambahkan');
    }

    public function show($id)
    {
        return redirect('user');
    }

    public function edit($id)
    {
        $halaman = 'Ubah Data User';
        // if(Auth::user()->level == 'admin'){
        //     $user = User::findOrFail($id);
        //     return view('user.edit', compact('user', 'halaman'));
        // }else{
        //     if($id == Auth::user()->id){
        //         $user = User::findOrFail($id);
        //         return view('user.edit', compact('user', 'halaman'));    
        //     }else{
        //         return redirect('/');
        //     }
        // }
        $user = User::findOrFail($id);
        return view('user.edit', compact('user', 'halaman'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();
        
        // if(Auth::user()->level == 'admin'){
        //     $level = 'required|in:admin,operator';
        // }else{
        //     $level = '';
        // }
        
        $validasi = Validator::make($data, [
            'name'         => 'required|max:255',
            'no_identitas' => 'required|string|unique:users,no_identitas,' . $data['id'],
            'telefon'      => 'required|string|unique:users,telefon,'  . $data['id'],
            'email'        => 'required|email|max:100|unique:users,email,' . $data['id'],
            'password'     => 'sometimes|nullable|confirmed|min:6',
            'level'        => 'sometimes',
            'izin'         => 'sometimes',
        ]);

        if ($validasi->fails()) {
            return redirect("user/$id/edit")
                    ->withErrors($validasi)
                    ->withInput();
        }

        if ($request->filled('password')) {
            // Hash password.
            $data['password'] = bcrypt($data['password']);
        }else{
            // Hapus password (password tidak diupdate).
            $data = array_except($data, ['password']);
        }

        $user->update($data);

        return redirect('user')->with('sukses','Data user berhasil dirubah');
    }

    protected function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('user')->with('sukses','Data user berhasil dihapus');
    }
}
