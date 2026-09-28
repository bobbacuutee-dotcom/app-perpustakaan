@extends('layouts.app')
@section('title', 'Detail Anggota')
@section('content')
    <h1>Detail Anggota (Member)</h1>
    <a href="{{ route('members.index') }}"><= Kembali ke Daftar Anggota</a>
    <table>
            <tr><td><b>Nama</b></td><td>{{ $member->nama }}</td></tr>
            <tr><td><b>NIM</b></td><td>{{ $member->nim }}</td></tr>
            <tr><td><b>Email</b></td><td>{{ $member->email }}</td></tr>
            <tr><td><b>Nomor Telepon</b></td><td>{{ $member->nomor_telepon }}</td></tr>
            <tr><td><b>Alamat</b></td><td>{{ $member->alamat }}</td></tr>
            <tr><td><b>Status</b></td><td>{{ ucfirst($member->status) }}</td></tr>
    </table>
@endsection