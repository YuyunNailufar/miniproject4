@extends('layouts.app')

@section('content')
<div class="container">
    <h2 style="margin-bottom: 20px;">Daftar Obat</h2>

    <form action="{{ route('obat.index') }}" method="GET" class="mb-4 d-flex align-items-center" style="gap: 10px;">
    <input type="text" name="search" placeholder="Cari obat..."
        style="width: 900px; font-size: 16px; padding: 6px 12px; border: 1px solid #ccc; border-radius: 4px;">
    
    <button type="submit"
        style=" pandding-bottom: 10px; padding: 6px 20px; font-size: 16px; background-color: #4f46e5; color: white; border: none; border-radius: 4px;">
        Cari
    </button>
</form>

    <a href="{{ route('obat.create') }}"
    style="margin-top: 16px; display: inline-block; padding: 10px 20px; background-color: #4f46e5; color: white; border-radius: 8px; font-weight: bold; text-decoration: none;">
    + Tambah Obat
</a>



    <table class="table">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Produsen</th>
                <th>Stok</th>
                <th>Expired</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($obats as $obat)
                <tr>
                    <td>
                        @if ($obat->foto)
                            <img src="{{ asset('storage/' . $obat->foto) }}" alt="Foto Obat" width="80">
                        @else
                            Tidak ada
                        @endif
                    </td>
                    <td>{{ $obat->nama }}</td>
                    <td>{{ $obat->kategori }}</td>
                    <td>{{ $obat->produsen }}</td>
                    <td>{{ $obat->stok }}</td>
                    <td>{{ $obat->expired_date }}</td>
                    <td>{{ $obat->keterangan }}</td>
                    <td style="white-space: nowrap;">
                        <a href="{{ route('obat.edit', $obat->id) }}" class="btn-secondary">Edit</a>

                       <form action="{{ route('obat.destroy', $obat->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Hapus</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    .container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 2rem;
        background-color: #f9f9ff;
        border-radius: 12px;
    }

    .btn-primary {
        background-color: #4f46e5;
        color: white;
        padding: 8px 16px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: bold;
    }

    .btn-secondary {
        background-color: #3b82f6;
        color: white;
        padding: 6px 12px;
        border-radius: 4px;
        text-decoration: none;
        margin-right: 5px;
    }

    .btn-danger {
        background-color: #ef4444;
        color: white;
        padding: 6px 12px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
    }

    th, td {
        padding: 12px;
        border: 1px solid #e5e7eb;
        text-align: left;
        vertical-align: top;
    }

    th {
        background-color: #f3f4f6;
    }

    .foto-obat {
        width: 70px;
        height: auto;
        border-radius: 6px;
    }
</style>
@endsection
