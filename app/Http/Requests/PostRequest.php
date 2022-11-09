<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'content' => ['required'],
            'thumbnail' => ['required', 'image'],
            'is_actived' => ['required', 'string'],
            'post_slug' => ['required', 'string'],
            'category_id' => ['required', 'string'],
            'user_id' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => __('Tiêu đề không được để trống'),
            'description.required' => __('Mô tả không được để trống'),
            'content.required' => __('Nội dung không được để trống'),
            'thumbnail.required' => __('Không được thiếu ảnh thu nhỏ'),
            'post_slug.required' => __('Không được để trống slug'),
            'category_id.required' => __('Danh mục không được để trống'),
            'user_id.required' => __('Tác giả không được để trống'),
            'is_actived.required' => __('Không được để trống')
        ];
    }
}
