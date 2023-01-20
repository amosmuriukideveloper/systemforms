<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
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
            'country_of_birth' => ['required'],
            
            // 'name' => ['string', 'max:255'],
            // 'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}
