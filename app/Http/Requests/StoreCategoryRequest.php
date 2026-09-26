<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'nama_kategori' => 'required|string|max:20',
            'deskripsi' => 'nullable|string',
        ];
    }

    public function messages(): array {
        return [
            'nama_kategori.required' => 'Nama Kategori Wajib Diisi!',
            'nama_kategori.max' => 'Nama Kategori Maksimal 20 Karakter',
        ];
    }
}
