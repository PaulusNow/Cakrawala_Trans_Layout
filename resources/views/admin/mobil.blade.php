@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">List Halaman Mobil</h1>
        </div>

        {{-- Button Tambah product --}}
        <button type="button" class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#tambahMobilModal">
            <i class="bi bi-plus-circle"></i> Tambah Mobil
        </button>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title">List Mobil</h5>
                <form action="{{ route('mobils.index') }}" method="GET" class="d-flex">
                    <input type="text" name="search" class="form-control me-2" placeholder="Cari mobil ..."
                        value="{{ $search ?? '' }}">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <i class="bi bi-x"></i>
                        </button>
                    </div>
                @endif

                @if (session()->has('gagalUpdate'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('gagalUpdate') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <i class="bi bi-x"></i>
                        </button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Merk Mobil</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mobils as $mobil)
                            <tr>
                                <td>{{ $loop->iteration + ($mobils->currentPage() - 1) * $mobils->perPage() }}</td>
                                <td>{{ $mobil->merek_mobil }}</td>
                                <td>{{ $mobil->deskripsi_mobil }}</td>
                                <td>{{ "Rp. " . number_format($mobil->harga_mobil, 0, ',', '.') }}</td>
                                <td>
                                    @if ($mobil->gambar_mobil)
                                        <img src="{{ asset('storage/' . $mobil->gambar_mobil) }}" alt="Gambar Mobil"
                                            style="width: 100px;">
                                    @else
                                        Tidak ada gambar
                                    @endif
                                </td>
                                <td>
                                    <!-- Aksi Edit dan Hapus -->
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editModal{{ $mobil->id }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $mobil->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @include('components.modalmobil', ['mobils' => $mobil])
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination">
                    {{ $mobils->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
    @include('components.tambahmobil')
@endsection
