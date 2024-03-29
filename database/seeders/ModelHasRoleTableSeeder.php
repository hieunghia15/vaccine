<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ModelHasRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('model_has_roles')->delete();

        DB::table('model_has_roles')->insert(array(
            0 =>
            array(
                'role_id' => 1,
                'model_type' => 'App\Models\User',
                'model_id' => '1',
            ),
            1 =>
            array(
                'role_id' => 2,
                'model_type' => 'App\Models\User',
                'model_id' => '2',
            ),
            2 =>
            array(
                'role_id' => 3,
                'model_type' => 'App\Models\User',
                'model_id' => '3',
            ),
        ));
    }
}
