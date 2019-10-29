<?php

namespace Modules\Dashboard\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyInfoRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cnpj' => 'max:14',
            'state_registration' => 'max:12',
            'email' => 'nullable|email'
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


    protected function prepareForValidation()
    {
        $all = $this->all();
        $all['cnpj'] = preg_replace('/\D/', '', $all['cnpj']);
        $all['state_registration'] = preg_replace('/\D/', '', $all['state_registration']);

        $this->replace($all);
    }
}
