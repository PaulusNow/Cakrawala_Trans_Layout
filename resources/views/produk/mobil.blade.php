@extends('layouts.main')
@section('container')
    <link rel="stylesheet" href="/css/mobil.css">
    <div class="container cbody">
        <div class="left-column">
            <img src="/asset/agya 1.png" alt="mobil">
        </div>
        <div class="right-column">
            <div class="product-name">Mobil roda 4</div>
            <div class="product-description">Toyota</div>
            {{-- Dropdown  --}}
            <div class="product-option" onclick="toggleConfigurationOptions(event)">
                <div class="product-info">
                    <p class="product-name">Tujuan</p>
                </div>
                <svg class="icon-arrow" xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 11.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" />
                </svg>
            </div>

            <div class="configurator-option-values-content hidden">
                <div
                    class="option-group-values scroll-options c-max-h-75 c-overflow-auto c-mx-1 c-flex c-flex-col c-gap-0 c-justify-start grid-options-container">
                    <div data-type="radio"
                        class="configurator-option-value c-w-[calc(100%-8px)] configurator-configuration-value c-cursor-pointer c-p-1 c-m-1 c-mb-2 c-cursor-pointer configurator-option-value-selected">
                        <div
                            class="option-value-content c-whitespace-normal c-pointer-events-none c-flex c-flex-row c-text-left">
                            <div class="option" value="dalamKota">Dalam Kota</div>
                            <div class="option" value="luarKota">Luar Kota</div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="destination-option" class="product-option hidden" onclick="toggleCityOptions(event)">
                <div class="product-info">
                    <p class="product-name">Kota</p>
                </div>
                <svg class="icon-arrow" xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.5 3.5a.5.5 0 01.7 0l6.3 6.3 6.3-6.3a.5.5 0 11.7.7l-6.7 6.7a.5.5 0 01-.7 0L1.5 4.2a.5.5 0 010-.7z" />
                </svg>
            </div>

            <div id="city-options" class="configurator-option-values-content hidden">
                <div
                    class="option-group-values scroll-options c-max-h-75 c-overflow-auto c-mx-1 c-flex c-flex-col c-gap-0 c-justify-start grid-options-container">
                    <div data-type="radio"
                        class="configurator-option-value c-w-[calc(100%-8px)] configurator-configuration-value c-cursor-pointer c-p-1 c-m-1 c-mb-2 c-cursor-pointer configurator-option-value-selected">
                        <div
                            class="option-value-content c-whitespace-normal c-pointer-events-none c-flex c-flex-row c-text-left">
                            <div class="option" value="sby">Surabaya</div>
                            <div class="option" value="mlg">Malang</div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- End Dropdown --}}

            {{-- Card Sewa --}}
            <div class="card mt-2 shadow-sm">
                <div class="row align-items-start p-2">
                    <!-- Card Column Kiri -->
                    <div class="col d-flex align-items-center mt-2">
                        <i class="fa-regular fa-square-minus icon ms-2" onclick="decreaseQuantity()"></i>
                        <input type="number" id="quantity" value="1" class="form-control mx-2 custom-input">
                        <i class="fa-regular fa-square-plus icon" onclick="increaseQuantity()"></i>
                        <span class="quantity-text mx-2">Hari</span>
                    </div>
                    <!-- Card Column Kanan -->
                    <div class="col text-end">
                        <div class="price-container">
                            <span class="price-label">Harga</span>
                            <span class="price-amount">Rp. 250.000</span>
                            <button class="btn btn-primary custom-btn mt-2 mb-2">Sewa Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Card Sewa --}}
        </div>
    </div>
    <div class="container">
        <hr>
        <div class="deskripsi">
            <h4>Deskripsi Mobil</h4>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta reprehenderit ad iste totam voluptates fuga omnis
            dolore minus iusto. Iure voluptates sit unde consequuntur laborum porro voluptate illum perspiciatis dicta vitae
            eum deserunt, distinctio at provident sed nisi aperiam error cupiditate. Earum eum dolor mollitia, tempora
            dolorum cupiditate libero praesentium vero placeat quam vel? Laboriosam sed quas iste nihil consequuntur
            similique beatae sit ut! Voluptatem sapiente temporibus, voluptate ullam tempore, expedita rerum dicta quibusdam
            facere voluptatibus reprehenderit dolorum aspernatur necessitatibus molestias animi iste nemo. Deserunt aperiam
            quidem architecto nemo. Atque incidunt illo quo sapiente commodi possimus odio, impedit libero. Pariatur
            doloremque possimus deleniti quaerat itaque ducimus odio minus culpa repellat. At aut vero ullam accusantium
            sapiente voluptates asperiores amet ea modi, soluta velit fugit fuga cupiditate necessitatibus architecto,
            voluptatibus corrupti, cum officia vel? Reiciendis corrupti quas sint perferendis accusantium blanditiis
            quibusdam, saepe aliquam provident totam atque itaque minima magni dolore!</p>
    </div>

    <div class="container">
        <hr>
        <div class="review">
            <h4>Ulasan</h4>
        </div>
        <div class="review-container shadow-sm">
            <div class="review-header">
                <div class="rating-stars">
                    ★★★★★
                </div>
                <span class="review-time">1 hari lalu</span>
            </div>
            <div class="review-body">
                <div class="review-user-info">
                    <img src="asset/user2.png" alt="User Avatar" class="user-avatar">
                    <div class="user-details">
                        <span class="user-name">Yoseph Hakim</span>
                        <span class="merk">Merk: Toyota</span>
                    </div>
                </div>
                <p class="review-text">
                    Harga termasuk jauh lebih murah dari pada rentcar lain, mantap pokoknya
                </p>
            </div>
        </div>
        <div class="review-container shadow-sm">
            <div class="review-header">
                <div class="rating-stars">
                    ★★★★★
                </div>
                <span class="review-time">3 hari lalu</span>
            </div>
            <div class="review-body">
                <div class="review-user-info">
                    <img src="asset/user1.png" alt="User Avatar" class="user-avatar">
                    <div class="user-details">
                        <span class="user-name">Louis Maxi</span>
                        <span class="merk">Merk: Toyota</span>
                    </div>
                </div>
                <p class="review-text">
                    Pelayanan sangat ramah, supir handal segala medan
                </p>
            </div>
        </div>
        <div class="review-container shadow-sm">
            <div class="review-header">
                <div class="rating-stars">
                    ★★★★★
                </div>
                <span class="review-time">1 bulan lalu</span>
            </div>
            <div class="review-body">
                <div class="review-user-info">
                    <img src="asset/user3.png" alt="User Avatar" class="user-avatar">
                    <div class="user-details">
                        <span class="user-name">Aldo</span>
                        <span class="merk">Merk: Toyota</span>
                    </div>
                </div>
                <p class="review-text">
                    Mobil bisa lepas kunci, sangat recommended
                </p>
            </div>
        </div> 
    </div>

    <script src="/js/mobil.js"></script>
@endsection
