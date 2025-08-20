<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvatarUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'avatar' => [
                'required',
                'image',
                'mimes:jpeg,png,jpg,gif,webp',
                'max:2048', // 2MB max
                'dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000'
            ]
        ];
    }

    /**
     * Get custom error messages
     */
    public function messages(): array
    {
        return [
            'avatar.required' => 'Por favor, selecione uma imagem para o avatar.',
            'avatar.image' => 'O arquivo deve ser uma imagem.',
            'avatar.mimes' => 'A imagem deve ser do tipo: jpeg, png, jpg, gif ou webp.',
            'avatar.max' => 'A imagem não pode ser maior que 2MB.',
            'avatar.dimensions' => 'A imagem deve ter no mínimo 100x100px e no máximo 2000x2000px.'
        ];
    }
}
