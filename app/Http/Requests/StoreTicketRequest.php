<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'client_name' => 'required|string|max:255',
            'game_id' => 'required|exists:games,id',
            'client_type_id' => 'required|exists:client_types,id'
        ];
    }

    public function messages(): array
    {
        return [
            'client_name.required' => 'El nombre del cliente es obligatorio',
            'game_id.required' => 'Debe seleccionar un juego',
            'game_id.exists' => 'El juego seleccionado no es válido',
            'client_type_id.required' => 'Debe seleccionar un tipo de cliente',
            'client_type_id.exists' => 'El tipo de cliente seleccionado no es válido'
        ];
    }
}
