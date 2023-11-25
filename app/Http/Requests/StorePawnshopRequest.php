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
            'safekeep_rate1' => 'required|string',
            'safekeep_rate2' => 'required|string',
            'safekeep_rate3' => 'required|string',
            'agent_name' => 'required|string',
            'agent_contact_num' => 'required|string',
            'sun_start' => 'required|string',
            'sun_end' => 'required|string',
            'mon_start' => 'required|string',
            'mon_end' => 'required|string',
            'tue_start' => 'required|string',
            'tue_end' => 'required|string',
            'wed_start' => 'required|string',
            'wed_end' => 'required|string',
            'thu_start' => 'required|string',
            'thu_end' => 'required|string',
            'fri_start' => 'required|string',
            'fri_end' => 'required|string',
            'sat_start' => 'required|string',
            'sat_end' => 'required|string',
            'email' => 'required|string',
            'hotline' => 'required|string',
            'address' => 'required|string',
            'coordinate' => 'required|string',
            'user_id' => 'numeric',
            'safekeep_rate_id' => 'numeric',
        ];
    }
}
