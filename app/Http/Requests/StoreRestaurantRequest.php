<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class StoreRestaurantRequest extends FormRequest
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
            "description" => ["required"],
            "address" => ["required", "min:5", "max:255"],
            "P_IVA" => ["required"],
            "phone" => ["required", "min:5", "max:255"],
            "cover_image" => [File::image()->min("1kb")->max("2000kb")],
            "types" => ["required", "min:2"] //check after JS 
        ];
    }
}
