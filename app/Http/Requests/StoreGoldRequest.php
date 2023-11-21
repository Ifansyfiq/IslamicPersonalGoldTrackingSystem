<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGoldRequest extends FormRequest
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
            'buy_shop' => 'required|string',
            'status' => 'required|string',
            'buy_price' => 'required|string',
            'sell_price' => 'required|string',
            'spread' => 'required|string',
            'user_id' => 'numeric',
            'gold_type_id' => ['required', 'exists:gold_types,id'],
        ];
    }
}
