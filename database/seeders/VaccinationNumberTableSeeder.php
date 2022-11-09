<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class VaccinationNumberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vaccination_numbers = [
            [
                'id' => 1,
                'dose' => '1',
                'description' => 'Liều cơ bản - Mũi 1'
            ],
            [
                'id' => 2,
                'dose' => '2',
                'description' => 'Liều cơ bản - Mũi 2'
            ],
            [
                'id' => 3,
                'dose' => '3',
                'description' => 'Liều cơ bản - Mũi 3'
            ],
            [
                'id' => 4,
                'dose' => '4',
                'description' => 'Liều bổ sung'
            ],
            [
                'id' => 5,
                'dose' => '5',
                'description' => 'Liều nhắc lại - Mũi 1'
            ],
            [
                'id' => 6,
                'dose' => '6',
                'description' => 'Liều nhắc lại - Mũi 2'
            ],
            [
                'id' => 7,
                'dose' => '7',
                'description' => 'Liều nhắc lại - Mũi 3'
            ],
        ];
        DB::table('vaccination_numbers')->insert($vaccination_numbers);
    }
}
