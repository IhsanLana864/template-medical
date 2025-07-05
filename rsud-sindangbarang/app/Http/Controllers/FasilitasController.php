<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    public function index()
    {
        $all_fasilitas = Fasilitas::all();
        return view('admin.fasilitas.index', compact('all_fasilitas'));
    }

    public function create()
    {
        return view('admin.fasilitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul' => 'nullable|string|max:255',
            'keterangan' => 'nullable|string'
        ]);

        $fotoPath = null;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fotoPath = $file->store('fasilitas', 'public'); 
        }

        Fasilitas::create([
            'gambar' => $fotoPath,
            'judul' => $request->judul,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('admin.fasilitas.index')->with('success', 'Data berhasil ditambah');
    }

    public function edit(Fasilitas $fasilitas)
    {
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, Fasilitas $fasilitas)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul' => 'nullable|string|max:255',
            'keterangan' => 'nullable|string'
        ]);

        $imagePath = $fasilitas->gambar;

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama dari storage jika ada
            if ($fasilitas->gambar) {
                Storage::disk('public')->delete($fasilitas->gambar);
            }
            // Simpan gambar baru
            $imagePath = $request->file('gambar')->store('fasilitas', 'public');
        }

        $dataToUpdate = $validatedData;

        $dataToUpdate['gambar'] = $imagePath;

        $fasilitas->update($dataToUpdate);

        return redirect()->route('admin.fasilitas.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(Fasilitas $fasilitas)
    {
        if ($fasilitas->gambar) { 
            Storage::disk('public')->delete($fasilitas->gambar);
        }

        $fasilitas->delete();

        return redirect()->route('admin.fasilitas.index')->with('success', 'Data berhasil dihapus!');
    }
}
