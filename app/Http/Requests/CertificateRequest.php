<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CertificateRequest extends FormRequest
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
            'identification' => ['required', 'string'],
            'phone' => ['required', 'string', 'digits:10', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            'vaccination_number_id' => 'required',
            'vaccination_time' => 'required', 'dateTime',
            'vaccine_id' => 'required',
            'lot_number' => 'nullable',
            'vaccination_site_id' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'identification.required' => "Số CCCD/Hộ chiếu không được để trống",
            'phone.required' => "Số điện thoại không được để trống",
            'phone.regex' => "Định dạng số điện thoại chưa đúng",
            'phone.digits' => "Số điện thoại không hợp lệ",
            'vaccination_number_id.required' => "Số mũi vắc xin không được để trống",
            'vaccination_time.required' => "Thời gian tiêm không được để trống",
            'vaccination_time.dateTime' => "Thời gian tiêm phải đúng định dạng",
            'vaccine_id.required' => "Vắc xin không được để trống",
            'vaccination_site_id.required' => "Địa điểm tiêm không được để trống"
        ];
    }
}
