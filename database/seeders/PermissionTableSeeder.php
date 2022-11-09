<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->delete();
        $permissions = [
            [
                'name' => 'accounts.admin',
                'guard_name' => 'web'
            ],
            [
                'name' => 'assign.*',
                'guard_name' => 'web'
            ],
            [
                'name' => 'assign.role',
                'guard_name' => 'web'
            ],
            [
                'name' => 'assign.permission',
                'guard_name' => 'web'
            ],
            [
                'name' => 'vaccines.*',
                'guard_name' => 'web'
            ],
            [
                'name' => 'vaccines.add',
                'guard_name' => 'web'
            ],
            [
                'name' => 'vaccines.update',
                'guard_name' => 'web'
            ],
            [
                'name' => 'vaccines.delete',
                'guard_name' => 'web'
            ],
            [
                'name' => 'vaccines.show',
                'guard_name' => 'web'
            ],
            [
                'name' => 'vaccine-types.*',
                'guard_name' => 'web'
            ],
            [
                'name' => 'vaccine-types.add',
                'guard_name' => 'web'
            ],
            [
                'name' => 'vaccine-types.update',
                'guard_name' => 'web'
            ],
            [
                'name' => 'vaccine-types.delete',
                'guard_name' => 'web'
            ],
            [
                'name' => 'vaccine-types.show',
                'guard_name' => 'web'
            ],
            [
                'name' => 'sites.*',
                'guard_name' => 'web'
            ],
            [
                'name' => 'sites.add',
                'guard_name' => 'web'
            ],
            [
                'name' => 'sites.update',
                'guard_name' => 'web'
            ],
            [
                'name' => 'sites.delete',
                'guard_name' => 'web'
            ],
            [
                'name' => 'sites.show',
                'guard_name' => 'web'
            ],
            [
                'name' => 'categories.*',
                'guard_name' => 'web'
            ],
            [
                'name' => 'categories.add',
                'guard_name' => 'web'
            ],
            [
                'name' => 'categories.update',
                'guard_name' => 'web'
            ],
            [
                'name' => 'categories.delete',
                'guard_name' => 'web'
            ],
            [
                'name' => 'categories.show',
                'guard_name' => 'web'
            ],
            [
                'name' => 'priority-groups.*',
                'guard_name' => 'web'
            ],
            [
                'name' => 'priority-groups.add',
                'guard_name' => 'web'
            ],
            [
                'name' => 'priority-groups.update',
                'guard_name' => 'web'
            ],
            [
                'name' => 'priority-groups.delete',
                'guard_name' => 'web'
            ],
            [
                'name' => 'priority-groups.show',
                'guard_name' => 'web'
            ],
            [
                'name' => 'manufactures.*',
                'guard_name' => 'web'
            ],
            [
                'name' => 'manufactures.add',
                'guard_name' => 'web'
            ],
            [
                'name' => 'manufactures.update',
                'guard_name' => 'web'
            ],
            [
                'name' => 'manufactures.delete',
                'guard_name' => 'web'
            ],
            [
                'name' => 'manufactures.show',
                'guard_name' => 'web'
            ],
            [
                'name' => 'statisticals.*',
                'guard_name' => 'web'
            ],
            [
                'name' => 'statisticals.index',
                'guard_name' => 'web'
            ],

            [
                'name' => 'statisticals.district',
                'guard_name' => 'web'
            ],
            [
                'name' => 'users.*',
                'guard_name' => 'web'
            ],
            [
                'name' => 'users.export',
                'guard_name' => 'web'
            ],
            [
                'name' => 'users.import',
                'guard_name' => 'web'
            ],
            [
                'name' => 'posts.*',
                'guard_name' => 'web'
            ],
            [
                'name' => 'posts.add',
                'guard_name' => 'web'
            ],
            [
                'name' => 'posts.update',
                'guard_name' => 'web'
            ],
            [
                'name' => 'posts.delete',
                'guard_name' => 'web'
            ],
            [
                'name' => 'posts.show',
                'guard_name' => 'web'
            ],
            [
                'name' => 'posts.accept',
                'guard_name' => 'web'
            ],
            [
                'name' => 'injections.*',
                'guard_name' => 'web'
            ],
            [
                'name' => 'injections.unconfirmed',
                'guard_name' => 'web'
            ],
            [
                'name' => 'injections.confirmed',
                'guard_name' => 'web'
            ],
            [
                'name' => 'injections.accept',
                'guard_name' => 'web'
            ],

            [
                'name' => 'injections.show-registration',
                'guard_name' => 'web'
            ],
            [
                'name' => 'injections.search-registration',
                'guard_name' => 'web'
            ],
            [
                'name' => 'injections.result-registration',
                'guard_name' => 'web'
            ],
            [
                'name' => 'injections.make-certificate',
                'guard_name' => 'web'
            ],
            [
                'name' => 'injections.store-certificate',
                'guard_name' => 'web'
            ],
            [
                'name' => 'injections.print-certificate',
                'guard_name' => 'web'
            ],
            [
                'name' => 'injections.edit-dose',
                'guard_name' => 'web'
            ],
            [
                'name' => 'injections.update-dose',
                'guard_name' => 'web'
            ],
            [
                'name' => 'injections.create-info',
                'guard_name' => 'web'
            ],
            [
                'name' => 'injections.store-info',
                'guard_name' => 'web'
            ],
            [
                'name' => 'wards.*',
                'guard_name' => 'web'
            ],
            [
                'name' => 'wards.export',
                'guard_name' => 'web'
            ],
            [
                'name' => 'accounts.user',
                'guard_name' => 'web'
            ],
            [
                'name' => 'citizen.registration',
                'guard_name' => 'web'
            ],
        ];
        DB::table('permissions')->insert($permissions);
    }
}
