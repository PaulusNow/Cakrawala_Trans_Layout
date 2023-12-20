@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="/css/bantuan.css">

    <section id="gambar">
        <div class="row">
            <div class="col-md-12 ps-5 position-absolute start-0 ">
                <div class="container">
                    <h1 style="font-weight: 800; font-size:64px">Pusat Bantuan</h1>
                    <h4 style="font-weight: 700; font-size:32px" class="ms-5"><i>Layanan Konsumen</i></h4>
                </div>
            </div>
            <div class="col-md-4 offset-2 my-5">
                <div class="bundar">
                    <h3 class="p-2">Halo, Saya siap membantu Anda</h3>
                </div>
                <div class="bundar offset-7 mt-5">
                    <h3 class="p-2">Tanyakan tentang keluhan Anda</h3>
                </div>
            </div>
            <div class="col-md-2">
                <img src="asset/logo_wa.png" alt="..." class="position-absolute mb-5" height="114" width="105">
                <div class="bundarwa">
                    <p class="position-absolute p-1">+628999939774</p>
                </div>
            </div>
        </div>
    </section>


    {{-- <div class="cover">
        <img src="asset/Group 46.png" alt="...">
    </div>

    <div class="bantuan1">
        <h1>Halo, saya siap membantu Anda</h1>
    </div>
    <div class="bantuan2">
        <h1>Tanyakan kepada saya tentang keluhan Anda</h1>
    </div>

    <div class="pusatbantuan">
        <h1>Pusat Bantuan</h1>
        <p><i>Layanan Konsumen</i></p>
    </div>

    <div class="logowa">
        <img src="asset/logo_wa.png" alt="logowa">
        <h1>+628999939774</h1>
    </div> --}}

    <div class="coverpusat">
        <div class="container">
            <div class="menudrop">
                <div class="dropdown">
                    <div class="input-box"></div>
                    <div class="list">
                        <input type="radio" name="drop1" id="id1" class="radio" onchange="tampilkanProsedur()">
                        <label for="id1">
                            <span>Proses Pemesanan</span>
                        </label>
                        <input type="radio" name="drop1" id="id2" class="radio" onchange="tampilkanProsedur()">
                        <label for="id2">
                            <span>Metode Pembayaran</span>
                        </label>
                        <input type="radio" name="drop1" id="id3" class="radio" onchange="tampilkanProsedur()">
                        <label for="id3">
                            <span>Syarat Mobil Lepas Kunci</span>
                        </label>
                        <input type="radio" name="drop1" id="id4" class="radio" onchange="tampilkanProsedur()">
                        <label for="id4">
                            <span>Apabila sudah memesan tetapi Mobil sedang dibooking</span>
                        </label>
                    </div>

                </div>
            </div>
        </div>
        <!-- Teks Prosedur -->
        <div class="container">
            <div id="id1-prosedur" class="prosedur">
                <p>Pemesanan : <br> Pemesanan dari jam dan tanggal pesanan dibuat, Anda akan dapat memilih <i>jenis
                        kendaraan,
                        tanggal dan jam sewa serta lama sewa. <br>
                        Misal, Anda sewa tanggal 1 januari jam 09.00, maka Anda harus mengembalikan kendaraan pada tanggal 2
                        januari jam 09.00.</i></p>
            </div>

            <div id="id2-prosedur" class="prosedur">
                <p>Metode pembayaran bisa dilakukan dengan cara scan QRIS <br>
                    <li> Via Dana <br> </li>
                    <li>Via OVO <br> </li>
                    <li>Via GoPay <br> </li>
                    <li>Via ShopePay <br> </li>
                    <li>Via SeaBank
                </p>
                </li>
            </div>

            <div id="id3-prosedur" class="prosedur">
                <p>Syarat Mobil Lepas Kunci: <br>
                    1. KTP penyewa <br>
                    2. DP minimal 100.000 <br>
                    3. Menunjukkan SIM A <br>
                    4. Jaminan motor selama masih menyewa (minimal motor tahun 2012)</p>
            </div>

            <div id="id4-prosedur" class="prosedur">
                <p>Kita akan bertanggung jawab penuh apabila proses pemesanan dan pembayaran sudah selesai akan tetapi mobil
                    yang dipesan belum siap/sedang dipesan orang lain/sedang masa maintenance, maka kami akan sepenuhnya
                    menggantikan mobil lain sesuai dengan harga yang dipesan/kami bersedia mengembalikan uang pemesanan
                    sesuai
                    dengan pembayaran 100%</p>
            </div>
        </div>
    </div>

    <script src="js/bantuan.js"></script>
@endsection
