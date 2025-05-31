<div class="mb-3">
    <label for="nama">Nama Obat</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $obat->nama ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="kategori">Kategori</label>
    <input type="text" name="kategori" class="form-control" value="{{ old('kategori', $obat->kategori ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="produsen">Produsen</label>
    <input type="text" name="produsen" class="form-control" value="{{ old('produsen', $obat->produsen ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="stok">Stok</label>
    <input type="number" name="stok" class="form-control" value="{{ old('stok', $obat->stok ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="expired_date">Expired Date</label>
    <input type="date" name="expired_date" class="form-control" value="{{ old('expired_date', $obat->expired_date ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="keterangan">Keterangan</label>
    <textarea name="keterangan" class="form-control">{{ old('keterangan', $obat->keterangan ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label for="foto">Foto</label><br>
    @if (!empty($obat->foto))
        <img src="{{ asset('storage/' . $obat->foto) }}" width="80" class="mb-2"><br>
    @endif
    <input type="file" name="foto" class="form-control">
</div>
