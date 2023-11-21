<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePawnshopRequest extends FormRequest
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
            'agent_name' => 'required|string', 
            'agent_contact_num' => 'required|string',
            'email' => 'required|string',
            'hotline' => 'required|string',
            'address' => 'required|string',
            'coordinate' => 'required|string',
            'operation_time' => 'required|string',
            'user_id' => 'numeric',
            'safekeep_rate_id' => 'numeric',
        ];
    }
}
