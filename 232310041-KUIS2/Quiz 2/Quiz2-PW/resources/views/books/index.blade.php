@extends('layouts.app') {{-- Asumsikan Anda punya layout dasar --}}

@section('content')
<div class="container">
    <h1>Daftar Buku Perpustakaan</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Tambah Buku Baru</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Tersedia</th>
                <th width="280px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publisher }}</td>
                <td>{{ $book->year_published }}</td>
                <td>{{ $book->available ? 'Ya' : 'Tidak' }}</td>
                <td>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                        <a class="btn btn-info btn-sm" href="{{ route('books.show', $book->id) }}">Lihat</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('books.edit', $book->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $books->links() }} {{-- Untuk pagination  --}}
</div>
@endsection