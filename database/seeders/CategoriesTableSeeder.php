<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        DB::table('categories')->insert(array(
            0 => array(
                'id' => 1,
                'name' => 'Vắc xin',
                'category_slug' => 'vac-xin'
            )
        ));
    }
}
