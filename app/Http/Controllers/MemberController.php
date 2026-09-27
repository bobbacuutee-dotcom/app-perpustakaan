<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMemberRequest; 

class MemberController extends Controller
{
    private array $members = [
        ['nama' => 'Najiv', 'nim' => 'M001', 'email' => 'Najiv@gmail.com', 'nomor_telepon' => '0890988', 'alamat' => 'Semolowaru', 'status' => 'Aktif'],
        ['nama' => 'Najiv', 'nim' => 'M001', 'email' => 'Najiv@gmail.com', 'nomor_telepon' => '0890988', 'alamat' => 'Semolowaru', 'status' => 'Aktif'],
        ['nama' => 'Najiv', 'nim' => 'M001', 'email' => 'Najiv@gmail.com', 'nomor_telepon' => '0890988', 'alamat' => 'Semolowaru', 'status' => 'Aktif'],
        ['nama' => 'Najiv', 'nim' => 'M001', 'email' => 'Najiv@gmail.com', 'nomor_telepon' => '0890988', 'alamat' => 'Semolowaru', 'status' => 'Aktif'],
        ['nama' => 'Najiv', 'nim' => 'M001', 'email' => 'Najiv@gmail.com', 'nomor_telepon' => '0890988', 'alamat' => 'Semolowaru', 'status' => 'Aktif'],
    ];

    public function index()
    {
        $members = $this->members;
        return view('members.index', compact('members'));
    }


    public function create()
    {
        $members = $this->members;
        return view('members.create', compact('members'));
    }


    public function store(StoreMemberRequest $request)
    {
        $validated = $request->validated();
        return redirect()->route('members.index')
            ->with('success', "Anggota \"{$validated['nama']}\" Berhasil Ditambahkan");
    }


    public function show(string $id)
    {
        $member = collect($this->members)->firstWhere('nama', (string) $nama);
        abort_if(! $member, 404);
        return view('members.show', compact('member'));
    }


    public function edit(string $id)
    {
        $member = collect($this->member)->firstWhere('nama', (string) $nama);
        abort_if(! $member, 404);
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validated([
            'nama' => 'required|string|max:20',
            'nim' => 'required|string|max:10',
            'email' => 'required|string|max:20',
            'nomor_telepon' => 'required|integer|max:17',
            'alamat' => 'required|string|max:100',
            'status' => 'required|string',
        ]);
        return redirect()->route('members.index')
            ->with('succes', "Anggota \"{$validated['nama']}\" Berhasil Diperbauri");
    }


    public function destroy(string $id)
    {
        return redirect()->route('members.index')
            ->with('success', "Anggota dengan Nama: {$nama} Berhasil Dihapus");
    }
}
