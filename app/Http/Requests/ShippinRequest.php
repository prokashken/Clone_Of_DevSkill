<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippinRequest extends FormRequest
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
            'FullName' => 'required',
            'Phone' => 'required',
            'Email' => 'required',
            'Address' => 'required',
        ];
    }
}
