<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterUserRequest extends FormRequest
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
            'fullname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'digits:10', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'unique:users,phone'],
            'day_of_birth' => ['required', 'date', 'before:now'],
            'gender' => ['required'],
            'email' => ['nullable', 'email'],
            'identification' => ['required', 'string', 'digits_between:8,20', 'unique:users,identification'],
            'address' => ['nullable'],
            'ward_id' => ['required'],
            'nationality_id' => ['required'],
            'ethnic_id' => ['required'],
            'password' => ['required', 'confirmed', 'between:8,20', Rules\Password::defaults()],
        ];
    }
    public function messages()
    {
        return  [
            'fullname.required' => "Họ tên không được để trống",
            'fullname.string' => "Họ tên không được chứa ký tự đặt biệt",
            'phone.required' => "Số điện thoại không được để trống",
            'phone.regex' => "Định dạng số điện thoại chưa đúng",
            'phone.digits' => "Số điện thoại không hợp lệ",
            'phone.unique' => "Số điện thoại đã tồn tại",
            'day_of_birth.required' => "Ngày sinh không được để trống",
            'day_of_birth.before' => "Ngày sinh phải trước hôm nay",
            'gender.required' => "Giới tính không được để trống",
            'email.email' => "Email không hợp lệ",
            'identification.required' => "Số CCCD/Hộ chiếu không được để trống",
            'identification.unique' => "Số CCCD/Hộ chiếu đã tồn tại",
            'identification.digits_between' => "Số CCCD/Hộ chiếu phải từ 8 đến 20 kí tự",
            'ward_id.required' => "Phường/xã không được để trống",
            'nationality_id.required' => "Quốc tịch không được để trống",
            'ethnic_id.required' => "Dân tộc không được để trống",
            'password.required' => "Mật khẩu không được để trống",
            'password.between' => "Mật khẩu phải từ 8 đến 20 kí tự",
        ];
    }
}
