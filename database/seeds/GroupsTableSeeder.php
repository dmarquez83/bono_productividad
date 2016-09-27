<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
Use Faker\Factory as Faker;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_VE');

        for($i =0; $i <15; $i ++){
            \DB::table('groups')->insert(array(
                'name' => $faker->unique()->word,
                'description' => $faker->text(200),
                'avatar' => 'avatar_group.png',
                'status' => 'A',
                'created_at'     => new DateTime,
                'updated_at'     => new Datetime,
            ));
        }
    }
}
