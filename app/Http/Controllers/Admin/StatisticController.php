<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Province, District, Ward, Certificate};
use DB;
use Carbon\Carbon;

class StatisticController extends Controller
{
    public function index()
    {
        //lineChart
        $today = now();
        $yesterday = Carbon::yesterday();
        $day_before_yesterday = Carbon::yesterday()->subDays(1);
        $sum_dose = Certificate::get()->count();

        $yesterday_dose = Certificate::whereDate('certificates.vaccination_time', $yesterday)
            ->get()->count();

        $today_dose = Certificate::whereDate('certificates.vaccination_time', $today)
            ->get()->count();

        $day_before_yesterday_dose = Certificate::whereDate('certificates.vaccination_time', $day_before_yesterday)
            ->get()->count();

        $label_today = $today->format('d-m-Y');
        $label_yesterday = $yesterday->format('d-m-Y');
        $label_day_before_yesterday = $day_before_yesterday->format('d-m-Y');

        $label_line = [$label_day_before_yesterday, $label_yesterday, $label_today];
        $data_line = [$day_before_yesterday_dose, $yesterday_dose, $today_dose];

        //barChart
        $district_bar = District::select('id', 'name')
            ->where('province_id', 92)->get()->toArray();

        $districts = District::select('id', 'name')
            ->where('province_id', 92)->get();

        $district0 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.district_id', $districts[0]->id)
            ->get()->count();
        $district1 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.district_id', $districts[1]->id)
            ->get()->count();
        $district2 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.district_id', $districts[2]->id)
            ->get()->count();
        $district3 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.district_id', $districts[3]->id)
            ->get()->count();
        $district4 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.district_id', $districts[4]->id)
            ->get()->count();
        $district5 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.district_id', $districts[5]->id)
            ->get()->count();
        $district6 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.district_id', $districts[6]->id)
            ->get()->count();
        $district7 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.district_id', $districts[7]->id)
            ->get()->count();
        $district8 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.district_id', $districts[8]->id)
            ->get()->count();

        $population = 1264148;

        $population0 = ($district0 / 278364) * 100;
        $population1 = ($district1 / 129983) * 100;
        $population2 = ($district2 / 142541) * 100;
        $population3 = ($district3 / 112046) * 100;
        $population4 = ($district4 / 171394) * 100;
        $population5 = ($district5 / 97855) * 100;
        $population6 = ($district6 / 114194) * 100;
        $population7 = ($district7 / 111382) * 100;
        $population8 = ($district8 / 106389) * 100;

        $percent = ($sum_dose / $population) * 100;
        $percent_city = round($percent, 5);
        $percent0 = round($population0, 5);
        $percent1 = round($population1, 5);
        $percent2 = round($population2, 5);
        $percent3 = round($population3, 5);
        $percent4 = round($population4, 5);
        $percent5 = round($population5, 5);
        $percent6 = round($population6, 5);
        $percent7 = round($population7, 5);
        $percent8 = round($population8, 5);

        $sum_two_dose = Certificate::where('vaccination_number_id', 2)
            ->get()->count();
        $data = [
            'data_line' => $data_line,
            'label_line' => $label_line,
            'sum_dose' => $sum_dose,
            'yesterday_dose' => $yesterday_dose,
            'percent_city' => $percent_city,
            'district_bar' => $district_bar,
            'districts' => $districts,
            'district0' => $district0,
            'district1' => $district1,
            'district2' => $district2,
            'district3' => $district3,
            'district4' => $district4,
            'district5' => $district5,
            'district6' => $district6,
            'district7' => $district7,
            'district8' => $district8,
            'percent0' => $percent0,
            'percent1' => $percent1,
            'percent2' => $percent2,
            'percent3' => $percent3,
            'percent4' => $percent4,
            'percent5' => $percent5,
            'percent6' => $percent6,
            'percent7' => $percent7,
            'percent8' => $percent8,
            'sum_two_dose' => $sum_two_dose,
        ];
        return view('admin.statisticals.index',)->with($data);
    }
    public function districtNk()
    {
        //lineChart
        $today = now();
        $yesterday = Carbon::yesterday();
        $day_before_yesterday = Carbon::yesterday()->subDays(1);
        $sum_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Ninh Kiều')
            ->get()->count();

        $day_before_yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Ninh Kiều')
            ->whereDate('certificates.vaccination_time', $day_before_yesterday)
            ->get()->count();
        $yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Ninh Kiều')
            ->whereDate('certificates.vaccination_time', $yesterday)
            ->get()->count();
        $today_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Ninh Kiều')
            ->whereDate('certificates.vaccination_time', $today)
            ->get()->count();

        $label_today = $today->format('d-m-Y');
        $label_yesterday = $yesterday->format('d-m-Y');
        $label_day_before_yesterday = $day_before_yesterday->format('d-m-Y');

        $label_line = [$label_day_before_yesterday, $label_yesterday, $label_today];
        $data_line = [$day_before_yesterday_dose, $yesterday_dose, $today_dose];
        $population = 278364;
        $percent = ($sum_dose / $population) * 100;
        $percent_city = round($percent, 5);

        $sum_two_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->join('vaccination_numbers', 'vaccination_numbers.id', '=', 'certificates.vaccination_number_id')
            ->where('vaccination_number_id', 2)
            ->where('districts.name', 'LIKE', 'Quận Ninh Kiều')
            ->get()
            ->count();

        //barChart
        $ward_bar = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Ninh Kiều')
            ->get()->toArray();
        $wards = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Ninh Kiều')
            ->get();

        $ward0 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[0]->id)
            ->get()
            ->count();
        $ward1 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[1]->id)
            ->get()
            ->count();
        $ward2 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[2]->id)
            ->get()
            ->count();
        $ward3 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[3]->id)
            ->get()
            ->count();
        $ward4 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[4]->id)
            ->get()
            ->count();
        $ward5 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[5]->id)
            ->get()
            ->count();
        $ward6 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[6]->id)
            ->get()
            ->count();
        $ward7 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[7]->id)
            ->get()
            ->count();
        $ward8 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[8]->id)
            ->get()
            ->count();
        $ward9 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[9]->id)
            ->get()
            ->count();
        $ward10 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[10]->id)
            ->get()
            ->count();
        $ward11 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[11]->id)
            ->get()
            ->count();
        $ward12 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[12]->id)
            ->get()
            ->count();
        $data = [
            'data_line' => $data_line,
            'label_line' => $label_line,
            'sum_dose' => $sum_dose,
            'yesterday_dose' => $yesterday_dose,
            'percent_city' => $percent_city,
            'sum_two_dose' => $sum_two_dose,
            'ward_bar' => $ward_bar,
            'ward0' => $ward0,
            'ward1' => $ward1,
            'ward2' => $ward2,
            'ward3' => $ward3,
            'ward4' => $ward4,
            'ward5' => $ward5,
            'ward6' => $ward6,
            'ward7' => $ward7,
            'ward8' => $ward8,
            'ward9' => $ward9,
            'ward10' => $ward10,
            'ward11' => $ward11,
            'ward12' => $ward12,
        ];
        return view('admin.statisticals.district-ninh-kieu')->with($data);
    }
    public function districtOm()
    {
        //lineChart
        $today = now();
        $yesterday = Carbon::yesterday();
        $day_before_yesterday = Carbon::yesterday()->subDays(1);
        $sum_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Ô Môn')
            ->get()->count();

        $day_before_yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Ô Môn')
            ->whereDate('certificates.vaccination_time', $day_before_yesterday)
            ->get()->count();
        $yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Ô Môn')
            ->whereDate('certificates.vaccination_time', $yesterday)
            ->get()->count();
        $today_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Ô Môn')
            ->whereDate('certificates.vaccination_time', $today)
            ->get()->count();

        $label_today = $today->format('d-m-Y');
        $label_yesterday = $yesterday->format('d-m-Y');
        $label_day_before_yesterday = $day_before_yesterday->format('d-m-Y');

        $label_line = [$label_day_before_yesterday, $label_yesterday, $label_today];
        $data_line = [$day_before_yesterday_dose, $yesterday_dose, $today_dose];
        $population = 129983;
        $percent = ($sum_dose / $population) * 100;
        $percent_city = round($percent, 5);

        $sum_two_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->join('vaccination_numbers', 'vaccination_numbers.id', '=', 'certificates.vaccination_number_id')
            ->where('vaccination_number_id', 2)
            ->where('districts.name', 'LIKE', 'Quận Ô Môn')
            ->get()->count();

        //barChart
        $ward_bar = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Ô Môn')
            ->get()->toArray();
        $wards = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Ô Môn')
            ->get();

        $ward0 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[0]->id)
            ->get()->count();
        $ward1 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[1]->id)
            ->get()->count();
        $ward2 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[2]->id)
            ->get()->count();
        $ward3 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[3]->id)
            ->get()->count();
        $ward4 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[4]->id)
            ->get()->count();
        $ward5 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[5]->id)
            ->get()->count();
        $ward6 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[6]->id)
            ->get()->count();
        $data = [
            'data_line' => $data_line,
            'label_line' => $label_line,
            'sum_dose' => $sum_dose,
            'yesterday_dose' => $yesterday_dose,
            'percent_city' => $percent_city,
            'sum_two_dose' => $sum_two_dose,
            'ward_bar' => $ward_bar,
            'ward0' => $ward0,
            'ward1' => $ward1,
            'ward2' => $ward2,
            'ward3' => $ward3,
            'ward4' => $ward4,
            'ward5' => $ward5,
            'ward6' => $ward6,
        ];
        return view('admin.statisticals.district-o-mon')->with($data);
    }
    public function districtBt()
    {
        //lineChart
        $today = now();
        $yesterday = Carbon::yesterday();
        $day_before_yesterday = Carbon::yesterday()->subDays(1);
        $sum_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Bình Thuỷ')
            ->get()->count();

        $day_before_yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Bình Thuỷ')
            ->whereDate('certificates.vaccination_time', $day_before_yesterday)
            ->get()->count();
        $yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Bình Thuỷ')
            ->whereDate('certificates.vaccination_time', $yesterday)
            ->get()->count();
        $today_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Bình Thuỷ')
            ->whereDate('certificates.vaccination_time', $today)
            ->get()->count();

        $label_today = $today->format('d-m-Y');
        $label_yesterday = $yesterday->format('d-m-Y');
        $label_day_before_yesterday = $day_before_yesterday->format('d-m-Y');

        $label_line = [$label_day_before_yesterday, $label_yesterday, $label_today];
        $data_line = [$day_before_yesterday_dose, $yesterday_dose, $today_dose];
        $population = 142541;
        $percent = ($sum_dose / $population) * 100;
        $percent_city = round($percent, 5);

        $sum_two_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->join('vaccination_numbers', 'vaccination_numbers.id', '=', 'certificates.vaccination_number_id')
            ->where('vaccination_number_id', 2)
            ->where('districts.name', 'LIKE', 'Quận Bình Thuỷ')
            ->get()->count();

        //barChart
        $ward_bar = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Bình Thuỷ')
            ->get()->toArray();
        $wards = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Bình Thuỷ')
            ->get();

        $ward0 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[0]->id)
            ->get()->count();
        $ward1 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[1]->id)
            ->get()->count();
        $ward2 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[2]->id)
            ->get()->count();
        $ward3 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[3]->id)
            ->get()->count();
        $ward4 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[4]->id)
            ->get()->count();
        $ward5 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[5]->id)
            ->get()->count();
        $ward6 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[6]->id)
            ->get()->count();
        $ward7 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[7]->id)
            ->get()->count();
        $data = [
            'data_line' => $data_line,
            'label_line' => $label_line,
            'sum_dose' => $sum_dose,
            'yesterday_dose' => $yesterday_dose,
            'percent_city' => $percent_city,
            'sum_two_dose' => $sum_two_dose,
            'ward_bar' => $ward_bar,
            'ward0' => $ward0,
            'ward1' => $ward1,
            'ward2' => $ward2,
            'ward3' => $ward3,
            'ward4' => $ward4,
            'ward5' => $ward5,
            'ward6' => $ward6,
            'ward7' => $ward7,
        ];
        return view('admin.statisticals.district-binh-thuy')->with($data);
    }
    public function districtCr()
    {
        //lineChart
        $today = now();
        $yesterday = Carbon::yesterday();
        $day_before_yesterday = Carbon::yesterday()->subDays(1);
        $sum_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Cái Răng')
            ->get()->count();

        $day_before_yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Cái Răng')
            ->whereDate('certificates.vaccination_time', $day_before_yesterday)
            ->get()->count();
        $yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Cái Răng')
            ->whereDate('certificates.vaccination_time', $yesterday)
            ->get()->count();
        $today_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Cái Răng')
            ->whereDate('certificates.vaccination_time', $today)
            ->get()->count();

        $label_today = $today->format('d-m-Y');
        $label_yesterday = $yesterday->format('d-m-Y');
        $label_day_before_yesterday = $day_before_yesterday->format('d-m-Y');

        $label_line = [$label_day_before_yesterday, $label_yesterday, $label_today];
        $data_line = [$day_before_yesterday_dose, $yesterday_dose, $today_dose];
        $population = 112046;
        $percent = ($sum_dose / $population) * 100;
        $percent_city = round($percent, 5);

        $sum_two_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->join('vaccination_numbers', 'vaccination_numbers.id', '=', 'certificates.vaccination_number_id')
            ->where('vaccination_number_id', 2)
            ->where('districts.name', 'LIKE', 'Quận Cái Răng')
            ->get()->count();

        //barChart
        $ward_bar = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Cái Răng')
            ->get()->toArray();
        $wards = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Cái Răng')
            ->get();

        $ward0 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[0]->id)
            ->get()->count();
        $ward1 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[1]->id)
            ->get()->count();
        $ward2 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[2]->id)
            ->get()->count();
        $ward3 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[3]->id)
            ->get()->count();
        $ward4 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[4]->id)
            ->get()->count();
        $ward5 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[5]->id)
            ->get()->count();
        $ward6 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[6]->id)
            ->get()->count();
        $data = [
            'data_line' => $data_line,
            'label_line' => $label_line,
            'sum_dose' => $sum_dose,
            'yesterday_dose' => $yesterday_dose,
            'percent_city' => $percent_city,
            'sum_two_dose' => $sum_two_dose,
            'ward_bar' => $ward_bar,
            'ward0' => $ward0,
            'ward1' => $ward1,
            'ward2' => $ward2,
            'ward3' => $ward3,
            'ward4' => $ward4,
            'ward5' => $ward5,
            'ward6' => $ward6,
        ];
        return view('admin.statisticals.district-cai-rang')->with($data);
    }
    public function districtTn()
    {
        //lineChart
        $today = now();
        $yesterday = Carbon::yesterday();
        $day_before_yesterday = Carbon::yesterday()->subDays(1);
        $sum_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Thốt Nốt')
            ->get()->count();

        $day_before_yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Thốt Nốt')
            ->whereDate('certificates.vaccination_time', $day_before_yesterday)
            ->get()->count();
        $yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Thốt Nốt')
            ->whereDate('certificates.vaccination_time', $yesterday)
            ->get()->count();
        $today_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Thốt Nốt')
            ->whereDate('certificates.vaccination_time', $today)
            ->get()->count();

        $label_today = $today->format('d-m-Y');
        $label_yesterday = $yesterday->format('d-m-Y');
        $label_day_before_yesterday = $day_before_yesterday->format('d-m-Y');

        $label_line = [$label_day_before_yesterday, $label_yesterday, $label_today];
        $data_line = [$day_before_yesterday_dose, $yesterday_dose, $today_dose];
        $population = 171394;
        $percent = ($sum_dose / $population) * 100;
        $percent_city = round($percent, 5);

        $sum_two_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->join('vaccination_numbers', 'vaccination_numbers.id', '=', 'certificates.vaccination_number_id')
            ->where('vaccination_number_id', 2)
            ->where('districts.name', 'LIKE', 'Quận Thốt Nốt')
            ->get()->count();

        //barChart
        $ward_bar = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Thốt Nốt')
            ->get()->toArray();
        $wards = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Quận Thốt Nốt')
            ->get();

        $ward0 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[0]->id)
            ->get()->count();
        $ward1 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[1]->id)
            ->get()->count();
        $ward2 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[2]->id)
            ->get()->count();
        $ward3 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[3]->id)
            ->get()->count();
        $ward4 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[4]->id)
            ->get()->count();
        $ward5 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[5]->id)
            ->get()->count();
        $ward6 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[6]->id)
            ->get()->count();
        $ward7 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[7]->id)
            ->get()->count();
        $ward8 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[8]->id)
            ->get()->count();
        $data = [
            'data_line' => $data_line,
            'label_line' => $label_line,
            'sum_dose' => $sum_dose,
            'yesterday_dose' => $yesterday_dose,
            'percent_city' => $percent_city,
            'sum_two_dose' => $sum_two_dose,
            'ward_bar' => $ward_bar,
            'ward0' => $ward0,
            'ward1' => $ward1,
            'ward2' => $ward2,
            'ward3' => $ward3,
            'ward4' => $ward4,
            'ward5' => $ward5,
            'ward6' => $ward6,
            'ward7' => $ward7,
            'ward8' => $ward8,
        ];
        return view('admin.statisticals.district-thot-not')->with($data);
    }
    public function districtVt()
    {
        //lineChart
        $today = now();
        $yesterday = Carbon::yesterday();
        $day_before_yesterday = Carbon::yesterday()->subDays(1);
        $sum_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Vĩnh Thạnh')
            ->get()->count();

        $day_before_yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Vĩnh Thạnh')
            ->whereDate('certificates.vaccination_time', $day_before_yesterday)
            ->get()->count();
        $yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Vĩnh Thạnh')
            ->whereDate('certificates.vaccination_time', $yesterday)
            ->get()->count();
        $today_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Vĩnh Thạnh')
            ->whereDate('certificates.vaccination_time', $today)
            ->get()->count();

        $label_today = $today->format('d-m-Y');
        $label_yesterday = $yesterday->format('d-m-Y');
        $label_day_before_yesterday = $day_before_yesterday->format('d-m-Y');

        $label_line = [$label_day_before_yesterday, $label_yesterday, $label_today];
        $data_line = [$day_before_yesterday_dose, $yesterday_dose, $today_dose];
        $population = 97855;
        $percent = ($sum_dose / $population) * 100;
        $percent_city = round($percent, 5);

        $sum_two_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->join('vaccination_numbers', 'vaccination_numbers.id', '=', 'certificates.vaccination_number_id')
            ->where('vaccination_number_id', 2)
            ->where('districts.name', 'LIKE', 'Huyện Vĩnh Thạnh')
            ->get()->count();

        //barChart
        $ward_bar = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Vĩnh Thạnh')
            ->get()->toArray();
        $wards = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Vĩnh Thạnh')
            ->get();

        $ward0 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[0]->id)
            ->get()->count();
        $ward1 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[1]->id)
            ->get()->count();
        $ward2 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[2]->id)
            ->get()->count();
        $ward3 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[3]->id)
            ->get()->count();
        $ward4 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[4]->id)
            ->get()->count();
        $ward5 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[5]->id)
            ->get()->count();
        $ward6 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[6]->id)
            ->get()->count();
        $ward7 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[7]->id)
            ->get()->count();
        $ward8 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[8]->id)
            ->get()->count();
        $ward9 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[9]->id)
            ->get()->count();
        $ward10 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[10]->id)
            ->get()->count();
        $data = [
            'data_line' => $data_line,
            'label_line' => $label_line,
            'sum_dose' => $sum_dose,
            'yesterday_dose' => $yesterday_dose,
            'percent_city' => $percent_city,
            'sum_two_dose' => $sum_two_dose,
            'ward_bar' => $ward_bar,
            'ward0' => $ward0,
            'ward1' => $ward1,
            'ward2' => $ward2,
            'ward3' => $ward3,
            'ward4' => $ward4,
            'ward5' => $ward5,
            'ward6' => $ward6,
            'ward7' => $ward7,
            'ward8' => $ward8,
            'ward9' => $ward9,
            'ward10' => $ward10,
        ];
        return view('admin.statisticals.district-vinh-thanh')->with($data);
    }
    public function districtCd()
    {
        //lineChart
        $today = now();
        $yesterday = Carbon::yesterday();
        $day_before_yesterday = Carbon::yesterday()->subDays(1);
        $sum_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Cờ Đỏ')
            ->get()->count();

        $day_before_yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Cờ Đỏ')
            ->whereDate('certificates.vaccination_time', $day_before_yesterday)
            ->get()->count();
        $yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Cờ Đỏ')
            ->whereDate('certificates.vaccination_time', $yesterday)
            ->get()->count();
        $today_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Cờ Đỏ')
            ->whereDate('certificates.vaccination_time', $today)
            ->get()->count();

        $label_today = $today->format('d-m-Y');
        $label_yesterday = $yesterday->format('d-m-Y');
        $label_day_before_yesterday = $day_before_yesterday->format('d-m-Y');

        $label_line = [$label_day_before_yesterday, $label_yesterday, $label_today];
        $data_line = [$day_before_yesterday_dose, $yesterday_dose, $today_dose];
        $population = 114194;
        $percent = ($sum_dose / $population) * 100;
        $percent_city = round($percent, 5);

        $sum_two_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->join('vaccination_numbers', 'vaccination_numbers.id', '=', 'certificates.vaccination_number_id')
            ->where('vaccination_number_id', 2)
            ->where('districts.name', 'LIKE', 'Huyện Cờ Đỏ')
            ->get()->count();

        //barChart
        $ward_bar = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Cờ Đỏ')
            ->get()->toArray();
        $wards = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Cờ Đỏ')
            ->get();

        $ward0 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[0]->id)
            ->get()->count();
        $ward1 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[1]->id)
            ->get()->count();
        $ward2 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[2]->id)
            ->get()->count();
        $ward3 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[3]->id)
            ->get()->count();
        $ward4 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[4]->id)
            ->get()->count();
        $ward5 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[5]->id)
            ->get()->count();
        $ward6 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[6]->id)
            ->get()->count();
        $ward7 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[7]->id)
            ->get()->count();
        $ward8 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[8]->id)
            ->get()->count();
        $ward9 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[9]->id)
            ->get()->count();
        $data = [
            'data_line' => $data_line,
            'label_line' => $label_line,
            'sum_dose' => $sum_dose,
            'yesterday_dose' => $yesterday_dose,
            'percent_city' => $percent_city,
            'sum_two_dose' => $sum_two_dose,
            'ward_bar' => $ward_bar,
            'ward0' => $ward0,
            'ward1' => $ward1,
            'ward2' => $ward2,
            'ward3' => $ward3,
            'ward4' => $ward4,
            'ward5' => $ward5,
            'ward6' => $ward6,
            'ward7' => $ward7,
            'ward8' => $ward8,
            'ward9' => $ward9,
        ];
        return view('admin.statisticals.district-co-do')->with($data);
    }
    public function districtPd()
    {
        //lineChart
        $today = now();
        $yesterday = Carbon::yesterday();
        $day_before_yesterday = Carbon::yesterday()->subDays(1);
        $sum_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Phong Điền')
            ->get()->count();

        $day_before_yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Phong Điền')
            ->whereDate('certificates.vaccination_time', $day_before_yesterday)
            ->get()->count();
        $yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Phong Điền')
            ->whereDate('certificates.vaccination_time', $yesterday)
            ->get()->count();
        $today_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Phong Điền')
            ->whereDate('certificates.vaccination_time', $today)
            ->get()->count();

        $label_today = $today->format('d-m-Y');
        $label_yesterday = $yesterday->format('d-m-Y');
        $label_day_before_yesterday = $day_before_yesterday->format('d-m-Y');

        $label_line = [$label_day_before_yesterday, $label_yesterday, $label_today];
        $data_line = [$day_before_yesterday_dose, $yesterday_dose, $today_dose];
        $population = 111382;
        $percent = ($sum_dose / $population) * 100;
        $percent_city = round($percent, 5);

        $sum_two_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->join('vaccination_numbers', 'vaccination_numbers.id', '=', 'certificates.vaccination_number_id')
            ->where('vaccination_number_id', 2)
            ->where('districts.name', 'LIKE', 'Huyện Phong Điền')
            ->get()->count();

        //barChart
        $ward_bar = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Phong Điền')
            ->get()->toArray();
        $wards = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Phong Điền')
            ->get();

        $ward0 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[0]->id)
            ->get()->count();
        $ward1 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[1]->id)
            ->get()->count();
        $ward2 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[2]->id)
            ->get()->count();
        $ward3 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[3]->id)
            ->get()->count();
        $ward4 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[4]->id)
            ->get()->count();
        $ward5 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[5]->id)
            ->get()->count();
        $ward6 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[6]->id)
            ->get()->count();
        $data = [
            'data_line' => $data_line,
            'label_line' => $label_line,
            'sum_dose' => $sum_dose,
            'yesterday_dose' => $yesterday_dose,
            'percent_city' => $percent_city,
            'sum_two_dose' => $sum_two_dose,
            'ward_bar' => $ward_bar,
            'ward0' => $ward0,
            'ward1' => $ward1,
            'ward2' => $ward2,
            'ward3' => $ward3,
            'ward4' => $ward4,
            'ward5' => $ward5,
            'ward6' => $ward6,
        ];
        return view('admin.statisticals.district-phong-dien')->with($data);
    }
    public function districtTl()
    {
        //lineChart
        $today = now();
        $yesterday = Carbon::yesterday();
        $day_before_yesterday = Carbon::yesterday()->subDays(1);
        $sum_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Thới Lai')
            ->get()->count();

        $day_before_yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Thới Lai')
            ->whereDate('certificates.vaccination_time', $day_before_yesterday)
            ->get()->count();
        $yesterday_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Thới Lai')
            ->whereDate('certificates.vaccination_time', $yesterday)
            ->get()->count();
        $today_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Thới Lai')
            ->whereDate('certificates.vaccination_time', $today)
            ->get()->count();

        $label_today = $today->format('d-m-Y');
        $label_yesterday = $yesterday->format('d-m-Y');
        $label_day_before_yesterday = $day_before_yesterday->format('d-m-Y');

        $label_line = [$label_day_before_yesterday, $label_yesterday, $label_today];
        $data_line = [$day_before_yesterday_dose, $yesterday_dose, $today_dose];
        $population = 106389;
        $percent = ($sum_dose / $population) * 100;
        $percent_city = round($percent, 5);

        $sum_two_dose = Certificate::join('users', 'users.id', '=', 'certificates.user_id')
            ->join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->join('vaccination_numbers', 'vaccination_numbers.id', '=', 'certificates.vaccination_number_id')
            ->where('vaccination_number_id', 2)
            ->where('districts.name', 'LIKE', 'Huyện Thới Lai')
            ->get()->count();

        //barChart
        $ward_bar = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Thới Lai')
            ->get()->toArray();
        $wards = Ward::select('wards.id', 'wards.name')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->where('districts.name', 'LIKE', 'Huyện Thới Lai')
            ->get();

        $ward0 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[0]->id)
            ->get()->count();
        $ward1 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[1]->id)
            ->get()->count();
        $ward2 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[2]->id)
            ->get()->count();
        $ward3 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[3]->id)
            ->get()->count();
        $ward4 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[4]->id)
            ->get()->count();
        $ward5 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[5]->id)
            ->get()->count();
        $ward6 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[6]->id)
            ->get()->count();
        $ward7 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[7]->id)
            ->get()->count();
        $ward8 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[8]->id)
            ->get()->count();
        $ward9 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[9]->id)
            ->get()->count();
        $ward10 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[10]->id)
            ->get()->count();
        $ward11 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[11]->id)
            ->get()->count();
        $ward12 = Certificate::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
            ->join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->where('wards.id', $wards[12]->id)
            ->get()->count();
        $data = [
            'data_line' => $data_line,
            'label_line' => $label_line,
            'sum_dose' => $sum_dose,
            'yesterday_dose' => $yesterday_dose,
            'percent_city' => $percent_city,
            'sum_two_dose' => $sum_two_dose,
            'ward_bar' => $ward_bar,
            'ward0' => $ward0,
            'ward1' => $ward1,
            'ward2' => $ward2,
            'ward3' => $ward3,
            'ward4' => $ward4,
            'ward5' => $ward5,
            'ward6' => $ward6,
            'ward7' => $ward7,
            'ward8' => $ward8,
            'ward9' => $ward9,
            'ward10' => $ward10,
            'ward11' => $ward11,
            'ward12' => $ward12,
        ];
        return view('admin.statisticals.district-thoi-lai')->with($data);
    }
}
