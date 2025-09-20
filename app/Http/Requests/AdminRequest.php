<?php

namespace App\Http\Requests;

use App\Rules\MobileChars;
use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'nullable|email',
            'phone' => ['required', new MobileChars()],
            'password' => 'required|min:8',
        ];
    }
}
