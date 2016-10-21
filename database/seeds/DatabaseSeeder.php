<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(AdminUserTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(UserProfileTableSeeder::class);
        $this->call(GroupsUsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ModulesBackTableSeeder::class);
        $this->call(RoutesBackTableSeeder::class);
        $this->call(MenuModulesBackTableSeeder::class);
        $this->call(AccessModulesTableSeeder::class);

        Model::reguard();
    }
}
