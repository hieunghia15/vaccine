<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use QrCode;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Ward;
use App\Models\Ethnic;
use App\Models\Vaccine;
use App\Models\District;
use App\Models\Province;
use App\Models\Nationality;
use App\Models\Certificate;
use App\Models\VaccineRegistration;
use App\Http\Requests\UpdateProfileRequest;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Mail\EMail;
use Mail;
use \Maatwebsite\Excel\Reader;

class UserController extends Controller
{
    public function __construct(
        User $userModel,
        Ward $wardModel,
        Ethnic $ethnicModel,
        District $districtModel,
        Province $provinceModel,
        Nationality $nationalityModel,
        Certificate $certificateModel,
    ) {
        $this->users = $userModel;
        $this->wards = $wardModel;
        $this->ethnics = $ethnicModel;
        $this->districts = $districtModel;
        $this->provinces = $provinceModel;
        $this->certificates = $certificateModel;
        $this->nationalities = $nationalityModel;
    }

    //Profile Admin
    public function accountAdmin()
    {
        $users = Auth::user();
        $birthday = Carbon::parse($users->day_of_birth)->format('d/m/Y');
        return view('admin.accounts.account', compact('users', 'birthday'));
    }

    public function accountUser()
    {
        $users = Auth::user();
        $user_id = Auth::id();
        $birthday = Carbon::parse($users->day_of_birth)->format('d/m/Y');

        $certificate_latest = $this->certificates
            ->where('user_id', $user_id)
            ->latest()
            ->first();
        if ($certificate_latest != null) {
            $certificates = $this->certificates
                ->where('user_id', $user_id)
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
                'birthday' => $birthday,
                'qrcode' => $qrcode,
                'vaccination_number' => $vaccination_number
            ];
        } else {
            $info = 'Chưa có kết quả tiêm chủng';
            $encode = utf8_encode($info);
            $qrcode_null = QrCode::size(170)->generate($encode);
            $data = [
                'certificates' => null,
                'users' => $users,
                'qrcode_null' => $qrcode_null,
                'birthday' => $birthday,
            ];
        }


