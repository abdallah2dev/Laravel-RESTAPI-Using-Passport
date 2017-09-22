<?php

namespace Task\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title' => 'nullable',
            'body' => 'nullable',
            'thumbnail' => 'image|mimes:png,jpg,jpeg|max:1999|nullable',
            'image' => 'base64image|nullable'
        ];
    }
}
