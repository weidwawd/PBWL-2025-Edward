<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Fungsi untuk menampilkan halaman daftar mahasiswa
    public function index()
    {
        return view('mahasiswa.index');
    }
    public function create()
    {
        return view('mahasiswa.form');
    }
}