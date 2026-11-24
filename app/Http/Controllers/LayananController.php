<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    // Menampilkan semua layanan
    public function index()
    {
        return response()->json(
            Layanan::orderBy('id_layanan', 'desc')->get()
        );
    }

    // Menyimpan layanan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'harga_per_kg' => 'required|numeric|min:0',
            'estimasi_jam' => 'required|integer|min:1',
            'deskripsi' => 'nullable|string',
        ]);

        $layanan = Layanan::create($validated);

        return response()->json([
            'message' => 'Layanan berhasil ditambahkan.',
            'data' => $layanan,
        ], 201);
    }

    // Menampilkan satu layanan
    public function show(string $id)
    {
        return response()->json(
            Layanan::findOrFail($id)
        );
    }

    // Memperbarui layanan
    public function update(Request $request, string $id)
    {
        $layanan = Layanan::findOrFail($id);

        $validated = $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'harga_per_kg' => 'required|numeric|min:0',
            'estimasi_jam' => 'required|integer|min:1',
            'deskripsi' => 'nullable|string',
        ]);

        $layanan->update($validated);

        return response()->json([
            'message' => 'Layanan berhasil diperbarui.',
            'data' => $layanan,
        ]);
    }

    // Menghapus layanan
    public function destroy(string $id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->delete();

        return response()->json([
            'message' => 'Layanan berhasil dihapus.',
        ]);
    }
}