@extends('layouts.main')
@section('container')
    <link rel="stylesheet" href="css/produk.css">

    <div class="text-view1">
        <h1 class="fw-bold">Produk Mobil</h1>
    </div>

    <div class="container">
        <div class="filters d-flex align-items-center">
            <p class="mb-0 me-2">Filter:</p>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle btn-custom" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Pilih Kategori
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Kategori 1</a></li>
                    <li><a class="dropdown-item" href="#">Kategori 2</a></li>
                    <li><a class="dropdown-item" href="#">Kategori 3</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>

    <!-- Produk -->

    <div class="container">
        <div class="row g-3">
            <div class="col-6 col-md-4"> <!-- Menggunakan col-6 untuk 2 kolom pada ponsel -->
                <a href="/pesanan" class="card-link">
                    <div class="card" style="width: 100%;"> <!-- width 100% agar memenuhi kolom -->
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title">Mobil roda 4</p>
                            <p class="card-text">Toyota</p>
                            <p class="card-price">Rp 250.000</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4">
                <a href="/pesanan" class="card-link">
                    <div class="card" style="width: 100%;"> <!-- width 100% agar memenuhi kolom -->
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title">Mobil roda 4</p>
                            <p class="card-text">Toyota</p>
                            <p class="card-price">Rp 250.000</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4">
                <a href="/pesanan" class="card-link">
                    <div class="card" style="width: 100%;"> <!-- width 100% agar memenuhi kolom -->
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title">Mobil roda 4</p>
                            <p class="card-text">Toyota</p>
                            <p class="card-price">Rp 250.000</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4">
                <div class="card" style="width: 100%;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Mobil roda 4</p>
                        <p class="card-text">Toyota</p>
                        <p class="card-price">Rp 250.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
