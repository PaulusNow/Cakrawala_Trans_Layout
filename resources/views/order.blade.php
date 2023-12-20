@extends('layouts.main')
@section('container')
    <link rel="stylesheet" href="css/order.css">

    <div class="cpesan">form pemesanan kendaraan lepas kunci/dengan driver</div>
    <div class="subcpesan">
      <ul class="confirm">
        <li class="activee">Pilih dan Jadwal Kendaraan</li>
        <li>Konfirmasi Pesanan</li>
        <li>Pembayaran</li>
      </ul>
    </div>

    <div class="topcontent">
      <p>*pemesanan dihitung dari jam dan tanggal dibuat (24jam sewa) <br> <span> Layanan Konsumen <a href="/bantuan">Pusat Bantuan</a> </span></p>
      <form method="post">
        <label>Tanggal Sewa</label>
        <input type="text" id="tanggal_sewa" name="tanggal_sewa" placeholder="Pilih Tanggal Sewa" onfocus="this.type='date'" onblur="this.type='date'"><br>
        <label>Jam Sewa</label>
        <input type="text" id="jam" name="jam" placeholder="Pilih Jam" onfocus="this.type='time'" onblur="this.type='text'"><br>
        <label>Lama Sewa</label>
        <input type="text" id="lama_sewa" name="lama_sewa" placeholder="Lama Sewa" onfocus="this.type='date'" onblur="this.type='date'"><br>
        <label class="ftujuan">Tujuan</label>
        <select name="tujuan" id="tujuan">
          <option value="">Test 1</option>
          <option value="">Test 2</option>
          <option value="">Test 3</option>
        </select>
        <input type="submit" value="Lanjutkan">
      </form>
    </div>

    <div class="brandcontent">
      <div class="brandname">
        <p>Toyota All New Innova 2023 Manual</p>
      </div>
      <div class="brandimg">
        <img src="asset/innova 3.png" alt="...">
        <div class="subbrandtext1">
          <p>Lengkapi pesananmu untuk lanjut step berikutnya</p>
        </div>
        <div class="subbrandtext2">
          <p>Sebentar lagi pesananmu akan segera diproses</p>
        </div>
      </div>
    </div>
@endsection
