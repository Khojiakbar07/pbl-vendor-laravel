<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderItemRequest extends FormRequest
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
            'order_id'=> 'required|integer|max:100',
            'product_id'=> 'required|integer|max:100',
            'quantity'=> 'boolean',
            'price'=> 'integer',
            'variation'=> 'nullable|string',
            'deleted'=> 'boolean',
        ];
    }
}
