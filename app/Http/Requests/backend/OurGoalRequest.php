<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;

class OurGoalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'mimes:jpg,bmp,png,jpeg | max: 10000', //10000 kb
            'title' => 'required | string',
            'subtitle' => 'nullable',
            'content' => 'nullable'
        ];
    }
}
