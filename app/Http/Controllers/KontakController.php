<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PermintaanInfo;
use App\Notifications\PermintaanInfoNotification;

class KontakController extends Controller
{
    // Menampilkan form kontak
    public function form()
    {
        return view('kontak.index');
    }

    // Mengirim form permintaan info
    public function kirim(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'pesan' => 'required|string',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:100',
            'properti_id' => 'nullable|exists:propertis,id',
        ]);

        $permintaanInfo = PermintaanInfo::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'nomor_telepon' => $request->phone,
            'subjek' => $request->subject,
            'pesan' => $validated['pesan'],
            'properti_id' => $validated['properti_id'] ?? null,
            'status' => 'pending',
        ]);

        // Kirim notifikasi ke semua admin
        User::all()->each(fn($user) => $user->notify(new PermintaanInfoNotification($permintaanInfo)));

        // Redirect back to original page with success message
        if ($request->is('kontak') || $request->is('kontak/*')) {
            return redirect()->back()->with('success', 'Permintaan Anda telah dikirim. Terima kasih!');
        } else {
            // If coming from homepage or other pages
            return redirect()->to(url()->previous() . '#contact')->with('success', 'Permintaan Anda telah dikirim. Terima kasih!');
        }
    }
}
