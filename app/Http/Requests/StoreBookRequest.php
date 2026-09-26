<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'judul' => 'required|string|max:100',
            'penulis' => 'required|string|max:20',
            'penerbit' => 'required|string|max:100',
            'tahun_terbit' => 'required|integer|min:1900|max:'.date('Y'),
            'isbn' => 'nullable|string|max:20',
            'stok' => 'required|integer|min:0',
            'category_id' => 'required|integer',
        ];
    }

    public function messages(): array {
        return [
            'judul.required' => 'Judul Buku Wajib Diisi!',
            'judul.max' => 'Judul Buku Maksimal 100 Karakter.',
            'penulis.requirde' => 'Penulis Wajib Diisi!',
            'penulis.max' => 'Penulis Maksimal 20 Karakter.',
            'penerbit.required' => 'Penerbit Wajib Diisi!',
            'penerbit.max' => 'Penerbit Maksimal 100 Karakter.',
            'tahun_terbit.required' => 'Tahun Terbit Wajib Diisi!',
            'tahun_terbit.min' => 'Tahun Terbit Minimal Tahun 1900.',
            'isbn.max' => 'ISBN Maksimal 20 Karakter.',
            'stok.required' => 'Stok Wajib Diisi!',
            'stok.integer' => 'Stok Berupa Bilangan Bulat.',
            'stok.min' => 'Stok Minimal 0 Buah.',
            'category_id.required' => 'Kategori ID Wajib Diisi!',
            'category_id.integer' => 'Kategori ID Berupa Angka!',
        ];
    }
}
