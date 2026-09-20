<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('nilai')->get();

        return view('mahasiswa.index', compact('mahasiswa'));
    }
}
