<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Mail;
use QrCode;
use App\Mail\EMail;
use App\Models\User;
use App\Models\Ward;
use App\Models\Vaccine;
use App\Models\Certificate;
use App\Models\PriorityGroup;
use App\Models\MedicalHistory;
use App\Models\VaccinationSite;
use App\Models\VaccinationNumber;
use App\Models\HealthDeclaration;
use App\Models\VaccineRegistration;
use App\Models\VaccinationConsentForm;
use App\Models\VaccinatedPersonInformation;

class InjectionController extends Controller
{
    public function  __construct(
        User $userModel,
        Ward $wardModel,
        Certificate $certificateModel,
        PriorityGroup $priorityGroupModel,
        HealthDeclaration $healthDeclarationModel,
        VaccineRegistration $vaccineRegistrationModel,
        Vaccine $vaccineModel,
        VaccinationSite $vaccinationSiteModel,
        VaccinationNumber $vaccinationNumberModel,
        VaccinatedPersonInformation $vaccinatedPersonInformationModel,
        MedicalHistory $medicalHistoryModel,
        VaccinationConsentForm $vaccinationConsentFormModel,
    ) {
        $this->users = $userModel;
        $this->wards = $wardModel;
        $this->certificates = $certificateModel;
        $this->priorityGroups = $priorityGroupModel;
        $this->healthDeclarations = $healthDeclarationModel;
        $this->vaccineRegistrations = $vaccineRegistrationModel;
        $this->vaccines = $vaccineModel;
        $this->vaccinationSites = $vaccinationSiteModel;
        $this->vaccinationNumbers = $vaccinationNumberModel;
        $this->vaccinatedPersonInformations = $vaccinatedPersonInformationModel;
        $this->medicalHistories = $medicalHistoryModel;
        $this->vaccinationConsentForms = $vaccinationConsentFormModel;
    }

