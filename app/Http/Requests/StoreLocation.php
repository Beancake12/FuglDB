<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLocation extends FormRequest
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
            'adress' => ['nullable', 'string', 'required_without:latitude,longitude'],
            'city' => ['nullable', 'string', 'required_without:latitude,longitude'],
            'zip' => ['nullable', 'digits:4', 'required_without:latitude,longitude'],
            'latitude' => ['nullable', 'required_without:adress,city,zip'],
            'longitude' => ['nullable', 'required_without:adress,city,zip'],
        ];
    }
}
