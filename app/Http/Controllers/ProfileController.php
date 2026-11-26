<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Tampilkan halaman profil user yang sedang login.
     */
    public function show()
    {
        $user = Auth::user();

        return view('profile.show', compact('user'));
    }

    /**
     * Proses ganti password.
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'password_lama'          => 'required',
            'password_baru'          => 'required|min:8|confirmed',
            'password_baru_confirmation' => 'required',
        ], [
            'password_lama.required'          => 'Password lama wajib diisi.',
            'password_baru.required'          => 'Password baru wajib diisi.',
            'password_baru.min'               => 'Password baru minimal 8 karakter.',
            'password_baru.confirmed'         => 'Konfirmasi password baru tidak cocok.',
            'password_baru_confirmation.required' => 'Konfirmasi password wajib diisi.',
        ]);

        $user = Auth::user();

        // Cek apakah password lama cocok
        if (! Hash::check($request->password_lama, $user->password)) {
            return back()->withErrors([
                'password_lama' => 'Password lama yang kamu masukkan salah.',
            ])->withInput();
        }

        // Simpan password baru (di-hash, tidak pernah plain text)
        $user->update([
            'password' => Hash::make($request->password_baru),
        ]);

        return redirect()->route('profile.show')
            ->with('success', 'Password berhasil diubah. Silakan login ulang jika diperlukan.');
    }
}

