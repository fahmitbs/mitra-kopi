@extends('layout.main')

@section('container')
<div class="container" style="margin-top: 50px">
    <h1 class="h3 mb-3 fw-normal text-center">Form Registrasi</h1>
    <hr />
    <main class="form-registration">
        <form class="form-horizontal" method="POST" action="/register">
        @csrf
            <div class="form-group">
                <label class="col-sm-2 control-label">NAMA LENGKAP</label>
                <div class="col-sm-4">
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Fahmi" value="{{ old('nama')  }}" required>
                    <div class="invalid-feedback">
                        Tolong Masukkan Nama Lengkap Anda!
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">ALAMAT</label>
                <div class="col-sm-4">
                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Jl Teuku Umar" value="{{ old('alamat')  }}" required>
                    <div class="invalid-feedback">
                        Tolong Masukkan Alamat Anda!
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">NO HP</label>
                <div class="col-sm-4">
                    <input type="text" name="nohp" class="form-control @error('nohp') is-invalid @enderror" placeholder="085 . . ." value="{{ old('nohp')  }}" required>
                    <div class="invalid-feedback">
                        Tolong Masukkan Nomor HP Anda!
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">PEKERJAAN</label>
                <div class="col-sm-4">
                    <input type="text" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" placeholder="Karyawan" value="{{ old('pekerjaan')  }}" required>
                    <div class="invalid-feedback">
                        Tolong Masukkan Profesi Anda saat ini!
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">EMAIL</label>
                <div class="col-sm-4">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Fahmi@gmail.com" value="{{ old('email')  }}" required>
                    <div class="invalid-feedback">
                        Tolong Masukkan Email Anda!
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">PASSWORD</label>
                <div class="col-sm-4">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
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
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
@endsection
