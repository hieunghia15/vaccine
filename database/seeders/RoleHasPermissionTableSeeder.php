<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RoleHasPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('role_has_permissions')->delete();

        DB::table('role_has_permissions')->insert(array(
            0 => array(
                'permission_id' => 1,
                'role_id' => 1
            ),
            1 => array(
                'permission_id' => 2,
                'role_id' => 1
            ),
            2 => array(
                'permission_id' => 5,
                'role_id' => 1
            ),
            3 => array(
                'permission_id' => 10,
                'role_id' => 1
            ),
            4 => array(
                'permission_id' => 15,
                'role_id' => 1
            ),
            5 => array(
                'permission_id' => 20,
                'role_id' => 1
            ),
            6 => array(
                'permission_id' => 25,
                'role_id' => 1
            ),
            7 => array(
                'permission_id' => 30,
                'role_id' => 1
            ),
            8 => array(
                'permission_id' => 35,
                'role_id' => 1
            ),
            9 => array(
                'permission_id' => 38,
                'role_id' => 1
            ),
            10 => array(
                'permission_id' => 41,
                'role_id' => 1
            ),
            11 => array(
                'permission_id' => 47,
                'role_id' => 1
            ),
            12 => array(
                'permission_id' => 61,
                'role_id' => 1
            ),
            13 => array(
                'permission_id' => 1,
                'role_id' => 2
            ),
            14 => array(
                'permission_id' => 35,
                'role_id' => 2
            ),
            15 => array(
                'permission_id' => 38,
                'role_id' => 2
            ),
            16 => array(
                'permission_id' => 47,
                'role_id' => 2
            ),
            17 => array(
                'permission_id' => 61,
                'role_id' => 2
            ),
            18 => array(
                'permission_id' => 63,
                'role_id' => 3
            ),
            19 => array(
                'permission_id' => 64,
                'role_id' => 3
            ),
        ));
    }
}
