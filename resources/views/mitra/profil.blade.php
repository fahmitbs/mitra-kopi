@extends('mitra.layouts.main')

@section('container')
<div class="container" style="margin-top: 50px">
    <h1>Data Profil</h1>
    <hr />
    
    <form class="form-horizontal" action="{{ route('update_profil', $user->id) }}" method="post">
    @csrf
        <div class="form-group">
            <label class="col-sm-2 control-label">NAMA LENGKAP</label>
            <div class="col-sm-4">
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="{{$user->nama}}" value="{{$user->nama}}">
                <div class="invalid-feedback">
                    Tolong Masukkan Nama Lengkap Anda!
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">ALAMAT</label>
            <div class="col-sm-4">
                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="{{$user->alamat}}" value="{{$user->alamat}}">
                <div class="invalid-feedback">
                    Tolong Masukkan Alamat Anda!
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">NO HP</label>
            <div class="col-sm-4">
                <input type="text" name="nohp" class="form-control @error('nohp') is-invalid @enderror" placeholder="{{$user->nohp}}" value="{{$user->nohp}}">
                <div class="invalid-feedback">
                    Tolong Masukkan Nomor HP Anda!
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">PEKERJAAN</label>
            <div class="col-sm-4">
                <input type="text" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" placeholder="{{$user->pekerjaan}}" value="{{$user->pekerjaan}}">
                <div class="invalid-feedback">
                    Tolong Masukkan Profesi Anda saat ini!
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">EMAIL</label>
            <div class="col-sm-4">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{$user->email}}" value="{{$user->email}}">
                <div class="invalid-feedback">
                    Tolong Masukkan Email Anda!
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">PASSWORD</label>
            <div class="col-sm-4">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="">
                @error('password')
                <div class="invalid-feedback">
                    Tolong Masukkan Password Anda!
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-8">
                <button type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </div>
    </form>
</div>
@endsection
