<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Kategoribarang;
use App\Models\barang;
use App\Models\Transaksi;
use App\Models\stok;
use App\Models\sekolah;


class FrontController extends Controller
{
    // Menampilkan halaman index dengan data profil
    public function index()
    {
        // Mengambil semua data profil dari database
        $profils = Profil::all();
        $barangs = Barang::all();
        $kategoriBarangs = KategoriBarang::all();
        $sekolahs = Sekolah::all();
        $stoks = Stok::all();
        $transaksis = Transaksi::all();

        // Mengirim data ke view 'front.index'
        return view('front.index', compact('profils','barangs', 'kategoriBarangs', 'sekolahs', 'stoks', 'transaksis'));
    }
}
