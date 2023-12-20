    <div class="cpesan">{{ $content }}</div>
    <div class="subcpesan">
      <ul class="confirm">
        <li class={{ $title === 'Penyewaan' ? 'activee' : '' }}>Pilih dan Jadwal Kendaraan</li>
        <li class={{ $title === 'Konfirmasi' ? 'activee' : '' }}>Konfirmasi Pesanan</li>
        <li class={{ $title === 'Pembayaran' ? 'activee' : '' }}>Pembayaran</li>
      </ul>
    </div>