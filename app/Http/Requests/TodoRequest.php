<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
{
    public function authorize()
    {
    if ($this->path() == 'todos')
    {
        return true;
    } else {
        return false;
    }
}

    public function rules()
    {
        return [
            'content' => 'required',
        ];
    }
}
