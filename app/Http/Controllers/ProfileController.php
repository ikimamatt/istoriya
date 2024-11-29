<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Ganti first() dengan firstOrFail() untuk memastikan data selalu ada
        $profiles = Profile::firstOrFail();

        return view('admin.readcompro', compact('profiles'));
    }

    public function update(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);  // Cari profile berdasarkan ID

        // Validasi input dari form
        $request->validate([
            'instagram' => 'required|string',
            'tiktok' => 'required|string',
            'whatsapp' => 'required|string|max:20',
            'phone' => 'required|string|max:20',
        ]);

        // Update data profile
        $profile->instagram = $request->instagram;
        $profile->tiktok = $request->tiktok;
        $profile->whatsapp = $request->whatsapp;
        $profile->phone = $request->phone;

        // Simpan perubahan data profile
        $profile->save();

        // Kembalikan response ke halaman profile dengan pesan sukses
        return redirect()->route('admin.profiles.index')->with('success', 'Profil berhasil diperbarui!');
    }
}
