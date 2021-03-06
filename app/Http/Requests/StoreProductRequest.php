<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            // 'limit' => 'required',
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'categories_id' => 'required',
            // 'price_from' => 'required',
            // 'price_to' => 'required',
        ];
    }
}
