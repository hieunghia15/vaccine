<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        DB::table('roles')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'admin',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL

            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'vaccination admin',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'citizen',
                'guard_name' => 'web',
                'created_at' => NULL,
                'updated_at' => NULL
            ),
        ));
    }
}