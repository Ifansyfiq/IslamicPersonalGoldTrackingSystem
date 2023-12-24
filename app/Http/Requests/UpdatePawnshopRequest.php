<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePawnshopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'arrahnu_type' => 'required|string',
            'arrahnu_name' => 'required|string',
            'margin' => 'required|string',
            'loan_duration' => 'required|string',
            'safekeep_rate1' => 'required|string',
            'safekeep_rate2' => 'required|string',
            'safekeep_rate3' => 'required|string',
            'agent_name' => 'required|string',
            'agent_contact_num' => 'required|string|',
            'sun' => 'required|string',
            'mon' => 'required|string',
            'tue' => 'required|string',
            'wed' => 'required|string',
            'thu' => 'required|string',
            'fri' => 'required|string',
            'sat' => 'required|string',
            'email' => 'required|string',
            'hotline' => 'required|string',
            'address' => 'required|string',
            'website_link' => 'required|string',
        ];
    }
}
