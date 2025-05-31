<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use Illuminate\Support\Facades\Storage;

class ObatController extends Controller {

public function index(Request $request)
{
    $query = Obat::query();

    // Cek apakah ada input pencarian
    if ($request->has('search') && $request->search != '') {
        $query->where('nama', 'like', '%' . $request->search . '%')
              ->orWhere('kategori', 'like', '%' . $request->search . '%')
              ->orWhere('produsen', 'like', '%' . $request->search . '%');
    }

    $obats = $query->latest()->get();

    return view('obat.index', compact('obats'));
}

    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'produsen' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
            'expired_date' => 'required|date|after_or_equal:today',
            'keterangan' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Simpan foto jika ada
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('foto_obat', 'public');
        }

        // Simpan data ke database
        Obat::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'produsen' => $request->produsen,
            'stok' => $request->stok,
            'expired_date' => $request->expired_date,
            'keterangan' => $request->keterangan,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('obat.create')->with('success', 'Obat berhasil ditambahkan!');
    }

    public function edit($id)
{
    $obat = Obat::findOrFail($id);
    return view('obat.edit', compact('obat'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'kategori' => 'required|string|max:255',
        'produsen' => 'required|string|max:255',
        'stok' => 'required|integer|min:0',
        'expired_date' => 'required|date|after_or_equal:today',
        'keterangan' => 'nullable|string',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $obat = Obat::findOrFail($id);

    // Handle foto baru (jika diupload)
    if ($request->hasFile('foto')) {
        // Hapus foto lama jika ada
        if ($obat->foto && \Storage::disk('public')->exists($obat->foto)) {
            \Storage::disk('public')->delete($obat->foto);
        }

        // Upload foto baru
        $fotoPath = $request->file('foto')->store('foto_obat', 'public');
        $obat->foto = $fotoPath;
    }

    // Update data lainnya
    $obat->update([
        'nama' => $request->nama,
        'kategori' => $request->kategori,
        'produsen' => $request->produsen,
        'stok' => $request->stok,
        'expired_date' => $request->expired_date,
        'keterangan' => $request->keterangan,
    ]);

    return redirect()->route('obat.index')->with('success', 'Obat berhasil diperbarui!');
        }
            public function destroy($id)
        {
            $obat = Obat::findOrFail($id);
            $obat->delete();

            return redirect()->route('obat.index')->with('success', 'Obat berhasil dihapus!');
        }

}
