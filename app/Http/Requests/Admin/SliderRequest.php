<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'button_ar' => 'nullable|string|max:255',
            'button_en' => 'nullable|string|max:255',
            'description_ar' => 'nullable',
            'description_en' => 'nullable',
            'link' => 'nullable|url|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg',
        ];
    }
}
