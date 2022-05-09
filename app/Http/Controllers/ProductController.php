<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\coffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_product()
    {
        //
        $list = coffee::where('pembukuan','false')->get();
        return view('mitra.lihat_produk',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        //
        $jenis = $request->jenis;
        $gambar = $request->images;
        $stok = $request->stok;
        $harga = $request->harga;
        $tanggal = $request->date;
        $pembukuan="false";
        $user = User::where('id', $id)->first();
        // dd($user->id);
        //
        if ($gambar == null) {
            // dd($jenis,"ssss");
            $image = "";
        }else{
            $request->validate([
                // dd('dada'),
                // 'gambar' => 'required|file|mimes:jpg,jpeg,png',
            ]);
            // dd($gambar);
            //bagian set nama dan pindah file
            $image = time() . 'i.' . $gambar->extension();
            $gambar->move(storage_path('app/public/coffee'), $image);
        }
        // dd("masuk");
        //
        $article = coffee::create([
            'jenis' => $jenis,
            'pembukuan'=>$pembukuan,
            'image' => $image,
            'stok' => $stok,
            'harga' => $harga,
            'tanggal' => $tanggal,
            'user_id' => $user->id,
        ]);
        //
        return back()
            ->with('success', 'You have successfully file uplaod.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //update
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $data=coffee::where('id',$id)->first();
        return view('mitra.edit_produk',compact('data'));
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
        $id_coffee = coffee::where('id', $id)->first();
        $jenis = $request->jenis;
        $pembukuan = 'false';
        $stok = $request->stok;
        $harga = $request->harga;
        $gambar = $request->image;
        $tanggal = $request->date;
        $user_id = Auth::user('id');
        if ($gambar != "") {
            $request->validate([
                // 'image' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
            ]);
            //bagian set nama dan pindah file
            $image = time() . 'i.' . $gambar->extension();
            $gambar->move(storage_path('app/public/coffee'), $image);
            $id_coffee->image = $image;
        }
            $id_coffee->jenis = $jenis;
            $id_coffee->pembukuan = $pembukuan;
            $id_coffee->stok = $stok;
            $id_coffee->harga = $harga;
            $id_coffee->tanggal = $tanggal;
            $id_coffee->user_id = $user_id->id;
            $id_coffee->save();

            $list = coffee::where('pembukuan','false')->get();
            return view('mitra.lihat_produk',compact('list'));
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
