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

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-5">
                <h1 class="fw-bold">Pencapaian Kami Untuk <br> Memberikan Layanan Terbaik</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-center">
                <div class="review-card">
                    <h1 class="review-title">Louis Maxi</h1>
                    <img src="asset/user1.png" alt="Louis Maxi" class="img-fluid review-img">
                    <div class="star-icon">
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                    </div>
                    <p class="review-text">Pelayanan sangat ramah, supir handal segala medan</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="review-card">
                    <h1 class="review-title">Yoseph Hakim</h1>
                    <img src="asset/user2.png" alt="Yoseph Hakim" class="img-fluid review-img">
                    <div class="star-icon">
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                    </div>
                    <p class="review-text">Harga termasuk jauh lebih murah dari pada rentcar lain, mantap pokoknya</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="review-card">
                    <h1 class="review-title">Aldo</h1>
                    <img src="asset/user3.png" alt="Aldo" class="img-fluid review-img">
                    <div class="star-icon">
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                    </div>
                    <p class="review-text">Mobil bisa lepas kunci, sangat recommended</p>
                </div>
            </div>
        </div>
    </div>
@endsection
