<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStoryRequest extends FormRequest
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
            'cover' => 'image|mimes:png,jpeg|max:2048',
            'title' => 'required|string|max:100',
            'genre_id' => 'required|numeric|exists:genres,id',
            'synopsis' => 'required|string|max:300',
            'content' => 'required|string'
        ];
    }
}
