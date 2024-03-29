<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBird extends FormRequest
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
            'name' => ['required', 'string'],
            'ring' => ['nullable', 'string', 'unique:birds,ring'],
            'dead' => ['nullable'],
            'location_id' => ['nullable', 'exists:locations,id']
        ];
    }
}
