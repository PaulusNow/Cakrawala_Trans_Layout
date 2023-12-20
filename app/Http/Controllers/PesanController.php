<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index()
    {
        return view('order', [
        "title" => "Penyewaan",
        "content" => "form pemesanan kendaraan lepas kunci/dengan driver"
    ]);
    }
    public function pesan()
    {
        return view('order2', [
        "title" => "Konfirmasi",
        "content" => "form pemesanan"
    ]);
    }
}
