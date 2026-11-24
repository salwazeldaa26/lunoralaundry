<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LayananApiController extends Controller
{
    // Menampilkan semua layanan
    public function index()
    {
        $layanan = DB::table('tb_layanan')->get();

        return response()->json([
            'success' => true,
            'message' => 'Daftar layanan berhasil ditampilkan',
            'data' => $layanan
        ], 200);
    }

    // Menampilkan detail layanan berdasarkan ID
    public function show($id)
    {
        $layanan = DB::table('tb_layanan')
            ->where('id_layanan', $id)
            ->first();

        if (!$layanan) {
            return response()->json([
                'success' => false,
                'message' => 'Layanan tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail layanan berhasil ditampilkan',
            'data' => $layanan
        ], 200);
    }
}
