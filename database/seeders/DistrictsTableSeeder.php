<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('districts')->delete();

        DB::table('districts')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Quận Ba Đình',
                'type' => 'Quận',
                'province_id' => 1,
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Quận Hoàn Kiếm',
                'type' => 'Quận',
                'province_id' => 1,
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Quận Tây Hồ',
                'type' => 'Quận',
                'province_id' => 1,
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Quận Long Biên',
                'type' => 'Quận',
                'province_id' => 1,
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Quận Cầu Giấy',
                'type' => 'Quận',
                'province_id' => 1,
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Quận Đống Đa',
                'type' => 'Quận',
                'province_id' => 1,
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Quận Hai Bà Trưng',
                'type' => 'Quận',
                'province_id' => 1,
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Quận Hoàng Mai',
                'type' => 'Quận',
                'province_id' => 1,
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Quận Thanh Xuân',
                'type' => 'Quận',
                'province_id' => 1,
            ),
            9 =>
            array(
                'id' => 16,
                'name' => 'Huyện Sóc Sơn',
                'type' => 'Huyện',
                'province_id' => 1,
            ),
            10 =>
            array(
                'id' => 17,
                'name' => 'Huyện Đông Anh',
                'type' => 'Huyện',
                'province_id' => 1,
            ),
            11 =>
            array(
                'id' => 18,
                'name' => 'Huyện Gia Lâm',
                'type' => 'Huyện',
                'province_id' => 1,
            ),
            12 =>
            array(
                'id' => 19,
                'name' => 'Quận Nam Từ Liêm',
                'type' => 'Quận',
                'province_id' => 1,
            ),
            13 =>
            array(
                'id' => 20,
                'name' => 'Huyện Thanh Trì',
                'type' => 'Huyện',
                'province_id' => 1,
            ),
            14 =>
            array(
                'id' => 21,
                'name' => 'Quận Bắc Từ Liêm',
                'type' => 'Quận',
                'province_id' => 1,
            ),
            15 =>
            array(
                'id' => 24,
                'name' => 'Thành phố Hà Giang',
                'type' => 'Thành phố',
                'province_id' => 2,
            ),
            16 =>
            array(
                'id' => 26,
                'name' => 'Huyện Đồng Văn',
                'type' => 'Huyện',
                'province_id' => 2,
            ),
            17 =>
            array(
                'id' => 27,
                'name' => 'Huyện Mèo Vạc',
                'type' => 'Huyện',
                'province_id' => 2,
            ),
            18 =>
            array(
                'id' => 28,
                'name' => 'Huyện Yên Minh',
                'type' => 'Huyện',
                'province_id' => 2,
            ),
            19 =>
            array(
                'id' => 29,
                'name' => 'Huyện Quản Bạ',
                'type' => 'Huyện',
                'province_id' => 2,
            ),
            20 =>
            array(
                'id' => 30,
                'name' => 'Huyện Vị Xuyên',
                'type' => 'Huyện',
                'province_id' => 2,
            ),
            21 =>
            array(
                'id' => 31,
                'name' => 'Huyện Bắc Mê',
                'type' => 'Huyện',
                'province_id' => 2,
            ),
            22 =>
            array(
                'id' => 32,
                'name' => 'Huyện Hoàng Su Phì',
                'type' => 'Huyện',
                'province_id' => 2,
            ),
            23 =>
            array(
                'id' => 33,
                'name' => 'Huyện Xín Mần',
                'type' => 'Huyện',
                'province_id' => 2,
            ),
            24 =>
            array(
                'id' => 34,
                'name' => 'Huyện Bắc Quang',
                'type' => 'Huyện',
                'province_id' => 2,
            ),
            25 =>
            array(
                'id' => 35,
                'name' => 'Huyện Quang Bình',
                'type' => 'Huyện',
                'province_id' => 2,
            ),
            26 =>
            array(
                'id' => 40,
                'name' => 'Thành phố Cao Bằng',
                'type' => 'Thành phố',
                'province_id' => 4,
            ),
            27 =>
            array(
                'id' => 42,
                'name' => 'Huyện Bảo Lâm',
                'type' => 'Huyện',
                'province_id' => 4,
            ),
            28 =>
            array(
                'id' => 43,
                'name' => 'Huyện Bảo Lạc',
                'type' => 'Huyện',
                'province_id' => 4,
            ),
            29 =>
            array(
                'id' => 44,
                'name' => 'Huyện Thông Nông',
                'type' => 'Huyện',
                'province_id' => 4,
            ),
            30 =>
            array(
                'id' => 45,
                'name' => 'Huyện Hà Quảng',
                'type' => 'Huyện',
                'province_id' => 4,
            ),
            31 =>
            array(
                'id' => 46,
                'name' => 'Huyện Trà Lĩnh',
                'type' => 'Huyện',
                'province_id' => 4,
            ),
            32 =>
            array(
                'id' => 47,
                'name' => 'Huyện Trùng Khánh',
                'type' => 'Huyện',
                'province_id' => 4,
            ),
            33 =>
            array(
                'id' => 48,
                'name' => 'Huyện Hạ Lang',
                'type' => 'Huyện',
                'province_id' => 4,
            ),
            34 =>
            array(
                'id' => 49,
                'name' => 'Huyện Quảng Uyên',
                'type' => 'Huyện',
                'province_id' => 4,
            ),
            35 =>
            array(
                'id' => 50,
                'name' => 'Huyện Phục Hoà',
                'type' => 'Huyện',
                'province_id' => 4,
            ),
            36 =>
            array(
                'id' => 51,
                'name' => 'Huyện Hoà An',
                'type' => 'Huyện',
                'province_id' => 4,
            ),
            37 =>
            array(
                'id' => 52,
                'name' => 'Huyện Nguyên Bình',
                'type' => 'Huyện',
                'province_id' => 4,
            ),
            38 =>
            array(
                'id' => 53,
                'name' => 'Huyện Thạch An',
                'type' => 'Huyện',
                'province_id' => 4,
            ),
            39 =>
            array(
                'id' => 58,
                'name' => 'Thành Phố Bắc Kạn',
                'type' => 'Thành phố',
                'province_id' => 6,
            ),
            40 =>
            array(
                'id' => 60,
                'name' => 'Huyện Pác Nặm',
                'type' => 'Huyện',
                'province_id' => 6,
            ),
            41 =>
            array(
                'id' => 61,
                'name' => 'Huyện Ba Bể',
                'type' => 'Huyện',
                'province_id' => 6,
            ),
            42 =>
            array(
                'id' => 62,
                'name' => 'Huyện Ngân Sơn',
                'type' => 'Huyện',
                'province_id' => 6,
            ),
            43 =>
            array(
                'id' => 63,
                'name' => 'Huyện Bạch Thông',
                'type' => 'Huyện',
                'province_id' => 6,
            ),
            44 =>
            array(
                'id' => 64,
                'name' => 'Huyện Chợ Đồn',
                'type' => 'Huyện',
                'province_id' => 6,
            ),
            45 =>
            array(
                'id' => 65,
                'name' => 'Huyện Chợ Mới',
                'type' => 'Huyện',
                'province_id' => 6,
            ),
            46 =>
            array(
                'id' => 66,
                'name' => 'Huyện Na Rì',
                'type' => 'Huyện',
                'province_id' => 6,
            ),
            47 =>
            array(
                'id' => 70,
                'name' => 'Thành phố Tuyên Quang',
                'type' => 'Thành phố',
                'province_id' => 8,
            ),
            48 =>
            array(
                'id' => 71,
                'name' => 'Huyện Lâm Bình',
                'type' => 'Huyện',
                'province_id' => 8,
            ),
            49 =>
            array(
                'id' => 72,
                'name' => 'Huyện Nà Hang',
                'type' => 'Huyện',
                'province_id' => 8,
            ),
            50 =>
            array(
                'id' => 73,
                'name' => 'Huyện Chiêm Hóa',
                'type' => 'Huyện',
                'province_id' => 8,
            ),
            51 =>
            array(
                'id' => 74,
                'name' => 'Huyện Hàm Yên',
                'type' => 'Huyện',
                'province_id' => 8,
            ),
            52 =>
            array(
                'id' => 75,
                'name' => 'Huyện Yên Sơn',
                'type' => 'Huyện',
                'province_id' => 8,
            ),
            53 =>
            array(
                'id' => 76,
                'name' => 'Huyện Sơn Dương',
                'type' => 'Huyện',
                'province_id' => 8,
            ),
            54 =>
            array(
                'id' => 80,
                'name' => 'Thành phố Lào Cai',
                'type' => 'Thành phố',
                'province_id' => 10,
            ),
            55 =>
            array(
                'id' => 82,
                'name' => 'Huyện Bát Xát',
                'type' => 'Huyện',
                'province_id' => 10,
            ),
            56 =>
            array(
                'id' => 83,
                'name' => 'Huyện Mường Khương',
                'type' => 'Huyện',
                'province_id' => 10,
            ),
            57 =>
            array(
                'id' => 84,
                'name' => 'Huyện Si Ma Cai',
                'type' => 'Huyện',
                'province_id' => 10,
            ),
            58 =>
            array(
                'id' => 85,
                'name' => 'Huyện Bắc Hà',
                'type' => 'Huyện',
                'province_id' => 10,
            ),
            59 =>
            array(
                'id' => 86,
                'name' => 'Huyện Bảo Thắng',
                'type' => 'Huyện',
                'province_id' => 10,
            ),
            60 =>
            array(
                'id' => 87,
                'name' => 'Huyện Bảo Yên',
                'type' => 'Huyện',
                'province_id' => 10,
            ),
            61 =>
            array(
                'id' => 88,
                'name' => 'Huyện Sa Pa',
                'type' => 'Huyện',
                'province_id' => 10,
            ),
            62 =>
            array(
                'id' => 89,
                'name' => 'Huyện Văn Bàn',
                'type' => 'Huyện',
                'province_id' => 10,
            ),
            63 =>
            array(
                'id' => 94,
                'name' => 'Thành phố Điện Biên Phủ',
                'type' => 'Thành phố',
                'province_id' => 11,
            ),
            64 =>
            array(
                'id' => 95,
                'name' => 'Thị Xã Mường Lay',
                'type' => 'Thị xã',
                'province_id' => 11,
            ),
            65 =>
            array(
                'id' => 96,
                'name' => 'Huyện Mường Nhé',
                'type' => 'Huyện',
                'province_id' => 11,
            ),
            66 =>
            array(
                'id' => 97,
                'name' => 'Huyện Mường Chà',
                'type' => 'Huyện',
                'province_id' => 11,
            ),
            67 =>
            array(
                'id' => 98,
                'name' => 'Huyện Tủa Chùa',
                'type' => 'Huyện',
                'province_id' => 11,
            ),
            68 =>
            array(
                'id' => 99,
                'name' => 'Huyện Tuần Giáo',
                'type' => 'Huyện',
                'province_id' => 11,
            ),
            69 =>
            array(
                'id' => 100,
                'name' => 'Huyện Điện Biên',
                'type' => 'Huyện',
                'province_id' => 11,
            ),
            70 =>
            array(
                'id' => 101,
                'name' => 'Huyện Điện Biên Đông',
                'type' => 'Huyện',
                'province_id' => 11,
            ),
            71 =>
            array(
                'id' => 102,
                'name' => 'Huyện Mường Ảng',
                'type' => 'Huyện',
                'province_id' => 11,
            ),
            72 =>
            array(
                'id' => 103,
                'name' => 'Huyện Nậm Pồ',
                'type' => 'Huyện',
                'province_id' => 11,
            ),
            73 =>
            array(
                'id' => 105,
                'name' => 'Thành phố Lai Châu',
                'type' => 'Thành phố',
                'province_id' => 12,
            ),
            74 =>
            array(
                'id' => 106,
                'name' => 'Huyện Tam Đường',
                'type' => 'Huyện',
                'province_id' => 12,
            ),
            75 =>
            array(
                'id' => 107,
                'name' => 'Huyện Mường Tè',
                'type' => 'Huyện',
                'province_id' => 12,
            ),
            76 =>
            array(
                'id' => 108,
                'name' => 'Huyện Sìn Hồ',
                'type' => 'Huyện',
                'province_id' => 12,
            ),
            77 =>
            array(
                'id' => 109,
                'name' => 'Huyện Phong Thổ',
                'type' => 'Huyện',
                'province_id' => 12,
            ),
            78 =>
            array(
                'id' => 110,
                'name' => 'Huyện Than Uyên',
                'type' => 'Huyện',
                'province_id' => 12,
            ),
            79 =>
            array(
                'id' => 111,
                'name' => 'Huyện Tân Uyên',
                'type' => 'Huyện',
                'province_id' => 12,
            ),
            80 =>
            array(
                'id' => 112,
                'name' => 'Huyện Nậm Nhùn',
                'type' => 'Huyện',
                'province_id' => 12,
            ),
            81 =>
            array(
                'id' => 116,
                'name' => 'Thành phố Sơn La',
                'type' => 'Thành phố',
                'province_id' => 14,
            ),
            82 =>
            array(
                'id' => 118,
                'name' => 'Huyện Quỳnh Nhai',
                'type' => 'Huyện',
                'province_id' => 14,
            ),
            83 =>
            array(
                'id' => 119,
                'name' => 'Huyện Thuận Châu',
                'type' => 'Huyện',
                'province_id' => 14,
            ),
            84 =>
            array(
                'id' => 120,
                'name' => 'Huyện Mường La',
                'type' => 'Huyện',
                'province_id' => 14,
            ),
            85 =>
            array(
                'id' => 121,
                'name' => 'Huyện Bắc Yên',
                'type' => 'Huyện',
                'province_id' => 14,
            ),
            86 =>
            array(
                'id' => 122,
                'name' => 'Huyện Phù Yên',
                'type' => 'Huyện',
                'province_id' => 14,
            ),
            87 =>
            array(
                'id' => 123,
                'name' => 'Huyện Mộc Châu',
                'type' => 'Huyện',
                'province_id' => 14,
            ),
            88 =>
            array(
                'id' => 124,
                'name' => 'Huyện Yên Châu',
                'type' => 'Huyện',
                'province_id' => 14,
            ),
            89 =>
            array(
                'id' => 125,
                'name' => 'Huyện Mai Sơn',
                'type' => 'Huyện',
                'province_id' => 14,
            ),
            90 =>
            array(
                'id' => 126,
                'name' => 'Huyện Sông Mã',
                'type' => 'Huyện',
                'province_id' => 14,
            ),
            91 =>
            array(
                'id' => 127,
                'name' => 'Huyện Sốp Cộp',
                'type' => 'Huyện',
                'province_id' => 14,
            ),
            92 =>
            array(
                'id' => 128,
                'name' => 'Huyện Vân Hồ',
                'type' => 'Huyện',
                'province_id' => 14,
            ),
            93 =>
            array(
                'id' => 132,
                'name' => 'Thành phố Yên Bái',
                'type' => 'Thành phố',
                'province_id' => 15,
            ),
            94 =>
            array(
                'id' => 133,
                'name' => 'Thị xã Nghĩa Lộ',
                'type' => 'Thị xã',
                'province_id' => 15,
            ),
            95 =>
            array(
                'id' => 135,
                'name' => 'Huyện Lục Yên',
                'type' => 'Huyện',
                'province_id' => 15,
            ),
            96 =>
            array(
                'id' => 136,
                'name' => 'Huyện Văn Yên',
                'type' => 'Huyện',
                'province_id' => 15,
            ),
            97 =>
            array(
                'id' => 137,
                'name' => 'Huyện Mù Căng Chải',
                'type' => 'Huyện',
                'province_id' => 15,
            ),
            98 =>
            array(
                'id' => 138,
                'name' => 'Huyện Trấn Yên',
                'type' => 'Huyện',
                'province_id' => 15,
            ),
            99 =>
            array(
                'id' => 139,
                'name' => 'Huyện Trạm Tấu',
                'type' => 'Huyện',
                'province_id' => 15,
            ),
            100 =>
            array(
                'id' => 140,
                'name' => 'Huyện Văn Chấn',
                'type' => 'Huyện',
                'province_id' => 15,
            ),
            101 =>
            array(
                'id' => 141,
                'name' => 'Huyện Yên Bình',
                'type' => 'Huyện',
                'province_id' => 15,
            ),
            102 =>
            array(
                'id' => 148,
                'name' => 'Thành phố Hòa Bình',
                'type' => 'Thành phố',
                'province_id' => 17,
            ),
            103 =>
            array(
                'id' => 150,
                'name' => 'Huyện Đà Bắc',
                'type' => 'Huyện',
                'province_id' => 17,
            ),
            104 =>
            array(
                'id' => 151,
                'name' => 'Huyện Kỳ Sơn',
                'type' => 'Huyện',
                'province_id' => 17,
            ),
            105 =>
            array(
                'id' => 152,
                'name' => 'Huyện Lương Sơn',
                'type' => 'Huyện',
                'province_id' => 17,
            ),
            106 =>
            array(
                'id' => 153,
                'name' => 'Huyện Kim Bôi',
                'type' => 'Huyện',
                'province_id' => 17,
            ),
            107 =>
            array(
                'id' => 154,
                'name' => 'Huyện Cao Phong',
                'type' => 'Huyện',
                'province_id' => 17,
            ),
            108 =>
            array(
                'id' => 155,
                'name' => 'Huyện Tân Lạc',
                'type' => 'Huyện',
                'province_id' => 17,
            ),
            109 =>
            array(
                'id' => 156,
                'name' => 'Huyện Mai Châu',
                'type' => 'Huyện',
                'province_id' => 17,
            ),
            110 =>
            array(
                'id' => 157,
                'name' => 'Huyện Lạc Sơn',
                'type' => 'Huyện',
                'province_id' => 17,
            ),
            111 =>
            array(
                'id' => 158,
                'name' => 'Huyện Yên Thủy',
                'type' => 'Huyện',
                'province_id' => 17,
            ),
            112 =>
            array(
                'id' => 159,
                'name' => 'Huyện Lạc Thủy',
                'type' => 'Huyện',
                'province_id' => 17,
            ),
            113 =>
            array(
                'id' => 164,
                'name' => 'Thành phố Thái Nguyên',
                'type' => 'Thành phố',
                'province_id' => 19,
            ),
            114 =>
            array(
                'id' => 165,
                'name' => 'Thành phố Sông Công',
                'type' => 'Thành phố',
                'province_id' => 19,
            ),
            115 =>
            array(
                'id' => 167,
                'name' => 'Huyện Định Hóa',
                'type' => 'Huyện',
                'province_id' => 19,
            ),
            116 =>
            array(
                'id' => 168,
                'name' => 'Huyện Phú Lương',
                'type' => 'Huyện',
                'province_id' => 19,
            ),
            117 =>
            array(
                'id' => 169,
                'name' => 'Huyện Đồng Hỷ',
                'type' => 'Huyện',
                'province_id' => 19,
            ),
            118 =>
            array(
                'id' => 170,
                'name' => 'Huyện Võ Nhai',
                'type' => 'Huyện',
                'province_id' => 19,
            ),
            119 =>
            array(
                'id' => 171,
                'name' => 'Huyện Đại Từ',
                'type' => 'Huyện',
                'province_id' => 19,
            ),
            120 =>
            array(
                'id' => 172,
                'name' => 'Thị xã Phổ Yên',
                'type' => 'Thị xã',
                'province_id' => 19,
            ),
            121 =>
            array(
                'id' => 173,
                'name' => 'Huyện Phú Bình',
                'type' => 'Huyện',
                'province_id' => 19,
            ),
            122 =>
            array(
                'id' => 178,
                'name' => 'Thành phố Lạng Sơn',
                'type' => 'Thành phố',
                'province_id' => 20,
            ),
            123 =>
            array(
                'id' => 180,
                'name' => 'Huyện Tràng Định',
                'type' => 'Huyện',
                'province_id' => 20,
            ),
            124 =>
            array(
                'id' => 181,
                'name' => 'Huyện Bình Gia',
                'type' => 'Huyện',
                'province_id' => 20,
            ),
            125 =>
            array(
                'id' => 182,
                'name' => 'Huyện Văn Lãng',
                'type' => 'Huyện',
                'province_id' => 20,
            ),
            126 =>
            array(
                'id' => 183,
                'name' => 'Huyện Cao Lộc',
                'type' => 'Huyện',
                'province_id' => 20,
            ),
            127 =>
            array(
                'id' => 184,
                'name' => 'Huyện Văn Quan',
                'type' => 'Huyện',
                'province_id' => 20,
            ),
            128 =>
            array(
                'id' => 185,
                'name' => 'Huyện Bắc Sơn',
                'type' => 'Huyện',
                'province_id' => 20,
            ),
            129 =>
            array(
                'id' => 186,
                'name' => 'Huyện Hữu Lũng',
                'type' => 'Huyện',
                'province_id' => 20,
            ),
            130 =>
            array(
                'id' => 187,
                'name' => 'Huyện Chi Lăng',
                'type' => 'Huyện',
                'province_id' => 20,
            ),
            131 =>
            array(
                'id' => 188,
                'name' => 'Huyện Lộc Bình',
                'type' => 'Huyện',
                'province_id' => 20,
            ),
            132 =>
            array(
                'id' => 189,
                'name' => 'Huyện Đình Lập',
                'type' => 'Huyện',
                'province_id' => 20,
            ),
            133 =>
            array(
                'id' => 193,
                'name' => 'Thành phố Hạ Long',
                'type' => 'Thành phố',
                'province_id' => 22,
            ),
            134 =>
            array(
                'id' => 194,
                'name' => 'Thành phố Móng Cái',
                'type' => 'Thành phố',
                'province_id' => 22,
            ),
            135 =>
            array(
                'id' => 195,
                'name' => 'Thành phố Cẩm Phả',
                'type' => 'Thành phố',
                'province_id' => 22,
            ),
            136 =>
            array(
                'id' => 196,
                'name' => 'Thành phố Uông Bí',
                'type' => 'Thành phố',
                'province_id' => 22,
            ),
            137 =>
            array(
                'id' => 198,
                'name' => 'Huyện Bình Liêu',
                'type' => 'Huyện',
                'province_id' => 22,
            ),
            138 =>
            array(
                'id' => 199,
                'name' => 'Huyện Tiên Yên',
                'type' => 'Huyện',
                'province_id' => 22,
            ),
            139 =>
            array(
                'id' => 200,
                'name' => 'Huyện Đầm Hà',
                'type' => 'Huyện',
                'province_id' => 22,
            ),
            140 =>
            array(
                'id' => 201,
                'name' => 'Huyện Hải Hà',
                'type' => 'Huyện',
                'province_id' => 22,
            ),
            141 =>
            array(
                'id' => 202,
                'name' => 'Huyện Ba Chẽ',
                'type' => 'Huyện',
                'province_id' => 22,
            ),
            142 =>
            array(
                'id' => 203,
                'name' => 'Huyện Vân Đồn',
                'type' => 'Huyện',
                'province_id' => 22,
            ),
            143 =>
            array(
                'id' => 204,
                'name' => 'Huyện Hoành Bồ',
                'type' => 'Huyện',
                'province_id' => 22,
            ),
            144 =>
            array(
                'id' => 205,
                'name' => 'Thị xã Đông Triều',
                'type' => 'Thị xã',
                'province_id' => 22,
            ),
            145 =>
            array(
                'id' => 206,
                'name' => 'Thị xã Quảng Yên',
                'type' => 'Thị xã',
                'province_id' => 22,
            ),
            146 =>
            array(
                'id' => 207,
                'name' => 'Huyện Cô Tô',
                'type' => 'Huyện',
                'province_id' => 22,
            ),
            147 =>
            array(
                'id' => 213,
                'name' => 'Thành phố Bắc Giang',
                'type' => 'Thành phố',
                'province_id' => 24,
            ),
            148 =>
            array(
                'id' => 215,
                'name' => 'Huyện Yên Thế',
                'type' => 'Huyện',
                'province_id' => 24,
            ),
            149 =>
            array(
                'id' => 216,
                'name' => 'Huyện Tân Yên',
                'type' => 'Huyện',
                'province_id' => 24,
            ),
            150 =>
            array(
                'id' => 217,
                'name' => 'Huyện Lạng Giang',
                'type' => 'Huyện',
                'province_id' => 24,
            ),
            151 =>
            array(
                'id' => 218,
                'name' => 'Huyện Lục Nam',
                'type' => 'Huyện',
                'province_id' => 24,
            ),
            152 =>
            array(
                'id' => 219,
                'name' => 'Huyện Lục Ngạn',
                'type' => 'Huyện',
                'province_id' => 24,
            ),
            153 =>
            array(
                'id' => 220,
                'name' => 'Huyện Sơn Động',
                'type' => 'Huyện',
                'province_id' => 24,
            ),
            154 =>
            array(
                'id' => 221,
                'name' => 'Huyện Yên Dũng',
                'type' => 'Huyện',
                'province_id' => 24,
            ),
            155 =>
            array(
                'id' => 222,
                'name' => 'Huyện Việt Yên',
                'type' => 'Huyện',
                'province_id' => 24,
            ),
            156 =>
            array(
                'id' => 223,
                'name' => 'Huyện Hiệp Hòa',
                'type' => 'Huyện',
                'province_id' => 24,
            ),
            157 =>
            array(
                'id' => 227,
                'name' => 'Thành phố Việt Trì',
                'type' => 'Thành phố',
                'province_id' => 25,
            ),
            158 =>
            array(
                'id' => 228,
                'name' => 'Thị xã Phú Thọ',
                'type' => 'Thị xã',
                'province_id' => 25,
            ),
            159 =>
            array(
                'id' => 230,
                'name' => 'Huyện Đoan Hùng',
                'type' => 'Huyện',
                'province_id' => 25,
            ),
            160 =>
            array(
                'id' => 231,
                'name' => 'Huyện Hạ Hoà',
                'type' => 'Huyện',
                'province_id' => 25,
            ),
            161 =>
            array(
                'id' => 232,
                'name' => 'Huyện Thanh Ba',
                'type' => 'Huyện',
                'province_id' => 25,
            ),
            162 =>
            array(
                'id' => 233,
                'name' => 'Huyện Phù Ninh',
                'type' => 'Huyện',
                'province_id' => 25,
            ),
            163 =>
            array(
                'id' => 234,
                'name' => 'Huyện Yên Lập',
                'type' => 'Huyện',
                'province_id' => 25,
            ),
            164 =>
            array(
                'id' => 235,
                'name' => 'Huyện Cẩm Khê',
                'type' => 'Huyện',
                'province_id' => 25,
            ),
            165 =>
            array(
                'id' => 236,
                'name' => 'Huyện Tam Nông',
                'type' => 'Huyện',
                'province_id' => 25,
            ),
            166 =>
            array(
                'id' => 237,
                'name' => 'Huyện Lâm Thao',
                'type' => 'Huyện',
                'province_id' => 25,
            ),
            167 =>
            array(
                'id' => 238,
                'name' => 'Huyện Thanh Sơn',
                'type' => 'Huyện',
                'province_id' => 25,
            ),
            168 =>
            array(
                'id' => 239,
                'name' => 'Huyện Thanh Thuỷ',
                'type' => 'Huyện',
                'province_id' => 25,
            ),
            169 =>
            array(
                'id' => 240,
                'name' => 'Huyện Tân Sơn',
                'type' => 'Huyện',
                'province_id' => 25,
            ),
            170 =>
            array(
                'id' => 243,
                'name' => 'Thành phố Vĩnh Yên',
                'type' => 'Thành phố',
                'province_id' => 26,
            ),
            171 =>
            array(
                'id' => 244,
                'name' => 'Thị xã Phúc Yên',
                'type' => 'Thị xã',
                'province_id' => 26,
            ),
            172 =>
            array(
                'id' => 246,
                'name' => 'Huyện Lập Thạch',
                'type' => 'Huyện',
                'province_id' => 26,
            ),
            173 =>
            array(
                'id' => 247,
                'name' => 'Huyện Tam Dương',
                'type' => 'Huyện',
                'province_id' => 26,
            ),
            174 =>
            array(
                'id' => 248,
                'name' => 'Huyện Tam Đảo',
                'type' => 'Huyện',
                'province_id' => 26,
            ),
            175 =>
            array(
                'id' => 249,
                'name' => 'Huyện Bình Xuyên',
                'type' => 'Huyện',
                'province_id' => 26,
            ),
            176 =>
            array(
                'id' => 250,
                'name' => 'Huyện Mê Linh',
                'type' => 'Huyện',
                'province_id' => 1,
            ),
            177 =>
            array(
                'id' => 251,
                'name' => 'Huyện Yên Lạc',
                'type' => 'Huyện',
                'province_id' => 26,
            ),
            178 =>
            array(
                'id' => 252,
                'name' => 'Huyện Vĩnh Tường',
                'type' => 'Huyện',
                'province_id' => 26,
            ),
            179 =>
            array(
                'id' => 253,
                'name' => 'Huyện Sông Lô',
                'type' => 'Huyện',
                'province_id' => 26,
            ),
            180 =>
            array(
                'id' => 256,
                'name' => 'Thành phố Bắc Ninh',
                'type' => 'Thành phố',
                'province_id' => 27,
            ),
            181 =>
            array(
                'id' => 258,
                'name' => 'Huyện Yên Phong',
                'type' => 'Huyện',
                'province_id' => 27,
            ),
            182 =>
            array(
                'id' => 259,
                'name' => 'Huyện Quế Võ',
                'type' => 'Huyện',
                'province_id' => 27,
            ),
            183 =>
            array(
                'id' => 260,
                'name' => 'Huyện Tiên Du',
                'type' => 'Huyện',
                'province_id' => 27,
            ),
            184 =>
            array(
                'id' => 261,
                'name' => 'Thị xã Từ Sơn',
                'type' => 'Thị xã',
                'province_id' => 27,
            ),
            185 =>
            array(
                'id' => 262,
                'name' => 'Huyện Thuận Thành',
                'type' => 'Huyện',
                'province_id' => 27,
            ),
            186 =>
            array(
                'id' => 263,
                'name' => 'Huyện Gia Bình',
                'type' => 'Huyện',
                'province_id' => 27,
            ),
            187 =>
            array(
                'id' => 264,
                'name' => 'Huyện Lương Tài',
                'type' => 'Huyện',
                'province_id' => 27,
            ),
            188 =>
            array(
                'id' => 268,
                'name' => 'Quận Hà Đông',
                'type' => 'Quận',
                'province_id' => 1,
            ),
            189 =>
            array(
                'id' => 269,
                'name' => 'Thị xã Sơn Tây',
                'type' => 'Thị xã',
                'province_id' => 1,
            ),
            190 =>
            array(
                'id' => 271,
                'name' => 'Huyện Ba Vì',
                'type' => 'Huyện',
                'province_id' => 1,
            ),
            191 =>
            array(
                'id' => 272,
                'name' => 'Huyện Phúc Thọ',
                'type' => 'Huyện',
                'province_id' => 1,
            ),
            192 =>
            array(
                'id' => 273,
                'name' => 'Huyện Đan Phượng',
                'type' => 'Huyện',
                'province_id' => 1,
            ),
            193 =>
            array(
                'id' => 274,
                'name' => 'Huyện Hoài Đức',
                'type' => 'Huyện',
                'province_id' => 1,
            ),
            194 =>
            array(
                'id' => 275,
                'name' => 'Huyện Quốc Oai',
                'type' => 'Huyện',
                'province_id' => 1,
            ),
            195 =>
            array(
                'id' => 276,
                'name' => 'Huyện Thạch Thất',
                'type' => 'Huyện',
                'province_id' => 1,
            ),
            196 =>
            array(
                'id' => 277,
                'name' => 'Huyện Chương Mỹ',
                'type' => 'Huyện',
                'province_id' => 1,
            ),
            197 =>
            array(
                'id' => 278,
                'name' => 'Huyện Thanh Oai',
                'type' => 'Huyện',
                'province_id' => 1,
            ),
            198 =>
            array(
                'id' => 279,
                'name' => 'Huyện Thường Tín',
                'type' => 'Huyện',
                'province_id' => 1,
            ),
            199 =>
            array(
                'id' => 280,
                'name' => 'Huyện Phú Xuyên',
                'type' => 'Huyện',
                'province_id' => 1,
            ),
            200 =>
            array(
                'id' => 281,
                'name' => 'Huyện Ứng Hòa',
                'type' => 'Huyện',
                'province_id' => 1,
            ),
            201 =>
            array(
                'id' => 282,
                'name' => 'Huyện Mỹ Đức',
                'type' => 'Huyện',
                'province_id' => 1,
            ),
            202 =>
            array(
                'id' => 288,
                'name' => 'Thành phố Hải Dương',
                'type' => 'Thành phố',
                'province_id' => 30,
            ),
            203 =>
            array(
                'id' => 290,
                'name' => 'Thị xã Chí Linh',
                'type' => 'Thị xã',
                'province_id' => 30,
            ),
            204 =>
            array(
                'id' => 291,
                'name' => 'Huyện Nam Sách',
                'type' => 'Huyện',
                'province_id' => 30,
            ),
            205 =>
            array(
                'id' => 292,
                'name' => 'Huyện Kinh Môn',
                'type' => 'Huyện',
                'province_id' => 30,
            ),
            206 =>
            array(
                'id' => 293,
                'name' => 'Huyện Kim Thành',
                'type' => 'Huyện',
                'province_id' => 30,
            ),
            207 =>
            array(
                'id' => 294,
                'name' => 'Huyện Thanh Hà',
                'type' => 'Huyện',
                'province_id' => 30,
            ),
            208 =>
            array(
                'id' => 295,
                'name' => 'Huyện Cẩm Giàng',
                'type' => 'Huyện',
                'province_id' => 30,
            ),
            209 =>
            array(
                'id' => 296,
                'name' => 'Huyện Bình Giang',
                'type' => 'Huyện',
                'province_id' => 30,
            ),
            210 =>
            array(
                'id' => 297,
                'name' => 'Huyện Gia Lộc',
                'type' => 'Huyện',
                'province_id' => 30,
            ),
            211 =>
            array(
                'id' => 298,
                'name' => 'Huyện Tứ Kỳ',
                'type' => 'Huyện',
                'province_id' => 30,
            ),
            212 =>
            array(
                'id' => 299,
                'name' => 'Huyện Ninh Giang',
                'type' => 'Huyện',
                'province_id' => 30,
            ),
            213 =>
            array(
                'id' => 300,
                'name' => 'Huyện Thanh Miện',
                'type' => 'Huyện',
                'province_id' => 30,
            ),
            214 =>
            array(
                'id' => 303,
                'name' => 'Quận Hồng Bàng',
                'type' => 'Quận',
                'province_id' => 31,
            ),
            215 =>
            array(
                'id' => 304,
                'name' => 'Quận Ngô Quyền',
                'type' => 'Quận',
                'province_id' => 31,
            ),
            216 =>
            array(
                'id' => 305,
                'name' => 'Quận Lê Chân',
                'type' => 'Quận',
                'province_id' => 31,
            ),
            217 =>
            array(
                'id' => 306,
                'name' => 'Quận Hải An',
                'type' => 'Quận',
                'province_id' => 31,
            ),
            218 =>
            array(
                'id' => 307,
                'name' => 'Quận Kiến An',
                'type' => 'Quận',
                'province_id' => 31,
            ),
            219 =>
            array(
                'id' => 308,
                'name' => 'Quận Đồ Sơn',
                'type' => 'Quận',
                'province_id' => 31,
            ),
            220 =>
            array(
                'id' => 309,
                'name' => 'Quận Dương Kinh',
                'type' => 'Quận',
                'province_id' => 31,
            ),
            221 =>
            array(
                'id' => 311,
                'name' => 'Huyện Thuỷ Nguyên',
                'type' => 'Huyện',
                'province_id' => 31,
            ),
            222 =>
            array(
                'id' => 312,
                'name' => 'Huyện An Dương',
                'type' => 'Huyện',
                'province_id' => 31,
            ),
            223 =>
            array(
                'id' => 313,
                'name' => 'Huyện An Lão',
                'type' => 'Huyện',
                'province_id' => 31,
            ),
            224 =>
            array(
                'id' => 314,
                'name' => 'Huyện Kiến Thuỵ',
                'type' => 'Huyện',
                'province_id' => 31,
            ),
            225 =>
            array(
                'id' => 315,
                'name' => 'Huyện Tiên Lãng',
                'type' => 'Huyện',
                'province_id' => 31,
            ),
            226 =>
            array(
                'id' => 316,
                'name' => 'Huyện Vĩnh Bảo',
                'type' => 'Huyện',
                'province_id' => 31,
            ),
            227 =>
            array(
                'id' => 317,
                'name' => 'Huyện Cát Hải',
                'type' => 'Huyện',
                'province_id' => 31,
            ),
            228 =>
            array(
                'id' => 318,
                'name' => 'Huyện Bạch Long Vĩ',
                'type' => 'Huyện',
                'province_id' => 31,
            ),
            229 =>
            array(
                'id' => 323,
                'name' => 'Thành phố Hưng Yên',
                'type' => 'Thành phố',
                'province_id' => 33,
            ),
            230 =>
            array(
                'id' => 325,
                'name' => 'Huyện Văn Lâm',
                'type' => 'Huyện',
                'province_id' => 33,
            ),
            231 =>
            array(
                'id' => 326,
                'name' => 'Huyện Văn Giang',
                'type' => 'Huyện',
                'province_id' => 33,
            ),
            232 =>
            array(
                'id' => 327,
                'name' => 'Huyện Yên Mỹ',
                'type' => 'Huyện',
                'province_id' => 33,
            ),
            233 =>
            array(
                'id' => 328,
                'name' => 'Huyện Mỹ Hào',
                'type' => 'Huyện',
                'province_id' => 33,
            ),
            234 =>
            array(
                'id' => 329,
                'name' => 'Huyện Ân Thi',
                'type' => 'Huyện',
                'province_id' => 33,
            ),
            235 =>
            array(
                'id' => 330,
                'name' => 'Huyện Khoái Châu',
                'type' => 'Huyện',
                'province_id' => 33,
            ),
            236 =>
            array(
                'id' => 331,
                'name' => 'Huyện Kim Động',
                'type' => 'Huyện',
                'province_id' => 33,
            ),
            237 =>
            array(
                'id' => 332,
                'name' => 'Huyện Tiên Lữ',
                'type' => 'Huyện',
                'province_id' => 33,
            ),
            238 =>
            array(
                'id' => 333,
                'name' => 'Huyện Phù Cừ',
                'type' => 'Huyện',
                'province_id' => 33,
            ),
            239 =>
            array(
                'id' => 336,
                'name' => 'Thành phố Thái Bình',
                'type' => 'Thành phố',
                'province_id' => 34,
            ),
            240 =>
            array(
                'id' => 338,
                'name' => 'Huyện Quỳnh Phụ',
                'type' => 'Huyện',
                'province_id' => 34,
            ),
            241 =>
            array(
                'id' => 339,
                'name' => 'Huyện Hưng Hà',
                'type' => 'Huyện',
                'province_id' => 34,
            ),
            242 =>
            array(
                'id' => 340,
                'name' => 'Huyện Đông Hưng',
                'type' => 'Huyện',
                'province_id' => 34,
            ),
            243 =>
            array(
                'id' => 341,
                'name' => 'Huyện Thái Thụy',
                'type' => 'Huyện',
                'province_id' => 34,
            ),
            244 =>
            array(
                'id' => 342,
                'name' => 'Huyện Tiền Hải',
                'type' => 'Huyện',
                'province_id' => 34,
            ),
            245 =>
            array(
                'id' => 343,
                'name' => 'Huyện Kiến Xương',
                'type' => 'Huyện',
                'province_id' => 34,
            ),
            246 =>
            array(
                'id' => 344,
                'name' => 'Huyện Vũ Thư',
                'type' => 'Huyện',
                'province_id' => 34,
            ),
            247 =>
            array(
                'id' => 347,
                'name' => 'Thành phố Phủ Lý',
                'type' => 'Thành phố',
                'province_id' => 35,
            ),
            248 =>
            array(
                'id' => 349,
                'name' => 'Huyện Duy Tiên',
                'type' => 'Huyện',
                'province_id' => 35,
            ),
            249 =>
            array(
                'id' => 350,
                'name' => 'Huyện Kim Bảng',
                'type' => 'Huyện',
                'province_id' => 35,
            ),
            250 =>
            array(
                'id' => 351,
                'name' => 'Huyện Thanh Liêm',
                'type' => 'Huyện',
                'province_id' => 35,
            ),
            251 =>
            array(
                'id' => 352,
                'name' => 'Huyện Bình Lục',
                'type' => 'Huyện',
                'province_id' => 35,
            ),
            252 =>
            array(
                'id' => 353,
                'name' => 'Huyện Lý Nhân',
                'type' => 'Huyện',
                'province_id' => 35,
            ),
            253 =>
            array(
                'id' => 356,
                'name' => 'Thành phố Nam Định',
                'type' => 'Thành phố',
                'province_id' => 36,
            ),
            254 =>
            array(
                'id' => 358,
                'name' => 'Huyện Mỹ Lộc',
                'type' => 'Huyện',
                'province_id' => 36,
            ),
            255 =>
            array(
                'id' => 359,
                'name' => 'Huyện Vụ Bản',
                'type' => 'Huyện',
                'province_id' => 36,
            ),
            256 =>
            array(
                'id' => 360,
                'name' => 'Huyện Ý Yên',
                'type' => 'Huyện',
                'province_id' => 36,
            ),
            257 =>
            array(
                'id' => 361,
                'name' => 'Huyện Nghĩa Hưng',
                'type' => 'Huyện',
                'province_id' => 36,
            ),
            258 =>
            array(
                'id' => 362,
                'name' => 'Huyện Nam Trực',
                'type' => 'Huyện',
                'province_id' => 36,
            ),
            259 =>
            array(
                'id' => 363,
                'name' => 'Huyện Trực Ninh',
                'type' => 'Huyện',
                'province_id' => 36,
            ),
            260 =>
            array(
                'id' => 364,
                'name' => 'Huyện Xuân Trường',
                'type' => 'Huyện',
                'province_id' => 36,
            ),
            261 =>
            array(
                'id' => 365,
                'name' => 'Huyện Giao Thủy',
                'type' => 'Huyện',
                'province_id' => 36,
            ),
            262 =>
            array(
                'id' => 366,
                'name' => 'Huyện Hải Hậu',
                'type' => 'Huyện',
                'province_id' => 36,
            ),
            263 =>
            array(
                'id' => 369,
                'name' => 'Thành phố Ninh Bình',
                'type' => 'Thành phố',
                'province_id' => 37,
            ),
            264 =>
            array(
                'id' => 370,
                'name' => 'Thành phố Tam Điệp',
                'type' => 'Thành phố',
                'province_id' => 37,
            ),
            265 =>
            array(
                'id' => 372,
                'name' => 'Huyện Nho Quan',
                'type' => 'Huyện',
                'province_id' => 37,
            ),
            266 =>
            array(
                'id' => 373,
                'name' => 'Huyện Gia Viễn',
                'type' => 'Huyện',
                'province_id' => 37,
            ),
            267 =>
            array(
                'id' => 374,
                'name' => 'Huyện Hoa Lư',
                'type' => 'Huyện',
                'province_id' => 37,
            ),
            268 =>
            array(
                'id' => 375,
                'name' => 'Huyện Yên Khánh',
                'type' => 'Huyện',
                'province_id' => 37,
            ),
            269 =>
            array(
                'id' => 376,
                'name' => 'Huyện Kim Sơn',
                'type' => 'Huyện',
                'province_id' => 37,
            ),
            270 =>
            array(
                'id' => 377,
                'name' => 'Huyện Yên Mô',
                'type' => 'Huyện',
                'province_id' => 37,
            ),
            271 =>
            array(
                'id' => 380,
                'name' => 'Thành phố Thanh Hóa',
                'type' => 'Thành phố',
                'province_id' => 38,
            ),
            272 =>
            array(
                'id' => 381,
                'name' => 'Thị xã Bỉm Sơn',
                'type' => 'Thị xã',
                'province_id' => 38,
            ),
            273 =>
            array(
                'id' => 382,
                'name' => 'Thị xã Sầm Sơn',
                'type' => 'Thị xã',
                'province_id' => 38,
            ),
            274 =>
            array(
                'id' => 384,
                'name' => 'Huyện Mường Lát',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            275 =>
            array(
                'id' => 385,
                'name' => 'Huyện Quan Hóa',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            276 =>
            array(
                'id' => 386,
                'name' => 'Huyện Bá Thước',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            277 =>
            array(
                'id' => 387,
                'name' => 'Huyện Quan Sơn',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            278 =>
            array(
                'id' => 388,
                'name' => 'Huyện Lang Chánh',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            279 =>
            array(
                'id' => 389,
                'name' => 'Huyện Ngọc Lặc',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            280 =>
            array(
                'id' => 390,
                'name' => 'Huyện Cẩm Thủy',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            281 =>
            array(
                'id' => 391,
                'name' => 'Huyện Thạch Thành',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            282 =>
            array(
                'id' => 392,
                'name' => 'Huyện Hà Trung',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            283 =>
            array(
                'id' => 393,
                'name' => 'Huyện Vĩnh Lộc',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            284 =>
            array(
                'id' => 394,
                'name' => 'Huyện Yên Định',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            285 =>
            array(
                'id' => 395,
                'name' => 'Huyện Thọ Xuân',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            286 =>
            array(
                'id' => 396,
                'name' => 'Huyện Thường Xuân',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            287 =>
            array(
                'id' => 397,
                'name' => 'Huyện Triệu Sơn',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            288 =>
            array(
                'id' => 398,
                'name' => 'Huyện Thiệu Hóa',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            289 =>
            array(
                'id' => 399,
                'name' => 'Huyện Hoằng Hóa',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            290 =>
            array(
                'id' => 400,
                'name' => 'Huyện Hậu Lộc',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            291 =>
            array(
                'id' => 401,
                'name' => 'Huyện Nga Sơn',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            292 =>
            array(
                'id' => 402,
                'name' => 'Huyện Như Xuân',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            293 =>
            array(
                'id' => 403,
                'name' => 'Huyện Như Thanh',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            294 =>
            array(
                'id' => 404,
                'name' => 'Huyện Nông Cống',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            295 =>
            array(
                'id' => 405,
                'name' => 'Huyện Đông Sơn',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            296 =>
            array(
                'id' => 406,
                'name' => 'Huyện Quảng Xương',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            297 =>
            array(
                'id' => 407,
                'name' => 'Huyện Tĩnh Gia',
                'type' => 'Huyện',
                'province_id' => 38,
            ),
            298 =>
            array(
                'id' => 412,
                'name' => 'Thành phố Vinh',
                'type' => 'Thành phố',
                'province_id' => 40,
            ),
            299 =>
            array(
                'id' => 413,
                'name' => 'Thị xã Cửa Lò',
                'type' => 'Thị xã',
                'province_id' => 40,
            ),
            300 =>
            array(
                'id' => 414,
                'name' => 'Thị xã Thái Hoà',
                'type' => 'Thị xã',
                'province_id' => 40,
            ),
            301 =>
            array(
                'id' => 415,
                'name' => 'Huyện Quế Phong',
                'type' => 'Huyện',
                'province_id' => 40,
            ),
            302 =>
            array(
                'id' => 416,
                'name' => 'Huyện Quỳ Châu',
                'type' => 'Huyện',
                'province_id' => 40,
            ),
            303 =>
            array(
                'id' => 417,
                'name' => 'Huyện Kỳ Sơn',
                'type' => 'Huyện',
                'province_id' => 40,
            ),
            304 =>
            array(
                'id' => 418,
                'name' => 'Huyện Tương Dương',
                'type' => 'Huyện',
                'province_id' => 40,
            ),
            305 =>
            array(
                'id' => 419,
                'name' => 'Huyện Nghĩa Đàn',
                'type' => 'Huyện',
                'province_id' => 40,
            ),
            306 =>
            array(
                'id' => 420,
                'name' => 'Huyện Quỳ Hợp',
                'type' => 'Huyện',
                'province_id' => 40,
            ),
            307 =>
            array(
                'id' => 421,
                'name' => 'Huyện Quỳnh Lưu',
                'type' => 'Huyện',
                'province_id' => 40,
            ),
            308 =>
            array(
                'id' => 422,
                'name' => 'Huyện Con Cuông',
                'type' => 'Huyện',
                'province_id' => 40,
            ),
            309 =>
            array(
                'id' => 423,
                'name' => 'Huyện Tân Kỳ',
                'type' => 'Huyện',
                'province_id' => 40,
            ),
            310 =>
            array(
                'id' => 424,
                'name' => 'Huyện Anh Sơn',
                'type' => 'Huyện',
                'province_id' => 40,
            ),
            311 =>
            array(
                'id' => 425,
                'name' => 'Huyện Diễn Châu',
                'type' => 'Huyện',
                'province_id' => 40,
            ),
            312 =>
            array(
                'id' => 426,
                'name' => 'Huyện Yên Thành',
                'type' => 'Huyện',
                'province_id' => 40,
            ),
            313 =>
            array(
                'id' => 427,
                'name' => 'Huyện Đô Lương',
                'type' => 'Huyện',
                'province_id' => 40,
            ),
            314 =>
            array(
                'id' => 428,
                'name' => 'Huyện Thanh Chương',
                'type' => 'Huyện',
                'province_id' => 40,
            ),
            315 =>
            array(
                'id' => 429,
                'name' => 'Huyện Nghi Lộc',
                'type' => 'Huyện',
                'province_id' => 40,
            ),
            316 =>
            array(
                'id' => 430,
                'name' => 'Huyện Nam Đàn',
                'type' => 'Huyện',
                'province_id' => 40,
            ),
            317 =>
            array(
                'id' => 431,
                'name' => 'Huyện Hưng Nguyên',
                'type' => 'Huyện',
                'province_id' => 40,
            ),
            318 =>
            array(
                'id' => 432,
                'name' => 'Thị xã Hoàng Mai',
                'type' => 'Thị xã',
                'province_id' => 40,
            ),
            319 =>
            array(
                'id' => 436,
                'name' => 'Thành phố Hà Tĩnh',
                'type' => 'Thành phố',
                'province_id' => 42,
            ),
            320 =>
            array(
                'id' => 437,
                'name' => 'Thị xã Hồng Lĩnh',
                'type' => 'Thị xã',
                'province_id' => 42,
            ),
            321 =>
            array(
                'id' => 439,
                'name' => 'Huyện Hương Sơn',
                'type' => 'Huyện',
                'province_id' => 42,
            ),
            322 =>
            array(
                'id' => 440,
                'name' => 'Huyện Đức Thọ',
                'type' => 'Huyện',
                'province_id' => 42,
            ),
            323 =>
            array(
                'id' => 441,
                'name' => 'Huyện Vũ Quang',
                'type' => 'Huyện',
                'province_id' => 42,
            ),
            324 =>
            array(
                'id' => 442,
                'name' => 'Huyện Nghi Xuân',
                'type' => 'Huyện',
                'province_id' => 42,
            ),
            325 =>
            array(
                'id' => 443,
                'name' => 'Huyện Can Lộc',
                'type' => 'Huyện',
                'province_id' => 42,
            ),
            326 =>
            array(
                'id' => 444,
                'name' => 'Huyện Hương Khê',
                'type' => 'Huyện',
                'province_id' => 42,
            ),
            327 =>
            array(
                'id' => 445,
                'name' => 'Huyện Thạch Hà',
                'type' => 'Huyện',
                'province_id' => 42,
            ),
            328 =>
            array(
                'id' => 446,
                'name' => 'Huyện Cẩm Xuyên',
                'type' => 'Huyện',
                'province_id' => 42,
            ),
            329 =>
            array(
                'id' => 447,
                'name' => 'Huyện Kỳ Anh',
                'type' => 'Huyện',
                'province_id' => 42,
            ),
            330 =>
            array(
                'id' => 448,
                'name' => 'Huyện Lộc Hà',
                'type' => 'Huyện',
                'province_id' => 42,
            ),
            331 =>
            array(
                'id' => 449,
                'name' => 'Thị xã Kỳ Anh',
                'type' => 'Thị xã',
                'province_id' => 42,
            ),
            332 =>
            array(
                'id' => 450,
                'name' => 'Thành Phố Đồng Hới',
                'type' => 'Thành phố',
                'province_id' => 44,
            ),
            333 =>
            array(
                'id' => 452,
                'name' => 'Huyện Minh Hóa',
                'type' => 'Huyện',
                'province_id' => 44,
            ),
            334 =>
            array(
                'id' => 453,
                'name' => 'Huyện Tuyên Hóa',
                'type' => 'Huyện',
                'province_id' => 44,
            ),
            335 =>
            array(
                'id' => 454,
                'name' => 'Huyện Quảng Trạch',
                'type' => 'Thị xã',
                'province_id' => 44,
            ),
            336 =>
            array(
                'id' => 455,
                'name' => 'Huyện Bố Trạch',
                'type' => 'Huyện',
                'province_id' => 44,
            ),
            337 =>
            array(
                'id' => 456,
                'name' => 'Huyện Quảng Ninh',
                'type' => 'Huyện',
                'province_id' => 44,
            ),
            338 =>
            array(
                'id' => 457,
                'name' => 'Huyện Lệ Thủy',
                'type' => 'Huyện',
                'province_id' => 44,
            ),
            339 =>
            array(
                'id' => 458,
                'name' => 'Thị xã Ba Đồn',
                'type' => 'Huyện',
                'province_id' => 44,
            ),
            340 =>
            array(
                'id' => 461,
                'name' => 'Thành phố Đông Hà',
                'type' => 'Thành phố',
                'province_id' => 45,
            ),
            341 =>
            array(
                'id' => 462,
                'name' => 'Thị xã Quảng Trị',
                'type' => 'Thị xã',
                'province_id' => 45,
            ),
            342 =>
            array(
                'id' => 464,
                'name' => 'Huyện Vĩnh Linh',
                'type' => 'Huyện',
                'province_id' => 45,
            ),
            343 =>
            array(
                'id' => 465,
                'name' => 'Huyện Hướng Hóa',
                'type' => 'Huyện',
                'province_id' => 45,
            ),
            344 =>
            array(
                'id' => 466,
                'name' => 'Huyện Gio Linh',
                'type' => 'Huyện',
                'province_id' => 45,
            ),
            345 =>
            array(
                'id' => 467,
                'name' => 'Huyện Đa Krông',
                'type' => 'Huyện',
                'province_id' => 45,
            ),
            346 =>
            array(
                'id' => 468,
                'name' => 'Huyện Cam Lộ',
                'type' => 'Huyện',
                'province_id' => 45,
            ),
            347 =>
            array(
                'id' => 469,
                'name' => 'Huyện Triệu Phong',
                'type' => 'Huyện',
                'province_id' => 45,
            ),
            348 =>
            array(
                'id' => 470,
                'name' => 'Huyện Hải Lăng',
                'type' => 'Huyện',
                'province_id' => 45,
            ),
            349 =>
            array(
                'id' => 471,
                'name' => 'Huyện Cồn Cỏ',
                'type' => 'Huyện',
                'province_id' => 45,
            ),
            350 =>
            array(
                'id' => 474,
                'name' => 'Thành phố Huế',
                'type' => 'Thành phố',
                'province_id' => 46,
            ),
            351 =>
            array(
                'id' => 476,
                'name' => 'Huyện Phong Điền',
                'type' => 'Huyện',
                'province_id' => 46,
            ),
            352 =>
            array(
                'id' => 477,
                'name' => 'Huyện Quảng Điền',
                'type' => 'Huyện',
                'province_id' => 46,
            ),
            353 =>
            array(
                'id' => 478,
                'name' => 'Huyện Phú Vang',
                'type' => 'Huyện',
                'province_id' => 46,
            ),
            354 =>
            array(
                'id' => 479,
                'name' => 'Thị xã Hương Thủy',
                'type' => 'Thị xã',
                'province_id' => 46,
            ),
            355 =>
            array(
                'id' => 480,
                'name' => 'Thị xã Hương Trà',
                'type' => 'Thị xã',
                'province_id' => 46,
            ),
            356 =>
            array(
                'id' => 481,
                'name' => 'Huyện A Lưới',
                'type' => 'Huyện',
                'province_id' => 46,
            ),
            357 =>
            array(
                'id' => 482,
                'name' => 'Huyện Phú Lộc',
                'type' => 'Huyện',
                'province_id' => 46,
            ),
            358 =>
            array(
                'id' => 483,
                'name' => 'Huyện Nam Đông',
                'type' => 'Huyện',
                'province_id' => 46,
            ),
            359 =>
            array(
                'id' => 490,
                'name' => 'Quận Liên Chiểu',
                'type' => 'Quận',
                'province_id' => 48,
            ),
            360 =>
            array(
                'id' => 491,
                'name' => 'Quận Thanh Khê',
                'type' => 'Quận',
                'province_id' => 48,
            ),
            361 =>
            array(
                'id' => 492,
                'name' => 'Quận Hải Châu',
                'type' => 'Quận',
                'province_id' => 48,
            ),
            362 =>
            array(
                'id' => 493,
                'name' => 'Quận Sơn Trà',
                'type' => 'Quận',
                'province_id' => 48,
            ),
            363 =>
            array(
                'id' => 494,
                'name' => 'Quận Ngũ Hành Sơn',
                'type' => 'Quận',
                'province_id' => 48,
            ),
            364 =>
            array(
                'id' => 495,
                'name' => 'Quận Cẩm Lệ',
                'type' => 'Quận',
                'province_id' => 48,
            ),
            365 =>
            array(
                'id' => 497,
                'name' => 'Huyện Hòa Vang',
                'type' => 'Huyện',
                'province_id' => 48,
            ),
            366 =>
            array(
                'id' => 498,
                'name' => 'Huyện Hoàng Sa',
                'type' => 'Huyện',
                'province_id' => 48,
            ),
            367 =>
            array(
                'id' => 502,
                'name' => 'Thành phố Tam Kỳ',
                'type' => 'Thành phố',
                'province_id' => 49,
            ),
            368 =>
            array(
                'id' => 503,
                'name' => 'Thành phố Hội An',
                'type' => 'Thành phố',
                'province_id' => 49,
            ),
            369 =>
            array(
                'id' => 504,
                'name' => 'Huyện Tây Giang',
                'type' => 'Huyện',
                'province_id' => 49,
            ),
            370 =>
            array(
                'id' => 505,
                'name' => 'Huyện Đông Giang',
                'type' => 'Huyện',
                'province_id' => 49,
            ),
            371 =>
            array(
                'id' => 506,
                'name' => 'Huyện Đại Lộc',
                'type' => 'Huyện',
                'province_id' => 49,
            ),
            372 =>
            array(
                'id' => 507,
                'name' => 'Thị xã Điện Bàn',
                'type' => 'Thị xã',
                'province_id' => 49,
            ),
            373 =>
            array(
                'id' => 508,
                'name' => 'Huyện Duy Xuyên',
                'type' => 'Huyện',
                'province_id' => 49,
            ),
            374 =>
            array(
                'id' => 509,
                'name' => 'Huyện Quế Sơn',
                'type' => 'Huyện',
                'province_id' => 49,
            ),
            375 =>
            array(
                'id' => 510,
                'name' => 'Huyện Nam Giang',
                'type' => 'Huyện',
                'province_id' => 49,
            ),
            376 =>
            array(
                'id' => 511,
                'name' => 'Huyện Phước Sơn',
                'type' => 'Huyện',
                'province_id' => 49,
            ),
            377 =>
            array(
                'id' => 512,
                'name' => 'Huyện Hiệp Đức',
                'type' => 'Huyện',
                'province_id' => 49,
            ),
            378 =>
            array(
                'id' => 513,
                'name' => 'Huyện Thăng Bình',
                'type' => 'Huyện',
                'province_id' => 49,
            ),
            379 =>
            array(
                'id' => 514,
                'name' => 'Huyện Tiên Phước',
                'type' => 'Huyện',
                'province_id' => 49,
            ),
            380 =>
            array(
                'id' => 515,
                'name' => 'Huyện Bắc Trà My',
                'type' => 'Huyện',
                'province_id' => 49,
            ),
            381 =>
            array(
                'id' => 516,
                'name' => 'Huyện Nam Trà My',
                'type' => 'Huyện',
                'province_id' => 49,
            ),
            382 =>
            array(
                'id' => 517,
                'name' => 'Huyện Núi Thành',
                'type' => 'Huyện',
                'province_id' => 49,
            ),
            383 =>
            array(
                'id' => 518,
                'name' => 'Huyện Phú Ninh',
                'type' => 'Huyện',
                'province_id' => 49,
            ),
            384 =>
            array(
                'id' => 519,
                'name' => 'Huyện Nông Sơn',
                'type' => 'Huyện',
                'province_id' => 49,
            ),
            385 =>
            array(
                'id' => 522,
                'name' => 'Thành phố Quảng Ngãi',
                'type' => 'Thành phố',
                'province_id' => 51,
            ),
            386 =>
            array(
                'id' => 524,
                'name' => 'Huyện Bình Sơn',
                'type' => 'Huyện',
                'province_id' => 51,
            ),
            387 =>
            array(
                'id' => 525,
                'name' => 'Huyện Trà Bồng',
                'type' => 'Huyện',
                'province_id' => 51,
            ),
            388 =>
            array(
                'id' => 526,
                'name' => 'Huyện Tây Trà',
                'type' => 'Huyện',
                'province_id' => 51,
            ),
            389 =>
            array(
                'id' => 527,
                'name' => 'Huyện Sơn Tịnh',
                'type' => 'Huyện',
                'province_id' => 51,
            ),
            390 =>
            array(
                'id' => 528,
                'name' => 'Huyện Tư Nghĩa',
                'type' => 'Huyện',
                'province_id' => 51,
            ),
            391 =>
            array(
                'id' => 529,
                'name' => 'Huyện Sơn Hà',
                'type' => 'Huyện',
                'province_id' => 51,
            ),
            392 =>
            array(
                'id' => 530,
                'name' => 'Huyện Sơn Tây',
                'type' => 'Huyện',
                'province_id' => 51,
            ),
            393 =>
            array(
                'id' => 531,
                'name' => 'Huyện Minh Long',
                'type' => 'Huyện',
                'province_id' => 51,
            ),
            394 =>
            array(
                'id' => 532,
                'name' => 'Huyện Nghĩa Hành',
                'type' => 'Huyện',
                'province_id' => 51,
            ),
            395 =>
            array(
                'id' => 533,
                'name' => 'Huyện Mộ Đức',
                'type' => 'Huyện',
                'province_id' => 51,
            ),
            396 =>
            array(
                'id' => 534,
                'name' => 'Huyện Đức Phổ',
                'type' => 'Huyện',
                'province_id' => 51,
            ),
            397 =>
            array(
                'id' => 535,
                'name' => 'Huyện Ba Tơ',
                'type' => 'Huyện',
                'province_id' => 51,
            ),
            398 =>
            array(
                'id' => 536,
                'name' => 'Huyện Lý Sơn',
                'type' => 'Huyện',
                'province_id' => 51,
            ),
            399 =>
            array(
                'id' => 540,
                'name' => 'Thành phố Qui Nhơn',
                'type' => 'Thành phố',
                'province_id' => 52,
            ),
            400 =>
            array(
                'id' => 542,
                'name' => 'Huyện An Lão',
                'type' => 'Huyện',
                'province_id' => 52,
            ),
            401 =>
            array(
                'id' => 543,
                'name' => 'Huyện Hoài Nhơn',
                'type' => 'Huyện',
                'province_id' => 52,
            ),
            402 =>
            array(
                'id' => 544,
                'name' => 'Huyện Hoài Ân',
                'type' => 'Huyện',
                'province_id' => 52,
            ),
            403 =>
            array(
                'id' => 545,
                'name' => 'Huyện Phù Mỹ',
                'type' => 'Huyện',
                'province_id' => 52,
            ),
            404 =>
            array(
                'id' => 546,
                'name' => 'Huyện Vĩnh Thạnh',
                'type' => 'Huyện',
                'province_id' => 52,
            ),
            405 =>
            array(
                'id' => 547,
                'name' => 'Huyện Tây Sơn',
                'type' => 'Huyện',
                'province_id' => 52,
            ),
            406 =>
            array(
                'id' => 548,
                'name' => 'Huyện Phù Cát',
                'type' => 'Huyện',
                'province_id' => 52,
            ),
            407 =>
            array(
                'id' => 549,
                'name' => 'Thị xã An Nhơn',
                'type' => 'Thị xã',
                'province_id' => 52,
            ),
            408 =>
            array(
                'id' => 550,
                'name' => 'Huyện Tuy Phước',
                'type' => 'Huyện',
                'province_id' => 52,
            ),
            409 =>
            array(
                'id' => 551,
                'name' => 'Huyện Vân Canh',
                'type' => 'Huyện',
                'province_id' => 52,
            ),
            410 =>
            array(
                'id' => 555,
                'name' => 'Thành phố Tuy Hoà',
                'type' => 'Thành phố',
                'province_id' => 54,
            ),
            411 =>
            array(
                'id' => 557,
                'name' => 'Thị xã Sông Cầu',
                'type' => 'Thị xã',
                'province_id' => 54,
            ),
            412 =>
            array(
                'id' => 558,
                'name' => 'Huyện Đồng Xuân',
                'type' => 'Huyện',
                'province_id' => 54,
            ),
            413 =>
            array(
                'id' => 559,
                'name' => 'Huyện Tuy An',
                'type' => 'Huyện',
                'province_id' => 54,
            ),
            414 =>
            array(
                'id' => 560,
                'name' => 'Huyện Sơn Hòa',
                'type' => 'Huyện',
                'province_id' => 54,
            ),
            415 =>
            array(
                'id' => 561,
                'name' => 'Huyện Sông Hinh',
                'type' => 'Huyện',
                'province_id' => 54,
            ),
            416 =>
            array(
                'id' => 562,
                'name' => 'Huyện Tây Hoà',
                'type' => 'Huyện',
                'province_id' => 54,
            ),
            417 =>
            array(
                'id' => 563,
                'name' => 'Huyện Phú Hoà',
                'type' => 'Huyện',
                'province_id' => 54,
            ),
            418 =>
            array(
                'id' => 564,
                'name' => 'Huyện Đông Hòa',
                'type' => 'Huyện',
                'province_id' => 54,
            ),
            419 =>
            array(
                'id' => 568,
                'name' => 'Thành phố Nha Trang',
                'type' => 'Thành phố',
                'province_id' => 56,
            ),
            420 =>
            array(
                'id' => 569,
                'name' => 'Thành phố Cam Ranh',
                'type' => 'Thành phố',
                'province_id' => 56,
            ),
            421 =>
            array(
                'id' => 570,
                'name' => 'Huyện Cam Lâm',
                'type' => 'Huyện',
                'province_id' => 56,
            ),
            422 =>
            array(
                'id' => 571,
                'name' => 'Huyện Vạn Ninh',
                'type' => 'Huyện',
                'province_id' => 56,
            ),
            423 =>
            array(
                'id' => 572,
                'name' => 'Thị xã Ninh Hòa',
                'type' => 'Thị xã',
                'province_id' => 56,
            ),
            424 =>
            array(
                'id' => 573,
                'name' => 'Huyện Khánh Vĩnh',
                'type' => 'Huyện',
                'province_id' => 56,
            ),
            425 =>
            array(
                'id' => 574,
                'name' => 'Huyện Diên Khánh',
                'type' => 'Huyện',
                'province_id' => 56,
            ),
            426 =>
            array(
                'id' => 575,
                'name' => 'Huyện Khánh Sơn',
                'type' => 'Huyện',
                'province_id' => 56,
            ),
            427 =>
            array(
                'id' => 576,
                'name' => 'Huyện Trường Sa',
                'type' => 'Huyện',
                'province_id' => 56,
            ),
            428 =>
            array(
                'id' => 582,
                'name' => 'Thành phố Phan Rang-Tháp Chàm',
                'type' => 'Thành phố',
                'province_id' => 58,
            ),
            429 =>
            array(
                'id' => 584,
                'name' => 'Huyện Bác Ái',
                'type' => 'Huyện',
                'province_id' => 58,
            ),
            430 =>
            array(
                'id' => 585,
                'name' => 'Huyện Ninh Sơn',
                'type' => 'Huyện',
                'province_id' => 58,
            ),
            431 =>
            array(
                'id' => 586,
                'name' => 'Huyện Ninh Hải',
                'type' => 'Huyện',
                'province_id' => 58,
            ),
            432 =>
            array(
                'id' => 587,
                'name' => 'Huyện Ninh Phước',
                'type' => 'Huyện',
                'province_id' => 58,
            ),
            433 =>
            array(
                'id' => 588,
                'name' => 'Huyện Thuận Bắc',
                'type' => 'Huyện',
                'province_id' => 58,
            ),
            434 =>
            array(
                'id' => 589,
                'name' => 'Huyện Thuận Nam',
                'type' => 'Huyện',
                'province_id' => 58,
            ),
            435 =>
            array(
                'id' => 593,
                'name' => 'Thành phố Phan Thiết',
                'type' => 'Thành phố',
                'province_id' => 60,
            ),
            436 =>
            array(
                'id' => 594,
                'name' => 'Thị xã La Gi',
                'type' => 'Thị xã',
                'province_id' => 60,
            ),
            437 =>
            array(
                'id' => 595,
                'name' => 'Huyện Tuy Phong',
                'type' => 'Huyện',
                'province_id' => 60,
            ),
            438 =>
            array(
                'id' => 596,
                'name' => 'Huyện Bắc Bình',
                'type' => 'Huyện',
                'province_id' => 60,
            ),
            439 =>
            array(
                'id' => 597,
                'name' => 'Huyện Hàm Thuận Bắc',
                'type' => 'Huyện',
                'province_id' => 60,
            ),
            440 =>
            array(
                'id' => 598,
                'name' => 'Huyện Hàm Thuận Nam',
                'type' => 'Huyện',
                'province_id' => 60,
            ),
            441 =>
            array(
                'id' => 599,
                'name' => 'Huyện Tánh Linh',
                'type' => 'Huyện',
                'province_id' => 60,
            ),
            442 =>
            array(
                'id' => 600,
                'name' => 'Huyện Đức Linh',
                'type' => 'Huyện',
                'province_id' => 60,
            ),
            443 =>
            array(
                'id' => 601,
                'name' => 'Huyện Hàm Tân',
                'type' => 'Huyện',
                'province_id' => 60,
            ),
            444 =>
            array(
                'id' => 602,
                'name' => 'Huyện Phú Quí',
                'type' => 'Huyện',
                'province_id' => 60,
            ),
            445 =>
            array(
                'id' => 608,
                'name' => 'Thành phố Kon Tum',
                'type' => 'Thành phố',
                'province_id' => 62,
            ),
            446 =>
            array(
                'id' => 610,
                'name' => 'Huyện Đắk Glei',
                'type' => 'Huyện',
                'province_id' => 62,
            ),
            447 =>
            array(
                'id' => 611,
                'name' => 'Huyện Ngọc Hồi',
                'type' => 'Huyện',
                'province_id' => 62,
            ),
            448 =>
            array(
                'id' => 612,
                'name' => 'Huyện Đắk Tô',
                'type' => 'Huyện',
                'province_id' => 62,
            ),
            449 =>
            array(
                'id' => 613,
                'name' => 'Huyện Kon Plông',
                'type' => 'Huyện',
                'province_id' => 62,
            ),
            450 =>
            array(
                'id' => 614,
                'name' => 'Huyện Kon Rẫy',
                'type' => 'Huyện',
                'province_id' => 62,
            ),
            451 =>
            array(
                'id' => 615,
                'name' => 'Huyện Đắk Hà',
                'type' => 'Huyện',
                'province_id' => 62,
            ),
            452 =>
            array(
                'id' => 616,
                'name' => 'Huyện Sa Thầy',
                'type' => 'Huyện',
                'province_id' => 62,
            ),
            453 =>
            array(
                'id' => 617,
                'name' => 'Huyện Tu Mơ Rông',
                'type' => 'Huyện',
                'province_id' => 62,
            ),
            454 =>
            array(
                'id' => 618,
                'name' => 'Huyện Ia H\' Drai',
                'type' => 'Huyện',
                'province_id' => 62,
            ),
            455 =>
            array(
                'id' => 622,
                'name' => 'Thành phố Pleiku',
                'type' => 'Thành phố',
                'province_id' => 64,
            ),
            456 =>
            array(
                'id' => 623,
                'name' => 'Thị xã An Khê',
                'type' => 'Thị xã',
                'province_id' => 64,
            ),
            457 =>
            array(
                'id' => 624,
                'name' => 'Thị xã Ayun Pa',
                'type' => 'Thị xã',
                'province_id' => 64,
            ),
            458 =>
            array(
                'id' => 625,
                'name' => 'Huyện KBang',
                'type' => 'Huyện',
                'province_id' => 64,
            ),
            459 =>
            array(
                'id' => 626,
                'name' => 'Huyện Đăk Đoa',
                'type' => 'Huyện',
                'province_id' => 64,
            ),
            460 =>
            array(
                'id' => 627,
                'name' => 'Huyện Chư Păh',
                'type' => 'Huyện',
                'province_id' => 64,
            ),
            461 =>
            array(
                'id' => 628,
                'name' => 'Huyện Ia Grai',
                'type' => 'Huyện',
                'province_id' => 64,
            ),
            462 =>
            array(
                'id' => 629,
                'name' => 'Huyện Mang Yang',
                'type' => 'Huyện',
                'province_id' => 64,
            ),
            463 =>
            array(
                'id' => 630,
                'name' => 'Huyện Kông Chro',
                'type' => 'Huyện',
                'province_id' => 64,
            ),
            464 =>
            array(
                'id' => 631,
                'name' => 'Huyện Đức Cơ',
                'type' => 'Huyện',
                'province_id' => 64,
            ),
            465 =>
            array(
                'id' => 632,
                'name' => 'Huyện Chư Prông',
                'type' => 'Huyện',
                'province_id' => 64,
            ),
            466 =>
            array(
                'id' => 633,
                'name' => 'Huyện Chư Sê',
                'type' => 'Huyện',
                'province_id' => 64,
            ),
            467 =>
            array(
                'id' => 634,
                'name' => 'Huyện Đăk Pơ',
                'type' => 'Huyện',
                'province_id' => 64,
            ),
            468 =>
            array(
                'id' => 635,
                'name' => 'Huyện Ia Pa',
                'type' => 'Huyện',
                'province_id' => 64,
            ),
            469 =>
            array(
                'id' => 637,
                'name' => 'Huyện Krông Pa',
                'type' => 'Huyện',
                'province_id' => 64,
            ),
            470 =>
            array(
                'id' => 638,
                'name' => 'Huyện Phú Thiện',
                'type' => 'Huyện',
                'province_id' => 64,
            ),
            471 =>
            array(
                'id' => 639,
                'name' => 'Huyện Chư Pưh',
                'type' => 'Huyện',
                'province_id' => 64,
            ),
            472 =>
            array(
                'id' => 643,
                'name' => 'Thành phố Buôn Ma Thuột',
                'type' => 'Thành phố',
                'province_id' => 66,
            ),
            473 =>
            array(
                'id' => 644,
                'name' => 'Thị Xã Buôn Hồ',
                'type' => 'Thị xã',
                'province_id' => 66,
            ),
            474 =>
            array(
                'id' => 645,
                'name' => 'Huyện Ea H\'leo',
                'type' => 'Huyện',
                'province_id' => 66,
            ),
            475 =>
            array(
                'id' => 646,
                'name' => 'Huyện Ea Súp',
                'type' => 'Huyện',
                'province_id' => 66,
            ),
            476 =>
            array(
                'id' => 647,
                'name' => 'Huyện Buôn Đôn',
                'type' => 'Huyện',
                'province_id' => 66,
            ),
            477 =>
            array(
                'id' => 648,
                'name' => 'Huyện Cư M\'gar',
                'type' => 'Huyện',
                'province_id' => 66,
            ),
            478 =>
            array(
                'id' => 649,
                'name' => 'Huyện Krông Búk',
                'type' => 'Huyện',
                'province_id' => 66,
            ),
            479 =>
            array(
                'id' => 650,
                'name' => 'Huyện Krông Năng',
                'type' => 'Huyện',
                'province_id' => 66,
            ),
            480 =>
            array(
                'id' => 651,
                'name' => 'Huyện Ea Kar',
                'type' => 'Huyện',
                'province_id' => 66,
            ),
            481 =>
            array(
                'id' => 652,
                'name' => 'Huyện M\'Đrắk',
                'type' => 'Huyện',
                'province_id' => 66,
            ),
            482 =>
            array(
                'id' => 653,
                'name' => 'Huyện Krông Bông',
                'type' => 'Huyện',
                'province_id' => 66,
            ),
            483 =>
            array(
                'id' => 654,
                'name' => 'Huyện Krông Pắc',
                'type' => 'Huyện',
                'province_id' => 66,
            ),
            484 =>
            array(
                'id' => 655,
                'name' => 'Huyện Krông A Na',
                'type' => 'Huyện',
                'province_id' => 66,
            ),
            485 =>
            array(
                'id' => 656,
                'name' => 'Huyện Lắk',
                'type' => 'Huyện',
                'province_id' => 66,
            ),
            486 =>
            array(
                'id' => 657,
                'name' => 'Huyện Cư Kuin',
                'type' => 'Huyện',
                'province_id' => 66,
            ),
            487 =>
            array(
                'id' => 660,
                'name' => 'Thị xã Gia Nghĩa',
                'type' => 'Thị xã',
                'province_id' => 67,
            ),
            488 =>
            array(
                'id' => 661,
                'name' => 'Huyện Đăk Glong',
                'type' => 'Huyện',
                'province_id' => 67,
            ),
            489 =>
            array(
                'id' => 662,
                'name' => 'Huyện Cư Jút',
                'type' => 'Huyện',
                'province_id' => 67,
            ),
            490 =>
            array(
                'id' => 663,
                'name' => 'Huyện Đắk Mil',
                'type' => 'Huyện',
                'province_id' => 67,
            ),
            491 =>
            array(
                'id' => 664,
                'name' => 'Huyện Krông Nô',
                'type' => 'Huyện',
                'province_id' => 67,
            ),
            492 =>
            array(
                'id' => 665,
                'name' => 'Huyện Đắk Song',
                'type' => 'Huyện',
                'province_id' => 67,
            ),
            493 =>
            array(
                'id' => 666,
                'name' => 'Huyện Đắk R\'Lấp',
                'type' => 'Huyện',
                'province_id' => 67,
            ),
            494 =>
            array(
                'id' => 667,
                'name' => 'Huyện Tuy Đức',
                'type' => 'Huyện',
                'province_id' => 67,
            ),
            495 =>
            array(
                'id' => 672,
                'name' => 'Thành phố Đà Lạt',
                'type' => 'Thành phố',
                'province_id' => 68,
            ),
            496 =>
            array(
                'id' => 673,
                'name' => 'Thành phố Bảo Lộc',
                'type' => 'Thành phố',
                'province_id' => 68,
            ),
            497 =>
            array(
                'id' => 674,
                'name' => 'Huyện Đam Rông',
                'type' => 'Huyện',
                'province_id' => 68,
            ),
            498 =>
            array(
                'id' => 675,
                'name' => 'Huyện Lạc Dương',
                'type' => 'Huyện',
                'province_id' => 68,
            ),
            499 =>
            array(
                'id' => 676,
                'name' => 'Huyện Lâm Hà',
                'type' => 'Huyện',
                'province_id' => 68,
            ),
        ));
        \DB::table('districts')->insert(array(
            0 =>
            array(
                'id' => 677,
                'name' => 'Huyện Đơn Dương',
                'type' => 'Huyện',
                'province_id' => 68,
            ),
            1 =>
            array(
                'id' => 678,
                'name' => 'Huyện Đức Trọng',
                'type' => 'Huyện',
                'province_id' => 68,
            ),
            2 =>
            array(
                'id' => 679,
                'name' => 'Huyện Di Linh',
                'type' => 'Huyện',
                'province_id' => 68,
            ),
            3 =>
            array(
                'id' => 680,
                'name' => 'Huyện Bảo Lâm',
                'type' => 'Huyện',
                'province_id' => 68,
            ),
            4 =>
            array(
                'id' => 681,
                'name' => 'Huyện Đạ Huoai',
                'type' => 'Huyện',
                'province_id' => 68,
            ),
            5 =>
            array(
                'id' => 682,
                'name' => 'Huyện Đạ Tẻh',
                'type' => 'Huyện',
                'province_id' => 68,
            ),
            6 =>
            array(
                'id' => 683,
                'name' => 'Huyện Cát Tiên',
                'type' => 'Huyện',
                'province_id' => 68,
            ),
            7 =>
            array(
                'id' => 688,
                'name' => 'Thị xã Phước Long',
                'type' => 'Thị xã',
                'province_id' => 70,
            ),
            8 =>
            array(
                'id' => 689,
                'name' => 'Thị xã Đồng Xoài',
                'type' => 'Thị xã',
                'province_id' => 70,
            ),
            9 =>
            array(
                'id' => 690,
                'name' => 'Thị xã Bình Long',
                'type' => 'Thị xã',
                'province_id' => 70,
            ),
            10 =>
            array(
                'id' => 691,
                'name' => 'Huyện Bù Gia Mập',
                'type' => 'Huyện',
                'province_id' => 70,
            ),
            11 =>
            array(
                'id' => 692,
                'name' => 'Huyện Lộc Ninh',
                'type' => 'Huyện',
                'province_id' => 70,
            ),
            12 =>
            array(
                'id' => 693,
                'name' => 'Huyện Bù Đốp',
                'type' => 'Huyện',
                'province_id' => 70,
            ),
            13 =>
            array(
                'id' => 694,
                'name' => 'Huyện Hớn Quản',
                'type' => 'Huyện',
                'province_id' => 70,
            ),
            14 =>
            array(
                'id' => 695,
                'name' => 'Huyện Đồng Phú',
                'type' => 'Huyện',
                'province_id' => 70,
            ),
            15 =>
            array(
                'id' => 696,
                'name' => 'Huyện Bù Đăng',
                'type' => 'Huyện',
                'province_id' => 70,
            ),
            16 =>
            array(
                'id' => 697,
                'name' => 'Huyện Chơn Thành',
                'type' => 'Huyện',
                'province_id' => 70,
            ),
            17 =>
            array(
                'id' => 698,
                'name' => 'Huyện Phú Riềng',
                'type' => 'Huyện',
                'province_id' => 70,
            ),
            18 =>
            array(
                'id' => 703,
                'name' => 'Thành phố Tây Ninh',
                'type' => 'Thành phố',
                'province_id' => 72,
            ),
            19 =>
            array(
                'id' => 705,
                'name' => 'Huyện Tân Biên',
                'type' => 'Huyện',
                'province_id' => 72,
            ),
            20 =>
            array(
                'id' => 706,
                'name' => 'Huyện Tân Châu',
                'type' => 'Huyện',
                'province_id' => 72,
            ),
            21 =>
            array(
                'id' => 707,
                'name' => 'Huyện Dương Minh Châu',
                'type' => 'Huyện',
                'province_id' => 72,
            ),
            22 =>
            array(
                'id' => 708,
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'province_id' => 72,
            ),
            23 =>
            array(
                'id' => 709,
                'name' => 'Huyện Hòa Thành',
                'type' => 'Huyện',
                'province_id' => 72,
            ),
            24 =>
            array(
                'id' => 710,
                'name' => 'Huyện Gò Dầu',
                'type' => 'Huyện',
                'province_id' => 72,
            ),
            25 =>
            array(
                'id' => 711,
                'name' => 'Huyện Bến Cầu',
                'type' => 'Huyện',
                'province_id' => 72,
            ),
            26 =>
            array(
                'id' => 712,
                'name' => 'Huyện Trảng Bàng',
                'type' => 'Huyện',
                'province_id' => 72,
            ),
            27 =>
            array(
                'id' => 718,
                'name' => 'Thành phố Thủ Dầu Một',
                'type' => 'Thành phố',
                'province_id' => 74,
            ),
            28 =>
            array(
                'id' => 719,
                'name' => 'Huyện Bàu Bàng',
                'type' => 'Huyện',
                'province_id' => 74,
            ),
            29 =>
            array(
                'id' => 720,
                'name' => 'Huyện Dầu Tiếng',
                'type' => 'Huyện',
                'province_id' => 74,
            ),
            30 =>
            array(
                'id' => 721,
                'name' => 'Thị xã Bến Cát',
                'type' => 'Thị xã',
                'province_id' => 74,
            ),
            31 =>
            array(
                'id' => 722,
                'name' => 'Huyện Phú Giáo',
                'type' => 'Huyện',
                'province_id' => 74,
            ),
            32 =>
            array(
                'id' => 723,
                'name' => 'Thị xã Tân Uyên',
                'type' => 'Thị xã',
                'province_id' => 74,
            ),
            33 =>
            array(
                'id' => 724,
                'name' => 'Thị xã Dĩ An',
                'type' => 'Thị xã',
                'province_id' => 74,
            ),
            34 =>
            array(
                'id' => 725,
                'name' => 'Thị xã Thuận An',
                'type' => 'Thị xã',
                'province_id' => 74,
            ),
            35 =>
            array(
                'id' => 726,
                'name' => 'Huyện Bắc Tân Uyên',
                'type' => 'Huyện',
                'province_id' => 74,
            ),
            36 =>
            array(
                'id' => 731,
                'name' => 'Thành phố Biên Hòa',
                'type' => 'Thành phố',
                'province_id' => 75,
            ),
            37 =>
            array(
                'id' => 732,
                'name' => 'Thị xã Long Khánh',
                'type' => 'Thị xã',
                'province_id' => 75,
            ),
            38 =>
            array(
                'id' => 734,
                'name' => 'Huyện Tân Phú',
                'type' => 'Huyện',
                'province_id' => 75,
            ),
            39 =>
            array(
                'id' => 735,
                'name' => 'Huyện Vĩnh Cửu',
                'type' => 'Huyện',
                'province_id' => 75,
            ),
            40 =>
            array(
                'id' => 736,
                'name' => 'Huyện Định Quán',
                'type' => 'Huyện',
                'province_id' => 75,
            ),
            41 =>
            array(
                'id' => 737,
                'name' => 'Huyện Trảng Bom',
                'type' => 'Huyện',
                'province_id' => 75,
            ),
            42 =>
            array(
                'id' => 738,
                'name' => 'Huyện Thống Nhất',
                'type' => 'Huyện',
                'province_id' => 75,
            ),
            43 =>
            array(
                'id' => 739,
                'name' => 'Huyện Cẩm Mỹ',
                'type' => 'Huyện',
                'province_id' => 75,
            ),
            44 =>
            array(
                'id' => 740,
                'name' => 'Huyện Long Thành',
                'type' => 'Huyện',
                'province_id' => 75,
            ),
            45 =>
            array(
                'id' => 741,
                'name' => 'Huyện Xuân Lộc',
                'type' => 'Huyện',
                'province_id' => 75,
            ),
            46 =>
            array(
                'id' => 742,
                'name' => 'Huyện Nhơn Trạch',
                'type' => 'Huyện',
                'province_id' => 75,
            ),
            47 =>
            array(
                'id' => 747,
                'name' => 'Thành phố Vũng Tàu',
                'type' => 'Thành phố',
                'province_id' => 77,
            ),
            48 =>
            array(
                'id' => 748,
                'name' => 'Thành phố Bà Rịa',
                'type' => 'Thành phố',
                'province_id' => 77,
            ),
            49 =>
            array(
                'id' => 750,
                'name' => 'Huyện Châu Đức',
                'type' => 'Huyện',
                'province_id' => 77,
            ),
            50 =>
            array(
                'id' => 751,
                'name' => 'Huyện Xuyên Mộc',
                'type' => 'Huyện',
                'province_id' => 77,
            ),
            51 =>
            array(
                'id' => 752,
                'name' => 'Huyện Long Điền',
                'type' => 'Huyện',
                'province_id' => 77,
            ),
            52 =>
            array(
                'id' => 753,
                'name' => 'Huyện Đất Đỏ',
                'type' => 'Huyện',
                'province_id' => 77,
            ),
            53 =>
            array(
                'id' => 754,
                'name' => 'Huyện Tân Thành',
                'type' => 'Huyện',
                'province_id' => 77,
            ),
            54 =>
            array(
                'id' => 755,
                'name' => 'Huyện Côn Đảo',
                'type' => 'Huyện',
                'province_id' => 77,
            ),
            55 =>
            array(
                'id' => 760,
                'name' => 'Quận 1',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            56 =>
            array(
                'id' => 761,
                'name' => 'Quận 12',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            57 =>
            array(
                'id' => 762,
                'name' => 'Quận Thủ Đức',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            58 =>
            array(
                'id' => 763,
                'name' => 'Quận 9',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            59 =>
            array(
                'id' => 764,
                'name' => 'Quận Gò Vấp',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            60 =>
            array(
                'id' => 765,
                'name' => 'Quận Bình Thạnh',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            61 =>
            array(
                'id' => 766,
                'name' => 'Quận Tân Bình',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            62 =>
            array(
                'id' => 767,
                'name' => 'Quận Tân Phú',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            63 =>
            array(
                'id' => 768,
                'name' => 'Quận Phú Nhuận',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            64 =>
            array(
                'id' => 769,
                'name' => 'Quận 2',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            65 =>
            array(
                'id' => 770,
                'name' => 'Quận 3',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            66 =>
            array(
                'id' => 771,
                'name' => 'Quận 10',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            67 =>
            array(
                'id' => 772,
                'name' => 'Quận 11',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            68 =>
            array(
                'id' => 773,
                'name' => 'Quận 4',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            69 =>
            array(
                'id' => 774,
                'name' => 'Quận 5',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            70 =>
            array(
                'id' => 775,
                'name' => 'Quận 6',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            71 =>
            array(
                'id' => 776,
                'name' => 'Quận 8',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            72 =>
            array(
                'id' => 777,
                'name' => 'Quận Bình Tân',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            73 =>
            array(
                'id' => 778,
                'name' => 'Quận 7',
                'type' => 'Quận',
                'province_id' => 79,
            ),
            74 =>
            array(
                'id' => 783,
                'name' => 'Huyện Củ Chi',
                'type' => 'Huyện',
                'province_id' => 79,
            ),
            75 =>
            array(
                'id' => 784,
                'name' => 'Huyện Hóc Môn',
                'type' => 'Huyện',
                'province_id' => 79,
            ),
            76 =>
            array(
                'id' => 785,
                'name' => 'Huyện Bình Chánh',
                'type' => 'Huyện',
                'province_id' => 79,
            ),
            77 =>
            array(
                'id' => 786,
                'name' => 'Huyện Nhà Bè',
                'type' => 'Huyện',
                'province_id' => 79,
            ),
            78 =>
            array(
                'id' => 787,
                'name' => 'Huyện Cần Giờ',
                'type' => 'Huyện',
                'province_id' => 79,
            ),
            79 =>
            array(
                'id' => 794,
                'name' => 'Thành phố Tân An',
                'type' => 'Thành phố',
                'province_id' => 80,
            ),
            80 =>
            array(
                'id' => 795,
                'name' => 'Thị xã Kiến Tường',
                'type' => 'Thị xã',
                'province_id' => 80,
            ),
            81 =>
            array(
                'id' => 796,
                'name' => 'Huyện Tân Hưng',
                'type' => 'Huyện',
                'province_id' => 80,
            ),
            82 =>
            array(
                'id' => 797,
                'name' => 'Huyện Vĩnh Hưng',
                'type' => 'Huyện',
                'province_id' => 80,
            ),
            83 =>
            array(
                'id' => 798,
                'name' => 'Huyện Mộc Hóa',
                'type' => 'Huyện',
                'province_id' => 80,
            ),
            84 =>
            array(
                'id' => 799,
                'name' => 'Huyện Tân Thạnh',
                'type' => 'Huyện',
                'province_id' => 80,
            ),
            85 =>
            array(
                'id' => 800,
                'name' => 'Huyện Thạnh Hóa',
                'type' => 'Huyện',
                'province_id' => 80,
            ),
            86 =>
            array(
                'id' => 801,
                'name' => 'Huyện Đức Huệ',
                'type' => 'Huyện',
                'province_id' => 80,
            ),
            87 =>
            array(
                'id' => 802,
                'name' => 'Huyện Đức Hòa',
                'type' => 'Huyện',
                'province_id' => 80,
            ),
            88 =>
            array(
                'id' => 803,
                'name' => 'Huyện Bến Lức',
                'type' => 'Huyện',
                'province_id' => 80,
            ),
            89 =>
            array(
                'id' => 804,
                'name' => 'Huyện Thủ Thừa',
                'type' => 'Huyện',
                'province_id' => 80,
            ),
            90 =>
            array(
                'id' => 805,
                'name' => 'Huyện Tân Trụ',
                'type' => 'Huyện',
                'province_id' => 80,
            ),
            91 =>
            array(
                'id' => 806,
                'name' => 'Huyện Cần Đước',
                'type' => 'Huyện',
                'province_id' => 80,
            ),
            92 =>
            array(
                'id' => 807,
                'name' => 'Huyện Cần Giuộc',
                'type' => 'Huyện',
                'province_id' => 80,
            ),
            93 =>
            array(
                'id' => 808,
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'province_id' => 80,
            ),
            94 =>
            array(
                'id' => 815,
                'name' => 'Thành phố Mỹ Tho',
                'type' => 'Thành phố',
                'province_id' => 82,
            ),
            95 =>
            array(
                'id' => 816,
                'name' => 'Thị xã Gò Công',
                'type' => 'Thị xã',
                'province_id' => 82,
            ),
            96 =>
            array(
                'id' => 817,
                'name' => 'Thị xã Cai Lậy',
                'type' => 'Huyện',
                'province_id' => 82,
            ),
            97 =>
            array(
                'id' => 818,
                'name' => 'Huyện Tân Phước',
                'type' => 'Huyện',
                'province_id' => 82,
            ),
            98 =>
            array(
                'id' => 819,
                'name' => 'Huyện Cái Bè',
                'type' => 'Huyện',
                'province_id' => 82,
            ),
            99 =>
            array(
                'id' => 820,
                'name' => 'Huyện Cai Lậy',
                'type' => 'Thị xã',
                'province_id' => 82,
            ),
            100 =>
            array(
                'id' => 821,
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'province_id' => 82,
            ),
            101 =>
            array(
                'id' => 822,
                'name' => 'Huyện Chợ Gạo',
                'type' => 'Huyện',
                'province_id' => 82,
            ),
            102 =>
            array(
                'id' => 823,
                'name' => 'Huyện Gò Công Tây',
                'type' => 'Huyện',
                'province_id' => 82,
            ),
            103 =>
            array(
                'id' => 824,
                'name' => 'Huyện Gò Công Đông',
                'type' => 'Huyện',
                'province_id' => 82,
            ),
            104 =>
            array(
                'id' => 825,
                'name' => 'Huyện Tân Phú Đông',
                'type' => 'Huyện',
                'province_id' => 82,
            ),
            105 =>
            array(
                'id' => 829,
                'name' => 'Thành phố Bến Tre',
                'type' => 'Thành phố',
                'province_id' => 83,
            ),
            106 =>
            array(
                'id' => 831,
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'province_id' => 83,
            ),
            107 =>
            array(
                'id' => 832,
                'name' => 'Huyện Chợ Lách',
                'type' => 'Huyện',
                'province_id' => 83,
            ),
            108 =>
            array(
                'id' => 833,
                'name' => 'Huyện Mỏ Cày Nam',
                'type' => 'Huyện',
                'province_id' => 83,
            ),
            109 =>
            array(
                'id' => 834,
                'name' => 'Huyện Giồng Trôm',
                'type' => 'Huyện',
                'province_id' => 83,
            ),
            110 =>
            array(
                'id' => 835,
                'name' => 'Huyện Bình Đại',
                'type' => 'Huyện',
                'province_id' => 83,
            ),
            111 =>
            array(
                'id' => 836,
                'name' => 'Huyện Ba Tri',
                'type' => 'Huyện',
                'province_id' => 83,
            ),
            112 =>
            array(
                'id' => 837,
                'name' => 'Huyện Thạnh Phú',
                'type' => 'Huyện',
                'province_id' => 83,
            ),
            113 =>
            array(
                'id' => 838,
                'name' => 'Huyện Mỏ Cày Bắc',
                'type' => 'Huyện',
                'province_id' => 83,
            ),
            114 =>
            array(
                'id' => 842,
                'name' => 'Thành phố Trà Vinh',
                'type' => 'Thành phố',
                'province_id' => 84,
            ),
            115 =>
            array(
                'id' => 844,
                'name' => 'Huyện Càng Long',
                'type' => 'Huyện',
                'province_id' => 84,
            ),
            116 =>
            array(
                'id' => 845,
                'name' => 'Huyện Cầu Kè',
                'type' => 'Huyện',
                'province_id' => 84,
            ),
            117 =>
            array(
                'id' => 846,
                'name' => 'Huyện Tiểu Cần',
                'type' => 'Huyện',
                'province_id' => 84,
            ),
            118 =>
            array(
                'id' => 847,
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'province_id' => 84,
            ),
            119 =>
            array(
                'id' => 848,
                'name' => 'Huyện Cầu Ngang',
                'type' => 'Huyện',
                'province_id' => 84,
            ),
            120 =>
            array(
                'id' => 849,
                'name' => 'Huyện Trà Cú',
                'type' => 'Huyện',
                'province_id' => 84,
            ),
            121 =>
            array(
                'id' => 850,
                'name' => 'Huyện Duyên Hải',
                'type' => 'Huyện',
                'province_id' => 84,
            ),
            122 =>
            array(
                'id' => 851,
                'name' => 'Thị xã Duyên Hải',
                'type' => 'Thị xã',
                'province_id' => 84,
            ),
            123 =>
            array(
                'id' => 855,
                'name' => 'Thành phố Vĩnh Long',
                'type' => 'Thành phố',
                'province_id' => 86,
            ),
            124 =>
            array(
                'id' => 857,
                'name' => 'Huyện Long Hồ',
                'type' => 'Huyện',
                'province_id' => 86,
            ),
            125 =>
            array(
                'id' => 858,
                'name' => 'Huyện Mang Thít',
                'type' => 'Huyện',
                'province_id' => 86,
            ),
            126 =>
            array(
                'id' => 859,
                'name' => 'Huyện  Vũng Liêm',
                'type' => 'Huyện',
                'province_id' => 86,
            ),
            127 =>
            array(
                'id' => 860,
                'name' => 'Huyện Tam Bình',
                'type' => 'Huyện',
                'province_id' => 86,
            ),
            128 =>
            array(
                'id' => 861,
                'name' => 'Thị xã Bình Minh',
                'type' => 'Thị xã',
                'province_id' => 86,
            ),
            129 =>
            array(
                'id' => 862,
                'name' => 'Huyện Trà Ôn',
                'type' => 'Huyện',
                'province_id' => 86,
            ),
            130 =>
            array(
                'id' => 863,
                'name' => 'Huyện Bình Tân',
                'type' => 'Huyện',
                'province_id' => 86,
            ),
            131 =>
            array(
                'id' => 866,
                'name' => 'Thành phố Cao Lãnh',
                'type' => 'Thành phố',
                'province_id' => 87,
            ),
            132 =>
            array(
                'id' => 867,
                'name' => 'Thành phố Sa Đéc',
                'type' => 'Thành phố',
                'province_id' => 87,
            ),
            133 =>
            array(
                'id' => 868,
                'name' => 'Thị xã Hồng Ngự',
                'type' => 'Thị xã',
                'province_id' => 87,
            ),
            134 =>
            array(
                'id' => 869,
                'name' => 'Huyện Tân Hồng',
                'type' => 'Huyện',
                'province_id' => 87,
            ),
            135 =>
            array(
                'id' => 870,
                'name' => 'Huyện Hồng Ngự',
                'type' => 'Huyện',
                'province_id' => 87,
            ),
            136 =>
            array(
                'id' => 871,
                'name' => 'Huyện Tam Nông',
                'type' => 'Huyện',
                'province_id' => 87,
            ),
            137 =>
            array(
                'id' => 872,
                'name' => 'Huyện Tháp Mười',
                'type' => 'Huyện',
                'province_id' => 87,
            ),
            138 =>
            array(
                'id' => 873,
                'name' => 'Huyện Cao Lãnh',
                'type' => 'Huyện',
                'province_id' => 87,
            ),
            139 =>
            array(
                'id' => 874,
                'name' => 'Huyện Thanh Bình',
                'type' => 'Huyện',
                'province_id' => 87,
            ),
            140 =>
            array(
                'id' => 875,
                'name' => 'Huyện Lấp Vò',
                'type' => 'Huyện',
                'province_id' => 87,
            ),
            141 =>
            array(
                'id' => 876,
                'name' => 'Huyện Lai Vung',
                'type' => 'Huyện',
                'province_id' => 87,
            ),
            142 =>
            array(
                'id' => 877,
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'province_id' => 87,
            ),
            143 =>
            array(
                'id' => 883,
                'name' => 'Thành phố Long Xuyên',
                'type' => 'Thành phố',
                'province_id' => 89,
            ),
            144 =>
            array(
                'id' => 884,
                'name' => 'Thành phố Châu Đốc',
                'type' => 'Thành phố',
                'province_id' => 89,
            ),
            145 =>
            array(
                'id' => 886,
                'name' => 'Huyện An Phú',
                'type' => 'Huyện',
                'province_id' => 89,
            ),
            146 =>
            array(
                'id' => 887,
                'name' => 'Thị xã Tân Châu',
                'type' => 'Thị xã',
                'province_id' => 89,
            ),
            147 =>
            array(
                'id' => 888,
                'name' => 'Huyện Phú Tân',
                'type' => 'Huyện',
                'province_id' => 89,
            ),
            148 =>
            array(
                'id' => 889,
                'name' => 'Huyện Châu Phú',
                'type' => 'Huyện',
                'province_id' => 89,
            ),
            149 =>
            array(
                'id' => 890,
                'name' => 'Huyện Tịnh Biên',
                'type' => 'Huyện',
                'province_id' => 89,
            ),
            150 =>
            array(
                'id' => 891,
                'name' => 'Huyện Tri Tôn',
                'type' => 'Huyện',
                'province_id' => 89,
            ),
            151 =>
            array(
                'id' => 892,
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'province_id' => 89,
            ),
            152 =>
            array(
                'id' => 893,
                'name' => 'Huyện Chợ Mới',
                'type' => 'Huyện',
                'province_id' => 89,
            ),
            153 =>
            array(
                'id' => 894,
                'name' => 'Huyện Thoại Sơn',
                'type' => 'Huyện',
                'province_id' => 89,
            ),
            154 =>
            array(
                'id' => 899,
                'name' => 'Thành phố Rạch Giá',
                'type' => 'Thành phố',
                'province_id' => 91,
            ),
            155 =>
            array(
                'id' => 900,
                'name' => 'Thị xã Hà Tiên',
                'type' => 'Thị xã',
                'province_id' => 91,
            ),
            156 =>
            array(
                'id' => 902,
                'name' => 'Huyện Kiên Lương',
                'type' => 'Huyện',
                'province_id' => 91,
            ),
            157 =>
            array(
                'id' => 903,
                'name' => 'Huyện Hòn Đất',
                'type' => 'Huyện',
                'province_id' => 91,
            ),
            158 =>
            array(
                'id' => 904,
                'name' => 'Huyện Tân Hiệp',
                'type' => 'Huyện',
                'province_id' => 91,
            ),
            159 =>
            array(
                'id' => 905,
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'province_id' => 91,
            ),
            160 =>
            array(
                'id' => 906,
                'name' => 'Huyện Giồng Riềng',
                'type' => 'Huyện',
                'province_id' => 91,
            ),
            161 =>
            array(
                'id' => 907,
                'name' => 'Huyện Gò Quao',
                'type' => 'Huyện',
                'province_id' => 91,
            ),
            162 =>
            array(
                'id' => 908,
                'name' => 'Huyện An Biên',
                'type' => 'Huyện',
                'province_id' => 91,
            ),
            163 =>
            array(
                'id' => 909,
                'name' => 'Huyện An Minh',
                'type' => 'Huyện',
                'province_id' => 91,
            ),
            164 =>
            array(
                'id' => 910,
                'name' => 'Huyện Vĩnh Thuận',
                'type' => 'Huyện',
                'province_id' => 91,
            ),
            165 =>
            array(
                'id' => 911,
                'name' => 'Huyện Phú Quốc',
                'type' => 'Huyện',
                'province_id' => 91,
            ),
            166 =>
            array(
                'id' => 912,
                'name' => 'Huyện Kiên Hải',
                'type' => 'Huyện',
                'province_id' => 91,
            ),
            167 =>
            array(
                'id' => 913,
                'name' => 'Huyện U Minh Thượng',
                'type' => 'Huyện',
                'province_id' => 91,
            ),
            168 =>
            array(
                'id' => 914,
                'name' => 'Huyện Giang Thành',
                'type' => 'Huyện',
                'province_id' => 91,
            ),
            169 =>
            array(
                'id' => 916,
                'name' => 'Quận Ninh Kiều',
                'type' => 'Quận',
                'province_id' => 92,
            ),
            170 =>
            array(
                'id' => 917,
                'name' => 'Quận Ô Môn',
                'type' => 'Quận',
                'province_id' => 92,
            ),
            171 =>
            array(
                'id' => 918,
                'name' => 'Quận Bình Thuỷ',
                'type' => 'Quận',
                'province_id' => 92,
            ),
            172 =>
            array(
                'id' => 919,
                'name' => 'Quận Cái Răng',
                'type' => 'Quận',
                'province_id' => 92,
            ),
            173 =>
            array(
                'id' => 923,
                'name' => 'Quận Thốt Nốt',
                'type' => 'Quận',
                'province_id' => 92,
            ),
            174 =>
            array(
                'id' => 924,
                'name' => 'Huyện Vĩnh Thạnh',
                'type' => 'Huyện',
                'province_id' => 92,
            ),
            175 =>
            array(
                'id' => 925,
                'name' => 'Huyện Cờ Đỏ',
                'type' => 'Huyện',
                'province_id' => 92,
            ),
            176 =>
            array(
                'id' => 926,
                'name' => 'Huyện Phong Điền',
                'type' => 'Huyện',
                'province_id' => 92,
            ),
            177 =>
            array(
                'id' => 927,
                'name' => 'Huyện Thới Lai',
                'type' => 'Huyện',
                'province_id' => 92,
            ),
            178 =>
            array(
                'id' => 930,
                'name' => 'Thành phố Vị Thanh',
                'type' => 'Thành phố',
                'province_id' => 93,
            ),
            179 =>
            array(
                'id' => 931,
                'name' => 'Thị xã Ngã Bảy',
                'type' => 'Thị xã',
                'province_id' => 93,
            ),
            180 =>
            array(
                'id' => 932,
                'name' => 'Huyện Châu Thành A',
                'type' => 'Huyện',
                'province_id' => 93,
            ),
            181 =>
            array(
                'id' => 933,
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'province_id' => 93,
            ),
            182 =>
            array(
                'id' => 934,
                'name' => 'Huyện Phụng Hiệp',
                'type' => 'Huyện',
                'province_id' => 93,
            ),
            183 =>
            array(
                'id' => 935,
                'name' => 'Huyện Vị Thuỷ',
                'type' => 'Huyện',
                'province_id' => 93,
            ),
            184 =>
            array(
                'id' => 936,
                'name' => 'Huyện Long Mỹ',
                'type' => 'Huyện',
                'province_id' => 93,
            ),
            185 =>
            array(
                'id' => 937,
                'name' => 'Thị xã Long Mỹ',
                'type' => 'Thị xã',
                'province_id' => 93,
            ),
            186 =>
            array(
                'id' => 941,
                'name' => 'Thành phố Sóc Trăng',
                'type' => 'Thành phố',
                'province_id' => 94,
            ),
            187 =>
            array(
                'id' => 942,
                'name' => 'Huyện Châu Thành',
                'type' => 'Huyện',
                'province_id' => 94,
            ),
            188 =>
            array(
                'id' => 943,
                'name' => 'Huyện Kế Sách',
                'type' => 'Huyện',
                'province_id' => 94,
            ),
            189 =>
            array(
                'id' => 944,
                'name' => 'Huyện Mỹ Tú',
                'type' => 'Huyện',
                'province_id' => 94,
            ),
            190 =>
            array(
                'id' => 945,
                'name' => 'Huyện Cù Lao Dung',
                'type' => 'Huyện',
                'province_id' => 94,
            ),
            191 =>
            array(
                'id' => 946,
                'name' => 'Huyện Long Phú',
                'type' => 'Huyện',
                'province_id' => 94,
            ),
            192 =>
            array(
                'id' => 947,
                'name' => 'Huyện Mỹ Xuyên',
                'type' => 'Huyện',
                'province_id' => 94,
            ),
            193 =>
            array(
                'id' => 948,
                'name' => 'Thị xã Ngã Năm',
                'type' => 'Thị xã',
                'province_id' => 94,
            ),
            194 =>
            array(
                'id' => 949,
                'name' => 'Huyện Thạnh Trị',
                'type' => 'Huyện',
                'province_id' => 94,
            ),
            195 =>
            array(
                'id' => 950,
                'name' => 'Thị xã Vĩnh Châu',
                'type' => 'Thị xã',
                'province_id' => 94,
            ),
            196 =>
            array(
                'id' => 951,
                'name' => 'Huyện Trần Đề',
                'type' => 'Huyện',
                'province_id' => 94,
            ),
            197 =>
            array(
                'id' => 954,
                'name' => 'Thành phố Bạc Liêu',
                'type' => 'Thành phố',
                'province_id' => 95,
            ),
            198 =>
            array(
                'id' => 956,
                'name' => 'Huyện Hồng Dân',
                'type' => 'Huyện',
                'province_id' => 95,
            ),
            199 =>
            array(
                'id' => 957,
                'name' => 'Huyện Phước Long',
                'type' => 'Huyện',
                'province_id' => 95,
            ),
            200 =>
            array(
                'id' => 958,
                'name' => 'Huyện Vĩnh Lợi',
                'type' => 'Huyện',
                'province_id' => 95,
            ),
            201 =>
            array(
                'id' => 959,
                'name' => 'Thị xã Giá Rai',
                'type' => 'Thị xã',
                'province_id' => 95,
            ),
            202 =>
            array(
                'id' => 960,
                'name' => 'Huyện Đông Hải',
                'type' => 'Huyện',
                'province_id' => 95,
            ),
            203 =>
            array(
                'id' => 961,
                'name' => 'Huyện Hoà Bình',
                'type' => 'Huyện',
                'province_id' => 95,
            ),
            204 =>
            array(
                'id' => 964,
                'name' => 'Thành phố Cà Mau',
                'type' => 'Thành phố',
                'province_id' => 96,
            ),
            205 =>
            array(
                'id' => 966,
                'name' => 'Huyện U Minh',
                'type' => 'Huyện',
                'province_id' => 96,
            ),
            206 =>
            array(
                'id' => 967,
                'name' => 'Huyện Thới Bình',
                'type' => 'Huyện',
                'province_id' => 96,
            ),
            207 =>
            array(
                'id' => 968,
                'name' => 'Huyện Trần Văn Thời',
                'type' => 'Huyện',
                'province_id' => 96,
            ),
            208 =>
            array(
                'id' => 969,
                'name' => 'Huyện Cái Nước',
                'type' => 'Huyện',
                'province_id' => 96,
            ),
            209 =>
            array(
                'id' => 970,
                'name' => 'Huyện Đầm Dơi',
                'type' => 'Huyện',
                'province_id' => 96,
            ),
            210 =>
            array(
                'id' => 971,
                'name' => 'Huyện Năm Căn',
                'type' => 'Huyện',
                'province_id' => 96,
            ),
            211 =>
            array(
                'id' => 972,
                'name' => 'Huyện Phú Tân',
                'type' => 'Huyện',
                'province_id' => 96,
            ),
            212 =>
            array(
                'id' => 973,
                'name' => 'Huyện Ngọc Hiển',
                'type' => 'Huyện',
                'province_id' => 96,
            ),
        ));
    }
}