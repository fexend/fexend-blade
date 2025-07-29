<?php

namespace App\Http\Requests\Settings\Permission;

use Illuminate\Foundation\Http\FormRequest;

class StorePermissionRequest extends FormRequest
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
            'group' => 'required|string|max:255',
            'guard_name' => 'required|string|max:255',
            'name' => 'required|array',
            'name.*' => 'required|string|max:255',
        ];
    }
}
