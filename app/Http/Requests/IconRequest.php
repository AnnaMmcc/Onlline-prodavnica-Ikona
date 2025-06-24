<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IconRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=> "required|string|unique:products",
            "description" => "required|string|min:5",
            "amount" => "required|int|min:0",
            "price" => "required|int|min:0",
            "image" => "image|mimes:jpeg,png,jpg,gif,svg|max:10120"
        ];
    }
}
