<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function profil()
    {
        $user = Auth()->user('id');
        // dd($user);
        return view('mitra.profil',compact('user'));
    }

    public function update_profil(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $name = $request->nama;
        $alamat = $request->alamat;
        $nohp = $request->nohp;
        $pekerjaan = $request->pekerjaan;
        $email = $request->email;
        $password = $request->password;
        if ($password != "") {
            $user->password = bcrypt($password);
        }
            $user->nama = $name;
            $user->alamat = $alamat;
            $user->nohp = $nohp;
            $user->pekerjaan = $pekerjaan;
            $user->email = $email;
            $user->save();

        return redirect()->back();
    }

    public function buat_produk()
    {
        return view('mitra.produk');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
