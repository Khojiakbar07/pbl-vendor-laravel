<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'order_id' => 'required|integer|max:100',
            'image' => 'nullable|image|max:255',
            'icon' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'level' => 'nullable|integer',
            'parent_id' => 'nullable|integer',
            'deleted'=> 'boolean',
        ];
    }
}
