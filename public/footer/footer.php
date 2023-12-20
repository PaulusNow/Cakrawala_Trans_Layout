<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="footer/footer.css">
</head>
<body>
  <section class="footer">
    <div class="footer-content">
      <img src="asset/cakrawala.png" alt="">
      <p>RentCar mobil aman dan terpercaya di Surabaya</p>
    </div>

    <div class="footer-content">
      <h4>Informasi Kontak</h4>
      <p>Taman Suko Asri Blok K1, Sidoarjo <br> 08999939774</p>
    </div>

    <div class="footer-content">
      <h4>Service</h4>
      <li><a href="/pesan">RentCar Mobil</a></li>
      <li><a href="/pesan">RentCar Elf Hiace</a></li>
      <li><a href="/pesan">RentCar Bus</a></li>
    </div>

    <div class="footer-content">
      <h4>Hubungi Kami</h4>
      <p>Konsultasikan jadwal perjalanan Terbaik Anda bersama Kami melalui kontak WhatsApp yang tersedia dan Kami siap membantu Anda 24 Jam</p>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
 var listItems = document.querySelectorAll('li');
 for (var i = 0; i < listItems.length; i++) {
    var text = listItems[i].innerText;
    if (text === "1") {
      listItems[i].innerText = "";
    }
 }
});
</script>
</body>
</html>