<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'price' => ['required', 'numeric'],
            'main_image' => ['nullable'],
            'schema' => ['nullable'],
            'additionally' => ['nullable'],
            'rating' => ['boolean'],
            'characteristics' => ['required'],
            'schema_additional' => ['nullable'],
            'model' => ['required'],
            'schema_title' => ['nullable'],
            'schema_description' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
