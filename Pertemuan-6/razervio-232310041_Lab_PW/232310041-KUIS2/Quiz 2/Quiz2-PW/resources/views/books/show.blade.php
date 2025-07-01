@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Buku</h1>
    <a href="{{ route('books.index') }}" class="btn btn-secondary mb-3">Kembali ke Daftar Buku</a>

    <div class="card">
        <div class="card-header">
            Detail Buku: {{ $book->title }}
        </div>
        <div class="card-body">
            <p><strong>Judul:</strong> {{ $book->title }}</p>
            <p><strong>Penulis:</strong> {{ $book->author }}</p>
            <p><strong>Penerbit:</strong> {{ $book->publisher }}</p>
            <p><strong>Tahun Terbit:</strong> {{ $book->year_published }}</p>
            <p><strong>Status Tersedia:</strong> {{ $book->available ? 'Ya' : 'Tidak' }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
</div>
@endsection