    public function searchRegistration(Request $request)
    {
        $this->validate(
            $request,
            [
                'identification' => ['required', 'string'],
                'phone' => ['required', 'string'],
            ],
            [
                'identification.required' => "Số CCCD/Hộ chiếu không được để trống",
                'phone.required' => "Số điện thoại không được để trống",
            ]
        );
        $users = $this->users
            ->where('identification', '=', $request->identification)
            ->where('phone', '=', $request->phone)
            ->first();
        if ($users) {
            $results = VaccineRegistration::with('user')->where('user_id', $users->id)->get();
            return redirect()->route('admin.injections.result-registration')->with([
                'users' => $users,
                'results' => $results
            ]);
            //return view('admin.injections.registrations.result-registration', compact('results', 'users'));
        } else {
            return back()->with('warning', 'Công dân chưa tồn tại trên hệ thống hoặc đã có lỗi xảy ra');
        }
    }
    public function resultVaccination(Request $request)
    {
        $this->validate(
            $request,
            [
                'identification' => ['required', 'string'],
                'phone' => ['required', 'string'],
            ],
            [
                'identification.required' => "Số CCCD/Hộ chiếu không được để trống",
                'phone.required' => "Số điện thoại không được để trống",
            ]
        );
        $users = $this->users
            ->where('identification', '=', $request->identification)
            ->where('phone', '=', $request->phone)
            ->first();
        if ($users) {
            $certificates = $this->certificates->where('user_id', $users->id)->get();

            $certificate_latest = $this->certificates
                ->where('user_id', $users->id)
                ->latest()
                ->first();
            if ($certificate_latest != null) {
                $certificates = $this->certificates
                    ->where('user_id', $users->id)
                    ->get();
                $vaccination_number = $certificates->pluck('vaccination_number_id');
                $vaccine_name = $certificate_latest->vaccine->name;
                $info = $users->phone . ' - ' . $users->fullname . ' - ' . 'Đã tiêm ' .
                    $certificates->count() . ' mũi vắc xin' . ' - ' . 'Mũi mới nhất:' . $vaccine_name;
                $encode = utf8_encode($info);
                $qrcode = QrCode::size(80)->generate($encode);
                $data = [
                    'certificates' => $certificates,
                    'users' => $users,
                    'qrcode' => $qrcode,
                    'vaccination_number' => $vaccination_number
                ];
            } else {
                $data = [
                    'certificates' => null,
                    'users' => $users,
                ];
            }
            return view('admin.injections.vaccinations.result-vaccination')->with($data);
        } else {
            return back()->with('warning', 'Công dân chưa tồn tại trên hệ thống hoặc đã có lỗi xảy ra');
        }
    }
    public function vaccineRegistrationUnconfirmed()
    {
        $unconfirmed = VaccineRegistration::with('user')
            ->where('status', 0)
            ->get();
        return view('admin.injections.registrations.unconfirmed', compact('unconfirmed'));
    }
    public function vaccineRegistrationConfirmed()
    {
        $confirmed = VaccineRegistration::with('user')
            ->where('status', 1)
            ->get();
        return view('admin.injections.registrations.confirmed', compact('confirmed'));
    }
    public function acceptVaccineRegistraction(Request $request)
    {
        $data = $request->all();
        $vaccine_registration = VaccineRegistration::find($data['vaccine_registration_id']);
        $vaccine_registration->status = $data['status'];
        $vaccine_registration->save();
    }
    public function showVaccineRegistraction($id)
    {
        $vaccine_registration = $this->vaccineRegistrations::with('user', 'info')->findOrFail($id);
        //dd($vaccine_registration);
        return view('admin.injections.registrations.show', compact('vaccine_registration'));
    }
    public function createInfo()
    {
        return view('admin.injections.informations.create-info');
    }
    public function storeInfo(Request $request)
    {
        $request->validate([
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
        ], [
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
        ]);
        $password = Str::random(8);
        $user = $this->users::create([
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'day_of_birth' => $request->day_of_birth,
            'gender' => $request->gender,
            'email' => $request->email,
            'identification' => $request->identification,
            'address' => $request->address,
            'ward_id' => $request->ward_id,
            'nationality_id' => $request->nationality_id,
            'ethnic_id' => $request->ethnic_id,
            'password' => Hash::make($password),
        ]);
        $user->syncRoles(['citizen']);

        $mailData = [
            'title' => 'Mật khẩu đăng nhập của bạn tại đây',
            'body' => $password
        ];
        Mail::to($request->email)->send(new EMail($mailData));
        return redirect()->route('admin.injections.make-certificate')->with('status', "Nhập thông tin tiêm chủng thành công");
    }
    public function makeCertificate()
    {
        $vaccines = $this->vaccines::all();
        $vaccinationSites = $this->vaccinationSites::all();
        $vaccinationNumbers = $this->vaccinationNumbers::all();
        return view('admin.injections.vaccinations.make-certificate', compact('vaccines', 'vaccinationSites', 'vaccinationNumbers'));
    }
    public function storeCertificate(Request $request)
    {
        $this->validate(
            $request,
            [
                'identification' => ['required', 'string'],
                'phone' => ['required', 'string', 'digits:10', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
                'vaccination_number_id' => 'required',
                'vaccination_time' => 'required', 'dateTime',
                'vaccine_id' => 'required',
                'lot_number' => 'nullable',
                'vaccination_site_id' => 'required'
            ],
            [
                'identification.required' => "Số CCCD/Hộ chiếu không được để trống",
                'phone.required' => "Số điện thoại không được để trống",
                'phone.regex' => "Định dạng số điện thoại chưa đúng",
                'phone.digits' => "Số điện thoại không hợp lệ",
                'vaccination_number_id.required' => "Số mũi vắc xin không được để trống",
                'vaccination_time.required' => "Thời gian tiêm không được để trống",
                'vaccination_time.dateTime' => "Thời gian tiêm phải đúng định dạng",
                'vaccine_id.required' => "Vắc xin không được để trống",
                'vaccination_site_id.required' => "Địa điểm tiêm không được để trống"
            ]
        );
        $user_id = User::where('phone', '=', $request->phone)
            ->where('identification', '=', $request->identification)
            ->first()->id;

        if ($user_id != null) {
            $this->certificates->create([
                'vaccination_number_id' => $request->vaccination_number_id,
                'vaccination_time' => $request->vaccination_time,
                'lot_number' => $request->lot_number,
                'vaccine_id' => $request->vaccine_id,
                'vaccination_site_id' => $request->vaccination_site_id,
                'user_id' => $user_id,
            ]);

            $certificates = $this->certificates
                ->where('user_id', $user_id)
                ->get();

            $users = $this->users->where('id', $user_id)->first();
            return view('admin.injections.vaccinations.certificate', compact('user_id', 'certificates', 'users'))->with('status', 'Lập giấy xác nhận thành công');
        } else {
            return back()->with('warning', 'Công dân chưa tồn tại trên hệ thống hoặc đã có lỗi xảy ra');
        }
    }
    public function editDose($id)
    {
        $certificates = $this->certificates::findOrFail($id);
        $certificate_id = $certificates->id;

        $vaccines = $this->vaccines::all();
        $vaccine_id = $certificates->vaccine_id;
        $vaccine_certificates = $this->vaccines::where('id', '<>', $vaccine_id)->get();

        $vaccinationSites = $this->vaccinationSites::all();

        $vaccination_numbers = $this->vaccinationNumbers::all();
        $vaccination_number_id = $certificates->vaccination_number_id;
        $dose_certificates = $this->vaccinationNumbers::where('id', '<>', $vaccination_number_id)->get();

        return view(
            'admin.injections.vaccinations.update-dose',
            compact(
                'vaccines',
                'vaccine_certificates',
                'vaccinationSites',
                'certificates',
                'vaccination_numbers',
                'dose_certificates'
            )
        );
    }
    public function updateDose(Request $request, $id)
    {
        $validated_data = $request->validate(
            [
                'vaccination_number_id' => 'required',
                'vaccination_time' => 'required', 'dateTime',
                'vaccine_id' => 'required',
                'lot_number' => 'nullable',
                'vaccination_site_id' => 'required'
            ],
            [
                'vaccination_number_id.required' => "Số mũi vắc xin không được để trống",
                'vaccination_time.required' => "Thời gian tiêm không được để trống",
                'vaccination_time.dateTime' => "Thời gian tiêm phải đúng định dạng",
                'vaccine_id.required' => "Vắc xin không được để trống",
                'vaccination_site_id.required' => "Địa điểm tiêm không được để trống"
            ]
        );
        $doses = $this->certificates->findOrFail($id);
        $doses->update($validated_data);
        return redirect()->route('admin.injections.search-vaccination-status')->with('status', 'Cập nhật mũi tiêm thành công');
    }
    public function printCertificate($id)
    {
        $users = User::findOrFail($id);
        $certificate_latest = $this->certificates
            ->where('user_id', $id)
            ->latest()
            ->first();
        if ($certificate_latest != null) {
            $certificates = $this->certificates
                ->where('user_id', $id)
                ->get();
            $vaccination_number = $certificates->pluck('vaccination_number_id');
            $vaccine_name = $certificate_latest->vaccine->name;
            $info = $users->phone . ' - ' . $users->fullname . ' - ' . 'Đã tiêm ' .
                $certificates->count() . ' mũi vắc xin' . ' - ' . 'Mũi mới nhất: ' . $vaccine_name;
            $encode = utf8_encode($info);
            $qrcode = QrCode::size(170)->generate($encode);
            $data = [
                'certificates' => $certificates,
                'users' => $users,
                'qrcode' => $qrcode,
                'encode' => $encode,
                'vaccination_number' => $vaccination_number
            ];
        } else {
            $data = [
                'certificates' => null,
                'users' => $users,
            ];
        }

        $pdf = PDF::loadView('admin.injections.vaccinations.print-certificate', $data);

        return $pdf->stream();
    }
}
