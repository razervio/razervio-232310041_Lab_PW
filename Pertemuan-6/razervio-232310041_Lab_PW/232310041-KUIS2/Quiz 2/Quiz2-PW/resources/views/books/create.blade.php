@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Buku Baru</h1>
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

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Judul Buku:</label>
            <input type="text" name="title" class="form-control" placeholder="Judul Buku">
        </div>
        <div class="form-group mb-3">
            <label for="author">Nama Penulis:</label>
            <input type="text" name="author" class="form-control" placeholder="Nama Penulis">
        </div>
        <div class="form-group mb-3">
            <label for="publisher">Nama Penerbit:</label>
            <input type="text" name="publisher" class="form-control" placeholder="Nama Penerbit">
        </div>
        <div class="form-group mb-3">
            <label for="year_published">Tahun Terbit:</label>
            <input type="number" name="year_published" class="form-control" placeholder="Tahun Terbit (contoh: 2023)">
        </div>
        <div class="form-group mb-3 form-check">
            <input type="checkbox" name="available" class="form-check-input" id="available" value="1" checked>
            <label class="form-check-label" for="available">Tersedia</label>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection