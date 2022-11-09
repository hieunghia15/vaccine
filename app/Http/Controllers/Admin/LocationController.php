<?php

namespace App\Http\Controllers\Admin;

use App\Exports\WardsExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Province, District, Ward, VaccinationSite};
use Maatwebsite\Excel\Facades\Excel;
use DB;

class LocationController extends Controller
{

    public function getDistrict(Request $request)
    {
        $data['districts'] = District::where("province_id", $request->province_id)
            ->get(["name", "id"]);
        return response()->json($data);
    }
    public function getWard(Request $request)
    {
        $data['wards'] = Ward::where("district_id", $request->district_id)
            ->get(["name", "id"]);
        return response()->json($data);
    }
    public function getSite(Request $request)
    {
        $data['vaccination_sites'] = VaccinationSite::where("ward_id", $request->ward_id)
            ->get(["location", "id"]);
        return response()->json($data);
    }
    public function export($id)
    {
        return Excel::download(new WardsExport($id), 'wards.xlsx');
        // $wards = DB::table('wards')
        //     ->join('districts', 'wards.district_id', '=', 'districts.id')
        //     ->join('provinces', 'districts.province_id', '=', 'provinces.id')
        //     ->select('wards.id', 'wards.name')
        //     ->where('provinces.id', $id)
        //     ->get()->toArray();
        // dd($wards);
    }
}
