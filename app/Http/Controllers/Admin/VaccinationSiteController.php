<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VaccinationSite;
use App\Models\{Province, District, Ward};


class VaccinationSiteController extends Controller
{
    public function  __construct(VaccinationSite $vaccinationSiteModel, Province $provinceModel, District $districtModel, Ward $wardModel)
    {
        $this->vaccinationSites = $vaccinationSiteModel;
        $this->provinces = $provinceModel;
        $this->districts = $districtModel;
        $this->wards = $wardModel;
    }
    public function index()
    {
        $vaccination_sites = $this->vaccinationSites->orderBy('id', 'desc')->paginate(20);
        return view('admin.vaccination-sites.index', compact('vaccination_sites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vaccination-sites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate(
            [
                'location' => ['required', 'string'],
                'ward_id' => ['required', 'string']
            ],
            [
                'location.required' => "Tên địa điểm không được để trống",
                'ward_id.required' => "Địa chỉ không được để trống",
            ]
        );
        $this->vaccinationSites->create($validated_data);
        return redirect()->route('admin.vaccination-sites.index')->with('status', 'Tạo địa điểm tiêm chủng thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vaccination_sites = $this->vaccinationSites->findOrFail($id);

        $province_id = $vaccination_sites->ward->district->province->id;
        $district_id = $vaccination_sites->ward->district->id;
        $ward_id = $vaccination_sites->ward_id;

        $provinces = $this->provinces->where('id', '<>', $province_id)->get();
        $districts = $this->districts->where('id', '<>', $district_id)->get();
        $wards = $this->wards->where('id', '<>', $ward_id)->get();

        return view(
            'admin.vaccination-sites.edit',
            compact(
                'vaccination_sites',
                'province_id',
                'district_id',
                'ward_id',
                'provinces',
                'districts',
                'wards'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated_data = $request->validate(
            [
                'location' => ['required', 'string'],
                'ward_id' => ['required', 'string']
            ],
            [
                'location.required' => "Tên địa điểm không được để trống",
                'ward_id.required' => "Địa chỉ không được để trống",
            ]
        );
        $vaccination_sites = $this->vaccinationSites->findOrFail($id);
        $vaccination_sites->update($validated_data);
        return redirect()->route('admin.vaccination-sites.index')->with('status', 'Cập nhật địa điểm tiêm chủng thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $vaccination_sites = $this->vaccinationSites->findOrFail($id);
        $vaccination_sites->delete();
        return redirect()->route('admin.vaccination-sites.index')->with('status', 'Xóa địa điểm tiêm chủng thành công');
    }
}
