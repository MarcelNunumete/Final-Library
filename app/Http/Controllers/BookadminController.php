<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteBookRequest;
use App\Models\Book;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BookadminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Book::all();
        $kategori = Kategori::all();
        return view('bookadmin', [
            'data' => $data,
            'kategori' => $kategori
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
        // dd($request);
        $validatedData = $request->validate([
            'judul' => 'required',
            'image' => 'image',
            'penerbit' => 'required',
            'kategori_id' => 'required',
            'stock' => 'required',
            'deskripsi' => 'required'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Book::create($validatedData);
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book, $id)
    {
        $book = Book::findOrfail($id);
        return view('booksDetail', [
            'book' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book, $id)
    {
        $book = Book::findOrfail($id);
        $book->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteBookRequest $request, Book $book)
    {
        Book::where('id', $request['book_id'])->delete();
        // $book->delete();
        return redirect()->back();
    }
}
