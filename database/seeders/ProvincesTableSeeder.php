<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->delete();

        DB::table('provinces')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Hà Nội',
                'type' => 'Thành phố Trung ương',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Hà Giang',
                'type' => 'Tỉnh',
            ),
            2 =>
            array(
                'id' => 4,
                'name' => 'Cao Bằng',
                'type' => 'Tỉnh',
            ),
            3 =>
            array(
                'id' => 6,
                'name' => 'Bắc Kạn',
                'type' => 'Tỉnh',
            ),
            4 =>
            array(
                'id' => 8,
                'name' => 'Tuyên Quang',
                'type' => 'Tỉnh',
            ),
            5 =>
            array(
                'id' => 10,
                'name' => 'Lào Cai',
                'type' => 'Tỉnh',
            ),
            6 =>
            array(
                'id' => 11,
                'name' => 'Điện Biên',
                'type' => 'Tỉnh',
            ),
            7 =>
            array(
                'id' => 12,
                'name' => 'Lai Châu',
                'type' => 'Tỉnh',
            ),
            8 =>
            array(
                'id' => 14,
                'name' => 'Sơn La',
                'type' => 'Tỉnh',
            ),
            9 =>
            array(
                'id' => 15,
                'name' => 'Yên Bái',
                'type' => 'Tỉnh',
            ),
            10 =>
            array(
                'id' => 17,
                'name' => 'Hoà Bình',
                'type' => 'Tỉnh',
            ),
            11 =>
            array(
                'id' => 19,
                'name' => 'Thái Nguyên',
                'type' => 'Tỉnh',
            ),
            12 =>
            array(
                'id' => 20,
                'name' => 'Lạng Sơn',
                'type' => 'Tỉnh',
            ),
            13 =>
            array(
                'id' => 22,
                'name' => 'Quảng Ninh',
                'type' => 'Tỉnh',
            ),
            14 =>
            array(
                'id' => 24,
                'name' => 'Bắc Giang',
                'type' => 'Tỉnh',
            ),
            15 =>
            array(
                'id' => 25,
                'name' => 'Phú Thọ',
                'type' => 'Tỉnh',
            ),
            16 =>
            array(
                'id' => 26,
                'name' => 'Vĩnh Phúc',
                'type' => 'Tỉnh',
            ),
            17 =>
            array(
                'id' => 27,
                'name' => 'Bắc Ninh',
                'type' => 'Tỉnh',
            ),
            18 =>
            array(
                'id' => 30,
                'name' => 'Hải Dương',
                'type' => 'Tỉnh',
            ),
            19 =>
            array(
                'id' => 31,
                'name' => 'Hải Phòng',
                'type' => 'Thành phố Trung ương',
            ),
            20 =>
            array(
                'id' => 33,
                'name' => 'Hưng Yên',
                'type' => 'Tỉnh',
            ),
            21 =>
            array(
                'id' => 34,
                'name' => 'Thái Bình',
                'type' => 'Tỉnh',
            ),
            22 =>
            array(
                'id' => 35,
                'name' => 'Hà Nam',
                'type' => 'Tỉnh',
            ),
            23 =>
            array(
                'id' => 36,
                'name' => 'Nam Định',
                'type' => 'Tỉnh',
            ),
            24 =>
            array(
                'id' => 37,
                'name' => 'Ninh Bình',
                'type' => 'Tỉnh',
            ),
            25 =>
            array(
                'id' => 38,
                'name' => 'Thanh Hóa',
                'type' => 'Tỉnh',
            ),
            26 =>
            array(
                'id' => 40,
                'name' => 'Nghệ An',
                'type' => 'Tỉnh',
            ),
            27 =>
            array(
                'id' => 42,
                'name' => 'Hà Tĩnh',
                'type' => 'Tỉnh',
            ),
            28 =>
            array(
                'id' => 44,
                'name' => 'Quảng Bình',
                'type' => 'Tỉnh',
            ),
            29 =>
            array(
                'id' => 45,
                'name' => 'Quảng Trị',
                'type' => 'Tỉnh',
            ),
            30 =>
            array(
                'id' => 46,
                'name' => 'Thừa Thiên Huế',
                'type' => 'Tỉnh',
            ),
            31 =>
            array(
                'id' => 48,
                'name' => 'Đà Nẵng',
                'type' => 'Thành phố Trung ương',
            ),
            32 =>
            array(
                'id' => 49,
                'name' => 'Quảng Nam',
                'type' => 'Tỉnh',
            ),
            33 =>
            array(
                'id' => 51,
                'name' => 'Quảng Ngãi',
                'type' => 'Tỉnh',
            ),
            34 =>
            array(
                'id' => 52,
                'name' => 'Bình Định',
                'type' => 'Tỉnh',
            ),
            35 =>
            array(
                'id' => 54,
                'name' => 'Phú Yên',
                'type' => 'Tỉnh',
            ),
            36 =>
            array(
                'id' => 56,
                'name' => 'Khánh Hòa',
                'type' => 'Tỉnh',
            ),
            37 =>
            array(
                'id' => 58,
                'name' => 'Ninh Thuận',
                'type' => 'Tỉnh',
            ),
            38 =>
            array(
                'id' => 60,
                'name' => 'Bình Thuận',
                'type' => 'Tỉnh',
            ),
            39 =>
            array(
                'id' => 62,
                'name' => 'Kon Tum',
                'type' => 'Tỉnh',
            ),
            40 =>
            array(
                'id' => 64,
                'name' => 'Gia Lai',
                'type' => 'Tỉnh',
            ),
            41 =>
            array(
                'id' => 66,
                'name' => 'Đắk Lắk',
                'type' => 'Tỉnh',
            ),
            42 =>
            array(
                'id' => 67,
                'name' => 'Đắk Nông',
                'type' => 'Tỉnh',
            ),
            43 =>
            array(
                'id' => 68,
                'name' => 'Lâm Đồng',
                'type' => 'Tỉnh',
            ),
            44 =>
            array(
                'id' => 70,
                'name' => 'Bình Phước',
                'type' => 'Tỉnh',
            ),
            45 =>
            array(
                'id' => 72,
                'name' => 'Tây Ninh',
                'type' => 'Tỉnh',
            ),
            46 =>
            array(
                'id' => 74,
                'name' => 'Bình Dương',
                'type' => 'Tỉnh',
            ),
            47 =>
            array(
                'id' => 75,
                'name' => 'Đồng Nai',
                'type' => 'Tỉnh',
            ),
            48 =>
            array(
                'id' => 77,
                'name' => 'Bà Rịa - Vũng Tàu',
                'type' => 'Tỉnh',
            ),
            49 =>
            array(
                'id' => 79,
                'name' => 'Hồ Chí Minh',
                'type' => 'Thành phố Trung ương',
            ),
            50 =>
            array(
                'id' => 80,
                'name' => 'Long An',
                'type' => 'Tỉnh',
            ),
            51 =>
            array(
                'id' => 82,
                'name' => 'Tiền Giang',
                'type' => 'Tỉnh',
            ),
            52 =>
            array(
                'id' => 83,
                'name' => 'Bến Tre',
                'type' => 'Tỉnh',
            ),
            53 =>
            array(
                'id' => 84,
                'name' => 'Trà Vinh',
                'type' => 'Tỉnh',
            ),
            54 =>
            array(
                'id' => 86,
                'name' => 'Vĩnh Long',
                'type' => 'Tỉnh',
            ),
            55 =>
            array(
                'id' => 87,
                'name' => 'Đồng Tháp',
                'type' => 'Tỉnh',
            ),
            56 =>
            array(
                'id' => 89,
                'name' => 'An Giang',
                'type' => 'Tỉnh',
            ),
            57 =>
            array(
                'id' => 91,
                'name' => 'Kiên Giang',
                'type' => 'Tỉnh',
            ),
            58 =>
            array(
                'id' => 92,
                'name' => 'Cần Thơ',
                'type' => 'Thành phố Trung ương',
            ),
            59 =>
            array(
                'id' => 93,
                'name' => 'Hậu Giang',
                'type' => 'Tỉnh',
            ),
            60 =>
            array(
                'id' => 94,
                'name' => 'Sóc Trăng',
                'type' => 'Tỉnh',
            ),
            61 =>
            array(
                'id' => 95,
                'name' => 'Bạc Liêu',
                'type' => 'Tỉnh',
            ),
            62 =>
            array(
                'id' => 96,
                'name' => 'Cà Mau',
                'type' => 'Tỉnh',
            ),
        ));
    }
}