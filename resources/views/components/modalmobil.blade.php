<!-- Modal Update -->
<div class="modal fade" id="editModal{{ $mobil->id }}" tabindex="-1"
    aria-labelledby="editModalLabel{{ $mobil->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $mobil->id }}">Edit Mobil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('mobils.update', $mobil->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="editMerkMobil{{ $mobil->id }}" class="form-label">Merk Mobil</label>
                        <input type="text" class="form-control" id="editMerkMobil{{ $mobil->id }}"
                            name="merekMobil" value="{{ $mobil->merek_mobil }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="editDeskripsi{{ $mobil->id }}" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="editDeskripsi{{ $mobil->id }}" name="deskripsi" rows="3" required>{{ $mobil->deskripsi_mobil }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="editHarga{{ $mobil->id }}" class="form-label">Harga Mobil</label>
                        <input type="text" class="form-control" id="editHarga{{ $mobil->id }}" name="harga"
                            value="{{ number_format($mobil->harga_mobil, 0, ',', '.') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="editGambar{{ $mobil->id }}" class="form-label">Gambar Mobil</label>
                        <input type="file" class="form-control" id="editGambar{{ $mobil->id }}" name="gambar">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="deleteModal{{ $mobil->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $mobil->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{ $mobil->id }}">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus mobil "{{ $mobil->merek_mobil }}"?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form action="{{ route('mobils.destroy', $mobil->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('hargaMobil').addEventListener('input', function(e) {
        // Ambil posisi kursor saat ini
        const cursorPosition = this.selectionStart;

        // Hapus semua karakter non-digit
        let value = this.value.replace(/\D/g, '');

        // Jika tidak ada angka, biarkan input kosong
        if (value === '') {
            this.value = '';
            return;
        }

        // Tambahkan titik setiap 3 digit dari belakang
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

        // Update nilai input
        this.value = value;

        // Set ulang posisi kursor setelah memformat
        const newCursorPosition = cursorPosition + (this.value.length - value.length);
        this.setSelectionRange(newCursorPosition, newCursorPosition);
    });
</script>
