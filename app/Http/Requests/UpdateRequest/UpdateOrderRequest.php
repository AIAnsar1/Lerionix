<?php

namespace App\Http\Requests\UpdateRequest;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
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
            'title' => ['required', 'string', 'min:1', 'max:255'],
            'subject' => ['required', 'string', 'min:1', 'max:255'],
            'email' => ['required', 'string', 'min:1', 'max:255'],
            'message' => ['required', 'string', 'min:1'],
        ];
    }
}
