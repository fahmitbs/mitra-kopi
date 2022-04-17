<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'nohp' => 'required|max:13',
            'pekerjaan' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['role'] = 3;

        User::create($validatedData);

        //$request->session()->flash('Sukses', 'Registrasi Berhasil , Silahkan Login');

        return redirect('/login')->with('Sukses', 'Registrasi Berhasil , Silahkan Login');
    }
}
