<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'price' => 'required',
            'thumb' => 'url'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il nome del titolo è obbligatorio',
            'title.min' => 'Il titolo deve avere almeno :min caratteri',
            'price.required' => 'Il prezzo è fortemente consigliato',
            'thumb.url' => 'L\'immagine deve contenere url valido',
        ];
    }


}
