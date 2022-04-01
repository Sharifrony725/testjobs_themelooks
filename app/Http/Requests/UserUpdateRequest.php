<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'email|required|unique:users,id',
            'password' => 'required|string|min:6',
            'is_active' => 'required',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'birth_date' => ' required|date|date_format:Y-m-d'
        ];
    }
}
