<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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

            'title' =>'required|max:80',
            'description' => 'required',
            'image_link' => 'file|max:1024|nullable|mimes:jpg,bmp,png',
            // facendo cosi noi andiamo a dire che se l'utente prova ad inseirire valori oltre quelli che sono presenti nella tabella non puo
            'Type_id'=>'nullable|exists:types,id'
        ];
    }
    public function messages()
    {
        return[
       'title.required' => 'Necessito del titolo per continuare',
       'title.unique' => 'Titolo gia stato utilizzato',
        'title.max' => 'massimi caratteri consentiti sono :max',
        'description.required' => 'Necessito della descrizione per continuare',
        'image_link.mimes' => "Il file deve essere un'immagine",
        'image_link.max' => "La dimensione del file non deve superare i 1024 KB",

    ];
        
        
    }
}
