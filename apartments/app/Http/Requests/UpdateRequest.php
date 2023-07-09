<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'b24_manager_id' => ['integer'],
            'name' => ['string'],
            'position' => ['string'],
            'avatar' => ['string'],
            'status' => ['string'],
            'date_end' => ['date']
        ];
    }
}
