<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Layanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    // MENYIMPAN PESANAN PELANGGAN
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_layanan' => 'required|exists:tb_layanan,id_layanan',
            'berat_kg' => 'required|numeric|min:0.5',
        ]);

        $layanan = Layanan::findOrFail($validated['id_layanan']);

        $totalHarga = round(
            $layanan->harga_per_kg * $validated['berat_kg']
        );

        $pesanan = Pesanan::create([
            'id_user' => auth()->user()->id_user,
            'id_layanan' => $layanan->id_layanan,
            'berat_kg' => $validated['berat_kg'],
            'total_harga' => $totalHarga,
            'status' => 'menunggu',
            'tanggal_masuk' => now(),
            'tanggal_selesai' => null,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Pesanan berhasil dibuat!',
            'data' => $pesanan,
        ], 201);
    }

    // RIWAYAT PESANAN PELANGGAN
    public function history()
    {
        $pesanan = Pesanan::with('layanan')
            ->where('id_user', auth()->user()->id_user)
            ->orderBy('tanggal_masuk', 'desc')
            ->get();

        return response()->json($pesanan);
    }

    // MENGAMBIL DATA PESANAN UNTUK ADMIN
    public function adminIndex()
    {
        $pesanan = Pesanan::query()
            ->leftJoin(
                'tb_users',
                'tb_pesanan.id_user',
                '=',
                'tb_users.id_user'
            )
            ->leftJoin(
                'tb_layanan',
                'tb_pesanan.id_layanan',
                '=',
                'tb_layanan.id_layanan'
            )
            ->select(
                'tb_pesanan.*',
                'tb_users.nama as nama_pelanggan',
                'tb_layanan.nama_layanan'
            )
            ->orderBy('tb_pesanan.tanggal_masuk', 'desc')
            ->get();

        return response()->json($pesanan);
    }

    // MEMPERBARUI STATUS PESANAN
    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:menunggu,diproses,selesai,diambil',
        ]);

        $pesanan = Pesanan::findOrFail($id);

        $pesanan->status = $validated['status'];

        if ($validated['status'] === 'selesai') {
            $pesanan->tanggal_selesai = now();
        }

        $pesanan->save();

        return response()->json([
            'success' => true,
            'message' => 'Status pesanan berhasil diperbarui!',
            'data' => $pesanan,
        ]);
    }
}
