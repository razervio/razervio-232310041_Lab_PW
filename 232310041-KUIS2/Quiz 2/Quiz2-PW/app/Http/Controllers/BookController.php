<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menampilkan daftar semua buku dengan pagination 
        $books = Book::paginate(10); // Contoh pagination 10 buku per halaman
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan form untuk menambahkan buku baru 
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data 
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'year_published' => 'required|numeric|digits:4',
            // 'available' => 'boolean', // Validasi ini bisa dihapus karena kita akan mengeset nilai boolean secara eksplisit
        ]);

        // Tangani nilai checkbox 'available':
        // Jika checkbox dicentang, $request->has('available') akan true.
        // Jika tidak dicentang, $request->has('available') akan false.
        $data = $request->all();
        $data['available'] = $request->has('available'); 

        Book::create($data); // Gunakan $data yang sudah dimodifikasi

        return redirect()->route('books.index')
                         ->with('success','Buku berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        // Ini biasanya tidak diperlukan untuk CRUD sederhana, tapi disertakan karena resource controller
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        // Menampilkan form untuk mengubah data buku 
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        // Validasi data 
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'year_published' => 'required|numeric|digits:4',
            // 'available' => 'boolean', // Validasi ini bisa dihapus
        ]);

        // Tangani nilai checkbox 'available' untuk update:
        $data = $request->all();
        $data['available'] = $request->has('available');

        $book->update($data); // Gunakan $data yang sudah dimodifikasi

        return redirect()->route('books.index')
                         ->with('success','Buku berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        // Tombol untuk menghapus data buku 
        $book->delete();

        return redirect()->route('books.index')
                         ->with('success','Buku berhasil dihapus.');
    }
}