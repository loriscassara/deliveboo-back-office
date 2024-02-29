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
            "user_id"=>["exists:users,id"],
            "business_name" => ["required", "min:5", "max:255"],
            "address" => ["required", "min:5", "max:255"],
            "P_IVA" => ["required", ""],
            "phone" => ["required", "min:5", "max:255"],
            "cover_image" => [File::image()->min("1kb")->max("2000kb")],
            "types" => []
        ];
    }
}
// 'business_name',
// 'address',
// 'P_IVA',
// 'phone',
// 'cover_image'