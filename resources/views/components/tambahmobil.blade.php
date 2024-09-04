<!-- Modal Tambah Mobil -->
<div class="modal fade" id="tambahMobilModal" tabindex="-1" aria-labelledby="tambahMobilModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahMobilModalLabel">Tambah Mobil Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('mobil.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Input Merek Mobil -->
                    <div class="mb-3">
                        <label for="merekMobil" class="form-label">Merek Mobil</label>
                        <input type="text" class="form-control" id="merekMobil" name="merek_mobil" required>
                    </div>
                    <!-- Input Deskripsi Mobil -->
                    <div class="mb-3">
                        <label for="deskripsiMobil" class="form-label">Deskripsi Mobil</label>
                        <textarea class="form-control" id="deskripsiMobil" name="deskripsi_mobil" rows="3" required></textarea>
                    </div>
                    <!-- Input Harga Mobil -->
                    <div class="mb-3">
                        <label for="hargaMobil" class="form-label">Harga Mobil</label>
                        <input type="text" class="form-control" id="hargaMobil" name="harga_mobil" required>
                    </div>
                    <!-- Input Gambar Mobil -->
                    <div class="mb-3">
                        <label for="gambarMobil" class="form-label">Gambar Mobil</label>
                        <input type="file" class="form-control" id="gambarMobil" name="gambar_mobil" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
