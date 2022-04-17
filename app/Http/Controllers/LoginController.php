<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(auth()->user()->role === 0){
                return redirect()->intended('/dashboard');
            } else if(auth()->user()->role === 1){
                return redirect()->intended('/mitra');
            } else if(auth()->user()->role === 2){
                return redirect()->intended('/pelanggan');
            }
        }
        return back()->with('loginError', 'Maaf Anda Gagal melakukan Login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

    }
}
