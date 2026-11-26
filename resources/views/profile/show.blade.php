{{-- File: resources/views/profile/show.blade.php --}}
@extends('layouts.app')

@section('title', 'Profil Petugas')

@section('content')
    <h1>Profil Petugas</h1>

    {{-- Info profil --}}
    <table class="info" style="max-width:500px;">
        <tr>
            <th style="width:160px; background:#f3f4f6;">Nama</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th style="background:#f3f4f6;">Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th style="background:#f3f4f6;">Role</th>
            <td>{{ ucfirst($user->role) }}</td>
        </tr>
    </table>

    <hr style="margin: 32px 0;">

    {{-- Form ganti password --}}
    <h2>Ganti Password</h2>

    <form action="{{ route('profile.password') }}" method="POST" style="max-width:400px;">
        @csrf
        @method('PUT')

        <label for="password_lama">Password Lama</label>
        <input type="password" name="password_lama" id="password_lama" autocomplete="current-password">
        @error('password_lama')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="password_baru">Password Baru</label>
        <input type="password" name="password_baru" id="password_baru" autocomplete="new-password">
        @error('password_baru')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="password_baru_confirmation">Konfirmasi Password Baru</label>
        <input type="password" name="password_baru_confirmation" id="password_baru_confirmation" autocomplete="new-password">
        @error('password_baru_confirmation')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn" style="margin-top:16px;">Simpan Password Baru</button>
    </form>
@endsection

