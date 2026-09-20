<?php

namespace App\Http\Controllers;

use App\Models\Nilai;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with('mahasiswa')->get();

        return view('nilai.index', compact('nilai'));
    }
}
