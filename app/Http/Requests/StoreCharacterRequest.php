<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCharacterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:50|unique:characters',
            'type_id' => 'nullable|exists:types,id',
            'description' => 'nullable|max:500',
            'attack' => 'nullable',
            'defense' => 'nullable',
            'speed' => 'nullable',
        ];
    }
}
