<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $allUser = User::where('is_admin', false)->count();
        // hitung semua user lalu tampilkan di view
        return view('admin/index', [
            "title" => "Admin Page",
            "allUser" => $allUser
        ]);
    }

    public function users(Request $request)
    {
        $query = User::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%');
        }

        $user = $query->paginate(10);

        return view('admin.users', [
            'title' => 'Users',
            'user' => $user
        ]);
    }


    public function update(Request $request, $id)
    {
        // Validasi data yang masuk
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'notlp' => 'nullable|string|max:15',
            'is_admin' => 'boolean',
        ]);

        try {
            // Cari pengguna berdasarkan ID
            $user = User::findOrFail($id);

            // Perbarui data pengguna dengan data yang tervalidasi
            $user->update($validatedData);

            // Redirect kembali dengan pesan sukses
            return redirect()->back()->with('success', 'Data pengguna berhasil diperbarui.');
        } catch (\Exception $e) {
            // Tangkap error dan kembalikan pesan error
            return redirect()->back()->with('gagalUpdate', 'Terjadi kesalahan saat memperbarui data: ' . $e->getMessage());
        }
    }
}
