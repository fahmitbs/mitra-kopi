@extends('layout.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">

        @if (session()->has('Sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('Sukses') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

    <main class="form-signin">
        <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login Disini</h1>
        <form action="/login" method="POST">
            @csrf
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
            <label for="email">Email</label>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating mt-2">
            <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
                <div class="invalid-feedback">
                    Tolong Masukkan Password Anda!
                </div>
            @enderror
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
        <small class="d-block text-center mt-3"> Belum Mendaftar? Daftar dulu <a href="/register">Disini</a></small>
    </main>
    </div>
</div>
@endsection
