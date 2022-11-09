<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class EthnicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ethnics')->delete();

        DB::table('ethnics')->insert(array(
            0 => array(
                'id' => 1,
                'name' => 'Kinh',
            ),
            1 => array(
                'id' => 2,
                'name' => 'Tày',
            ),
            2 => array(
                'id' => 3,
                'name' => 'Thái',
            ),
            3 => array(
                'id' => 4,
                'name' => 'Mường',
            ),
            4 => array(
                'id' => 5,
                'name' => 'Khmer',
            ),
            5 => array(
                'id' => 6,
                'name' => 'Hoa',
            ),
            6 => array(
                'id' => 7,
                'name' => 'Nùng',
            ),
            7 => array(
                'id' => 8,
                'name' => 'H Mông',
            ),
            8 => array(
                'id' => 9,
                'name' => 'Dao',
            ),
            9 => array(
                'id' => 10,
                'name' => 'Gia Rai',
            ),
            10 => array(
                'id' => 11,
                'name' => 'Ê Đê',
            ),
            11 => array(
                'id' => 12,
                'name' => 'Ba Na',
            ),
            12 => array(
                'id' => 13,
                'name' => 'Sán Chay',
            ),
            13 => array(
                'id' => 14,
                'name' => 'Chăm',
            ),
            14 => array(
                'id' => 15,
                'name' => 'Kơ Ho',
            ),
            15 => array(
                'id' => 16,
                'name' => 'Xơ Đăng',
            ),
            16 => array(
                'id' => 17,
                'name' => 'Sán Dìu',
            ),
            17 => array(
                'id' => 18,
                'name' => 'Hrê',
            ),
            18 => array(
                'id' => 19,
                'name' => 'Ra Glai',
            ),
            19 => array(
                'id' => 20,
                'name' => 'Mnông',
            ),
            20 => array(
                'id' => 21,
                'name' => 'Thổ',
            ),
            21 => array(
                'id' => 22,
                'name' => 'Stiêng',
            ),
            22 => array(
                'id' => 23,
                'name' => 'Khơ mú',
            ),
            23 => array(
                'id' => 24,
                'name' => 'Bru - Vân Kiều',
            ),
            24 => array(
                'id' => 25,
                'name' => 'Cơ Tu',
            ),
            25 => array(
                'id' => 26,
                'name' => 'Giáy',
            ),
            26 => array(
                'id' => 27,
                'name' => 'Tà Ôi',
            ),
            27 => array(
                'id' => 28,
                'name' => 'Mạ',
            ),
            28 => array(
                'id' => 29,
                'name' => 'Giẻ-Triêng',
            ),
            29 => array(
                'id' => 30,
                'name' => 'Co',
            ),
            30 => array(
                'id' => 31,
                'name' => 'Chơ Ro',
            ),
            31 => array(
                'id' => 32,
                'name' => 'Xinh Mun',
            ),
            32 => array(
                'id' => 33,
                'name' => 'Hà Nhì',
            ),
            33 => array(
                'id' => 34,
                'name' => 'Chu Ru',
            ),
            34 => array(
                'id' => 35,
                'name' => 'Lào',
            ),
            35 => array(
                'id' => 36,
                'name' => 'La Chí',
            ),
            36 => array(
                'id' => 37,
                'name' => 'Kháng',
            ),
            37 => array(
                'id' => 38,
                'name' => 'Phù Lá',
            ),
            38 => array(
                'id' => 39,
                'name' => 'La Hủ',
            ),
            39 => array(
                'id' => 40,
                'name' => 'La Ha',
            ),
            40 => array(
                'id' => 41,
                'name' => 'Pà Thẻn',
            ),
            41 => array(
                'id' => 42,
                'name' => 'Lự',
            ),
            42 => array(
                'id' => 43,
                'name' => 'Ngái',
            ),
            43 => array(
                'id' => 44,
                'name' => 'Chứt',
            ),
            44 => array(
                'id' => 45,
                'name' => 'Lô Lô',
            ),
            45 => array(
                'id' => 46,
                'name' => 'Mảng',
            ),
            46 => array(
                'id' => 47,
                'name' => 'Cơ Lao',
            ),
            47 => array(
                'id' => 48,
                'name' => 'Bố Y',
            ),
            48 => array(
                'id' => 49,
                'name' => 'Cống',
            ),
            49 => array(
                'id' => 50,
                'name' => 'Si La',
            ),
            50 => array(
                'id' => 51,
                'name' => 'Pu Péo',
            ),
            51 => array(
                'id' => 52,
                'name' => 'Rơ Măm',
            ),
            52 => array(
                'id' => 53,
                'name' => 'Brâu',
            ),
            53 => array(
                'id' => 54,
                'name' => 'Ơ Đu',
            ),
            54 => array(
                'id' => 55,
                'name' => 'Người nước ngoài',
            ),
            55 => array(
                'id' => 56,
                'name' => 'Không rõ',
            ),
            56 => array(
                'id' => 57,
                'name' => 'Không xác định',
            ),

        ));
    }
}
