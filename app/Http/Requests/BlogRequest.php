<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'date' => ['required', 'date'],
            'title' => ['required'],
            'body' => ['required'],
            'specialist_id' => ['nullable'],
            'title_image' => ['nullable'],
            'file_name' => ['nullable'],
            'file_path' => ['nullable'],
        ];
    }
}
