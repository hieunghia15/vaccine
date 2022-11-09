<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::select(
            "id",
            "fullname",
            "day_of_birth",
            "gender",
            "address",
            "email",
            "identification",
            "ward_id",
            "nationality_id",
            "ethnic_id"
        )->get();
    }
    public function headings(): array
    {
        //return ['ID', 'HoTen', 'NgaySinh', 'GioiTinh', 'DiaChi', 'Email', 'SoCCCD/HoChieu', 'Quan/Huyen', 'QuocTich', 'DanToc'];
        return ['ID', 'Họ tên', 'Ngày sinh', 'Giới tính', 'Địa chỉ', 'Email', 'Số CCCD/Hộ chiếu', 'Quận/Huyện', 'Quốc tịch', 'Dân Tộc'];
    }
}
