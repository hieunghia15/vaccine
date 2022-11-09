<?php

namespace App\Exports;

use App\Models\Ward;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class WardsExport implements FromQuery, WithHeadings
{
    use Exportable;
    /**
     * @return \Illuminate\Support\FromQuery
     */
    public function __construct(string $province)
    {
        $this->provinces = $province;
    }

    public function query()
    {
        return DB::table('wards')
            ->join('districts', 'wards.district_id', '=', 'districts.id')
            ->join('provinces', 'districts.province_id', '=', 'provinces.id')
            ->select('wards.id', 'wards.name')
            ->where('provinces.id',  $this->provinces)
            ->orderBy('wards.id', 'asc');
    }
    public function headings(): array
    {
        return ['ID', 'Phường/Xã'];
    }
}
