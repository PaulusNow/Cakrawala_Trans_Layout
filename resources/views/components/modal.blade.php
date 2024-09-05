<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<!-- Modal Update -->
<div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="editName{{ $user->id }}" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="editName{{ $user->id }}" name="nama" value="{{ $user->nama }}">
                    </div>
                    <div class="mb-3">
                        <label for="editEmail{{ $user->id }}" class="form-label">Email</label>
                        <input type="email" class="form-control" id="editEmail{{ $user->id }}" name="email" value="{{ $user->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="editPhone{{ $user->id }}" class="form-label">No Telepon</label>
                        <input type="text" class="form-control" id="editPhone{{ $user->id }}" name="notlp" value="{{ $user->notlp }}">
                    </div>
                    <div class="mb-3 form-check">
                        <!-- Input hidden untuk menangani ketika checkbox tidak dicentang -->
                        <input type="hidden" name="is_admin" value="0">
                        <input type="checkbox" class="form-check-input" id="editAdmin" name="is_admin" value="1" {{ $singleUser->is_admin ? 'checked' : '' }}>
                        <label class="form-check-label" for="editAdmin">Admin</label>
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
<div class="modal fade" id="deleteModal{{ $singleUser->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $singleUser->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{ $singleUser->id }}">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus pengguna dengan nama "{{ $singleUser->nama }}"?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form action="{{ route('user.destroy', $singleUser->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
