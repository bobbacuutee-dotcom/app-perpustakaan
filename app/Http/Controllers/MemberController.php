<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMemberRequest; 
use App\Models\Member;
class MemberController extends Controller
{

    public function index()
    {
        $members = Member::paginate(10);
        return view('members.index', compact('members'));
    }


    public function create()
    {
        $members = Member::all(); 
        return view('members.create', compact('members'));
    }


    public function store(StoreMemberRequest $request)
    {
        $validated = $request->validated();

        Member::create($validated);
        
        return redirect()->route('members.index')
            ->with('success', "Anggota \"{$validated['nama']}\" Berhasil Ditambahkan");
    }


    public function show(string $id)
    {
        $member = Member::findOrFail($id);
        
        return view('members.show', compact('member'));
    }


    public function edit(string $id)
    {
        $member = Member::findOrFail($id);
    
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, string $id)
    {
        $member = Member::findOrFail($id);
        $validated = $request->validated([
            'nama' => 'required|string|max:20',
            'nim' => 'required|string|max:10',
            'email' => 'required|string|max:20',
            'nomor_telepon' => 'required|integer|max:17',
            'alamat' => 'required|string|max:100',
            'status' => 'required|string',
        ]);

        $member->update($validated);

        return redirect()->route('members.index')
            ->with('succes', "Anggota \"{$validated['nama']}\" Berhasil Diperbauri");
    }


    public function destroy(string $id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
    
        return redirect()->route('members.index')
            ->with('success', "Anggota dengan Nama: {$member['nama']} Berhasil Dihapus");
    }
}
