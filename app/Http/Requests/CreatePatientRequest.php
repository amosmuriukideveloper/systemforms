<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePatientRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'age' => ['required'],
            'date_of_birth' => ['required'],
            'sex' => ['required'],
            'race' => ['required'],
            'sex' => ['required'],
            'ethnicity' => ['required'],
            'born_in_us' => ['required'],
            'country_of_birth' => ['required']
            
            
        ];
    }
}
