<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeUpdateRequest extends FormRequest
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
            'image' => ['required', 'string'],
            'name' => ['required', 'string', 'max:50'],
            'phone' => ['required', 'string', 'max:20'],
            'division_id' => ['required', 'string'],
            'position' => ['required', 'string', 'max:50'],
        ];
    }
}
