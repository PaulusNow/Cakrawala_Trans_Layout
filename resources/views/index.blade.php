@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="/css/index.css">
    <!-- Card #1-->
    <div class="container-fluid">
        <div class="row align-items-center" style="margin-left: 50px">
            <div class="col-md-6">
                <h1 class="fheader">Nikmati Pengalaman
                    Perjalanan Terbaik
                    dengan kami</h1>
                <p><span class="fw-bold">CAKRAWALA TRANS</span> menyediakan jasa serta solusi transportasi
                    terbaik untuk pengalaman perjalanan terbaik Anda</p>

                <a href="#selengkapnya" class="btn rounded-pill shadow"
                    style="background-color: #fe8730; width:25%; color:white; font-weight:700">Selengkapnya</a>
            </div>
            <div class="col-md-6">
                <img src="asset/img_card.png" alt="" width="600">
            </div>
        </div>
    </div>
    <!-- End Card #1-->

    <!-- Card #2 -->

    <div class="container d-flex align-items-center justify-content-center p-5" id="selengkapnya">
        <div class="row">
            <div class="col-12 text-center">
                <h1 style="font-size: 2.5rem; font-weight: 900; color:#000ca6">PILIH KENDARAAN BERSAMA KAMI</h1>
                <p style="font-size: 1.5rem; font-weight: normal;">Kami menawarkan beragam layanan dan jenis kendaraan yang
                    dapat disesuaikan dengan kebutuhan Anda, mulai dari sewa kendaraan jangka pendek dan panjang untuk
                    keperluan operasional bisnis hingga sewa mobil harian dengan pengemudi maupun lepas kunci sesuai dengan
                    kebutuhan pribadi Anda</p>
            </div>
        </div>
    </div>
    <!-- End Card #2 -->
    <!-- Card Isi -->

    <div class="container">
        <div class="row mx-auto">
            <div class="col-md-6">
                <h2 class="text-center mb-5">MPV</h2>
                <div class="card text-center">
                    <img src="/asset/mobil1.png" alt="..." class="img-fluid mb-4">
                    <p style="font-size: 16px; font-weight:700">Mobil berjenis MPV yang diproduksi oleh Toyota yang
                        dirancang untuk mampu mengangkut 7 orang penumpang</p>
                    <a href="#" class="btn p-2 mx-auto">Lihat Detail</a>
                </div>
            </div>

            <div class="col-md-6">
                <h2 class="text-center mb-5">TRAVEL</h2>
                <div class="card text-center">
                    <img src="/asset/hiace 3.png" alt="..." class="img-fluid mb-4 mobil2">
                    <p style="font-size: 16px; font-weight:700">Mobil berjenis MPV yang diproduksi oleh Toyota yang
                        dirancang untuk mampu mengangkut 16 orang penumpang</p>
                    <a href="#" class="btn p-2 mx-auto">Lihat Detail</a>
                </div>
            </div>

            <div class="col-md-12 text-center mt-3">
                <a class="btn bmobil">Lihat Semua Mobil &nbsp; &nbsp; <i class="bi bi-arrow-right-circle fw-bold"></i></a>
            </div>
        </div>
    </div>

    {{-- <div class="container d-flex justify-content-between">
  <div class="card text-center border-0 m-3" style="width: 60rem;">
    <h1 class="card-title" style="color: #000ca6; font-weight:700">MPV</h1>
    <img src="asset/mobil1.png" class="img-fluid" alt="...">
    <div class="card-body d-flex flex-column align-items-center">
      <h5 class="card-title">Toyota</h5>
      <p class="card-text">Mobil berjenis MPV yang diproduksi oleh Toyota yang dirancang untuk mampu mengangkut 7 orang penumpang</p>
      <a href="/pesan" class="btn" style="background-color : #000ca6; color: white">Sewa Sekarang</a>
    </div>
  </div>

  <div class="card text-center border-0 m-3" style="width: 60rem;">
    <h1 class="card-title" style="color: #000ca6;font-weight:700" >TRAVEL</h1>
    <img src="asset/hiace 3.png" class="img-fluid" alt="..." style="height: 29rem">
    <div class="card-body d-flex flex-column align-items-center">
      <h5 class="card-title">Toyota</h5>
      <p class="card-text">Mobil travel yang memiliki ruangan serta kenyamanan cukup, keleluasaan kabin Toyota Hiace yang mampu memuat hingga 16 penumpang</p>
      <a href="/pesan" class="btn" style="background-color : #000ca6; color: white">Sewa Sekarang</a>
    </div>
  </div>
</div> --}}

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-5">
                <h1 class="fw-bold">Pencapaian Kami Untuk <br> Memberikan Layanan Terbaik</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-center">
                <div class="reviewcard">
                    <h1 class="mt-3 p-4" style="font-weight:500">Louis Maxi</h1>
                    <img src="asset/user1.png" alt="..." class="img-fluid p-3">
                    <div class="star-icon">
                        <i class="fa-solid fa-star" style="color: #ffc800; font-size:30px"></i>
                        <i class="fa-solid fa-star" style="color: #ffc800; font-size:30px"></i>
                        <i class="fa-solid fa-star" style="color: #ffc800; font-size:30px"></i>
                        <i class="fa-solid fa-star" style="color: #ffc800; font-size:30px"></i>
                        <i class="fa-solid fa-star" style="color: #ffc800; font-size:30px"></i>
                    </div>
                    <p style="font-weight: 500" class="p-5">Pelayanan sangat ramah, supir handal segala medan</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="reviewcard">
                    <h1 class="mt-3 p-4">Yoseph Hakim</h1>
                    <img src="asset/user2.png" alt="..." class="img-fluid p-3">
                    <div class="star-icon">
                        <i class="fa-solid fa-star" style="color: #ffc800; font-size:30px"></i>
                        <i class="fa-solid fa-star" style="color: #ffc800; font-size:30px"></i>
                        <i class="fa-solid fa-star" style="color: #ffc800; font-size:30px"></i>
                        <i class="fa-solid fa-star" style="color: #ffc800; font-size:30px"></i>
                        <i class="fa-solid fa-star" style="color: #ffc800; font-size:30px"></i>
                    </div>
                    <p style="font-weight: 500" class="p-5">Harga termasuk jauh lebih murah dari pada rentcar lain,
                        mantap pokoknya</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="reviewcard">
                    <h1 class="mt-3 p-4">Aldo</h1>
                    <img src="asset/user3.png" alt="..." class="img-fluid p-3">
                    <div class="star-icon">
                        <i class="fa-solid fa-star" style="color: #ffc800; font-size:30px"></i>
                        <i class="fa-solid fa-star" style="color: #ffc800; font-size:30px"></i>
                        <i class="fa-solid fa-star" style="color: #ffc800; font-size:30px"></i>
                        <i class="fa-solid fa-star" style="color: #ffc800; font-size:30px"></i>
                        <i class="fa-solid fa-star" style="color: #ffc800; font-size:30px"></i>
                    </div>
                    <p style="font-weight: 500" class="p-5">Mobil bisa lepas kunci, sangat recomended</p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
