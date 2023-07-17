<?php

namespace App\Http\Requests\Doctor;

use App\Models\Operational\Doctor;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreDoctorRequest extends FormRequest
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
            'specialist_id' => [
                'required', 'integer'
            ],
            'name' => [
                'required', 'string', 'max:255'
            ],
            'fee' => [
                'required', 'string', 'max:255'
            ],
            'photo' => [
                'nullable', 'string', 'max:10000'
            ],

        ];
    }
}
