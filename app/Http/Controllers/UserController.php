<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('adminOnly', ['except' => ['edit', 'update']]);
    }
    
    protected function index()
    {
        $halaman = 'User';
        $user = User::all();
        return view('user.index', compact('user', 'halaman'));
    }

    protected function create()
    {
        $halaman = 'User';
        return view('user.create', compact('halaman'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validasi = Validator::make($data, [
            'name'     => 'required|max:255',
            'telefon'  => 'required|unique:users',
            'email'    => 'required|email|max:100|unique:users',
            'password' => 'required|confirmed|min:6',
            'level'    => 'required|in:admin,operator,customer'
        ]);

        if ($validasi->fails()) {
            return redirect('user/create')
                    ->withInput()
                    ->withErrors($validasi);
        }

        // Hash password.
        $data['password'] = bcrypt($data['password']);

        User::create($data);
        
        return redirect('user')->with('sukses','User berhasil ditambahkan');
    }

    public function show($id)
    {
        $halaman = 'User';
        return redirect('user', compact('halaman'));
    }

    protected function edit($id)
    {
        $halaman = 'User';
        if(Auth::user()->level == 'admin'){
            $user = User::findOrFail($id);
            return view('user.edit', compact('user', 'halaman'));
        }else{
            if($id == Auth::user()->id){
                $user = User::findOrFail($id);
                return view('user.edit', compact('user', 'halaman'));    
            }else{
                return redirect('/');
            }
        }
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();
        
        if(Auth::user()->level == 'admin'){
        $level = 'required|in:admin,operator,customer';
        }else{
            $level = '';
        }
        
        $validasi = Validator::make($data, [
            'name'     => 'required|max:255',
            'telefon'  => 'required|unique:users,telefon,' . $data['id'],
            'email'    => 'required|email|max:100|unique:users,email,' . $data['id'],
            'password' => 'sometimes|nullable|confirmed|min:6',
            'level'    => 'sometimes'
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
            $data = Arr::except($data, ['password']);
        }

        $user->update($data);

        return redirect('user')->with('sukses','Berhasil dirubah');
    }

    protected function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('user')->with('sukses','User berhasil dihapus');
    }
}
