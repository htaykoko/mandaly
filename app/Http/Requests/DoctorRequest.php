<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'degree' => ['required'],
            'mobile' => ['required'],
            'licence_no' => ['required'],
            'licence_expired_date' => ['required', 'date'],
            'start_time' => ['required'],
            'end_time' => ['required'],
            'image_name' => ['nullable'],
            'image_path' => ['nullable'],
            'age' => ['required', 'integer'],
            'specialist_id' => ['required', 'integer'],
            'remark' => ['nullable']
        ];
    }
}
