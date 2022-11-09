<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RelationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relations')->delete();

        DB::table('relations')->insert(array(
            0 => array(
                'id' => 1,
                'name' => 'Bố',
            ),
            1 => array(
                'id' => 2,
                'name' => 'Mẹ',
            ),
            2 => array(
                'id' => 3,
                'name' => 'Người giám hộ',
            )
        ));
    }
}
