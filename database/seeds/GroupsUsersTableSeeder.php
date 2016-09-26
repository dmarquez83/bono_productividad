<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
Use Faker\Factory as Faker;
use App\Models\User;
use App\Models\Group;

class GroupsUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userId = User::all();
        $faker = Faker::create('es_VE');

        foreach ($userId as $user) {
            for ($i = 0; $i < 7; $i++) {
                \DB::table('groups_users')->insert(array(
                    'created_at' => new DateTime,
                    'updated_at' => new Datetime,
                    'user_id' => $user->id,
                    'group_id' =>$faker->numberBetween($min = 1, $max = 15)
                    //$postTags = $tags->random(rand(2, 4));
                ));
            }
        }
    }
}
