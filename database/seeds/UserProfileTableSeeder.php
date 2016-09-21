<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
Use Faker\Factory as Faker;
use App\Models\User;

class UserProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_VE');
        $userId = User::all();

        foreach ($userId as $user) {
            \DB::table('user_profiles')->insert(array(
                'name'              => $faker->unique()->name,
                'phone'             => $faker->unique()->phoneNumber,
                'extending'         => $faker->unique()->buildingNumber,
                'user_name_windows' => $faker->unique()->domainWord,
                'home_page'   => 'home',
                'created_at'     => new DateTime,
                'updated_at'     => new Datetime,
                'user_id'        => $user->id
            ));
        }

    }
}
