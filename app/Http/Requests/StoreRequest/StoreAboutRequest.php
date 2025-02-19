<?php

namespace App\Http\Requests\StoreRequest;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutRequest extends FormRequest
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
            'socials_networks' => ['required', 'array'],
            'questions' => ['required', 'array'],
            'address' => ['required', 'string', 'min:1', 'max:255'],
            'map' => ['required', 'string', 'min:1', 'max:255'],
            'mail' => ['required', 'string', 'min:1', 'max:255'],
            'phone' => ['required', 'string', 'min:1', 'max:255'],
        ];
    }
}
