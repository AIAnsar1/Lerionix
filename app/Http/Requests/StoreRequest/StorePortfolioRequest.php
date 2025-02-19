<?php

namespace App\Http\Requests\StoreRequest;

use Illuminate\Foundation\Http\FormRequest;

class StorePortfolioRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:1', 'max:255'],
            'type' => ['required', 'string', 'min:1', 'max:255'],
            'photo' => ['required', 'string', 'min:1', 'max:255'],
            'description' => ['required', 'string', 'min:1'],
            'project_link' => ['required', 'string', 'min:1', 'max:255'],
            'tags_id' => ['required', 'string', 'exists:tags,id'],
        ];
    }
}
