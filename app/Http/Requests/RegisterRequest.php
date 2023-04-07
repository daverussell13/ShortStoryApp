<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;

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
            "username" => ['required', 'string', 'min:1', 'max:20', 'unique:users,username'],
            "email" => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            "password" => ['required', Rules\Password::defaults(), 'confirmed']
        ];
    }
}
