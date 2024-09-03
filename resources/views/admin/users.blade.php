@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Halaman User</h1>
        </div>

    <!-- Tabel Users -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title">Daftar Pengguna</h5>
            <form action="{{ route('admin.users') }}" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Cari pengguna..." value="{{ request('search') }}">
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
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Telepon</th>
                        <th>Admin?</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $singleUser) <!-- Mengganti nama variabel dari $user ke $singleUser -->
                        <tr>
                            <td>{{ $loop->iteration + ($user->currentPage() - 1) * $user->perPage() }}</td>
                            <td>{{ $singleUser->nama }}</td>
                            <td>{{ $singleUser->email }}</td>
                            <td>{{ $singleUser->notlp }}</td>
                            <td>
                                <span class="badge rounded-pill text-bg-{{ $singleUser->is_admin ? 'success' : 'danger' }}">
                                    {{ $singleUser->is_admin ? 'True' : 'False' }}
                                </span>
                            </td>
                            <td>
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editModal{{ $singleUser->id }}">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $singleUser->id }}">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @include('components.edit-modal', ['user' => $singleUser])
                        @include('admin.modals.hapus')
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-center">
                {{ $user->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection
