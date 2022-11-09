<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Vaccine;
use Carbon\Carbon;
use App\Models\{Province, District, Ward, Certificate};
use DB;

class IndexController extends Controller
{
    public function  __construct(
        Category $categoryModel,
        Post $postModel,
        User $userModel,
        Certificate $certificateModel,
        Ward $wardModel
    ) {
        $this->categories = $categoryModel;
        $this->posts = $postModel;
        $this->users = $userModel;
        $this->wards = $wardModel;
        $this->certificates = $certificateModel;
    }

    public function index()
    {
        $yesterday = Carbon::yesterday();
        $population = 1264148;

        $sum_dose = $this->certificates
            ->get()
            ->count();

        $yesterday_dose = $this->certificates
            ->whereDate('certificates.vaccination_time', $yesterday)
            ->get()->count();

        $percent = ($sum_dose / $population) * 100;
        $percent_city = round($percent, 5);
        $sum_two_dose = $this->certificates
            ->where('vaccination_number_id', 2)
            ->get()
            ->count();

        $districts = District::select('id')
            ->where('province_id', 92)->get();

        $wardNK = Ward::where('wards.district_id', $districts[0]->id)
            ->get();
        $wardOM = Ward::where('wards.district_id', $districts[1]->id)
            ->get();
        $wardBT = Ward::where('wards.district_id', $districts[2]->id)
            ->get();
        $wardCR = Ward::where('wards.district_id', $districts[3]->id)
            ->get();
        $wardTN = Ward::where('wards.district_id', $districts[4]->id)
            ->get();
        $wardVT = Ward::where('wards.district_id', $districts[5]->id)
            ->get();
        $wardCD = Ward::where('wards.district_id', $districts[6]->id)
            ->get();
        $wardPD = Ward::where('wards.district_id', $districts[7]->id)
            ->get();
        $wardTL = Ward::where('wards.district_id', $districts[8]->id)
            ->get();

        foreach ($wardNK as $valueNK) {
            $wardNK0[0] = array(
                'name' => $wardNK[0]->name,
                'parent' => 'A',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardNK[0]->id)
                    ->get()->count(),
            );
            $wardNK1[1] = array(
                'name' => $wardNK[1]->name,
                'parent' => 'A',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardNK[1]->id)
                    ->get()->count(),
            );
            $wardNK2[2] = array(
                'name' => $wardNK[2]->name,
                'parent' => 'A',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardNK[2]->id)
                    ->get()->count(),
            );
            $wardNK3[3] = array(
                'name' => $wardNK[3]->name,
                'parent' => 'A',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardNK[3]->id)
                    ->get()->count(),
            );
            $wardNK4[4] = array(
                'name' => $wardNK[4]->name,
                'parent' => 'A',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardNK[4]->id)
                    ->get()->count(),
            );
            $wardNK5[5] = array(
                'name' => $wardNK[5]->name,
                'parent' => 'A',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardNK[5]->id)
                    ->get()->count(),
            );
            $wardNK6[6] = array(
                'name' => $wardNK[6]->name,
                'parent' => 'A',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardNK[6]->id)
                    ->get()->count(),
            );
            $wardNK7[7] = array(
                'name' => $wardNK[7]->name,
                'parent' => 'A',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardNK[7]->id)
                    ->get()->count(),
            );
            $wardNK8[8] = array(
                'name' => $wardNK[8]->name,
                'parent' => 'A',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardNK[8]->id)
                    ->get()->count(),
            );
            $wardNK9[9] = array(
                'name' => $wardNK[9]->name,
                'parent' => 'A',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardNK[9]->id)
                    ->get()->count(),
            );
            $wardNK10[10] = array(
                'name' => $wardNK[10]->name,
                'parent' => 'A',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardNK[10]->id)
                    ->get()->count(),
            );
            $wardNK11[11] = array(
                'name' => $wardNK[11]->name,
                'parent' => 'A',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardNK[11]->id)
                    ->get()->count(),
            );
            $wardNK12[12] = array(
                'name' => $wardNK[12]->name,
                'parent' => 'A',
                'value' =>  $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardNK[12]->id)
                    ->get()->count(),
            );
        }
        foreach ($wardOM as $valueOM) {
            $wardOM0[0] = array(
                'name' => $wardOM[0]->name,
                'parent' => 'B',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardOM[0]->id)
                    ->get()->count(),
            );
            $wardOM1[1] = array(
                'name' => $wardOM[1]->name,
                'parent' => 'B',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardOM[1]->id)
                    ->get()->count(),
            );
            $wardOM2[2] = array(
                'name' => $wardOM[2]->name,
                'parent' => 'B',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardOM[2]->id)
                    ->get()->count(),
            );
            $wardOM3[3] = array(
                'name' => $wardOM[3]->name,
                'parent' => 'B',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardOM[3]->id)
                    ->get()->count(),
            );
            $wardOM4[4] = array(
                'name' => $wardOM[4]->name,
                'parent' => 'B',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardOM[4]->id)
                    ->get()->count(),
            );
            $wardOM5[5] = array(
                'name' => $wardOM[5]->name,
                'parent' => 'B',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardOM[5]->id)
                    ->get()->count(),
            );
            $wardOM6[6] = array(
                'name' => $wardOM[6]->name,
                'parent' => 'B',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardOM[6]->id)
                    ->get()->count(),
            );
        }
        foreach ($wardBT as $valueBT) {
            $wardBT0[0] = array(
                'name' => $wardBT[0]->name,
                'parent' => 'C',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardBT[0]->id)
                    ->get()->count(),
            );
            $wardBT1[1] = array(
                'name' => $wardBT[1]->name,
                'parent' => 'C',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardBT[1]->id)
                    ->get()->count(),
            );
            $wardBT2[2] = array(
                'name' => $wardBT[2]->name,
                'parent' => 'C',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardBT[2]->id)
                    ->get()->count(),
            );
            $wardBT3[3] = array(
                'name' => $wardBT[3]->name,
                'parent' => 'C',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardBT[3]->id)
                    ->get()->count(),
            );
            $wardBT4[4] = array(
                'name' => $wardBT[4]->name,
                'parent' => 'C',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardBT[4]->id)
                    ->get()->count(),
            );
            $wardBT5[5] = array(
                'name' => $wardBT[5]->name,
                'parent' => 'C',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardBT[5]->id)
                    ->get()->count(),
            );
            $wardBT6[6] = array(
                'name' => $wardBT[6]->name,
                'parent' => 'C',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardBT[6]->id)
                    ->get()->count(),
            );
            $wardBT7[7] = array(
                'name' => $wardBT[7]->name,
                'parent' => 'C',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardBT[7]->id)
                    ->get()->count(),
            );
        }
        foreach ($wardCR as $valueCR) {
            $wardCR0[0] = array(
                'name' => $wardCR[0]->name,
                'parent' => 'D',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardCR[0]->id)
                    ->get()->count(),
            );
            $wardCR1[1] = array(
                'name' => $wardCR[1]->name,
                'parent' => 'D',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardCR[1]->id)
                    ->get()->count(),
            );
            $wardCR2[2] = array(
                'name' => $wardCR[2]->name,
                'parent' => 'D',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardCR[2]->id)
                    ->get()->count(),
            );
            $wardCR3[3] = array(
                'name' => $wardCR[3]->name,
                'parent' => 'D',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardCR[3]->id)
                    ->get()->count(),
            );
            $wardCR4[4] = array(
                'name' => $wardCR[4]->name,
                'parent' => 'D',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardCR[4]->id)
                    ->get()->count(),
            );
            $wardCR5[5] = array(
                'name' => $wardCR[5]->name,
                'parent' => 'D',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardCR[5]->id)
                    ->get()->count(),
            );
            $wardCR6[6] = array(
                'name' => $wardCR[6]->name,
                'parent' => 'D',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardCR[6]->id)
                    ->get()->count(),
            );
        }
        foreach ($wardTN as $valueTN) {
            $wardTN0[0] = array(
                'name' => $wardTN[0]->name,
                'parent' => 'E',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTN[0]->id)
                    ->get()->count(),
            );
            $wardTN1[1] = array(
                'name' => $wardTN[1]->name,
                'parent' => 'E',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTN[1]->id)
                    ->get()->count(),
            );
            $wardTN2[2] = array(
                'name' => $wardTN[2]->name,
                'parent' => 'E',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTN[2]->id)
                    ->get()->count(),
            );
            $wardTN3[3] = array(
                'name' => $wardTN[3]->name,
                'parent' => 'E',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTN[3]->id)
                    ->get()->count(),
            );
            $wardTN4[4] = array(
                'name' => $wardTN[4]->name,
                'parent' => 'E',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTN[4]->id)
                    ->get()->count(),
            );
            $wardTN5[5] = array(
                'name' => $wardTN[5]->name,
                'parent' => 'E',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTN[5]->id)
                    ->get()->count(),
            );
            $wardTN6[6] = array(
                'name' => $wardTN[6]->name,
                'parent' => 'E',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTN[6]->id)
                    ->get()->count(),
            );
            $wardTN7[7] = array(
                'name' => $wardTN[7]->name,
                'parent' => 'E',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTN[7]->id)
                    ->get()->count(),
            );
            $wardTN8[8] = array(
                'name' => $wardTN[8]->name,
                'parent' => 'E',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTN[8]->id)
                    ->get()->count(),
            );
        }
        foreach ($wardVT as $valueVT) {
            $wardVT0[0] = array(
                'name' => $wardVT[0]->name,
                'parent' => 'F',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardVT[0]->id)
                    ->get()->count(),
            );
            $wardVT1[1] = array(
                'name' => $wardVT[1]->name,
                'parent' => 'F',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardVT[1]->id)
                    ->get()->count(),
            );
            $wardVT2[2] = array(
                'name' => $wardVT[2]->name,
                'parent' => 'F',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardVT[2]->id)
                    ->get()->count(),
            );
            $wardVT3[3] = array(
                'name' => $wardVT[3]->name,
                'parent' => 'F',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardVT[3]->id)
                    ->get()->count(),
            );
            $wardVT4[4] = array(
                'name' => $wardVT[4]->name,
                'parent' => 'F',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardVT[4]->id)
                    ->get()->count(),
            );
            $wardVT5[5] = array(
                'name' => $wardVT[5]->name,
                'parent' => 'F',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardVT[5]->id)
                    ->get()->count(),
            );
            $wardVT6[6] = array(
                'name' => $wardVT[6]->name,
                'parent' => 'F',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardVT[6]->id)
                    ->get()->count(),
            );
            $wardVT7[7] = array(
                'name' => $wardVT[7]->name,
                'parent' => 'F',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardVT[7]->id)
                    ->get()->count(),
            );
            $wardVT8[8] = array(
                'name' => $wardVT[8]->name,
                'parent' => 'F',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardVT[8]->id)
                    ->get()->count(),
            );
            $wardVT9[9] = array(
                'name' => $wardVT[9]->name,
                'parent' => 'F',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardVT[9]->id)
                    ->get()->count(),
            );
            $wardVT10[10] = array(
                'name' => $wardVT[10]->name,
                'parent' => 'F',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardVT[10]->id)
                    ->get()->count(),
            );
        }
        foreach ($wardCD as $valueCD) {
            $wardCD0[0] = array(
                'name' => $wardCD[0]->name,
                'parent' => 'G',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardCD[0]->id)
                    ->get()->count(),
            );
            $wardCD1[1] = array(
                'name' => $wardCD[1]->name,
                'parent' => 'G',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardCD[1]->id)
                    ->get()->count(),
            );
            $wardCD2[2] = array(
                'name' => $wardCD[2]->name,
                'parent' => 'G',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardCD[2]->id)
                    ->get()->count(),
            );
            $wardCD3[3] = array(
                'name' => $wardCD[3]->name,
                'parent' => 'G',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardCD[3]->id)
                    ->get()->count(),
            );
            $wardCD4[4] = array(
                'name' => $wardCD[4]->name,
                'parent' => 'G',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardCD[4]->id)
                    ->get()->count(),
            );
            $wardCD5[5] = array(
                'name' => $wardCD[5]->name,
                'parent' => 'G',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardCD[5]->id)
                    ->get()->count(),
            );
            $wardCD6[6] = array(
                'name' => $wardCD[6]->name,
                'parent' => 'G',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardCD[6]->id)
                    ->get()->count(),
            );
            $wardCD7[7] = array(
                'name' => $wardCD[7]->name,
                'parent' => 'G',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardCD[7]->id)
                    ->get()->count(),
            );
            $wardCD8[8] = array(
                'name' => $wardCD[8]->name,
                'parent' => 'G',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardCD[8]->id)
                    ->get()->count(),
            );
            $wardCD9[9] = array(
                'name' => $wardCD[9]->name,
                'parent' => 'G',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardCD[9]->id)
                    ->get()->count(),
            );
        }
        foreach ($wardPD as $valuePD) {
            $wardPD0[0] = array(
                'name' => $wardPD[0]->name,
                'parent' => 'H',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardPD[0]->id)
                    ->get()->count(),
            );
            $wardPD1[1] = array(
                'name' => $wardPD[1]->name,
                'parent' => 'H',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardPD[1]->id)
                    ->get()->count(),
            );
            $wardPD2[2] = array(
                'name' => $wardPD[2]->name,
                'parent' => 'H',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardPD[2]->id)
                    ->get()->count(),
            );
            $wardPD3[3] = array(
                'name' => $wardPD[3]->name,
                'parent' => 'H',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardPD[3]->id)
                    ->get()->count(),
            );
            $wardPD4[4] = array(
                'name' => $wardPD[4]->name,
                'parent' => 'H',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardPD[4]->id)
                    ->get()->count(),
            );
            $wardPD5[5] = array(
                'name' => $wardPD[5]->name,
                'parent' => 'H',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardPD[5]->id)
                    ->get()->count(),
            );
            $wardPD6[6] = array(
                'name' => $wardPD[6]->name,
                'parent' => 'H',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardPD[6]->id)
                    ->get()->count(),
            );
        }
        foreach ($wardTL as $valueTL) {
            $wardTL0[0] = array(
                'name' => $wardTL[0]->name,
                'parent' => 'I',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTL[0]->id)
                    ->get()->count(),
            );
            $wardTL1[1] = array(
                'name' => $wardTL[1]->name,
                'parent' => 'I',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTL[1]->id)
                    ->get()->count(),
            );
            $wardTL2[2] = array(
                'name' => $wardTL[2]->name,
                'parent' => 'I',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTL[2]->id)
                    ->get()->count(),
            );
            $wardTL3[3] = array(
                'name' => $wardTL[3]->name,
                'parent' => 'I',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTL[3]->id)
                    ->get()->count(),
            );
            $wardTL4[4] = array(
                'name' => $wardTL[4]->name,
                'parent' => 'I',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTL[4]->id)
                    ->get()->count(),
            );
            $wardTL5[5] = array(
                'name' => $wardTL[5]->name,
                'parent' => 'A',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTL[5]->id)
                    ->get()->count(),
            );
            $wardTL6[6] = array(
                'name' => $wardTL[6]->name,
                'parent' => 'I',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTL[6]->id)
                    ->get()->count(),
            );
            $wardTL7[7] = array(
                'name' => $wardTL[7]->name,
                'parent' => 'I',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTL[7]->id)
                    ->get()->count(),
            );
            $wardTL8[8] = array(
                'name' => $wardTL[8]->name,
                'parent' => 'I',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTL[8]->id)
                    ->get()->count(),
            );
            $wardTL9[9] = array(
                'name' => $wardTL[9]->name,
                'parent' => 'I',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTL[9]->id)
                    ->get()->count(),
            );
            $wardTL10[10] = array(
                'name' => $wardTL[10]->name,
                'parent' => 'I',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTL[10]->id)
                    ->get()->count(),
            );
            $wardTL11[11] = array(
                'name' => $wardTL[11]->name,
                'parent' => 'I',
                'value' => $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTL[11]->id)
                    ->get()->count(),
            );
            $wardTL12[12] = array(
                'name' => $wardTL[12]->name,
                'parent' => 'I',
                'value' =>  $this->certificates::join('vaccination_sites', 'vaccination_sites.id', '=', 'certificates.vaccination_site_id')
                    ->where('vaccination_sites.ward_id', $wardTL[12]->id)
                    ->get()->count(),
            );
        }
        $data = [
            'sum_dose' => $sum_dose,
            'yesterday_dose' => $yesterday_dose,
            'percent_city' => $percent_city,
            'sum_two_dose' => $sum_two_dose,
            'districts' => $districts,
            'wardNK' => $wardNK,
            'wardNK0' => $wardNK0,
            'wardNK1' => $wardNK1,
            'wardNK2' => $wardNK2,
            'wardNK3' => $wardNK,
            'wardNK4' => $wardNK4,
            'wardNK5' => $wardNK5,
            'wardNK6' => $wardNK6,
            'wardNK7' => $wardNK7,
            'wardNK8' => $wardNK8,
            'wardNK9' => $wardNK9,
            'wardNK10' => $wardNK10,
            'wardNK11' => $wardNK11,
            'wardNK12' => $wardNK12,
            'wardOM0' => $wardOM0,
            'wardOM1' => $wardOM1,
            'wardOM2' => $wardOM2,
            'wardOM3' => $wardOM,
            'wardOM4' => $wardOM4,
            'wardOM5' => $wardOM5,
            'wardOM6' => $wardOM6,
            'wardBT0' => $wardBT0,
            'wardBT1' => $wardBT1,
            'wardBT2' => $wardBT2,
            'wardBT3' => $wardBT,
            'wardBT4' => $wardBT4,
            'wardBT5' => $wardBT5,
            'wardBT6' => $wardBT6,
            'wardBT7' => $wardBT7,
            'wardCR0' => $wardCR0,
            'wardCR1' => $wardCR1,
            'wardCR2' => $wardCR2,
            'wardCR3' => $wardCR,
            'wardCR4' => $wardCR4,
            'wardCR5' => $wardCR5,
            'wardCR6' => $wardCR6,
            'wardTN0' => $wardTN0,
            'wardTN1' => $wardTN1,
            'wardTN2' => $wardTN2,
            'wardTN3' => $wardTN,
            'wardTN4' => $wardTN4,
            'wardTN5' => $wardTN5,
            'wardTN6' => $wardTN6,
            'wardTN7' => $wardTN7,
            'wardTN8' => $wardTN8,
            'wardVT0' => $wardVT0,
            'wardVT1' => $wardVT1,
            'wardVT2' => $wardVT2,
            'wardVT3' => $wardVT,
            'wardVT4' => $wardVT4,
            'wardVT5' => $wardVT5,
            'wardVT6' => $wardVT6,
            'wardVT7' => $wardVT7,
            'wardVT8' => $wardVT8,
            'wardVT9' => $wardVT9,
            'wardVT10' => $wardVT10,
            'wardPD0' => $wardPD0,
            'wardPD1' => $wardPD1,
            'wardPD2' => $wardPD2,
            'wardPD3' => $wardPD,
            'wardPD4' => $wardPD4,
            'wardPD5' => $wardPD5,
            'wardPD6' => $wardPD6,
            'wardTL0' => $wardTL0,
            'wardTL1' => $wardTL1,
            'wardTL2' => $wardTL2,
            'wardTL3' => $wardTL,
            'wardTL4' => $wardTL4,
            'wardTL5' => $wardTL5,
            'wardTL6' => $wardTL6,
            'wardTL7' => $wardTL7,
            'wardTL8' => $wardTL8,
            'wardTL9' => $wardTL9,
            'wardTL10' => $wardTL10,
            'wardTL11' => $wardTL11,
            'wardTL12' => $wardTL12,
        ];
        return view('guest.index')->with($data);
    }

    public function indexVaccine()
    {
        $posts = $this->posts::where('is_actived', 1)->get();

        $astra = $posts[0]->title;
        $vaccine_astra = Vaccine::where('name', 'LIKE', $astra)->first();

        $sputnikv = $posts[1]->title;
        $vaccine_sputnikv = Vaccine::where('name', 'LIKE', $sputnikv)->first();

        $janssen  = $posts[2]->title;
        $vaccine_janssen  = Vaccine::where('name', 'LIKE', $janssen)->first();

        $moderna = $posts[3]->title;
        $vaccine_moderna = Vaccine::where('name', 'LIKE', $moderna)->first();

        $pfizer = $posts[4]->title;
        $vaccine_pfizer = Vaccine::where('name', 'LIKE', $pfizer)->first();

        $vero_cell = $posts[5]->title;
        $vaccine_vero_cell = Vaccine::where('name', 'LIKE', $vero_cell)->first();

        $hayat_vax = $posts[6]->title;
        $vaccine_hayat_vax = Vaccine::where('name', 'LIKE', $hayat_vax)->first();

        $abdala = $posts[7]->title;
        $vaccine_abdala = Vaccine::where('name', 'LIKE', $abdala)->first();

        $covaxin = $posts[8]->title;
        $vaccine_covaxin = Vaccine::where('name', 'LIKE', $covaxin)->first();

        $data = [
            'posts' => $posts,
            'vaccine_astra' => $vaccine_astra,
            'vaccine_sputnikv' => $vaccine_sputnikv,
            'vaccine_moderna' => $vaccine_moderna,
            'vaccine_janssen' => $vaccine_janssen,
            'vaccine_pfizer' => $vaccine_pfizer,
            'vaccine_vero_cell' => $vaccine_vero_cell,
            'vaccine_hayat_vax' => $vaccine_hayat_vax,
            'vaccine_abdala' => $vaccine_abdala,
            'vaccine_covaxin' => $vaccine_covaxin,
        ];
        return view('guest.posts.vaccine')->with($data);
    }
    public function showVaccine($id)
    {
        $vaccine = Vaccine::where('id', 'LIKE', $id)->first();
        $vaccine_name = $vaccine->name;
        $posts = $this->posts::where('title', 'LIKE', $vaccine_name)->first();
        return view('guest.posts.vaccine-detail', compact('posts', 'vaccine', 'vaccine_name'));
    }
}
