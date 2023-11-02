<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'supplier' => 'required|string',
            'description' => 'nullable|string',
        ];
    }
}
