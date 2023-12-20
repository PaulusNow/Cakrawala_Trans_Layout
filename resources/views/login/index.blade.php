@extends('layouts.main')

@section('container')
  <link href="https://fonts.googleapis.com/css2?family=Karla&family=Poppins:wght@600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <link rel="stylesheet" href="css/login.css">

<div class="lcontainer">
    <p>Mari bergabung bersama Kami untuk  <br> solusi Terbaik Perjalanan Anda!</p>
    <img src="asset/t_login.png" alt="">
    <div class="card-login">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif 
      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif 
      <h1>Halaman Login</h1>
      <form action="/login" method="post">
        @csrf
        <div class="form-floating">
          <input type="email" class="form-control rounded-top @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masukan Email" value="{{ old('email') }}" autofocus required>
          <label for="email">Email</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom" name="password" id="password" placeholder="Masukan Password" value="{{ old('password') }}" required>
          <label for="password">Kata Sandi</label>
        </div>
          <div class="forget mt-3">Lupa Sandi?</div>
          <button type="submit" class="btn btn-outline-dark" style="width: 73%">Masuk</button>
        </form>
        <div class="atau">
          Atau
        </div>
       <button type="submit" class="btn btn-outline-dark" style="width: 65%"><i class="fa-brands fa-google"></i> Masuk Dengan Google</button>
        <div class="signup">
          Tidak punya akun? <a href="/register">Buat Sekarang</a>
        </div>
      </div>
    </div>
  </div>
@endsection