<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class StoreUserRequest extends FormRequest
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
            'name'=> [
                'required',
                'string',
                'max:255',
            ],
            'email'=> [
                'required',
                'email',
                'max:255',
                'unique:users',
                'dns'
            ],
            'password'=> [
                'string',
                'min:8',
                'confirmed',
                'mixedCase',
                'symbols'
            ],
        ];
    }
}
