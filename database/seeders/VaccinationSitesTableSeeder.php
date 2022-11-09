<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class VaccinationSitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vaccination_sites')->delete();

        DB::table('vaccination_sites')->insert(array(
            0 =>
            array(
                'id' => 1,
                'location' => 'Dịch vụ BV Nhi Đồng Cần Thơ',
                'ward_id' => '31150',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            1 =>
            array(
                'id' => 2,
                'location' => 'Bệnh viện Y học Cổ truyền TPCT',
                'ward_id' => '31147',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            2 =>
            array(
                'id' => 3,
                'location' => 'Bệnh viện Tai Mũi Họng TPCT',
                'ward_id' => '31138',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            3 =>
            array(
                'id' => 4,
                'location' => 'TYT Tân An',
                'ward_id' => '31135',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            4 =>
            array(
                'id' => 5,
                'location' => 'TYT phường An Lạc',
                'ward_id' => '31138',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            5 =>
            array(
                'id' => 6,
                'location' => 'Trung tâm y tế quận Ninh Kiều',
                'ward_id' => '31123',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            6 =>
            array(
                'id' => 7,
                'location' => 'phòng tiêm DV Đa khoa TW',
                'ward_id' => '31149',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            7 =>
            array(
                'id' => 8,
                'location' => 'Bệnh viện đa khoa Hòa Hảo Medic Cần Thơ',
                'ward_id' => '31117',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            8 =>
            array(
                'id' => 9,
                'location' => 'CDC Cần Thơ',
                'ward_id' => '31135',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            9 =>
            array(
                'id' => 10,
                'location' => 'Dịch vụ TTYT Q. NINH KIỀU',
                'ward_id' => '31132',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            10 =>
            array(
                'id' => 11,
                'location' => 'TTYT Ninh Kiều',
                'ward_id' => '31123',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            11 =>
            array(
                'id' => 12,
                'location' => 'Sở Y Tế TP Cần Thơ',
                'ward_id' => '31129',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            12 =>
            array(
                'id' => 13,
                'location' => 'Bệnh viện Quân y 121',
                'ward_id' => '31138',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            13 =>
            array(
                'id' => 14,
                'location' => 'Bệnh viện đa khoa TPCT',
                'ward_id' => '31138',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            14 =>
            array(
                'id' => 15,
                'location' => 'TYT Cái Khế',
                'ward_id' => '31117',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            15 =>
            array(
                'id' => 16,
                'location' => 'TYT An Hòa',
                'ward_id' => '31120',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            16 =>
            array(
                'id' => 17,
                'location' => 'TYT Thới Bình',
                'ward_id' => '31123',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            17 =>
            array(
                'id' => 18,
                'location' => 'TYT An Nghiệp',
                'ward_id' => '31126',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            18 =>
            array(
                'id' => 19,
                'location' => 'TYT An Cư',
                'ward_id' => '31129',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            19 =>
            array(
                'id' => 20,
                'location' => 'TYT An Bình',
                'ward_id' => '31150',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            20 =>
            array(
                'id' => 21,
                'location' => 'Bệnh viện Ung Bướu TPCT',
                'ward_id' => '31138',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            21 =>
            array(
                'id' => 22,
                'location' => 'TYT An Khánh',
                'ward_id' => '31149',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            22 =>
            array(
                'id' => 23,
                'location' => 'Dịch vụ BV QUỐC TẾ PHƯƠNG CHÂU',
                'ward_id' => '31149',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            23 =>
            array(
                'id' => 24,
                'location' => 'BV Đại Học Y Dược Cần Thơ',
                'ward_id' => '31149',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            24 =>
            array(
                'id' => 25,
                'location' => 'Phòng khám đa khoa MeKong Cần Thơ',
                'ward_id' => '31147',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            25 =>
            array(
                'id' => 26,
                'location' => 'Bệnh viện Huyết học - Truyền máu thành phố Cần Thơ',
                'ward_id' => '31149',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            26 =>
            array(
                'id' => 27,
                'location' => 'Dịch vụ BV Phụ Sản Tp Cần Thơ',
                'ward_id' => '31117',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            27 =>
            array(
                'id' => 28,
                'location' => 'BV Phụ Sản Tp Cần Thơ',
                'ward_id' => '31117',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            28 =>
            array(
                'id' => 29,
                'location' => 'Phòng khám đa khoa Hoàn Hảo',
                'ward_id' => '31149',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            29 =>
            array(
                'id' => 30,
                'location' => 'Bệnh viện Công an TP Cần Thơ',
                'ward_id' => '31117',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            30 =>
            array(
                'id' => 31,
                'location' => 'Bệnh viện đa khoa Hòa Hảo Medic Cần Thơ',
                'ward_id' => '31117',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            31 =>
            array(
                'id' => 32,
                'location' => 'Dịch vụ TT KSBT thành phố Cần Thơ',
                'ward_id' => '31135',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            32 =>
            array(
                'id' => 33,
                'location' => 'BV Đa Khoa Trung Ương Cần Thơ',
                'ward_id' => '31149',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            33 =>
            array(
                'id' => 34,
                'location' => 'TYT An Phú',
                'ward_id' => '31141',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            34 =>
            array(
                'id' => 35,
                'location' => 'TYT Xuân Khánh',
                'ward_id' => '31144',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            35 =>
            array(
                'id' => 36,
                'location' => 'TYT Hưng Lợi',
                'ward_id' => '31147',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            36 =>
            array(
                'id' => 37,
                'location' => 'BV Quận Ô Môn',
                'ward_id' => '31153',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            37 =>
            array(
                'id' => 38,
                'location' => 'TYT Châu Văn Liêm',
                'ward_id' => '31153',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            38 =>
            array(
                'id' => 39,
                'location' => 'TYT Thới Long',
                'ward_id' => '31156',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            39 =>
            array(
                'id' => 40,
                'location' => 'TYT Thới An',
                'ward_id' => '31159',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            40 =>
            array(
                'id' => 41,
                'location' => 'TYT Phước Thới',
                'ward_id' => '31162',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            41 =>
            array(
                'id' => 42,
                'location' => 'TYT Trường Lạc',
                'ward_id' => '31165',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            42 =>
            array(
                'id' => 43,
                'location' => 'TYT Long Hưng',
                'ward_id' => '31157',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            43 =>
            array(
                'id' => 44,
                'location' => 'TYT Thới Hoà',
                'ward_id' => '31154',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            44 =>
            array(
                'id' => 45,
                'location' => 'Phòng khám Đa khoa Hoàng Minh',
                'ward_id' => '31153',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            45 =>
            array(
                'id' => 46,
                'location' => 'Dịch vụ TTYTDP Ô MÔN',
                'ward_id' => '31153',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            46 =>
            array(
                'id' => 47,
                'location' => 'TTYT Ô Môn',
                'ward_id' => '31153',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            47 =>
            array(
                'id' => 48,
                'location' => 'Dịch vụ TTYT Q. BÌNH THỦY',
                'ward_id' => '31177',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            48 =>
            array(
                'id' => 49,
                'location' => 'TYT Bình Thủy',
                'ward_id' => '31168',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            49 =>
            array(
                'id' => 50,
                'location' => 'TYT Thới An Đông',
                'ward_id' => '31174',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            50 =>
            array(
                'id' => 51,
                'location' => 'TYT An Thới',
                'ward_id' => '31177',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            51 =>
            array(
                'id' => 52,
                'location' => 'TYT Long Tuyền',
                'ward_id' => '31183',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            52 =>
            array(
                'id' => 53,
                'location' => 'TYT Bùi Hữu Nghĩa',
                'ward_id' => '31178',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            53 =>
            array(
                'id' => 54,
                'location' => 'BV Quận Bình Thủy',
                'ward_id' => '31168',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            54 =>
            array(
                'id' => 55,
                'location' => 'TYT Long Hòa',
                'ward_id' => '31180',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            55 =>
            array(
                'id' => 56,
                'location' => 'TYT Trà An',
                'ward_id' => '31169',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            56 =>
            array(
                'id' => 57,
                'location' => 'TTYT Bình Thủy',
                'ward_id' => '31168',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            57 =>
            array(
                'id' => 58,
                'location' => 'TYT Trà Nóc',
                'ward_id' => '31171',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            58 =>
            array(
                'id' => 59,
                'location' => 'TYT Hưng Phú',
                'ward_id' => '31189',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            59 =>
            array(
                'id' => 60,
                'location' => 'TYT Hưng Thạnh',
                'ward_id' => '31192',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            60 =>
            array(
                'id' => 61,
                'location' => 'TYT Lê Bình',
                'ward_id' => '31186',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            61 =>
            array(
                'id' => 62,
                'location' => 'TYT Ba Láng',
                'ward_id' => '31195',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            62 =>
            array(
                'id' => 63,
                'location' => 'TYT Thường Thạnh',
                'ward_id' => '31198',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            63 =>
            array(
                'id' => 64,
                'location' => 'TTYT Cái Răng',
                'ward_id' => '31186',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            64 =>
            array(
                'id' => 65,
                'location' => 'BV Quận Cái Răng',
                'ward_id' => '31186',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            65 =>
            array(
                'id' => 66,
                'location' => 'TYT Phú Thứ',
                'ward_id' => '31201',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            66 =>
            array(
                'id' => 67,
                'location' => 'TYT Tân Phú',
                'ward_id' => '31204',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            67 =>
            array(
                'id' => 68,
                'location' => 'Dịch vụ BVĐK HOÀN MỸ - CỬU LONG',
                'ward_id' => '31201',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            68 =>
            array(
                'id' => 69,
                'location' => 'Dịch vụ BVĐK TÂY ĐÔ',
                'ward_id' => '31189',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            69 =>
            array(
                'id' => 70,
                'location' => 'Dịch vụ TTYT Q. CÁI RĂNG',
                'ward_id' => '31186',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            70 =>
            array(
                'id' => 71,
                'location' => 'TTYT Thốt Nốt',
                'ward_id' => '31219',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            71 =>
            array(
                'id' => 72,
                'location' => 'TTYTDP Q. THỐT NỐT',
                'ward_id' => '31219',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            72 =>
            array(
                'id' => 73,
                'location' => 'BV Quận Thốt Nốt',
                'ward_id' => '31219',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            73 =>
            array(
                'id' => 74,
                'location' => 'TYT Thới Thuận',
                'ward_id' => '31210',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            74 =>
            array(
                'id' => 75,
                'location' => 'TYT Trung Nhứt',
                'ward_id' => '31216',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            75 =>
            array(
                'id' => 76,
                'location' => 'TYT Thuận Hưng',
                'ward_id' => '31228',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            76 =>
            array(
                'id' => 77,
                'location' => 'TYT Thạnh Hòa',
                'ward_id' => '31217',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            77 =>
            array(
                'id' => 78,
                'location' => 'TYT Thị trấn Thốt Nốt',
                'ward_id' => '31207',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            78 =>
            array(
                'id' => 79,
                'location' => 'TYT Tân Lộc',
                'ward_id' => '31213',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            79 =>
            array(
                'id' => 80,
                'location' => 'TYT Trung Kiên',
                'ward_id' => '31219',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            80 =>
            array(
                'id' => 81,
                'location' => 'TYT Tân Hưng',
                'ward_id' => '31227',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            81 =>
            array(
                'id' => 82,
                'location' => 'TYT Thuận An',
                'ward_id' => '31212',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            82 =>
            array(
                'id' => 83,
                'location' => 'Dịch vụ TTYTDP Q. THỐT NỐT',
                'ward_id' => '31207',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            83 =>
            array(
                'id' => 84,
                'location' => 'BV Huyện Vĩnh Thạnh',
                'ward_id' => '21786',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            84 =>
            array(
                'id' => 85,
                'location' => 'TYT Thị trấn Thạnh An',
                'ward_id' => '31240',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            85 =>
            array(
                'id' => 86,
                'location' => 'TYT Thạnh Mỹ',
                'ward_id' => '31234',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            86 =>
            array(
                'id' => 87,
                'location' => 'TYT Thạnh Thắng',
                'ward_id' => '31243',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            87 =>
            array(
                'id' => 88,
                'location' => 'TYT Thạnh Quới',
                'ward_id' => '31264',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            88 =>
            array(
                'id' => 89,
                'location' => 'TYT Thạnh Lộc',
                'ward_id' => '31252',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            89 =>
            array(
                'id' => 90,
                'location' => 'TYT Thạnh Tiến',
                'ward_id' => '31241',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            90 =>
            array(
                'id' => 91,
                'location' => 'TYT Vĩnh Bình',
                'ward_id' => '31211',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            91 =>
            array(
                'id' => 92,
                'location' => 'TTYT Vĩnh Thạnh',
                'ward_id' => '31232',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            92 =>
            array(
                'id' => 93,
                'location' => 'TYT Vĩnh Trinh',
                'ward_id' => '31273',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            93 =>
            array(
                'id' => 94,
                'location' => 'TYT Thạnh An',
                'ward_id' => '31240',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            94 =>
            array(
                'id' => 95,
                'location' => 'TYT Thị trấn Vĩnh Thạnh',
                'ward_id' => '31232',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            95 =>
            array(
                'id' => 96,
                'location' => 'TYT Thạnh Lợi',
                'ward_id' => '31244',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            96 =>
            array(
                'id' => 97,
                'location' => 'Dịch vụ TTYT H.VĨNH THẠNH',
                'ward_id' => '31232',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            97 =>
            array(
                'id' => 98,
                'location' => 'Dịch vụ TTYT H. CỜ ĐỎ',
                'ward_id' => '31276',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            98 =>
            array(
                'id' => 99,
                'location' => 'TTYT Cờ Đỏ',
                'ward_id' => '31276',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            99 =>
            array(
                'id' => 100,
                'location' => 'TYT Thới Đông',
                'ward_id' => '31276',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            100 =>
            array(
                'id' => 101,
                'location' => 'TYT Đông Thắng',
                'ward_id' => '31274',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            101 =>
            array(
                'id' => 102,
                'location' => 'Bệnh viện Quân dân y',
                'ward_id' => '31261',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            102 =>
            array(
                'id' => 103,
                'location' => 'TYT Trung An',
                'ward_id' => '31222',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            103 =>
            array(
                'id' => 104,
                'location' => 'TYT Thạnh Phú',
                'ward_id' => '31249',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            104 =>
            array(
                'id' => 105,
                'location' => 'TYT Thới Hưng',
                'ward_id' => '31264',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            105 =>
            array(
                'id' => 106,
                'location' => 'TYT Thới Xuân',
                'ward_id' => '31277',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            106 =>
            array(
                'id' => 107,
                'location' => 'Phòng Y tế cơ sở',
                'ward_id' => '31261',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            107 =>
            array(
                'id' => 108,
                'location' => 'TYT Trung Thạnh',
                'ward_id' => '31225',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            108 =>
            array(
                'id' => 109,
                'location' => 'TYT Trung Hưng',
                'ward_id' => '31255',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            109 =>
            array(
                'id' => 110,
                'location' => 'TYT Đông Hiệp',
                'ward_id' => '31273',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            110 =>
            array(
                'id' => 111,
                'location' => 'TTYT Phong Điền',
                'ward_id' => '19819',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            111 =>
            array(
                'id' => 112,
                'location' => 'BV Huyện Phong Điền',
                'ward_id' => '19819',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            112 =>
            array(
                'id' => 113,
                'location' => 'TYT Mỹ Khánh',
                'ward_id' => '31315',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            113 =>
            array(
                'id' => 114,
                'location' => 'TYT Nhơn Ái',
                'ward_id' => '31300',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            114 =>
            array(
                'id' => 115,
                'location' => 'TYT Giai Xuân',
                'ward_id' => '31303',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            115 =>
            array(
                'id' => 116,
                'location' => 'TYT Tân Thới',
                'ward_id' => '31306',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            116 =>
            array(
                'id' => 117,
                'location' => 'TYT Trường Long',
                'ward_id' => '31309',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            117 =>
            array(
                'id' => 118,
                'location' => 'TYT Nhơn Nghĩa',
                'ward_id' => '31315',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            118 =>
            array(
                'id' => 119,
                'location' => 'TYT Thị trấn Phong Điền',
                'ward_id' => '19819',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            119 =>
            array(
                'id' => 120,
                'location' => 'Dịch vụ TTYT H. PHONG ĐIỀN',
                'ward_id' => '19819',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            120 =>
            array(
                'id' => 121,
                'location' => 'TTYT Thới Lai',
                'ward_id' => '31258',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            121 =>
            array(
                'id' => 122,
                'location' => 'TYT Thị trấn Thới Lai',
                'ward_id' => '31258',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            122 =>
            array(
                'id' => 123,
                'location' => 'TYT Thới Thạnh',
                'ward_id' => '31267',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            123 =>
            array(
                'id' => 124,
                'location' => 'TYT Đông Bình',
                'ward_id' => '31279',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            124 =>
            array(
                'id' => 125,
                'location' => 'TYT Đông Thuận',
                'ward_id' => '31282',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            125 =>
            array(
                'id' => 126,
                'location' => 'TYT Định Môn',
                'ward_id' => '31288',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            126 =>
            array(
                'id' => 127,
                'location' => 'TYT Trường Xuân',
                'ward_id' => '31294',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            127 =>
            array(
                'id' => 128,
                'location' => 'TYT Trường Xuân A',
                'ward_id' => '31297',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            128 =>
            array(
                'id' => 129,
                'location' => 'TYT Thới Tân',
                'ward_id' => '31285',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            129 =>
            array(
                'id' => 130,
                'location' => 'TYT Trường Xuân B',
                'ward_id' => '31298',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            130 =>
            array(
                'id' => 131,
                'location' => 'TYT Trường Thắng',
                'ward_id' => '31286',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            131 =>
            array(
                'id' => 132,
                'location' => 'TYT Tân Thạnh',
                'ward_id' => '31268',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            132 =>
            array(
                'id' => 133,
                'location' => 'Dịch vụ TTYTDP H. THỚI LAI',
                'ward_id' => '31258',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            133 =>
            array(
                'id' => 134,
                'location' => 'BV Huyện Thới Lai',
                'ward_id' => '31258',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            134 =>
            array(
                'id' => 135,
                'location' => 'TYT Xuân Thắng',
                'ward_id' => '31270',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            135 =>
            array(
                'id' => 136,
                'location' => 'TYT Trường Thành',
                'ward_id' => '31291',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
        ));
    }
}