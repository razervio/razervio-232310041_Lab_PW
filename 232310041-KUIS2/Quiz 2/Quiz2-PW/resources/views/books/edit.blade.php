@extends('layouts.app') {{-- Assumes you have a base layout in layouts/app.blade.php --}}

@section('content')
<div class="container">
    <h1>Edit Buku</h1>
    <a href="{{ route('books.index') }}" class="btn btn-secondary mb-3">Kembali ke Daftar Buku</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Penting: Laravel menggunakan metode PUT/PATCH untuk update --}}

        <div class="form-group mb-3">
            <label for="title">Judul Buku:</label>
            <input type="text" name="title" value="{{ old('title', $book->title) }}" class="form-control" placeholder="Judul Buku">
        </div>
        <div class="form-group mb-3">
            <label for="author">Nama Penulis:</label>
            <input type="text" name="author" value="{{ old('author', $book->author) }}" class="form-control" placeholder="Nama Penulis">
        </div>
        <div class="form-group mb-3">
            <label for="publisher">Nama Penerbit:</label>
            <input type="text" name="publisher" value="{{ old('publisher', $book->publisher) }}" class="form-control" placeholder="Nama Penerbit">
        </div>
        <div class="form-group mb-3">
            <label for="year_published">Tahun Terbit:</label>
            <input type="number" name="year_published" value="{{ old('year_published', $book->year_published) }}" class="form-control" placeholder="Tahun Terbit (contoh: 2023)">
        </div>
        <div class="form-group mb-3 form-check">
            <input type="checkbox" name="available" class="form-check-input" id="available" value="1" {{ old('available', $book->available) ? 'checked' : '' }}>
            <label class="form-check-label" for="available">Tersedia</label>
        </div>
        <button type="submit" class="btn btn-success">Perbarui</button>
    </form>
</div>
@endsection