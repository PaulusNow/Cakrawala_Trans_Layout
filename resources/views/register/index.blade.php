@extends('layouts.main')

@section('container')
{{-- Font Google --}}
  <link href="https://fonts.googleapis.com/css2?family=Karla&family=Poppins:wght@600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <link rel="stylesheet" href="css/login.css">

<div class="lcontainer">
    <p>Mari bergabung bersama Kami untuk <br> solusi Terbaik Perjalanan Anda!</p>
    <img src="asset/t_login.png" alt="">
    <div class="card-login">
      <h1>Halaman Register</h1>
      <form action="/register" method="post">
        @csrf
        <div class="form-floating">
          <input type="text" class="form-control rounded-top @error ('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukan Nama Lengkap" value="{{ old('nama') }}">
          <label for="nama">Nama Lengkap</label>
          @error ('nama')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" class="form-control @error ('email') is-invalid @enderror" name="email" id="email" placeholder="Masukkan Email" value="{{ old('email') }}">
          <label for="email">Email</label>
          @error ('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="number" class="form-control @error ('notlp') is-invalid @enderror" name="notlp" id="notlp" placeholder="Masukkan No Telepon" value="{{ old('notlp') }}">
          <label for="notlp">No Telepon</label>
          @error ('notlp')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom @error ('password') is-invalid @enderror" name="password" id="password" placeholder="Masukkan Kata Sandi">
          <label for="password">Kata Sandi</label>
          @error ('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
          <button type="submit" class="btn btn-outline-dark" style="width: 73%">Daftar</button>
        </form>
        <div class="atau">
          Atau
        </div>
        <button type="submit" class="btn btn-outline-dark" style="width: 65%"><i class="fa-brands fa-google"></i> Masuk Dengan Google</button>
        <div class="signup">
          Sudah punya akun? <a href="/login">Masuk Sekarang</a>
        </div>
        </div>
    </div>
  </div>
@endsection