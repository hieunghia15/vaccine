<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VaccinatedPersonInfoRequest extends FormRequest
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
            'vaccination' => ['required'],
            'health_insurance_number' => ['nullable', 'string'],
            'priority_group_id' => ['required'],
            'job' => ['required', 'string'],
            'address' => ['required'],
            'ward_id' => ['required'],
            'guardian' => ['nullable'],
            'guardian_phone_number' => ['nullable', 'required_with:guardian', 'digits:10', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            'relation_id' => ['nullable', 'required_with:guardian'],
            'preferred_date' => ['required'],
            'session' => ['required'],
            'anaphylaxis' => ['required'],
            'covid_19' => ['required'],
            'other_vaccination' => ['required'],
            'immunosuppression' => ['required'],
            'immunosuppressant' => ['required'],
            'acute_illness' => ['required'],
            'chronic' => ['required'],
            'chronic_illness' => ['required'],
            'pregnant' => ['required'],
            'over_age' => ['required'],
            'coagulation' => ['required'],
            'allergy' => ['required'],
            'status' => ['required'],
            'certificate_id' => ['nullable'],
        ];
    }
    public function messages()
    {
        return [
            'vaccination.required' => "Đăng ký mũi tiêm không được để trống",
            'health_insurance_number.string' => "Số BHYT không đúng định dạng",
            'priority_group_id.required' => "Nhóm ưu tiên không được để trống",
            'job.required' => "Nghề nghiệp không được để trống",
            'address.required' => "Địa chỉ hiện tại không được để trống",
            'ward_id.required' => "Phường/xã không được để trống",
            'preferred_date.required' => "Ngày tiêm dự kiến không được để trống",
            'session.required' => "Buổi tiêm không được để trống",
            'status.required' => "Phiếu đồng ý tiêm không được để trống",
            'guardian_phone_number.required_with' => "Số điện thoại người giám hộ không được để trống",
            'guardian_phone_number.regex' => "Định dạng số điện thoại chưa đúng",
            'guardian_phone_number.digits' => "Số điện thoại không hợp lệ",
            'relation_id.required_with' => "Mối quan hệ không được để trống",
        ];
    }
}
