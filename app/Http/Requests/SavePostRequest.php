<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
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
        // if ($this->isMethod('PATCH')){
        //     return [
        //         'title' => ['required', 'min:5'],
        //         'body' => ['required', 'min:10']
        //     ];
        // } #Validación de datos
        
        return [
            'title' => ['required', 'min:5'],
            'body' => ['required', 'min:10']
        ];
    }
}
