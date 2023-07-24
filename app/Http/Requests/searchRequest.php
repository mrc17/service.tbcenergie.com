<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'search' => 'required|min:3|alpha_spaces'
        ];
    }

    /**
     * Get the validation error messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'search.required' => 'Vous devez entrer au moins un mot identifiant un site.',
            'search.min' => 'Le champ de recherche doit comporter au moins :min caractères.',
            'search.alpha_spaces' => 'Le champ de recherche ne peut contenir que des lettres et des espaces.'
        ];
    }
}
