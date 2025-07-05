<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::all();
        return view('admin.dokter.index', compact('dokters'));
    }

    public function create()
    {
        return view('admin.dokter.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'spesifikasi' => 'required|string|max:255'
        ]);

        Dokter::create($request->all());

        return redirect()->route('admin.dokter.index')->with('success', 'Data Dokter berhasil ditambah');
    }

    public function edit(Dokter $dokter)
    {
        return view('admin.dokter.edit', compact('dokter'));
    }

    public function update(Request $request, Dokter $dokter)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required|string|max:255',
            'spesifikasi' => 'required|string|max:255'
        ]);

        $dokter->update($request->all());

        return redirect()->route('admin.dokter.index')->with('success', 'Data Dokter berhasil diperbarui!');
    }

    public function destroy(Dokter $dokter)
    {
        $dokter->delete();

        return redirect()->route('admin.dokter.index')->with('success', 'Data Dokter berhasil dihapus!');
    }
}
