<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => 'required|string|min:5|max:255',
            'email'     => 'required|email',
            'password'  => 'required|min:8|max:16',
            'info'      => 'required|string|min:5|max:255',
            'phone'     => ['required', 'regex:/^(90|91|93|94|97|98|99|33)([0-9]{7})$/'],
            'role'      => 'required|integer|min:0|max:3',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name',
            'email',
            'password',
            'info',
            'phone',
            'role',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
