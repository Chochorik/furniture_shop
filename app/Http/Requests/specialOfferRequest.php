<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class specialOfferRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'sale' => ['required', 'numeric'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
