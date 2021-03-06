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
//        $request = \Illuminate\Support\Facades\Request::instance();
//        dd($request->all());
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
            'info'      => 'required|string|min:5|max:255',
            'phone'     => ['required', 'regex:/^(90|91|93|94|97|98|99|33)([0-9]{7})$/'],
            'image'     => 'sometimes|array',
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
            'image',
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
