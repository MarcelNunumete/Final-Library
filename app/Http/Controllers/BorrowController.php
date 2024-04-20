<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::all();
        return view('borow', [
            'book' => $book
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_peminjam' => 'required|string',
            'judul' => 'required'
        ]);
    
        // Ambil informasi buku berdasarkan judul
        $book = Book::where('judul', $request->judul)->first();
    
        // Periksa apakah buku ditemukan
        if ($book) {
            // Kurangi stok buku
            $book->stock--;
    
            // Simpan perubahan stok buku
            $book->save();
    
            // Simpan data peminjaman ke database
            Borrow::create([
                'nama_peminjam' => $request->nama_peminjam,
                'judul' => $request->judul,
                'tanggal_pinjam' => now(),
                'status' => 'Diterima' // Misalnya, status peminjaman diatur sebagai 'Pinjam'
            ]);
    
            return redirect()->route('borrowing.index')->with('success', 'Buku berhasil dipinjam.');
        } else {
            return redirect()->back()->with('error', 'Buku tidak ditemukan.');
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Borrow $borrow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Borrow $borrow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Borrow $borrow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Borrow $borrow)
    {
        //
    }
}