        return view('citizen.user.account')->with($data);
    }

    public function editAccountAdmin($id)
    {
        $users = $this->users->findOrFail($id);

        $ethnics = Ethnic::all();
        $ethnic_user_id = $users->ethnic->id;
        $ethnic_user = Ethnic::where('id', '<>', $ethnic_user_id)->get();

        $nationalities = Nationality::all();
        $nationality_user_id = $users->nationality->id;
        $nationality_user = Nationality::where('id', '<>', $nationality_user_id)->get();

        $provinces = Province::all();
        $province_user_id = $users->ward->district->province->id;
        $province_user = Province::where('id', '<>', $province_user_id)->get();

        return view(
            'admin.accounts.update-account',
            compact('users', 'provinces', 'province_user', 'ethnics', 'ethnic_user', 'nationalities', 'nationality_user')
        );
    }

    public function editAccountUser($id)
    {
        $users = $this->users->findOrFail($id);
        $ethnics = Ethnic::all();
        $ethnic_user_id = $users->ethnic->id;
        $ethnic_user = Ethnic::where('id', '<>', $ethnic_user_id)->get();

        $nationalities = Nationality::all();
        $nationality_user_id = $users->nationality->id;
        $nationality_user = Nationality::where('id', '<>', $nationality_user_id)->get();

        $provinces = Province::all();
        $province_user_id = $users->ward->district->province->id;
        $province_user = Province::where('id', '<>', $province_user_id)->get();

        return view(
            'citizen.user.update-account',
            compact('users', 'provinces', 'province_user', 'ethnics', 'ethnic_user', 'nationalities', 'nationality_user')
        );
    }

    public function updateAccountAdmin(Request $request, $id)
    {
        $validated_data = $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'day_of_birth' => ['required', 'date', 'before:now'],
            'gender' => ['required'],
            'email' => ['nullable'],
            'identification' => ['required', 'string', 'digits_between:8,20', 'exists:users'],
            'address' => ['nullable'],
            'ward_id' => ['required'],
            'nationality_id' => ['required'],
            'ethnic_id' => ['required'],
        ], [
            'fullname.required' => "Họ tên không được để trống",
            'fullname.string' => "Họ tên không được chứa ký tự đặt biệt",
            'day_of_birth.required' => "Ngày sinh không được để trống",
            'day_of_birth.before' => "Ngày sinh phải trước hôm nay",
            'gender.required' => "Giới tính không được để trống",
            'email.email' => "Email không hợp lệ",
            'identification.required' => "Số CCCD/Hộ chiếu không được để trống",
            'identification.exists' => "Số CCCD/Hộ chiếu đã tồn tại",
            'identification.digits_between' => "Số CCCD/Hộ chiếu phải từ 8 đến 20 kí tự",
            'ward_id.required' => "Phường/xã không được để trống",
            'nationality_id.required' => "Quốc tịch không được để trống",
            'ethnic_id.required' => "Dân tộc không được để trống",
        ]);
        $user = $this->users->findOrFail($id);
        $user->update($validated_data);
        return redirect()->route('admin.account.account')->with('status', 'Cập nhật thông tin thành công');;
    }

    public function updateAccountUser(Request $request, $id)
    {
        $validated_data = $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'day_of_birth' => ['required', 'date', 'before:now'],
            'gender' => ['required'],
            'email' => ['nullable'],
            'identification' => ['required', 'string', 'digits_between:8,20', 'exists:users'],
            'address' => ['nullable'],
            'ward_id' => ['required'],
            'nationality_id' => ['required'],
            'ethnic_id' => ['required'],
        ], [
            'fullname.required' => "Họ tên không được để trống",
            'fullname.string' => "Họ tên không được chứa ký tự đặt biệt",
            'day_of_birth.required' => "Ngày sinh không được để trống",
            'day_of_birth.before' => "Ngày sinh phải trước hôm nay",
            'gender.required' => "Giới tính không được để trống",
            'email.email' => "Email không hợp lệ",
            'identification.required' => "Số CCCD/Hộ chiếu không được để trống",
            'identification.exists' => "Số CCCD/Hộ chiếu đã tồn tại",
            'identification.digits_between' => "Số CCCD/Hộ chiếu phải từ 8 đến 20 kí tự",
            'ward_id.required' => "Phường/xã không được để trống",
            'nationality_id.required' => "Quốc tịch không được để trống",
            'ethnic_id.required' => "Dân tộc không được để trống",
        ]);
        $user = $this->users->findOrFail($id);
        $user->update($validated_data);
        return redirect()->route('citizen.user.user-account')->with('status', 'Cập nhật thông tin thành công');;
    }

    public function showChangePasswordAdmin()
    {
        return view('admin.accounts.change-password');
    }

    public function showChangePasswordUser()
    {
        return view('citizen.user.change-password');
    }

    public function changePasswordAdmin(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Mật khẩu hiện tại không khớp");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            // Current password and new password same
            return redirect()->back()->with("error", "Mật khẩu mới không thể giống mật khẩu cũ");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->route('admin.account.account')->with("status", "Thay đổi mật khẩu thành công");
    }

    public function changePasswordUser(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Mật khẩu hiện tại không khớp");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            // Current password and new password same
            return redirect()->back()->with("error", "Mật khẩu mới không thể giống mật khẩu cũ");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->route('citizen.user.show-change-password')->with("status", "Thay đổi mật khẩu thành công");
    }
    public function listUser()
    {
        $users = $this->users::paginate(10);
        return view('admin.users.index', compact('users'));
    }
    public function showCertificate()
    {
        $user_id = Auth::id();
        $users = Auth::user();

        $certificate_latest = $this->certificates
            ->where('user_id', $user_id)
            ->latest()
            ->first();
        if ($certificate_latest != null) {
            $certificates = $this->certificates
                ->where('user_id', $user_id)
                ->get();
            $vaccination_number = $certificates->pluck('vaccination_number_id');
            $vaccine_name = $certificate_latest->vaccine->name;
            $info = $users->phone . ' - ' . $users->fullname . ' - ' . 'Đã tiêm ' .
                $certificates->count() . ' mũi vắc xin' . ' - ' . 'Mũi mới nhất:' . $vaccine_name;
            $encode = utf8_encode($info);
            $qrcode = QrCode::size(170)->generate($encode);
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

        return view('citizen.user.certificate')->with($data);
    }
    public function showVaccinePassport()
    {
        $user_id = Auth::id();
        $users = Auth::user();
        $certificate_latest = $this->certificates
            ->where('user_id', $user_id)
            ->latest()
            ->first();
        if ($certificate_latest != null) {
            $certificates = $this->certificates
                ->where('user_id', $user_id)
                ->get();

            $vaccination_number = $certificates->pluck('vaccination_number_id');
            $vaccine_name = $certificate_latest->vaccine->name;
            $expiries = $certificate_latest->created_at->addMonths(15)->addDays(10); //15 months 10 days
            $today = now()->format('d-m-Y');

            if ($today == $expiries) {
                $info = 'Vaccine passport has expired';
                $encode = utf8_encode($info);
                $qrcode = QrCode::size(170)->generate($encode);
            } else {
                $info = $users->phone . ' - ' . $users->fullname . ' - ' . 'Vaccinated ' .
                    $certificates->count() . ' doses' . ' - ' . 'Latest dose:' .
                    $vaccine_name . ' - ' . 'Expiry: ' . $expiries->format('d-m-Y');
                $encode = utf8_encode($info);
                $qrcode = QrCode::size(170)->generate($encode);
            }
            $data = [
                'certificates' => $certificates,
                'certificate_latest' => $certificate_latest,
                'users' => $users,
                'qrcode' => $qrcode,
                'vaccination_number' => $vaccination_number,
                'expiries' => $expiries,
            ];
        } else {
            $data = [
                'certificates' => null,
                'users' => $users,
            ];
        }

        return view('citizen.user.vaccine-passport')->with($data);
    }
    public function registrationStatus()
    {
        $user_id = Auth::id();
        $users = Auth::user();
        $registrations = VaccineRegistration::where('user_id', $user_id)->get();
        if (!empty($registrations)) {
            $data = [
                'registrations' => $registrations,
                'users' => $users,
            ];
        } else {
            $data = [
                'registrations' => null,
                'users' => $users,
            ];
        }

        return view('citizen.user.registration-status')->with($data);
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import(Request $request)
    {
        $import = new UsersImport;
        Excel::import($import, $request->file('file'), \Maatwebsite\Excel\Excel::XLSX);
        $now = now()->format('Y-m-d H:i:s');
        $time = now()->subSecond(2)->format('Y-m-d H:i:s');
        $users = $this->users::whereBetween('created_at', [$time, $now])
            ->get();
        foreach ($users as $user) {
            $user->syncRoles('citizen');
        }
        $data = Excel::toArray(new UsersImport, $request->file('file'));
        foreach ($data[0] as $value) {
            $mailData = [
                'title' => 'Mật khẩu đăng nhập của bạn tại đây',
                'body' => $value[2]
            ];
            Mail::to($value[6])->send(new EMail($mailData));
        }
        return back()->with('status', 'Nhập dữ liệu thành công');
    }
}
