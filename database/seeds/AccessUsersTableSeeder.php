<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\AccessModules;


class AccessUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userId = User::all();
        $AccessModulesId = AccessModules::all();
        foreach ($AccessModulesId as $AccessModules) {
            foreach ($userId as $user) {
                    \DB::table('access_users')->insert(array(
                      'access_modules_id' => $AccessModules->id,
                      'users_id' => $user->id,
                      'created_at'     => new DateTime,
                      'updated_at'     => new Datetime,
                    ));
            }
        }
    }
}
