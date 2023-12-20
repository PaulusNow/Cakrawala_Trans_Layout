@extends('layouts.main')
@section('container')
    <link rel="stylesheet" href="css/order.css">

    @include('partials.subnavbar')

    <div class="topcontent">
      <form>
        <label>Pilih Pengemudi</label>
        <select name="driver" id="driver">
          <option value="">Test 1</option>
          <option value="">Test 2</option>
          <option value="">Test 3</option>
        </select>
        <label>Alamat Lengkap</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <label>No Handphone</label>
        <input type="number" id="nohp" name="nohp" placeholder="No. Handphone" ><br>
        <label>Keterangan</label>
        <textarea name="" id="" cols="60" rows="10"></textarea>
        <input type="submit" value="Lanjut Pembayaran">
      </form>
    </div>
@endsection
