<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  {{-- Font Google --}}
  <link href="https://fonts.googleapis.com/css2?family=Karla&family=Poppins:wght@600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <link rel="stylesheet" href="css/login.css">
  <title>Cakrawala Trans | {{ $title }}</title>
</head>
<body>
  <div class="lcontainer">
    <p>Mari bergabung bersama Kami untuk  <br> solusi Terbaik Perjalanan Anda!</p>
    <img src="asset/t_login.png" alt="">
    <div class="card-login">
      <h1>Halaman Register</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="nama"required>
          <span></span>
          <label>Nama Lengkap</label>
        </div>
        <div class="txt_field">
          <input type="text" name="email"required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="number" name="number" required>
          <span></span>
          <label>No Tlp</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pass" required>
          <span></span>
          <label>Kata Sandi</label>
        </div>
          <input type="submit" value="Daftar">
          <div class="atau">
            Atau
          </div>
          <a href="#" class="btn"><i class="fa-brands fa-google"></i> Masuk Dengan Google</a>
          <div class="signup">
            Sudah punya akun? <a href="/login">Masuk Sekarang</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>