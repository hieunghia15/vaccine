<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'phone' => '0912345678',
                'fullname' => 'Admin',
                'day_of_birth' => NULL,
                'gender' => 'Nam',
                'address' => NULL,
                'identification' => '123456789',
                'ward_id' => 31243,
                'nationality_id' => 242,
                'ethnic_id' => 1,
                'email' => NULL,
                'password' => '$2y$10$oX71yEHU5nZYIy2p/.sdW.AmNELulUJ97DhUJtotgTQxAZLs.BHba',
            ),
            1 =>
            array(
                'id' => 2,
                'phone' => '0912345679',
                'fullname' => 'Vaccination Administrator',
                'day_of_birth' => NULL,
                'gender' => 'Nam',
                'address' => NULL,
                'identification' => '987654321',
                'ward_id' => 31243,
                'nationality_id' => 242,
                'ethnic_id' => 1,
                'email' => NULL,
                'password' => '$2y$10$Fys6aA0HU/DQyGRgdHzAQOxLvoot4oglcVuEuczNqEYAS.EuTfG1C',
            ),
            2 =>
            array(
                'id' => 3,
                'phone' => '0912345670',
                'fullname' => 'Citizen',
                'day_of_birth' => NULL,
                'gender' => 'Nam',
                'address' => 'Số 789 Đường Trần Nam Phú',
                'identification' => '832354768712',
                'ward_id' => '31149',
                'nationality_id' => 242,
                'ethnic_id' => 1,
                'email' => 'citizen@gmail.com',
                'password' => '$2y$10$uIYmqhqEx/LNGH1STwCvs.9KPa63dmYx9P6ZhLY.MrTU0jfgCNxFu',
            ),
        ));
    }
}
