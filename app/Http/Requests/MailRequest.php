<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class MailRequest extends FormRequest
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
            "nameUser" => "required|max:250",

            "emailUser" => "required|email|max:250",

            "textUser" => "required",

        ];
    }

    public function messages(): array
    {
        return [
            "nameUser.required" => "Il campo è obbligatorio",

            "emailUser.required" => "Il campo è obbligatorio",

            "textUser.required" => "Il campo è obbligatorio",

        ];
    }
}
