<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'merek_mobil',
        'deskripsi_mobil',
        'harga_mobil',
        'gambar_mobil',
    ];
}
