<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // 1. BROWSE: Menampilkan semua data film di halaman utama
    public function index()
    {
        $movies = Movie::all(); // Mengambil semua data dari database
        return view('movies.index', compact('movies')); // Mengirim data ke index.blade.php
    }

    // 2. Menampilkan halaman form tambah film
    public function create()
    {
        return view('movies.create');
    }

    // 3. ADD: Menyimpan data film baru ke database
    public function store(Request $request)
    {
        // Validasi agar form tidak boleh kosong
        $request->validate([
            'judul' => 'required',
            'genre' => 'required',
            'tahun' => 'required|integer',
            'detail'=> 'required',
        ]);

        Movie::create($request->all()); // Simpan ke database
        
        return redirect()->route('movies.index'); // Kembali ke halaman awal
    }

    // 4. READ: Menampilkan detail satu film
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    // 5. Menampilkan halaman form edit film beserta data lamanya
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    // 6. EDIT: Menyimpan data yang sudah diubah ke database
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'judul' => 'required',
            'genre' => 'required',
            'tahun' => 'required|integer',
            'detail'=> 'required',
        ]);

        $movie->update($request->all()); // Update database
        
        return redirect()->route('movies.index');
    }

    // 7. DELETE: Menghapus data dari database
    public function destroy(Movie $movie)
    {
        $movie->delete(); // Hapus dari database
        
        return redirect()->route('movies.index');
    }
}