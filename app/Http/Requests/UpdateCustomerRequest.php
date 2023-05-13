<?php

namespace App\Http\Requests;

class UpdateCustomerRequest
{
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
            'name'=> 'required|string|max:255',
            'fullname'=> 'required|string|max:255',
            'birthday'=> 'required|string|max:255',
            'phone'=> 'required|string|max:255',
            'image'=> 'nullable|images'

        ];
    }

}
