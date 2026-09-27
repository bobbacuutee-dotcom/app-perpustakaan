@extends('layouts.app')
@section('title', 'Tambah Member')
@section('content')
        <h1>Tambah Anggota (Member)</h1>
        <a href="{{ route('members.index') }}"><= Kembali ke Daftar Anggota</a>
        <form action="{{ route('members.store') }}" method="POST">
            @csrf
            <label for="nama">Masukkan Nama</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
                <div class="error">{{ $message }}</div>
            @enderror
            <label for="nim">Masukkan NIM</label>
            <input type="text" name="nim" id="nim" value="{{ old('nim') }}">
            @error('nim')
                <div class="error">{{ $message }}</div>
            @enderror
            <label for="email">Masukkan Email</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
            <label for="nomor_telepon">Nomor Telepon</label>
            <input type="text" name="nomor_telepon" id="nomor_telepon" value="{{ old('nomor_telepon') }}">
            @error('nomor_telepon')
                <div class="error">{{ $message }}</div>
            @enderror
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}">
            @error('alamat')
                <div class="error">{{ $message }}</div>
            @enderror
            <label for="status">Status</label>
            <select name="status" id="status">Status
                <option value="Tidak Aktif">Tidak Aktif</option>
                <option value="Aktif">Aktif</option>
            </select>
            @error('status')
                <div class="error">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn">Kirim</button>
        </form>
@endsection