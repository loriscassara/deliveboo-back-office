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
            "restaurant_id" => ["exists:restaurants,id"],
            "name" => ["required", "min:5", "max:255"],
            "ingredients" => ["required", "min:5", "max:255"],
            "price" => ["required"],
            "description" => ["required", "min:5", "max:255"],
            "image" => [File::image()->min("1kb")->max("2000kb")],
            "visible" => []
        ];
    }
}
        // 'name',
        // 'ingredients',
        // 'price',
        // 'description',
        // 'visible',
        // 'image'