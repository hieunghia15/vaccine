<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProvincesTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(WardsTableSeeder::class);

        $this->call(NationTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ManufacturesTableSeeder::class);
        $this->call(PriorityGroupsTableSeeder::class);
        $this->call(VaccinationSitesTableSeeder::class);

        $this->call(EthnicsTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(RelationsTableSeeder::class);
        $this->call(VaccineTypesTableSeeder::class);
        $this->call(VaccinationNumberTableSeeder::class);
        $this->call(VaccineTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PostTableSeeder::class);

        $this->call(RoleTableSeeder::class);
        $this->call(ModelHasRoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleHasPermissionTableSeeder::class);
    }
}
