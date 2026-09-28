<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest{
    public function authorize(): bool{
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array{
        return [
            'nama' => 'required|string|max:20',
            'nim' => 'required|string|max:10',
            'email' => 'required|string|max:20',
            'nomor_telepon' => 'required|string|max:17',
            'alamat' => 'required|string|max:100',
            'status' => 'required|string',
        ];
    }
    public function messages(): array{
        return [
            'nama.required' => 'Nama Wajib Diisi!',
            'nama.max' => 'Nama Maksimal 20 Karakter.',
            'nim.required' => 'NIM Wajib Diisi!',
            'nim.max' => 'NIM Maksimal 10 Karakter.',
            'email.required' => 'Email Wajib Diisi!',
            'email.max' => 'Email Maksimal 20 Karakter.',
            'nomor_telepon.required' => 'Nomor Telepon Wajib Diisi!',
            'nomor_telepon.string' => 'Nomor Telepon Harus Berupa Angka!',
            'nomor_telepon.max' => 'Nomor Telepon Maksimal 17 Karakter.',
            'alamat.required' => 'Alamat Wajib Diisi!',
            'alamat.max' => 'Alamat Maksimal 100 Karakter',
            'status.required' => 'Status Wajib Dipilih!',
        ];
    }
}