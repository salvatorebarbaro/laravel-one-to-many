<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTypeRequest extends FormRequest
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
                'Tipologia' => 'required|max:255',
                'description' => 'nullable',
            
        ];
    }
   
    public function attributes(): array
    {
        return [
            'Tipologia' => 'Tipologia',
            'description' => 'Descrizione',
        ];
    }
    public function messages()
    {
        return [
            'Tipologia.required' => 'Necessito della tipologia per continuare',
            'Tipologia.max' => 'massimi caratteri consentiti sono :max',
            'description' => 'Descrizione',
        ];
    }
}
