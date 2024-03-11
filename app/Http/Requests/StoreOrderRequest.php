<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            "name" => ["required", "min:5", "max:255"],
            "surname" => ["required", "min:5", "max:255"],
            "phone" => ["required", "max:15"],
            "email" => ["required", "min:5", "max:100"],
            "address" => ["required", "min:5", "max:255"],
            'notes' => ["nullable"],
            "paid" => [false],
            "total" => ["required"],
        ];
    }
}
