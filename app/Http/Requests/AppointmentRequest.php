<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
            'nrc' => ['required'],
            'appointment_date' => ['required', 'date'],
            'appointment_time' => ['required'],
            'phone_no' => ['required'],
            'address' => ['nullable'],
            'specialist_id' => ['nullable'],
            'email' => ['nullable'],
            'message' => ['nullable'],
            'file_name' => ['nullable'],
            'file_path' => ['nullable'],
        ];
    }
}
