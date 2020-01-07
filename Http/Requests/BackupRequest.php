<?php

namespace Modules\Dashboard\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BackupRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'destiny' => ['nullable', 'string', 'max:255', function ($attribute, $value, $fail) {
                if(!is_dir($value))
                {
                                $fail('"'.$value.'" Não é um caminho válido.');
                }    
        }],
            'auto' => 'nullable|integer|min:0'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

}
