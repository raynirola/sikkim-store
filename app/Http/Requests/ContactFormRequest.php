<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'alpha_num', 'max:32'],
            'email' => ['required', 'email', 'email:rfc,dns'],
            'message' => ['required', 'min:32', 'max:1000'],
        ];
    }


}
