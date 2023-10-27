<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::select(
            'no_pendaftaran',
            'nama',
            'nilai_ind',
            'nilai_ipa',
            'nilai_mtk',
            Siswa::raw('(nilai_ind + nilai_ipa + nilai_mtk) / 3 as rata_rata')
        )
        ->orderByDesc('rata_rata')
        ->get();

        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        Siswa::create($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan!');
    }
}