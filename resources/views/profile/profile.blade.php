@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="/css/profile.css">
<div class="container_profile">
    <div class="col_photo">
        <div class="box_photo">
            <div class="photo_container">
                <!-- nanti diganti jadi image -->
                <div class="shape_img">

                </div>

                <button class="btn_profile">
                    Pilih Foto
                </button>

                <span class="txt_profile">
                    Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG
                </span>
            </div>

        </div>
    </div>
    <div class="col_profile">
        <div class="heading">
            <span class="col_profile-heading">Biodata</span>
        </div>
        <div class="profile-section">
            <div class="profile-info">
                <div class="info-row">
                    <span class="label">Nama</span>
                    <span class="value">Paulus Wiliam</span>
                </div>
                <div class="info-row">
                    <span class="label">Tanggal Lahir</span>
                    <span class="value">10 Juli 2001</span>
                </div>
                <div class="info-row">
                    <span class="label">Jenis Kelamin</span>
                    <span class="value">Pria</span>
                </div>
            </div>
            <div class="profile-info">
                <div class="info-row">
                    <span class="label">Email</span>
                    <span class="value">paulwiliam70@gmail.com</span>
                </div>
                <div class="info-row">
                    <span class="label">Nomor HP</span>
                    <span class="value">62895377213327</span>
                </div>
            </div>

            <div class="btn_container">
                <button>Ubah Kata Sandi</button>
                <button>Ubah Biodata</button>
            </div>
        </div>
    </div>
</div>

<!-- <script src="/js/mobil.js"></script> -->
@endsection