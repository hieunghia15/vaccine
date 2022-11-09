<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VaccineRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'applicable_age' => ['required', 'string'],
            'effection' => ['required', 'string'],
            'injection_dose' => ['required', 'string'],
            'injection_time' => ['required', 'string'],
            'manufacture_id' => ['required', 'string'],
            'vaccine_type_id' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Tên vắc xin không được để trống",
            'applicable_age.required' => "Độ tuổi áp dụng không được để trống",
            'effection.required' => "Độ hiệu quả không được để trống",
            'injection_dose.required' => "Số liều tiêm không được để trống",
            'injection_time.required' => "Thời gian giữa các mũi tiêm không được để trống",
        ];
    }
}
