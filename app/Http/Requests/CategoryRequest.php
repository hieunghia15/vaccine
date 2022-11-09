<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required',
            'category_slug' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('Không được để trống tên danh mục.'),
            'category_slug.required' => __('Không được để trống slug'),
        ];
    }
}
