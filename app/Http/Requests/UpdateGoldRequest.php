<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGoldRequest extends FormRequest
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
            'gold_name' => 'required|string',
            'gold_purity' => 'required|string',
            'weight' => 'required|string',
            'purchase_date' => 'required|string',
            'purchase_time' => 'required|string',
            'purchase_from' => 'required|string',
            'status' => 'required|string',
            'buy_price' => 'required|string',
            'sell_price' => 'required|string',
            'spread' => 'required|string',
            'gold_image' => 'nullable|image',
        ];
    }
}
