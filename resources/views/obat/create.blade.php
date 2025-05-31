@extends('layouts.app')

@section('content')
<div class="container">
    <h2 style="margin-bottom: 20px;">Tambah Obat Baru</h2>

    @if ($errors->any())
        <div style="background-color: #fee2e2; padding: 10px; border-radius: 6px; color: #b91c1c; margin-bottom: 15px;">
            <strong>Terjadi kesalahan:</strong>
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('obat.store') }}" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 15px;">
        @csrf

        <div>
            <label for="nama">Nama Obat</label>
            <input type="text" name="nama" id="nama" class="input" value="{{ old('nama') }}">
        </div>

        <div>
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="kategori" class="input" value="{{ old('kategori') }}">
        </div>

        <div>
            <label for="produsen">Produsen</label>
            <input type="text" name="produsen" id="produsen" class="input" value="{{ old('produsen') }}">
        </div>

        <div>
            <label for="stok">Stok</label>
            <input type="number" name="stok" id="stok" class="input" value="{{ old('stok') }}">
        </div>

        <div>
             <label for="expired_date" class="form-label">Tanggal Kedaluwarsa</label>
    <input type="date" name="expired_date" class="form-control" required>
        </div>

        <div>
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" rows="4" class="input">{{ old('keterangan') }}</textarea>
        </div>

        <div>
            <label for="foto">Foto Obat</label>
            <input type="file" name="foto" id="foto" class="input">
        </div>

        <div>
            <button type="submit" class="btn-primary">Simpan</button>
        </div>
    </form>
</div>

<style>
    .container {
        max-width: 700px;
        margin: 0 auto;
        padding: 2rem;
        background-color: #f8f9fd;
        border-radius: 12px;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-weight: bold;
    }

    .input {
        width: 100%;
        padding: 10px;
        border-radius: 6px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    .btn-primary {
        background-color: #4f46e5;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #4338ca;
    }
</style>
@endsection
