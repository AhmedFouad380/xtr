<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class OrderSubmitRequest extends FormRequest
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
            //
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:8',
            'country' => 'required|string|max:20',
            /*'city' => 'required|string|max:50',
            'zip' => 'nullable|numeric|max:10',*/
            /*'coupon_name' => 'nullable',
            'coupon_discount' => 'nullable',
            'tax' => 'nullable',*/
        ];
    }
}
