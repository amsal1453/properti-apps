<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PermintaanInfo;

class KontakController extends Controller
{
    // Menampilkan form kontak
    public function form()
    {
        return view('kontak.form');
    }

    // Mengirim form permintaan info
    public function kirim(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'pesan' => 'required|string',
            'properti_id' => 'nullable|exists:properti,id',
        ]);

        PermintaanInfo::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'pesan' => $validated['pesan'],
            'properti_id' => $validated['properti_id'] ?? null,
            'tanggal_kirim' => now(),
            'status' => 'belum dibaca',
        ]);

        return redirect()->back()->with('success', 'Permintaan Anda telah dikirim. Terima kasih!');
    }
}
