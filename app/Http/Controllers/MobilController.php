<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class MobilController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Query dengan pencarian
        $query = Mobil::query();

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('merek_mobil', 'like', "%{$search}%")
                  ->orWhere('deskripsi_mobil', 'like', "%{$search}%")
                  ->orWhere('harga_mobil', 'like', "%{$search}%");
            });
        }

        // Paginate hasil pencarian
        $mobils = $query->paginate(10);
        return view('admin/mobil',
            [
                "title" => "List Mobil",
                "mobils" => $mobils
            ]
        );
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validated = $request->validate([
            'merek_mobil' => 'required|string|max:255',
            'deskripsi_mobil' => 'required|string',
            'harga_mobil' => 'required|numeric',
            'gambar_mobil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle upload gambar
        if ($request->hasFile('gambar_mobil')) {
            $fileName = time() . '_' . $request->file('gambar_mobil')->getClientOriginalName();
            $filePath = $request->file('gambar_mobil')->storeAs('uploads/mobil', $fileName, 'public');
        }

        // Simpan data ke dalam database
        $validated['harga_mobil'] = str_replace('.', '', $validated['harga_mobil']);

        Mobil::create([
            'merek_mobil' => $validated['merek_mobil'],
            'deskripsi_mobil' => $validated['deskripsi_mobil'],
            'harga_mobil' => $validated['harga_mobil'],
            'gambar_mobil' => '/storage/' . $filePath, // Simpan path gambar
        ]);

        return redirect()->back()->with('success', 'Mobil berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'merekMobil' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Temukan mobil berdasarkan ID
        $mobil = Mobil::findOrFail($id);

        // Perbarui data mobil
        $mobil->merek_mobil = $validated['merekMobil'];
        $mobil->deskripsi_mobil = $validated['deskripsi'];
        $mobil->harga_mobil = $validated['harga'];

        // Jika ada file gambar yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($mobil->gambar_mobil && Storage::disk('public')->exists($mobil->gambar_mobil)) {
                Storage::disk('public')->delete($mobil->gambar_mobil);
            }

            // Simpan gambar baru
            $fileName = time() . '_' . $request->file('gambar')->getClientOriginalName();
            $filePath = $request->file('gambar')->storeAs('uploads/mobil', $fileName, 'public');
            $mobil->gambar_mobil = '/storage/' . $filePath;
        }

        // Simpan perubahan
        $mobil->save();

        return redirect()->back()->with('success', 'Mobil berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Temukan mobil berdasarkan ID
        $mobil = Mobil::findOrFail($id);

        // Hapus gambar dari penyimpanan jika ada
        if ($mobil->gambar_mobil && Storage::disk('public')->exists($mobil->gambar_mobil)) {
            Storage::disk('public')->delete($mobil->gambar_mobil);
        }

        // Hapus data mobil dari database
        $mobil->delete();

        // Redirect setelah penghapusan berhasil
        return redirect()->back()->with('success', 'Mobil berhasil dihapus.');
    }
}
