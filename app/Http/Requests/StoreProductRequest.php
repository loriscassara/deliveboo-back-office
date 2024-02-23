<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class StoreProductRequest extends FormRequest
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
            "business_name" => ["required", "min:5", "max:255"],
            "address" => ["required", "min:5", "max:255"],
            "P_IVA" => ["required", "unique", "digits:11"],
            "phone" => ["required", "digits:20"],
            "cover_image" => [File::image()->min("1")->max("2000")],
            "types" => []
        ];
    }
}
